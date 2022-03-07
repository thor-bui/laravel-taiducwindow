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
                <a href="#" class="brand-link">
                    <img src="{{asset('assets/admin/template/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                         class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminTDW</span>
                </a>

            <!-- Sidebar -->
            @include('admin.blocks.sidebar')
            <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper content-header">
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            @include('admin.foot')
        </div>

    </body>
</html>
