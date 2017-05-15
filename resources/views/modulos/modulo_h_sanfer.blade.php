
<link href="<?php echo URL::asset('/css/modulo_sanfer_header.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .marca, #container-modulo_sanfer_header .navbar-nav li a{
            color: {{$combinacion->color_menu}};
        }
        #container{{$pry_modulo->idesPR}} .titulo{
            color: {{$combinacion->titulo}};
        }
    </style>
@endif
<style>
    #container-modulo_sanfer_header .navbar-nav li a {
        font-size: <?php echo 15+ $proyecto->font_size;?>px;
    }
    #container-modulo_sanfer_header .marca {
        font-size: <?php echo 36+ $proyecto->font_size;?>px;
    }
    #container-modulo_sanfer_header .titulo {
        font-size: <?php echo 32+ $proyecto->font_size;?>px;
    }
    @media (max-width: 767px) {
        #container-modulo_sanfer_header .titulo {
            font-size: <?php echo 18+ $proyecto->font_size;?>px;
        }
    }
    @media (max-width: 400px){
        #container-modulo_sanfer_header .titulo {
            font-size: <?php echo 16+ $proyecto->font_size;?>px;
        }
    }
    @media(max-width: 270px){
        #container-modulo_sanfer_header .titulo {
            font-size: <?php echo 14+ $proyecto->font_size;?>px;
        }
    }
</style>

<div id="container-modulo_sanfer_header" class="wrapper ejemfondo">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <!--div id="imagenfondo" style=" text-align: center;  float: left; width: 100%; background-image: url('../../../img/{{$pry_modulo->imagen_fondo}}') !important;" class="imagenfondo"-->
        <div>
            <div class="col-sm-12" style="padding: 0; position: relative; height: auto">
                <div class="menu-superior" align="center" style="position:relative">
                    @if($pry_modulo->logo =='')
                        <p class="marca" id="marca-center">
                            <span class="editable-logo-texto" data-type="text" data-pk="{{$pry_modulo->idesPR}}" data-name="logo_texto">{!!$pry_modulo->logo_texto!!}</span>
                            <img src="" class="img-responsive logo nomostrar logo-cabecera" alt="" data-pk="{{$pry_modulo->idesPR}}" id="logo{{$pry_modulo->idesPR}}"/>
                            <a class="btn-file-logo editar-logo nomostrar" data-toggle="modal" data-target="#editarlogo" data-width="300" data-height="100" data-pk="{{$pry_modulo->idesPR}}" data-pry="{{$pry_modulo->id_proyecto}}"  style="padding-left: 11px"><i class="fa fa-pencil"></i></a>
                        </p>
                    @else
                        <p class="marca imagenlogo"  id="marca-center" style="height: auto; position: relative">
                            <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" class="img-responsive logo" alt="" data-pk="{{$pry_modulo->idesPR}}" id="logo{{$pry_modulo->idesPR}}"/>
                            <a class="btn-file-logo editar-logo nomostrar" data-toggle="modal" data-target="#editarlogo" data-width="300" data-height="100" data-pk="{{$pry_modulo->idesPR}}" data-pry="{{$pry_modulo->id_proyecto}}" style="padding-left: 11px"><i class="fa fa-pencil"></i></a>
                        </p>
                    @endif
                    
                    <?php
                        $idiomaspry = \App\Console\Commands\Funciones::getIdiomas($proyecto->id);
                        $cant_idiomas= count($idiomaspry);
                    ?>
                    @if($cant_idiomas > 1)
                        <div class="box-idiomas">
                        @foreach($idiomaspry as $lang)
                            @if($idioma==$lang->id)
                                <a href="javascript:;" class="idiomas idioma-selection active" data-id="{!! $lang->id !!}">
                            @else
                                <a href="javascript:;" class="idiomas idioma-selection" data-id="{!! $lang->id !!}">
                            @endif
                                    {!! $lang->siglas !!}
                                </a><BR>
                        @endforeach
                    </div>
                    @endif
                </div>
                <?php
                $i=0;
                $imagenesSlider = App\Console\Commands\Funciones::getSliderTextos($pry_modulo->idesPR, $idioma);
                $tam_slider= count($imagenesSlider);
                ?>

                    <div id="carousel_sanfer_header" class="carousel slide" data-ride="carousel">
                        @if($tam_slider!=0)
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            @foreach($imagenesSlider as $img)
                                @if($i==0)
                                    <div class="item active">
                                        <div class="contenido">
                                            <input type="hidden" class="holders" data-holder1="Texto" data-holder2="Texto2" data-holder3="Link">
                                            <img style="width: 100%;" src="{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}">
                                            <a class="titulo" href="{{$img->link}}">
                                                <span>{{$img->texto}}</span>
                                                @if($img->texto2!='')
                                                    <span class="parrafo">{{$img->texto2}}</span>
                                                @endif
                                            </a>

                                        </div>
                                    </div>
                                @else
                                    <div class="item">
                                        <div class="contenido">
                                            <img style="width: 100%;" src="{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}">
                                            <a class="titulo" href="{{$img->link}}">{{$img->texto}}
                                                @if($img->texto2!='')
                                                    <span class="parrafo">{{$img->texto2}}</span>
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                @endif
                                <?php $i=$i+1;?>
                            @endforeach

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control hidden-xs" href="#carousel_sanfer_header" role="button" data-slide="prev">
                            <img src="{!!url('img/flecha-izquierda.png')!!}"/>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control hidden-xs" href="#carousel_sanfer_header" role="button" data-slide="next">
                            <img src="{!!url('img/flecha-derecha.png')!!}"/>
                            <span class="sr-only">Next</span>
                        </a>
                        @endif
                    </div>

                <div class="menu-section">
                    <div class="cabecera col-md-12" id="cabecera" style="position:relative">
                        <div class="navbar-header nomostrar" id="navbar-cabecera">
                            <button id="navbaricono" class="navbar-toggle navbar-static-top collapsed efectox" type="button" data-toggle="collapse" data-target="#bs-navbar"
                                    aria-controls="bs-navbar" aria-expanded="false" style="z-index: 5">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar one"></span>
                                <span class="icon-bar two"></span>
                                <span class="icon-bar three"></span>
                            </button>
                            @if($pry_modulo->logo =='')
                                <p class="marca hidden-sm hidden-md hidden-lg" id="marca" style="padding-left: 20px">
                                    <span>{!!$pry_modulo->logo_texto!!}</span>
                                </p>
                            @else
                                <p class="marca imagenlogo hidden-sm hidden-md hidden-lg"  id="marca" style="height: auto; position: relative">
                                    <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" class="img-responsive logo" alt="" data-pk="{{$pry_modulo->idesPR}}" id="logo{{$pry_modulo->idesPR}}"/>
                                 </p>
                            @endif
                            @if($cant_idiomas > 1)
                            <div class="box-idiomas-xs hidden-sm hidden-md hidden-lg">
                                @foreach($idiomaspry as $lang)
                                    @if($idioma==$lang->id)
                                        <a href="javascript:;" class="idiomas idioma-selection active" data-id="{!! $lang->id !!}">
                                    @else
                                        <a href="javascript:;" class="idiomas idioma-selection" data-id="{!! $lang->id !!}">
                                    @endif
                                        {!! $lang->siglas !!}
                                        </a><BR>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <nav id="bs-navbar" class="collapse" aria-expanded="false" style="position:relative;height: 1px; z-index: 12;">
                            <ul class="nav navbar-nav navbar-right ultext" id="ulnav">
                                    <?php $menu_titulos = \App\Console\Commands\Funciones::getMenu($proyecto->id, $id_menu_url, $idioma);
                                    $tam_menu = count($menu_titulos); $i=1;
                                    $tam_url =count($urls); ?>

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
                                    <a class="ancla-contacto itemmenu hidden-sm hidden-md hidden-lg" href="#contactanos">{!!trans('messages.contact_us')!!}</a>
                                </li>
                            </ul>
                        </nav>
                        <a class="btn-contacto ancla-contacto itemmenu hidden-xs" href="#contactanos"><img src="{!!url('img/rayita-roja-small.png')!!}"/>{!!trans('messages.contact_us')!!}</a>
                    </div>

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

