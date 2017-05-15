@extends('includes.app')
@section('menu')
@include('includes.menuusuarios')
@endsection
@section('style')

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo URL::asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="<?php echo URL::asset('assets/global/css/components.min.css" rel="stylesheet'); ?>" id="style_components" type="text/css" />
<link href="<?php echo URL::asset('assets/global/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?php echo URL::asset('assets/layouts/layout5/css/layout.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/layouts/layout5/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />

<script src="<?php echo URL::asset('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
@endsection

@section('script')
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->

<script src="<?php echo URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/js.cookie.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.mi'); ?>n.js" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo URL::asset('assets/global/scripts/app.min.js'); ?>" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?php echo URL::asset('assets/layouts/layout5/scripts/layout.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/layouts/global/scripts/quick-sidebar.min.js'); ?>" type="text/javascript"></script>
@endsection
        <!-- END THEME LAYOUT SCRIPTS -->
@section('content')
    <div class="page-content">
        <!-- BEGIN BREADCRUMBS -->

        <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
        <div class="page-content-container">
            <div class="page-content-row">
                <!-- BEGIN PAGE SIDEBAR -->

                <div class="page-content-col">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        <i class="fa fa-user"></i> Usuario </th>
                                    <th>
                                        <i></i> Nombres y Apellidos </th>
                                    <th class="hidden-xs">
                                        <i ></i> Proyectos </th>
                                    <th>
                                        <i class="fa fa-th-large"></i> Acciones </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($usuarios as $user)
                                    <tr>
                                        <td>{!! $user->username !!}</td>
                                        <td>{!! $user->name !!}</td>
                                        <td><?php echo \App\Console\Commands\Funciones::getProyectosPorUser($user->id)?></td>
                                        <td> <a href="{!!url('comercial/editarusuario/'.$user->id)!!}" class="btn btn-outline btn-circle btn-sm purple">
                                                <i class="fa fa-edit"></i> Editar </a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END SIDEBAR CONTENT LAYOUT -->
    </div>

    <script>
        $( document ).ready(function() {
            $('.montserrat-menu .dropdown').removeClass('active');
            $('.montserrat-menu .dropdown').removeClass('open');
            $('.montserrat-menu .dropdown').removeClass('selected');

            if('{{$admin}}'=='0')
            {
                $('.alistadousuarios-cliente').parent().addClass('active');
                $('.alistadousuarios-cliente').parent().addClass('open');
                $('.alistadousuarios-cliente').parent().addClass('selected');
            }
            else
            {
                $('.alistadousuarios-admin').parent().addClass('active');
                $('.alistadousuarios-admin').parent().addClass('open');
                $('.alistadousuarios-admin').parent().addClass('selected');
            }


        });

    </script>
@endsection