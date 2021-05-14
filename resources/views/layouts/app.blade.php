<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('cdn')
    @yield('style')
</head>
<body>
<div class="w-full h-screen bg-gray-200 dark:bg-gray-900 ">
    <header class="bg-teal-100">
        <nav class="flex justify-between w-full from-blue-400 bg-gradient-to-r to-purple-600 text-white p-4">
            <a href="/"><span class="font-semibold text-xl tracking-tight">{{ config('app.name') }}</span></a>
            <div class="md:items-center md:w-auto flex">
                <div class="md:flex hidden">
                    <a class="block md:text-white mr-4" href="/link">Link 1</a>
                    <a class="block md:text-white mr-4" href="/link">Link 2</a>
                    <a class="block md:text-white mr-4" href="/link">Link 3</a>
                    <a class="block md:text-white mr-4" href="/link">Link 4</a>
                </div>
                <div class="flex text-sm">
                    @auth
                        <a class="p-2 ml-2 bg-white text-gray-500 font-semibold leading-none border border-gray-100 rounded hover:border-transparent hover:bg-gray-100"
                           href="{{route('logout')}}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @endauth
                    @guest
                        <a class="p-2 ml-2 bg-teal-500 text-gray-100 font-semibold leading-none border border-teal-600 rounded hover:border-transparent hover:bg-teal-600"
                           href="{{route('login')}}">{{__('Login')}}</a>
                    @endguest
                </div>
            </div>
        </nav>
    </header>
    <main class="flex h-auto bg-white dark:bg-black ">
        @yield('content')
    </main>

</div>
</body>
    @yield('script')
</html>
