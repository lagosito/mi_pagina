@extends('includes.appsinheader')
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
<link href="<?php echo URL::asset('css/style-newproyect.css'); ?>" rel="stylesheet" type="text/css">

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
                     <!--BEGIN PAGE BASE CONTENT -->
                    <div class="portlet light" id="form_wizard_1">
                        {!! Form::open(array('url' => Request::segment(1).'/nuevoproyecto', 'class' => 'form-horizontal','id' =>'submit_form')) !!}
                        <div class="portlet-body form col-md-12">

                        <!--form class="form-horizontal" action="" id="submit_form" method="POST" novalidate="novalidate"-->
                            <input type="hidden" id="_token" class="hidden" value="{{ csrf_token() }}"/>
                                <div class="form-wizard">
                                    @if(Session::has('status'))
                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <strong>{{ Session::get('status') }}</strong>
                                        </div>
                                    @endif
                                    <div class="form-body">
                                        <div class="col-sm-12" style="padding: 0; border-bottom: 1px solid black; margin-bottom:30px">
                                            <div class="col-sm-1 col-md-2" align="left" style="padding-top: 10px;">
                                                <a id="index" class="page-logo" href="{!! url(Request::segment(1).'/proyectos') !!}">
                                                    <img src="<?php echo URL::asset('img/iconos-editar/mp-short.png'); ?>" alt="Logo">
                                                </a>
                                            </div>
                                            <div class="col-sm-11 col-md-10">
                                                <ul class="nav nav-pills nav-justified steps">
                                                    <li class="active">
                                                        <a href="#tab1" data-toggle="tab" class="step">
                                                            <span class="number"> 1 </span>
                                                                                <span class="desc">
                                                                                    <i class="fa fa-check"></i> CABECERA </span>
                                                        </a>
                                                    </li>
                                                    <!--li>
                                                        <a href="#tab2" data-toggle="tab" class="step active">
                                                            <span class="number"> 2 </span>
                                                                                <span class="desc">
                                                                                    <i class="fa fa-check"></i> Navegación </span>
                                                        </a>
                                                    </li-->
                                                    <li>
                                                        <a href="#tab3" data-toggle="tab" class="step">
                                                            <span class="number"> 2 </span>
                                                                                <span class="desc">
                                                                                    <i class="fa fa-check"></i> CONTENIDO </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab4" data-toggle="tab" class="step">
                                                            <span class="number"> 3 </span>
                                                                                <span class="desc">
                                                                                    <i class="fa fa-check"></i> PIE DE PÁGINA </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab5" data-toggle="tab" class="step" aria-expanded="true">
                                                            <span class="number"> 4 </span>
                                                                                <span class="desc">
                                                                                    <i class="fa fa-check"></i> DATOS GENERALES </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div id="bar" class="progress" role="progressbar">
                                                    <div class="progress-bar progress-bar-success" style="width: 25%;"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content col-md-9">

                                            <div class="tab-pane active" id="tab1">
                                                <h3 class="block">Seleccione cabecera</h3>
                                                <input type="hidden" id="idcabecera" name="idcabecera" value="" />
                                                <div class="alert alert-danger display-none">
                                                    <button class="close" data-dismiss="alert"></button> Seleccione una cabecera.
                                                </div>
                                                <div class="cbp-wrapper-outer">
                                                    <div class="col-md-12">
                                                        @foreach($cabeceras as $cabecera)
                                                            <div class="col-md-4 col-sm-6 marcoselect" style="margin-bottom: 10px">
                                                                    <a href="javascript:;" class="contenedor-miniatura" data-idcabecera="{{$cabecera->id}}" rel="nofollow">
                                                                        <span class="hover-md-miniatura">
                                                                        <!--span class="col-md-6" style=" text-align: right; padding: 25% 0 0 0 ; height: 100%;">
                                                                                <span class="fa fa-search"></span>
                                                                                <span style="font-size:35px">|</span>
                                                                            </span-->
                                                                            <span class="col-md-12 cabecera">
                                                                                <span class="fa fa-plus add-icon"></span>
                                                                            </span>
                                                                        </span>
                                                                        <img src="<?php echo URL::asset('img/md_miniatura/'. $cabecera->imagen); ?>" alt="" class="imgwidth" style="height: 50%; ">
                                                                    </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>
                                            <!--div class="tab-pane" id="tab2">
                                                <h3 class="block">Selección de navegación</h3>
                                            </div-->
                                            <div class="tab-pane" id="tab3">
                                                <h3 class="block">Seleccione módulos de contenido</h3>
                                                <div class="alert alert-danger display-none">
                                                    <button class="close" data-dismiss="alert"></button> Seleccione al menos un contenido.
                                                </div>
                                                <?php  $ids_md_exclusivos = \App\Console\Commands\Funciones::getModulosExclusivos(); ?>

                                                <div class="cbp-wrapper-outer">
                                                @foreach($categorias as $categoria)
                                                    <?php $contenidos = \App\Console\Commands\Funciones::getModulosContenidoxCategoria($categoria->id, $ids_md_exclusivos); ?>
                                                    <div class="col-md-12">
                                                        @if($contenidos !='[]')
                                                            <h3 style="text-transform: uppercase">Modulos {{$categoria->categoria}}</h3>
                                                        @endif
                                                        @foreach($contenidos as $contenido)
                                                            <div class="col-md-4 col-sm-6 multipleselect" style=" margin-bottom: 10px" id="multipleselect{{$contenido->id}}">
                                                                <div  class="contenedor-miniatura" data-idmodulo="{{$contenido->id}}" rel="nofollow">
                                                                     <span class="hover-md-miniatura">
                                                                         <!--span class="col-md-6" style=" text-align: right; padding: 25% 0 0 0 ; height: 100%;">
                                                                            <span class="fa fa-search"></span>
                                                                            <span style="font-size:35px">|</span>
                                                                         </span-->
                                                                         <span class="col-md-12 contenido">
                                                                            <span class="fa fa-plus add-icon"></span>
                                                                        </span>
                                                                    </span>
                                                                    <img  src="<?php echo URL::asset('img/md_miniatura/'. $contenido->imagen); ?>" alt="" class="imgwidth" style="height: 50%; ">
                                                                </div>
                                                                <br>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                                    <?php $contenidos = \App\Console\Commands\Funciones::getModulosContenidoxCategoria(0, $ids_md_exclusivos); ?>
                                                    <div class="col-md-12">
                                                        @if($contenidos !='[]')
                                                            <h3 style="text-transform: uppercase">Modulos sin categoría</h3>
                                                        @endif
                                                        @foreach($contenidos as $contenido)
                                                            <div class="col-md-4 col-sm-6 multipleselect" style=" margin-bottom: 10px" id="multipleselect{{$contenido->id}}">
                                                                <div  class="contenedor-miniatura" data-idmodulo="{{$contenido->id}}" rel="nofollow">
                                                                     <span class="hover-md-miniatura">
                                                                        <!--span class="col-md-6" style=" text-align: right; padding: 25% 0 0 0 ; height: 100%;">
                                                                            <span class="fa fa-search"></span>
                                                                            <span style="font-size:35px">|</span>
                                                                         </span-->
                                                                         <span class="col-md-12 contenido">
                                                                            <span class="fa fa-plus add-icon"></span>
                                                                        </span>
                                                                    </span>
                                                                    <img  src="<?php echo URL::asset('img/md_miniatura/'. $contenido->imagen); ?>" alt="" class="imgwidth" style="height: 50%; ">

                                                                </div>
                                                                <br>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                <h3 class="block">Seleccione pie de página</h3>
                                                <input type="hidden" id="idfooter" name="idfooter" value="" />
                                                <div class="alert alert-danger display-none">
                                                    <button class="close" data-dismiss="alert"></button> Seleccione un pie de página.
                                                </div>
                                                <div class="cbp-wrapper-outer">
                                                    <div class="col-md-12">
                                                        @foreach($pies as $pie)
                                                            <div class="col-md-4 col-sm-6 footerselect footmdl" style="margin-bottom: 10px">
                                                                <a href="javascript:;" class="contenedor-miniatura" data-idfooter="{{$pie->id}}" rel="nofollow">
                                                                    <span class="hover-md-miniatura">
                                                                        <!--span class="col-md-6" style=" text-align: right; padding: 25% 0 0 0 ; height: 100%;">
                                                                            <span class="fa fa-search"></span>
                                                                            <span style="font-size:35px">|</span>
                                                                         </span-->
                                                                         <span class="col-md-12 footer">
                                                                            <span class="fa fa-plus add-icon"></span>
                                                                        </span>
                                                                    </span>
                                                                    <img src="<?php echo URL::asset('img/md_miniatura/'. $pie->imagen); ?>" alt="" class="imgwidth" style="height: 50%; ">
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab5">
                                                <h3 class="block">Datos generales</h3>
                                                <div class="alert alert-danger display-none">
                                                    <button class="close" data-dismiss="alert"></button> Se encontraron algunos errores. Verificar los datos ingresados. </div>
                                                <div class="alert  hidden alert-email-user">
                                                    <button class="close" data-dismiss="alert"></button> El nombre de usuario y el email no coinciden. </div>

                                                <div class="alert alert-success display-none">
                                                    <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                <div class="col-md-5">
                                                    <br>
                                                    <div class="form-group form-md-line-input" style="position: relative">
                                                        <input type="text" class="form-control input-newpry valueInput" id="username" placeholder="Usuario*" name="username">
                                                        <span class="help-block">Ingrese nombre de usuario</span>
                                                        <i class="fa fa-spin fa-spinner hidden checking-user-availability" style="position: absolute; right: 15px; top:25px;"></i>
                                                    </div>
                                                    <div class="form-group form-md-line-input" style="position: relative">
                                                        <input type="password" class="form-control input-newpry valueInput" id="submit_form_password" placeholder="Password*" name="password">
                                                        <span class="help-block">Ingrese password</span>
                                                        <i class="fa fa-spin fa-spinner hidden checking-user-availability" style="position: absolute; right: 15px; top:25px;"></i>
                                                    </div>
                                                    <div class="form-group form-md-line-input" style="position: relative">
                                                        <input type="password" class="form-control input-newpry valueInput" id="rpassword" placeholder="Repetir password*" name="rpassword">
                                                        <span class="help-block">Repita password</span>
                                                        <i class="fa fa-spin fa-spinner hidden checking-user-availability" style="position: absolute; right: 15px; top:25px;"></i>
                                                    </div>
                                                    <div class="form-group form-md-line-input" style="position: relative">
                                                        <input type="text" class="form-control input-newpry valueInput" id="email" placeholder="Email*" name="email">
                                                        <span class="help-block help-block-email">Ingrese email de contacto</span>
                                                        <i class="fa fa-spin fa-spinner hidden checking-email-availability" style="position: absolute; right: 15px; top:25px;"></i>
                                                        <i class="btn fa fa-check hidden email-disponible" style="position: absolute; right: 0; top:15px; color: green"></i>
                                                        <i class="btn fa fa-remove hidden email-nodisponible" style="position: absolute; right: 0; top:15px; color:red"></i>
                                                    </div>
                                                    @if(Auth::user()->nivel_id==2)
                                                    <?php $id_agencia = App\Console\Commands\Funciones::getAgencia(Auth::user()->id); ?>
                                                    <input type="hidden" name="id_agencia" value="{{$id_agencia}}">
                                                    @else
                                                    <div class="form-group form-md-line-input">
                                                        {!! Form::select('id_agencia', array('' => 'Agencia')+ $agencias ,null,['class'=> 'form-control select-newpry', 'id' => 'id_agencia', 'required'])!!}
                                                        <span class="help-block">Seleccione una agencia</span>
                                                    </div>
                                                    @endif
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control input-newpry" id="nombre_proyecto" placeholder="Proyecto*" name="nombre_proyecto">
                                                        <span class="help-block">Ingrese nombre de proyecto</span>
                                                    </div>

                                                    <!--div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control input-newpry" id="apellidom" placeholder="Apellido materno" name="apellidom">
                                                        <span class="help-block">Ingrese apellido materno de contacto</span>
                                                    </div-->
                                                    <!--div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control input-newpry" id="telefono2" placeholder="Teléfono 2" name="telefono2">
                                                        <span class="help-block">Ingrese teléfono de contacto</span>
                                                    </div-->
                                                    <input class="nomostrar" id="cliente_existente" name="cliente_existente" value="0"/>
                                                    <input class="nomostrar" id="id_cliente" name="id_cliente" value=""/>
                                                    <input class="nomostrar" id="usuario_existente" name="usuario_existente" value="0"/>
                                                    <input class="nomostrar" id="id_usuario" name="id_usuario" value=""/>

                                                </div>
                                                <div class="col-md-5 col-md-offset-1">
                                                    <br>
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control input-newpry" id="dominio" placeholder="Url" name="dominio">
                                                        <span class="help-block">Ingrese URL para la nueva web (www.example.com)</span>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control input-newpry" id="cliente" placeholder="Cliente" name="cliente" disabled>
                                                        <span class="help-block">Ingrese nombre de empresa</span>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control input-newpry" id="nombres" placeholder="Nombre" name="nombres">
                                                        <span class="help-block">Ingrese nombre de contacto</span>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control input-newpry" id="apellidop" placeholder="Apellido" name="apellidop">
                                                        <span class="help-block">Ingrese apellido paterno de contacto</span>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control input-newpry" id="telefono" placeholder="Teléfono" name="telefono">
                                                        <span class="help-block">Ingrese teléfono de contacto</span>
                                                    </div>
                                                    <!--div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control input-newpry" id="razon_social" placeholder="Razón social" name="razon_social">
                                                        <span class="help-block">Ingrese razón social</span>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control input-newpry" id="direccion" placeholder="Dirección" name="direccion">
                                                        <span class="help-block">Ingrese dirección</span>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control input-newpry" id="ruc" placeholder="RUC" name="ruc">
                                                        <span class="help-block">Ingrese RUC</span>
                                                    </div-->
                                                </div>
                                                <div class="col-md-12"> Todos los campos marcados con (*) son obligatorios.</div>
                                            </div>
                                            <div class="form-actions">

                                                <div class="row" align="center">
                                                    <div class="separacion">

                                                    </div>
                                                    <div class="col-md-offset-3 col-md-6">
                                                        <a href="javascript:;" class="btn default button-previous disabled" style="display: none;">
                                                            <i class="fa fa-angle-left"></i> | Regresar </a>
                                                        <a href="javascript:;" class="btn btn-outline green button-next btn-continuar"> Continuar |
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                        <input type="hidden" value="0" id="skip_on"/>
                                                        <a href="javascript:;" class="btn button-next btn-skip">skip</a>
                                                        <!-- <button type="submit" class="btn green button-submit" style="display: none;"> Finalizar
                                                            <i class="fa fa-check"></i>
                                                        </button> -->
                                                        <div class="btn green button-submit register" style="display: none;"> Finalizar
                                                            <i class="fa fa-check"></i>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 class="block">Mi pagina</h3>
                                            <div class="selectionmdl" id="selectionmdl">
                                                <div class="mdlheader"></div>
                                                <div class="mdlsection"></div>
                                                <div class="mdlfooter"></div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                        </div>


                        <!--/form-->
                        {!! Form::close() !!}
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END SIDEBAR CONTENT LAYOUT -->
    </div>
    <script>

        $('.btn-skip').on('click', function() {
            $('#skip_on').val('1');
        });

        $('.cabecera').on('click', function(){

            var contenedor_cabecera = $(this).parent().parent();
            $('#idcabecera').val($(contenedor_cabecera).attr('data-idcabecera'));

            var img = $(contenedor_cabecera).find('img').attr('src');
            $('.mdlheader').html('<div class="img-selected"><div class="remove-hover"><span class="fa fa-times-circle remove-selected-modulo remove-cabecera"></span></div><img src="' + img + '" alt="" class="imgwidth"></div>');

        });

        $(document).on('click', '.contenido', function(){
            var contenedor_contenido = $(this).parent().parent();
            var idmodulo = $(contenedor_contenido).attr('data-idmodulo');

            var img = $(contenedor_contenido).find('img').attr('src');
            $('.mdlsection').append('<div class="img-selected">' +
                    '<div class="remove-hover"><span class="fa fa-times-circle remove-selected-modulo remove-contenido"></span></div>'+
                    '<img src="'+img+'" alt="" class="imgwidth">' +
                    '<input type="text" name="cont_seleccionados[]" value="'+idmodulo +'" class="mdseleccionados nomostrar"/>'+
                    '</div>');

        });

        $('.footer').on('click', function(){
            var contenedor_pie = $(this).parent().parent();
            $('#idfooter').val($(contenedor_pie).attr('data-idfooter'));

            var img =  $(contenedor_pie).find('img').attr('src');

            $('.mdlfooter').html('<div class="img-selected"><div class="remove-hover"><span class="fa fa-times-circle remove-selected-modulo remove-pie"></span></div><img src="'+img+'" alt="" class="imgwidth"></div>');
        });

    </script>

    <script>

        $(document).on('click', '.remove-cabecera', function(event) {
            $('.mdlheader').empty();
            $('#idcabecera').val('');
        });
        $(document).on('click', '.remove-pie', function(event) {
            $('.mdlfooter').empty();
            $('#idfooter').val('');
        });
        $(document).on('click', '.remove-contenido', function(event) {

            $(this).parent().parent().remove();

         });
    </script>
    <script>

        $('.valueInput').on('focusout', function(event) {
            $('.checking-user-availability').removeClass('hidden');
            var Buscar = $(this).val();
            var tipo =  $(this).attr('id');
            /*if(Buscar!='')*/
            /*{
                $(this).closest('.form-group').removeClass('has-success').addClass('has-error');
                $('.checking-user-availability').addClass('hidden');
                return false;
            }*/
            if(Buscar!=''){
            var data = {};
            data._token = '{!!csrf_token()!!}';
            data.valor = Buscar;
            data.tipo = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: "{!! url(Request::segment(1).'/buscarusuario') !!}",
                data: data,
                success: function (data) {
                    console.log(data);
                    if(data!=0)
                    {
                        //console.table(data);
                        //console.log(data[0].email);
                        $('#submit_form_password').parent().css('display','none');
                        $('#rpassword').parent().css('display','none');

                        $('#id_usuario').val(data[0].idUsuario);
                        $('#username').val(data[0].username);
                        $('#email').val(data[0].email);

                        $('#usuario_existente').val('1');

                        if(data[0].idCliente!=null)
                        {
                            $('#id_cliente').val(data[0].idCliente);
                            $('#nombres').val(data[0].nombres);
                            $('#apellidop').val(data[0].apellidop);
                            $('#telefono').val(data[0].telefono);
                            $('#cliente').val(data[0].cliente);

                            $('#cliente_existente').val('1');

                            //acciones
                            $('#nombres').attr('disabled',true);
                            $('#apellidop').attr('disabled',true);
                            $('#telefono').attr('disabled',true);
                            $('#cliente').attr('disabled',true);
                        }
                        else
                        {
                            $('#cliente_existente').val('0');
                            $('#nombres').removeAttr('disabled');
                            $('#apellidop').removeAttr('disabled');
                            $('#telefono').removeAttr('disabled');
                            $('#cliente').removeAttr('disabled');
                        }

                        
                    }else{
                        $('#nombres').removeAttr('disabled');
                        $('#apellidop').removeAttr('disabled');
                        $('#telefono').removeAttr('disabled');
                        $('#cliente').removeAttr('disabled');
                        $('#usuario_existente').val('0');
                        $('#cliente_existente').val('0');
                        $('#submit_form_password').parent().css('display','block');
                        $('#rpassword').parent().css('display','block');
                        //
                        /*$('#nombres').val('');
                        $('#apellidop').val('');
                        $('#telefono').val('');
                        $('#cliente').val('');*/
                    }
                    /*if(data!='0')
                    {
                        $('#id_usuario').val(data.id);
                        $('#email').val(data.email);
                        $('#cliente_existente').val('0');
                        $('#usuario_existente').val('1');

                        var datacliente = {};
                        datacliente._token = '{!!csrf_token()!!}';
                        datacliente.username = username;
                        $.ajax({
                            type: "POST",
                            url: "{!! url(Request::segment(1).'/buscarcliente') !!}",
                            data: datacliente,
                            success: function (data) {
                                if(data!='0')
                                {
                                    $('#id_cliente').val(data.id);
                                    $('#id_agencia').val(data.id_agencia);
                                    $('#cliente').val(data.cliente);
                                    $('#nombres').val(data.nombres);
                                    $('#apellidop').val(data.apellidop);
                                    $('#telefono').val(data.telefono);
                                    $('#cliente_existente').val('1');
                                }
                                console.log(data);
                            },
                            error: function () {
                                alert('Error en la conexión');
                            }
                        });
                    }
                    else
                    {
                        $('#id_usuario').val('');
                        $('#email').val('');
                        $('#cliente_existente').val('0');
                        $('#usuario_existente').val('0');
                        $('#id_cliente').val('');
                        $('#id_agencia').val('');
                        $('#cliente').val('');
                        $('#nombres').val('');
                        $('#apellidop').val('');
                        $('#telefono').val('');
                        

                    }*/
                    /*$('.checking-user-availability').addClass('hidden');
                    $('.input-newpry').removeAttr('disabled');
                    $('#email').addClass('email-disponible');
                    $('#nombres').focus();*/
                },
                error: function () {
                    alert('Error en la conexión');
                }
            });
        }else{
            /*$('#username').val('');
            $('#email').val('');
            $('#nombres').val('');
            $('#apellidop').val('');
            $('#telefono').val('');
            $('#cliente').val('');*/
            $('#username').removeAttr('disabled');
            $('#nombres').removeAttr('disabled');
            $('#apellidop').removeAttr('disabled');
            $('#telefono').removeAttr('disabled');
            $('#cliente').removeAttr('disabled');
            $('#email').removeAttr('disabled');
            $('#cliente').removeAttr('disabled');
            }

            $('.checking-user-availability').addClass('hidden');
        });
        /*$(document).on('blur', '#email', function(event) {
            if($('#usuario_existente').val()=='0')
            {
                $('.checking-email-availability').removeClass('hidden');
                $('.email-disponible').addClass('hidden');
                $('.email-nodisponible').addClass('hidden');

                var data = {};
                data._token = '{!!csrf_token()!!}';
                data.email = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "{!! url(Request::segment(1).'/emailavailability') !!}",
                    data: data,
                    success: function (data) {
                        $('.checking-email-availability').addClass('hidden');
                        if(data=='1')
                        {
                            $('.email-disponible').removeClass('hidden');
                            $('#email').addClass('email-disponible');
                            $('#email-error').remove();
                        }
                        else{
                            $('.email-nodisponible').removeClass('hidden');
                            //$('#email').removeClass('email-disponible');
                        }
                    },
                    error: function () {
                        $('.checking-email-availability').addClass('hidden');
                        alert('Error en la conexión');
                    }
                });
            }
        });*/
    $('.register').on('click', function(event) {
        $('.alert-email-user').addClass('hidden');
        var datacliente = {};
        datacliente._token = '{!!csrf_token()!!}';
        datacliente.username = $('#username').val();
        datacliente.email = $('#email').val();
        $.ajax({
            type: "POST",
            url: "{!! url(Request::segment(1).'/buscarcliente') !!}",
            data: datacliente,
            success: function (data) {
                if(data!='0')
                {
                    $('#username').val();
                    if($('#username').val() == data.username && $('#email').val() == data.email){
                        $('#submit_form').submit();
                    }else{
                        $('.alert-email-user').removeClass('hidden');
                    }
                }else{
                    $('#submit_form').submit();
                }
            },
            error: function () {
                alert('Error en la conexión');
            }
        });
    });
    </script>
@endsection