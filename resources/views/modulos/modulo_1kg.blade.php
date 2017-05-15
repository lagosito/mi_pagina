<link href="<?php echo URL::asset('/css/modulo_1kg.css'); ?>" rel="stylesheet" type="text/css" />
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
                            <div  data-pk="{{$modulo->id}}" data-name="comentario" data-type="wysihtml5" data-original-title="Editar texto" class="editable editable-wysihtml5 comentario-custom-color" tabindex="-1" style="background-color: rgba(0, 0, 0, 0); width: 100%;height: 100%">
                            {!! $modulo->comentario !!}
                            </div>
                        </div>

            @endif
            <?php $cont++; ?>
        @endforeach

                         <div class="contacto col-centered col-center-block">
                            <a href="mailto:{!! $proyecto->email_formulario !!}">{!! $proyecto->email_formulario !!}</a>
                        </div>
                    </div>
                   
                </div>
                <?php
                $tabs = App\Console\Commands\Funciones::getGaleriatabs($pry_modulo->idesPR, $idioma); ?>
                @foreach($tabs as $tab)
                    <?php
                    $items = App\Console\Commands\Funciones::getGaleriaItems($tab->id, $idioma); ?>
                    <div class="galeria" id="galeria{{$tab->id}}">
                        <div class="imagen-logo-fixed">
                            <div class="logo-fixed">
                                <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" alt="" data-pk="{{$pry_modulo->idesPR}}" class="logo{{$pry_modulo->idesPR}}">
                            </div>
                        </div>

                        @if($editar==1)
                            <div class="nuevocollage" align="center">
                                <button type="button" class="btn btn-info editar-collage-item " data-toggle="modal" data-target="#editarCollageItem" data-id="0"  data-item="" data-texto="" data-tab="{!! $tab->id !!}" data-width="3">Agregar item</button>
                           </div>

                            <div class="galeria-1kg-sortable sortable">
                               
                                @foreach($items as $item)
                                     <div class="col-sm-{!! $item->width !!} item-collage-1kg thumb" id="collage1kg{{$item->id}}" data-id="{{$item->id}}" data-tab="{{$item->id_pry_galeria_tab}}" data-width='{{$item->width}}' data-align='{{$item->align}}' >
                                        <a href="javascript:;" class="tabitemwrapper" >
                                            <span class="tabitemtext">
                                                <h3>{{$item->item}}</h3>
                                                <span class="portlet-header fa fa-arrows mano-deslizar"></span>
                                                <span class="botones-crud-collage">
                                                    <span class='editar-collage-item fa fa-pencil' data-toggle='modal' data-target='#editarCollageItem' data-id='{{$item->id}}'  data-item='{{$item->item}}' data-tab='{{$tab->id}}' data-imagen='{{$item->imagen}}' data-width='{{$item->width}}' data-url='{{$item->url}}' data-align='{{$item->align}}'></span>
                                                    <span class='fa fa-times eliminar-collage-item'  data-id='{{$item->id}}'></span>
                                                </span>
                                                </span>
                                            @if(@getimagesize(public_path().'/upload/'.$pry_modulo->id_proyecto.'/galeria/' . $item->imagen))
                                                <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/galeria/'.$item->imagen)!!}" alt="" class="img-responsive  img-galeria-1kg" id="img-galeria-1kg{{$item->id}}">
                                            @else
                                                <img src="{!!url('img/image_not_available.png')!!}" alt="" class="img-responsive  img-galeria-1kg" id="img-galeria-1kg{{$item->id}}">
                                            @endif
                                        </a>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        @else
                            <div class="galeria-1kg-sortable sortable">
                               
                                    @foreach($items as $item)
                                        
                                    <div class="col-sm-{!! $item->width !!} item-collage-1kg" id="collage1kg{{$item->id}}" data-id="{{$item->id}}" data-tab="{{$item->id_pry_galeria_tab}}" data-width='{{$item->width}}' data-align='{{$item->align}}'>
                                    @if($item->url=='')
                                        <a href="javascript:;" class="tabitemwrapper no-url">
                                    @else
                                        <a href="{{$item->url}}" class="tabitemwrapper" target="_blank">
                                    @endif
                                            <span class="tabitemtext">
                                                <h3>{{$item->item}}</h3>
                                             </span>
                                            @if(@getimagesize(public_path().'/upload/'.$pry_modulo->id_proyecto.'/galeria/' . $item->imagen))
                                                <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/galeria/'.$item->imagen)!!}" alt="" class="img-responsive  img-galeria-1kg" id="img-galeria-1kg{{$item->id}}">
                                            @else
                                                <img src="{!!url('img/image_not_available.png')!!}" alt="" class="img-responsive  img-galeria-1kg" id="img-galeria-1kg{{$item->id}}">
                                            @endif
                                        </a>
                                    </div>
                                
                                    @endforeach
                                </div>
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
                <div class="col-md-12 sinpadding clearfix"  style="position: relative">
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
                     <div class="col-md-12" style="margin-top: 15px;margin-bottom: 15px">
                        <input class="edit-collage-url" id="edit-collage-url" name="edit-collage-url"  style="border: 0; border-bottom: 1px dashed blue;width: 100%" placeholder="Url"/>
                    </div>
                    <div class="col-sm-6" style="margin-top: 15px;margin-bottom: 15px">
                        <label style="font-size:13px; font-weight: bold;text-align: left">Ancho de imagen</label>
                        <select class="form-control width-img-collage" name="select-width-collage" id="select-width-collage">
                            <option value="3">25%</option>
                            <option value="4">33%</option>
                            <option value="6">50%</option>
                            <option value="8">66%</option>
                            <option value="9">75%</option>
                            <option value="12">100%</option>
                        </select>
                    </div>
                     <div class="col-sm-6" style="margin-top: 15px;margin-bottom: 15px">
                        <label style="font-size:13px; font-weight: bold;text-align: left">Alineación de imagen</label>
                        <input class="edit-collage-align" id="edit-collage-align" name="edit-collage-align" type="hidden" /><br>
                        <img id="align-img-top" src="{!! url('img/top.png') !!}" class="alignment-img" data-value="top"/>
                        <img id="align-img-middle" src="{!! url('img/middle.png') !!}" class="alignment-img" data-value="middle"/>
                        <img id="align-img-bottom" src="{!! url('img/bottom.png') !!}" class="alignment-img" data-value="bottom"/>
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

    function resizeRow(){
        if($(window).width()>=726) {
            $('.fila-collage').each(function () {
                var alturaimagen = 0;
                $(this).find('.item-collage-1kg').each(function () {
                    if (alturaimagen <= $(this).height()) {
                        alturaimagen = $(this).height();
                    }
                });
                $(this).find('.item-collage-1kg').each(function () {
                    var newheight = alturaimagen - $(this).height();
                    $(this).css('margin-top', newheight + 'px');
                });
            });
        }
        else{
            $('.item-collage-1kg').css('margin-top', 0);
        }
    }
    //set alignment and width for images in a row
    //varible: row as array
    function makeCollageRow(row)
    {
        console.log(row);
        var alturaimagen = 0.0;
        for(i=0; i<row.length; i++){
            var altura_float = $(row[i])[0].getBoundingClientRect().height;
            if (alturaimagen <= altura_float) {
                    alturaimagen = altura_float;
                }
        }
        var align ='top';
        var newheight =0.0;

        for(i=0; i<row.length; i++){              
            align = $(row[i]).attr('data-align');
            var altura_float = $(row[i])[0].getBoundingClientRect().height;
            switch(align)
            {
                case 'top':
                    newheight = parseFloat(alturaimagen - altura_float);
                    $(row[i]).css('margin-bottom', newheight + 'px');
                break;
                case 'middle':
                    newheight = parseFloat(alturaimagen - altura_float)/2;
                    $(row[i]).css('margin-top', newheight + 'px');
                    $(row[i]).css('margin-bottom', newheight + 'px');
                break;
                case 'bottom':
                    newheight = parseFloat(alturaimagen - altura_float);
                    $(row[i]).css('margin-top', newheight + 'px');
                break;
                default:
                    newheight = parseFloat(alturaimagen - altura_float);
                    $(row[i]).css('margin-bottom', newheight + 'px');
                break;
            }
           
        }
    }

    //make rows according width
    function makeRow()
    {
         var row =[];
            var tam = 0;
        $('.item-collage-1kg').each(function () {
           
            var width = parseInt($(this).attr('data-width'));
            if((width+tam)<=12)
            {
                row.push($(this));
                tam = tam + width;
                
            }
            else
            {
                
                makeCollageRow(row);
                tam = 0;
                row = [];
                row.push($(this));
                tam = tam + width;
                if(!$(this).next().length>0)
                {
                    makeCollageRow(row);
                }
            }
        });
    }

    $(window).load(function(){
        //resizeRow();
        makeRow();
    });

    $(window).resize(function() {
        //resizeRow();
        makeRow();

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
    <script src="<?php echo URL::asset('js/modulos-editar/collage-1kg-crud.js'); ?>" type="text/javascript"></script>
    <script>
    $( ".sortable" ).sortable({
        handle: ".portlet-header",
        update: function () { save_new_order('.galeria-1kg-sortable.sortable') }
    });
    function save_new_order(clase) {
        var items_galeria = [];

        $(clase).children().each(function (i) {
            items_galeria.push($(this).attr('data-id'));
        });

        var data = {};

        data._token = '{!!csrf_token()!!}';
        data.ids_items_galeria = items_galeria;

        $.ajax({
            type: "POST",
            data: data,
            url: '{!! url(Request::segment(1).'/saveorderitemgaleria') !!}',

            success: function(data) {
                makeRow();
            },
            error: function (data) {
                console.log(data)
            }
        });

    }
    $( ".sortable" ).disableSelection();
    </script>

@endif