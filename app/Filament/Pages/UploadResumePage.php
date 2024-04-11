<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;

/**
 * @property ComponentContainer $form
 */
class UploadResumePage extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.upload-resume-page';

    public array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'resume' => 'resume.pdf'
        ]);
    }

    public function form(Form $form): Form
    {
        return $form->columns(2)->statePath('data')->schema([
            FileUpload::make('resume')
                ->acceptedFileTypes(['application/pdf'])
                ->openable()
                ->required()
                ->disk('public')
                ->directory('resume')
                ->visibility('public'),

            Placeholder::make('preview')
                ->columnSpanFull()
                ->visible(Storage::disk('public')->exists('resume.pdf'))
                ->content(new HtmlString('<iframe src="' . asset('resume.pdf') . '" width="100%" height="800px"></iframe>')),
        ]);
    }

    public function getSubmitButton()
    {
        return Action::make('submit')
            ->action('submit');
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        Storage::disk('public')->move($data['resume'], 'resume.pdf');

        Notification::make('Resume uploaded successfully!')
            ->success()
            ->title('Success')
            ->body('Resume has been uploaded successfully!')
            ->send();
    }
}
