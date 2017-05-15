<link href="<?php echo URL::asset('/css/modulo_c_news_url_abstract.css'); ?>" rel="stylesheet" type="text/css" />
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
<div id="container-modulo_c_news_url_abstract" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        
        @if($editar==0)
        <div id="imagenfondo" style="float: right; width: 100%; background-image:url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="fila">
                <?php
                $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
                ?>
                @foreach($modulosDtll as $modulo)
                <div class="col-sm-10 col-sm-offset-1 contenido">
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">
                            {{$modulo->titulo}}</h1>
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
                                    <p class="parrafo">
                                       {{$noticia->introduccion}}
                                    </p>
                                    <a href="{!!url('/') !!}/{!!Request::path()!!}/{!!$modulo->subtitulo!!}?noticia={{$noticia->id}}" class="read-more" data-id="{{$noticia->id}}" data-img="{!!url('upload/'.$noticia->id_pry_proyecto.'/contenido/'.$noticia->imagen)!!}"
                                       data-titulo="{{$noticia->titulo}}" data-texto="{{$noticia->texto}}" data-pry="{{$noticia->id_pry_proyecto}}">
                                        {!!trans('messages.read_more')!!}
                                    </a>
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
                                        <img src="" style="width: 100%; height: 2px;"/>
                                        <p class="parrafo">
                                            {{$noticia->introduccion}}
                                        </p>
                                        <a href="{!!url('/') !!}/{!!Request::path()!!}/{!!$modulo->subtitulo!!}?noticia={{$noticia->id}}" class="read-more" data-id="{{$noticia->id}}" data-img="{!!url('upload/'.$noticia->id_pry_proyecto.'/contenido/'.$noticia->imagen)!!}"
                                           data-titulo="{{$noticia->titulo}}" data-texto="{{$noticia->texto}}" data-pry="{{$noticia->id_pry_proyecto}}">
                                            {!!trans('messages.read_more')!!}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-sm-12 btn-mas" align="center">
                        @if($modulo->es_url_externo==1)
                            <a class="btn-ver-mas linkareferencia edit-linkareferencia borde-boton fondo-boton " id="linkareferencia{{$modulo->id}}" href="{{$modulo->url}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">
                                {!!$modulo->url_texto!!}
                            </a>
                        @else
                            <a class="btn-ver-mas ancla linkareferencia edit-linkareferencia borde-boton fondo-boton" id="linkareferencia{{$modulo->id}}" href="#{{str_replace(' ', '', $modulo->url)}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">
                                {!!$modulo->url_texto!!}
                            </a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        @else
            @include('modulos.news_edicion', array('imagen_raya'=>'false', 'url_relacionado'=>'true'))
        @endif
    </div>
</div>
