
<link href="<?php echo URL::asset('/css/build.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('/css/modulo_contact5.css'); ?>" rel="stylesheet" type="text/css" />
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
            border-color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .fondo-boton {
            background-color: {{$combinacion->color_boton}};
        }
        #container{{$pry_modulo->idesPR}} .checkbox-success input[type="checkbox"]:checked + label::before,
        #container{{$pry_modulo->idesPR}} .checkbox-success input[type="radio"]:checked + label::before {
            background-color: {{$combinacion->color_boton}};
            border-color: {{$combinacion->color_boton}};
        }
    </style>
@endif
<style>
    #container-modulo_contact5 .titulo{
        font-size: <?php echo 56+ $proyecto->font_size?>px;
    }
    #container-modulo_contact5 .textnormal{
        font-size: <?php echo 12+ $proyecto->font_size?>px;
    }
    #container-modulo_contact5 .inputrounded, #container-modulo_contact5 .tituloformulario, #container-modulo_contact5 .titulo-contacto {
        font-size: <?php echo 14+ $proyecto->font_size?>px;
    }
    #container-modulo_contact5 .enviarformcontacto{
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }
    #container-modulo_contact5 .parrafo, #container-modulo_contact5 .subtitulo-contacto, #container-modulo_contact5 .parrafo-contacto{
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }
    @media (max-width: 260px) {
        #container-modulo_contact5 .titulo{
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
        #container-modulo_contact5 .tituloformulario{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_contact5 .enviarformcontacto{
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
        #container-modulo_contact5 .parrafo{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 364px) and (min-width: 261px){
        #container-modulo_contact5 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_contact5 .tituloformulario{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_contact5 .enviarformcontacto{
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
        #container-modulo_contact5 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 768px) and (min-width: 365px){
        #container-modulo_contact5 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_contact5 .tituloformulario{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_contact5 .enviarformcontacto{
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
        #container-modulo_contact5 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }

    }
</style>
<div id="container-modulo_contact5" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="col-sm-12" style="background-color: rgba(0,0,0,0.6); height: 100%; padding-bottom: 6%;">
        @foreach($modulosDtll as $modulo)
            @if($cont==0)
                <div class="encabezado" style="padding-top: 5%">
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
                    </div>
                    <br/>
                    <div class="parrafo comentario-custom-color">
                        <p class="editable" data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                    </div>
                </div>
            @elseif($cont==1)
                <div class="col-md-6 cajaformulario" >
                    <div class="formulariocontacto col-md-12">
                        <div class="tituloformulario titulo-custom-color col-md-12">
                            <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
                        </div>
                        <br/>
                        <input type="text" class="nomostrar" id="email_contacto_proyecto" value="{{$proyecto->email_formulario}}" />
                        <div class="alert alert-danger alerta-errores-contact5 nomostrar" style="background: none!important;">
                            <div class="errores-contact5">
                            </div>
                        </div>
                        <div class="alert alert-info alert-dismissable nomostrar spinner-contact5" style="background: none!important;">
                            <label style="text-align: center;"><i class="fa fa-spin fa-spinner"></i> {!!trans('validation.sending_message')!!}...</label>
                        </div>
                        <div class="alert alert-success alert-dismissable nomostrar mensaje-enviado-contact5" style="background: none!important;">
                            <label>{!!trans('validation.send_successful')!!}</label>
                        </div>
                        <div class="form-group col-md-12" style="padding-bottom: 10px">
                            <input type="text" class="inputrounded" id="email_contact5" placeholder="{!!trans('validation.attributes.email')!!}"/>
                            <br/>
                        </div>
                        <div class="form-group col-md-6" style="padding-bottom: 10px">
                            <input type="text" class="inputrounded" id="name_contact5" placeholder="{!!trans('validation.attributes.name')!!}"/>
                        </div>
                        <div class="form-group col-md-6" style="padding-bottom: 10px">
                            <input type="text" class="inputrounded" id="phone_contact5" placeholder="{!!trans('validation.attributes.phone')!!}" />
                            <br/>
                        </div>

                        <div class="form-group col-md-12" style="padding-bottom: 10px">
                            <textarea  class="inputrounded" style="resize: none" id="message_contact5" placeholder="{!!trans('validation.attributes.message')!!}"></textarea>
                        </div>
                        <div class=" col-md-6 checkbox checkbox-success checkbox-circle" style="padding-bottom: 10px; padding-left: 7%">
                            <input id="checkbox8" class="styled" type="checkbox" checked>
                            <label class="check" for="checkbox8">
                                <h1 class="textnormal editable comentario-custom-color" data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</h1>
                            </label>
                        </div>
                        <div class="form-group col-md-6"  style="text-align: right;" align="right">
                            <button id="botonsubmit_contact5" class="enviarformcontacto fondo-boton editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo" type="submit">{!!$modulo->subtitulo!!}</button>
                        </div>
                    </div>
                </div>
            @elseif($cont==2)
                <div class="col-md-6 datos-contacto" >
                    <div class="titulo-contacto titulo-custom-color col-md-12">
                        <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="subtitulo-contacto subtitulo-custom-color">
                            <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h1>
                        </div>
                        <div class="parrafo-contacto comentario-custom-color">
                            <p class="editable" data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                    </div>

            @elseif($cont==4)
                    <div class="col-md-12">
                        <div class="subtitulo-contacto subtitulo-custom-color">
                            <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h1>
                        </div>
                        <div class="parrafo-contacto comentario-custom-color">
                            <p class="editable" data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                    </div>
            @else
                    <div class="col-md-6">
                        <div class="subtitulo-contacto subtitulo-custom-color">
                            <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h1>
                        </div>
                        <div class="parrafo-contacto comentario-custom-color">
                            <p class="editable" data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                    </div>
            @endif
            <?php $cont++ ?>
        @endforeach
                </div>
            <br/>
            <br/>
            </div>
        </div>
    </div>
