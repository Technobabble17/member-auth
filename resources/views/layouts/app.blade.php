<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/site.css', 'resources/js/site.js'])
</head>

<body class="bg-gray-900">
    @include('nav')
    <main class="prose min-h-dvh max-w-screen-xl mx-auto p-4 mt-16">
        @if (session('status'))
            <div id="status-alert" data-timeout="3000" class="fixed top-24 right-24 text-green-500 bg-gray-900 w-fit rounded-md my-1 ml-auto">
                <p class="text-right px-2 py-1">{{ session('status') }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div id="error-alert" data-timeout="3000" class="fixed top-24 right-24 text-red-500 bg-gray-900 w-fit rounded-md my-1 ml-auto">
                <p class="text-right px-2 py-1">The submission failed!</p>
            </div>
        @endif

        @if (session('success'))
            <div id="success-alert" data-timeout="3000"
                class="fixed top-24 right-24 text-green-500 bg-gray-900 w-fit rounded-md my-1 ml-auto">
                <p class="text-right px-2 py-1">{{ session('success') }}</p>
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
