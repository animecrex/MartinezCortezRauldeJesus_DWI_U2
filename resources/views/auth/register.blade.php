<!DOCTYPE html>
<html lang="es">

<head>
    <title>Curso+</title>
    <meta charset="utf-8" />
    <meta name="description" content="Sistema de Gestiones" />
    <meta name="keywords" content="gestiones" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google" content="notranslate">
    <meta name="base-url" content="{{ url('/') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="http://preview.keenthemes.comauthentication/layouts/fancy/sign-in.html" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .relative.inline-flex.items-center {
            display: none;
        }
    </style>
    <script></script>
</head>

<body id="kt_body" class="app-blank">

    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    <div class="d-flex flex-stack py-2">
                    </div>
                    <div class="py-20">
                        <form id="registerForm" method="POST" class="form w-100" novalidate>
                            @csrf


                            <div class="text-center mb-11">
                                <h1 class="text-gray-900 fw-bolder mb-3">Crear Cuenta</h1>
                                <div class="text-gray-500 fw-semibold fs-6">Regístrate para continuar</div>
                            </div>

                            <div class="fv-row mb-8">
                                <input type="text" placeholder="Nombre completo" id="name" name="name"
                                    class="form-control bg-transparent" required />
                            </div>
                            <div class="fv-row mb-8">
                                <input type="text" placeholder="Usuario" maxlength="20" id="usuario" name="usuario"
                                    class="form-control bg-transparent" required />
                            </div>

                            <div class="fv-row mb-8">
                                <input type="email" placeholder="Correo electrónico" id="email" name="email"
                                    class="form-control bg-transparent" required />
                            </div>

                            <div class="fv-row mb-8">
                                <input type="password" placeholder="Contraseña" id="password" name="password"
                                    class="form-control bg-transparent" required />
                            </div>


                            <div class="fv-row mb-8">
                                <input type="password" placeholder="Confirmar contraseña" id="password_confirmation"
                                    name="password_confirmation" class="form-control bg-transparent" required />
                            </div>

                            <div class="d-grid mb-10">
                                <button type="submit" id="registerButton" class="btn btn-primary">
                                    <span class="indicator-label">Registrarse</span>
                                </button>
                            </div>

                            <div class="text-gray-500 text-center fw-semibold fs-6">
                                ¿Ya tienes cuenta?
                                <a href="{{ route('login') }}" class="link-primary">Inicia sesión</a>
                            </div>


                        </form>

                    </div>

                </div>
            </div>
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url(assets/media/misc/curso.jpg)">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <a href="index.html" class="mb-0 mb-lg-12">

                    </a>
                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src=""
                        alt="" />

                </div>
            </div>
        </div>

        <script>
            var hostUrl = "{{ asset('assets/') }}";
        </script>
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
        <script>
            history.pushState(null, null, location.href);

            window.onpopstate = function() {
                history.go(1);
            };
        </script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('assets/js/registro/registro.js?v=1.0.2') }}"></script>
    </div>
</body>


</html>
