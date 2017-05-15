<link href="<?php echo URL::asset('/css/build.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('/css/modulo_contact2.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color{
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
            color: {{$combinacion->subtitulo}};
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
    #container-modulo_contact2 .titulo{
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo_contact2 .subtitulo, #container-modulo_contact2 .labelcontacto{
        font-size: <?php echo 11+ $proyecto->font_size?>px;
    }
    #container-modulo_contact2 .parrafo{
        font-size: <?php echo 16+ $proyecto->font_size?>px;
    }
    #container-modulo_contact2 .tituloformulario{
        font-size: <?php echo 35+ $proyecto->font_size?>px;
    }
    #container-modulo_contact2 .enviarformcontacto{
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }
    @media (max-width: 260px){
       #container-modulo_contact2 .tituloformulario{
           font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_contact2 .enviarformcontacto{
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
        #container-modulo_contact2 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_contact2 .subtitulo{
            font-size: <?php echo 11+ $proyecto->font_size?>px;
        }
        #container-modulo_contact2 .parrafo{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
        #container-modulo_contact2 .tituloformulario{
            font-size: <?php echo 20+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 768px) and (min-width: 261px){
        #container-modulo_contact2 .tituloformulario{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_contact2 .enviarformcontacto{
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
        #container-modulo_contact2 .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_contact2 .subtitulo{
            font-size: <?php echo 11+ $proyecto->font_size?>px;
        }
        #container-modulo_contact2 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_contact2 .tituloformulario{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_contact2" class="wrapper">

    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
            <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <!--<div class="col-sm-12" style="background-color: rgba(0,0,0,0.6); height: 100%; padding-bottom: 6%;">-->
            <div class="col-sm-12" style="height: 100%; padding-bottom: 6%;">

                <div class="row">
                    @foreach($modulosDtll as $modulo)
                        @if($cont==0)
                            <div class="contacto col-md-6">
                                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}" >
                                    <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
                                </div>
                                <br/>
                                <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">
                                    <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h1>
                                </div>
                                <div class="parrafo division comentario-custom-color">
                                    <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                                </div>
                        @elseif($cont==1)
                                <br/>
                                <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">
                                    <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h1>
                                </div>
                                <div class="parrafo comentario-custom-color">
                                    <p class="editable" data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                                </div>
                            </div>
                        @endif
                        <?php $cont++;?>
                    @endforeach
                    <div class="col-md-6 cajaformulario" >
                        <div class="formulariocontacto col-md-12">
                            <div class="tituloformulario titulo-custom-color">
                                <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
                            </div>
                            <br/>
                            <input type="text" class="nomostrar" id="email_contacto_proyecto" value="{{$proyecto->email_formulario}}" />
                            <div class="alert alert-danger alerta-errores-contact2 nomostrar" style="background: none!important;">
                                <div class="errores-contact2">
                                </div>
                            </div>
                            <div class="alert alert-info alert-dismissable nomostrar spinner-contact2" style="background: none!important;">
                                <label style="text-align: center;"><i class="fa fa-spin fa-spinner"></i> {!!trans('validation.sending_message')!!}...</label>
                            </div>
                            <div class="alert alert-success alert-dismissable nomostrar mensaje-enviado-contact2" style="background: none!important;">
                                <label>¡Gracias por contactarnos! Le enviaremos la información lo antes posible.</label>
                            </div>
                            <div class="form-group col-md-6" style="padding-bottom: 10px">
                                <label for="nombre" class="labelcontacto">{!!trans('validation.attributes.name')!!}</label><br/>
                                <input type="text" class="inputrounded" id="name_contact2" />
                            </div>
                            <div class="form-group col-md-6" style="padding-bottom: 10px">
                                <label for="nombre" class="labelcontacto">{!!trans('validation.attributes.phone')!!}</label><br/>
                                <input type="text" class="inputrounded" id="phone_contact2" />
                                <br/>
                            </div>
                            <div class="form-group col-md-12" style="padding-bottom: 10px">
                                <label for="nombre" class="labelcontacto">{!!trans('validation.attributes.email')!!}</label><br/>
                                <input type="text" class="inputrounded" id="email_contact2"/>
                                <br/>
                            </div>
                            <div class="form-group col-md-12" style="padding-bottom: 10px">
                                <label for="nombre" class="labelcontacto">{!!trans('validation.attributes.message')!!}</label><br/>
                                <textarea  class="inputrounded" style="resize: none" id="message_contact2"></textarea>
                            </div>
                            <!--<div class=" col-md-6 checkbox checkbox-success checkbox-circle" style="padding-bottom: 10px; padding-left: 7%">
                                <input id="checkbox8" class="styled" type="checkbox" checked>
                                <label class="check" for="checkbox8">
                                    <h1 class="textnormal editable" data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</h1>
                                </label>
                            </div>-->
                            <div class="form-group col-md-6"  style="text-align: center;">
                                <button id="botonsubmit_contact2" class="enviarformcontacto  editable fondo-boton" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo" type="submit">{!!$modulo->subtitulo!!}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#botonsubmit_contact2').on('click', function(event) {

        $('.errores-contact2').empty();
        $('.alerta-errores-contact2').addClass('nomostrar');
        $('.spinner-contact2').removeClass('nomostrar');
        $('.mensaje-enviado-contact2').addClass('nomostrar');

        $('#name_contact2').removeClass('input-rojo');
        $('#email_contact2').removeClass('input-rojo');
        $('#message_contact2').removeClass('input-rojo');

        var data = {};

        data._token = '{!!csrf_token()!!}';
        data.nombre = $('#name_contact2').val();
        data.email = $('#email_contact2').val();
        data.email_proyecto = $('#email_contacto_proyecto').val();
        data.telefono = $('#phone_contact2').val();
        data.mensaje = $('#message_contact2').val();

        $.ajax({
            type: "POST",
            data: data,
            url: '{!! url('/formulariocontacto') !!}',

            success: function(data) {
                if(data.success) {
                    $('#name_contact2').val('');
                    $('#email_contact2').val('');
                    $('#phone_contact2').val('');

                    $('#message_contact2').val('');
                    $('.spinner-contact2').addClass('nomostrar');
                    $('.mensaje-enviado-contact2').removeClass('nomostrar');
                }
                else
                {
                    $('.alerta-errores-contact2').removeClass('nomostrar');
                    var errorString = '<ul>';
                    $.each( data.errors, function( key, value) {
                        errorString += '<li>' + value + '</li>';
                        if(key=='nombre')
                        {
                            $('#name_contact2').addClass('input-rojo');
                        }
                        if(key=='email')
                        {
                            $('#email_contact2').addClass('input-rojo');
                        }
                        if(key=='mensaje')
                        {
                            $('#message_contact2').addClass('input-rojo');
                        }
                    });
                    errorString += '</ul></div>';
                    $('.errores-contact2').append(errorString);
                    $('.spinner-contact2').addClass('nomostrar');
                    $('.mensaje-enviado-contact2').addClass('nomostrar');
                }
            },
            error: function (data) {
                $('.spinner-contact2').addClass('nomostrar');
                $('.mensaje-enviado-contact2').addClass('nomostrar');
                $('.alerta-errores-contact2').removeClass('nomostrar');
                $('.errores-contact2').append('{!!trans('validation.error_sending')!!}');

            }
        });

    });
</script>