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
<link href="<?php echo URL::asset('assets/pages/css/portfolio.min.css'); ?>" rel="stylesheet" type="text/css">

<script src="<?php echo URL::asset('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
@endsection

@section('script')
       <!--[if lt IE 9]>
<script src="<?php echo URL::asset('assets/global/plugins/respond.min.js'); ?>"></script>
<script src="<?php echo URL::asset('assets/global/plugins/excanvas.min.js'); ?>"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/js.cookie.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo URL::asset('assets/global/plugins/select2/js/select2.full.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/jquery.validate.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js'); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo URL::asset('assets/global/scripts/app.min.js'); ?>" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL::asset('js/form-wizard.js'); ?>" type="text/javascript"></script>
<!--script src="<?php echo URL::asset('assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/pages/scripts/portfolio-3.min.js" type="text/javascript'); ?>"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?php echo URL::asset('assets/layouts/layout5/scripts/layout.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/layouts/global/scripts/quick-sidebar.min.js'); ?>" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->

@endsection
        <!-- END THEME LAYOUT SCRIPTS -->
@section('content')
    <div class="page-content">
        <!-- BEGIN BREADCRUMBS -->

        <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
        <div class="page-content-container" id="page-content-container">
            <div class="page-content-row">
                <!-- BEGIN PAGE SIDEBAR -->

                <div class="page-content-col">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="portlet light" id="form_wizard_1">
                        <div class="portlet-body form col-md-12">
                            <!--form class="form-horizontal" action="" id="submit_form" method="POST" novalidate="novalidate"-->
                            <div class="form-wizard">
                                <div class="form-body">
                                    {!! Form::open(array('url' => 'comercial/nuevousuario', 'class' => 'form-horizontal','id' =>'submit_form')) !!}

                                    <div class="tab-content">

                                        <h3 class="block" style="text-align: left">Nuevo usuario</h3>
                                        @if(Session::has('mensaje'))
                                            <div class="alert alert-danger" >
                                                <button class="close" data-dismiss="alert"></button>
                                                {{ Session::get('mensaje') }}
                                            </div>
                                        @endif
                                        <div class="alert alert-danger display-none">
                                            <button class="close" data-dismiss="alert"></button> Se encontraron algunos errores. Verificar los datos ingresados. </div>
                                        <div class="alert alert-success display-none">
                                            <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                        <div class="col-md-5">
                                            <br>
                                            <div class="form-group form-md-line-input">
                                                {!! Form::select('nivel_id', array('' => 'Rol')+ $roles ,null,['class'=> 'form-control'])!!}

                                                <span class="help-block">Seleccione rol</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" placeholder="Usuario" name="username" id="username">
                                                <input type="hidden" name="disponibilidad-usuario" value="0" id="disponibilidad-usuario">
                                                <span class="user-message hidden" style="color:red">Nombre de usuario no disponible</span>
                                                <span class="help-block">Ingrese nombre de usuario</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Nombres y Apellidos" name="name">
                                                <span class="help-block">Ingrese nombres y apellidos</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Email" name="email">
                                                <span class="help-block">Ingrese e-mail de nuevo usuario</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="password" class="form-control" id="form_control_1" placeholder="Contraseña" name="password">
                                                <span class="help-block">Ingrese contraseña</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">

                                    <div class="col-md-9" style="padding-left: 0">
                                        <br/>
                                        <a href="{!!url('comercial/usuarioscliente')!!}" class="btn default ">
                                            <i class="fa fa-angle-left"></i> Regresar </a>
                                        <button type="submit" class="btn green button-submit"> Registrar nuevo usuario
                                            <i class="fa fa-check"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <!--/form-->
                            {!! Form::close() !!}
                        </div>
                        <div class="col-md-3 selectionmdl" style=" overflow-y: auto;" id="selectionmdl">
                            <div class="mdlheader"></div>
                            <div class="mdlsection"></div>
                            <div class="mdlfooter"></div>
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

        $('.anuevousuario').parent().addClass('active');
        $('.anuevousuario').parent().addClass('open');
        $('.anuevousuario').parent().addClass('selected');


    });
    $('#username').on('focusout', function(event) {

        $('.user-message').addClass('hidden');

        var data = {};
        data._token = '{!!csrf_token()!!}';
        data.username = $(this).val();

        $.ajax({
            type: "POST",
            url: "{!! url(Request::segment(1).'/disponibilidadusuario') !!}",
            data: data,
            success: function (data) {
                if(data=='1') {
                    $('.user-message').removeClass('hidden');
                    $('#disponibilidad-usuario').val('1');
                }
                else{
                    $('#disponibilidad-usuario').val('0');
                }
            },
            error: function () {
                alert('Error en la conexión');
            }
        });
    });
</script>


@endsection