<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Curso+</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body id="kt_app_body" class="app-default">

    <div class="d-flex flex-column flex-root app-root">
        <div class="app-page flex-column flex-column-fluid">

            {{-- HEADER --}}
            @include('partials.header')

            {{-- WRAPPER (CLAVE) --}}
            <div class="app-wrapper d-flex">

                {{-- SIDEBAR --}}
                @include('partials.sidebar')

                {{-- MAIN --}}
                <div class="app-main flex-column flex-row-fluid">

                    {{-- CONTENT --}}
                    <div class="app-content flex-column-fluid p-5">
                        @yield('content')
                    </div>

                </div>

            </div>

            {{-- FOOTER --}}


        </div>
        @include('partials.footer')
    </div>

    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

    @yield('javascript')

</body>

</html>
