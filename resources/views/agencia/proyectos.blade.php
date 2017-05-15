@extends('includes.app')
@section('menu')
@include('includes.menuproyectos')
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
<link href="<?php echo URL::asset('css/proyectos-listado.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('css/croppie/croppie.css'); ?>" rel="stylesheet" type="text/css" />

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
                        <div class="row">
                        @if($estado==2)
                            <div class="col-xs-12 col-sm-6 col-md-4 item-pry">
                                <a href="{!!url('agencia/nuevoproyecto')!!}">
                                    <div class="thumbnail">
                                        <div class="thumb-img" style="position: relative; text-align: center">
                                            <img  src="{!!url('img/nuevoproyecto2.jpg')!!}" alt="" style="width: 100%;border-bottom: 1px solid #ddd">
                                            <span class="texto-new-pry">
                                                <span class="add-pry">+</span><br>
                                                <span class="crear-pry-texto">Crear nuevo proyecto</span>
                                            </span>
                                        </div>
                                        <div class="caption">
                                            <h5 class="pry">
                                                &nbsp;
                                            </h5>
                                            <span class="estado-pry">
                                            &nbsp;
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                            @foreach($proyectos as $proyecto)
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="thumb-hover">
                                                <a href="{!!url('borrador/'.$proyecto->url_cliente.'/'.$proyecto->url_proyecto)!!}" target="_blank" style="width: 100%; height: 100%; z-index:1">
                                                    @if($proyecto->thumbnail!='')
                                                        <img id="thumbnail-hover{{$proyecto->idesP}}" src="{!!url('upload/'.$proyecto->idesP.'/'.$proyecto->thumbnail)!!}" alt="" style="width: 100%;">
                                                    @else
                                                        <img id="thumbnail-hover{{$proyecto->idesP}}" src="{!!url('img/template.png')!!}" alt="" style="width: 100%;">
                                                    @endif
                                                </a>

                                                <a class="fa fa-picture-o editar-thumbnail" data-toggle="modal" data-target="#addThumbnail" data-id="{{$proyecto->idesP}}" style="z-index: 2"> </a>
                                            </div>
                                            @if($proyecto->thumbnail!='')
                                                <img id="thumbnail{{$proyecto->idesP}}" src="{!!url('upload/'.$proyecto->idesP.'/'.$proyecto->thumbnail)!!}" alt="" style="width: 100%; border-bottom: 1px solid #ddd">
                                            @else
                                                <img id="thumbnail{{$proyecto->idesP}}" src="{!!url('img/template.png')!!}" alt="" style="width: 100%;border-bottom: 1px solid #ddd">
                                            @endif
                                        </div>
                                        <div class="caption">
                                            <h5 class="cliente-nombre">
                                                @if($proyecto->cliente!='') <a href="{!!url('borrador/'.$proyecto->url_cliente.'/'.$proyecto->url_proyecto)!!}" target="_blank">{{$proyecto->cliente }}</a>
                                                @else <a href="{!!url('borrador/'.$proyecto->url_cliente.'/'.$proyecto->url_proyecto)!!}" target="_blank">...</a>
                                                @endif
                                            </h5>
                                            <span class="proyecto-nombre"><a href="{!!url('borrador/'.$proyecto->url_cliente.'/'.$proyecto->url_proyecto)!!}" target="_blank">{!!$proyecto->nombre_proyecto!!}</a></span>
                                        <span class="action-proyectos">
                                            <a href="{!!url(Request::segment(1).'/editar/'.$proyecto->idesP.'/'.$proyecto->idcliente)!!}" class="" role="button">
                                                <span> <img src="{!!url('img/recursos/lapiz-mipagina.png')!!}" alt=""></span>
                                            </a>
                                            <a class="editar-pry-modal" role="button" data-toggle="modal" data-target="#editarDatosProyecto" data-pry="{{$proyecto->idesP}}" data-url-prototipo="{!!url('borrador/'.$proyecto->url_cliente.'/'.$proyecto->url_proyecto)!!}">
                                                <span> <img src="{!!url('img/recursos/3puntos-mipagina.png')!!}" alt=""></span>
                                            </a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{--div class="table-scrollable">
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        <i class="fa fa-briefcase"></i> Proyecto </th>
                                    <th class="hidden-xs">
                                        <i class="fa fa-user"></i> Perfil del cliente </th>
                                    <th>
                                        <i class="fa fa-th-large"></i> Página web </th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td class="highlight">
                                        <div class="success"></div>
                                        &nbsp; {!!$proyecto->nombre_proyecto!!}
                                </td>
                                <td class="hidden-xs">
                                    {!!$proyecto->cliente!!}
                                <a href="javascript:;" class="btn btn-outline btn-circle green btn-sm black btnCliente"
                                   tabindex="0" data-toggle="popover" data-trigger="focus" data-popover-content="#a1"
                                        {!!App\Console\Commands\Funciones::dtCliente($proyecto->idesP)!!}>
                                            <i class="fa fa-info"></i> info </a>
                                        <a href="{!!url('comercial/editarproyecto/'.$proyecto->idesP)!!}" class="btn btn-outline btn-circle btn-sm purple">
                                            <i class="fa fa-edit"></i> Editar </a>
                                    </td>
                                    <td>
                                        <a href="{!!url('borrador/'.$proyecto->url_cliente.'/'.$proyecto->url_proyecto)!!}" class="btn btn-outline btn-circle dark btn-sm blue" target="_blank">
                                            <i class="fa fa-eye"></i> Ver </a>
                                        <a href="{!!url('comercial/editar/'.$proyecto->idesP.'/'.$proyecto->id)!!}" class="btn btn-outline btn-circle btn-sm purple">
                                            <i class="fa fa-edit"></i> Editar </a>

                                        <a href="{!!url('comercial/softdeleteproyecto/'.$proyecto->idesP)!!}" class="btn btn-outline btn-circle red btn-sm black">
                                            <i class="fa fa-trash-o"></i> Eliminar </a>
                                      <!--  <a href="javascript:;" class="btn btn-outline btn-circle red btn-sm black">
                                            <i class="fa fa-unlink"></i> Suspender </a>-->

                        <!--/td>
                    </tr>

                    </tbody>
                </table>
            </div--}}
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END SIDEBAR CONTENT LAYOUT -->
    </div>
    <div id="a1" class="hidden">
        <div class="popover-heading">Detalle de Proyecto
            @if(isset($proyecto->id))
                <a href="{!!url(Request::segment(1).'/editarproyecto/'.$proyecto->id)!!}" class=""><span class="fa fa-pencil"></span></a><br/>
            @endif
        </div>
        <div class="popover-body">
            <div>
                <label for="">Proyecto: </label> <span class="Dtproyecto"></span>

            </div>
            <div>
                <label for="">URL: </label> <span class="Dturl"></span>
            </div>
            <div>
                <label for="">Cliente: </label> <span class="Dtcliente"></span>
            </div>
            <div>
                <label for="">Razon Social: </label> <span class="DtRsocial"></span>
            </div>
            <div>
                <label for="">Dirección: </label> <span class="Dtdireccion"></span>
            </div>
            <div>
                <label for="">Ruc: </label> <span class="Dtruc"></span>
            </div>
            <div>
                <label for="">Nombre: </label> <span class="Dtnombre"></span>
            </div>
            <div>
                <label for="">Apellido Paterno: </label> <span class="DtApellidop"></span>
            </div>
            <div>
                <label for="">Apellido Materno: </label> <span class="DtApellidom"></span>
            </div>
            <div>
                <label for="">Email: </label> <span class="Dtemail"></span>
            </div>
            <div>
                <label for="">Teléfono 1: </label> <span class="Dttelefono"></span>
            </div>
            <div>
                <label for="">Teléfono 2: </label> <span class="Dttelefono2"></span>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addThumbnail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="text-align: center; font-family: 'MontserratBold', sans-serif">THUMBNAIL </h4>
                </div>
                <div class="modal-body">
                    <div class="container contenedor-thumbnail" style="width: 100%">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12 nota-editar-img">
                                    <i style="font-family: 'Lato', sans-serif ">*La imagen guardada será recortada al tamaño del cuadrante interior.</i>
                                </div>
                                <div class="croppie-box-thumbnail" id="croppie-box-thumbnail" style="padding-left: 0">
                                </div>
                                <input class="nomostrar" value="" id="id-proyecto"/>

                            <span class="btn btn-primary btn-openfile-thumbnail">
                                <span class="fa fa-folder-open-o"></span> <input type="file" id="openfile-thumbnail" class="file" name="file">
                            </span>
                             <span class="btn btn-primary btn-save-thumbnail">
                                <span class="fa fa-floppy-o"></span>
                            </span>
                                <div class="col-md-12" align="center">
                                    <div class="alert alert-success alert-dismissable nomostrar label-cargando col-md-6 col-md-offset-3" style="background: none">
                                        <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> La imagen se está guardando...</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editarDatosProyecto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            {!! Form::open(array('url' => Request::segment(1).'/editproyecto')) !!}
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="tab" href="#compartir">Compartir</a></li>
                        <li><a data-toggle="tab" href="#informacion">Información</a></li>
                        <li><a data-toggle="tab" href="#seo">SEO</a></li>
                        <li><a data-toggle="tab" href="#analytics">Analytics</a></li>
                        <li><a data-toggle="tab" href="#otros">Otros</a></li>
                    </ul>
                    <input type="hidden" name="id_proyecto" id="id_proyecto_editpry"/>
                    <div class="tab-content">
                        <div id="compartir" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <br><br>
                                    <h5 class="prototipo-text">Your prototype sharing URL</h5>
                                    <p class="prototipo-parrafo">Copy and paste the link below into emails, chats or browsers.</p>
                                    <div class="col-sm-8">
                                        <input type="text" name="url_prototipo" id="url_prototipo" value="" class="url-prototipo" readonly>
                                    </div>
                                    <div class="col-sm-4">
                                        <button type="button" class="btn-copy">Copy</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="informacion" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="titulo-section">Datos generales</h4>
                                    <br>
                                    <div class="col-sm-6 form-group form-md-line-input">
                                        <input class="input-editpry form-control" type="text" name="nombre_proyecto" id="nombre_pry_modaledit" value="" placeholder="Nombre del proyecto"/>
                                        <span class="help-block">Ingrese nombre de proyecto</span>
                                    </div>
                                    <div class="col-sm-6 form-group form-md-line-input">
                                        <input class="input-editpry form-control" type="text" name="name" id="nombre_usuario_modaledit" value="" placeholder="Nombre de usuario"/>
                                        <span class="help-block">Ingrese nombre de usuario</span>
                                    </div>
                                    <div class="col-sm-6 form-group form-md-line-input">
                                        <input class="input-editpry form-control" type="text" name="dominio" id="url_modaledit" value="" placeholder="URL"/>
                                        <span class="help-block">Ingrese URL (http://example.com)</span>
                                    </div>
                                    <div class="col-sm-6 form-group form-md-line-input">
                                        {!! Form::select('estado', array('0' => 'Borrador', '1' => 'Publicado') ,0,['class'=> 'form-control select-modaledit', 'id' => 'estado_modaledit'])!!}
                                        <span class="help-block">Seleccione estado de proyecto</span>
                                    </div>
                                    <div class="col-sm-6 form-group form-md-line-input">
                                        <input class="input-editpry form-control" type="text" name="email" id="email_modaledit" value="" placeholder="E-mail"/>
                                        <span class="help-block">Ingrese email de contacto</span>
                                    </div>
                                    <div class="col-sm-6 form-group form-md-line-input">
                                        <input class="input-editpry form-control" type="text" name="telefono" id="telefono_modaledit" value="" placeholder="Teléfono"/>
                                        <span class="help-block">Ingrese teléfono de contacto</span>
                                    </div>
                                    <div class="mas-campos" style="display: none">
                                        <div class="col-sm-6 form-group form-md-line-input">
                                            <input class="input-editpry form-control" type="text" name="cliente" id="cliente_modaledit" value="" placeholder="Cliente"/>
                                            <span class="help-block">Ingrese nombre de empresa</span>
                                        </div>
                                        <div class="col-sm-6 form-group form-md-line-input">
                                            <input class="input-editpry form-control" type="text" name="razon_social" id="razon_social_modaledit" value="" placeholder="Razón social"/>
                                            <span class="help-block">Ingrese razón social</span>
                                        </div>
                                        <div class="col-sm-6 form-group form-md-line-input">
                                            <input class="input-editpry form-control" type="text" name="direccion" id="direccion_modaledit" value="" placeholder="Dirección"/>
                                            <span class="help-block">Ingrese dirección</span>
                                        </div>
                                        <div class="col-sm-6 form-group form-md-line-input">
                                            <input class="input-editpry form-control" type="text" name="ruc" id="ruc_modaledit" value="" placeholder="RUC"/>
                                            <span class="help-block">Ingrese RUC</span>
                                        </div>
                                        <div class="col-sm-6 form-group form-md-line-input">
                                            <input class="input-editpry form-control" type="text" name="nombres" id="nombres_modaledit" value="" placeholder="Nombre(s)"/>
                                            <span class="help-block">Ingrese nombre</span>
                                        </div>
                                        <div class="col-sm-6 form-group form-md-line-input">
                                            <input class="input-editpry form-control" type="text" name="apellidop" id="apellidop_modaledit" value="" placeholder="Apellido Paterno"/>
                                            <span class="help-block">Ingrese apellido paterno</span>
                                        </div>
                                        <div class="col-sm-6 form-group form-md-line-input">
                                            <input class="input-editpry form-control" type="text" name="apellidom" id="apellidom_modaledit" value="" placeholder="Apellido Materno"/>
                                            <span class="help-block">Ingrese apellido materno</span>
                                        </div>
                                        <div class="col-sm-6 form-group form-md-line-input">
                                            <input class="input-editpry form-control" type="text" name="telefono2" id="telefono2_modaledit" value="" placeholder="Teléfono Adicional"/>
                                            <span class="help-block">Ingrese teléfono de contacto</span>
                                        </div>
                                        <div class="col-sm-6 form-group form-md-line-input">
                                            <input class="input-editpry form-control" type="text" name="email_formulario" id="email_formulario_modaledit" value="" placeholder="E-mail para formulario"/>
                                            <span class="help-block">Ingrese e-mail para formulario</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-4" align="center">
                                        <br>
                                        <button type="submit" class="btn-guardar-modaledit">Guardar</button>
                                    </div>
                                    <div class="col-sm-12 " align="center">
                                        <br>
                                        <a href="javascript:;" class="ver-mas-modaledit">ver más opciones</a>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="seo" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="titulo-section">SEO</h4>
                                    <br>
                                    <div class="col-sm-12 form-group form-md-line-input">
                                        <textarea class="textarea-editpry form-control"  name="descripcion_site" id="descripcion_site_modaledit" placeholder="Descripción del Site"></textarea>
                                        <span class="help-block">Ingrese descripción del site</span>
                                    </div>
                                    <div class="col-sm-12 form-group form-md-line-input">
                                        <textarea class="textarea-editpry form-control" name="keywords" id="keywords_modaledit"  placeholder="Keywords"></textarea>
                                        <span class="help-block"> Colocar palabras clave separadas por comas</span>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-4" align="center">
                                        <br>
                                        <button type="submit" class="btn-guardar-modaledit">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="analytics" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="titulo-section">Analytics</h4>
                                    <br>
                                    <div class="col-sm-12 form-group form-md-line-input">
                                        <input class="input-editpry form-control" type="text" name="google_analytics" id="google_analytics_modaledit" value="" placeholder="Google Analytics"/>
                                        <span class="help-block">Ingrese código único (UA-80444231-1)</span>
                                    </div>

                                    <div class="col-sm-4 col-sm-offset-4" align="center">
                                        <br>
                                        <button type="submit" class="btn-guardar-modaledit">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="otros" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="titulo-section">Otros</h4>
                                    <br>

                                    <div class="col-sm-6 form-group form-md-line-input" style="position: relative">
                                        <input class="input-editpry form-control" type="text" name="instagram_user_id" id="instagram_user_id_modaledit" value="" placeholder="Instagram User Id"/>
                                        <span class="help-block ">Genere su Instagram User Id</span>
                                        <a class="btn fa fa-instagram link-campo" target="_blank" href="https://smashballoon.com/instagram-feed/find-instagram-user-id/"></a>
                                    </div>
                                    <div class="col-sm-6 form-group form-md-line-input">
                                        <input class="input-editpry form-control" type="text" name="twitter_timeline" id="twitter_timeline_modaledit" value="" placeholder="Timeline de Twitter"/>
                                        <span class="help-block ">Twitter (https://twitter.com/usuario)</span>
                                    </div>
                                    <div class="col-sm-6 form-group form-md-line-input" style="position: relative">
                                        <input class="input-editpry form-control" type="text" name="instagram_token" id="instagram_token_modaledit" value="" placeholder="Instagram Access Token"/>
                                        <span class="help-block ">Genere su Instagram Access Token</span>
                                        <a class="btn fa fa-key link-campo" target="_blank" href="http://instagram.pixelunion.net//" ></a>
                                    </div>
                                    <div class="col-sm-6 form-group form-md-line-input" style="position: relative">
                                        <input class="input-editpry form-control" type="text" name="google_maps_key" id="google_maps_key_modaledit" value="" placeholder="Google Maps Api Key"/>
                                        <span class="help-block ">Genere una key de Google maps</span>
                                        <a class="btn fa fa-map-marker link-campo" target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key"></a>
                                    </div>
                                    <div class="col-sm-6 form-group form-md-line-input">
                                        {!! Form::select('e_commerce', array('0' => 'Sin carrito', '1' => 'Con carrito') ,0,['class'=> 'form-control select-modaledit', 'id'=> 'e_commerce_modaledit'])!!}
                                        <span class="help-block">Carrito de compras</span>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-4" align="center">
                                        <br>
                                        <button type="submit" class="btn-guardar-modaledit">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <script>
        $( document ).ready(function() {
            $('.montserrat-menu .dropdown').removeClass('active');
            $('.montserrat-menu .dropdown').removeClass('open');
            $('.montserrat-menu .dropdown').removeClass('selected');

            if('{{$estado}}'=='0')
            {
                $('.aproyectosborradores').parent().addClass('active');
                $('.aproyectosborradores').parent().addClass('open');
                $('.aproyectosborradores').parent().addClass('selected');
            }
            else
            {
                if('{{$estado}}'=='1')
                {
                    $('.aproyectospublicados').parent().addClass('active');
                    $('.aproyectospublicados').parent().addClass('open');
                    $('.aproyectospublicados').parent().addClass('selected');
                }
                else{
                    $('.aproyectos').parent().addClass('active');
                    $('.aproyectos').parent().addClass('open');
                    $('.aproyectos').parent().addClass('selected');
                }
            }


        });

        $(function(){
            $("[data-toggle=popover]").popover({
                html : true,
                container: 'body',
                content: function() {
                    var content = $(this).attr("data-popover-content");
                    return $(content).children(".popover-body").html();
                },
                title: function() {
                    var title = $(this).attr("data-popover-content");
                    return $(title).children(".popover-heading").html();
                }
            });

        });
        jQuery(document).ready(function($) {
            $('.btnCliente').on('click', function(event) {


                $('.Dtproyecto').html($(this).attr('data-proyecto'));
                $('.Dturl').html($(this).attr('data-url'));
                $('.Dtcliente').html($(this).attr('data-cliente'));
                $('.DtRsocial').html($(this).attr('data-razonsocial'));
                $('.Dtdireccion').html($(this).attr('data-direccion'));
                $('.Dtruc').html($(this).attr('data-ruc'));
                $('.Dtnombre').html($(this).attr('data-nombre'));
                $('.DtApellidop').html($(this).attr('data-apellidop'));
                $('.DtApellidom').html($(this).attr('data-apellidom'));
                $('.Dtemail').html($(this).attr('data-email'));
                $('.Dttelefono').html($(this).attr('data-telefono'));
                $('.Dttelefono2').html($(this).attr('data-telefono2'));

            });
            $('.btnDtell').on('click', function(event) {


                $('.Dtproyecto').html($(this).attr('data-descripcion'));

            });
        });


        $('.editar-pry-modal').on('click', function(event) {
            $('#id_proyecto_editpry').val($(this).attr('data-pry'));
            $('#url_prototipo').val($(this).attr('data-url-prototipo'));

            var data = {};
            data._token = '{!!csrf_token()!!}';
            data.id_proyecto = $(this).attr('data-pry');

            $.ajax({
                type: "POST",
                url: "{!! url(Request::segment(1).'/obtenerproyecto') !!}",
                data: data,
                success: function (data) {
                    console.log(data)
                    $('#nombre_pry_modaledit').val(data[0].nombre_proyecto);
                    $('#nombre_usuario_modaledit').val(data[0].name);
                    $('#url_modaledit').val(data[0].dominio);
                    $('#estado_modaledit').val(data[0].estado);
                    $('#cliente_modaledit').val(data[0].cliente);
                    $('#email_modaledit').val(data[0].email);
                    $('#telefono_modaledit').val(data[0].telefono);
                    $('#razon_social_modaledit').val(data[0].razon_social);
                    $('#direccion_modaledit').val(data[0].direccion);
                    $('#ruc_modaledit').val(data[0].ruc);
                    $('#email_formulario_modaledit').val(data[0].email_formulario);
                    $('#nombres_modaledit').val(data[0].nombres);
                    $('#apellidop_modaledit').val(data[0].apellidop);
                    $('#apellidom_modaledit').val(data[0].apellidom);
                    $('#telefono2_modaledit').val(data[0].telefono2);
                    $('#descripcion_site_modaledit').val(data[0].descripcion_site);
                    $('#keywords_modaledit').val(data[0].keywords);
                    $('#google_analytics_modaledit').val(data[0].google_analytics);
                    $('#instagram_user_id_modaledit').val(data[0].instagram_user_id);
                    $('#twitter_timeline_modaledit').val(data[0].twitter_timeline);
                    $('#instagram_token_modaledit').val(data[0].instagram_token);
                    $('#google_maps_key_modaledit').val(data[0].google_maps_key);
                    $('#e_commerce_modaledit').val(data[0].e_commerce);


                },
                error: function (xmlHttpRequest, textStatus, errorThrown){
                    if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                        return;
                }
            }, "json");
        });
        $('.ver-mas-modaledit').on('click', function(event) {
            if($(this).text()=='ver más opciones')
            {
                $(this).text('ver menos opciones');
            }
            else
            {
                $(this).text('ver más opciones');
            }

            $('.mas-campos').fadeToggle( "fast", "linear" );


        });
        $('.btn-copy').on('click', function(event) {
            $('#url_prototipo').select();
            document.execCommand("copy");
        });

    </script>
    <script src="<?php echo URL::asset('js/cropbox/croppie.js'); ?>" type="text/javascript"></script>
    <script>
        $('.editar-thumbnail').on('click', function(event) {
            $('.label-cargando').addClass('nomostrar');
            $('.nota-editar-img').removeClass('nomostrar');

            var img= $(this).parent().parent().find('img').attr('src');
            var id_proyecto = $(this).attr('data-id');

            $('#id-proyecto').val(id_proyecto);

            $('#croppie-box-thumbnail').find('.cr-boundary').remove();
            $('#croppie-box-thumbnail').find('.cr-slider-wrap').remove();

            var $uploadCrop;

            $uploadCrop = $('#croppie-box-thumbnail').croppie({
                viewport: {
                    width: 500,
                    height: 300,
                    type: 'square'
                },
                boundary: {
                    width: 500,
                    height: 300
                },
                exif: true,
                mouseWheelZoom: false,
                enforceBoundary: false
            });
            $uploadCrop.croppie('bind', {
                url: img
            });

        });

        $(document).on('change', '.btn-openfile-thumbnail :file', function() {
            var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', label);

            var reader = new FileReader();
            var $uploadCrop;

            var ancho = 500;
            var alto = 300;
            $('#croppie-box-thumbnail').find('.cr-boundary').remove();
            $('#croppie-box-thumbnail').find('.cr-slider-wrap').remove();

            reader.onload = function(e) {

                $uploadCrop.croppie('bind', {
                    url: e.target.result
                });
            };
            reader.readAsDataURL(this.files[0]);
            var anchoBound = parseFloat(ancho)+50;
            var altoBound = parseFloat(alto)+50;
            $uploadCrop = $('#croppie-box-thumbnail').croppie({
                viewport: {
                    width: ancho,
                    height: alto,
                    type: 'square'
                },
                boundary: {
                    width: anchoBound,
                    height: altoBound
                },
                exif: true,
                mouseWheelZoom: false,
                enforceBoundary: false
            });

        });
        $('.btn-openfile-thumbnail :file').on('fileselect', function(event, label) {
            $('#imgnombre').val(label);
        });

        $('.btn-save-thumbnail').on('click', function (ev) {
            $('.label-cargando').removeClass('nomostrar');
            $('.nota-editar-img').addClass('nomostrar');

            var uploadCrop = $('#croppie-box-thumbnail');
            uploadCrop.croppie('result', {
                type: 'canvas',
                size: { width: 500,
                    height: 300
                }
            }).then(function (base64Image) {
                var id = $('#id-proyecto').val();
                var data = {};
                data._token = '{!!csrf_token()!!}';
                data.base64img = base64Image;
                data.id_proyecto = id;

                $.ajax({
                    type: "POST",
                    url: "{!! url(Request::segment(1).'/savethumbnail') !!}",
                    data: data,
                    success: function (data) {

                        $('#thumbnail' + id).attr('src', base64Image);
                        $('#thumbnail-hover' + id).attr('src', base64Image);
                        $('#addThumbnail').modal('hide');

                    },
                    error: function (xmlHttpRequest, textStatus, errorThrown){
                        if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                            return;
                    }
                }, "json");

            });

        });

    </script>
@endsection