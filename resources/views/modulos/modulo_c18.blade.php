
<link href="<?php echo URL::asset('/css/modulo_c18.css'); ?>" rel="stylesheet" type="text/css" />
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
        #container{{$pry_modulo->idesPR}} .fondo-boton {
            background-color: {{$combinacion->color_boton}};
        }
    </style>
@endif
<style>
    #container-modulo_c18 .titulo{
        font-size: <?php echo 50+ $proyecto->font_size?>px;
    }
    #container-modulo_c18 .introduccion{
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    #container-modulo_c18 .parrafo,  #container-modulo_c18 .titulo-keywords, #container-modulo_c18 .keywords{
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }
    #container-modulo_c18 .subtitulo{
        font-size: <?php echo 12+ $proyecto->font_size?>px;
    }
    #container-modulo_c18 .linkareferencia{
        font-size: <?php echo 10+ $proyecto->font_size?>px;
    }

    @media (max-width: 1025px) and  (min-width: 768px){
        #container-modulo_c18 .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_c18 .parrafo{
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
        #container-modulo_c18 .subtitulo, #container-modulo_c18 .linkareferencia{
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
        #container-modulo_c18 .introduccion{
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) {
       #container-modulo_c18 .titulo{
           font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_c18 .parrafo{
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
        #container-modulo_c18 .subtitulo, #container-modulo_c18 .linkareferencia{
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c18" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div class="fila">
        @foreach($modulosDtll as $modulo)
            @if($cont==0)
                <div class="col-sm-6">
                    <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h6 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h6><br/><br/>
                    </div>
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                    </div>
                    <div class="introduccion comentario-custom-color">
                        <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                    </div>
                    <div class="botonlink">
                        @if($editar==0)
                             @if($modulo->es_url_externo==1)
                            <a class="linkareferencia fondo-boton" href="{{$modulo->url}}" target="_blank">{!!$modulo->url_texto!!}</a>
                            @elseif($modulo->es_url_externo==0)
                                <a class="ancla linkareferencia fondo-boton" href="#{{str_replace(' ', '', $modulo->url)}}">{!!$modulo->url_texto!!}</a>
                            @else
                                <a class="linkareferencia download fondo-boton" id="linkareferencia{{$modulo->id}}" href="{!!url('upload/'.$pry_modulo->id_proyecto.'/archivos/'.$modulo->url)!!}"  download="{{$modulo->titulo}}">{!!$modulo->url_texto!!}</a>
                            @endif
                        @else
                            <a class="linkareferencia edit-linkareferencia fondo-boton" id="linkareferencia{{$modulo->id}}" href="{{$modulo->url}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">{!!$modulo->url_texto!!}</a>
                        @endif
                    
                    </div>
                </div>
            @else
                <div class="col-sm-6 texto">
                    <div class="parrafo comentario-custom-color">
                        <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                    </div>
                    <div>
                        <span class="titulo-keywords subtitulo-custom-color">
                            <i class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</i>
                        </span>
                        <span class="keywords comentario-custom-color">
                            <i class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</i>
                        </span>
                    </div>
                </div>
            @endif
            <?php $cont = $cont+1; ?>
        @endforeach
        </div>
    </div>
</div>