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
                                        <span class="caption-subject font-dark sbold uppercase">Carrito de compras</span>
                                    </div>
                                </div>
                                @if (Session::has('message'))
                                    <div class="alert alert-success">
                                        <button class="close" data-dismiss="alert"></button> {{Session::get('message')}}
                                    </div>
                                @endif
                                @if(Auth::check())

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
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $subtotal =0; $total=0; ?>
                                                    @foreach($carrito as $producto)
                                                        <tr>
                                                            <td><img src="{!!url('upload/'.$id_proyecto.'/galeria/'. $producto['imagen'])!!}" alt="" class="img-responsive" style="height: 150px; width: 150px"></td>
                                                            <td>{{$producto['item']}}</td>
                                                            <td>{{$producto['cantidad']}}</td>
                                                            <td>{{$producto['precio']}}</td>
                                                            <?php $subtotal = $producto['cantidad'] * $producto['precio'];
                                                                    $total = $total + $subtotal?>
                                                            <td>{{number_format($subtotal,2) }}</td>
                                                            <td>
                                                                <a href="{!! url('ecomerce/removeitem/'.$producto['id']) !!}">  <i class="fa fa-remove"></i>  </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-12" id="CostoTtl" style="text-align: right">
                                                <span>Total: </span> <span class="total">$ {{number_format($total,2)}}</span>

                                            </div>
                                            <div class="col-md-12">
                                                <a href="{{url('')}}">Seguir comprando</a>
                                                <br>
                                            </div>

                                        </div>
                                        <!-- END SAMPLE TABLE PORTLET-->
                                        <div class="col-md-12" align="right">
                                            <a href="{{ route('payment') }}" class="btn btn-warning">
                                                Pagar con <i class="fa fa-cc-paypal fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="iniciarsesion col-md-offset-4 col-md-4">

                                        <div class="form-group" style="text-align: center">
                                            <h3>Iniciar sesión</h3>
                                        </div>
                                        <div class="panel-body">
                                            @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    <strong>Ups!</strong>Hay problemas con tu entrada.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-group">
                                                        <label for="username">
                                                            <i class="fa fa-user"> Nombre de usuario *</i>
                                                        </label>
                                                        <input class="form-control" type="text" name="username" required="true"  value="{{ old('username') }}">
                                                    </div>

                                                    <div class="form-group inner-addon left-addon">
                                                        <label for="password">
                                                            <i class=" fa fa-lock"> Contraseña</i>
                                                        </label>
                                                        <input class="form-control" type="password" name="password" required="true" >
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary" style="width: 100%">INGRESAR</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <a href="javascript:;" class="registrar-cliente" id="registrar-cliente" style="margin-top: 0">Registrarse</a>

                                        </div>
                                    </div>

                                    <div class="portlet light formDts registro-cliente hidden">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject font-dark sbold uppercase">Registro</span>
                                            </div>
                                        </div>

                                        <div class="portlet-body form">
                                            {!! Form::open(array('url' => 'ecomerce/registrocliente', 'class' => 'form-horizontal')) !!}
                                            <input type="hidden" name="idPryct" value="{!!$id_proyecto!!}">
                                            @if (Session::has('error_registro'))
                                                <div class="alert alert-danger">
                                                    <button class="close" data-dismiss="alert"></button> {{Session::get('error_registro')}}
                                                </div>
                                            @endif
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Nombre de usuario</label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa fa-spin fa-spinner hidden checking-user-availability" style="margin: 0; color:black; margin-top: 11px"></i>
                                                            <i class="btn fa fa-check hidden user-disponible" style="margin: 0; color:green"></i>
                                                            <i class="btn fa fa-remove hidden user-nodisponible" style="margin: 0; color:red"></i>
                                                            <input type="text" name="username" class="form-control username" placeholder="Nombre de usuario" required>
                                                            <span class="user-error hidden" style="color:red; font-size: 11px">Usuario no disponible</span>
                                                            <span class="user-check hidden" style="color:green; font-size: 11px">Usuario disponible</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Nombre(s)</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="nombre" class="form-control" placeholder="Nombres" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Apellidos</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="apellido" class="form-control" placeholder="Apellidos" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">E-mail</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Teléfono</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="telefono" class="form-control" placeholder="Teléfono">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">País</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="pais" class="form-control" placeholder="País">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Dirección</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="direccion" class="form-control" placeholder="Dirección">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Localidad/Ciudad</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="localidad" class="form-control" placeholder="Localidad/Ciudad">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Region/Provincia</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="region" class="form-control" placeholder="Region/Provincia">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Codigo Postal</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="codigo_postal" class="form-control" placeholder="Codigo Postal">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Información adicional</label>
                                                    <div class="col-md-9">
                                                        <textarea name="informacion" class="form-control" id="" cols="30" rows="10" placeholder="Right icon"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn green">Registrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                @endif
                           </div>

                        </div>
                        <!-- END PAGE BASE CONTENT -->

                    </div>
                </div>
            </div>
            <!-- END SIDEBAR CONTENT LAYOUT -->
        </div>
            </div>
        </div>
    @if (Session::has('error_registro'))
        <script>
            $('.iniciarsesion').addClass('hidden');
            $('.registro-cliente').removeClass('hidden');
        </script>
    @endif
    <script>
        $(document).on('click', '#registrar-cliente', function() {
            $('.iniciarsesion').addClass('hidden');
            $('.registro-cliente').removeClass('hidden');
        });

        $(document).on('blur', '.username', function(event) {

                $('.checking-user-availability').removeClass('hidden');
                $('.user-disponible').addClass('hidden');
                $('.user-nodisponible').addClass('hidden');
                $('.user-error').addClass('hidden');
                $('.user-check').addClass('hidden');

                var data = {};
                data._token = '{!!csrf_token()!!}';
                data.username = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "{!! url('ecomerce/useravailability') !!}",
                    data: data,
                    success: function (data) {
                        $('.checking-user-availability').addClass('hidden');
                        if(data=='1')
                        {
                            $('.user-disponible').removeClass('hidden');
                            $('.user-error').addClass('hidden');
                            $('.user-check').removeClass('hidden');
                        }
                        else{
                            $('.user-nodisponible').removeClass('hidden');
                            $('.user-error').removeClass('hidden');
                            $('.user-check').addClass('hidden');
                        }
                    },
                    error: function () {
                        $('.checking-user-availability').addClass('hidden');
                        alert('Error en la conexión');
                    }
                });

        });

    </script>
@endsection

