<!doctype html>
<html lang="en">
    <head>
        @include('admin.head')
    </head>
    <body class="hold-transition">

        {{-- header --}}
        @include('admin.blocks.header')

        {{-- content main --}}
        @yield('content')

        {{-- footer --}}
        @include('admin.blocks.footer')

        @include('admin.foot')
    </body>
</html>
