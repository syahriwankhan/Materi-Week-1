<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>My BLOG</title>

    <!-- Font Awesome Icons -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('plugins')}}/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('plugins')}}/datatables-responsive/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" href="{{url('plugins')}}/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('dist')}}/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('template.sectionAdmin.header')

        <!-- Main Sidebar Container -->
        @include('template.sectionAdmin.sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @include('template.action.notif')
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->
        @include('template.sectionAdmin.footer')

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{url('plugins')}}/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{url('plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <!-- Data Tables -->
    <script src="{{url('plugins')}}/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('plugins')}}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('plugins')}}/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url('plugins')}}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script src="{{url('dist')}}/js/adminlte.min.js"></script>
    <script>
        $(".table-datatable").DataTable();
    </script>
</body>

</html>