<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Components\TextEntry;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;

/**
 * @property Schema $form
 */
class UploadResumePage extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-text';

    protected string $view = 'filament.pages.upload-resume-page';

    public array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'resume' => 'resume.pdf',
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema->columns(2)->statePath('data')->schema([
            FileUpload::make('resume')
                ->acceptedFileTypes(['application/pdf'])
                ->openable()
                ->required()
                ->disk('public')
                ->directory('resume')
                ->visibility('public'),

            TextEntry::make('preview')
                ->columnSpanFull()
                ->visible(fn (): bool => Storage::disk('public')->exists('resume.pdf'))
                ->state(fn (): HtmlString => new HtmlString(
                    '<iframe src="'.route('public.resumePreview', ['v' => Storage::disk('public')->lastModified('resume.pdf')]).'" width="100%" height="800px"></iframe>'
                ))
                ->html(),
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
