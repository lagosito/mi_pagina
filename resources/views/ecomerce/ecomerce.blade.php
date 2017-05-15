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
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-striped table-bordered table-advance table-hover">
                                        <thead>
                                            <tr>
                                                <th> Nombre Producto </th>
                                                <th> Precio </th>
                                                <th> Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($productos as $producto)
                                                <tr>
                                                    <td>{!!$producto->item!!}</td>
                                                    <td style="text-align: right">{!!  number_format($producto->precio,2)!!}</td>
                                                    <td><button type="button" class="btn btn-outline btn-circle btn-sm purple editar-producto" data-iditem="{{$producto->id_item}}" data-item="{{$producto->item}}" data-precio="{{$producto->precio}}" data-toggle="modal" data-target="#editarProducto">Editar</button></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        <!-- END SAMPLE TABLE PORTLET-->
                    </div>
                </div>
                <!-- END PAGE BASE CONTENT -->
            </div>
        </div>
    </div>
    <!-- END SIDEBAR CONTENT LAYOUT -->
</div>
<div id="editarProducto" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header row" style="margin: 0">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar producto</h4>
            </div>
            {!! Form::open(array('url' => Request::segment(1).'/saveecomerceproducto')) !!}

            <div class="modal-body row" style="margin: 0">

                <input class="form-control nomostrar" type="hidden" name="id_item" id="id_item" value=""/>

                <div class="form-group col-sm-12">
                    <label class="control-label">Nombre producto</label>
                    <input class="form-control" type="text" autocomplete="off" name="name_producto" id="name_producto" value="" readonly/>
                </div>
                <div id="detalle_item">

                </div>
                <div class="form-group col-sm-12">
                    <label class="control-label"><strong>Precio e-commerce</strong></label>
                    <input class="form-control" type="text" autocomplete="off" name="precio_producto" id="precio_producto" value="" />
                </div>

            </div>
            <div class="modal-footer row" style="margin: 0">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" data-dismiss="modal" class="btn">Cancelar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    $('.editar-producto').on('click', function(event) {

        $('#detalle_item').empty();
        $('#id_item').val($(this).attr('data-iditem'));
        $('#name_producto').val($(this).attr('data-item'));
        $('#precio_producto').val($(this).attr('data-precio'));

        var data = {};
        data._token = '{!!csrf_token()!!}';
        data.id_item = $(this).attr('data-iditem');

        $.ajax({
            type: "POST",
            url: "{!! url(Request::segment(1).'/detalleitem') !!}",
            data: data,
            success: function(data){
                $('#detalle_item').append(data);
            },
            error: function(){
                alert('Error en la conexión');
            }
        });

    });
</script>
@endsection