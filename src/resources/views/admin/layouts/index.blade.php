<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title-page', 'Admin panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/admin/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('styles')
    <style>
        .navbar-nav>.user-menu>.dropdown-menu>li.user-header {
            height: auto!important;
        }
    </style>
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
                        <div class="custom-control custom-checkbox mb-2">
                            <input class="custom-control-input custom-control-input-success" type="checkbox" id="theme_mode">
                            <label for="theme_mode" class="custom-control-label">Тёмная тема</label>
                        </div>
                    </li>
                    <li class="user-footer">
                        <a href="{{ route('admin-profile') }}" class="btn btn-default btn-flat">Профиль</a>
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
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Ошибка!</h5>
                    @foreach($errors->all() as $error)
                        <span class="info-box-number">{{ $error }}</span>
                    @endforeach
                </div>
            @endif
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i>Готово</h5>
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('info'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-info"></i> </h5>
                        {{ session('info') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-info"></i>Ошибка!</h5>
                        {{ session('error') }}
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

<script src="/plugins/jquery/jquery.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/js/admin/adminlte.min.js"></script>
<script src="/js/admin/demo.js"></script>
@stack('scripts')
<script>
    var main = $('body');
    var header = $('.main-header');
    var user_mode = localStorage.getItem('theme');
    if(!user_mode) {
        localStorage.setItem('theme', 'light');
        window.location.reload();
    }
    if(user_mode === 'dark') {
        if (!main.hasClass('dark-mode')) {
            main.addClass('dark-mode');
        }
        if (!header.hasClass('navbar-dark')) {
            header.addClass('navbar-dark')
        }
        $('#theme_mode').attr('checked', true);
    } else {
        if (main.hasClass('dark-mode')) {
            main.removeClass('dark-mode');
        }
        if (header.hasClass('navbar-dark')) {
            header.removeClass('navbar-dark')
        }
        $('#theme_mode').attr('checked', false);
    }
    $('#theme_mode').on('click', function (e) {
        if (e.currentTarget.checked) {
            if (!main.hasClass('dark-mode')) {
                main.addClass('dark-mode');
            }
            if (!header.hasClass('navbar-dark')) {
                header.addClass('navbar-dark')
            }
            localStorage.setItem('theme', 'dark');
        } else {
            if (main.hasClass('dark-mode')) {
                main.removeClass('dark-mode');
            }
            if (header.hasClass('navbar-dark')) {
                header.removeClass('navbar-dark')
            }
            localStorage.setItem('theme', 'light');
        }
    })
</script>
</body>
</html>
