<link href="<?php echo URL::asset('/css/modulo_c_videoscarousel.css'); ?>" rel="stylesheet" type="text/css" />
<!--slick fotos seguidas-->
<link href="<?php echo URL::asset('css/slick.css');?>" rel="stylesheet">
<link href="<?php echo URL::asset('css/slick-theme.css');?>" rel="stylesheet">
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}},   #container{{$pry_modulo->idesPR}} .background-custom-color{
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
         #container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif
<style>
    #container-modulo_c_videoscarousel .titulo{
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }
    #container-modulo_c_videoscarousel .parrafo{
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }
    @media (max-width: 1025px){
        #container-modulo_c_videoscarousel .titulo{
            font-size: <?php echo 11+ $proyecto->font_size?>px;
        }
    
        #container-modulo_c_videoscarousel .parrafo{
            font-size: <?php echo 11+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px){
        #container-modulo_c_videoscarousel .titulo{
            font-size: <?php echo 7+ $proyecto->font_size?>px;
        }
    
        #container-modulo_c_videoscarousel .parrafo{
            font-size: <?php echo 7+ $proyecto->font_size?>px;
        }
    }

</style>

<div id="container-modulo_c_videoscarousel" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
    

        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
        <?php
        $tabs = App\Console\Commands\Funciones::getGaleriatabs($pry_modulo->idesPR, $idioma); ?>
        @foreach($tabs as $tab)
            <?php
            $items = App\Console\Commands\Funciones::getGaleriaItems($tab->id, $idioma);
            $i=0;
            ?>
            @if($editar==0)
            <div class="contenidovideo">
                <div class="youtube-container">
                    <div class="youtube-player playvideo" data-id="<?php if(count($items)>0) echo $items[0]->imagen?>"></div>
                </div>
                <div class="variable slider">
                @foreach($items as $item)
                    <div class="video-box" style="position: relative;">
                        <div class=" slickimagen">
                            <img src="//i.ytimg.com/vi/{{$item->imagen}}/hqdefault.jpg" alt="caso" class="img-responsive videover" data-videoid="{{$item->imagen}}">
                        </div>
                      <span class="hovervideo" data-videoid="{{$item->imagen}}">
                          <span class="titulo titulo-custom-color">{{$item->item}}</span><br>
                          <span class="parrafo comentario-custom-color">{{$item->texto}}</span>
                      </span>
                    </div>
               @endforeach
                </div>
            </div>
            @else
                <div class="nuevoitem-video col-md-12" align="center" style="clear: both;">
                    <button type="button" class="btn btn-info editar-item-video" data-toggle="modal" data-target="#editarItemVideo" data-tab="{{$tab->id}}" data-id="0" data-item="" data-texto="" >Agregar video</button>
                </div>

                <div class="listado-videos-carousel col-xs-10 col-xs-offset-1">
                    @foreach($items as $item)
                        <div class="col-sm-4 item-video-box" id="item_video_carousel{{$item->id}}">
                            <span class="hovervideo">
                                <span class="editar-item-video-box-botones" style="color:#fff">
                                     <span class='editar-item-video fa fa-pencil' data-toggle='modal' data-target='#editarItemVideo' data-id='{{ $item->id }}'  data-item='{{ $item->item }}' data-tab='{!! $tab->id !!}' data-imagen='{{ $item->imagen }}' data-texto='{{ $item->texto }}'></span>
                                    <span class='fa fa-times eliminar-item-video'  data-id='{{ $item->id }}'></span>
                                </span>
                                 <h1 class="titulo titulo-custom-color">{{$item->item}}</h1>
                                <p class="parrafo comentario-custom-color">{{$item->texto}}</p>
                            </span>
                            <div class="slickimagen">
                                <img src="//i.ytimg.com/vi/{{$item->imagen}}/hqdefault.jpg" class="img-responsive">
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @endforeach        
        </div>
    </div>
</div>
@if($editar==0)
<!--slick fotos seguidas-->
<script src="<?php echo URL::asset('js/slick.min.js');?>" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('ready', function() {     
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      var idvideo = $('.playvideo').attr('data-id');
      //$('.playvideo iframe').attr("src","//www.youtube.com/embed/"+idvideo);
        $('.playvideo iframe').attr("src","//www.youtube.com/embed/"+idvideo+"?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=1&showinfo=0");
        $('.playvideo img').attr("src","//i.ytimg.com/vi/"+idvideo+"/hqdefault.jpg");
    });
    $('.hovervideo').click(function(){
        var idvideo = $(this).attr('data-videoid');
        $('.playvideo').attr('data-id',idvideo);  
        $('.playvideo iframe').attr("src","//www.youtube.com/embed/"+idvideo+"?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=1&showinfo=0");       
        $('.playvideo img').attr("src","//i.ytimg.com/vi/"+idvideo+"/hqdefault.jpg");
        console.log(idvideo);
        console.log( $('.playvideo').attr('data-id'));
    });
   
  </script>
@else
@include('modulos.modulo_c_videoscarousel_editar')
<script src="<?php echo URL::asset('js/modulos-editar/item-video-crud.js');?>" type="text/javascript"></script>
@endif

