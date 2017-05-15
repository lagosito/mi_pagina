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
                                    {!! Form::open(array('url' => 'comercial/editarusuario/'.$usuario->id, 'class' => 'form-horizontal','id' =>'submit_form')) !!}

                                    <div class="tab-content">

                                        <h3 class="block" style="text-align: left">Editar usuario <span style="font-weight: bold">{!! $usuario->username !!}</span></h3>
                                        <div class="alert alert-danger display-none">
                                            <button class="close" data-dismiss="alert"></button> Se encontraron algunos errores. Verificar los datos ingresados. </div>
                                        <div class="alert alert-success display-none">
                                            <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                        <div class="col-md-5">
                                            <br>
                                            <div class="form-group form-md-line-input">
                                                {!! Form::select('nivel_id', array('' => 'Rol')+ $roles ,$usuario->nivel_id,['class'=> 'form-control'])!!}

                                                <span class="help-block">Seleccione rol</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Nombre" name="name" value="{{$usuario->name}}">
                                                <span class="help-block">Ingrese nombres y apellidos</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Email" name="email" value="{{$usuario->email}}">
                                                <span class="help-block">Ingrese e-mail de nuevo usuario</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="checkbox" id="form_control_1" class="form-control cambiarpass"  name="cambiarpass" style="width: 20px;margin-top: 0;float: left; height: 20px;">&nbsp; Cambiar contraseña
                                                <span class="help-block">De check para habilitar cambio de contraseña</span>
                                            </div>
                                            <div class="form-group form-md-line-input  password display-none">
                                                <input type="password" class="form-control" id="form_control_1" placeholder="Contraseña" name="password">
                                                <span class="help-block">Ingrese contraseña</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">

                                    <div class="col-md-9" style="padding-left: 0">
                                        <br/>
                                        @if($usuario->nivel_id==1)
                                        <a href="{!!url('comercial/usuarioscliente')!!}" class="btn default ">
                                        @else
                                        <a href="{!!url('comercial/usuariosadmin')!!}" class="btn default ">
                                        @endif
                                            <i class="fa fa-angle-left"></i> Regresar </a>
                                        <button type="submit" class="btn green button-submit"> Guardar cambios
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
            $('.tabproyectos').removeClass('active');
            $('.tabproyectos').removeClass('open');
            $('.tabproyectos').removeClass('selected');
            $('.tabusuarios').addClass('active');
            $('.tabusuarios').addClass('open');
            $('.tabusuarios').addClass('selected');
            $('.tabmodulo').removeClass('active');
            $('.tabmodulo').removeClass('open');
            $('.tabmodulo').removeClass('selected');

            $('.cambiarpass').click(function(){
                $('.password').toggle('display-none');
            });
        });

    </script>


@endsection