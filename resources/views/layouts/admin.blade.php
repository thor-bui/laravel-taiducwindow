<!doctype html>
<html lang="en">
    <head>
        @include('admin.head')
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            {{-- header --}}
            @include('admin.blocks.header')

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="../../index3.html" class="brand-link">
                    <img src="{{asset('assets/admin/template/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                         class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>

                <!-- Sidebar -->
            @include('admin.blocks.sidebar')
            <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            {{-- footer --}}
            @include('admin.blocks.footer')

            @include('admin.foot')
        </div>

    </body>
</html>
