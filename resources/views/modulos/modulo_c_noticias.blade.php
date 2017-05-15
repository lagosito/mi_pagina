<link href="<?php echo URL::asset('/css/modulo_c_noticias.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }

        #container{{$pry_modulo->idesPR}} .linkareferencia {
            border-color: {{$combinacion->color_boton}} ;
            background-color: {{$combinacion->color_boton}} ;
        }
    </style>
@endif
<div id="container-modulo_c_noticias" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        @if($editar==0)
        <div id="imagenfondo"  style="float: right; width: 100%; background-image: url('{!!url('img/fondo-rayas2.png')!!}') !important; background-position: right top; background-repeat: no-repeat; background-size: contain">
            <div class="fila">
                <?php
                $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
                ?>
                <div class="col-sm-10 col-sm-offset-1 contenido">
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h1 class="editable" data-pk="{{$modulosDtll[0]->id}}"  data-type="text"  data-name="titulo">
                            <img src="{!!url('img/rayita-roja.png')!!}"/>{{$modulosDtll[0]->titulo}}</h1>
                    </div>
                    <div class="col-sm-12 noticia-activa" style="display: none">
                        <div class="col-sm-6 noticia-img">
                            <div id="slide_noticia" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 container-texto">
                            <div class="texto-activo">
                                <div class="titulo-noticia active">
                                    Lorem ipsum dolore sit amet
                                </div>
                                <img src="{!!url('img/raya.png')!!}" style="width: 100%; height: 2px;"/>
                                <p class="parrafo active">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                    $noticias = App\Console\Commands\Funciones::getNoticiastop6($pry_modulo->id_proyecto, $idioma);
                        $i=0; $j=0;
                        $tam=count($noticias);
                    ?>
                    <div class="col-sm-12 news-box" >
                        @foreach($noticias as $noticia)
                            @if($i==0)
                                <div>
                            @endif
                            @if($i==3)
                                </div>
                                <div>
                                <?php $i = 0?>
                            @endif
                            <div class="col-sm-4 noticia-box">
                                <div class="noticia">
                                    <img src="{!!url('upload/'.$noticia->id_pry_proyecto.'/contenido/'.$noticia->imagen)!!}">
                                    <div class="textos">
                                        <h3 class="titulo-noticia">{{$noticia->titulo}}</h3>
                                        <img src="{!!url('img/raya.png')!!}" style="width: 100%; height: 2px;"/>
                                        <p class="parrafo">
                                            {{$noticia->introduccion}}
                                        </p>
                                        <a href="javascript:;" class="read-more" data-id="{{$noticia->id}}" data-img="{!!url('upload/'.$noticia->id_pry_proyecto.'/contenido/'.$noticia->imagen)!!}"
                                           data-titulo="{{$noticia->titulo}}" data-texto="{{$noticia->texto}}" data-pry="{{$noticia->id_pry_proyecto}}">
                                            <img src="{!!url('img/rayita-roja-small.png')!!}" style="width: 11px"/>{!!trans('messages.read_more')!!}</a>
                                    </div>
                                </div>
                            </div>
                            <?php $i = $i+1?>
                            <?php $j = $j+1?>
                            @if($j==$tam)
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-sm-12 btn-back-home clearfix" align="center">
                        <a class="btn-mas-noticias linkareferencia edit-linkareferencia borde-boton fondo-boton " id="linkareferencia{{$modulosDtll[0]->id}}" href="javascript:;" data-proy="{{$pry_modulo->id_proyecto}}" data-last="{{$noticia->id}}" data-pk="{{$modulosDtll[0]->id}}" data-url="{{$modulosDtll[0]->url}}" data-texto="{{$modulosDtll[0]->url_texto}}" data-url-externo="{{$modulosDtll[0]->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">
                            <img src="{!!url('img/rayita-roja-small.png')!!}"/>{!!$modulosDtll[0]->url_texto!!}
                        </a>
                    </div>
                </div>
            </div>
            <script>
                $(document).on('click', '.read-more', function(){

                    $('.titulo-noticia.active').text($(this).attr('data-titulo'));
                    $('.parrafo.active').text($(this).attr('data-texto'));

                    $('#slide_noticia .carousel-inner').empty();
                    $('#slide_noticia .carousel-indicators ').empty();

                    $('#slide_noticia .carousel-inner').append('<div class="item active">'
                            + '<img class="imagenSlider" src="'+$(this).attr('data-img')+'" alt="" >'
                            + '</div>');

                    var ruta = '{!!url('upload/')!!}'+ '/'+$(this).attr('data-pry')+'/contenido/';

                    var data = {};
                    data._token = '{!!csrf_token()!!}';
                    data.id_noticia = $(this).attr('data-id');

                    $.ajax({
                        type: "POST",
                        url: "{!! url('/obtenernoticiaslider') !!}",
                        data: data,
                        success: function (data) {
                            if(data!='')
                            {
                                $('#slide_noticia .carousel-indicators ').append( '<li data-target="#slide_noticia" data-slide-to="0" class="active"></li>');
                            }
                            $.each( data, function( key ) {
                                $('#slide_noticia .carousel-inner ').append( '<div class="item">'
                                        + '<img class="imagenSlider" src="'+ ruta + data[key].imagen+'" alt="">'
                                        + '</div>');
                                $('#slide_noticia .carousel-indicators ').append( '<li data-target="#slide_noticia" data-slide-to="'+key+'"></li>');
                            });

                            $('#slide_noticia').carousel();
                        },
                        error: function () {
                            alert('Error en la conexión');
                        }
                    });

                    var clonada = $('.noticia-activa').clone();

                    $( ".noticia-activa" ).remove();
                    $('html, body').animate({ scrollTop:$(this).parent().parent().parent().offset().top }, 0);

                    if ($(window).width()  > 767) {

                        $(this).parent().parent().parent().parent().append(clonada);
                        $('.noticia-activa').css('display', 'none');
                        $( ".noticia-activa" ).slideDown(1000);
                        var altura = $('.noticia-activa').height();
                        $('html, body').animate({ scrollTop: $('.noticia-activa').offset().top + altura -100}, 1000);
                    }
                    else{
                        $(clonada).insertAfter($(this).parent().parent().parent());
                        $('.noticia-activa').css('display', 'none');
                        $( ".noticia-activa" ).slideDown(1000);
                        var altura = $('.noticia-activa').height();
                        $('html, body').animate({ scrollTop: $('.noticia-activa').offset().top + altura}, 1000);
                    }


                });
                $(document).on('click', '.btn-mas-noticias', function(){

                    var data = {};
                    data._token = '{!!csrf_token()!!}';
                    data.id_proyecto = $(this).attr('data-proy');
                    data.num = $(this).attr('data-last');
                    data.idioma = $('body').attr('data-idioma');

                    $.ajax({
                        type: "POST",
                        url: "{!! url('/noticiasnext6') !!}",
                        data: data,
                        success: function (data) {
                           $('.news-box').append(data);
                            var ultimo= $('.news-box div.noticia').last().attr('data-id');
                            $('.btn-mas-noticias').attr('data-last', ultimo);
                            $('html, body').animate({ scrollTop: $('.news-box div.noticia').last().offset().top-100}, 1000);
                            if(data=='')
                            {
                                $('.btn-mas-noticias').addClass('hidden');
                            }
                        },
                        error: function () {
                            alert('Error en la conexión');
                        }
                    });
                });
            </script>
        </div>
        @else
            @include('modulos.news_edicion', array('imagen_raya'=>'true'))
        @endif
    </div>
</div>
