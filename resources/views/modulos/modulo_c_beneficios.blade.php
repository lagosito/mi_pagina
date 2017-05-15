
<link href="<?php echo URL::asset('/css/modulo_c_beneficios.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}},   #container{{$pry_modulo->idesPR}} .background-custom-color{
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
         #container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif
<style>
    #container-modulo_c_beneficios .titulo{
        font-size: <?php echo 28+ $proyecto->font_size?>px;
    }
    #container-modulo_c_beneficios .subtitulo{
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }
    #container-modulo_c_beneficios .parrafo{
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }
    @media (max-width: 1025px){
        #container-modulo_c_beneficios .titulo{
            font-size: <?php echo 23+ $proyecto->font_size?>px;
        }
        #container-modulo_c_beneficios .subtitulo{
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }
        #container-modulo_c_beneficios .parrafo{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c_beneficios" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>

        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="fila col-xs-10 col-xs-offset-1">
                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h1 class="editable"  data-type="text" data-pk="{{$modulosDtll[0]->id}}" data-name="titulo">{!!$modulosDtll[0]->titulo!!}</h1>
                </div>

                <?php
                $tabs = App\Console\Commands\Funciones::getGaleriatabs($pry_modulo->idesPR, $idioma); ?>
                @foreach($tabs as $tab)
                    <?php
                    $items = App\Console\Commands\Funciones::getGaleriaItems($tab->id, $idioma);
                    $i=0;
                    ?>
                    @if($editar==1)
                        <div class="nuevoitem col-md-12" align="center" style="clear: both;">
                            <button type="button" class="btn btn-info editar-item" data-toggle="modal" data-target="#editarItem" data-tab="{{$tab->id}}" data-id="0" data-item="" data-texto="" >Agregar item</button>
                        </div>
                    @endif
                    <div class="listado-b">
                        @foreach($items as $item)
                            @if($i==0)
                             <div class="col-md-12 par">
                            @endif
                            <div class="col-md-6 item-box" id="item_beneficios{{$item->id}}">
                                @if($editar==1)
                                <span class="editar-item-box">
                                    <span class="editar-item-box-botones">
                                         <span class='btn btn-info editar-item' data-toggle='modal' data-target='#editarItem' data-id='{!! $item->id !!}'  data-item='{!! $item->item !!}' data-tab='{!! $tab->id !!}' data-imagen='{!! $item->imagen !!}' data-texto='{!! $item->texto !!}'>Editar</span>
                                        <span class='btn btn-danger eliminar-item'  data-id='{!! $item->id !!}'>Eliminar</span>
                                    </span>
                                </span>
                                @endif
                                <div class="col-sm-4 imagen">
                                    @if(@getimagesize(public_path().'/upload/'.$pry_modulo->id_proyecto.'/galeria/' . $item->imagen))
                                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/galeria/'.$item->imagen)!!}" alt="" class="img-responsive" id="img-c_beneficios{{$item->id}}">
                                    @else
                                        <img src="{!!url('img/image_not_available.png')!!}" alt="" class="img-responsive" id="img-c_beneficios{{$item->id}}">
                                    @endif
                                </div>
                                <div class="col-sm-8 textos">
                                    <div class="subtitulo subtitulo-custom-color">
                                        <h3>
                                           {{$item->item}}
                                        </h3>
                                    </div>
                                    <div class="parrafo comentario-custom-color">
                                        <p>
                                         {{$item->texto}}
                                         </p>
                                    </div>
                                </div>
                            </div>
                             <?php $i++;?>
                             @if($i==2)
                                 </div>
                                <?php $i=0;?>
                            @endif
                    @endforeach
                    </div>
                @endforeach
                    
            </div>
        </div>
    </div>
</div>
@if($editar==1)
<div id="editarItem" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" >
        <!-- Modal content-->
        <div class="modal-content tabs-modal-content">
            <div class="modal-body tabs-modal-body row">
                <div class="col-md-12 sinpadding clearfix"  style="position: relative">
                    <button type="button" class="close" data-dismiss="modal" style="font-size: 20px">&times;</button>
                    <div class="col-md-4" style="padding-top: 15px">
                        <div class="box-item" id="box-item" style="padding: 0">
                            <img src="" style="width: 100%">
                        </div>
                        <input class="nomostrar" value="" id="id-item">
                        <input class="nomostrar" value="" id="id-tab-item">

                        <span class="btn btn-file-item" style="z-index: 1;right: 13px">
                            <span class="fa fa-folder-open-o"></span> <input type="file" id="file-item" class="file" name="file">
                        </span>
                    </div>
                    <div class="col-md-8">
                        <input class="edit-item-name" id="edit-item-name" name="item"  style="border: 0; border-bottom: 1px dashed blue;width: 100%" placeholder="Titulo"/>
                    </div>
                    <div class="col-md-8" style="margin-top: 15px;margin-bottom: 15px">
                        <textarea id="edit-texto-item" name="texto" class="textarea-edit" style="border: 0; border-bottom: 1px dashed blue;width: 100%" rows="7" placeholder="Descripción"></textarea>
                    </div>

                </div>
                <div class="alert alert-success alert-dismissable nomostrar label-cargando col-md-6 col-md-offset-3" style="background: none; text-align: center">
                    <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> Guardando item...</label>
                </div>
                <div class="col-md-12" style="text-align: right">
                    <span class="btn blue editable-submit btn-save-item">
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
<script src="<?php echo URL::asset('js/modulos-editar/item-crud.js'); ?>" type="text/javascript"></script>
@endif