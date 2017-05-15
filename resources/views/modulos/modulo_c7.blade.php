
<link href="<?php echo URL::asset('/css/modulo_c7.css'); ?>" rel="stylesheet" type="text/css" />
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
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif
<style>
    #container-modulo_c7 .titulo{
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo_c7 .parrafo{
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    #container-modulo_c7 .subtitulo{
        font-size: <?php echo 14+ $proyecto->font_size?>px;
    }
    @media (max-width: 1025px) and  (min-width: 768px){
        #container-modulo_c7 .titulo{
            font-size: <?php echo 50+ $proyecto->font_size?>px;
        }
        #container-modulo_c7 .parrafo{
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }
        #container-modulo_c7 .subtitulo{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }

    }
    @media (max-width: 767px) and (min-width: 501px){
        #container-modulo_c7 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_c7 .subtitulo{
            font-size: <?php echo 11+ $proyecto->font_size?>px;
        }
        #container-modulo_c7 .parrafo{
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 500px){
        #container-modulo_c7 .titulo{
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
        #container-modulo_c7 .subtitulo{
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
        #container-modulo_c7 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c7" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div class="row fila">
            <div class="col-sm-12 contenido">
        @foreach($modulosDtll as $modulo)
            @if($cont == 0 )
                <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h6 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h6><br/><br/>
                </div>
                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                </div>
                <div class="col-sm-6 parrafo comentario-custom-color">
                    <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                </div>
           @else
                <div class="col-sm-6 parrafo comentario-custom-color">
                    <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                </div>
            @endif
                <?php $cont++; ?>
        @endforeach
            </div>
        </div>
    </div>

</div>