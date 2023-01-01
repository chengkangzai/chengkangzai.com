<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    {!! SEO::generate(true) !!}
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="https://www.googletagmanager.com/gtag/js?id=G-G0TL352WKG"></script>
    <script defer>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-G0TL352WKG', {
            cookie_flags: 'SameSite=None;Secure'
        });
    </script>
    <script src="//unpkg.com/alpinejs" defer></script>
    @stack('cdn')
    @stack('style')
    @laravelPWA
    @livewireStyles
</head>

<body>
    <div x-data="{ sidebarOpen: false }" class="font-roboto flex h-screen bg-gray-200">
        @include('layouts.navigation')

        <div class="flex flex-1 flex-col overflow-hidden">
            @include('layouts.header')

            <main class="flex-1 overflow-y-auto overflow-x-hidden bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    <h3 class="mb-4 text-3xl font-medium text-gray-700">
                        @yield('header')
                    </h3>

                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
@livewireScripts
@livewire('livewire-ui-modal')
@stack('script')

</html>
