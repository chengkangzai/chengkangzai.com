<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;

class GetTopGithubCommitRankService
{
    public function getTopGithubCommitRank(): int
    {
        try {
            $response = Http::get('https://commits.top/malaysia.html');
            $body = $response->body();
            $rows = str($body)
                ->between('<tbody>', '</tbody>')
                ->explode('<tr>');

            return collect($rows)
                ->filter(fn($item) => str($item)->contains('chengkangzai'))
                ->map(fn($_, $index) => $index)
                ->whenEmpty(fn() => collect([0 => 0]))
                ->values()
                ->first();
        } catch (Exception $exception) {
            return 0;
        }
    }
}
