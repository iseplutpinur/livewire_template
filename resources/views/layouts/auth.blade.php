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
	<link type="text/css" href="{{ asset('templates/assets/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ asset('templates/assets/plugins/datatables/dataTables.themify.css') }}" rel="stylesheet">
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
    <script type="text/javascript" src="{{ asset('templates/assets/js/application.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/demo/demo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/demo/demo-switcher.js') }}"></script>
</head>
<body class="focused-form animated-content">
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
