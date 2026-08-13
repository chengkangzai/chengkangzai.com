<?php

use App\Models\User;

it('serves public pages with public cache headers and no cookies', function (string $uri) {
    $response = $this->get($uri);

    $response->assertOk();
    expect((string) $response->headers->get('Cache-Control'))
        ->toContain('public')
        ->toContain('s-maxage=86400');
    expect($response->headers->getCookies())->toBeEmpty();
})->with(['/', '/card']);

it('does not cache the admin panel', function () {
    $response = $this->get('/admin/login');

    expect((string) $response->headers->get('Cache-Control'))->not->toContain('s-maxage');
});

it('does not cache responses for authenticated users', function () {
    $response = $this->actingAs(User::factory()->make())->get('/');

    expect((string) $response->headers->get('Cache-Control'))->not->toContain('s-maxage');
});

it('does not cache error responses', function () {
    $response = $this->get('/definitely-missing-page');

    expect((string) $response->headers->get('Cache-Control'))->not->toContain('s-maxage');
});
