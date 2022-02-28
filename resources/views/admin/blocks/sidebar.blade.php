<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('assets/admin/template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                 alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-list"></i>
                    <p>
                        Danh mục sản phẩm
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('add-category')}}"
                           class="nav-link {{request()->is('admin/category/add') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm danh mục</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../index2.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách danh mục</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
