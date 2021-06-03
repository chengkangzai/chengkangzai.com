<?php

namespace App\Http\Controllers;


use App\Http\Services\TagService;
use App\Models\Post;
use App\Models\Works;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Tags\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $tags = Tag::paginate(10);
        return view('admin.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $req = $request->validate([
            'name' => ['required', 'string']
        ]);
        Tag::findOrCreate($req);
        return redirect()->route('admin.tags.index');
    }


    /**
     * @param Tag $tag
     * @return Application|Factory|View
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Tag $tag
     * @return RedirectResponse
     */
    public function update(Request $request, Tag $tag)
    {
        $req = $request->validate([
            'name' => ['required', 'string']
        ]);
        $tag->update($req->name);
        return redirect()->route('admin.tags.index');
    }

    /**
     * @param Tag $tag
     */
    public function destroy(Tag $tag)
    {
        if (app(TagService::class)->isTagSafeToDelete($tag) == false) {
            return redirect()->route('admin.tags.index')->withErrors('The Tag is been used, cant be deleted');
        }

        $tag->delete();
        return redirect()->route('admin.tags.index');
    }
}
