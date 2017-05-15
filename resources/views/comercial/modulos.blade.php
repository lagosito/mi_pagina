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

@endsection
<!-- END THEME LAYOUT SCRIPTS -->
@section('content')
    <style>
        .dropdown {

        }

        .dropdown a {
            color: #fff;
        }

        .dropdown dd,
        .dropdown dt {
            margin: 0px;
            padding: 0px;
        }

        .dropdown ul {
            margin: -1px 0 0 0;
        }

        .dropdown dd {
            position: relative;
        }

        .dropdown a,
        .dropdown a:visited {
            color: #000;
            text-decoration: none;
            outline: none;
        }

        .dropdown dt a {
            background-color: #fff;
            border: 1px solid #c2cad8;
            display: block;
            padding: 8px 20px 5px 10px;
            line-height: 24px;
            overflow: hidden;
            width: 100%;
            font-size: 14px;
            color: #555;
        }

        .dropdown dt a span,
        .multiSel span {
            cursor: pointer;
            display: inline-block;
            padding: 0 3px 2px 0;
        }

        .dropdown dd ul {
            background-color: #fff;
            border: 1px solid #c2cad8;
            font-size: 14px;
            line-height: 1.42857;
            color: #555;
            display: none;
            left: 0px;
            padding: 2px 15px 2px 5px;
            position: absolute;
            top: 2px;
            width: 100%;
            list-style: none;
            height: 100px;
            overflow: auto;
        }

        .dropdown span.value {
            display: none;
        }

        .dropdown dd ul li a {
            padding: 5px;
            display: block;
        }

        .dropdown dd ul li a:hover {
            background-color: #fff;
        }

    </style>
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->

    <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
    <div class="page-content-container">
        <div class="page-content-row">
            <!-- BEGIN PAGE SIDEBAR -->

            <div class="page-content-col">
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered table-advance table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        Categoría </th>
                                    <th>
                                        Nombre módulo </th>
                                    <th>
                                        Imagen referencia</th>
                                    <th>
                                        Contenido</th>
                                    <th>
                                        Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($modulos as $modulo)
                                <tr>
                                    @if(isset($categorias[$modulo->id_md_categoria]))
                                    <td>{{$categorias[$modulo->id_md_categoria]}}</td>
                                    @else
                                    <td></td>
                                    @endif
                                    <td class="ttlMdlo">{!!$modulo->titulo!!}</td>
                                    <td><img src="{!!url('img/md_miniatura/'.$modulo->imagen)!!}" alt="" class="img-responsive"></td>
                                    <td class="ContMdl">{!!$modulo->comentario!!}</td>
                                    <td class="idmdls" data-id="{!!$modulo->id!!}" data-categoria="{{$modulo->id_md_categoria}}">
                                        <button type="button" class="btn btn-outline btn-circle btn-sm purple btnEditrMdl" data-toggle="modal" data-target="#myModal"><span class="fa fa-pencil"></span> Editar</button>
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

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar módulo</h4>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input class="form-control nomostrarx idsmdls" type="hidden" name="idmodls" id="idmodls" value=""/>
                </div>
                <div class="form-group">
                    <label class="control-label">Categoría</label>
                    {!! Form::select('id_md_categoria', array('0' => 'Categoría')+ $categorias ,null,['class'=> 'form-control categoria', 'id'=>'id_categoria'])!!}
                </div>
                <div class="form-group">
                    <label class="control-label">Nombre Modulo</label>
                    <input class="form-control NbrModulo" type="text" autocomplete="off" name="nmodulo" id="nombremodulo" value="" />
                </div>
                <div class="form-group">
                    <label class="control-label">Contenido</label>
                    <textarea class="form-control ContModul" name="modldesc" cols="30" rows="10" id="modulodesc"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Agencia</label>
                    {!! Form::select('id_agencia', array('0' => 'Agencia')+ $agencias ,null,['class'=> 'form-control agencia', 'id'=>'id_agencia'])!!}
                </div>
                <div class="form-group">
                    <label class="control-label">Clientes con acceso exclusivo</label>
                    <dl class="dropdown">
                        <dt>
                            <a href="#">
                                <span class="hida">Seleccionar</span>
                                <p class="multiSel"></p>
                            </a>
                        </dt>
                        <dd>
                            <div class="multiSelect">

                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="actualizarmodulo">Actualizar</button>
                <button type="button" data-dismiss="modal" class="btn">Cancelar</button>
            </div>

        </div>
    </div>
</div>
<script>
    $('.btnEditrMdl').on('click', function(event) {

        $('.NbrModulo').val($(this).parent().parent().find('.ttlMdlo').html());
        $('.ContModul').val($(this).parent().parent().find('.ContMdl').html());
        $('.idsmdls').val($(this).parent().parent().find('.idmdls').attr('data-id'));
        $('#id_categoria').val($(this).parent().parent().find('.idmdls').attr('data-categoria'));
    });
