<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
    <head>

        @include('include.landing.meta')

        <title>@yield('title') | SERV</title>

        @stack('before-style')

        @include('include.landing.style')

        @stack('after-style')
        
    </head>
    <body class="antiliased">
        <div class="relative">
            @include('include.landing.header')
                {{-- @include('sweetalert') --}}

                @yield('content')

            @include('include.landing.footer')

            @stack('before-script')

            @include('include.landing.script')

            @stack('after-script')

            {{-- MODAL --}}

            @include('components.modal.login')
            @include('components.modal.register')
            @include('components.modal.register-succes')
        </div>
    </body>
</html>