<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Mi página - Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo URL::asset('assets/global/css/components.min.css" rel="stylesheet" id="style_components'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('assets/global/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo URL::asset('assets/pages/css/login.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL::asset('/css/build.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->
<style>
    .btn-sing-in{
        background-color: #304fff;
        color: #FFFFFF;
        padding: 15px 20px 15px 20px!important;
        border: 1px solid transparent;
        border-radius: 50px!important;
        width: 100%;
    }
    .forget-password{
        float: none!important;
        color:white;
    }
    .login .content .form-actions {
        border-bottom: none!important;
    }
    .check-remember{
        color: #FFFFFF;
        cursor: text!important;
    }
    .styled{
        cursor: pointer!important;
    }
    .checkbox-success{
        text-align: left;
    }
    .login-input{
        background-color: white!important;
        color: black!important;
        border-radius: 50px!important;
        border: 1px solid white!important;
        padding-left: 30px;
    }
    .logo{
        margin: 0!important;
    }
    .login{
        background-color: black!important;
    }
</style>
<body class="login"  style="text-align: center; float: left; width: 100%; background-image: url('{!!url('img/signin/fondo-login.jpg')!!}')!important; background-size: cover; background-position: center; background-repeat: no-repeat">
>
<!-- BEGIN LOGO -->
<!--div style="text-align: center; float: left; width: 100%; background-image: url('{!!url('img/signin/fondo-login.jpg')!!}')!important; background-size: cover; background-position: center; background-repeat: no-repeat">

<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content" style="background-color: transparent">

    <!-- BEGIN LOGIN FORM -->
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="logo" align="center">
            <a href="index.html">
                <img src="<?php echo URL::asset('img/signin/logo-mipagina-blanco.png'); ?>" alt="" /> </a>
        </div>
        <br>
        <h5 class="" style="color:white;text-transform: uppercase;text-align: left">Iniciar sesión de usuario</h5>
        <br>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Ups!</strong> Hay algunos problemas con tus entradas.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter any username and password. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input class="form-control form-control-solid placeholder-no-fix login-input" type="text" autocomplete="on" placeholder="YOUR USERNAME" name="username" value="{{ old('username') }}" />
        </div>
        <br>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix login-input" type="password" autocomplete="on" placeholder="PASSWORD" name="password" />
        </div>
       <br>
        <div class="form-group checkbox checkbox-success checkbox-circle" style="padding-bottom: 10px; padding-left: 7%">
            <input class="styled" type="checkbox" name="remember" value="1" checked>
            <label class="check-remember" for="checkbox8">
                Keep me signed in
            </label>
        </div>
        <br>
        <!--div class="form-group">
            <label class="rememberme check mt-checkbox mt-checkbox-outline">
                <input type="checkbox" name="remember" value="1">Recordarme
                <span></span>
            </label>

        </div-->
        <div class="form-group" style="text-align: center; padding-top: 0">
            <button type="submit" class=" btn-sing-in uppercase">Sign in</button>
        </div>
        <br>
        <a href="{{route('reestablecerpassword')}}" id="forget-password" class="forget-password" style="margin-top: 0">Forgot password or Username?</a>

    </form>
    <!-- END LOGIN FORM -->


    </div>
    <div class="copyright" align="center"> <img align="center" src="<?php echo URL::asset('img/signin/logo-studiotigres.png'); ?>" alt="" /> </div>
</div>
<!--[if lt IE 9]>
<script src="<?php echo URL::asset('assets/global/plugins/respond.min.js'); ?>"></script>
<script src="<?php echo URL::asset('assets/global/plugins/excanvas.min.js'); ?>"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo URL::asset('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/js.cookie.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo URL::asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js'); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->

<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/pages/scripts/login.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>