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
<script src="<?php echo URL::asset('assets/global/plugins/jquery-ui/jquery-ui.min.js'); ?>" type="text/javascript"></script>

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
<style type="text/css">
    #modulo{
        width: 800px;
        height: 500px;
        border: 1px solid #ccc;
        overflow: auto;
        float: left;
    }
    .arrastrame{
        position: relative;
        width: 160px;
        font-size: 10px;
        font-weight: bold;
        text-align: center;
    }
    .crpo{
        position: relative;
        width: 180px;
        font-size: 10px;
        font-weight: bold;
        text-align: center;
    }
    #posicion{
        font-size: 12px;
        margin: 10px 0;
    }
    .ui-draggable{
        background: #1BBC9B;
    }
    .ui-draggable-dragging{
        background: #def;
    }
    .conttl{
        padding:5px 0;
    }
    .medida{
        position: absolute!important;
    }
    </style>
    <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
    <div class="page-content-container">
        <div class="page-content-row">
            <!-- BEGIN PAGE SIDEBAR -->

            <div class="page-content-col">
                <!-- {!! Form::open(array('url' => 'admin/savemodulo/' , 'class' => 'form-horizontal')) !!} -->
                <!-- BEGIN PAGE BASE CONTENT -->
                    <div id="posicion">
                        <a href="titulo" class="btn btn-outline green creaelemento">titulo</a>
                        <a href="cuerpo" class="btn btn-outline green creaelemento">Cuerpo</a>
                        <input type="text" name="titulo" class="titulo" placeholder="Nombre Modulo">
                        <input type="text" name="blade" class="blade" placeholder="Nombre blade">
                        <select name="tModulo" class="tModulo">
                            <option value="1">Cabecera</option>
                            <option value="2">Contenido</option>
                            <option value="3">Footer</option>
                        </select>
                        <button class="btn green envr">Enviar</button>
                    </div>
                    <div id="modulo">
                        
                    </div>
                <!-- END PAGE BASE CONTENT -->
                <!-- {!! Form::close() !!} -->
            </div>
        </div>
    </div>
    <!-- END SIDEBAR CONTENT LAYOUT -->
</div>
<script type="text/javascript">
        $(document).ready(function(){
            function saveD(data){
                $.ajax({
                    type: "POST",
                    url: "{!! url('admin/savemodulo') !!}",
                    data: data,
                    success: function(data){
                        if(data.pase==0){
                           Myid = data; 
                        }
                    },
                    error: function(){
                        alert('Error en la conexión');
                    }
                });
            }
            $('#posicion .envr').on('click', function(event) {
                $('.envr').prop("disabled", true);
                var Myid =  0
                var data = {};
                var pase = 0;
                data._token = '{!!csrf_token()!!}';
                data.pase = pase;
                data.titulo = $('.titulo').val();
                data.blade = $('.blade').val();
                data.tModulo = $('.tModulo').val();
                $.ajax({
                    type: "POST",
                    url: "{!! url('admin/savemodulo') !!}",
                    data: data,
                    success: function(ides){
                        var ide =ides
                        $('.mdlotp1').each(function(index, el) {
                            var data = {};
                            data._token = '{!!csrf_token()!!}';
                            data.myid=ide;
                            data.pase = 1;
                            data.id = $(this).attr('value');
                            data.dataposx = $(this).parent().parent().attr('data-posx');
                            data.dataposy = $(this).parent().parent().attr('data-posy');
                            $('.mdlotp2').each(function(index, el) {
                                if(data.id == $(this).attr('value')){
                                    data.idC = $(this).attr('value');
                                    data.dataposxC = $(this).parent().parent().attr('data-posx');
                                    data.dataposyC = $(this).parent().parent().attr('data-posy');
                                }
                                
                            });
                            $.ajax({
                                type: "POST",
                                url: "{!! url('admin/svmodulos') !!}",
                                data: data,
                                success: function(data){
                                    console.log('ok');
                                },
                                error: function(){
                                    alert('Error en la conexión');
                                }
                            });
                        });
                    },
                    error: function(){
                        alert('Error en la conexión');
                    }
                });
            });
            //cuadros
            var titulos = 1;
            var cuerpo = 1;
            $(".creaelemento").click(function(e){
                e.preventDefault();
                var ttlos = '<div data-posx="0" data-posy="0" class="ui-corner-all ui-state-highlight medida arrastrame"><div class="conttl">'+titulos+' Titulo <input type="hidden" class="mdlotp1" name="titulo'+titulos+'" value="'+titulos+'"></div></div>';
                var crpo = '<div data-posx="0" data-posy="0" class="ui-corner-all ui-state-highlight medida crpo"><div class="conttl">'+cuerpo+' Cuerpo <input type="hidden" class="mdlotp2" name="cuerpo'+cuerpo+'" value="'+cuerpo+'"></div></div>';
                if($(this).attr("href")=='titulo'){
                    var nuevoElemento = $(ttlos);
                    titulos++;

                }else{
                    var nuevoElemento = $(crpo);
                    cuerpo++;
                }
                nuevoElemento.draggable({
                containment: 'parent',
                drag: function(event, ui){
                    var MediX = $('#modulo').width()-$('.medida').width();
                    var MediY = $('#modulo').height()-$('.medida').height();
                    $(this).attr('data-posx', Math.round(((ui.position.left)*100)/MediX));
                    $(this).attr('data-posy', Math.round(((ui.position.top)*100)/MediY));
                }
                });
                $('#modulo').append(nuevoElemento);
            });
        })
    </script>
@endsection