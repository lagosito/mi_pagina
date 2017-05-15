<link href="<?php echo URL::asset('/css/modulo_c_partners.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
            color: {{$combinacion->subtitulo}};
        }
        #container{{$pry_modulo->idesPR}} .fondo-boton {
            color: {{$combinacion->color_boton}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif
<div id="container-modulo_c_partners" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div id="imagenfondo" style="float: left; width: 100%; background-image:url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="contenido">
                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h1 class="editable"  data-type="text" data-pk="{{$modulosDtll[0]->id}}" data-name="titulo">{{$modulosDtll[0]->titulo}}</h1>
                </div>
            </div>

            <br/>
            <?php
            $i=0;
            $imagenesSlider = App\Console\Commands\Funciones::getSliderTextos($pry_modulo->idesPR, $idioma);
            ?>
            <div id="carousel{{$pry_modulo->idesPR}}" class="carousel slide col-md-8 col-xs-10 col-xs-offset-1 col-md-offset-2" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                <input type="hidden" class="holders" data-holder1="Texto" data-holder2="Texto2" data-holder3="Link">
                    @foreach($imagenesSlider as $img)
                        @if($i==0)
                            <div class="item active">
                                <div class="col-sm-12 partner">                                    
                                    <div class="col-xs-3">
                                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}" alt="" class="img-responsive img-partner">
                                    </div>
                                    <div class="col-xs-9">
                                        <h3 class="titulo-item subtitulo-custom-color">{{$img->texto}}</h3>
                                        <p class="parrafo-item comentario-custom-color">{{$img->texto2}}</p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="item">
                                <div class="col-sm-12 partner">
                                    <div class="col-xs-3">
                                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}" alt="" class="img-responsive img-partner">
                                    </div>
                                    <div class="col-xs-9">
                                        <h3 class="titulo-item subtitulo-custom-color">{{$img->texto}}</h3>
                                        <p class="parrafo-item comentario-custom-color">{{$img->texto2}}</p>
                                    </div>
                                </div>

                            </div>
                        @endif
                        <?php $i=$i+1;?>
                    @endforeach

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#carousel{{$pry_modulo->idesPR}}" role="button" data-slide="prev">
                    <span class="fa fa-angle-left flecha fondo-boton"></span>
                    <span class="sr-only fondo-boton">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel{{$pry_modulo->idesPR}}" role="button" data-slide="next">
                    <span class="fa fa-angle-right flecha fondo-boton"></span>
                    <span class="sr-only fondo-boton">Next</span>
                </a>
            </div>
        </div>
    </div>

</div>