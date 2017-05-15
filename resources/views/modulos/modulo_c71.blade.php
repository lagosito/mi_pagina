
<link href="<?php echo URL::asset('/css/modulo_c71.css'); ?>" rel="stylesheet" type="text/css" />
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
    #container-modulo_c71 .titulo{
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo_c71 .parrafo{
        font-size: <?php echo 17+ $proyecto->font_size?>px;
    }
    @media (max-width: 1025px) and  (min-width: 806px){
        #container-modulo_c71 .titulo{
            font-size: <?php echo 38+ $proyecto->font_size?>px;
        }
        #container-modulo_c71 .parrafo{
            font-size: <?php echo 16+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 806px) and  (min-width: 768px){
        #container-modulo_c71 .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_c71 .parrafo{
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) {
        #container-modulo_c71 .titulo{
            font-size: <?php echo 40+ $proyecto->font_size?>px;
        }
        #container-modulo_c71 .parrafo{
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c71" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        @foreach($modulosDtll as $modulo)
            @if($cont == 0 )
                <div class="row fila">
                    <div class="col-sm-5 imagenizq" align="center">
                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" class="img-responsive" id="img-modulo{{$modulo->id}}" alt=""/>
                        <a class="editar-imagen nomostrar" data-toggle="modal" data-target="#editarimagen" data-width="466" data-height="466" data-pk="{{$modulo->id}}" data-pry="{{$pry_modulo->id_proyecto}}"><i class="fa fa-pencil"></i></a>
                    </div>
                    <div class="col-sm-7 contenido">
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                        </div>
                        <div class="parrafo comentario-custom-color {{$proyecto->tipografia_titulos}}">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                    </div>

                </div>
                <?php $cont++; ?>
            @else
                <div class="row fila">

                    <div class="col-sm-7 contenido">
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                        </div>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                    </div>
                    <div class="col-sm-5 imagender" align="center" style="padding-bottom: 5%;">
                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" class="img-responsive" id="img-modulo{{$modulo->id}}" alt=""/>
                        <a class="editar-imagen nomostrar" data-toggle="modal" data-target="#editarimagen" data-width="466" data-height="466" data-pk="{{$modulo->id}}" data-pry="{{$pry_modulo->id_proyecto}}"><i class="fa fa-pencil"></i></a>
                    </div>

                </div>
            @endif
        @endforeach
    </div>
</div>