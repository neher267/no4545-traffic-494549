<!doctype html>
<html class="no-js" lang="en">
    <head>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PHGVLXQ');</script>
        <!-- End Google Tag Manager -->


        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $title }} || {{ config('app.name') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- favicon
        ============================================ -->        
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.png') }}">
        
        <!-- Google Fonts
        ============================================ -->        
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
       
        <!-- Bootstrap CSS
        ============================================ -->        
        <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}">
        
        <!-- Color Swithcer CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/color-switcher.css') }}">
        
        <!-- Fontawsome CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css') }}">
        
        <!-- Owl Carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.css') }}">
        
        <!-- jquery-ui CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/jquery-ui.css') }}">
        
        <!-- Meanmenu CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/meanmenu.min.css') }}">
        
        <!-- Animate CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/animate.css') }}">
        
        <!-- Animated Headlines CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/animated-headlines.css') }}">
        
        <!-- Nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/lib/nivo-slider/css/nivo-slider.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('public/frontend/lib/nivo-slider/css/preview.css') }}" type="text/css" media="screen" />
        
        <!-- Metarial Iconic Font CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/material-design-iconic-font.css') }}">
        <link rel="stylesheet" href="{{ asset('public/frontend/css/material-design-iconic-font.min.css') }}">
        
        <!-- Slick CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/slick.css') }}">
        
        <!-- Video CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/jquery.mb.YTPlayer.css') }}">
        
        <!-- Style CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/style.css') }}">

        <!-- PLC CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/plc.css') }}">
        
        <!-- Color CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/color.css') }}">
        
        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css') }}">
        
        <!-- Modernizr JS
        ============================================ -->        
        <script src="{{ asset('public/frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
        
        <!-- Color Css Files
        ============================================ -->    
        <!-- <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/color-one.css') }}" title="color-one" media="screen" />        
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/color-two.css') }}" title="color-two" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/color-three.css') }}" title="color-three" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/color-four.css') }}" title="color-four" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/color-five.css') }}" title="color-five" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/color-six.css') }}" title="color-six" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/color-seven.css') }}" title="color-seven" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/color-eight.css') }}" title="color-eight" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/color-nine.css') }}" title="color-nine" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/color-ten.css') }}" title="color-ten" media="screen" />  -->

        <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/color-eleven.css') }}" title="color-ten" media="screen" /> 

               
        <!-- <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/pattren1.css') }}" title="pattren1" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/pattren2.css') }}" title="pattren2" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/pattren3.css') }}" title="pattren3" media="screen" /> -->
        
        <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/pattren4.css') }}"/>

        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/pattren5.css') }}" title="pattren5" media="screen" />

        <!-- <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/background1.css') }}" title="background1" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/background2.css') }}" title="background2" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/background3.css') }}" title="background3" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/background4.css') }}" title="background4" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="{{ asset('public/frontend/switcher/background5.css') }}" title="background5" media="screen" /> -->

        <!-- Google Recaptcha -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>        

    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHGVLXQ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper wrapper-boxed">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <header>
                    <!-- Header Top -->
                    @include('layouts.frontend.partials._header-top')
                    <!-- End Header Top -->

                    <!-- Main Nav -->    
                    @include('layouts.frontend.partials._nav')
                    <!-- End Main Nav -->    
                </header>
                <!--End of Header Area-->

                @if(!Request::is('/') && !Request::is('thank-you'))
                    @include('layouts.frontend.partials._breadcrumb')
                @endif

                @yield('content')
                
                @if(session()->has('success'))
                <div class="alert alert-success" style="position: fixed; bottom: 50px; right: 13px;">
                    {{ session()->get('success') }}
                </div>
                @endif
                
                <!--Newsletter Area Start-->
                {{-- @include('layouts.frontend.partials._news-letter') --}}
                <!--End of Newsletter Area-->
                <!-- Footer -->
                @include('layouts.frontend.partials._footer')
                <!-- End Footer -->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area-->       
        
        @include('layouts.frontend.partials._scripts')
    </body>
</html>