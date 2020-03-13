<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js')}}) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130582519-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-130582519-1');
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-uid" content="{{ auth()->user()->uid }}">
    <meta name="user-id" content="{{ auth()->user()->id }}">
    <meta name="user-roles" content="{{ json_encode( ( auth()->user()->roles )->pluck( 'name' ) )}}">
    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/azia/img/azia-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <title>{{config('app.name')}} | Dashboard</title>

    <!-- vendor css -->
    <link href="{{asset('dashboard/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/datatables.net-dt/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
    @stack('styles')
    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/azia.css')}}">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdSks7O6JWUkj2C0lIAM_vQt6mYj51PSo&libraries=places"></script>
</head>
<body class="az-body az-body-sidebar">
<div class="az-sidebar">
    @include('includes.sidebar')
</div><!-- az-sidebar -->

<div id="app" class="az-content az-content-dashboard-two">
    <customer-partner-service-offer-model></customer-partner-service-offer-model>
    <service-partner-service-offer-model></service-partner-service-offer-model>
    <div class="az-header">
        @include('includes.header')
    </div><!-- az-header -->
    @yield('content')
    <div class="az-footer ht-40">
        @include('includes.footer')
    </div><!-- az-footer -->
</div><!-- az-content -->


<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('dashboard/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dashboard/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dashboard/lib/ionicons/ionicons.js')}}"></script>
<script src="{{asset('dashboard/lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('dashboard/lib/raphael/raphael.min.js')}}"></script>
<script src="{{asset('dashboard/lib/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('dashboard/lib/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{asset('dashboard/lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dashboard/lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{asset('dashboard/lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('dashboard/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js')}}"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>

<script src="{{asset('dashboard/js/azia.js')}}"></script>
<script>
    $(function () {
        'use strict'

        $('.az-sidebar .with-sub').on('click', function (e) {
            e.preventDefault();
            $(this).parent().toggleClass('show');
            $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function (e) {
            e.stopPropagation();

            // closing of sidebar menu when clicking outside of it
            if (!$(e.target).closest('.az-header-menu-icon').length) {
                var sidebarTarg = $(e.target).closest('.az-sidebar').length;
                if (!sidebarTarg) {
                    $('body').removeClass('az-sidebar-show');
                }
            }
        });


        $('#azSidebarToggle').on('click', function (e) {
            e.preventDefault();

            if (window.matchMedia('(min-width: 992px)').matches) {
                $('body').toggleClass('az-sidebar-hide');
            } else {
                $('body').toggleClass('az-sidebar-show');
            }
        });

        $(document).ready(function(){
            $('#example2').dataTable();
        });
    });
</script>
@stack('scripts')
</body>
</html>
