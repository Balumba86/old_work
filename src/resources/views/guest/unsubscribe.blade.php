<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Отписка от рассылки</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/adminlte.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <img src="/favicon.ico" alt="{{ config('app.name', 'Никольский') }}" class="brand-image img-circle elevation-3" style="opacity: .8; width: 100px;">
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            @if($result)
                <strong>Вы успешно отписались от рассылки</strong>
            @else
                <form action="{{ route('user-email-unsubscribe-page-submit') }}" method="POST">
                    <strong>{{ $subscriber ? $subscriber->email : 'Вы не являетесь нашим подписчиком' }}</strong>
                    @if($subscriber)
                    @csrf
                    <input type="hidden" name="token" value="{{ $subscriber ? $subscriber->token : '' }}">
                    <div class="custom-control custom-checkbox mb-4">
                        <input class="custom-control-input" type="checkbox" id="submit" name="submit">
                        <label for="submit" class="custom-control-label">Больше не отправлять мне писем</label>
                    </div>
                    <div class="social-auth-links text-center mb-3">
                        <button type="submit" class="btn btn-block btn-outline-info">Отписаться</button>
                    </div>
                    @endif
                </form>
            @endif
        </div>
    </div>
</div>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/admin/adminlte.min.js') }}"></script>
</body>
</html>
