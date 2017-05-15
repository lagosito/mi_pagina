
<link href="<?php echo URL::asset('/css/modulo_c_descripcion.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}},   #container{{$pry_modulo->idesPR}} .background-custom-color{
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color, #container{{$pry_modulo->idesPR}} .linkareferencia {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif
<style>
    #container-modulo_c_descripcion .titulo{
        font-size: <?php echo 28+ $proyecto->font_size?>px;
    }
    #container-modulo_c_descripcion .parrafo{
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }
    @media (max-width: 1025px){
        #container-modulo_c_descripcion .titulo{
            font-size: <?php echo 23+ $proyecto->font_size?>px;
        }
        #container-modulo_c_descripcion .parrafo{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c_descripcion" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>

        @foreach($modulosDtll as $modulo)
            <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
                <div class="fila col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1">
                    <div class="contenido background-custom-color col-xs-12">
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
                        </div>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
