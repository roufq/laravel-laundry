<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>Xadmino - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- DataTables -->
        <link href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{asset('dist/simplepicker.css')}}">


        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           @include('layouts.topbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            @include('layouts.sidbar')
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                    <!-- <h4 class="pull-left page-title">Dashboard</h4> -->

                       @yield('content')


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    2016 - 2020 © Xadmino.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <!-- <script src="{{ asset('assets/js/jquery.min.js')}}"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{ asset('assets/js/detect.js')}}"></script>
        <script src="{{ asset('assets/js/fastclick.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>
        <script src="{{ asset('assets/js/wow.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js')}}"></script>

        <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Datatables-->
        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script src="{{ asset('assets/pages/dashborad.js')}}"></script>
        @stack('js')
        <script src="{{ asset('assets/js/app.js')}}"></script>

    </body>
</html>