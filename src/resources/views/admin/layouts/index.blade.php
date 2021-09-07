<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title-page', 'Admin panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/adminlte.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('styles')
</head>
<body class="hold-transition dark-mode sidebar-mini">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Сайт</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&color=FFF&background=a02c2c" class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">{{Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <li class="user-header bg-primary">
                        <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&color=FFF&background=a02c2c" class="img-circle elevation-2" alt="User Image">

                        <p>
                            {{Auth::user()->name}}
                            <small>{{Auth::user()->email}}</small>
                        </p>
                    </li>
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Профиль</a>
                        <a href="#" class="btn btn-default btn-flat float-right" onclick="event.preventDefault();
                                                $('#logout-form').submit();">Выход</a>
                        <form method="POST" action="{{ route('logout') }}" id="logout-form">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
@include('admin.layouts.main-menu')
    <div class="content-wrapper">
        <section class="content">
            @if($errors->any())
                <div class="info-box">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-exclamation-triangle"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Ошибка!</span>
                        @foreach($errors->all() as $error)
                            <span class="info-box-number">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
            @endif
            @yield('content')
        </section>
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">

        </div>
        <strong>Copyright &copy; {{date('Y')}} | {{ config('app.name', 'Laravel') }}</strong>
    </footer>
    <aside class="control-sidebar control-sidebar-dark"></aside>
</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/admin/adminlte.min.js') }}"></script>
<script src="{{ asset('js/admin/demo.js') }}"></script>
@stack('scripts')
</body>
</html>
