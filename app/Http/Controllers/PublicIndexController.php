<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Http;
use Storage;

class PublicIndexController extends Controller
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $age = Carbon::parse("1999-05-03")->age;
        SEOTools::setTitle(__('Ching Cheng Kang') . " - " . __('Profile'));
        SEOTools::setDescription(__("I'm :age-year-old Malaysian that passionate about making software that simplify people's life.", ['age' => $age]));

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


        $works = cache()->remember('public-Works', 60 * 60 * 24, function () {
            return Works::active()->take(6)->get()->filter(function ($work) {
                $s3 = Storage::disk('s3');
                $client = $s3->getDriver()->getAdapter();
                $imgLink = $s3->getAwsTemporaryUrl($client, Works::S3_PATH . '/' . $work->picture_name, now()->addHours(24), []);
                return $work->imgLink = $imgLink;
            });
        });
        return view('welcome', compact('works', 'rank'));
    }
}
