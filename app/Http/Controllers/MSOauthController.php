<?php

namespace App\Http\Controllers;

use App\Filament\Resources\ScheduleConfigResource;
use App\Http\Services\MicrosoftGraphService;
use App\Http\Services\TokenService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\User;

class MSOauthController extends Controller
{
    private MicrosoftGraphService $MSGraphService;

    private TokenService $tokenService;

    public function __construct()
    {
        $this->MSGraphService = new MicrosoftGraphService();
        $this->tokenService = new TokenService();
    }

    public function signin(): RedirectResponse
    {
        $oauthClient = $this->MSGraphService->getOAuthClient();

        $authUrl = $oauthClient->getAuthorizationUrl();

        // Save client state so we can validate in callback
        Session::put(['oauthState' => $oauthClient->getState()]);

        // Redirect to AAD signin page
        return redirect()->away($authUrl);
    }

    public function callback(Request $request): Redirector|RedirectResponse|Application
    {
        $expectedState = Session::get('oauthState');
        $request->session()->forget('oauthState');
        $providedState = $request->query('state');

        if (! isset($expectedState)) {
            // If there is no expected state in the session, do nothing and redirect to the home page.
            return redirect(route('admin.scheduleConfig.index'));
        }

        if (! isset($providedState) || $expectedState != $providedState) {
            return redirect(route('admin.scheduleConfig.index'))
                ->with('error', 'Invalid auth state')
                ->with('errorDetail', 'The provided auth state did not match the expected value');
        }

        // Authorization code should be in the "code" query param
        $authCode = $request->query('code');
        if (isset($authCode)) {
            // Initialize the OAuth client
            $oauthClient = $this->MSGraphService->getOAuthClient();

            try {
                // Make the token request
                $accessToken = $oauthClient->getAccessToken('authorization_code', [
                    'code' => $authCode,
                ]);

                $graph = new Graph();
                $graph->setAccessToken($accessToken->getToken());

                $user = $graph->createRequest('GET', '/me?$select=displayName,mail,mailboxSettings,userPrincipalName')
                    ->setReturnType(User::class)
                    ->execute();

                $this->tokenService->storeTokens($accessToken, $user, auth()->user());
            } catch (IdentityProviderException $e) {
                return redirect(route('admin.scheduleConfig.index'))
                    ->with('error', 'Error requesting access token')
                    ->with('errorDetail', json_encode($e->getResponseBody()));
            }
        }

        return redirect(ScheduleConfigResource::getUrl('index'))
            ->with('error', $request->query('error'))
            ->with('errorDetail', $request->query('error_description'));
    }

    public function signout(): Redirector|Application|RedirectResponse
    {
        $this->tokenService->clearTokens(auth()->user());

        return redirect('/');
    }
}
