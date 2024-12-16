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
    <section class="bg-gray-900 mt-24">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-blue-500">404</h1>
                <p class="mb-4 text-3xl tracking-tight font-bold md:text-4xl text-white">Something's missing.</p>
                <p class="mb-4 text-lg font-light text-gray-400">Sorry, we can't find that page. You'll find lots to
                    explore on the home page. </p>
                <a href="/"
                    class="inline-flex text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-blue-900 my-4">Back
                    to Homepage</a>
            </div>
        </div>
    </section>
    @include('footer')
</body>

</html>
