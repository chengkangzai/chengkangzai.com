<?php

namespace App\Http\Livewire\Admin\Work;

use App\Models\Works;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use LivewireUI\Modal\ModalComponent;
use Spatie\Tags\Tag;

class CreateModal extends ModalComponent implements HasForms
{
    use InteractsWithForms;

    public function mount()
    {
        $this->form->fill([]);
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.work.create-modal');
    }

    public function store()
    {
        $formData = $this->form->validate();

        $work = new Works();
        $work->name = $formData['name'];
        $work->status = $formData['status'];
        $work->url = $formData['url'];
        $work->github_url = $formData['github_url'];
        $work->picture_name = 'picture';
        $work->setTranslations('description', [
            'zh' => $formData['description_zh'],
            'en' => $formData['description_en'],
        ]);
        $work->save();

        $work->attachTags($formData['tags']);


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
                        ->options(Works::STATUS)
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
                    SpatieMediaLibraryFileUpload::make('picture')
                        ->columnSpan([
                            'default' => 1,
                            'lg' => 2,
                        ])
                        ->image()
                        ->required()
                        ->label(__('Image')),
                    Textarea::make('description_zh')
                        ->required()
                        ->columnSpan([
                            'default' => 1,
                            'lg' => 2,
                        ])
                        ->label(__('Description (Chinese)')),
                    Textarea::make('description_en')
                        ->required()
                        ->columnSpan([
                            'default' => 1,
                            'lg' => 2,
                        ])
                        ->label(__('Description (English)')),
                ])

        ];
    }

    protected function getFormModel(): Works
    {
        return new Works();
    }
}
