<?php

use App\Filament\Pages\UploadResumePage;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(User::factory()->make([
        'email' => 'admin@admin.com',
    ]));
});

it('points the preview iframe at the inline route, not the download route', function () {
    expect(Storage::disk('public')->exists('resume.pdf'))->toBeTrue();

    $html = Livewire::test(UploadResumePage::class)->assertOk()->html();

    expect($html)->toContain('resume-preview.pdf')
        ->and($html)->not->toContain('src="'.url('resume.pdf').'"');
});

it('serves the preview inline and the public route as a download', function () {
    $this->get(route('public.resumePreview'))
        ->assertOk()
        ->assertHeader('content-disposition', 'inline; filename=resume.pdf');

    $this->get(route('public.resume'))
        ->assertOk()
        ->assertHeader('content-disposition', 'attachment; filename=resume.pdf');
});
