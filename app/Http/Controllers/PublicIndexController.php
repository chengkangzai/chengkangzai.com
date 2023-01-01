<?php

namespace App\Http\Controllers;

use App\Http\Services\GetTopGithubCommitRankService;
use App\Models\Works;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class PublicIndexController extends Controller
{
    public function index(): Factory|View|Application
    {
        $age = Carbon::parse('1999-05-03')->age;
        SEOTools::setTitle(__('Ching Cheng Kang').' - '.__('Profile'));
        SEOTools::setDescription(__("I'm :age-year-old Malaysian that passionate about making software that simplify people's life.", ['age' => $age]));

        $rank = app(GetTopGithubCommitRankService::class)->getTopGithubCommitRank();

        $works = Cache::remember('public-Works', 60 * 60 * 24, function () {
            return Works::active()->take(6)->get();
        });

        return view('welcome', compact('works', 'rank'));
    }
}
