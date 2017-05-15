<link href="<?php echo URL::asset('/css/modulo_c_textowysihtml.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }

        #container{{$pry_modulo->idesPR}} .fondo-boton {
            background-color: {{$combinacion->color_boton}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif
<div id="container-modulo_c_textowysihtml" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        $imagenesSlider = App\Console\Commands\Funciones::getImagenesSlider($pry_modulo->idesPR);
        ?>
        <div id="imagenfondo" style="float: left; width: 100%; background-image:url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="contenido col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <div class="col-sm-12" style="padding: 0">
                    <div class="col-md-12">
                        <div id="texto1" data-pk="{{$modulosDtll[0]->id}}" data-name="comentario" data-type="wysihtml5" data-original-title="Editar texto" class="editable editable-wysihtml5" tabindex="-1" style="background-color: rgba(0, 0, 0, 0);">
                            {!! $modulosDtll[0]->comentario !!}
                        </div>
                    </div>                    
                </div>                
            </div>
        </div>
    </div>

</div>
