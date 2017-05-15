
<link href="<?php echo URL::asset('/css/modulo_f5.css'); ?>" rel="stylesheet" type="text/css" />
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

    </style>
@endif
<style>
    #container-modulo_f5 .develop-by{
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }
    #container-modulo_f5 .editable-copyright{
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }
    @media (max-width: 1025px){
        #container-modulo_f5 .develop-by{
            font-size: <?php echo 11+ $proyecto->font_size?>px;
        }

        #container-modulo_f5 .editable-copyright{
            font-size: <?php echo 11+ $proyecto->font_size?>px;
        }
    }
</style>
<a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
<div id="container-modulo_f5" class="wrapper">
    <div  class="container" style="width: 100%; padding: 0" id="container{{$pry_modulo->idesPR}}">
        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">

            <div class="contenido col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                <div class="col-md-6 contacto">
                    <span class="develop-by titulo-custom-color">{!!trans('messages.develop_by')!!}:</span>
                    <span class="logo" style="position: relative">
                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" class="" alt="" data-pk="{{$pry_modulo->idesPR}}"/>
                        <span class="btn-file-logo nomostrar">
                            <span class="fa fa-folder-open-o"></span> <input type="file" id="file" class="file-logo" name="file">
                        </span>
                    </span>

                </div>
                <div class="col-md-6 footer">
                    <div class="comentario-custom-color">
                        <h3 class="editable-copyright" data-type="text" data-pk="{{$proyecto->id}}" data-name="copyright">{{$proyecto->copyright}}</h3>
                    </div>
                    <?php
                    $sociales = App\Console\Commands\Funciones::getSocial($pry_modulo->idesPR);
                    $cant=0;
                    ?>
                    <div class="redes-sociales" id="redes-sociales-f5">
                        @foreach($sociales as $social)
                            @if($social->url!='')
                                <span class="social">
                            @else
                                <span class="social hidden">
                            @endif
                                    <a class="{{$social->icono}} editsocial" id="socialicono{{$social->id}}" data-pk="{{$social->id}}" data-url="{{$social->url}}" data-icono="{{$social->icono}}" data-idred="{{$social->id_red_social}}" title=""  data-toggle="popover" data-trigger="click" data-popover-content="#popoversocial" target="_blank" href="{{$social->url}}"></a>
                                </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
