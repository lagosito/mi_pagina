<link href="<?php echo URL::asset('/css/modulo_c_news_url.css'); ?>" rel="stylesheet" type="text/css" />
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
<div id="container-modulo_c_news_url" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        @if($editar==0)
        <div id="imagenfondo"  style="float: right; width: 100%; background-image:url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}') !important; background-size: cover>
            <div class="fila">
                <?php
                $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
                $modulo = $modulosDtll[0];
                ?>
                <div class="col-sm-8 col-md-9 col-md-offset-1 col-sm-offset-1 contenido" id="contenido-noticias">
                    <div id="listado-noticias-url">
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h1 class="editable" data-pk="{{$modulosDtll[0]->id}}"  data-type="text"  data-name="titulo">
                                {{$modulo->titulo}}</h1>
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
                                            <p class="parrafo">
                                                {{$noticia->introduccion}}
                                            </p>
                                            <a href="{!!url('/')!!}/{!!Request::path()!!}?noticia={{$noticia->id}}" class="read-more" data-id="{{$noticia->id}}" data-img="{!!url('upload/'.$noticia->id_pry_proyecto.'/contenido/'.$noticia->imagen)!!}"
                                               data-titulo="{{$noticia->titulo}}" data-texto="{{$noticia->texto}}" data-pry="{{$noticia->id_pry_proyecto}}">
                                                {!!trans('messages.read_more')!!}</a>
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
                                {!!$modulo->url_texto!!}
                            </a>
                        </div>
                    </div>
                    <div id="noticia_mostrada"></div>
                </div>
                <div class="col-sm-2 col-md-1 advertising">
                </div>
                <?php 
                $noticia="";
                if(isset($_GET['noticia'])){ 
                    $noticia = $_GET['noticia'];
                }
                 ?>
            
            <script>
            
             var variable = [];
             var url = '{{ url('') }}';
             var id_noticia = '{!!$noticia!!}';

             var mi_noticia = function(){ 
                    return {
                        init:function(id_noticia){

                            var render = function(obj){
                                var img = url+'/upload/'+obj['id_pry_proyecto']+'/contenido/'+obj['imagen'];
                                var noticia_activa = '<div class="col-sm-12 noticia-activa"><div class="col-sm-6 noticia-img"><div id="slide_noticia" class="carousel slide" data-ride="carousel"><ol class="carousel-indicators"></ol><div class="carousel-inner" role="listbox"><img src="'+img+'"></div></div></div><div class="col-sm-6 container-texto"><div class="texto-activo"><div class="titulo-noticia active">'+obj['titulo']+'</div><p class="parrafo active">'+obj['texto']+'</p></div></div></div></div><a href="#" class="regresar">Regresar</a>';
                                $('#noticia_mostrada').append(noticia_activa);

                            }

                            var data = {};
                            data._token = '{!!csrf_token()!!}';
                            data.id = id_noticia;
                            data.idioma = $('body').attr('data-idioma');

                            $.ajax({
                                type: "POST",
                                url: "{!! url('/noticia') !!}",
                                data: data,
                                success: function (data) {
                                    variable=data;
                                    render(variable);
                                },
                                error: function () {
                                    alert('Error en la conexión');
                                }
                            });                       
                             
                        }
                    }
                }();

                if(id_noticia>0){
                    $('#listado-noticias-url').css('display','none');
                    mi_noticia.init(id_noticia);
                }
                else
                {
                    $('#noticia_mostrada').empty();
                     $('#listado-noticias-url').css('display','block');
                }
                 

               
                

                $(document).on('click', '.regresar', function(){
                    var url = "{!!url('/')!!}";
                    var path = '{!!Request::path()!!}';

                    var url_back = window.history.replaceState(null, null, "/" + path);
                    console.log(path);
                    location.href = url +'/'+path;
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
            @include('modulos.news_edicion', array('imagen_raya'=>'false'))
        @endif
    </div>
</div>
