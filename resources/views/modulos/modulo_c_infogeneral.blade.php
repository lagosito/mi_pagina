<link href="<?php echo URL::asset('/css/modulo_c_infogeneral.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }

        #container{{$pry_modulo->idesPR}} .fondo-boton {
            background-color: {{$combinacion->color_boton}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif
<div id="container-modulo_c_infogeneral" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        $imagenesSlider = App\Console\Commands\Funciones::getImagenesSlider($pry_modulo->idesPR);
        ?>
        <div id="imagenfondo" style="float: left; width: 100%; background-image:url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="contenido col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h1 class="editable"  data-type="text" data-pk="{{$modulosDtll[0]->id}}" data-name="titulo">{{$modulosDtll[0]->titulo}}</h1>
                </div>
                <br/>
                <div class="col-sm-12 textos" style="padding: 0; margin-bottom: 30px">
                    <div class="col-md-6">
                        <div id="texto1" data-pk="{{$modulosDtll[0]->id}}" data-name="comentario" data-type="wysihtml5" data-original-title="Editar texto" class="editable editable-wysihtml5" tabindex="-1" style="background-color: rgba(0, 0, 0, 0);">
                            {!! $modulosDtll[0]->comentario !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="texto2" data-pk="{{$modulosDtll[1]->id}}" data-name="comentario" data-type="wysihtml5" data-original-title="Editar texto" class="editable editable-wysihtml5" tabindex="-1" style="background-color: rgba(0, 0, 0, 0);">
                            {!! $modulosDtll[1]->comentario !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 download-file" align="center">
                    <?php $modulo = $modulosDtll[0];?>
                     @if($editar==0)
                        @if($modulo->es_url_externo==1)
                            <a class="linkareferencia btn-download-file fondo-boton" href="{{$modulo->url}}" target="_blank">{!!$modulo->url_texto!!}</a>
                        @elseif($modulo->es_url_externo==0)
                            <a class="ancla linkareferencia btn-download-file fondo-boton" href="#{{str_replace(' ', '', $modulo->url)}}">{!!$modulo->url_texto!!}</a>
                        @else
                            <a class="linkareferencia btn-download-file download fondo-boton" id="linkareferencia{{$modulo->id}}" href="{!!url('upload/'.$pry_modulo->id_proyecto.'/archivos/'.$modulo->url)!!}"  download="{{$modulo->titulo}}">{!!$modulo->url_texto!!}</a>
                        @endif
                    @else
                        <a class="linkareferencia btn-download-file edit-linkareferencia fondo-boton" id="linkareferencia{{$modulo->id}}" href="{{$modulo->url}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">{!!$modulo->url_texto!!}</a>
                    @endif
                   
                </div>
            </div>
        </div>
    </div>

</div>
