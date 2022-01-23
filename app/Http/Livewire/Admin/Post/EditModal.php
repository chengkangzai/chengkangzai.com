<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;
use LivewireUI\Modal\ModalComponent;
use Spatie\Tags\Tag;
use Str;

class EditModal extends ModalComponent implements HasForms
{
    use InteractsWithForms;

    public $post;

    public function mount($post)
    {
        $this->post = $post;
        $this->form->fill([
            'title' => $post->title,
            'content' => $post->content,
            'status' => $post->status,
            'tags' => $post->tags->pluck('name')->toArray(),
        ]);
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.post.edit-modal');
    }

    public function store()
    {
        $formData = $this->validate();
        $this->post->update([
            'title' => $formData['title'],
            'slug' => Str::slug($formData['title']),
            'status' => $formData['status'],
            'content' => $formData['content'],
        ]);
        $this->post->syncTags($formData['tags']);

        Session::flash('success', __('Post updated successfully'));
        $this->redirectRoute('admin.posts.index');
        $this->emit('postUpdated');
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make()
                ->schema([
                    TextInput::make('title')
                        ->columnSpan([
                            'default' => 1,
                            'lg' => 2,
                        ])
                        ->required()
                        ->autofocus()
                        ->rules([
                            'unique:posts,title,' . $this->post->id,
                        ])
                        ->label(__('Title')),
                    Select::make('status')
                        ->options(Post::STATUS)
                        ->required()
                        ->label(__('Status')),
                    MultiSelect::make('tags')
                        ->options(Tag::all()->pluck('name', 'name')->toArray())
                        ->required()
                        ->label(__('Tags')),
                    RichEditor::make('content')
                        ->extraAttributes([
                            'class' => '',
                        ])
                        ->columnSpan([
                            'default' => 1,
                            'lg' => 2,
                        ])
                        ->required()
                        ->fileAttachmentsDisk('s3')
                        ->fileAttachmentsDirectory('chengkangzai.com/posts')
                        ->label(__('Content'))
                ])

        ];
    }

    protected function getFormModel(): Post
    {
        return new Post();
    }
}
