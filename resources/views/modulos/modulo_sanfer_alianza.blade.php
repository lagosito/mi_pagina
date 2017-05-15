<link href="<?php echo URL::asset('/css/modulo_sanfer_alianza.css'); ?>" rel="stylesheet" type="text/css" />
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
<div id="container-modulo_sanfer_alianza" class="wrapper ejemfondo">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%;">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <div class="col-sm-12" style="padding: 0; position: relative; height: auto">
            <?php
            $cont = 0;
            $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
            $i=0;
            $imagenesSlider = App\Console\Commands\Funciones::getSliderTextos($pry_modulo->idesPR, $idioma);
            $tam_slider= count($imagenesSlider);
            ?>
            @foreach($modulosDtll as $modulo)
                @if($editar==1 or $modulo->titulo!='')
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h1 class="editable" data-pk="{{$modulo->id}}"  data-type="text"  data-name="titulo">
                            <img src="{!!url('img/rayita-roja.png')!!}"/>{{$modulo->titulo}}</h1>
                    </div>
                @endif
            @endforeach
            <div id="carousel_alianza_sanfer"  class="carousel slide carousel-showmanymoveone slider-tam" data-ride="carousel" data-recomendacion="*Tamaño recomendado: 700x937 pixeles.">

                <div class="carousel-inner" role="listbox">
                    <input type="hidden" class="holders" data-holder1="Nombre" data-holder2="Cargo" data-holder3="Empresa">
                    @foreach($imagenesSlider as $img)
                        @if($cont==0)
                            <div class="item active item-first">
                        @else
                            <div class="item">
                        @endif
                                    <div class="col-xs-12 col-sm-6 col-md-3">                                    
                                        <img style="width: 100%;" src="{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}">
                                        <center>
                                        @if($img->texto!='')
                                            <span class="item-nombre">{{$img->texto}}</span><br>
                                        @endif
                                        @if($img->texto2!='')
                                            <span class="texto">{{$img->texto2}}</span><br>
                                        @endif
                                        @if($img->link!='')
                                            <span class="detalle1">{{$img->link}}</span>
                                        @endif
                                        </center>
                                    </div>
                            </div>
                        <?php $cont = $cont +1 ?>
                    @endforeach

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#carousel_alianza_sanfer" role="button" data-slide="prev">
                    <span class="flecha glyphicon glyphicon-chevron-left" style="margin-top: -104px; color: #666b6f"></span>
                    <img src="{!!url('img/flecha-izquierda.png')!!}"/>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel_alianza_sanfer" role="button" data-slide="next">
                    <span class="flecha glyphicon glyphicon-chevron-right" style="margin-top: -104px; color: #666b6f"></span>
                    <img src="{!!url('img/flecha-derecha.png')!!}"/>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>
</div>
    <script>
        (function(){
            $('#carousel_alianza_sanfer').carousel({ interval: 3000 });
        }());

        (function(){
          $('#carousel_alianza_sanfer .item').each(function(){
            var itemToClone = $(this);

            for (var i=1;i<4;i++) {
              itemToClone = itemToClone.next();

              // wrap around if at end of item collection
              if (!itemToClone.length) {
                itemToClone = $('.item-first');
              }

              // grab item, clone, add marker class, add to collection
              itemToClone.children(':first-child').clone()
                .addClass("cloneditem-"+(i))
                .appendTo($(this));
            }
          });


        }());
        
    

    </script>