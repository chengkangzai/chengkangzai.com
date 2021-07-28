<?php

namespace App\Http\Controllers;

use App\Http\Services\CovidService;
use SEO;

class PublicPandemicController extends Controller
{
    public function index()
    {
        SEO::setTitle('COVID Dashboard');
        $dashboardValue = app(CovidService::class)->getDashboardValue();

        return view('public.covid.index', compact('dashboardValue'));
    }
}
