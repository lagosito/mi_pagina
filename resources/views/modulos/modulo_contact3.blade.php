
<link href="<?php echo URL::asset('/css/build.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('/css/modulo_contact3.css'); ?>" rel="stylesheet" type="text/css" />
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
        #container{{$pry_modulo->idesPR}} .fondo-boton {
            background-color: {{$combinacion->color_boton}};
        }
    </style>
@endif
<style>
    #container-modulo_contact3 .titulo{
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo_contact3 .parrafo{
        font-size: <?php echo 16+ $proyecto->font_size?>px;
    }
    #container-modulo_contact3 .labelcontacto{
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }
    #container-modulo_contact3 .enviarformcontacto{
        font-size: <?php echo 17+ $proyecto->font_size?>px;
    }
    @media (max-width: 260px){
        #container-modulo_contact3 .enviarformcontacto, #container-modulo_contact3 .parrafo{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
        #container-modulo_contact3 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 364px) and (min-width: 261px){
        #container-modulo_contact3 .enviarformcontacto, #container-modulo_contact3 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_contact3 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 768px) and (min-width: 365px){
        #container-modulo_contact3 .enviarformcontacto, #container-modulo_contact3 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_contact3 .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_contact3" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        @foreach($modulosDtll as $modulo)
        <div class="encabezado">
            <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
            </div>
            <br/>
            <div class="parrafo comentario-custom-color">
                <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
            </div>
        </div>
        @endforeach
        <br/>
        <br/>
        <div class="formulariocontacto">
            <div class="form-group col-md-6" style="padding-bottom: 20px">
                <label for="nombre" class="labelcontacto">{!!trans('validation.attributes.name')!!}</label><br/>
                <input type="text" class="inputrounded"/>
            </div>
            <div class="form-group col-md-6" style="padding-bottom: 20px">
                <label for="nombre" class="labelcontacto">{!!trans('validation.attributes.email')!!}</label><br/>
                <input type="text" class="inputrounded"/>
                <br/>
            </div>

            <div class="form-group col-md-12" style="padding-bottom: 20px">
                <label for="nombre" class="labelcontacto">{!!trans('validation.attributes.phone')!!}</label><br/>
                <input type="text" class="inputrounded"/>
                <br/>
            </div>

            <div class="form-group col-md-12" style="padding-bottom: 20px">
                <label for="nombre" class="labelcontacto">{!!trans('validation.attributes.message')!!}</label><br/>
                <textarea  class="inputrounded"></textarea>
            </div>
            <!--div class=" col-md-12 checkbox checkbox-info checkbox-circle" style="padding-bottom: 20px; text-align: center">
                <input id="checkbox8" class="styled" type="checkbox">
                <label class="textnormal" for="checkbox8">
                    Yes, I want to recive the newsletter
                </label>
            </div-->
            <div class="form-group col-md-12" style="padding-bottom: 60px; text-align: center;">
                <button class="enviarformcontacto editable fondo-boton" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo" type="submit">{!!$modulo->subtitulo!!}</button>
            </div>
        </div>


    </div>

</div>
