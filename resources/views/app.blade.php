<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Mi página</title>

    <link href='<?php echo URL::asset('bootstrap/css/bootstrap.min.css'); ?>' rel='stylesheet' type='text/css'>

    <link href='<?php echo URL::asset('csslogin/bootstrap-responsive.min.css'); ?>' rel='stylesheet' type='text/css'>
    <link href='<?php echo URL::asset('csslogin/font-awesome.css'); ?>' rel='stylesheet' type='text/css'>
    <link href='<?php echo URL::asset('csslogin/style.css'); ?>' rel='stylesheet' type='text/css'>
    <link href='<?php echo URL::asset('csslogin/pages/signin.css'); ?>' rel='stylesheet' type='text/css'>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">


</head>
<body>

@yield('content')

        <!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script src="<?php echo URL::asset('js/jquery-1.7.2.min.js'); ?>"></script>
<script src="<?php echo URL::asset('js/boostrap.js'); ?>"></script>
<script src="<?php echo URL::asset('js/signin.js'); ?>"></script>


</body>
</html>
