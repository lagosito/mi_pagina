@extends('ecomerce.include.app')
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
                                <div class="portlet-title col-md-12">
                                    <div class="caption">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject font-dark sbold uppercase">Detalle de Facturación</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 ">
                                    <br>
                                    <label class="col-md-3 control-label">Nombre:</label>
                                    <label class="col-md-3 control-label">{{$cliente->nombre}}&nbsp;{{$cliente->apellido}}</label>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-label">Dirección:</label>
                                    <label class="col-md-9 control-label">{{$cliente->direccion}},&nbsp;{{$cliente->localidad}},&nbsp;{{$cliente->region}},&nbsp;{{$cliente->pais}}</label>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-label">Código Postal:</label>
                                    <label class="col-md-9 control-label">{{$cliente->codigo_postal}}</label>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-label">Email:</label>
                                    <label class="col-md-9 control-label">{{$cliente->email}}</label>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-label">Teléfono:</label>
                                    <label class="col-md-9 control-label">{{$cliente->telefonol}}</label>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-label">Información Adicional:</label>
                                    <label class="col-md-9 control-label">{{$cliente->informacion}}</label>
                                </div>
                                <div class="portlet-title col-md-12">
                                    <div class="caption">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject font-dark sbold uppercase">Detalle compra</span>
                                        <br>
                                    </div>
                                </div>

                                <div class="table-scrollable">
                                    <table class="table table-striped table-bordered table-advance table-hover" style="text-align: center">
                                        <br>
                                        <thead>
                                        <tr >
                                            <th style="text-align: center!important;"> Producto </th>
                                            <th style="text-align: center!important;"> Cantidad</th>
                                            <th style="text-align: center!important;"> Precio </th>
                                            <th style="text-align: center!important;"> Subtotal </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $subtotal =0; $total=0; ?>
                                        @foreach($productos as $producto)
                                            <tr>
                                                <td>{{$producto->item}}</td>
                                                <td>{{$producto->cantidad}}</td>
                                                <td>$ {{number_format($producto->costo,2)}}</td>
                                                <?php $subtotal= $producto->cantidad * $producto->costo; ?>
                                                <td>$ {{number_format($subtotal,2)}}</td>
                                            </tr>
                                            <?php $total = $total + $subtotal;?>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12" id="CostoTtl" style="text-align: right">
                                    <span>Total: </span> <span class="totals">$ {{number_format($total,2)}}</span>

                                </div>

                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>

                    </div>
                </div>
            </div>
            <!-- END SIDEBAR CONTENT LAYOUT -->
        </div>
@endsection