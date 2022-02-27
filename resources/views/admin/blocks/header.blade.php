<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-sign-out-alt"></i>
                    Đăng xuất
                </button>
            </form>
        </li>
    </ul>
</nav>
