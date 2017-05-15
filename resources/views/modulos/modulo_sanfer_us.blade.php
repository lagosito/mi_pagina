<link href="<?php echo URL::asset('/css/modulo_sanfer_us.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
        #container{{$pry_modulo->idesPR}} .linkareferencia {
            border-color: {{$combinacion->color_boton}} ;
            background-color: {{$combinacion->color_boton}} ;
        }
    </style>
@endif
<style>
    #container-modulo_sanfer_us .titulo {
         font-size: <?php echo 26+ $proyecto->font_size?>px;
     }
    #container-modulo_sanfer_us .parrafo {
        font-size: <?php echo 14+ $proyecto->font_size?>px;
    }
    @media (max-width: 400px) and (min-width: 271px){
        #container-modulo_sanfer_us .titulo {
            font-size: <?php echo 18+ $proyecto->font_size?>px;
        }
        #container-modulo_sanfer_us .parrafo {
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 270px){
        #container-modulo_sanfer_us .titulo {
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_sanfer_us .parrafo {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_sanfer_us" class="wrapper">
    <div  class="container" style="width: 100%; padding: 0" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div id="imagenfondo" style="float: right; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="fila">
                <div class="col-sm-8 col-sm-offset-2 contenido">
                    @foreach($modulosDtll as $modulo)
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h1 class="editable" data-pk="{{$modulo->id}}"  data-type="text"  data-name="titulo">
                                <img src="{!!url('img/rayita-roja.png')!!}"/>{{$modulo->titulo}}</h1>
                        </div>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable" data-pk="{{$modulo->id}}" data-type="textarea"  data-name="comentario">
                                {{$modulo->comentario}}
                            </p>
                        </div>
                        @if($editar==1 or $modulo->url_texto!='')
                            <div class="col-sm-12 btn-mas" align="center">
                                @if($modulo->es_url_externo==1)
                                    <a class="btn-ver-mas linkareferencia edit-linkareferencia borde-boton fondo-boton" id="linkareferencia{{$modulo->id}}" href="{{$modulo->url}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">
                                        <img src="{!!url('img/rayita-roja-small.png')!!}"/>{!!$modulo->url_texto!!}
                                    </a>
                                @else
                                    <a class="btn-ver-mas ancla linkareferencia edit-linkareferencia borde-boton fondo-boton" id="linkareferencia{{$modulo->id}}" href="#{{str_replace(' ', '', $modulo->url)}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">
                                        <img src="{!!url('img/rayita-roja-small.png')!!}"/>{!!$modulo->url_texto!!}
                                    </a>
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>