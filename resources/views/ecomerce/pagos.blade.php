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
<script>
    $(document).ready(function() {
        var monto=0;
        $('.costoPrd').each(function(index, el) {
            monto = parseFloat(monto)+parseFloat($(this).val());
        });
        $('#CostoTtl span.totals').text((monto).toFixed(2));
        
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
                    <div class="row">
                         <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light formDts">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject font-dark sbold uppercase">Registro de pedidos</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    {!! Form::open(array('url' => 'paypal/payment', 'class' => 'form-horizontal')) !!}
                                        <input type="hidden" name="id_proyecto" value="{{$proyecto}}">
                                        @foreach($ides as $id)
                                            <input type="hidden" name="ides[]" value="{{$id}}">
                                        @endforeach
                                    @foreach($cantidades as $cant)
                                        <input type="hidden" name="cantidades[]" value="{{$cant}}">
                                    @endforeach
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nombre(s)</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-microphone"></i>
                                                        <input type="text" name="nombre" class="form-control" placeholder="Nombres"> </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Apellidos</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-microphone"></i>
                                                        <input type="text" name="apellido" class="form-control" placeholder="Apellidos"> </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">E-mail</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-microphone"></i>
                                                        <input type="text" name="email" class="form-control" placeholder="E-mail"> </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Teléfono</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-microphone"></i>
                                                        <input type="text" name="telefono" class="form-control" placeholder="Teléfono"> </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">País</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-microphone"></i>
                                                        <input type="text" name="pais" class="form-control" placeholder="País"> </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Dirección</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-microphone"></i>
                                                        <input type="text" name="direccion" class="form-control" placeholder="Dirección"> </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Localidad/Ciudad</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-microphone"></i>
                                                        <input type="text" name="localidad" class="form-control" placeholder="Localidad/Ciudad"> </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Region/Provincia</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-microphone"></i>
                                                        <input type="text" name="region" class="form-control" placeholder="Region/Provincia"> </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Codigo Postal</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-microphone"></i>
                                                        <input type="text" name="codigo_postal" class="form-control" placeholder="Codigo Postal"> </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Información adicional</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-microphone"></i>
                                                        <textarea name="informacion" class="form-control" id="" cols="30" rows="10" placeholder="Right icon"></textarea>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">Registrar</button>
                                                </div>
                                                <a href="{{ route('payment') }}" class="btn btn-warning">
                                                    Pagar con <i class="fa fa-cc-paypal fa-2x"></i>
                                                </a>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-striped table-bordered table-advance table-hover" style="text-align: center">
                                        <thead>
                                        <tr >
                                            <th></th>
                                            <th style="text-align: center!important;"> Producto </th>
                                            <th style="text-align: center!important;"> Cantidad</th>
                                            <th style="text-align: center!important;"> Precio </th>
                                            <th style="text-align: center!important;"> Subtotal </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $subtotal =0; $total=0; ?>
                                        {!!App\Console\Commands\Ecomerce::ComprasPY($ides,$cantidades)!!}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12" id="CostoTtl" style="text-align: right">
                                    <span>Total: </span> <span class="totals"></span>

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
@endsection