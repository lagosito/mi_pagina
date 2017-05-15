<link href="<?php echo URL::asset('/css/modulo_c_categorias3.css'); ?>" rel="stylesheet" type="text/css" />
<link href="http://localhost/mipagina/public/css/youtubeiframe/youtube-iframe-responsive.css" rel="stylesheet" type="text/css" />
<div id="container-modulo_c_categorias3" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', 'quienessomos')}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div id="imagenfondo" style="float: left; width: 100%; background-image: none; background-size: cover ">
            <div class="contenido col-md-8 col-sm-10 col-sm-offset-1 col-md-offset-2">  
                <div class="col-sm-2 col-xs-6">
                    <h3 class="subtitulo">FUTBOL</h3>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item" data-toggle="modal" data-target="#Modal">
                        <p class="name">Name 1</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 2</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 3</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 4</p>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <h3 class="subtitulo">SURF</h3>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 1</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 2</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 3</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 4</p>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <h3 class="subtitulo">VOLEY</h3>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 1</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 2</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 3</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 4</p>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <h3 class="subtitulo">TENNIS</h3>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 1</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 2</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 3</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 4</p>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <h3 class="subtitulo">SURF</h3>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 1</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 2</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 3</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 4</p>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <h3 class="subtitulo">VOLEY</h3>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 1</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 2</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 3</p>
                    </div>
                    <div class="col-sm-3 col-xs-7 item" align="center">
                        <img src="{!!url('img/imgdepor4.jpg')!!}" alt="" class="img-responsive img-item">
                        <p class="name">Name 4</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal-->
    <div class="modal" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="fondo">
                <div class="modal-content fondo-principal">
                    <div class="modal-header fondo-superior">

                        <div padding="10px">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                        </div>
                            <div>
                                <p class="mod-titulo">PALOMA</p>
                                <p class="mod-subtitulo">SCHMIDT</p>
                            </div> 
                        <div>
                            <ul>
                                <li class="li-titulo">Trayecotoria Clubes</li> 
                                <li class="li-vi">Alianza Lima - 2009-2011</li>
                                <li class="li-vi">Sporting Lisboa / 2011-2016</li>
                                <li class="li-vi">Benfica - 2016 - actualidad</li>
                            </ul>

                            <ul>
                                <li class="li-titulo">Sponsors o campañas</li> 
                                <li class="li-vi">Lavaggi 2016-2017</li>
                            </ul>

                            <ul>
                                <li class="li-titulo">Logros deportivo</li> 
                                <li class="li-vi">Jugador revelacion Campeonato</li>
                                <li class="li-vi">Descentralizado 2010</li>
                                <li class="li-vi">Sp. Lisboa - Copa Portugal 2014</li>
                                <li class="li-vi">Sp. Lisboa - Copa Portugal 2015</li>
                            </ul>
                            <ul>
                                <li class="li-titulo">Trayectoria Seleccion</li> 
                                <li class="li-vi">Copa America 2011</li>
                                <li class="li-vi">Clasificatoria Mundial Brasil 2014</li>
                                <li class="li-vi">Copa America 2015</li>
                                <li class="li-vi">Clasificatoria Mundial Rusia 2018</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-body fondo-inferior"></div>  
                </div>
            </div>
        </div>
    </div>
</div>