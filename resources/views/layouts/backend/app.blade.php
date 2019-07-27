<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.png') }}">

    <!-- Bootstrap -->
    <link href="{{asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{asset('public/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet" />


    <!-- iCheck -->
    <link href="{{asset('public/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('public/build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/css/plc-backend.css')}}" rel="stylesheet">

    <!-- Ck Editor -->
    <script type="text/javascript" src="{{asset('public/vendors/ckeditor/ckeditor.js')}}"></script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- side menu -->
            @include('layouts.backend.partials._side-menu')

            <!-- top navigation -->
            @include('layouts.backend.partials._top-menu')

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    @yield('content')
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <!-- <footer>
                <div class="pull-right">
                    ECL System Ltd.
                </div>
                <div class="clearfix"></div>
            </footer> -->
            <!-- /footer content -->
        </div>
    </div>

    @if(Session::has('success'))
        <div class="alert alert-success flash-msg" style="position: fixed; right: 25px; bottom: 15px;">
            <span class="glyphicon glyphicon-ok"></span>
            <em> {!! session('success') !!}</em>
        </div>
    @endif

    <!-- jQuery -->
    <script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('public/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('public/vendors/nprogress/nprogress.js')}}"></script>

    <!-- jQuery custom content scroller -->
    <script src="{{asset('public/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('public/vendors/iCheck/icheck.min.js')}}"></script>

    <!-- Neher -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.flash-msg').delay(4000).fadeOut(1000);
        });
    </script>

    <script type="text/javascript">
        function confirm_user(message)
        {
            return confirm("Are you sure want to "+message+"?");
        }
    </script>
    <!-- end Neher -->

    <!-- Datatables -->
    <script src="{{asset('public/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('public/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('public/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('public/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('public/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('public/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/vendors/pdfmake/build/vfs_fonts.js')}}"></script>    

    <!-- Custom Theme Scripts -->
    <script src="{{asset('public/build/js/custom.min.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('public/js/custom.js')}}"></script> -->
</body>

</html>