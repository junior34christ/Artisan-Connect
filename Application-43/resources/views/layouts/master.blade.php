<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <link rel="shortcut icon" type="image/x-icon" href="{{  URL::to('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/fullcalendar/fullcalendar.min.css') }}">
    <!-- css files -->
     
    <link rel="stylesheet" href="{{ URL::to('assets2/css/style.css') }}">  
    {{-- message toastr --}}
    <link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
    <script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>

    <style>
         .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            background: rgb(228, 129, 0);
        }

        .footer-text,
        .footer-iconTop {
            position: relative;
        }

        .footer-text p {
            font-size: 1rem;
            color: #fff;
        }

        .footer-iconTop {
            position: relative;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: .8rem;
            background: yellowgreen;
            border: .2rem solid var(--main-color);
            border-radius: .6rem;
            z-index: 1;
            overflow: hidden;
        }

        .footer-iconTop a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: rgb(255, 255, 255);
            z-index: -1;
            transition: .5s;
        }

        .footer-iconTop a:hover::before {
            width: 100%;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        {{-- header --}}
        @include('layouts.header')
        {{-- side bar --}}
        @include('sidebar.admin_sidebar')
        {{-- content page --}}
        @yield('content')
        
        {{-- footer --}}
        @include('layouts.footer')

    </div>

    <script src="{{ URL::to('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/feather.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/apexchart/chart-data.js') }}"></script>
    <script src="{{ URL::to('assets/js/script.js') }}"></script>
    <script src="{{ URL::to('assets/js/moment.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/fullcalendar/jquery.fullcalendar.js') }}"></script>
    <!-- Javascript  -->
    <script src="{{ URL::to('assets2/js/uikit.min.js') }}"></script>
    <script src="{{ URL::to('assets2/js/simplebar.js') }}"></script>
    <script src="{{ URL::to('assets2/js/script.js') }}"></script>
 
    <!-- Ion icon -->
    <script type="module" src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js"></script>
    
</body>

</html>