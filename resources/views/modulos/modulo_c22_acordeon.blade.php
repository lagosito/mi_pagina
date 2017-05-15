
<link href="<?php echo URL::asset('/css/modulo_c22_acordeon.css'); ?>" rel="stylesheet" type="text/css" />
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
    </style>
@endif
<style>
    #container-modulo_c22_acordeon .titulo{
        font-size: <?php echo 56+ $proyecto->font_size?>px;
    }
    #container-modulo_c22_acordeon .parrafo{
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }
    #container-modulo_c22_acordeon .subtitulo, #container-modulo_c22_acordeon .item{
        font-size: <?php echo 12+ $proyecto->font_size?>px;
    }
    @media (max-width: 1025px) and  (min-width: 768px){
        #container-modulo_c22_acordeon .titulo{
            font-size: <?php echo 50+ $proyecto->font_size?>px;
        }
        #container-modulo_c22_acordeon .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) and (min-width: 550px){
        #container-modulo_c22_acordeon .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_c22_acordeon .parrafo{
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 549px){
        #container-modulo_c22_acordeon .titulo{
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
        #container-modulo_c22_acordeon .parrafo{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
        #container-modulo_c22_acordeon .item{
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c22_acordeon" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div class="row fila">
            <div class="col-sm-12 contenido">
                @foreach($modulosDtll as $modulo)
                    @if($cont == 0 )
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                        </div>
                        <div class="subtitulo {{$proyecto->tipografia_titulos}}">
                                <a class="item accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#paso{{$cont+1}}">
                                    <span class="col-xs-2 col-sm-1" style="padding: 20px 0 20px 0;">
                                        <span class="fa-stack" style="font-size: 20px; margin-right: 20px;">
                                          <i class="fa fa-circle-thinner fa-stack-2x"></i>
                                          <i class="fa-stack-1x subtitulo-custom-color" style="font-size: 16px">{{$cont+1}}</i>
                                        </span>
                                    </span>
                                    <span class="col-xs-10 col-sm-11" style="padding: 20px 0 20px 0; margin-top: 8px;">
                                        <span class="subtitulo-custom-color editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</span>
                                    </span>
                                </a>
                        </div>
                        <div id="paso{{$cont+1}}" class="collapse texto-expandido">
                            <div class="parrafo comentario-custom-color">
                                <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                            </div>
                        </div>
                    @else
                        <div class="subtitulo {{$proyecto->tipografia_titulos}}">
                                <a class="item accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#paso{{$cont+1}}">
                                    <span class="col-xs-2 col-sm-1" style="padding: 20px 0 20px 0;">
                                        <span class="fa-stack" style="font-size: 20px; margin-right: 20px;">
                                          <i class="fa fa-circle-thinner fa-stack-2x"></i>
                                          <i class="fa-stack-1x subtitulo-custom-color" style="font-size: 16px">{{$cont+1}}</i>
                                        </span>
                                    </span>
                                    <span class="col-xs-10 col-sm-11" style="padding: 20px 0 20px 0; margin-top: 8px;">
                                        <span class="subtitulo-custom-color editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</span>
                                    </span>
                                </a>
                        </div>
                        <div id="paso{{$cont+1}}" class="collapse texto-expandido">
                            <div class="parrafo comentario-custom-color">
                                <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                            </div>
                        </div>
                    @endif
                    <?php $cont++; ?>
                @endforeach
                    <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">

                    </div>
            </div>
        </div>
    </div>

</div>
@if($editar==1)
    <script>
        $( document ).ready(function() {
            $('#container-modulo_c22_acordeon .item').removeClass('accordion-toggle');
            $('#container-modulo_c22_acordeon .item').removeClass('collapsed');
            $('#container-modulo_c22_acordeon .item').removeAttr('data-toggle');
            $('#container-modulo_c22_acordeon .item').removeAttr('data-parent');
            $('#container-modulo_c22_acordeon .item').removeAttr('href');
            $('#container-modulo_c22_acordeon .texto-expandido').addClass('in');
            $('#container-modulo_c22_acordeon .texto-expandido').attr('aria-expanded', 'true');

        });
    </script>
@endif