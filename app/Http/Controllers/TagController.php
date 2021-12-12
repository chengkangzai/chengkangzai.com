<?php

namespace App\Http\Controllers;


use App\Http\Services\TagService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Tags\Tag;

class TagController extends Controller
{
    public function index(): Factory|View|Application
    {
        $tags = Tag::paginate(10);
        return view('admin.tag.index', compact('tags'));
    }

    public function create(): Factory|View|Application
    {
        return view('admin.tag.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $req = $request->validate([
            'name' => ['required', 'string']
        ]);
        Tag::findOrCreate($req);
        return redirect()->route('admin.tags.index');
    }

    public function edit(Tag $tag): Factory|View|Application
    {
        return view('admin.tag.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag): RedirectResponse
    {
        $req = $request->validate([
            'name' => ['required', 'string']
        ]);
        $tag->update($req->name);
        return redirect()->route('admin.tags.index');
    }

    public function destroy(Tag $tag): RedirectResponse
    {
        if (app(TagService::class)->isTagSafeToDelete($tag) == false) {
            return redirect()->route('admin.tags.index')->withErrors('The Tag is been used, cant be deleted');
        }

        $tag->delete();
        return redirect()->route('admin.tags.index');
    }
}
