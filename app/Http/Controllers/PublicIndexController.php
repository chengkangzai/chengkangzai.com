<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Services\GetTopGithubCommitRankService;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class PublicIndexController
{
    public function index(): View
    {
        $age = Carbon::parse('1999-05-03')->age;
        $rank = app(GetTopGithubCommitRankService::class)->getTopGithubCommitRank();
        $works = Project::where('is_active', true)->get();

        return view('welcome', [
            'projects' => $works,
            'rank' => $rank,
            'SEOData' => new SEOData(
                title: __('Ching Cheng Kang').' - '.__('Profile'),
                description: __("I'm :age-year-old Malaysian that passionate about making software that simplify people's life.", ['age' => $age]),
            ),
        ]);
    }

    public function card()
    {
        return view('card');
    }

    public function resume()
    {
        $path = 'resume.pdf';

        if (! Storage::disk('public')->exists($path)) {
            abort(404);
        }

        return Storage::disk('public')->download($path);
    }
}
