
<link href="<?php echo URL::asset('/css/modulo_contact1.css'); ?>" rel="stylesheet" type="text/css" />
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
        #container{{$pry_modulo->idesPR}} .fondo-boton {
            background-color: {{$combinacion->color_boton}};
        }
    </style>
@endif
<style>
    #container-modulo_contact1 .subtitulo, #container-modulo_contact1 .labelcontacto, #container-modulo_contact1 .enviarformcontacto{
        font-size: <?php echo 11+ $proyecto->font_size?>px;
    }
    #container-modulo_contact1 .parrafo{
        font-size: <?php echo 16+ $proyecto->font_size?>px;
    }
    #container-modulo_contact1 .tituloformulario{
        font-size: <?php echo 45+ $proyecto->font_size?>px;
    }
    #container-modulo_contact1 .parrafo-formulario{
        font-size: <?php echo 16+ $proyecto->font_size?>px;
    }
    @media (max-width: 260px){
        #container-modulo_contact1 .enviarformcontacto, #container-modulo_contact1 .parrafo-formulario{
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
        #container-modulo_contact1 .subtitulo{
            font-size: <?php echo 9+ $proyecto->font_size?>px;
        }
        #container-modulo_contact1 .parrafo{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
        #container-modulo_contact1 .tituloformulario{
            font-size: <?php echo 20+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 768px) and (min-width: 261px){
        #container-modulo_contact1 .enviarformcontacto{
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
        #container-modulo_contact1 .subtitulo{
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
        #container-modulo_contact1 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_contact1 .parrafo-formulario{
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
        #container-modulo_contact1 .tituloformulario{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
    }

</style>
<div id="container-modulo_contact1" class="wrapper">

    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <!--<div class="col-sm-12" style="background-color: rgba(0,0,0,0.6); height: 100%; padding-bottom: 6%;">-->
            <div class="col-sm-12" style="height: 100%;">

                <div class="row">
                    @foreach($modulosDtll as $modulo)
                        @if($cont==0)
                            <div class="contacto col-md-6">
                                <br/><br/><br/>
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
                            <div class="parrafo-formulario">
                                <p class="editable" data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                            </div>
                            <br/><br/><br/>
                            <input type="text" class="nomostrar" id="email_contacto_proyecto" value="{{$proyecto->email_formulario}}" />
                            <div class="alert alert-danger alerta-errores-contact1 nomostrar" style="background: none!important;">
                                <div class="errores-contact1">
                                </div>
                            </div>
                            <div class="alert alert-info alert-dismissable nomostrar spinner-contact1" style="background: none!important;">
                                <label style="text-align: center;"><i class="fa fa-spin fa-spinner"></i> {!!trans('validation.sending_message')!!}...</label>
                            </div>
                            <div class="alert alert-success alert-dismissable nomostrar mensaje-enviado-contact1" style="background: none!important;">
                                <label>{!!trans('validation.send_successful')!!}</label>
                            </div>
                            <div class="form-group col-md-6" style="padding-bottom: 10px">
                                <label for="nombre" class="labelcontacto">{!!trans('validation.attributes.name')!!}</label><br/>
                                <input type="text" class="inputrounded" id="name_contact1" />
                            </div>
                            <div class="form-group col-md-6" style="padding-bottom: 10px">
                                <label for="nombre" class="labelcontacto">{!!trans('validation.attributes.email')!!}</label><br/>
                                <input type="text" class="inputrounded" id="email_contact1"/>
                                <br/>
                            </div>
                            <div class="form-group col-md-12" style="padding-bottom: 10px">
                                <label for="nombre" class="labelcontacto">{!!trans('validation.attributes.message')!!}</label><br/>
                                <textarea  class="inputrounded" style="resize: none" id="message_contact1"></textarea>
                            </div>

                            <div class="form-group col-md-6 col-md-offset-3"  style="text-align: center;" align="center">
                                <br/><br/>
                                <button id="botonsubmit_contact1" class="enviarformcontacto fondo-boton editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo" type="submit">{!!$modulo->subtitulo!!}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#botonsubmit_contact1').on('click', function(event) {

        $('.errores-contact1').empty();
        $('.alerta-errores-contact1').addClass('nomostrar');
        $('.spinner-contact1').removeClass('nomostrar');
        $('.mensaje-enviado-contact1').addClass('nomostrar');

        $('#name_contact1').removeClass('input-rojo');
        $('#email_contact1').removeClass('input-rojo');
        $('#message_contact1').removeClass('input-rojo');

        var data = {};

        data._token = '{!!csrf_token()!!}';
        data.nombre = $('#name_contact1').val();
        data.email = $('#email_contact1').val();
        data.email_proyecto = $('#email_contacto_proyecto').val();
        data.telefono = $('#phone_contact1').val();
        data.mensaje = $('#message_contact1').val();

        $.ajax({
            type: "POST",
            data: data,
            url: '{!! url('/formulariocontacto') !!}',

            success: function(data) {
                if(data.success) {
                    $('#name_contact1').val('');
                    $('#email_contact1').val('');
                    $('#phone_contact1').val('');

                    $('#message_contact1').val('');
                    $('.spinner-contact1').addClass('nomostrar');
                    $('.mensaje-enviado-contact1').removeClass('nomostrar');
                }
                else
                {
                    $('.alerta-errores-contact1').removeClass('nomostrar');
                    var errorString = '<ul>';
                    $.each( data.errors, function( key, value) {
                        errorString += '<li>' + value + '</li>';
                        if(key=='nombre')
                        {
                            $('#name_contact1').addClass('input-rojo');
                        }
                        if(key=='email')
                        {
                            $('#email_contact1').addClass('input-rojo');
                        }
                        if(key=='mensaje')
                        {
                            $('#message_contact1').addClass('input-rojo');
                        }
                    });
                    errorString += '</ul></div>';
                    $('.errores-contact1').append(errorString);
                    $('.spinner-contact1').addClass('nomostrar');
                    $('.mensaje-enviado-contact1').addClass('nomostrar');
                }
            },
            error: function (data) {
                $('.spinner-contact1').addClass('nomostrar');
                $('.mensaje-enviado-contact1').addClass('nomostrar');
                $('.alerta-errores-contact1').removeClass('nomostrar');
                $('.errores-contact1').append('{!!trans('validation.error_sending')!!}');

            }
        });

    });
</script>