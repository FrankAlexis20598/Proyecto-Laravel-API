<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema de Envios</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- AdminLTE css -->
    <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet">
    <!-- Icheck js -->
    <link href="{{ asset('plugins/iCheck/square/blue.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <span><b>Sistema de Envios</b></span>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Inicia sesión para comenzar</p>
            <div id="app">
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- AdminLTE js -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- Icheck js -->
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>

    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>
</html>