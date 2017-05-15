
<link href="<?php echo URL::asset('/css/modulo_c_postula.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color, #container{{$pry_modulo->idesPR}} .linkareferencia {
            color: {{$combinacion->comentario}};
        }
        #container{{$pry_modulo->idesPR}} .fondo-boton {
            background-color: {{$combinacion->color_boton}};
        }
    </style>
@endif
<style>
    #container-modulo_c_postula .titulo{
        font-size: <?php echo 26+ $proyecto->font_size?>px;
    }
    #container-modulo_c_postula .parrafo, #container-modulo_c_postula .linkareferencia{
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    @media (max-width: 1025px){
        #container-modulo_c_postula .titulo{
            font-size: <?php echo 24+ $proyecto->font_size?>px;
        }
        #container-modulo_c_postula .parrafo, #container-modulo_c_postula .linkareferencia{
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c_postula" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>

        @foreach($modulosDtll as $modulo)
            <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
                <div class="fila col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="col-md-6 contenido">
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
                        </div>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                        <div class="botonlink">
                            @if($modulo->es_url_externo==1)
                                <a class="linkareferencia edit-linkareferencia fondo-boton" id="linkareferencia{{$modulo->id}}" href="{{$modulo->url}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="video" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">{!!$modulo->url_texto!!}</a>
                            @else
                                <a class="ancla linkareferencia edit-linkareferencia fondo-boton" id="linkareferencia{{$modulo->id}}" href="#{{str_replace(' ', '', $modulo->url)}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="video" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">{!!$modulo->url_texto!!}</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 imagen">
                        <img class="img-responsive img-original" src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" id="img-modulo{{$modulo->id}}" data-pk="{{$modulo->id}}"/>
                        <a class="editar-imagen nomostrar" data-toggle="modal" data-target="#editarimagen" data-width="450" data-height="374" data-pk="{{$modulo->id}}" data-pry="{{$pry_modulo->id_proyecto}}"><i class="fa fa-pencil"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
