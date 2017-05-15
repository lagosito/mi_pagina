
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Mipagina</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN LAYOUT FIRST STYLES -->
    <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
    <link href='https://fonts.google.com/specimen/Montserrat?selection.family=Montserrat' rel='stylesheet' type='text/css'/>
    <!-- END LAYOUT FIRST STYLES -->
    @yield('style')
    <link href="<?php echo URL::asset('/css/style.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL::asset('/css/style-app.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo" >
<!-- BEGIN CONTAINER -->
<div class="wrapper">
    <div class="container-fluid">
        @yield('content')
        @include('includes.footer')
    </div>
</div>
<!-- END CONTAINER -->

@yield('script')
</body>

</html>