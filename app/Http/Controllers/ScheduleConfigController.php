<?php

namespace App\Http\Controllers;

use App\Console\Services\CalendarService;
use App\Models\ScheduleConfig;
use Auth;
use Chengkangzai\ApuSchedule\ApuSchedule;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class ScheduleConfigController extends Controller
{
    public function index(): Factory|View|Application
    {
        $isDoneSetup = Auth::user()->scheduleConfig()->exists();
        $config = $isDoneSetup ? Auth::user()->scheduleConfig : null;
        $events = $isDoneSetup ? ApuSchedule::getSchedule($config->intake_code, $config->grouping) : collect();
        return view('admin.schedule.index', compact('isDoneSetup', 'config', 'events'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->user()->scheduleConfig()->create($request->all());
        return redirect()->route('admin.scheduleConfig.index')->with('success', 'Schedule config has been setup');
    }

    public function edit(ScheduleConfig $scheduleConfig): Factory|View|Application
    {
        $groupings = ApuSchedule::getGroupings();
        return view('admin.schedule.edit', compact('scheduleConfig', 'groupings'));
    }

    public function update(Request $request, ScheduleConfig $scheduleConfig): RedirectResponse
    {
        $scheduleConfig->update($request->all());
        return redirect()->route('admin.scheduleConfig.index')->with('success', 'Schedule config has been updated');
    }

    public function syncNow(): RedirectResponse
    {
        $config = Auth::user()->scheduleConfig;
        if (!auth()->user()->msOauth()->exists()) {
            return redirect()->route('admin.scheduleConfig.index')->withErrors('Please link your microsoft account first');
        }
        app(CalendarService::class)->addEvent($config, auth()->user());
        return redirect()->route('admin.scheduleConfig.index')->with('success', 'Schedule has been synced');
    }

    public function getGrouping(Request $request): JsonResponse|string
    {
        if ($request->has('intake_code')) {
            $grouping = ApuSchedule::getGroupings($request->get('intake_code'));

            return response()->json($grouping);
        }
        return response()->json(['error' => 'No intake provided']);
    }
}
