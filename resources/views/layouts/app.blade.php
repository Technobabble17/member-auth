<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/site.css', 'resources/js/site.js'])
</head>
<body class="bg-slate-400">
    @include('nav')

    <main class="prose min-h-dvh max-w-screen-xl mx-auto p-4 mt-16">
        @yield('content')
    </main>

    @include('footer')

</body>
</html>
