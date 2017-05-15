
<link href="<?php echo URL::asset('/css/modulo_c16.css'); ?>" rel="stylesheet" type="text/css" />
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
        #container{{$pry_modulo->idesPR}} .borde-boton {
            border-color: {{$combinacion->color_boton}};
        }
        #container{{$pry_modulo->idesPR}} .fondo-boton {
            background-color: {{$combinacion->color_boton}};
        }

        @media (min-width: 992px) {
            #container{{$pry_modulo->idesPR}} .parrafo:after {
                content: '';
                background-image: -webkit-linear-gradient(top, rgba(231, 231, 226, 0) 0%, {{$combinacion->fondo}} 100%);
                background-image: -o-linear-gradient(top, rgba(231, 231, 226, 0) 0%, {{$combinacion->fondo}} 100%); /* For Opera 11.1 to 12.0 */
                background-image: -moz-linear-gradient(top, rgba(231, 231, 226, 0) 0%, {{$combinacion->fondo}} 100%); /* For Firefox 3.6 to 15 */
                background-image: linear-gradient(top, rgba(231, 231, 226, 0) 0%, {{$combinacion->fondo}} 100%); /* Standard syntax */
                display: block;
                position: absolute;
                pointer-events: none;
                bottom: 170px;
                left: 0;
                width: 85%;
                height: 60px;
            }
        }
    </style>
@endif
<style>
    #container-modulo_c16 .titulo{
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo_c16 .parrafo{
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    #container-modulo_c16 .linkareferencia{
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }

    @media (max-width: 1179px) and  (min-width: 768px){
        #container-modulo_c16 .titulo{
            font-size: <?php echo 45+ $proyecto->font_size?>px;
        }
        #container-modulo_c16 .parrafo{
            font-size: <?php echo 17+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) and  (min-width: 360px) {
        #container-modulo_c16 .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_c16 .parrafo{
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 359px){
        #container-modulo_c16 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_c16 .parrafo{
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
    }
</style>
<a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
<div id="container-modulo_c16" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>

        @foreach($modulosDtll as $modulo)
            <div class="fila">
                <div class="col-md-6 video-container">
                    <div class="youtube-container">
                        <div class="youtube-player" data-id="{{$modulo->video}}"  data-modulo="{{$modulo->id}}"></div>
                    </div>
                    <!--div class="imagenvideo_c16" align="center" style="position: relative">
                        <a class="linkvideo_c16 edit-IDvideo-play" id="idvideo-play{{$modulo->id}}" data-pk="{{$modulo->id}}" data-video="{{$modulo->video}}" data-toggle="popover" data-trigger="click" data-popover-content="#popoverIDvideo-play" title=""  >
                            <i class="fa fa-play playsimbol fondo-boton"></i>
                        </a>
                        <div class="video_c16" id="player_c16" data-id-video="{{$modulo->video}}"></div>
                    </div-->
                </div>
                <div class="col-md-6 contenido">
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                    </div>
                    <div class="parrafo comentario-custom-color">
                        <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                    </div>
                    <div class="botonlink">
                        @if($modulo->es_url_externo==1)
                            <a class="linkareferencia edit-linkareferencia borde-boton" id="linkareferencia{{$modulo->id}}" href="{{$modulo->url}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->subtitulo}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="subtitulo" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">{!!$modulo->subtitulo!!}</a>
                        @else
                            <a class="ancla linkareferencia edit-linkareferencia borde-boton" id="linkareferencia{{$modulo->id}}" href="#{{str_replace(' ', '', $modulo->url)}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->subtitulo}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="subtitulo" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">{!!$modulo->subtitulo!!}</a>
                        @endif
                     </div>
                </div>
            </div>
        @endforeach
    </div>
</div>