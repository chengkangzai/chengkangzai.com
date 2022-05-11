<?php

namespace App\Http\Controllers;

use App\Jobs\AddAPUScheduleToCalenderJob;
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
        $config = Auth::user()->scheduleConfig;
        $events = $config ? ApuSchedule::getSchedule($config->intake_code, $config->grouping, $config->except) : collect();

        return view('admin.schedule.index', compact('config', 'events'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->user()->scheduleConfig()->create($request->all());

        return redirect()->route('admin.scheduleConfig.index')->with('success', __('Schedule config has been setup'));
    }

    public function edit(ScheduleConfig $scheduleConfig): Factory|View|Application
    {
        $groupings = ApuSchedule::getGroupings($scheduleConfig->intake_code);
        $modules = ApuSchedule::getMODID($scheduleConfig->intake_code, $scheduleConfig->grouping);

        return view('admin.schedule.edit', compact('scheduleConfig', 'groupings', 'modules'));
    }

    public function update(Request $request, ScheduleConfig $scheduleConfig): RedirectResponse
    {
        $scheduleConfig->update($request->all());

        return redirect()->route('admin.scheduleConfig.index')->with('success', __('Schedule config has been updated'));
    }

    public function syncNow(): RedirectResponse
    {
        $config = Auth::user()->scheduleConfig;
        if (! auth()->user()->msOauth()->exists()) {
            return redirect()->route('admin.scheduleConfig.index')->withErrors(__('Please link your microsoft account first'));
        }
        AddAPUScheduleToCalenderJob::dispatch(auth()->user(), $config, AddAPUScheduleToCalenderJob::CAUSED_BY['Web']);

        return redirect()->route('admin.scheduleConfig.index')->with('success', __('Schedule has been queued for sync, it will take a few minutes'));
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