</script>
<script>
    $( document ).ready(function() {
        $('.montserrat-menu .dropdown').removeClass('active');
        $('.montserrat-menu .dropdown').removeClass('open');
        $('.montserrat-menu .dropdown').removeClass('selected');

        $('.alistadomodulos').parent().addClass('active');
        $('.alistadomodulos').parent().addClass('open');
        $('.alistadomodulos').parent().addClass('selected');

    });
</script>
<script>
    $(document).on('change', '.agencia', function() {

        $('.multiSel').empty();
        $(".hida").show();

        var data = {};
        data._token = '{!!csrf_token()!!}';
        data.id_agencia = $(this).val();

        $.ajax({
            url: '{!! url(Request::segment(1).'/clientesxagencia') !!}',
            data: data,
            type: 'POST',
            success: function(data) {
                $('.multiSelect').empty();
                $('.multiSelect').append(data);
            }
        });
    });

    $('#myModal').on('shown.bs.modal', function () {
        $('.multiSel').empty();
        $(".hida").show();

        var data = {};
        data._token = '{!!csrf_token()!!}';
        data.id_modulo = $('#idmodls').val();

        $.ajax({
            url: '{!! url(Request::segment(1).'/agenciamodulo') !!}',
            data: data,
            type: 'POST',
            success: function(data) {
                $('#id_agencia').val(data);

                var datos = {};
                datos._token = '{!!csrf_token()!!}';
                datos.id_modulo = $('#idmodls').val();
                datos.id_agencia = $('#id_agencia').val();

                $.ajax({
                    url: '{!! url(Request::segment(1).'/clientesexclusivosmodulo') !!}',
                    data: datos,
                    type: 'POST',
                    success: function(data) {

                        $('.multiSelect').empty();
                        $('.multiSelect').append(data);
                        setClientesExclusivos();
                    }
                });

            }
        });
    });

    $(document).on('click', ".dropdown dt a", function() {
        $(".dropdown dd ul").slideToggle('fast');
    });

    $(document).on('click', ".dropdown dd ul li a", function() {
        $(".dropdown dd ul").hide();
    });

    function getSelectedValue(id) {
        return $("#" + id).find("dt a span.value").html();
    }

    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
    });

    $(document).on('click', '.multiSelect input[type="checkbox"]', function() {


        var title = $(this).closest('.multiSelect').find('input[type="checkbox"]').val(),
                title = $(this).val() + ",";

        if ($(this).is(':checked')) {
            if($(this).attr('data-id')=='0')
            {
                var html = '<span title="' + title + '">' + title + '</span>';
                $('.multiSel').empty();
                $('.multiSel').append(html);
                $(".hida").hide();
            }
            else
            {
                var html = '<span title="' + title + '">' + title + '</span>';
                $('.multiSel').append(html);
                $(".hida").hide();
            }

        } else {
            $('span[title="' + title + '"]').remove();
            var ret = $(".hida");
            $('.dropdown dt a').append(ret);

        }
    });

    $(document).on('click', '#all_clients', function() {
        if( $(this).is(':checked') )
        {
            $('input[type="checkbox"]').each(function(){
                $(this).prop('checked', 'checked');
            });
        }
        else
        {
            $('input[type="checkbox"]').each(function(){
                $(this).removeAttr('checked');
            });
        }
    });

    $(document).on('click', '#actualizarmodulo', function() {

        var idclientes = [];
        $('input[type="checkbox"]:checked').each(function(){
            if($(this).attr('data-id')!='0')
            {
                idclientes.push( $(this).attr('data-id') );
            }

        });

        var data = {};
        data._token = '{!!csrf_token()!!}';
        data.id_agencia = $('#id_agencia').val();
        data.id_categoria = $('#id_categoria').val();
        data.idmodls = $('#idmodls').val();
        data.nmodulo = $('#nombremodulo').val();
        data.modldesc = $('#modulodesc').val();
        data.id_clientes = idclientes;

        $.ajax({
            url: '{!! url(Request::segment(1).'/modlsun') !!}',
            data: data,
            type: 'POST',
            success: function(data) {
                location.reload();
            }
        });
    });

    function setClientesExclusivos()
    {
        var title='';
        var html ='';
        $('input[type="checkbox"]:checked').each(function(){
            if($(this).attr('data-id')=='0')
            {
                title = $(this).val();
                html = '<span title="' + title + '">' + title + '</span>';
                $('.multiSel').append(html);
                $(".hida").hide();
               return false;
            }
            else
            {
                title = $(this).val() + ",";
                html = '<span title="' + title + '">' + title + '</span>';
                $('.multiSel').append(html);
                $(".hida").hide();
            }

        });
    }
</script>
@endsection