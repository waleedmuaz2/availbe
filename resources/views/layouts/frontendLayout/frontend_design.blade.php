<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-uid" content="null">
    <meta name="user-id" content="null">
    <meta name="user-roles" content="null">
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description"
          content=" On-Demand Services - Professional Mechanics, Technician, Towing, Carwash, Automotive Mobile Services and more."/>
    <meta name="keywords"
          content="towing,service,mobile service,maintenance,car,auto,moto,repair,wash,cleaning,transport,workshop"/>
    <meta name="twitter:site" content="@availby"/>
    <meta name="twitter:description"
          content="availby  On-Demand Services - Professional Mechanics, Technician, Towing, Carwash, Automotive Mobile Services and more.."/>
    <meta name="twitter:app:country" content="USA"/>
    <meta name="twitter:app:name:iphone" content="availby"/>
    <meta name="twitter:app:id:iphone" content="availby"/>
    <meta name="twitter:app:url:iphone" content="availby://"/>
    <meta name="twitter:app:name:ipad" content="availby"/>
    <meta name="twitter:app:id:ipad" content="availby"/>
    <meta name="twitter:app:url:ipad" content="availby://"/>
    <meta name="twitter:app:name:googleplay" content="AVAILBY"/>
    <meta name="twitter:app:id:googleplay" content="com.availby.app"/>
    <meta name="twitter:app:url:googleplay" content="https://play.google.com/store/apps/details?id=com.availby.app"/>
    <meta property="fb:app_id" content="enter fb id here"/>
    <meta property="og:type" content="availby-app:main_website"/>
    <meta property="og:title"
          content="AVAILBY -  On-Demand Services - Professional Mechanics, Technician, Towing, Carwash, Automotive Mobile Services and more."/>

    <!-- Page Title -->
    <title>Availby | Mobile Automotive Service Networ</title>
    <!-- Favicon and Touch Icons -->
    <link href="{{asset('font-end/images/favicon.png" rel="shortcut icon" type="image/png')}}">
    <link href="{{asset('font-end/images/apple-touch-icon.png" rel="apple-touch-icon')}}">
    <link href="{{asset('font-end/images/apple-touch-icon-72x72.png" rel="apple-touch-icon')}}" sizes="72x72">
    <link href="{{asset('font-end/images/apple-touch-icon-114x114.png" rel="apple-touch-icon')}}" sizes="114x114">
    <link href="{{asset('font-end/images/apple-touch-icon-144x144.png" rel="apple-touch-icon')}}" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{asset('font-end/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('font-end/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('font-end/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('font-end/css/css-plugin-collections.css')}}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{asset('css/app.css')}}"  rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{asset('font-end/css/menuzord-skins/menuzord-rounded-boxed.css')}}"
          rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{asset('font-end/css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{asset('font-end/css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{asset('font-end/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{asset('font-end/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="{{asset('font-end/css/style.css')}}" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{asset('font-end/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('font-end/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('font-end/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="{{asset('font-end/css/colors/theme-skin-color-set-6.css')}}" rel="stylesheet" type="text/css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdSks7O6JWUkj2C0lIAM_vQt6mYj51PSo&libraries=places"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <!-- external javascripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{asset('font-end/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('font-end/js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{asset('font-end/js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{asset('font-end/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('font-end/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
    <style>
        body{
            touch-action: none;
        }
    </style>
    @stack('styles')
</head>
<body class="boxed-layout bg-img-fixed bg-img-cover pt-40 pb-40 pt-sm-0" data-bg-img="http://placehold.it/1920x1280">
<div id="app">

        <div id="wrapper" class="clearfix">
            <!-- preloader -->
            {{-- <div id="preloader">
                <div id="spinner">
                    <img alt="" src="{{asset('font-end/images/preloaders/10.gif')}}">
                </div>
                <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
            </div> --}}

            <!-- Header -->
            @include('layouts.frontendLayout.header')

            <!-- Start main-content -->
           @yield('content')
            <!-- end main-content -->
            <!-- Footer -->
            @include('layouts.frontendLayout.footer')
            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- end wrapper -->
</div>
<!-- Reservation Form End-->
<!-- Reservation Form Validation Start-->
<script type="text/javascript">
    $("#reservation_form").validate({
        submitHandler: function (form) {
            var form_btn = $(form).find('button[type="submit"]');
            var form_result_div = '#form-result';
            $(form_result_div).remove();
            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            $(form).ajaxSubmit({
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'true') {
                        $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function () {
                        $(form_result_div).fadeOut('slow')
                    }, 6000);
                }
            });
        }
    });
</script>
<!-- Reservation Form Validation Start -->
<!-- end .rev_slider_wrapper -->
<script>
    $(document).ready(function (e) {
        $(".rev_slider").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "zeus",
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    style: "metis",
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{config('app.name')}}</span>'
                }
            },
            responsiveLevels: [1240, 1024, 778],
            visibilityLevels: [1240, 1024, 778],
            gridwidth: [1170, 1024, 778, 480],
            gridheight: [650, 768, 960, 720],
            lazyType: "none",
            parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    });
</script>
<!-- Slider Revolution Ends -->
<script type="text/javascript">
    $('#mailchimp-subscription-form-footer').ajaxChimp({
        callback: mailChimpCallBack,
        url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
    });

    function mailChimpCallBack(resp) {
        // Hide any previous response text
        let $mailchimpform = $('#mailchimp-subscription-form-footer'),
            $response = '';
        $mailchimpform.children(".alert").remove();
        if (resp.result === 'success') {
            $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
        } else if (resp.result === 'error') {
            $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
        }
        $mailchimpform.prepend($response);
    }
</script>
<!-- Footer Scripts -->
<!-- JS | Calendar Event Data -->
<script src="{{asset('font-end/js/calendar-events-data.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('font-end/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
        <!-- JS | Custom script for all pages -->
<script src="{{asset('font-end/js/custom.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
@stack('scripts')
</body>
</html>
