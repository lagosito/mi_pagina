
<link href="<?php echo URL::asset('/css/modulo_h4.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>

        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .marca, #container-modulo_h4 .navbar-nav li a{
            color: {{$combinacion->color_menu}};
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
        #container{{$pry_modulo->idesPR}} .simbolo-boton {
            color: {{$combinacion->color_boton}};
        }
    </style>
@endif
<style>
    #container-modulo_h4 .marca{
        font-size: <?php echo 36+ $proyecto->font_size?>px;
    }
    #container-modulo_h4 .navbar-nav li a, #container-modulo_h4 .subtitulo  {
        font-size: <?php echo 11+ $proyecto->font_size?>px;
    }
    #container-modulo_h4 .titulo{
        font-size: <?php echo 52+ $proyecto->font_size?>px;
    }
    #container-modulo_h4 .parrafo{
        font-size: <?php echo 20+ $proyecto->font_size?>px;
    }
    #container-modulo_h4 .texto{
        font-size: <?php echo 14+ $proyecto->font_size?>px;
    }
    @media (max-width: 259px) {
        #container-modulo_h4 .marca {
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }
        #container-modulo_h4 .titulo {
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
        #container-modulo_h4 .parrafo {
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_h4 .subtitulo {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 360px) and (min-width: 260px) {
        #container-modulo_h4 .marca {
            font-size: <?php echo 20+ $proyecto->font_size?>px;
        }
        #container-modulo_h4 .titulo {
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
        #container-modulo_h4 .parrafo {
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_h4 .subtitulo {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }

    }
    @media (max-width: 500px) and (min-width: 361px) {
        #container-modulo_h4 .marca, #container-modulo_h4 .titulo {
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
        #container-modulo_h4 .parrafo {
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) and (min-width: 501px){
        #container-modulo_h4 .marca {
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_h4 .titulo {
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_h4 .parrafo {
            font-size: <?php echo 17+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 1264px) and  (min-width: 768px){
        #container-modulo_h4 .titulo {
            font-size: <?php echo 45+ $proyecto->font_size?>px;
        }
        #container-modulo_h4 .parrafo {
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }
        #container-modulo_h4 .texto {
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_h4" class="wrapper" style="height: 100%;">

    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0; height: 100%" id="contenedor_h4">
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <div class="imagenvideo_h4 youtube-container" align="center" style=" float:left; width: 100%; padding: 0; height: 100%;">
            <div  style="background-color: rgba(0,0,0,0.5); height: 100%; padding: 0">

                <div class="video_h4" id="player_h4" data-id-video="{{$modulosDtll[0]->video}}" style="position: absolute; float: left; left: 0; z-index:-100"></div>
                    <div id="youtube-player-h4" class="youtube-player" data-id="{{$modulosDtll[0]->video}}" data-modulo="{{$modulosDtll[0]->id}}" style="position: absolute; float: left; left: 0; z-index:-100;"></div>
                <div class="espacio"></div>
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
                                    <span class="btn-file-logo editar-logo nomostrar" data-toggle="modal" data-target="#editarlogo" data-width="300" data-height="100" data-pk="{{$pry_modulo->idesPR}}"  data-link="{{$pry_modulo->link}}"><i class="fa fa-pencil"></i></span>
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
                            </ul>

                        </nav>
                    </div>
                </div>
                <div class="" style="text-align: center">
                @foreach($modulosDtll as $modulo)
                @if($cont==0)
                    <div class="contenido">

                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1><br/>
                        </div>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                        <a class="linkvideo_h4 video edit-IDvideo-play" id="idvideo-play{{$modulo->id}}" data-pk="{{$modulo->id}}" data-video="{{$modulo->video}}" data-toggle="popover" data-trigger="click" data-popover-content="#popoverIDvideo-play" title="" >
                            <i class="fa fa-play playsimbol2 borde-boton simbolo-boton"></i>
                        </a>

                    </div>
                    <div class="subpartes">

                    @else
                        <div class="col-sm-4" style="padding-left: 8%; padding-right: 8%">
                            <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">
                                <h3 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3><br/>
                            </div>
                            <div class="texto comentario-custom-color">
                                <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                            </div>
                        </div>
                @endif
                <?php $cont = $cont+1; ?>
                @endforeach
                    </div>
                    <div class="piebottom">

                    </div>
                    <div class="cd-overlay-nav">
                        <span></span>
                    </div> <!-- cd-overlay-nav -->

                    <div class="cd-overlay-content">
                        <span></span>
                    </div> <!-- cd-overlay-content -->

                    <a href="#0" class="cd-nav-trigger nomostrar derecha" style="z-index: 13">Menu<span class="cd-icon" style="z-index: 13"></span></a>
                </div>

            </div>
        </div>
    </div>
</div>
@if($editar==0)
<script>
    $(document).ready(function() {
        $('.linkvideo_h4').on('click', function(ev) {
            if($(this).find('i').hasClass('fa-play')) {

                var iframe = document.createElement("iframe");
                iframe.setAttribute("src", "//www.youtube.com/embed/" + $("#youtube-player-h4").attr('data-id') + "?autoplay=1&loop=1&playlist="+$("#youtube-player-h4").attr('data-id')+"&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
                iframe.setAttribute("frameborder", "0");
                iframe.setAttribute("id", "youtube-iframe");
                $("#youtube-player-h4 div").replaceWith(iframe);

                document.getElementById('youtube-iframe').contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*')

                $(this).find('i').removeClass('fa-play');
                $(this).find('i').addClass('fa-pause');
                ev.preventDefault();
            }
            else{
                document.getElementById('youtube-iframe').contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*')
                $(this).find('i').removeClass('fa-pause');
                $(this).find('i').addClass('fa-play');
        }

        });
    });
</script>
@endif
