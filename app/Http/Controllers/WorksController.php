<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorksRequest;
use App\Http\Requests\UpdateWorksRequest;
use App\Models\Works;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Spatie\Tags\Tag;
use Storage;
use Throwable;

class WorksController extends Controller
{
    public function index(): Factory|View|Application
    {
        $works = Works::withCount('tags')->paginate(10);
        return view('admin.work.index', compact('works'));
    }

    public function create(): Factory|View|Application
    {
        $tags = Tag::all();
        return view('admin.work.create', compact('tags'));
    }

    public function store(StoreWorksRequest $request): RedirectResponse
    {
        $path = $request->file('picture')->store(Works::S3_PATH, 's3');
        try {
            DB::transaction(function () use ($request, $path) {
                $work = Works::create([
                    'name' => $request->get('name'),
                    'description' => $request->get('description'),
                    'picture_name' => basename($path),
                    'url' => $request->get('url'),
                    'github_url' => $request->get('github_url'),
                    'status' => $request->get('status'),
                ]);
                if ($request->get('tags')) {
                    $work->attachTags($request->get('tags'));
                }
                return $work;
            });
            return redirect()->route('admin.works.index')->with('success', __('Work added successfully'));
        } catch (Throwable|Exception $e) {
            Storage::disk('s3')->delete($path);
            return redirect()->route('admin.works.index')->withErrors(__('Whoops! Something went wrong. Please try again later.'));
        }
    }

    public function show(Works $work): Factory|View|Application
    {
        return view('admin.work.show', compact('work'));
    }

    public function edit(Works $work): Factory|View|Application
    {
        $tags = Tag::all();
        return view('admin.work.edit', compact('work', 'tags'));
    }

    public function update(UpdateWorksRequest $request, Works $work): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request, $work) {
                if ($request->hasFile('picture')) {
                    Storage::disk('s3')->delete(Works::S3_PATH . $work->picture_name);
                    $path = $request->file('picture')->store(Works::S3_PATH, 's3');
                }

                $work->update([
                    'name' => $request->get('name'),
                    'description' => $request->get('description'),
                    'picture_name' => !$request->hasFile('picture') ? $work->picture_name : basename($path),
                    'url' => $request->get('url'),
                    'github_url' => $request->get('github_url'),
                    'status' => $request->get('status'),
                ]);
                if ($request->get('tags')) {
                    $work->syncTags($request->get('tags'));
                }
                if ($request->missing('tags')) {
                    $work->tags()->detach();
                }
                return $work;
            });
            return redirect()->route('admin.works.index')->with('success', __('Work updated successfully'));
        } catch (Throwable $e) {
            return redirect()->route('admin.works.index')->withErrors(__('Whoops! Something went wrong. Please try again later.'));
        }
    }

    public function destroy(Works $work): RedirectResponse
    {
        $work->delete();
        if (Storage::disk('s3')->exists(Works::S3_PATH . $work->picture_name)) {
            Storage::disk('s3')->delete(Works::S3_PATH . $work->picture_name);
        }
        return back();
    }
}
