<link href="<?php echo URL::asset('/css/modulo_c_alianzas.css'); ?>" rel="stylesheet" type="text/css" />
<div id="container-modulo_c_alianzas" class="wrapper">
    <div  class="container" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <div id="imagenfondo" style="float: right; width: 100%; background-image: url('{!!url('img/fondo-rayas-rojas2.png')!!}')!important; background-size: cover ">
            <div class="fila">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 contenido">
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}" >
                        <h1 class="editable"  data-type="text"  data-name="titulo">
                            <img src="{!!url('img/rayita-roja.png')!!}"/>Nuestros Clientes</h1>
                    </div>
                    <div class="parrafo comentario-custom-color">
                        <p class="editable"  data-type="textarea"  data-name="comentario">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 " style="background-color: white">
            <div id="carousel_alianza" class="carousel slide carousel-showmanymoveone" data-ride="carousel">

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img style="width: 100%;" src="{!!url('img/logo-alianzas/1-embrapa.png')!!}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img style="width: 100%;" src="{!!url('img/logo-alianzas/2-ccl.png')!!}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img style="width: 100%;" src="{!!url('img/logo-alianzas/3-apa.png')!!}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img style="width: 100%;" src="{!!url('img/logo-alianzas/4-ainia.png')!!}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img style="width: 100%;" src="{!!url('img/logo-alianzas/5-sit.png')!!}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img style="width: 100%;" src="{!!url('img/logo-alianzas/6-tu.png')!!}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img style="width: 100%;" src="{!!url('img/logo-alianzas/7-ucdavis.png')!!}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img style="width: 100%;" src="{!!url('img/logo-alianzas/8-hida.png')!!}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img style="width: 100%;" src="{!!url('img/logo-alianzas/9-upch.png')!!}">
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#carousel_alianza" role="button" data-slide="prev">
                    <img src="{!!url('img/flecha-izquierda.png')!!}"/>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel_alianza" role="button" data-slide="next">
                    <img src="{!!url('img/flecha-derecha.png')!!}"/>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


    </div>
</div>
<script>
    (function(){
        $('.slide').carousel({ interval: 3000 });
    }());

    (function(){
        $('.carousel-showmanymoveone .item').each(function(){
            var itemToClone = $(this);

            for (var i=1;i<4;i++) {
                itemToClone = itemToClone.next();

                // wrap around if at end of item collection
                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }

                // grab item, clone, add marker class, add to collection
                itemToClone.children(':first-child').clone()
                        .addClass("cloneditem-"+(i))
                        .appendTo($(this));
            }
        });
    }());

</script>