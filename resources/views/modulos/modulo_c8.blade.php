
<link href="<?php echo URL::asset('/css/modulo_c8.css'); ?>" rel="stylesheet" type="text/css" />
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
        #container{{$pry_modulo->idesPR}} .fondo-boton {
            background-color: {{$combinacion->color_boton}};
        }
    </style>
@endif
<style>
    #container-modulo_c8 .titulo{
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo_c8 .parrafo{
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    @media (max-width: 991px) and  (min-width: 768px){
        #container-modulo_c8 .titulo{
            font-size: <?php echo 45+ $proyecto->font_size?>px;
        }
        #container-modulo_c8 .parrafo{
            font-size: <?php echo 17+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) and  (min-width: 360px) {
        #container-modulo_c8 .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_c8 .parrafo{
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 359px){
        #container-modulo_c8 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_c8 .parrafo{
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c8" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>

        @foreach($modulosDtll as $modulo)
            <div class="fila">
                <div class="col-md-6 contenido">
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                    </div>
                    <div class="parrafo comentario-custom-color">
                        <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1 video-container">
                    <div class="youtube-container">
                        <div class="youtube-player" data-id="{{$modulo->video}}"  data-modulo="{{$modulo->id}}"></div>
                    </div>
                    <!--div class="imagenvideo_c8" align="center" style="position: relative">
                        <a class="linkvideo_c8 edit-IDvideo-play" id="idvideo-play{{$modulo->id}}" data-pk="{{$modulo->id}}" data-video="{{$modulo->video}}" data-toggle="popover" data-trigger="click" data-popover-content="#popoverIDvideo-play" title="">
                            <i class="fa fa-play playsimbol fondo-boton"></i>
                        </a>
                        <div class="video_c8" id="player_c8" data-id-video="{{$modulo->video}}"></div>
                    </div-->
                </div>
            </div>
        @endforeach
    </div>
</div>