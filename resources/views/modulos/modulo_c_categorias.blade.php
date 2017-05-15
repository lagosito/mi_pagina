<link href="<?php echo URL::asset('/css/modulo_c_categorias.css'); ?>" rel="stylesheet" type="text/css" />
<div id="container-modulo_c_categorias" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', 'quienessomos')}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div id="imagenfondo" style="float: left; width: 100%; background-image: none; background-size: cover ">
            <div class="contenido col-md-8 col-sm-10 col-sm-offset-1 col-md-offset-2">
                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h1 class="editable"  data-type="text" data-pk="" data-name="titulo">Lorem ipsum</h1>
                </div>
                <br/>
                <div class="col-sm-3 col-xs-6 item" align="center">
                    <img src="{!!url('img/portafolio1.jpg')!!}" alt="" class="img-responsive img-item">
                    <div class="item-nombre">
                        <h3>Dolore</h3>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 item" align="center">
                    <img src="{!!url('img/portafolio2.jpg')!!}" alt="" class="img-responsive img-item">
                    <div class="item-nombre">
                        <h3>Amet</h3>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 item" align="center">
                    <img src="{!!url('img/portafolio3.jpg')!!}" alt="" class="img-responsive img-item">
                    <div class="item-nombre">
                        <h3>Lorem</h3>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 item" align="center">
                    <img src="{!!url('img/portafolio4.jpg')!!}" alt="" class="img-responsive img-item">
                    <div class="item-nombre">
                        <h3>Ipsum</h3>
                    </div>
                </div>
                <img src="{!!url('img/flotante4.png')!!}" alt="" class="img-responsive parallax" data-parallax='{"x": -500, "distance": 0}' data-parallax2='{"y": -60, "distance": 0}'>
            </div>
        </div>
    </div>

</div>