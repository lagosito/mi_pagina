
<link href="<?php echo URL::asset('/css/modulo_h_videoautoplay.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>

        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .marca, #container{{$pry_modulo->idesPR}} .navbar-nav li a{
            color: {{$combinacion->color_menu}};
        }
        #container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
            color: {{$combinacion->subtitulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
        #container{{$pry_modulo->idesPR}} .fondo-boton {
           background-color: {{$combinacion->color_boton}};
        }
        #container{{$pry_modulo->idesPR}} .simbolo-boton {
            color: {{$combinacion->color_boton}};
        }
    </style>
@endif
<div id="container-modulo_h_videoautoplay" class="wrapper" style="height: 100%;">

    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0; height: 100%" >
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <div class="menu-section">
            <div class="cabecera col-md-12" id="cabecera">
                <div class="navbar-header nomostrar" id="navbar-cabecera">
                    <button id="navbaricono" class="navbar-toggle collapsed efectox" type="button" data-toggle="collapse" data-target="#bs-navbar"
                            aria-controls="bs-navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar one"></span>
                        <span class="icon-bar two"></span>
                        <span class="icon-bar three"></span>
                    </button>
                    @if($pry_modulo->logo =='')
                        <a class="navbar-brand marca"  id="marca" href="{{$pry_modulo->link}}">
                            <span class="editable-logo-texto" data-type="text" data-pk="{{$pry_modulo->idesPR}}" data-name="logo_texto">{!!$pry_modulo->logo_texto!!}</span>
                            <img src="" class="img-responsive logo nomostrar logo-cabecera" alt="" data-pk="{{$pry_modulo->idesPR}}" id="logo{{$pry_modulo->idesPR}}"/>
                            <span class="btn-file-logo editar-logo nomostrar" data-toggle="modal" data-target="#editarlogo" data-width="300" data-height="100" data-pk="{{$pry_modulo->idesPR}}"  data-link="{{$pry_modulo->link}}" ><i class="fa fa-pencil"></i></span>
                        </a>
                    @else
                        <a class="navbar-brand marca imagenlogo"  id="marca" style="height: 130px" href="{{$pry_modulo->link}}">
                            <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" class="img-responsive logo" alt="" data-pk="{{$pry_modulo->idesPR}}" id="logo{{$pry_modulo->idesPR}}"/>
                            <span class="btn-file-logo editar-logo nomostrar" data-toggle="modal" data-target="#editarlogo" data-width="300" data-height="100" data-pk="{{$pry_modulo->idesPR}}"  data-link="{{$pry_modulo->link}}"><i class="fa fa-pencil"></i></span>
                        </a>
                    @endif
                </div>
                <nav id="bs-navbar" class="collapse" aria-expanded="false" style="height: 1px; z-index: 12;">
                    <!--div class="social" id="socialheader">
                        <a class="fa fa-twitter" title="" target="_blank" href="#"></a>&nbsp;&nbsp;
                        <a class="fa fa-google-plus" title="" target="_blank" href="#"></a>&nbsp;&nbsp;
                        <a class="fa fa-facebook" title="" target="_blank" href="#"></a>
                    </div-->
                    <ul class="nav navbar-nav navbar-right ultext" id="ulnav">
                        @foreach($menu as $item)
                            @if($item->titulo!='')
                                <li><a class="ancla itemmenu" href="#{{str_replace(' ', '', $item->titulo)}}">{{$item->titulo}}</a></li>
                            @endif
                        @endforeach
                       @foreach($index as $url_index)
                            @if($url_index['titulo']!='')
                                <li><a class="itemmenu" href="{!!url($url_index['url'])!!}">{{$url_index['titulo']}}</a></li>
                            @endif
                        @endforeach
                        @foreach($urls as $url)
                            @if($url['titulo']!='')
                                <li><a class="itemmenu" href="{!!url($url['url'])!!}">{{$url['titulo']}}</a></li>
                            @endif
                        @endforeach
                            <li>
                                <a class="ancla itemmenu hidden-sm hidden-md hidden-lg" href="#contactanos">{!!trans('messages.contact_us')!!}</a>
                            </li>
                            <li class="btn-menu-li hidden-xs fondo-boton">
                                @if($modulosDtll[0]->es_url_externo==1)
                                    <a class="btn-menu edit-linkareferencia hidden-xs" id="linkareferencia{{$modulosDtll[0]->id}}" href="{{$modulosDtll[0]->url}}"  data-pk="{{$modulosDtll[0]->id}}" data-url="{{$modulosDtll[0]->url}}" data-texto="{{$modulosDtll[0]->url_texto}}" data-url-externo="{{$modulosDtll[0]->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title=""><span>{!!$modulosDtll[0]->url_texto!!}</span></a>
                                @else
                                    <a class="btn-menu ancla edit-linkareferencia  hidden-xs" id="linkareferencia{{$modulosDtll[0]->id}}" href="#{{str_replace(' ', '', $modulosDtll[0]->url)}}"  data-pk="{{$modulosDtll[0]->id}}" data-url="{{$modulosDtll[0]->url}}" data-texto="{{$modulosDtll[0]->url_texto}}" data-url-externo="{{$modulosDtll[0]->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title=""><span>{!!$modulosDtll[0]->url_texto!!}</span></a>
                                @endif
                            </li>
                    </ul>

                </nav>
            </div>
            <div class="cd-overlay-nav">
                <span></span>
            </div> <!-- cd-overlay-nav -->

            <div class="cd-overlay-content">
                <span></span>
            </div> <!-- cd-overlay-content -->

            <a href="#0" class="cd-nav-trigger nomostrar derecha" style="z-index: 13">Menu<span class="cd-icon" style="z-index: 13"></span></a>

        </div>
        <div class="imagenvideo_h_videoautoplay youtube-container" align="center">
            <div class="video_h_autoplay" id="player_h_autoplay" data-id-video="{{$modulosDtll[0]->video}}" style="position: relative;"></div>
            <div id="youtube-player-h_autoplay" class="youtube-player" data-id="{{$modulosDtll[0]->video}}" data-modulo="{{$modulosDtll[0]->id}}" >
             </div>
            <div class="contenido col-md-6 col-md-offset-2">
                    <span class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <span class="editable" data-type="text" data-pk="{{$modulosDtll[0]->id}}" data-name="titulo">{!!$modulosDtll[0]->titulo!!}</span>
                    </span>
                    <span class="subtitulo subtitulo-custom-color">
                        <span class="editable"  data-type="text" data-pk="{{$modulosDtll[0]->id}}" data-name="subtitulo">{!!$modulosDtll[0]->subtitulo!!}</span>
                    </span>
            </div>
        </div>
    </div>
</div>
@if($editar==0)
    <script src="{!!url('js/modulos/videoautoplay.js')!!}"></script>
    <script>
        $(document).ready(function() {

        });
        $(document).on('click',"#imagenvideo_h_videoautoplay", function(){
            if($("#youtube-player-h_autoplay").hasClass('play-autovideo')) {

                document.getElementById('youtube-iframe').contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*')

                $("#youtube-player-h_autoplay").removeClass('play-autovideo');
                $("#youtube-player-h_autoplay").addClass('pause-autovideo');

            }
            else{
                document.getElementById('youtube-iframe').contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*')
                $("#youtube-player-h_autoplay").addClass('play-autovideo');
                $("#youtube-player-h_autoplay").removeClass('pause-autovideo');
            }
        })

    </script>
@endif
