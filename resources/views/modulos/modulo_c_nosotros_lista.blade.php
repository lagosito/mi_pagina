<link href="<?php echo URL::asset('/css/modulo_c_nosotros_lista.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif
<style>
    #container-modulo_c_nosotros_lista .titulo {
        font-size: <?php echo 26+ $proyecto->font_size?>px;
    }
    #container-modulo_c_nosotros_lista .parrafo {
        font-size: <?php echo 14+ $proyecto->font_size?>px;
    }
    @media (max-width: 400px) and (min-width: 271px){
        #container-modulo_c_nosotros_lista .titulo {
            font-size: <?php echo 18+ $proyecto->font_size?>px;
        }
        #container-modulo_c_nosotros_lista .parrafo {
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 270px){
        #container-modulo_c_nosotros_lista .titulo {
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_c_nosotros_lista .parrafo {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c_nosotros_lista" class="wrapper">
    <div  class="container" style="width: 100%; padding: 0" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="fila">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 contenido">
                    @foreach($modulosDtll as $modulo)
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h1 class="editable" data-pk="{{$modulo->id}}" data-type="text"  data-name="titulo">
                                <img src="{!!url('img/rayita-roja.png')!!}"/>{{$modulo->titulo}}</h1>
                        </div>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable" data-pk="{{$modulo->id}}" data-type="textarea"  data-name="comentario">
                                {{$modulo->comentario}}
                            </p>
                        </div>
                        <div class="col-md-8 col-md-offset-3">
                            <ul class="listado-beneficios">
                                <li>Estén en la búsqueda de adquirir, perfeccionar y actualizar conocimientos técnicos para la mejora de su sistema productivo y de comercialización.</li>
                                <li>Busquen la posibilidad de evaluación de nuevas tecnologías que permitan mejorar su productividad y competitividad.</li>
                                <li>Requieran apoyo y la asistencia necesaria para adaptar nuevas tecnologías en sus procesos productivos.</li>
                                <li>Necesiten apoyo especializado en la formulación y planteamiento de proyectos de I+D+i que permitan mejorar niveles productivos a través de la Innovación.</li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>