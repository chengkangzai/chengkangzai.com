<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class GetTopGithubCommitRankService
{
    public function getTopGithubCommitRank(): string|int
    {
        $response = Http::get('https://commits.top/malaysia.html');
        $thml = $response->body();
        $datas = explode('<tbody>', $thml)[1];
        $datas = explode('</tbody', $datas)[0];
        $datas = explode('<tr>', $datas);

        array_shift($datas);
        $rank = 0;
        foreach ($datas as $data) {
            $record = explode('<td>', $data);
            $index = explode('.</td>', $record[1])[0];
            $url = explode('</a>', explode('">', $record[2])[1])[0];
            if (preg_match('/chengkangzai/i', $url)) {
                $rank = $index;
            }
        }

        return $rank;
    }
}
