<link href="<?php echo URL::asset('/css/modulo_c3.css'); ?>" rel="stylesheet" type="text/css" />
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
    #container-modulo_c3 .titulo{
        font-size: <?php echo 50+ $proyecto->font_size?>px;
    }
    #container-modulo_c3 .parrafo{
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    #container-modulo_c3 .subtitulo{
        font-size: <?php echo 11+ $proyecto->font_size?>px;
    }
    #container-modulo_c3 .iconos{
        font-size: <?php echo 30+ $proyecto->font_size?>px;
    }
    #container-modulo_c3 .texto{
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }
    @media (max-width: 260px)  {

        #container-modulo_c3 .titulo {
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
        #container-modulo_c3 .parrafo,  #container-modulo_c3 .texto {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 500px) and (min-width: 261px) {
        #container-modulo_c3 .titulo {
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_c3 .parrafo {
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
        #container-modulo_c3 .texto {
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 992px) and  (min-width: 501px){
        #container-modulo_c3 .titulo {
            font-size: <?php echo 38+ $proyecto->font_size?>px;
        }
        #container-modulo_c3 .parrafo {
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c3" class="wrapper">

    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div class="row cuerpo">
            <div class="col-sm-6 contenido">
                @foreach($modulosDtll as $modulo)
                    @if($cont == 0 )
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}" data-titulo="titulo">
                            <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo" data-tpl='<input type="text" maxlength="25">'>{!!$modulo->titulo!!}</h1>
                        </div>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario" data-tpl='<textarea maxlength="170"></textarea>'>{!!$modulo->comentario!!}</p>
                        </div>
                    @else
                        <div class="items col-xs-12" style="padding-left: 0">
                            <div class="col-xs-1 col-sm-1">
                                <a id="faicon{{$modulo->id}}" class="fa {!!$modulo->subtitulo!!} iconos subtitulo-custom-color edit-icono" data-pk="{{$modulo->id}}" data-icono="{{$modulo->subtitulo}}" data-campo="subtitulo" title=""  data-toggle="popover" data-trigger="click" data-popover-content="#popovericonos"></a>
                            </div>

                            <div class="col-xs-9 col-sm-6">
                                <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">
                                    <h2 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo" data-tpl='<input type="text" maxlength="30">'>{!!$modulo->titulo!!}</h2><br/>
                                </div>
                                <div class="texto comentario-custom-color">
                                    <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario" data-tpl='<textarea maxlength="70"></textarea>'>{!!$modulo->comentario!!}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                        <?php $cont++; ?>
                @endforeach
            </div>
            <?php $modulo= $modulosDtll[0]; ?>
            <div class="col-sm-6 imagen">
                <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" id="img-modulo{{$modulo->id}}" class="img-responsive" alt=""/>
                <a class="editar-imagen nomostrar" data-toggle="modal" data-target="#editarimagen" data-width="485" data-height="625" data-pk="{{$modulo->id}}" data-pry="{{$pry_modulo->id_proyecto}}"><i class="fa fa-pencil"></i></a>
            </div>

        </div>
    </div>

</div>
