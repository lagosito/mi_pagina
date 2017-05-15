<link href="<?php echo URL::asset('/css/modulo_c_rayos.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        @media (max-width: 768px) {
            #container{{$pry_modulo->idesPR}} .img-rayos{
                display: none;
            }
            #container{{$pry_modulo->idesPR}} .img-rayos-movil{
                display: block;
            }
        }
        @media (min-width: 769px) {
            #container{{$pry_modulo->idesPR}} .img-rayos{
                display: block;
            }
            #container{{$pry_modulo->idesPR}} .img-rayos-movil{
                display: none;
            }
        }
    </style>
@endif
<style>
    #container-modulo_c_rayos .titulo{
        font-size: <?php echo 35+ $proyecto->font_size?>px;
    }
</style>
<div id="container-modulo_c_rayos" >
    <div class="container fondo" id="container{{$pry_modulo->idesPR}}">
    <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
    ?>
    @foreach($modulosDtll as $modulo)
        <div class="col-md-12 titulo {{$proyecto->tipografia_titulos}}">
            <p class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{{$modulo->titulo}}</p>
        </div>
        <div class="col-md-6 textos">
            <img class="img-check-rayo" src="{!!url('img/imagescasitas/share-rayo.png')!!}" alt="">
            <span class="subtitulo-item">Comparte el movimiento</span>
            <br>
            <hr class="linea">
        </div>
        <div class="col-md-12 frases">
            <span class="texto-light">¡Que no le ganen a tu promo!</span>
            <span class="texto-bold">¡Comparte el movimiento y etiqueta a tu promo!</span>
        </div>
        <div class="col-md-12 margen"  align="center">
             <img class="img-rayos img-responsive" src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" alt="">
             <img class="img-rayos-movil img-responsive" src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen_movil)!!}" alt="">
             <a class="editar-imagen-rayos nomostrar" data-toggle="modal" data-target="#editarimagenrayos" data-pk="{{$modulo->id}}" data-pry="{{$pry_modulo->id_proyecto}}" data-img="{{$modulo->imagen}}" data-img-movil="{{$modulo->imagen_movil}}"><i class="fa fa-pencil"></i></a>
        </div>
    @endforeach
    </div>
</div>