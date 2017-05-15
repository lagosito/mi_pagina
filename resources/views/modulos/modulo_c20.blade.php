
<link href="<?php echo URL::asset('/css/modulo_c20.css'); ?>" rel="stylesheet" type="text/css" />
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
<style>
    #container-modulo_c20 .titulo{
        font-size: <?php echo 50+ $proyecto->font_size?>px;
    }
    #container-modulo_c20 .slider p > span{
        font-size: <?php echo 14+ $proyecto->font_size?>px;
    }
    #container-modulo_c20 .slider h1 > span {
        font-size: <?php echo 36+ $proyecto->font_size?>px;
    }
    #container-modulo_c20 .slider h2 > span {
        font-size: <?php echo 30+ $proyecto->font_size?>px;
    }
    #container-modulo_c20 .slider h3 > span {
        font-size: <?php echo 24+ $proyecto->font_size?>px;
    }
    #container-modulo_c20 .slider h4 > span {
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    #container-modulo_c20 .slider h5 > span {
        font-size: <?php echo 14+ $proyecto->font_size?>px;
    }
    #container-modulo_c20 .slider h6 > span {
        font-size: <?php echo 12+ $proyecto->font_size?>px;
    }

    @media (max-width: 1025px) and  (min-width: 768px){
        #container-modulo_c20 .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) {
        #container-modulo_c20 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c20" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        $i=0;
        $slider = App\Console\Commands\Funciones::getSliderTextos($pry_modulo->idesPR, $idioma);
        ?>
        <div class="fila">
            @foreach($modulosDtll as $modulo)
                <div class="col-sm-4 col-sm-offset-1 col-xs-offset-1 col-xs-10">
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                    </div>
                </div>
            @endforeach
                <div class="col-sm-5 col-sm-offset-1 col-xs-offset-1 col-xs-10 slider" >
                    <div id="slide_md_c20{{$pry_modulo->idesPR}}" class="carousel slide vertical" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            @foreach($slider as $item)
                                @if($i==0)
                                    <li data-target="#slide_md_c20{{$pry_modulo->idesPR}}" data-slide-to="{{$i}}" class="active"></li>
                                @else
                                    <li data-target="#slide_md_c20{{$pry_modulo->idesPR}}" data-slide-to="{{$i}}"></li>
                                @endif
                                <?php $i=$i+1;?>
                            @endforeach
                            <?php $i=0?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            @foreach($slider as $item)
                                @if($i==0)
                                    <div class="item active">
                                        <div class="contenido-slider">
                                            <?php echo $item->texto ?>
                                        </div>
                                    </div>
                                @else
                                    <div class="item">
                                        <div class="contenido-slider">
                                            <?php echo $item->texto ?>
                                        </div>
                                    </div>
                                @endif
                                <?php $i=$i+1;?>
                            @endforeach
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>

