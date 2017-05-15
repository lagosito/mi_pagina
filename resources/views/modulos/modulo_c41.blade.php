<link href="<?php echo url::asset('/css/modulo_c41.css'); ?>" rel="stylesheet" type="text/css" />
<div id="container-modulo_c41" class="wrapper outer" style="background-color: blue; height: 500px">
    <div class="container" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
    </div>
    <?php
    $cont = 0;
    $tabs = App\Console\Commands\Funciones::getGaleriatabs($pry_modulo->idesPR, $idioma); ?>
    <div>
        <div class="tab-content">
            <?php $cont=0; ?>
            @foreach($tabs as $tab)
                <div id="tabcat{{$tab->id}}" class="">
                    <?php $galeriaItems = App\Console\Commands\Funciones::getGaleriaItems($tab->id, $idioma); ?>
                    <div class="row items-galeria{{$tab->id}}" style="margin-bottom: 20px">
                        <div id="slide_md_c41" class="carousel carousel-showmanymoveone slide" >
                            <!-- Indicators -->
                            <ol class="carousel-indicators" id="carousel-indicators-c41">
                                <?php $i=0; $num=0 ?>
                                @foreach($galeriaItems as $item)
                                    @if($i==0)
                                        <li data-target="#slide_md_c41" data-slide-to="{{$num}}" class="active"></li>
                                        <?php $num++;?>
                                    @elseif($i==3)
                                        <li data-target="#slide_md_c41" data-slide-to="{{$num}}"></li>
                                        <?php $num++;?>
                                    @endif
                                    <?php $i=$i+1;?>
                                @endforeach
                                <?php $i=0?>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" id="carousel-inner-c41">
                                <?php $i=0;?>
                                @foreach($galeriaItems as $item)
                                    @if($i==0)
                                        <div class="item active">
                                            <div class="col-sm-6" id="div_itemgaleria{{$item->id}}" style="padding: 0">
                                                <a href="javascript:;" class="tabitemwrapper" >
                                                <span class="tabitemtext">

                                                    <button type="button" class="botontabpopup ver-galeria-item" data-toggle="modal" data-target="#detalleGaleriaItem" data-id="{{$item->id}}" data-imagen="{{$item->imagen}}" data-item="{{$item->item}}" data-pry="{{$pry_modulo->id_proyecto}}">+</button>
                                                    <button type="button" class="btn btn-info editar-galeria-item nomostrar" data-toggle="modal" data-target="#editarGaleriaItem" data-id="{{$item->id}}" data-imagen="{{$item->imagen}}" data-item="{{$item->item}}" data-pry="{{$pry_modulo->id_proyecto}}">Editar</button>
                                                    <button type="button" class="btn btn-danger eliminar-galeria-item nomostrar"  data-id="{{$item->id}}" data-pry="{{$pry_modulo->id_proyecto}}">Eliminar</button>
                                                    <h3>{{$item->item}}</h3>
                                                </span>
                                                    @if(@getimagesize(public_path().'/upload/'.$pry_modulo->id_proyecto.'/galeria/' . $item->imagen))
                                                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/galeria/'.$item->imagen)!!}" alt="" class="img-responsive" id="galeriaitem{{$item->id}}">
                                                    @else
                                                        <img src="{!!url('img/image_not_available.png')!!}" alt="" class="img-responsive" id="galeriaitem{{$item->id}}">
                                                    @endif

                                                </a>
                                            </div>
                                    @elseif($i==4)
                                        <div class="item">
                                            <div class="col-sm-6" id="div_itemgaleria{{$item->id}}" style="padding: 0">
                                                <a href="javascript:;" class="tabitemwrapper" >
                                                <span class="tabitemtext">

                                                    <button type="button" class="botontabpopup ver-galeria-item" data-toggle="modal" data-target="#detalleGaleriaItem" data-id="{{$item->id}}" data-imagen="{{$item->imagen}}" data-item="{{$item->item}}" data-pry="{{$pry_modulo->id_proyecto}}">+</button>
                                                    <button type="button" class="btn btn-info editar-galeria-item nomostrar" data-toggle="modal" data-target="#editarGaleriaItem" data-id="{{$item->id}}" data-imagen="{{$item->imagen}}" data-item="{{$item->item}}" data-pry="{{$pry_modulo->id_proyecto}}">Editar</button>
                                                    <button type="button" class="btn btn-danger eliminar-galeria-item nomostrar"  data-id="{{$item->id}}" data-pry="{{$pry_modulo->id_proyecto}}">Eliminar</button>
                                                    <h3>{{$item->item}}</h3>
                                                </span>
                                                    @if(@getimagesize(public_path().'/upload/'.$pry_modulo->id_proyecto.'/galeria/' . $item->imagen))
                                                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/galeria/'.$item->imagen)!!}" alt="" class="img-responsive" id="galeriaitem{{$item->id}}">
                                                    @else
                                                        <img src="{!!url('img/image_not_available.png')!!}" alt="" class="img-responsive" id="galeriaitem{{$item->id}}">
                                                    @endif

                                                </a>
                                            </div>
                                    @elseif($i==3)
                                            <div class="col-sm-6" id="div_itemgaleria{{$item->id}}" style="padding: 0">
                                                <a href="javascript:;" class="tabitemwrapper" >
                                                <span class="tabitemtext">

                                                    <button type="button" class="botontabpopup ver-galeria-item" data-toggle="modal" data-target="#detalleGaleriaItem" data-id="{{$item->id}}" data-imagen="{{$item->imagen}}" data-item="{{$item->item}}" data-pry="{{$pry_modulo->id_proyecto}}">+</button>
                                                    <button type="button" class="btn btn-info editar-galeria-item nomostrar" data-toggle="modal" data-target="#editarGaleriaItem" data-id="{{$item->id}}" data-imagen="{{$item->imagen}}" data-item="{{$item->item}}" data-pry="{{$pry_modulo->id_proyecto}}">Editar</button>
                                                    <button type="button" class="btn btn-danger eliminar-galeria-item nomostrar"  data-id="{{$item->id}}" data-pry="{{$pry_modulo->id_proyecto}}">Eliminar</button>
                                                    <h3>{{$item->item}}</h3>
                                                </span>
                                                    @if(@getimagesize(public_path().'/upload/'.$pry_modulo->id_proyecto.'/galeria/' . $item->imagen))
                                                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/galeria/'.$item->imagen)!!}" alt="" class="img-responsive" id="galeriaitem{{$item->id}}">
                                                    @else
                                                        <img src="{!!url('img/image_not_available.png')!!}" alt="" class="img-responsive" id="galeriaitem{{$item->id}}">
                                                    @endif

                                                </a>
                                            </div>
                                        </div>
                                    @else
                                            <div class="col-sm-6" id="div_itemgaleria{{$item->id}}" style="padding: 0">
                                                <a href="javascript:;" class="tabitemwrapper" >
                                            <span class="tabitemtext">

                                                <button type="button" class="botontabpopup ver-galeria-item" data-toggle="modal" data-target="#detalleGaleriaItem" data-id="{{$item->id}}" data-imagen="{{$item->imagen}}" data-item="{{$item->item}}" data-pry="{{$pry_modulo->id_proyecto}}">+</button>
                                                <button type="button" class="btn btn-info editar-galeria-item nomostrar" data-toggle="modal" data-target="#editarGaleriaItem" data-id="{{$item->id}}" data-imagen="{{$item->imagen}}" data-item="{{$item->item}}" data-pry="{{$pry_modulo->id_proyecto}}">Editar</button>
                                                <button type="button" class="btn btn-danger eliminar-galeria-item nomostrar"  data-id="{{$item->id}}" data-pry="{{$pry_modulo->id_proyecto}}">Eliminar</button>
                                                <h3>{{$item->item}}</h3>
                                            </span>
                                                    @if(@getimagesize(public_path().'/upload/'.$pry_modulo->id_proyecto.'/galeria/' . $item->imagen))
                                                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/galeria/'.$item->imagen)!!}" alt="" class="img-responsive" id="galeriaitem{{$item->id}}">
                                                    @else
                                                        <img src="{!!url('img/image_not_available.png')!!}" alt="" class="img-responsive" id="galeriaitem{{$item->id}}">
                                                    @endif

                                                </a>
                                            </div>
                                    @endif
                                    <?php $i=$i+1;?>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@if($editar==1)
    <script>
        $( document ).ready(function() {
            $('#slide_md_c41').removeClass('carousel');
            $('#slide_md_c41').removeClass('slide');
            $('#carousel-inner-c41').removeClass('carousel-inner');
            $('#carousel-indicators-c41').addClass('nomostrar');
        });
    </script>
@endif