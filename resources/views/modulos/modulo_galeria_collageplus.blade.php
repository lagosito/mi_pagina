<link href="<?php echo URL::asset('/css/modulo_galeria_collageplus.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
            color: {{$combinacion->subtitulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
        .container1kg .ventanatemporal .logo1k img{
            border-color: {{$combinacion->subtitulo}};
        }
        .container1kg .contacto a{
            color: {{$combinacion->subtitulo}};
        }
        .galeria-1kg{
            padding:30px;
        }
        .galeria-1kg img{
            /* ensures padding at the bottom of the image is correct */
            vertical-align:bottom;
        }
    </style>
@endif
<div id="container1kg" class="container1kg">
    <div class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        @foreach($modulosDtll as $modulo)
            @if($cont==0)
                <div class="aboutsdiv titulo-custom-color">
                    <span class="editable" data-type="text" data-pk="{!! $modulo->id !!}" data-name="url_texto">{!! $modulo->url_texto !!}</span>
                </div>

                <div class="ventanatemporal">
                    <div class="logo1k">
                        <div class="imagen-logo">
                            <div class="logo-fixed" style="position: relative;">
                                <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" alt="" data-pk="{{$pry_modulo->idesPR}}" class="logo{{$pry_modulo->idesPR}}">
                                <span class="btn-file-logo nomostrar" style=" right: 0">
                                    <span class="fa fa-folder-open-o" style="padding-left: 10px"></span> <input type="file" id="file" class="file-logo" name="file">
                                </span>
                            </div>
                        </div>
                        <div class="txt_cont titulo-custom-color">
                            <h1 class="editable" data-type="textarea" data-pk="{{$modulo->id}}" data-name="titulo">
                                {!! $modulo->titulo !!}
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="ventana">
                    <div class="logo1k-2">
                        <div class="logo-fixed">
                            <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" alt="" data-pk="{{$pry_modulo->idesPR}}" class="logo{{$pry_modulo->idesPR}}">
                        </div>
                    </div>
                    <div class="info-1kg col-lg-8">

                        <div class="col-centered col-center-block">
                            <div class="parrafo comentario-custom-color">
                                <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">
                                    {!! $modulo->comentario !!}
                                </p>
                            </div>
                            @else
                                <div class="subtitulo subtitulo-custom-color">
                                    <h2 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">
                                        {!! $modulo->subtitulo !!}
                                    </h2>
                                </div>

                                <div class="parrafo comentario-custom-color">
                                    <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">
                                        {!! $modulo->comentario !!}
                                    </p>
                                </div>

                            @endif
                            <?php $cont++; ?>
                            @endforeach

                        </div>
                    </div>
                    <div class="contacto col-md-12">
                        <a href="mailto:{!! $proyecto->email_formulario !!}">{!! $proyecto->email_formulario !!}</a>
                    </div>
                </div>
                <?php
                $tabs = App\Console\Commands\Funciones::getGaleriatabs($pry_modulo->idesPR, $idioma); ?>
                @foreach($tabs as $tab)
                    <?php
                    $items = App\Console\Commands\Funciones::getGaleriaItems($tab->id, $idioma); ?>
                    <div class="galeria">
                        <div class="imagen-logo-fixed">
                            <div class="logo-fixed">
                                <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" alt="" data-pk="{{$pry_modulo->idesPR}}" class="logo{{$pry_modulo->idesPR}}">
                            </div>
                        </div>
                        @if($editar==1)
                            <div class="nuevocollage" align="center">
                                <button type="button" class="btn btn-info editar-collage-item " data-toggle="modal" data-target="#editarCollageItem" data-id="0"  data-item="" data-texto="" data-tab="{!! $tab->id !!}">Agregar item</button>
                            </div>
                            <div class="galeria-1kg">
                                @foreach($items as $item)
                                    <div class="Image_Wrapper " data-caption="{!! $item->item !!}<br><a class='editar-collage-item fa fa-pencil' data-toggle='modal' data-target='#editarCollageItem' data-id='{!! $item->id !!}'  data-item='{!! $item->item !!}' data-tab='{!! $tab->id !!}' data-imagen='{!! $item->imagen !!}'></a><a class='fa fa-times eliminar-collage-item'  data-id='{!! $item->id !!}'></a>" id="collage{!! $item->id !!}">
                                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/galeria/'.$item->imagen)!!}" alt="" class="img-responsive  img-galeria-1kg">
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="galeria-1kg">
                                @foreach($items as $item)
                                    <div class="Image_Wrapper" data-caption="{!! $item->item !!}" id="collage{!! $item->id !!}">
                                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/galeria/'.$item->imagen)!!}">
                                    </div>
                                @endforeach

                            </div>
                        @endif
                    </div>
                @endforeach
    </div>
</div>
<div id="editarCollageItem" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" >
        <!-- Modal content-->
        <div class="modal-content tabs-modal-content">
            <div class="modal-body tabs-modal-body row">
                <div class="col-md-12 sinpadding clearfix"  style="position: relative" align="center">
                    <button type="button" class="close" data-dismiss="modal" style="font-size: 20px">&times;</button>
                    <div class="col-md-12">
                        <div class="box-collageitem" id="box-collageitem" style="padding: 0">
                            <img src="" style="width: 100%">
                        </div>
                        <input class="nomostrar" value="" id="id-collageitem">
                        <input class="nomostrar" value="" id="id-collagetab">

                        <span class="btn btn-file-collage" style="z-index: 1;right: 13px">
                            <span class="fa fa-folder-open-o"></span> <input type="file" id="file-collage" class="file" name="file">
                        </span>
                    </div>
                    <div class="col-md-12" style="margin-top: 15px;margin-bottom: 15px">
                        <input class="edit-collage-name" id="edit-collage-name" name="edit-collage-name"  style="border: 0; border-bottom: 1px dashed blue;width: 100%" placeholder="Texto"/>
                    </div>

                </div>
                <div class="alert alert-success alert-dismissable nomostrar label-cargando col-md-6 col-md-offset-3" style="background: none; text-align: center">
                    <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> Guardando item...</label>
                </div>
                <div class="col-md-12" style="text-align: right">
                    <span class="btn blue editable-submit btn-save-collage">
                        <i class="fa fa-check"> Guardar</i>
                    </span>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                    <br/>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="<?php echo URL::asset('js/modulos/1kg.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/collage/jquery.collagePlus.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/collage/jquery.collageCaption.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/collage/jquery.removeWhitespace.min.js'); ?>" type="text/javascript"></script>
<script>
    $(document).on('change', '.btn-file-collage :file', function() {
        var reader = new FileReader();

        reader.onload = function(e) {

            $('#box-collageitem').find('img')
                    .attr('src', e.target.result)
                    .width('auto')
                    .height('auto');
        };

        reader.readAsDataURL(this.files[0]);

    });

    // All images need to be loaded for this plugin to work so
    // we end up waiting for the whole window to load in this example
    $(window).load(function () {
        $(document).ready(function(){
            collage();
            $('.galeria-1kg').collageCaption();
        });
    });

    // Here we apply the actual CollagePlus plugin
    function collage() {
        $('.galeria-1kg').removeWhitespace().collagePlus(
                {
                    'fadeSpeed'     : 2000,
                    'allowPartialLastRow': false
                }
        );
    }

    var resizeTimer = null;
    $(window).bind('resize', function() {
        // hide all the images until we resize them
        // set the element you are scaling i.e. the first child nodes of ```.Collage``` to opacity 0
        $('.galeria-1kg .Image_Wrapper').css("opacity", 0);
        // set a timer to re-apply the plugin
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(collage, 200);
    });
</script>
@if($editar==0)
    <script>
        $(document).ready(function() {
            kg1();
            elminarVentana();
            //crea_funcion('hola');
        });
    </script>
@else
    <link href="<?php echo URL::asset('/css/modulo_1kg_editar.css'); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo URL::asset('js/modulos-editar/galeria_collageplus.js'); ?>" type="text/javascript"></script>

@endif