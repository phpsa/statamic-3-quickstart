<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @isset($seotamic_title)
    @include('partials.head_tags')
    @else
    <title>@yield('title', config('app.name', 'Laravel') )</title>
    @endisset

    <link rel="icon" href="/favicon.ico" />


    @if (config('app.environment') === 'production')
    <!-- Insert analytics code here -->
    @endif


    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i"
        rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">


    @include('partials.nav_top')

    <main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
        @yield('content')
        @isset($template_content)
        {!! $template_content !!}
        @endisset
    </main>

    <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
        <ul class="flex flex-col md:flex-row justify-center list-none">
            <li class="md:mr-2">
                &copy; <a href="" title="Tighten website"></a> {{ date('Y') }}.
            </li>


        </ul>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('scripts')
</body>

</html>
