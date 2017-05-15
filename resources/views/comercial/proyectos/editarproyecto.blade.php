@extends('includes.app')
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
    <style>
        .titulo-seccion-edit-pry{
            margin-left: -15px;
            font-size: 18px;
            line-height: 25px;
            margin-top: 45px;
        }
    </style>
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
                                    {!! Form::open(array('url' => 'comercial/editarproyecto/'. $proyecto->id, 'class' => 'form-horizontal','id' =>'submit_form')) !!}
                                    <div class="tab-content">

                                            <h3 class="block">Actualización de datos</h3>
                                            <div class="alert alert-danger display-none">
                                                <button class="close" data-dismiss="alert"></button> Se encontraron algunos errores. Verificar los datos ingresados. </div>
                                            <div class="alert alert-success display-none">
                                                <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                            <div class="col-md-12">
                                                <label class="titulo-seccion-edit-pry"><strong>Datos generales</strong></label>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Proyecto" name="nombre_proyecto" value="{{$proyecto->nombre_proyecto}}">
                                                    <span class="help-block">Ingrese nombre de proyecto</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Url" name="dominio" value="{{$proyecto->dominio}}">
                                                    <span class="help-block">Ingrese URL para la nueva web (www.example.com)</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    {!! Form::select('estado', array('0' => 'Borrador', '1' => 'Publicado') ,$proyecto->estado,['class'=> 'form-control'])!!}
                                                    <span class="help-block">Seleccione estado de proyecto</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Cliente" name="cliente" value="{{$cliente->cliente}}">
                                                    <span class="help-block">Ingrese nombre de empresa</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Razón social" name="razon_social" value="{{$cliente->razon_social}}">
                                                    <span class="help-block">Ingrese razón social</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Dirección" name="direccion" value="{{$cliente->direccion}}">
                                                    <span class="help-block">Ingrese dirección</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="RUC" name="ruc" value="{{$cliente->ruc}}">
                                                    <span class="help-block">Ingrese RUC</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Correo para formulario" name="email_formulario" value="{{$proyecto->email_formulario}}">
                                                    <span class="help-block">Ingrese correo para formulario</span>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Nombre" name="nombres" value="{{$cliente->nombres}}">
                                                    <span class="help-block">Ingrese nombre de contacto</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Apellido paterno" name="apellidop" value="{{$cliente->apellidop}}">
                                                    <span class="help-block">Ingrese apellido paterno de contacto</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Apellido materno" name="apellidom" value="{{$cliente->apellidom}}">
                                                    <span class="help-block">Ingrese apellido materno de contacto</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Email" name="email" value="{{$user->email}}">
                                                    <span class="help-block">Ingrese email de contacto</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Teléfono 1" name="telefono" value="{{$cliente->telefono}}">
                                                    <span class="help-block">Ingrese teléfono de contacto</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Teléfono 2" name="telefono2" value="{{$cliente->telefono2}}">
                                                    <span class="help-block">Ingrese teléfono de contacto</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="titulo-seccion-edit-pry" style="margin-top: 20px"><strong>Apis Externos</strong></label>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group form-md-line-input" style="position: relative">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Instagram User Id" name="instagram_user_id" value="{{$proyecto->instagram_user_id}}" style="width: 95%">
                                                    <span class="help-block ">Genere su Instagram User Id para el proyecto</span>
                                                    <a class="btn fa fa-instagram" target="_blank" href="https://smashballoon.com/instagram-feed/find-instagram-user-id/" style="position: absolute; right: 0; top:0; font-size: 25px"></a>
                                                </div>
                                                <div class="form-group form-md-line-input" style="position: relative">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Timeline de Twitter" name="twitter_timeline" value="{{$proyecto->twitter_timeline}}">
                                                    <span class="help-block ">Ingrese su timeline de Twitter (https://twitter.com/usuario)</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Google Analytics" name="google_analytics" value="{{$proyecto->google_analytics}}">
                                                    <span class="help-block">Ingrese código único (UA-80444231-1)</span>
                                                </div>
                                            </div>

                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group form-md-line-input" style="position: relative">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Google Maps Api Key" name="google_maps_key" value="{{$proyecto->google_maps_key}}" style="width: 95%">
                                                    <span class="help-block ">Genere una key para el proyecto</span>
                                                    <a class="btn fa fa-map-marker" target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key" style="position: absolute; right: 0; top:0; font-size: 25px"></a>
                                                </div>
                                                <div class="form-group form-md-line-input" style="position: relative">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Instagram Access Token" name="instagram_token" value="{{$proyecto->instagram_token}}" style="width: 95%">
                                                    <span class="help-block ">Genere su Instagram Access Token para el proyecto</span>
                                                    <a class="btn fa fa-key" target="_blank" href="http://instagram.pixelunion.net//" style="position: absolute; right: 0; top:0; font-size: 25px"></a>
                                                </div>
                                            </div>
                                        <div class="col-md-12">
                                            <label class="titulo-seccion-edit-pry" style="margin-top: 20px"><strong>Datos para SEO</strong></label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group form-md-line-input">
                                                <textarea class="form-control" id="form_control_1" placeholder="Descripción del Site" name="descripcion_site">{{$proyecto->descripcion_site}}</textarea>
                                                <span class="help-block">Ingrese descripción del site</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Keywords" name="keywords" value="{{$proyecto->keywords}}">
                                                <span class="help-block"> Colocar palabras clave separadas por comas</span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="titulo-seccion-edit-pry" style="margin-top: 20px"><strong>E-commerce</strong></label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group form-md-line-input">
                                                {!! Form::select('e_commerce', array('0' => 'No', '1' => 'Sí') ,$proyecto->e_commerce,['class'=> 'form-control'])!!}
                                                <span class="help-block">Carrito de compras</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">

                                        <div class="col-md-offset-5 col-md-9">
                                            <button type="submit" class="btn green button-submit"> Guardar Cambios
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



@endsection