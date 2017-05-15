<link href="<?php echo URL::asset('/css/modulo2.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .marca, #container-modulo2 .navbar-nav li a{
            color: {{$combinacion->color_menu}};
        }
        #container{{$pry_modulo->idesPR}} .fondo-boton {
            background-color: {{$combinacion->color_boton}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif
<style>
    #container-modulo2 .marca{
        font-size: <?php echo 36+ $proyecto->font_size?>px;
    }
    #container-modulo2 .navbar-nav li a {
        font-size: <?php echo 11+ $proyecto->font_size?>px;
    }
    #container-modulo2 .titulo{
        font-size: <?php echo 50+ $proyecto->font_size?>px;
    }
    #container-modulo2 .parrafo{
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    #container-modulo2 .linkvideo-play{
        font-size: <?php echo 24+ $proyecto->font_size?>px;
    }
    @media (max-width: 500px) {
        #container-modulo2 .marca {
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
        #container-modulo2 .titulo {
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo2 .parrafo, #container-modulo2 .tiempovideo {
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }
        #container-modulo2 .linkvideo-play{
            font-size: <?php echo 18+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) and (min-width: 501px){
        #container-modulo2 .marca {
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo2 .titulo {
            font-size: <?php echo 45+ $proyecto->font_size?>px;
        }
        #container-modulo2 .parrafo, #container-modulo2 .tiempovideo {
            font-size: <?php echo 17+ $proyecto->font_size?>px;
        }
        #container-modulo2 .linkvideo-play{
            font-size: <?php echo 22+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 992px) and  (min-width: 768px){
        #container-modulo2 .titulo {
            font-size: <?php echo 55+ $proyecto->font_size?>px;
        }
        #container-modulo2 .parrafo, #container-modulo2 .tiempovideo {
            font-size: <?php echo 17+ $proyecto->font_size?>px;
        }
        #container-modulo2 .linkvideo-play{
            font-size: <?php echo 22+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo2" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0; height: 100%">
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
                            <span class="btn-file-logo editar-logo nomostrar" data-toggle="modal" data-target="#editarlogo" data-width="300" data-height="100" data-pk="{{$pry_modulo->idesPR}}"  data-link="{{$pry_modulo->link}}" style="padding-left: 11px"><i class="fa fa-pencil"></i></span>
                        </a>
                    @else
                        <a class="navbar-brand marca imagenlogo"  id="marca" style="height: auto" href="{{$pry_modulo->link}}">
                            <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" class="img-responsive logo" alt="" data-pk="{{$pry_modulo->idesPR}}" id="logo{{$pry_modulo->idesPR}}"/>
                            <span class="btn-file-logo editar-logo nomostrar" data-toggle="modal" data-target="#editarlogo" data-width="300" data-height="100" data-pk="{{$pry_modulo->idesPR}}"  data-link="{{$pry_modulo->link}}" style="padding-left: 11px"><i class="fa fa-pencil"></i></span>
                        </a>
                    @endif
                    
                </div>
                <nav id="bs-navbar" class="collapse" aria-expanded="false" style="height: 1px;; z-index: 12">
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

        <div class="cuerpo">
            <?php
            $cont = 0;
            $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
            ?>
            <div class="col-sm-6 contenido">
                @foreach($modulosDtll as $modulo)
                    @if($cont == 0 )
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
                    </div>
                    <div class="parrafo comentario-custom-color">
                        <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                    </div>
                    <div class="linkvideo-play">
                        <a class="edit-linkvideo-play" href="{{$modulo->video}}" id="linkvideo-play{{$modulo->id}}" data-pk="{{$modulo->id}}" data-video="{{$modulo->video}}" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkvideo-play" title="">
                            <i class="fa fa-play-circle playsimbol fondo-boton"></i>
                        </a>
                        <span class="editable comentario-custom-color"  data-type="text" data-pk="{{$modulo->id}}" data-name="url">{!!$modulo->url!!}</span>
                        <span class="tiempovideo comentario-custom-color"><i class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</i></span>

                    </div>
                    <?php $cont++; ?>
                    @endif
            </div>

                <div class="col-sm-6 imagen modfcr">
                    <img class="img-responsive img-original" src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" id="img-modulo{{$modulo->id}}" data-pk="{{$modulo->id}}"/>
                    <a class="editar-imagen nomostrar" data-toggle="modal" data-target="#editarimagen" data-width="645" data-height="700" data-pk="{{$modulo->id}}" data-pry="{{$pry_modulo->id_proyecto}}"><i class="fa fa-pencil"></i></a>
                </div>
                @endforeach

        </div>
        <div class="cd-overlay-nav">
            <span></span>
        </div> <!-- cd-overlay-nav -->

        <div class="cd-overlay-content">
            <span></span>
        </div> <!-- cd-overlay-content -->

        <a href="#0" class="cd-nav-trigger nomostrar derecha">Menu<span class="cd-icon"></span></a>
    </div>

</div>