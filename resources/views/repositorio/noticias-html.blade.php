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
                        <a href="javascript:;" class="read-more" data-id="{{$noticia->id}}" data-img="{!!url('upload/'.$noticia->id_pry_proyecto.'/contenido/'.$noticia->imagen)!!}"
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