</div>
<script>
    $('#botonsubmit_contact5').on('click', function(event) {

        $('.errores-contact5').empty();
        $('.alerta-errores-contact5').addClass('nomostrar');
        $('.spinner-contact5').removeClass('nomostrar');
        $('.mensaje-enviado-contact5').addClass('nomostrar');

        $('#name_contact5').removeClass('input-rojo');
        $('#email_contact5').removeClass('input-rojo');
        $('#message_contact5').removeClass('input-rojo');

        var data = {};

        data._token = '{!!csrf_token()!!}';
        data.nombre = $('#name_contact5').val();
        data.email = $('#email_contact5').val();
        data.email_proyecto = $('#email_contacto_proyecto').val();
        data.telefono = $('#phone_contact5').val();
        data.mensaje = $('#message_contact5').val();

        $.ajax({
            type: "POST",
            data: data,
            url: '{!! url('/formulariocontacto') !!}',

            success: function(data) {
                if(data.success) {
                    $('#name_contact5').val('');
                    $('#email_contact5').val('');
                    $('#phone_contact5').val('');

                    $('#message_contact5').val('');
                    $('.spinner-contact5').addClass('nomostrar');
                    $('.mensaje-enviado-contact5').removeClass('nomostrar');
                }
                else
                {
                    $('.alerta-errores-contact5').removeClass('nomostrar');
                    var errorString = '<ul>';
                    $.each( data.errors, function( key, value) {
                        errorString += '<li>' + value + '</li>';
                        if(key=='nombre')
                        {
                            $('#name_contact5').addClass('input-rojo');
                        }
                        if(key=='email')
                        {
                            $('#email_contact5').addClass('input-rojo');
                        }
                        if(key=='mensaje')
                        {
                            $('#message_contact5').addClass('input-rojo');
                        }
                    });
                    errorString += '</ul></div>';
                    $('.errores-contact5').append(errorString);
                    $('.spinner-contact5').addClass('nomostrar');
                    $('.mensaje-enviado-contact5').addClass('nomostrar');
                }
            },
            error: function (data) {
                $('.spinner-contact5').addClass('nomostrar');
                $('.mensaje-enviado-contact5').addClass('nomostrar');
                $('.alerta-errores-contact5').removeClass('nomostrar');
                $('.errores-contact5').append('{!!trans('validation.error_sending')!!}');

            }
        });

    });
</script>