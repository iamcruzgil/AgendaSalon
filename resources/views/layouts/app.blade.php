<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/gim.png') }}" type="image/x-icon">
    <title>{{ config('app.name', 'EPGIM') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    
    <link href="{{ asset('material/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .bootstrap-select:not([classW="col-"]):not([class*="form-control"]):not(.input-group-btn) {
            width: 100%;
        }

        .collapse {
            visibility: visible;
        }
    </style>
</head>

<body class="font-sans antialiased">
   
    <div class="w-full">
        @include('layouts.navbars.sidebar')
        <div class=" main-panel bg-white dark:bg-slate-800 ">
            @include('layouts.navbars.auth')
            {{ $slot }}
        </div>
    </div>
    <!-- Scripts 
    <script src="{{ asset('js/app.js') }}" defer></script>-->
    <script src="{{ asset('material/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('material/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('material/js/plugins/moment.min.js') }}"></script>
    <script src="{{ asset('material/js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('material/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('material/js/plugins/bootstrap-selectpicker.js') }}"></script>
    <script src="{{ asset('material/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('material/js/plugins/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('material/js/plugins/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('material/js/material-dashboard.js?v=2.1.0') }}" type="text/javascript"></script>
    <script src="{{ asset('material/js/application.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>
    <script src="{{ asset('js/cita.js') }}" defer></script>-->
</body>

</html>
