@extends('layouts.app')

@section('styles')
    <style>
        .popover {
            max-width: none !important;
        }
    </style>
    <meta name="base-url" content="{{ url('') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
@endsection

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <form name="" id="" class="form" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    <div class="d-flex flex-column flex-column-fluid">

                        @include('cursos.pagcurso')

         
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection






@section('javascript')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/cursoss/cursos.js?v=1.0.2') }}"></script>
@endsection
