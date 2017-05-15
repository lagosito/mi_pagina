
<link href="<?php echo URL::asset('/css/modulo_c17.css'); ?>" rel="stylesheet" type="text/css" />
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
            height: 12%;
        }
    }
    </style>
@endif
<style>
    #container-modulo_c17 .titulo{
        font-size: <?php echo 36+ $proyecto->font_size?>px;
    }
    #container-modulo_c17 .parrafo{
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    #container-modulo_c17 .subtitulo{
        font-size: <?php echo 12+ $proyecto->font_size?>px;
    }
    @media (max-width: 1025px){
        #container-modulo_c17 .titulo{
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
        #container-modulo_c17 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_c17 .subtitulo{
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c17" class="wrapper">
    <div  class="container" style="width: 100%; padding: 0" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        $i=0;
        $imagenesSlider = App\Console\Commands\Funciones::getImagenesSlider($pry_modulo->idesPR);
        $cant_img_slider = count($imagenesSlider);
        ?>
        <div class="row fila">
            <div class="col-sm-6 slider slider-tam" data-recomendacion="*Tamaño recomendado: 600x570 pixeles.">
                <div id="slide_md_c17{{$pry_modulo->idesPR}}" class="carousel slide" data-ride="carousel" >
                    <!-- Indicators -->
                    @if($cant_img_slider > 1)
                    <ol class="carousel-indicators">
                        @foreach($imagenesSlider as $img)
                            @if($i==0)
                                <li data-target="#slide_md_c17{{$pry_modulo->idesPR}}" data-slide-to="{{$i}}" class="active"></li>
                            @else
                                <li data-target="#slide_md_c17{{$pry_modulo->idesPR}}" data-slide-to="{{$i}}"></li>
                            @endif
                            <?php $i=$i+1;?>
                        @endforeach
                        <?php $i=0?>
                    </ol>
                    @endif

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
        @foreach($modulosDtll as $modulo)
                <div class="col-sm-6 contenido">
                    <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h6 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h6><br/><br/>
                    </div>
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                    </div>
                    <div class="col-xs-12">
                        <div class="parrafo comentario-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                    </div>
                @if($modulo->imagen!='')
                    <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" id="img-modulo{{$modulo->id}}" class="img-responsive img-original img-static" alt="" data-pk="{{$modulo->id}}"  data-pry="{{$proyecto->id}}" style="width: 100%; padding-top: 5%;">
                    <div class="edit-img-sincrop nomostrar">
                        <span class="btn btn-primary btn-remove-imagen-modulo" id="btn-remove-imagen-modulo{{$modulo->id}}" data-id = "{{$modulo->id}}" data-pry="{{$proyecto->id}}">
                            <span class="fa fa-remove"></span>
                        </span>
                        <span class="btn-file-imagen">
                            <span class="fa fa-pencil"></span> <input type="file" id="file" class="file-imagen" name="file" data-id = {{$modulo->id}}>
                        </span>
                    </div>
                @else
                    <img src="" id="img-modulo{{$modulo->id}}" class="img-responsive img-original nomostrar img-static" alt="" data-pk="{{$modulo->id}}" data-pry="{{$proyecto->id}}" style="width: 100%; padding-top: 5%;">
                    <div class="edit-img-sincrop nomostrar">
                        <span class="btn btn-primary btn-remove-imagen-modulo nomostrar" id="btn-remove-imagen-modulo{{$modulo->id}}" data-id = "{{$modulo->id}}" data-pry="{{$proyecto->id}}">
                            <span class="fa fa-remove"></span>
                        </span>
                        <span class="btn-file-imagen">
                            <span class="fa fa-pencil"></span> <input type="file" id="file" class="file-imagen" name="file" data-id = {{$modulo->id}}>
                        </span>
                    </div>
                @endif
                </div>
            </div>
        @endforeach
    </div>
</div>