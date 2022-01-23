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
use Livewire\Component;
use Spatie\Tags\Tag;
use Str;

class CreateModal extends Component implements HasForms
{
    use InteractsWithForms;

    public function mount()
    {
        $this->form->fill();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.post.create-modal');
    }

    public function store()
    {
        $formData = $this->validate();
        $post = Post::create([
            'title' => $formData['title'],
            'slug' => Str::slug($formData['title']),
            'status' => $formData['status'],
            'content' => $formData['content'],
        ]);

        $post->attachTags($formData['tags']);

        Session::flash('success', __('Post created successfully'));
        $this->redirectRoute('admin.posts.index');
        $this->emit('postAdded');
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make()
                ->schema([
                    TextInput::make('title')
                        ->unique()
                        ->columnSpan([
                            'default' => 1,
                            'lg' => 2,
                        ])
                        ->required()
                        ->autofocus()
                        ->label(__('Title')),
                    Select::make('status')
                        ->options(Post::STATUS)
                        ->required()
                        ->default('DRAFT')
                        ->label(__('Status')),
                    MultiSelect::make('tags')
                        ->options(Tag::all()->pluck('name', 'name')->toArray())
                        ->required()
                        ->label(__('Tags')),
                    RichEditor::make('content')
                        ->columnSpan([
                            'default' => 1,
                            'lg' => 2,
                        ])
                        ->required()
                        ->fileAttachmentsDisk('s3')
                        ->fileAttachmentsDirectory('chengkangzai.com/posts')
                        ->label(__('Content'))
                        ->placeholder(__('The content of the post.'))
                ])

        ];
    }

    protected function getFormModel(): Post
    {
        return new Post();
    }
}
