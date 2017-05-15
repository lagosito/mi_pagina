
<link href="<?php echo URL::asset('/css/modulo4.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
            color: {{$combinacion->subtitulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
        @media (min-width: 768px) {
            #container{{$pry_modulo->idesPR}} .parrafo:after {
                content: '';
                background-image: -webkit-linear-gradient(top, rgba(231, 231, 226, 0) 0%, {{$combinacion->fondo}} 100%);
                background-image: -o-linear-gradient(top, rgba(231, 231, 226, 0) 0%, {{$combinacion->fondo}} 100%); /* For Opera 11.1 to 12.0 */
                background-image: -moz-linear-gradient(top, rgba(231, 231, 226, 0) 0%, {{$combinacion->fondo}} 100%); /* For Firefox 3.6 to 15 */
                background-image: linear-gradient(top, rgba(231, 231, 226, 0) 0%, {{$combinacion->fondo}} 100%); /* Standard syntax */
                display: block;
                position: absolute;
                pointer-events: none;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 50px;
            }
        }
    </style>
@endif
<style>
    #container-modulo4 .titulo{
        font-size: <?php echo 17+ $proyecto->font_size?>px;
    }
    #container-modulo4 .parrafo, #container-modulo4 .pienumber{
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }
    #container-modulo4 .link{
        font-size: <?php echo 11+ $proyecto->font_size?>px;
    }
</style>
<div id="container-modulo4" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div class="row fila">
            @foreach($modulosDtll as $modulo)

                <div class="col-md-4 col-sm-6 imagen img_md_c2">
                    <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" id="img-modulo{{$modulo->id}}" class="img-responsive imgc2" alt=""/>
                    <a class="editar-imagen nomostrar" data-toggle="modal" data-target="#editarimagen" data-width="466" data-height="466" data-pk="{{$modulo->id}}" data-pry="{{$pry_modulo->id_proyecto}}"><i class="fa fa-pencil"></i></a>
                </div>
                <div class="col-md-4 col-sm-6 contenido content_md_c2">
                    <div class="col-xs-12 link">
                        <a class="subtitulo-custom-color {{$proyecto->tipografia_titulos}}" href="">{!!$modulo->url!!}</a>
                    </div>
                    <div class=" col-xs-12 titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                    </div>
                    <div class="col-xs-12">
                        <div class="parrafo comentario-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                    </div>
                    <div class="col-xs-12 pienumber titulo-custom-color">
                        <p class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<script>
    function resizecontent(){
        var alturaimagen = $('.img_md_c2').height();
        $('.img_md_c2').each(function(){
            if(alturaimagen <= $(this).height())
            {
                alturaimagen = $(this).height();
            }

        });

        $('.img_md_c2').css('height',alturaimagen);

        var alturacontenido = $('.content_md_c2').height();
        $('.content_md_c2').each(function(){
            if(alturacontenido <= $(this).height())
            {
                alturacontenido = $(this).height();
            }

        });

        if (alturaimagen >= alturacontenido) {
            if($(window).width()>=768) {
                $('.content_md_c2').css({
                    height: alturaimagen
                });
                $('.imgc2').css('height', '100%');
            }
            else
            {
                $('.img_md_c2').css('height','100%');
            }
        }
        else
        {
            if($(window).width()>=768) {
                $('.img_md_c2').css({
                    height: alturacontenido
                });
                $('.imgc2').css('height', '100%');
            }
            else
            {
                $('.img_md_c2').css('height','100%');
            }
        }
    }
    $(window).load(function () {
        resizecontent();
    });
    $(window).resize(function() {
        resizecontent();

    });
    function resizecontent2(){
        var alturaimagen = $('.img_md_c2').height();

        $('.img_md_c2').css('height',alturaimagen);

        if($(window).width()>=768) {
            $('.content_md_c2').css({
                height: alturaimagen
            });
            $('.imgc2').css('height', '100%');
        }
        else
        {
            $('.img_md_c2').css('height','100%');
        }


    }


</script>