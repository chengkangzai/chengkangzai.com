<?php

namespace App\Http\Controllers;

use App\Http\Services\APUScheduleService;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class ScheduleController extends Controller
{
    public function index(): Factory|View|Application
    {
        $isDoneSetup = Auth::user()->scheduleConfig()->exists();
        $config = $isDoneSetup ? Auth::user()->scheduleConfig : null;

        return view('admin.schedule.index', compact('isDoneSetup', 'config'));
    }

    public function store(Request $request)
    {
        $request->user()->scheduleConfig()->create($request->all());
        return redirect()->route('admin.schedule.index')->with('success', 'Schedule config has been setup');
    }

    public function getGrouping(Request $request): JsonResponse|string
    {

        if ($request->has('intake_code')) {
            $grouping = app(APUScheduleService::class)->getGroupings($request->get('intake_code'));

            return response()->json($grouping);
        }
        return response()->json(['error' => 'No intake provided']);
    }
}
