<?php

namespace App\Http\Livewire\Admin\Work;

use App\Models\Post;
use App\Models\Works;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Spatie\Tags\Tag;

class EditModal extends Component implements HasForms
{
    use InteractsWithForms;

    public $work;

    public function mount($work)
    {
        $this->work = Works::findOrFail($work);

        $this->form->fill([
            'title' => $this->work->title,
            'description' => $this->work->description,
            'image' => $this->work->image,
            'tags' => $this->work->tags->pluck('name')->toArray(),
        ]);

    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.work.edit-modal');
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make()
                ->schema([
                    TextInput::make('name')
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
                    TextInput::make('url')
                        ->url()
                        ->required()
                        ->label(__('Project URL')),
                    TextInput::make('github_url')
                        ->url()
                        ->required()
                        ->label(__('Project Repo')),
                    FileUpload::make('image')
                        ->columnSpan([
                            'default' => 1,
                            'lg' => 2,
                        ])
                        ->image()
                        ->required()
                        ->label(__('Image')),
                    Textarea::make('description_en')
                        ->required()
                        ->columnSpan([
                            'default' => 1,
                            'lg' => 2,
                        ])
                        ->label(__('Description (English)')),
                    Textarea::make('description_zh')
                        ->required()
                        ->columnSpan([
                            'default' => 1,
                            'lg' => 2,
                        ])
                        ->label(__('Description (Chinese)')),
                ])

        ];
    }

    protected function getFormModel(): Works
    {
        return new Works();
    }
}
