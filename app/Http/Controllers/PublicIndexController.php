<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Exception;
use Storage;

class PublicIndexController extends Controller
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $works = cache()->remember('public-Works', 60 * 60 * 24, function () {
            return Works::active()->take(6)->get()->filter(function ($work) {
                $s3 = Storage::disk('s3');
                $client = $s3->getDriver()->getAdapter();
                $imgLink = $s3->getAwsTemporaryUrl($client, Works::S3_PATH . '/' . $work->picture_name, now()->addHours(24), []);
                return $work->imgLink = $imgLink;
            });
        });
        return view('welcome', compact('works'));
    }
}
