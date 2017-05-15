
<link href="<?php echo URL::asset('/css/modulo1.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .marca, #container-modulo1 .navbar-nav li a{
            color: {{$combinacion->color_menu}};
        }
        #container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
            color: {{$combinacion->subtitulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
        .vistaeneditar{
            top:150px;
        }
    </style>
@endif
<style>
    #container-modulo1 .marca{
        font-size: <?php echo 36+ $proyecto->font_size?>px;
    }
    #container-modulo1 .navbar-nav li a, #container-modulo1 .subtitulo {
        font-size: <?php echo 11+ $proyecto->font_size?>px;
    }
    #container-modulo1 .titulo{
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo1 .parrafo{
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    #container-modulo1 .texto{
        font-size: <?php echo 14+ $proyecto->font_size?>px;
    }
    @media (max-width: 992px) {
        #container-modulo1 .marca {
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo1 .titulo {
            font-size: <?php echo 50+ $proyecto->font_size?>px;
        }
        #container-modulo1 .parrafo {
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }
        #container-modulo1 .texto{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo1" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <div class="espacio" id="espacio-cabecera"></div>
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
                <nav id="bs-navbar" class="collapse" aria-expanded="false" style="height: 1px; z-index: 12">
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
        <div>
            <?php
                $cont = 0;
                $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
            ?>
            <div class="col-sm-6 imagen">
                <img class="img-responsive img-original" src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulosDtll[0]->imagen)!!}" id="img-modulo{{$modulosDtll[0]->id}}" data-pk="{{$modulosDtll[0]->id}}"/>
                <a class="editar-imagen nomostrar" data-toggle="modal" data-target="#editarimagen" data-width="645" data-height="700" data-pk="{{$modulosDtll[0]->id}}" data-pry="{{$pry_modulo->id_proyecto}}"><i class="fa fa-pencil"></i></a>

            </div>
            <div class="col-sm-6 contenido">
                @foreach($modulosDtll as $modulo)
                @if($cont == 0 )
                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}" data-titulo="titulo">
                    <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
                    <span style="text-decoration: overline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
                <div class="parrafo comentario-custom-color" data-comentario="comentario">
                    <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                </div>
                <?php $cont++; ?>
                @else
                <div class="col-sm-6" style="padding-left: 0; padding-right: 6%;">
                    <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}" data-comentario="titulo">
                        <h2 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h2>
                    </div>
                    <div class="texto comentario-custom-color" data-comentario="comentario">
                        <span><p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p></span>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="piebottom">

            </div>
                <!-- elementos para efecto3 menu icono -->
                <div class="cd-overlay-nav">
                    <span></span>
                </div> <!-- cd-overlay-nav -->

                <div class="cd-overlay-content">
                    <span></span>
                </div> <!-- cd-overlay-content -->

                <a href="#0" class="cd-nav-trigger nomostrar derecha" style="z-index: 13; ">Menu<span class="cd-icon"></span></a>
                <!-- fin elementos para efecto3 -->
            </div>

        </div>
</div>