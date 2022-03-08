<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Tai Duc Window</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('assets/admin/template/plugins/fontawesome-free/css/all.min.css')}}">
<!-- icheck bootstrap -->
<link rel="stylesheet"
      href="{{asset('assets/admin/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('assets/admin/template/dist/css/adminlte.css')}}">
{{-- customs css --}}
<link rel="stylesheet" href="{{asset('assets/admin/css/main.css')}}">
@yield('head')
