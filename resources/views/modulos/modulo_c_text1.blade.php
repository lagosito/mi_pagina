
<link href="<?php echo URL::asset('/css/modulo_c_text1.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
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
                width: 85%;
                height: 20%;
            }
        }
    </style>
@endif
<style>
    #container-modulo_c_text1 .titulo{
        font-size: <?php echo 30+ $proyecto->font_size?>px;
    }
    #container-modulo_c_text1 .parrafo{
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    @media (max-width: 1025px) {
        #container-modulo_c_text1 .titulo{
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
        #container-modulo_c_text1 .parrafo{
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c_text1" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        @foreach($modulosDtll as $modulo)
            <div class="row fila">
                <div class="col-sm-6 contenido">
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                    </div>
                    <div class="parrafo comentario-custom-color">
                        <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                    </div>
                </div>
                <div class="col-sm-6 imagen" >
                    <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" id="img-modulo{{$modulo->id}}" class="img-responsive img-original" alt="" data-pk="{{$modulo->id}}"/>
                    <a class="editar-imagen nomostrar" data-toggle="modal" data-target="#editarimagen" data-width="600" data-height="564" data-pk="{{$modulo->id}}" data-pry="{{$pry_modulo->id_proyecto}}"><i class="fa fa-pencil"></i></a>
                </div>
            </div>
        @endforeach
    </div>
</div>