<link href="<?php echo URL::asset('/css/modulo_c_whoweare.css'); ?>" rel="stylesheet" type="text/css" />


<div id="container-modulo_c_whoweare" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', 'quienessomos')}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        $modulo = $modulosDtll[0];
        ?>
        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="contenido col-md-6 col-md-offset-3">

                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{{$modulo->titulo}}</h1>
                </div>
                <br/>
                <div class="parrafo comentario-custom-color">
                    <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">
                        {{$modulo->comentario}}
                    </p>
                </div>
                <div id="tabcat">
                    <div class="col-xs-6 item" id="div_itemgaleria" data-id="" data-tab="">
                        <div class="imagen-box">
                            <img src="{!!url('img/equipo-perfil.jpg')!!}" alt="" class="img-responsive img-item">
                            <a href="" class="btn-download-pdf download" download="">
                                <img src="{!!url('img/descargar.png')!!}" alt="" class="img-responsive img-descargar">
                            </a>
                        </div>
                        <h3>Lorem Ipsum</h3>
                    </div>
                    <div class="col-xs-6 item" id="div_itemgaleria" data-id="" data-tab="">
                        <div class="imagen-box">
                            <img src="{!!url('img/equipo-perfil.jpg')!!}" alt="" class="img-responsive img-item">
                            <a href="" class="btn-download-pdf download" download="">
                                <img src="{!!url('img/descargar.png')!!}" alt="" class="img-responsive img-descargar">
                            </a>
                        </div>
                        <h3>Lorem Ipsum</h3>
                    </div>
                    <div class="col-xs-6 item hidden clonar-item" id="div_itemgaleria" data-id="" data-tab="" data-contenedor="">
                        <div class="imagen-box">
                            <img src="{!!url('img/equipo-perfil.jpg')!!}" alt="" class="img-responsive img-item">
                            <a href="" class="btn-download-pdf download" download="">
                                <img src="{!!url('img/descargar.png')!!}" alt="" class="img-responsive img-descargar">
                            </a>
                        </div>
                        <h3>Lorem Ipsum</h3>
                    </div>
                </div>

                <div class="imagen">
                    <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" alt="" class="img-responsive parallax" data-parallax='{"x": 500, "distance": 0}' data-parallax2='{"y": -60, "distance": 0}' id="img-modulo{{$modulosDtll[0]->id}}" data-pk="{{$modulosDtll[0]->id}}"/>
                     <a class="editar-imagen nomostrar" data-toggle="modal" data-target="#editarimagen" data-width="300" data-height="300" data-pk="{{$modulosDtll[0]->id}}" data-pry="{{$pry_modulo->id_proyecto}}" style="z-index: 15; bottom: 150px"><i class="fa fa-pencil"></i></a>
                 </div>
            </div>
        </div>
    </div>

</div>
