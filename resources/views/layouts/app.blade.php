<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/site.css', 'resources/js/site.js'])
</head>

<body class="bg-slate-400">
    @include('nav')

    <main class="prose min-h-dvh max-w-screen-xl mx-auto p-4 mt-16">
        @if (session('status'))
            <div id="status-alert" data-timeout="3000" class="alert alert-success ml-auto">
                <p class="text-right">{{ session('status') }}</p>
            </div>
        @endif
        @yield('content')
    </main>

    @include('footer')
    <button id="scrollToTop" class="hidden fixed bottom-2 right-2 bg-blue-500 text-white py-4 px-5 rounded-full">
        ↑
    </button>
</body>

</html>
