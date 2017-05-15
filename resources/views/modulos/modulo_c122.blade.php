<link href="<?php echo URL::asset('/css/modulo_c122.css'); ?>" rel="stylesheet" type="text/css" />
<div id="container-modulo_c122" class="wrapper">
    <div  class="container" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $i=0;
        $imagenesSlider = App\Console\Commands\Funciones::getImagenesSlider($pry_modulo->idesPR);
        ?>
        <div class="fila">
            <div class="contenido">
                <div id="slide_md_c122" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach($imagenesSlider as $img)
                            @if($i==0)
                                <li data-target="#slide_md_c122" data-slide-to="{{$i}}" class="active"></li>
                            @else
                                <li data-target="#slide_md_c122" data-slide-to="{{$i}}"></li>
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
        </div>
    </div>

</div>