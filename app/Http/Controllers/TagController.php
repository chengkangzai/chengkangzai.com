<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Http\Services\TagService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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

    public function store(StoreTagRequest $request): RedirectResponse
    {
        Tag::findOrCreate($request->validated());
        return redirect()->route('admin.tags.index')->with('success', __('Tag created successfully'));
    }

    public function edit(Tag $tag): Factory|View|Application
    {
        return view('admin.tag.edit', compact('tag'));
    }

    public function update(UpdateTagRequest $request, Tag $tag): RedirectResponse
    {
        $tag->update($request->validated());
        return redirect()->route('admin.tags.index')->with('success', __('Tag updated successfully'));
    }

    public function destroy(Tag $tag): RedirectResponse
    {
        if (app(TagService::class)->isTagSafeToDelete($tag) == false) {
            return redirect()->route('admin.tags.index')->withErrors(__('The Tag is been used, cant be deleted'));
        }

        $tag->delete();
        return redirect()->route('admin.tags.index')->with('success', __('Tag deleted successfully'));
    }
}
