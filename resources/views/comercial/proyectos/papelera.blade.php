@extends('includes.app')
@section('menu')
@include('includes.menupapelera')
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
                        @if(Session::has('status'))
                            <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>{{ Session::get('status') }}</strong>
                            </div>
                        @endif
                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        <i class="fa fa-briefcase"></i> Proyecto </th>
                                    <th class="hidden-xs">
                                        <i class="fa fa-user"></i> Cliente </th>
                                    <th>
                                        <i class="fa fa-file-o"></i> Página web </th>
                                    <th>
                                        <i class="fa fa-clock-o"></i> Fecha eliminación </th>
                                    <th>
                                        <i class="fa fa-th-large"></i> Acciones </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($proyectos as $proyecto)
                                    <tr>
                                        <td class="highlight">
                                            <div class="success"></div>
                                            &nbsp; {!!$proyecto->nombre_proyecto!!}
                                        </td>
                                        <td class="hidden-xs">
                                            {!!$proyecto->cliente!!}
                                        </td>
                                        <td>
                                            <a href="{!!url('borrador/'.$proyecto->url_cliente.'/'.$proyecto->url_proyecto)!!}" class="btn btn-outline btn-circle dark btn-sm blue">
                                                <i class="fa fa-eye"></i> Ver </a>
                                        </td>
                                        <td class="hidden-xs">
                                            {!!$proyecto->deleted_at!!}
                                        </td>
                                        <td>
                                            <a href="{!!url('comercial/restaurarproyecto/'.$proyecto->idesP)!!}" class="btn btn-outline btn-circle blue btn-sm">
                                                <i class="fa fa-history"></i> Restaurar </a>
                                            <a  data-toggle="modal" data-target="#confirmDelete" data-id="{{$proyecto->idesP}}" class="eliminar-proyecto btn btn-outline btn-circle red btn-sm black">
                                                <i class="fa fa-trash-o"></i> Eliminar </a>
                                        </td>
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
    <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="text-align: center; font-family: 'MontserratBold', sans-serif">Eliminar proyecto </h4>
                </div>
                {!! Form::open(array('url' => 'comercial/deleteproyecto')) !!}
                <div class="modal-body">
                    <strong>¿Está seguro de que desea eliminar este proyecto de forma permanente?</strong><br/>
                    <p>Ingrese su credenciales para confirmar.</p>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control nomostrar" type="text" name="id_proyecto" id="id_proyecto" value=""/>
                    </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Usuario</label>
                        <input class="form-control" type="text" autocomplete="off" placeholder="Usuario" name="username" value="" />
                    </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Password</label>
                        <input class="form-control" type="password" autocomplete="off" placeholder="Password" name="password" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="anularproy">Eliminar</button>
                    <button type="button" data-dismiss="modal" class="btn">Cancelar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
<script>
    $('.eliminar-proyecto').on('click', function() {

        $('#id_proyecto').val($(this).attr('data-id'));

    });
</script>
@endsection