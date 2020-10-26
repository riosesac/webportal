<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @include('admin/akun/inc/css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    @include('admin/akun/temp/header')
    @include('admin/akun/temp/menuadmin')
    @yield('content')
    @include('admin/akun/temp/footer')
    @include('admin/akun/inc/js')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
</body>
</html>