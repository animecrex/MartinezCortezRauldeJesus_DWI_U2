@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading text-gray-900 fw-bold fs-3 my-0">
                        Mis suscripciones
                    </h1>
                    <p class="text-muted mt-2">
                        Cursos en los que estás inscrito actualmente.
                    </p>
                </div>
            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card">
                    <div class="card-body">

                        @if($cursos->count() > 0)
                            <div class="row g-6">
                                @foreach($cursos as $curso)
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card shadow-sm h-100">
                                            <div class="card-body">
                                                <h3 class="fs-4 fw-bold text-gray-900">
                                                    {{ $curso->nombre }}
                                                </h3>

                                                <p class="text-muted mt-3">
                                                    {{ $curso->descripcion }}
                                                </p>

                                                <div class="mt-4">
                                                    <p class="mb-1">
                                                        <strong>Maestro:</strong> {{ $curso->maestro }}
                                                    </p>
                                                    <p class="mb-1">
                                                        <strong>Horas:</strong> {{ $curso->horas }}
                                                    </p>
                                                    <p class="mb-1">
                                                        <strong>Costo:</strong> ${{ $curso->costo }}
                                                    </p>
                                                </div>

                                                <div class="mt-5">
                                                    <span class="badge badge-light-success">
                                                        Suscrito
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-20">
                                <h2 class="text-gray-900 fw-bold">
                                    No tienes cursos suscritos
                                </h2>

                                <p class="text-muted mt-3">
                                    Cuando te inscribas a un curso, aparecerá en este apartado.
                                </p>

                                <a href="{{ route('curso') }}" class="btn btn-primary mt-5">
                                    Ver cursos disponibles
                                </a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection