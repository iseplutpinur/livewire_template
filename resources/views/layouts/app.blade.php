<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="KaijuThemes">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- CSS --}}
    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>
    <link type="text/css" href="{{ asset('templates/assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('templates/assets/fonts/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('templates/assets/css/styles.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('templates/assets/plugins/iCheck/skins/minimal/blue.css') }}" rel="stylesheet">
    {{-- JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('templates/assets/js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/js/jqueryui-1.10.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/js/enquire.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/velocityjs/velocity.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/velocityjs/velocity.ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/wijets/wijets.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/codeprettifier/prettify.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/bootstrap-switch/bootstrap-switch.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/iCheck/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>.modal-backdrop { opacity: 0 !important; }</style>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @livewireStyles
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
</head>
<body class="">
    <div id="app">
        <header id="topnav" class="navbar navbar-fixed-top navbar-bluegray" role="banner">

            <div class="logo-area">
                <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
                    <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
                        <span class="icon-bg">
                            <i class="ti ti-menu"></i>
                        </span>
                    </a>
                </span>

                <a class="navbar-brand" href="javascript:void(0)">Avenxo</a>

            </div><!-- logo-area -->

            <ul class="nav navbar-nav toolbar pull-right">

                <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
                    <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i></a>
                </li>

                <li class="dropdown toolbar-icon-bg">
                    <a href="#" class="dropdown-toggle username" data-toggle="dropdown">
                        <img class="img-circle" src="http://placehold.it/300&text=Placeholder" alt="" />
                    </a>
                    <ul class="dropdown-menu userinfo arrow">
                        <li><a href="#/"><i class="ti ti-user"></i><span>Profile</span><!-- <span class="badge badge-info pull-right">info</span> --></a></li>
                        <li><a href="#/"><i class="ti ti-panel"></i><span>Account</span></a></li>
                        <li><a href="#/"><i class="ti ti-settings"></i><span>Settings</span></a></li>
                        <li class="divider"></li>
                        <li><a href="#/"><i class="ti ti-stats-up"></i><span>Earnings</span></a></li>
                        <li><a href="#/"><i class="ti ti-view-list-alt"></i><span>Statement</span></a></li>
                        <li><a href="#/"><i class="ti ti-money"></i><span>Withdrawals</span></a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)" onclick="(confirm('Are you sure ?')) ? $('#form-logout').submit() : ''"><i class="ti ti-shift-right"></i><span>Sign Out</span></a></li>
                    </ul>
                </li>
                <form action="{{ url('logout') }}" method="post" id="form-logout">
                    @csrf
                </form>
            </ul>
        </header>

        <main class="">
            <div id="wrapper">
                <div id="layout-static">
                    <div class="static-sidebar-wrapper sidebar-default">
                        <div class="static-sidebar">
                            <div class="sidebar">
                                <div class="widget">
                                    <div class="widget-body" style="padding-top: 50px">
                                        <div class="userinfo">
                                            <div class="avatar">
                                                <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                            </div>
                                            <div class="info">
                                                <span class="username">{{ auth()->user()->name }}</span>
                                                <span class="useremail">{{ auth()->user()->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget stay-on-collapse" id="widget-sidebar">
                                    @include('layouts.navigation')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="static-content-wrapper" style="padding-top: 70px">
                        <div class="static-content">
                            <div class="page-content">
                                @php
                                    $breadcrumb = request()->path();
                                @endphp
                                {{ Breadcrumbs::render($breadcrumb) }}
                                {{ $slot ?? '' }}
                            </div> <!-- #page-content -->
                        </div>
                        <footer role="contentinfo">
                            <div class="clearfix">
                                <ul class="list-unstyled list-inline pull-left">
                                    <li><h6 style="margin: 0;">&copy; 2015 Avenxo</h6></li>
                                </ul>
                                <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="javascriptload"></div>
    <script>
        $( document ).on('turbolinks:load', function()
        {
            $('#javascriptload').html(`<script type="text/javascript" src="{{ asset('templates/assets/js/application.js') }}"><\/script>`)

            window.livewire.on('closeModal', modal => {
                $(`#${modal}`).modal('hide')
            })

            window.livewire.on('alert', (content, status = 'success', position = 'center') => {
                Swal.fire({
                    position: position,
                    icon: status,
                    title: content,
                    showConfirmButton: false,
                    timer: 1000,
                })
            })

            window.livewire.on('confirm', (id, type = 'delete', title = 'Are you sure?', content = '', icon = 'warning') => {
                Swal.fire({
                    title: title,
                    text: content,
                    icon: icon,
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        if(type == 'delete')
                        {
                            Livewire.emit('destroy', id)
                        }
                    }
                })
            })
        })
    </script>
</body>
</html>
