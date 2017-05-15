<link href="<?php echo URL::asset('/css/modulo_c_logros.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
    </style>
@endif

<div id="container-modulo_c_logros">
    <a name="logros" id="logros"></a>
    <?php
    $cont = 0;
    $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
    $i=0;
    $imagenesSlider = App\Console\Commands\Funciones::getImagenesSlider($pry_modulo->idesPR);
    $cant_img_slider = count($imagenesSlider);
    ?>
    <div class="container" id="container{{$pry_modulo->idesPR}}">
        <div class="contenido">
            <div class="col-md-12 ">
                <!--img class="imagen" src="{!!url('img/imagescasitas/logo-circulo-100px.png')!!}" class="img-responsive" alt=""-->
            </div>
            <div class="col-md-12">
                @foreach($modulosDtll as $modulo)
                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{{$modulo->titulo}}</h1>
                    <br><br>
                </div>
                @endforeach
            </div>
            @foreach($imagenesSlider as $img)
            <div class="col-md-3 col-sm-6 col-xs-12" align="center">
                <img class="imagenl img-responsive" src="{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}" alt="">
                <a class="edit-img-logros editar-slider nomostrar" data-toggle="modal" data-target="#editSlider" href="javascript:;" data-id="{{$pry_modulo->idesPR}}" data-pry="{{$proyecto->id}}">
                    <i class="fa fa-pencil"></i>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>