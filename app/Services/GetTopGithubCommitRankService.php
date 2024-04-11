<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;

class GetTopGithubCommitRankService
{
    public function getTopGithubCommitRank(): int
    {
        try {
            $response = Http::get('https://raw.githubusercontent.com/gayanvoice/top-github-users/main/markdown/public_contributions/malaysia.md');
            $body = $response->body();
            $rows = str($body)
                ->between('<tbody>', '</tbody>')
                ->explode('<tr>');

            return collect($rows)
                ->filter(fn ($item) => str($item)->contains('chengkangzai'))
                ->map(fn ($_, $index) => $index)
                ->whenEmpty(fn () => collect([0 => 0]))
                ->values()
                ->first();
        } catch (Exception $exception) {
            return 0;
        }
    }
}
