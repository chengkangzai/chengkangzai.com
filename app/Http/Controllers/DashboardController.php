<?php

namespace App\Http\Controllers;


use App\Http\Services\APUScheduleService;
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
        $events = $isDoneSetup ? app(APUScheduleService::class)->getSchedule($config->intake_code, $config->grouping)->get() : collect();
        return view('admin.home', compact('isDoneSetup', 'events'));
    }
}
