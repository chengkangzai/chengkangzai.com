<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;
use Exception;
use Storage;

class PublicIndexController extends Controller
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $age = Carbon::parse("1999-05-03")->age;
        SEOTools::setTitle('Profile');
        SEOTools::setDescription("I'm $age -year-old Malaysian Fullstack Developer that passionate about making software that simplify people's life.");

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
