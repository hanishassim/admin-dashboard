<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - {{ __('Dashboard') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />

        @yield('styles')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                @auth
                    @include('_includes.nav.sidebar')
                    @include('_includes.nav.topbar')

                    <div class="" style="margin-top: 100px;">
                        @yield('content')

                        @include('_includes.footer')
                    </div>

                    <!-- <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px; height: 947px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 800px;"></div></div></div> -->
                @endauth

                @guest
                    @include('_includes.nav.topbar')

                    @yield('content')
                @endguest
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/font-awesome.js') }}" type="text/javascript"></script>

        @yield('scripts')
    </body>
</html>