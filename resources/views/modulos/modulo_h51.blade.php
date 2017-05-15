
<link href="<?php echo URL::asset('/css/modulo_h51.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .marca, #container-modulo_h51 .navbar-nav li a{
            color: {{$combinacion->color_menu}};
        }
        #container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
            color: {{$combinacion->subtitulo}};
        }
        #container{{$pry_modulo->idesPR}} .linkareferencia {
            color: {{$combinacion->comentario}};
            border-color: {{$combinacion->color_boton}} ;
            background-color: {{$combinacion->color_boton}} ;
        }
    </style>
@endif
<style>
    #container-modulo_h51 .titulo {
        font-size: <?php echo 65+ $proyecto->font_size?>px;
    }
    #container-modulo_h51 .subtitulo, #container-modulo_h51 .linkareferencia, #container-modulo_h51 .navbar-nav li a {
        font-size: <?php echo 11+ $proyecto->font_size?>px;
    }
    #container-modulo_h51 .marca {
        font-size: <?php echo 36+ $proyecto->font_size?>px;
    }
    @media (max-width: 260px) {
        #container-modulo_h51 .marca, #container-modulo_h51 .titulo {
              font-size: <?php echo 15+ $proyecto->font_size?>px;
          }
        #container-modulo_h51 .subtitulo, #container-modulo_h51 .linkareferencia{
            font-size: <?php echo 7+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 360px) and (min-width: 261px) {
        #container-modulo_h51 .marca, #container-modulo_h51 .titulo {
            font-size: <?php echo 20+ $proyecto->font_size?>px;
        }
        #container-modulo_h51 .subtitulo, #container-modulo_h51 .linkareferencia{
            font-size: <?php echo 8+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 500px) and (min-width: 361px) {
        #container-modulo_h51 .marca, #container-modulo_h51 .titulo {
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
        #container-modulo_h51 .subtitulo, #container-modulo_h51 .linkareferencia{
            font-size: <?php echo 9+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) and (min-width: 501px){
        #container-modulo_h51 .marca {
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_h51 .titulo {
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_h51 .subtitulo, #container-modulo_h51 .linkareferencia{
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 992px) and  (min-width: 768px){
        #container-modulo_h51 .titulo {
            font-size: <?php echo 55+ $proyecto->font_size?>px;
        }
        #container-modulo_h51 .subtitulo, #container-modulo_h51 .linkareferencia{
            font-size: <?php echo 11+ $proyecto->font_size?>px;
        }
    }
</style>

<div id="container-modulo_h51" class="wrapper ejemfondo">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <!--div id="imagenfondo" style=" text-align: center;  float: left; width: 100%; background-image: url('../../../img/{{$pry_modulo->imagen_fondo}}') !important;" class="imagenfondo"-->
        <div>
            <div class="col-sm-12 height100vh" style="padding: 0; position: relative; height: auto">
                <?php
                    $i=0;
                $imagenesSlider = App\Console\Commands\Funciones::getImagenesSlider($pry_modulo->idesPR);
                ?>

                <div id="cycler" class="slider-tam" data-recomendacion="*Tamaño recomendado: 1920x1280 pixeles.">
                    @foreach($imagenesSlider as $img)
                         @if($i==0)
                             <div class="active imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}') !important; background-size: cover"></div>
                                @else
                            <div class="nomostrar imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}') !important; background-size: cover"></div>
                                @endif
                        <?php $i=$i+1;?>
                    @endforeach
                </div>
                <div class="espacio" id="espacio-cabecera"></div>
                <div class="menu-section">
                    <div class="cabecera col-md-12" id="cabecera">
                        <div class="navbar-header nomostrar" id="navbar-cabecera">
                            <button id="navbaricono" class="navbar-toggle collapsed efectox" type="button" data-toggle="collapse" data-target="#bs-navbar"
                                    aria-controls="bs-navbar" aria-expanded="false" style="z-index: 5">
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
                                <a class="navbar-brand marca imagenlogo"  id="marca" style="height: auto; position: relative"" href="{{$pry_modulo->link}}">
                                    <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" class="img-responsive logo" alt="" data-pk="{{$pry_modulo->idesPR}}" id="logo{{$pry_modulo->idesPR}}"/>
                                    <span class="btn-file-logo editar-logo nomostrar" data-toggle="modal" data-target="#editarlogo" data-width="300" data-height="100" data-pk="{{$pry_modulo->idesPR}}"  data-link="{{$pry_modulo->link}}" style="padding-left: 11px"><i class="fa fa-pencil"></i></span>
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
                <div class="cd-overlay-nav">
                    <span></span>
                </div> <!-- cd-overlay-nav -->

                <div class="cd-overlay-content">
                    <span></span>
                </div> <!-- cd-overlay-content -->


                <a href="#0" class="cd-nav-trigger nomostrar derecha" style="z-index: 13">Menu<span class="cd-icon" style="z-index: 13"></span></a>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="z-index: 4">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <?php
                                $cont = 0;
                                $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
                                ?>
                                <div style=" text-align: center">
                                    <div class="col-sm-10 contenido col-sm-offset-1" id="contenido_md_h51">
                                        @foreach($modulosDtll as $modulo)

                                            <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">
                                                <h2 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h2>
                                            </div>
                                            <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                                                <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1><br/>
                                            </div>
                                            <div class="">
                                                @if($modulo->es_url_externo==1)
                                                    <a class="linkareferencia edit-linkareferencia borde-boton fondo-boton comentario-custom-color" id="linkareferencia{{$modulo->id}}" href="{{$modulo->url}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->comentario}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="comentario" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">{!!$modulo->comentario!!}</a>
                                                @else
                                                    <a class="ancla linkareferencia edit-linkareferencia borde-boton fondo-boton comentario-custom-color" id="linkareferencia{{$modulo->id}}" href="#{{str_replace(' ', '', $modulo->url)}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->comentario}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="comentario" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">{!!$modulo->comentario!!}</a>
                                                @endif
                                             </div>
                                        @endforeach
                                    </div>
                                    <div class="piebottom">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <!--a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <img src="{!!url('img/leftarrow.png')!!}"/>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <img src="{!!url('img/rightarrow.png')!!}"/>
                            <span class="sr-only">Next</span>
                        </a-->
                    </div>
            </div>
        </div>
    </div>
</div>
<script>
    function cycleImages(){
        var $active = $('#cycler .active');
        var $next = ($active.next().length > 0) ? $active.next() : $('#cycler div:first');
        $next.css('z-index',2);//move the next image up the pile
        $next.removeClass('nomostrar');
        $active.fadeOut(1500,function(){//fade out the top image
            $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
            $next.css('z-index',3).addClass('active');//make the next image the top one
            $active.addClass('nomostrar');
        });

    }

    function centrarContenidoCabecera(){

        if($(window).width()>=768)
        {
            var elementos = $('#contenido_md_h51');
            var cabecera = $('.menu-section');
            if($(cabecera).hasClass('fixed'))
            {
                elementos.css({
                    'margin-top': ($(window).height() / 2 - $(elementos).height() / 2) + 'px'
                });
            }
            else
            {
                elementos.css({
                    'margin-top': ($(window).height() / 2 - $(elementos).height() / 2) - $(cabecera).height() + 'px'
                });
            }

        }
    }

    $(document).ready(function(){
    // run every 7s
        setInterval('cycleImages()', 7000);
    });
   /* $(window).load(function() {
        centrarContenidoCabecera();

    });
    $(window).resize(function() {
        centrarContenidoCabecera();

    });*/
</script>
