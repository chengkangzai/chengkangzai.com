<?php

namespace App\Http\Controllers;


use Chengkangzai\ApuSchedule\ApuSchedule;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(): Factory|View|Application
    {
        $config = Auth::user()->scheduleConfig()->first();
        $events = $config ? ApuSchedule::getSchedule($config->intake_code, $config->grouping, $config->except) : collect();
        return view('admin.home', compact('config', 'events'));
    }
}
