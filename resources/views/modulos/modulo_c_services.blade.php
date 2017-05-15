<link href="<?php echo URL::asset('/css/modulo_c_services.css'); ?>" rel="stylesheet" type="text/css" />
<div id="container-modulo_c_services" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', 'quienessomos')}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>

        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('img/fondo-parallax1.jpg')!!}'); background-size: cover ">

            <div class="contenido col-md-8 col-sm-10 col-sm-offset-1 col-md-offset-2">
                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h1 class="editable"  data-type="text" data-pk="" data-name="titulo">Lorem sit a met</h1>
                </div>
                <br/>
                <div class="seccion-item col-xs-12">
                    <div class="subtitulo subtitulo-custom-color">
                        <span class="editable"  data-type="text" data-pk="" data-name="subtitulo">
                            Lorem ipsum dolor
                        </span>
                    </div>
                    <div class="col-sm-3 col-xs-6 box-item">
                        <div class="item">
                            <div class="item-hover">
                                <p class="item-descripcion">
                                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                </p>
                            </div>
                            <div class="item-hover-hide">
                                <img src="{!!url('img/icono1.png')!!}" alt="" class="img-responsive img-item">
                                <h3>Lorem Ipsum dolore sit</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 box-item">
                        <div class="item">
                            <div class="item-hover">
                                <p class="item-descripcion">
                                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.
                                </p>
                            </div>
                            <div class="item-hover-hide">
                                <img src="{!!url('img/icono2.png')!!}" alt="" class="img-responsive img-item">
                                <h3>Lorem Ipsum dolore sit</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 box-item">
                        <div class="item">
                            <div class="item-hover">
                                <p class="item-descripcion">
                                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                </p>
                            </div>
                            <div class="item-hover-hide">
                                <img src="{!!url('img/icono3.png')!!}" alt="" class="img-responsive img-item">
                                <h3>Lorem Ipsum dolore sit</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 box-item">
                        <div class="item">
                            <div class="item-hover">
                                <p class="item-descripcion">
                                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                </p>
                            </div>
                            <div class="item-hover-hide">
                                <img src="{!!url('img/icono4.png')!!}" alt="" class="img-responsive img-item">
                                <h3>Lorem Ipsum dolore sit</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="seccion-item col-xs-12">
                    <div class="subtitulo subtitulo-custom-color">
                        <span class="editable"  data-type="text" data-pk="" data-name="subtitulo">
                            Texto de relleno de las imprentas
                        </span>
                    </div>
                    <div class="col-sm-3 col-xs-6 box-item">
                        <div class="item">
                            <div class="item-hover">
                                <p class="item-descripcion">
                                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                </p>
                            </div>
                            <div class="item-hover-hide">
                                <img src="{!!url('img/icono1.png')!!}" alt="" class="img-responsive img-item">
                                <h3>Lorem Ipsum dolore sit</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 box-item">
                        <div class="item">
                            <div class="item-hover">
                                <p class="item-descripcion">
                                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.
                                </p>
                            </div>
                            <div class="item-hover-hide">
                                <img src="{!!url('img/icono2.png')!!}" alt="" class="img-responsive img-item">
                                <h3>Lorem Ipsum dolore sit</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 box-item">
                        <div class="item">
                            <div class="item-hover">
                                <p class="item-descripcion">
                                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                </p>
                            </div>
                            <div class="item-hover-hide">
                                <img src="{!!url('img/icono3.png')!!}" alt="" class="img-responsive img-item">
                                <h3>Lorem Ipsum dolore sit</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 box-item">
                        <div class="item">
                            <div class="item-hover">
                                <p class="item-descripcion">
                                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                                </p>
                            </div>
                            <div class="item-hover-hide">
                                <img src="{!!url('img/icono4.png')!!}" alt="" class="img-responsive img-item">
                                <h3>Lorem Ipsum dolore sit</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $("#container-modulo_c_services .item").hover(function(){
        $(this).find('.item-hover-hide').css("opacity", "0");
        $(this).find('.item-hover').css("opacity", "1");
    }, function(){
        $(this).find('.item-hover-hide').css("opacity", "1");
        $(this).find('.item-hover').css("opacity", "0");
    });
</script>