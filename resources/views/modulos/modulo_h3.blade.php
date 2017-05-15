
<link href="<?php echo URL::asset('/css/modulo_h3.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .marca, #container{{$pry_modulo->idesPR}} .navbar-nav li a, #container{{$pry_modulo->idesPR}} .social [class*="fa fa-"] {
            color: {{$combinacion->color_menu}};
        }
        #container{{$pry_modulo->idesPR}} .navbar-header [class*="icon-bar"]{
            background-color: {{$combinacion->color_menu}};
        }
        #container{{$pry_modulo->idesPR}} .fondo-boton {
            background-color: {{$combinacion->color_boton}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
        #container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
            color: {{$combinacion->subtitulo}};
        }
    </style>
@endif
<style>
    #container-modulo_h3 .marca{
        font-size: <?php echo 40+ $proyecto->font_size?>px;
    }
    #container-modulo_h3 .titulo{
        font-size: <?php echo 70+ $proyecto->font_size?>px;
    }
    #container-modulo_h3 .subtitulo, #container-modulo_h3 .navbar-nav li a{
        font-size: <?php echo 11+ $proyecto->font_size?>px;
    }
    #container-modulo_h3 .parrafo{
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }

    @media (max-width: 259px) {
        #container-modulo_h3 .marca {
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .titulo {
            font-size: <?php echo 20+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .subtitulo{
            font-size: <?php echo 8+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .parrafo {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 360px) and (min-width: 260px) {
        #container-modulo_h3 .marca, #container-modulo_h3 .titulo {
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .subtitulo{
            font-size: <?php echo 8+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .parrafo {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 500px) and (min-width: 361px) {
        #container-modulo_h3 .marca {
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .titulo {
            font-size: <?php echo 40+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .subtitulo{
            font-size: <?php echo 9+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .parrafo {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) and (min-width: 501px){
        #container-modulo_h3 .marca {
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .titulo {
            font-size: <?php echo 45+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .parrafo {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .subtitulo{
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 992px) and  (min-width: 768px){
        #container-modulo_h3 .titulo {
            font-size: <?php echo 55+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .parrafo {
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
        #container-modulo_h3 .subtitulo{
            font-size: <?php echo 11+ $proyecto->font_size?>px;
        }
    }

</style>
<div id="container-modulo_h3" class="wrapper" style="height: 100%">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0; height: 100%">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <input type="hidden" class="holders" data-holder1="Texto" data-holder2="Texto2" data-holder3="Link">
        <div class="height100vh">
             <?php
                    $i=0;
                $imagenesSlider = App\Console\Commands\Funciones::getSliderTextos($pry_modulo->idesPR, $idioma);
                ?>
                <div class="puntitos">
                    @foreach($imagenesSlider as $img)
                        @if($i==0)
                            <i class="active fa fa-circle activepunto" id="punto-{{$img->id}}" aria-hidden="true" data-id="{{$img->id}}"></i>
                        @else
                            <i class="fa fa-circle-thin activepunto" id="punto-{{$img->id}}" aria-hidden="true" data-id="{{$img->id}}"></i>
                        @endif
                        <?php $i=$i+1;?>
                    @endforeach
                    <?php $i=0;?>
                </div>

                <div id="cycler" class="slider-tam" data-recomendacion="*Tamaño recomendado: 1920x1280 pixeles.">
                    @foreach($imagenesSlider as $img)
                        @if($i==0)                            
                            <div class="active imagenfondo" id="slider-{{$img->id}}" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}') !important; background-size: cover; ">
                                <div class="" style="height: 100%; text-align: center;">
                                    <div class="col-sm-12 contenido">
                                        <h1 class="titulo titulo-custom-color">{{$img->texto}}</h1>
                                        <p class="parrafo comentario-custom-color">{{$img->texto2}}</p>
                                    </div>
                                </div>
                             </div>
                        @else                         
                            <div class="nomostrar imagenfondo" id="slider-{{$img->id}}" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}') !important; background-size: cover">
                                <div class="" style="height: 100%; text-align: center; ">
                                    <div class="col-sm-12 contenido">
                                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                                            <h1>{{$img->texto}}</h1>
                                        </div>
                                        <div class="parrafo comentario-custom-color">
                                            <p>{{$img->texto2}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <?php $i=$i+1;?>
                    @endforeach
                </div>
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
                            <a class="navbar-brand marca imagenlogo"  id="marca" style="height: auto" href="{{$pry_modulo->link}}">
                                <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" class="img-responsive logo" alt="" data-pk="{{$pry_modulo->idesPR}}" id="logo{{$pry_modulo->idesPR}}"/>
                                <span class="btn-file-logo editar-logo nomostrar" data-toggle="modal" data-target="#editarlogo" data-width="300" data-height="100" data-pk="{{$pry_modulo->idesPR}}"  data-link="{{$pry_modulo->link}}"><i class="fa fa-pencil"></i></span>
                            </a>
                        @endif
                        
                    </div>
                    <?php
                    $sociales = App\Console\Commands\Funciones::getSocial($pry_modulo->idesPR);
                    $cant=0;
                    ?>
                    <nav id="bs-navbar" class="collapse" aria-expanded="false" style="height: 1px; z-index: 12;">

                        <ul class="nav navbar-nav navbar-right ultext" id="ulnav">
                            @foreach($menu as $item)
                                @if($item->titulo!='')
                                    <li class="li-{{$item->titulo}}"><a class="ancla itemmenu a-{{$item->titulo}}" href="#{{str_replace(' ', '', $item->titulo)}}">{{$item->titulo}}</a></li>
                                @endif
                            @endforeach
                            @foreach($index as $url_index)
                                @if($url_index['titulo']!='')
                                    <li class="li-{{$url_index['titulo']}}"><a class="itemmenu a-{{$url_index['titulo']}}" href="{!!url($url_index['url'])!!}">{{$url_index['titulo']}}</a></li>
                                @endif
                            @endforeach
                            @foreach($urls as $url)
                                @if($url['titulo']!='')
                                    <li class="li-{{$url['titulo']}}"><a class="itemmenu a-{{$url['titulo']}}" href="{!!url($url['url'])!!}">{{$url['titulo']}}</a></li>
                                @endif
                            @endforeach

                        </ul>

                    </nav>

                </div>
                <div class="redes-sociales social-header-right redes-sociales-header" id="socialheader_3">
                    @foreach($sociales as $social)
                        @if($cant==0)
                            @if($social->url!='')
                                <span class="social">
                            @else
                                <span class="social nomostrar">
                            @endif
                                    <a class="{{$social->icono}} editsocial" id="socialicono{{$social->id}}" data-pk="{{$social->id}}" data-url="{{$social->url}}" data-icono="{{$social->icono}}" data-idred="{{$social->id_red_social}}" title="" target="_blank" data-toggle="popover" data-trigger="click" data-popover-content="#popoversocial" href="{{$social->url}}"></a>
                                </span>
                        @else
                            @if($social->url!='')
                                <span class="social">
                            @else
                                <span class="social nomostrar">
                            @endif
                                &nbsp;&nbsp;<a class="{{$social->icono}} editsocial" id="socialicono{{$social->id}}" data-pk="{{$social->id}}" data-url="{{$social->url}}" data-icono="{{$social->icono}}" data-idred="{{$social->id_red_social}}" title=""  data-toggle="popover" data-trigger="click" data-popover-content="#popoversocial" target="_blank" href="{{$social->url}}"></a>
                                </span>
                        @endif
                    @endforeach
                </div>
            </div>
            <!--div class="espaciobajo"></div-->
            
                <div class="piebottom">

                </div>
                <div class="cd-overlay-nav">
                    <span></span>
                </div> <!-- cd-overlay-nav -->

                <div class="cd-overlay-content">
                    <span></span>
                </div> <!-- cd-overlay-content -->

                <a href="#0" class="cd-nav-trigger nomostrar derecha" style="z-index: 13">Menu<span class="cd-icon" style="z-index: 13"></span></a>
                <?php
                    $cont = 0;
                    $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
                     $modulo = $modulosDtll[0];
                ?>
                 @if($editar==0)
                    @if($modulo->es_url_externo==1)
                        <a class="linkareferencia open-modaliframe fondo-boton btn-iframe" data-url="{{$modulo->url}}" data-toggle="modal" data-target="#modalIframe">{!!$modulo->url_texto!!}</a>
                    @elseif($modulo->es_url_externo==0)
                        <a class="ancla linkareferencia fondo-boton" href="#{{str_replace(' ', '', $modulo->url)}}">{!!$modulo->url_texto!!}</a>
                    @else
                        <a class="linkareferencia download fondo-boton" id="linkareferencia{{$modulo->id}}" href="{!!url('upload/'.$pry_modulo->id_proyecto.'/archivos/'.$modulo->url)!!}"  download="{{$modulo->titulo}}">{!!$modulo->url_texto!!}</a>
                    @endif
                @else
                    <a class="linkareferencia edit-linkareferencia fondo-boton btn-iframe" id="linkareferencia{{$modulo->id}}" href="{{$modulo->url}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">{!!$modulo->url_texto!!}</a>
                @endif

        </div>
    </div>
</div>
<div id="modalIframe" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="padding: 0">
                <iframe src="" style="border: 0; width: 100%;  height: 100%;"></iframe>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.open-modaliframe', function(){
        $('#modalIframe').find('iframe').attr('src', $(this).attr('data-url'));
    });
</script>
@if($editar==0)
<script>
    $(document).ready(function() {
        var total = $('#socialheader_3 span').length;
        var i = 0;
        $("#socialheader_3 .social").each(function () {
            if ($(this).hasClass('nomostrar')) {
                i=i+1;
            }
        });
        $("#ulnav").addClass('marginright-social-'+i);
        if(i==total)
        {
            $("#socialheader_3").addClass('nomostrar');
        }
    });
</script>
@else
    <script>
        $('.btn-iframe').css('position', 'absolute');
    </script>
@endif
<script>
    function cycleImages(){  
        $('.activepunto').removeClass('fa-circle');
        $('.activepunto').addClass('fa-circle-thin');        
        var $active = $('#cycler .active');
        var $next = ($active.next().length > 0) ? $active.next() : $('#cycler div:first');
        var idslide = $next.attr('id');        
        var remplazaid = idslide.replace("slider-", "punto-");
        $('#'+remplazaid).removeClass('fa-circle-thin');
        $('#'+remplazaid).addClass('fa-circle');
        $next.css('z-index',2);//move the next image up the pile
        $next.removeClass('nomostrar');
        $active.fadeOut(1500,function(){//fade out the top image
            $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
            $next.css('z-index',3).addClass('active');//make the next image the top one
            $active.addClass('nomostrar');
        });
    }

    
    $(document).ready(function(){
    // run every 7s        
        setInterval('cycleImages()', 7000);
        var tampuntos=$('.puntitos').width();
        var tamtodo=$('.height100vh').width();
        $('.puntitos').css('margin-left',(tamtodo/2)-(tampuntos/2));
    });

    $('.activepunto').click(function(){
        $('.activepunto').removeClass('fa-circle');
        $('.activepunto').addClass('fa-circle-thin');
        var idslide = $(this).attr('data-id');
        $('.imagenfondo').css('z-index',1).show().removeClass('active');
        $('.imagenfondo').css('z-index',1).show().addClass('nomostrar');
        $('#slider-'+idslide).css('z-index',3).addClass('active');
        $('#slider-'+idslide).removeClass('nomostrar');
        $('#punto-'+idslide).removeClass('fa-circle-thin');
        $('#punto-'+idslide).addClass('fa-circle'); 
    });
  
</script>