<?php

namespace App\Http\Controllers;

use SEO;

class PublicPandemicController extends Controller
{
    public function index()
    {
        SEO::setTitle(__('COVID Dashboard'));
        SEO::setDescription(__('A Dashboard to monitoring Covid 19 Cases, HealthCare Facilities and Vaccine Status'));

        return view('public.covid.index');
    }
}
