<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <div class = "relative flex items-top justify-center min-h-0 bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{url('/dashboard')}}" class="text-sm text-gray-700 underline">Dashboard</a>
                        @else
                            <a href="{{route('login')}}" class="text-sm text-gray-700 underline">Login</a>

                            @if (Route::has('register'))
                                <a href="{{route('register')}}" class="text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                            <a href="{{route('pages_index_public')}}" class="text-sm text-gray-700 underline">Pages</a>
                            <a href="{{route('posts_index_public')}}" class="text-sm text-gray-700 underline">Posts</a>
                            <a href="{{('home')}}" class="text-sm text-gray-700 underline">Home</a>
                            @foreach($pages_all as $page)
                                @if ($page->publish_check)
                                <a href="{{route('pages_show_public', $page->id)}}" class="hover:text-sm text-gray-700 underline">{{$page->title}}</a>
                                @endif
                            @endforeach
                    </div>
                @endif
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{$header}}
                        </div>
                    </header>
                    @endif
            </div>
        </div>
        <div class="container mx-auto">
            {{ $slot }}
        </div>
    </body>
</html>
