<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-sidebar-secondary-enabled="false"
    data-kt-app-toolbar-enabled="true" class="app-default">

    
    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-4 py-lg-8" data-kt-sticky="true"
            data-kt-sticky-name="app-toolbar-sticky" data-kt-sticky-offset="{default: 'false', lg: '300px'}">
            
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
                <div class="d-flex ms-auto align-items-right gap-2 gap-lg-3">
                    <!--begin::Search-->
                    
                </div>
            </div>
            <div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="dalase"
                data-kt-drawer-width="auto" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                <!--begin::Sidebar primary-->
                <div class="app-sidebar-primary">
                    <!--begin::Logo-->
                    <div class="app-sidebar-logo d-none d-md-flex flex-center pt-10 pb-2" id="kt_app_sidebar_logo">
                        <!--begin::Logo image-->
                        <a href="">
                            <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
                        </a>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Logo-->
                    <!--begin::Primary menu-->
                    <div class="app-sidebar-menu flex-grow-1 hover-scroll-overlay-y scroll-ps mx-2 my-5"
                        id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                        data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
                        <!--begin::Menu-->
                        <div id="kt_aside_menu"
                            class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6"
                            data-kt-menu="true">

                            <!-- ITEM 1: INICIO -->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item py-2">

                                <span class="menu-link menu-center">
                                    <span class="menu-icon me-0">
                                        <i class="ki-outline ki-home-2 fs-2x"></i>
                                    </span>
                                </span>

                                <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <span class="menu-section fs-5 fw-bolder ps-1 py-1"><a
                                                    href="{{ route('curso') }}">Inicio</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ITEM 2: CURSOS -->
                            

                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item py-2">

                                <span class="menu-link menu-center">
                                    <span class="menu-icon me-0">
                                        <i class="ki-outline ki-document fs-2x"></i>
                                    </span>
                                </span>

                                <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">

                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <a class="menu-link fs-5 fw-bolder ps-1 py-1"
                                                href="{{ route('crearcurso') }}">
                                                Crear curso
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <a class="menu-link fs-5 fw-bolder ps-1 py-2"
                                                href="{{ route('maestros') }}">
                                                Registrar maestro
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>

                        <!--end::Menu-->
                    </div>
                    <!--end::Primary menu-->
                    <!--begin::Footer-->
                    <div class="d-flex flex-column flex-center pb-4 pb-lg-8" id="kt_app_sidebar_footer">
                        <!--begin::User menu-->
                        <div class="cursor-pointer symbol symbol-40px symbol-circle"
                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-attach="parent"
                            data-kt-menu-placement="right-end">
                            <img src="assets/media/avatars/300-2.jpg" alt="user" />
                        </div>
                        <!--begin::User account menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="assets/media/avatars/300-2.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
                                            
                                        </div>
                                        <a href="#"
                                            class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="{{ route('vistaperfil')}}" class="menu-link px-5">Mi perfil</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->

                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="{{ route('mis-suscripciones') }}" class="menu-link px-5">
                                    Mis suscripciones
                                </a>
                            </div>

                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title position-relative">Mode
                                        <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                            <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
                                            <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
                                        </span></span>
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-outline ki-night-day fs-2"></i>
                                            </span>
                                            <span class="menu-title">Light</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-outline ki-moon fs-2"></i>
                                            </span>
                                            <span class="menu-title">Dark</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-outline ki-screen fs-2"></i>
                                            </span>
                                            <span class="menu-title">System</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->


                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Cerrrar seción') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::User account menu-->
                    </div>
                    <!--end::Footer-->

                </div>
            </div>
        </div>
</body>
