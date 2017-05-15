@extends('includes.app')
@section('menu')
@include('includes.menumodulos')
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
<script>
    $('.btnEditrMdl').on('click', function(event) {

        $('.NbrModulo').val($(this).parent().parent().find('.ttlMdlo').html());
        $('.ContModul').val($(this).parent().parent().find('.ContMdl').html());
        $('.idsmdls').val($(this).parent().parent().find('.idmdls').attr('data-id'));
    });
</script>
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
                        <button type="button" class="btn btn-outline btn-circle btn-sm blue" data-toggle="modal" data-target="#nuevaCategoria"><span class="fa fa-plus"></span> Nueva Categoria</button>

                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        Id </th>
                                    <th>
                                        Categoría</th>
                                    <th>
                                        Acciones</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categorias as $categoria)
                                    <tr>
                                        <td>{{$categoria->id}}</td>
                                        <td>{{$categoria->categoria}}</td>
                                        <td>
                                            <button type="button" class="btn btn-outline btn-circle btn-sm purple edit-categoria" data-toggle="modal" data-target="#editarCategoria" data-id="{{$categoria->id}}" data-categ="{{$categoria->categoria}}"><span class="fa fa-pencil"></span> Editar</button>
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

    <div id="editarCategoria" class="modal fade" role="dialog">
        <div class="modal-dialog">
            {!! Form::open(array('url' => 'comercial/editarmdcategoria')) !!}
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Editar categoría</h4>
                </div>

                <div class="col-md-12" style="padding: 15px">
                    <div class="form-group">
                        <input class="form-control nomostrar id_categoria" type="hidden" name="id_categoria" id="id_categoria" value=""/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nombre Categoría:</label>
                        <input class="form-control" type="text" autocomplete="off" name="categoria" id="categoria" value="" required/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <button type="button" data-dismiss="modal" class="btn">Cancelar</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div id="nuevaCategoria" class="modal fade" role="dialog">
        <div class="modal-dialog">
            {!! Form::open(array('url' => 'comercial/nuevomdcategoria')) !!}
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nueva categoría</h4>
                </div>
                <div class="col-md-12" style="padding: 15px">
                    <div class="form-group">
                        <input class="form-control nomostrar" type="hidden"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nombre Categoría</label>
                        <input class="form-control" type="text" autocomplete="off" name="categoria" id="categoria" value="" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" data-dismiss="modal" class="btn">Cancelar</button>
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

            $('.amaestro-categorias').parent().addClass('active');
            $('.amaestro-categorias').parent().addClass('open');
            $('.amaestro-categorias').parent().addClass('selected');
        });
    </script>
    <script>
        $(document).on('click', '.edit-categoria', function() {
           $('#id_categoria').val($(this).attr('data-id'));
            $('#categoria').val($(this).attr('data-categ'));
        });

    </script>
@endsection