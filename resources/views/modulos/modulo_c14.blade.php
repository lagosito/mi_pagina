
<link href="<?php echo URL::asset('/css/modulo_c14.css'); ?>" rel="stylesheet" type="text/css" />
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
        @media (min-width: 768px) {
            #container{{$pry_modulo->idesPR}} .parrafo:after {
                content: '';
                background-image: -webkit-linear-gradient(top, rgba(231, 231, 226, 0) 0%, {{$combinacion->fondo}} 100%);
                background-image: -o-linear-gradient(top, rgba(231, 231, 226, 0) 0%, {{$combinacion->fondo}} 100%); /* For Opera 11.1 to 12.0 */
                background-image: -moz-linear-gradient(top, rgba(231, 231, 226, 0) 0%, {{$combinacion->fondo}} 100%); /* For Firefox 3.6 to 15 */
                background-image: linear-gradient(top, rgba(231, 231, 226, 0) 0%, {{$combinacion->fondo}} 100%); /* Standard syntax */
                display: block;
                position: absolute;
                pointer-events: none;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 70px;
            }
        }
    </style>
@endif
<style>
    #container-modulo_c14 .titulo{
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo_c14 .parrafo{
        font-size: <?php echo 17+ $proyecto->font_size?>px;
    }
    #container-modulo_c14 .subtitulo,  #container-modulo_c14 .linkareferencia{
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }
    @media (max-width: 1025px){
        #container-modulo_c14 .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_c14 .parrafo{
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
        #container-modulo_c14 .subtitulo, #container-modulo_c14 .linkareferencia{
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c14" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        $i=0;
        $imagenesSlider = App\Console\Commands\Funciones::getImagenesSlider($pry_modulo->idesPR);
        ?>

        @foreach($modulosDtll as $modulo)
            <div class="fila">
                <div class="col-sm-6 slider slider-tam" data-recomendacion="*Tamaño recomendado: 700x937 pixeles.">
                    <div id="slide_md_c14{{$pry_modulo->idesPR}}" class="carousel slide vertical" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            @foreach($imagenesSlider as $img)
                                @if($i==0)
                                    <li data-target="#slide_md_c14{{$pry_modulo->idesPR}}" data-slide-to="{{$i}}" class="active"></li>
                                @else
                                    <li data-target="#slide_md_c14{{$pry_modulo->idesPR}}" data-slide-to="{{$i}}"></li>
                                @endif
                                <?php $i=$i+1;?>
                            @endforeach
                            <?php $i=0?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            @foreach($imagenesSlider as $img)
                                @if($i==0)
                                    <div class="item active">
                                        <img class="imagenSlider" src="{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}" alt="" >
                                    </div>
                                @else
                                    <div class="item">
                                        <img class="imagenSlider" src="{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}" alt="">
                                    </div>
                                @endif
                                <?php $i=$i+1;?>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contenido">
                    <div class="subtitulo subtitulo-custom-color col-xs-12 {{$proyecto->tipografia_titulos}}" style="padding: 0">
                        <h6 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h6><br/><br/>
                    </div>
                    <div class="titulo titulo-custom-color col-xs-12 {{$proyecto->tipografia_titulos}}" style="padding: 0">
                        <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                    </div>
                    <div class="col-xs-12" style="padding: 0">
                        <div class="parrafo comentario-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                    </div>
                    <div class="botonlink col-xs-12" style="padding: 0">
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
            </div>
        @endforeach
    </div>
</div>
