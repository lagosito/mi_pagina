
<link href="<?php echo URL::asset('/css/introrayojesuitas.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif

<div id="container-introrayojesuitas" class="wrapper">
    <div  class="container" style="width: 100%; padding: 0" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>

        <div class="row fila">
            <div class="col-sm-6 slider slider-tam" data-recomendacion="*Tama�o recomendado: 600x570 pixeles.">
                <div id="slide_introrayojesuitas{{$pry_modulo->idesPR}}" class="carousel slide" data-ride="carousel" >
                                <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="imagenSlider" src="{!!url('img/logo-rayo-grande.png')!!}" alt="" >
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-sm-6 contenido">

                    <div class="col-xs-12">
                        <div class="parrafo comentario-custom-color">
                            <p>
                                <br>
                                Los jesuitas <span class="negrita">cambiaron tu vida</span> cuando estabas en el colegio. ¡Hoy puedes retribuir todo lo que hicieron por ti <span class="negrita">sumándote al Rayo Jesuita!</span>
                                <br><br>
                                <span class="negrita">Apoyando</span> este movimiento haces que proyectos como <span class="resaltado" style="position: relative">Casitas &nbsp;&nbsp;&nbsp;&nbsp; <img src="{!!url('img/imagescasitas/casita-morada.png')!!}" style="position: absolute; right: 0; top: -2px"></span> cambien la vida de muchos <span class="negrita">niños en todo el Perú.</span>
                                <br><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12" align="center">
                        <br>
                        <img src="{!!url('img/imagescasitas/rayo-rojo.png')!!}" style="padding: 10px;width: 40px;">
                    </div>
                </div>
        </div>
    </div>
</div>