@extends('layouts.app')

@section('styles')
    <style>
        .popover {
            max-width: none !important;
        }
    </style>

    <meta name="base-url" content="{{ url('') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="app-main flex-column flex-row-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div class="app-container container-fluid d-flex flex-stack"></div>
        </div>

        <!-- CONTENT -->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div class="app-container container-xxl">

                <form id="registrarcurso" method="POST" enctype="multipart/form-data" autocomplete="off">
                     @csrf
                     
                    @include('crearcurso.crearcurs')

                    <div class="text-center mt-5">
                        <button type="submit" id="guardar_curso" class="btn btn-primary btn-lg w-100 w-md-auto form-control">
                            💾 Guardar
                        </button>
                    </div>

                    @include('crearcurso.listadecurso')

                </form>

            </div>
        </div>

    </div>
@endsection

@section('javascript')

    <!-- CORE (OBLIGATORIO) -->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

    <!-- LIBRERÍAS -->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

    <!-- OPCIONAL -->
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>

    <!-- TU JS -->
    <script src="{{ asset('assets/js/cursos/curso.js?v=1.0.2') }}"></script>

@endsection
