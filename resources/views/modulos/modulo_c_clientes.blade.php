<link href="<?php echo URL::asset('/css/modulo_c_clientes.css'); ?>" rel="stylesheet" type="text/css" />
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
        #container{{$pry_modulo->idesPR}} .fondo-boton {
            color: {{$combinacion->color_boton}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif
<div id="container-modulo_c_clientes" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        $imagenesSlider = App\Console\Commands\Funciones::getImagenesSlider($pry_modulo->idesPR);
        ?>
        <div id="imagenfondo" style="float: left; width: 100%; background-image:url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="contenido col-sm-12">
                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h1 class="editable"  data-type="text" data-pk="{{$modulosDtll[0]->id}}" data-name="titulo">{{$modulosDtll[0]->titulo}}</h1>
                </div>
                <br/>
                <div class="parrafo comentario-custom-color">
                    <p class="editable"  data-type="textarea" data-pk="{{$modulosDtll[0]->id}}" data-name="comentario">
                        {{$modulosDtll[0]->comentario}}
                    </p>
                </div>
                <div class="col-sm-9 col-sm-offset-2 col-xs-12 col-xs-offset-1">
                    <div class="col-sm-12">
                        @foreach($imagenesSlider as $img)
                            <div class="col-sm-15 col-xs-6">
                            <a href="{{$img->link}}" target="_blank">
                                <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/slider/'.$img->imagen)!!}" alt="" class="img-responsive img-cliente">
                            </a>
                            </div>
                        @endforeach
                        @if($editar==1)
                            <a class="editar-slider edit-imgs" data-toggle="modal" data-target="#editSlider" href="javascript:;" data-id="{{$pry_modulo->idesPR}}" data-pry="{{$pry_modulo->id_proyecto}}">
                                <span class="fa fa-pencil"></span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>