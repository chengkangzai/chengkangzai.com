<?php

it('renders the home page', function () {
    $this->get(route('public.index'))->assertOk();
});

it('renders the card page', function () {
    $this->get(route('public.card'))->assertOk();
});

it('stores the chosen locale in the session', function () {
    $this->from(route('public.index'))
        ->get(route('public.setLocale', ['locale' => 'zh']))
        ->assertRedirect(route('public.index'));

    expect(session('locale'))->toBe('zh');
});

it('redirects the bare resume path to the pdf', function () {
    $this->get('/resume')->assertRedirect('resume.pdf');
});
