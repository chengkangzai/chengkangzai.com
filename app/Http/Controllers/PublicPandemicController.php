<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use SEO;

class PublicPandemicController extends Controller
{
    public function index(): Factory|View|Application
    {
        SEO::setTitle(__('COVID Dashboard'));
        SEO::setDescription(__('A Dashboard to monitoring Covid 19 Cases, HealthCare Facilities and Vaccine Status'));
        SEO::addImages(Config('app.url') . '/src/ss_pandemic.png');

        return view('public.covid.index');
    }

    public function state(): Factory|View|Application
    {
        $state = request()->has('state') ? request()->state : 'Johor';
        return view('public.covid.state', compact('state'));
    }

    public function vaccination(): Factory|View|Application
    {
        return view('public.covid.vaccination');
    }
}
