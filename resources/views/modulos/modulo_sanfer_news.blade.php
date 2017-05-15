<link href="<?php echo URL::asset('/css/modulo_sanfer_news.css'); ?>" rel="stylesheet" type="text/css" />
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
<div id="container-modulo_sanfer_news" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        @if($editar==0)
        <div id="imagenfondo" style="float: right; width: 100%; background-image: url('{!!url('img/fondo-rayas.png')!!}')!important; background-size: cover ">
            <div class="fila">
                <?php
                $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
                ?>
                @foreach($modulosDtll as $modulo)
                <div class="col-sm-10 col-sm-offset-1 contenido">
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">
                            <img src="{!!url('img/rayita-roja.png')!!}"/>{{$modulo->titulo}}</h1>
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
                        $noticias_destacadas = App\Console\Commands\Funciones::getNoticiasDestacadas($pry_modulo->id_proyecto , $idioma);
                        $tam = 3-count($noticias_destacadas);
                        $ultimas_noticias = \App\Console\Commands\Funciones::getUltimasNoticias($tam, $pry_modulo->id_proyecto, $idioma);
                    ?>
                    <div class="row news-box" style="margin: 0">
                        @foreach($noticias_destacadas as $noticia)
                        <div class="col-md-4 noticia-box">
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
                        @endforeach
                        @foreach($ultimas_noticias as $noticia)
                            <div class="col-md-4 noticia-box">
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
                        @endforeach
                    </div>
                    <div class="col-sm-12 btn-mas" align="center">
                        @if($modulo->es_url_externo==1)
                            <a class="btn-ver-mas linkareferencia edit-linkareferencia borde-boton fondo-boton " id="linkareferencia{{$modulo->id}}" href="{{$modulo->url}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">
                                <img src="{!!url('img/rayita-roja-small.png')!!}"/>{!!$modulo->url_texto!!}
                            </a>
                        @else
                            <a class="btn-ver-mas ancla linkareferencia edit-linkareferencia borde-boton fondo-boton" id="linkareferencia{{$modulo->id}}" href="#{{str_replace(' ', '', $modulo->url)}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">
                                <img src="{!!url('img/rayita-roja-small.png')!!}"/>{!!$modulo->url_texto!!}
                            </a>
                        @endif
                    </div>
                </div>
                @endforeach
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
</script>
        @else
            @include('modulos.news_edicion', array('imagen_raya'=>'true'))
        @endif
    </div>
</div>
