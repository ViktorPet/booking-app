<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

   {{-- <link rel="stylesheet" href="{{asset('dist-2/css/bootstrap.min.css')}}">--}}

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{asset('dist-2/css/all.min.css')}}">
   {{-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">--}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{asset('dist-2/css/sb-admin-2.min.css')}}">
  {{--  <link href="css/sb-admin-2.min.css" rel="stylesheet">--}}

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
@include('includes.admin-sidebar')



    <!-- End of Sidebar -->

    <!-- Content Wrapper -->

    @yield('content')
        <!-- Main Content -->

        <!-- End of Main Content -->

        <!-- Footer -->
   @include('includes.admin-footer')
        <!-- Bootstrap core JavaScript-->
</div>

    <script src="{{asset('dist-2/js/jquery.min.js')}}"></script>
       {{-- <script src="vendor/jquery/jquery.min.js"></script>--}}

    <script src="{{asset('dist-2/js/bootstrap.bundle.min.js')}}"></script>
       {{-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}

        <!-- Core plugin JavaScript-->
    <script src="{{asset('dist-2/js/jquery.easing.min.js')}}"></script>
       {{-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script>--}}

    <script src="{{asset('dist-2/js/sb-admin-2.min.js')}}"></script>
       {{-- <script src="js/sb-admin-2.min.js"></script>--}}

        <!-- Page level plugins -->
    <script src="{{asset('dist-2/js/Chart.min.js')}}"></script>
        {{--<script src="vendor/chart.js/Chart.min.js"></script>--}}

        <!-- Page level custom scripts -->
    <script src="{{asset('dist-2/js/chart-area-demo.js')}}"></script>
    <script src="{{asset('dist-2/js/chart-pie-demo.js')}}"></script>
        {{--<script src="js/demo/chart-area-demo.js"></script>

        <script src="js/demo/chart-pie-demo.js"></script>--}}

</body>

</html>
