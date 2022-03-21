<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="p-0 m-0 text-base ">
        <div id="print-area">
        <div id="page">
        @include('_partials.header')

        <main class="break-words lg:max-w-5xl lg:py-8 lg:px-24 lg:my-0 lg:mx-auto md:py-8 md:px-16 md:text-lg py-8 px-4 text-base">
            @yield('body')
        </div>
        </div>

        @include('_partials.footer')

        </main>



    </body>
</html>
