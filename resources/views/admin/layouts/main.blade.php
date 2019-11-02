<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{asset('css/admin/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/admin/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/admin/AdminLTE.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/admin/_all-skins.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/admin/style.css')}}"/>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <!--头部信息-->
            @include('admin.layouts.header')
            <!--左导航-->
            @include('admin.layouts.menu')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" >
                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            @yield('content')
                        </section>
                    </div>
                </div>
            </div>
            @include('admin.layouts.footer')
            <div class="control-sidebar-bg"></div>
        </div>
        <script src="{{asset('js/admin/jquery.min.js')}}"></script>
        <script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/admin/adminlte.min.js')}}"></script>
        @yield('js')
    </body>
</html>
