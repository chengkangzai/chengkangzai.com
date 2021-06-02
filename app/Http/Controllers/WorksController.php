<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorksRequest;
use App\Http\Requests\UpdateWorksRequest;
use App\Models\Works;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Storage;
use Throwable;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $works = Works::with('tags')->paginate(10);
        return view('admin.work.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.work.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreWorksRequest $request
     * @return RedirectResponse
     * @throws Throwable
     */
    public function store(StoreWorksRequest $request): RedirectResponse
    {
        $path = $request->file('picture')->store(Works::S3_PATH, 's3');
        DB::transaction(function () use ($request, $path) {
            $work = Works::create([
                'name' => $request->name,
                'description' => $request->description,
                'picture_name' => basename($path),
                'url' => $request->url,
                'github_url' => $request->github_url,
                'status' => $request->status,
            ]);
            if ($request->get('tags')) {
                $work->attachTags($request->get('tags'));
            }
            return $work;
        });
        return redirect()->route('admin.home');
    }

    /**
     * Display the specified resource.
     *
     * @param Works $work
     * @return Application|Factory|View
     */
    public function show(Works $work)
    {
        $s3 = Storage::disk('s3');
        $client = $s3->getDriver()->getAdapter();
        $imgLink = $s3->getAwsTemporaryUrl($client, Works::S3_PATH . '/' . $work->picture_name, now()->addHours(24), []);

        return view('admin.work.show', compact('work', 'imgLink'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Works $work
     * @return Application|Factory|View
     */
    public function edit(Works $work)
    {
        return view('admin.work.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateWorksRequest $request
     * @param Works $work
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(UpdateWorksRequest $request, Works $work)
    {
        DB::transaction(function () use ($request, $work) {
            if ($request->hasFile('picture')) {
                Storage::disk('s3')->delete(Works::S3_PATH . $work->picture_name);
                $path = $request->file('picture')->store(Works::S3_PATH, 's3');
            }

            $work->update([
                'name' => $request->name,
                'description' => $request->description,
                'picture_name' => !$request->hasFile('picture') ? $work->picture_name : basename($path),
                'url' => $request->url,
                'github_url' => $request->github_url,
                'status' => $request->status,
            ]);
            if ($request->get('tags')) {
                $work->attachTags($request->get('tags'));
            }
            return $work;
        });
        $work->update($request->validated());
        return redirect()->route('admin.works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Works $work
     * @return RedirectResponse
     */
    public function destroy(Works $work): RedirectResponse
    {
        $work->delete();
        return back();
    }
}
