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
        $isDoneSetup = $config->exists();
        $events = $isDoneSetup ? ApuSchedule::getSchedule($config->intake_code, $config->grouping) : collect();
        return view('admin.home', compact('isDoneSetup', 'events'));
    }
}
