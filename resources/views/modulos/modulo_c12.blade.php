
<link href="<?php echo URL::asset('/css/modulo_c12.css'); ?>" rel="stylesheet" type="text/css" />
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
    #container-modulo_c12 .titulo{
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo_c12 .parrafo{
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    @media (max-width: 1025px) and  (min-width: 768px){
        #container-modulo_c12 .titulo{
            font-size: <?php echo 50+ $proyecto->font_size?>px;
        }
        #container-modulo_c12 .parrafo{
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) and (min-width: 698px){
        #container-modulo_c12 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_c12 .parrafo{
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 698px) and (min-width: 500px) {
        #container-modulo_c12 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_c12 .parrafo{
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }

    }
    @media (max-width: 499px) and (min-width: 290px) {
        #container-modulo_c12 .titulo{
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
        #container-modulo_c12 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 289px){
        #container-modulo_c12 .titulo{
            font-size: <?php echo 18+ $proyecto->font_size?>px;
        }
        #container-modulo_c12 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }

</style>
<div id="container-modulo_c12" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        @foreach($modulosDtll as $modulo)
            @if($cont == 0 )
                <div class="row fila">
                    <div class="col-sm-12 contenido">
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                        </div>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                        <!--div class="imagenvideo_c12" align="center" style="position: relative">
                            <a class="linkvideo_c12 edit-IDvideo-play" id="idvideo-play{{$modulo->id}}" data-pk="{{$modulo->id}}" data-video="{{$modulo->video}}" data-toggle="popover" data-trigger="click" data-popover-content="#popoverIDvideo-play" title="" >
                                <i class="fa fa-play playsimbol fondo-boton"></i>
                            </a>
                            <div class="video_c12" id="player_c12" data-id-video="{{$modulo->video}}"></div>
                        </div-->
                    </div>
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" style="padding-bottom: 60px">
                        <div class="youtube-container">
                            <div class="youtube-player" data-id="{{$modulo->video}}"  data-modulo="{{$modulo->id}}"></div>
                        </div>
                    </div>
                </div>
            @endif
            <?php $cont++; ?>
        @endforeach
    </div>
</div>