@if($editar==0)

    <script>
        $(window).scroll(function() {
            var offsetVar = $('.menu-section').offset();

            if ($(window).scrollTop()  > offsetVar.top)
            {
                $('.menu-section').addClass('menu-section-fixed');
                $('#marca').removeClass('hidden-sm');
                $('#marca').removeClass('hidden-md');
                $('#marca').removeClass('hidden-lg');
            }
            if ($(window).scrollTop()  < $('#container-modulo_sanfer_header').outerHeight(true))
            {
                $('.menu-section').removeClass('menu-section-fixed');
                $('#marca').addClass('hidden-sm');
                $('#marca').addClass('hidden-md');
                $('#marca').addClass('hidden-lg');
            }

        });
        $(document).on('click', '.ancla-contacto', function(){
            if ($(window).width()  > 767) {
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top - 190
                }, 1000);
                return false;
            }
            else{
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 1000);
                return false;
            }
        });

    </script>
    <script>
        $('.carousel-inner').bcSwipe({ threshold: 50 });
    </script>
@endif
<script>
    $(document).on('click', '.idioma-selection', function(){
       var id = $(this).attr('data-id');
        var data = {};
        data._token = '{!!csrf_token()!!}';
        data.idioma = id;
        data.id_proyecto = $('body').attr('data-idpry');

        $.ajax({
            type: "POST",
            url: "{!! url('/setidioma') !!}",
            data: data,
            success: function(data){
                location.reload();
            },
            error: function(){
                console.log('Error en la conexión');
            }
        });
    });
</script>





