<link href="<?php echo URL::asset('/css/modulo_h_rayo.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
    </style>
@endif
<style>
    .rayo_rcs{
        width: 194px;
        height: 350px;
        position: relative;
        background: #5f5656;
    }
    .rayo_rc_rell{
        width: 194px;

        position: absolute;
        z-index: 2;
        bottom: 0;
        background: #DC3927;
    }
    .rayo_rc_img{
        width: 194px;
        height: auto;
        position: absolute;
        z-index: 3;
        bottom: 0;
    }
</style>
<div id="container-modulo_h_rayo">
    <div class="container fondo " id="container{{$pry_modulo->idesPR}}">
        <div class="col-sm-6">
            <img class="imagen-logo" src="{!!url('img/logo-rayo.png')!!}" class="img-responsive" alt="" style="padding-left: 10%;">
            <div class="texto-intro">
                <h5 class="parrafo col-md-12">Sigue los siguientes pasos:</h5>
                <div class="col-md-12 textos">
                    <img class="img-check-rayo" src="{!!url('img/imagescasitas/check-rayo.png')!!}" alt="">
                    <span class="titulo-formulario">Llena el formulario</span>
                    <br>
                    <hr class="linea">
                </div>

            </div>
            <div class="formulariocontacto">
                <input type="text" class="nomostrar" id="email_contacto_proyecto" value="{{$proyecto->email_formulario}}" />
                <input type="text" class="nomostrar" id="idproyecto" value="{{$proyecto->id}}" />
                <input type="text" class="nomostrar" id="contador_formulario_h-rayo" value="{{$proyecto->contador_formulario}}" />
                <div class="alert alert-danger alerta-errores-h-rayo nomostrar" style="background: none!important;">
                    <div class="errores-h-rayo">
                    </div>
                </div>
                <div class="alert alert-info alert-dismissable nomostrar spinner-h-rayo" style="background: none!important;">
                    <label style="text-align: center;"><i class="fa fa-spin fa-spinner"></i> {!!trans('validation.sending_message')!!}</label>
                </div>
                <div class="alert alert-success alert-dismissable nomostrar mensaje-enviado-h-rayo" style="background: none!important;">
                    <label>¡Gracias por unirte!</label>
                </div>
                <div class="form-group col-md-12" style="padding-bottom: 10px">
                    <label class="label-form">{!!trans('validation.attributes.name')!!}*</label><br>
                    <input type="text" class="taminput" id="name_h-rayo">
                    <br>
                </div>

                <div class="form-group col-md-12" style="padding-bottom: 10px">
                    <label class="label-form">{!!trans('validation.attributes.address')!!}</label><br>
                    <input type="text" class="taminput" id="address_h-rayo">
                    <br>
                </div>
                <div class="form-group col-md-6" style="padding-bottom: 10px">
                    <label class="label-form">{!!trans('validation.attributes.email')!!}*</label><br>
                    <input type="text" class="taminput" id="email_h-rayo">
                </div>
                <div class="form-group col-md-6" style="padding-bottom: 10px">
                    <label class="label-form">{!!trans('validation.attributes.phone')!!}* </label><br>
                    <input type="text" class="taminput" id="phone_h-rayo">
                    <br>
                </div>
                <div class="form-group col-md-6" style="padding-bottom: 10px">
                    <label class="label-form">Tu promo </label>
                    <div class="caja">
                        <select type="text" name="plazo" class="plazo letraselect taminput2 flechita" id="promo_h-rayo">
                            @for($i=1960; $i<=2015; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                        <br>
                    </div>
                </div>
                <div class="form-group col-md-6" style="padding-bottom: 60px; text-align: center;">
                    <button class="boton taminput2" type="button" id="botonsubmit_h-rayo">{!!trans('validation.attributes.send')!!}</button>
                </div>
            </div>
        </div>
        <div class="col-sm-6" align="center" style="padding: 4% 0 0 0;">
            <span class="negritag unete">ÚNETE</span> </p>
            <p class="impac">  <span class="negritag">YA SOMOS </span>
                <span class="negritarojo" id="contador_rayito">{{$proyecto->contador_formulario}}</span><br>IMPACTADOS POR EL RAYO</p>
            <div style="padding-top: 5%;">
                <div class="rayo_rcs">
                    <div class="rayo_rc_rell"></div>
                    <div class="rayo_rc_img"><img src="{!!url('img/rayo-calado.png')!!}" alt=""></div>
                </div>
            </div>
            <p class="negrita" style="line-height: 30px;">pero podemos ser más.<br>
        </div>
    </div>
</div>
<script>
    $('#botonsubmit_h-rayo').on('click', function(event) {

        $('.errores-h-rayo').empty();
        $('.alerta-errores-h-rayo').addClass('nomostrar');
        $('.spinner-h-rayo').removeClass('nomostrar');
        $('.mensaje-enviado-h-rayo').addClass('nomostrar');

        $('#name_h-rayo').removeClass('input-rojo');
        $('#email_h-rayo').removeClass('input-rojo');
        $('#phone_h-rayo').removeClass('input-rojo');

        var data = {};

        data._token = '{!!csrf_token()!!}';
        data.nombre = $('#name_h-rayo').val();
        data.email = $('#email_h-rayo').val();
        data.email_proyecto = $('#email_contacto_proyecto').val();
        data.telefono = $('#phone_h-rayo').val();
        data.direccion = $('#address_h-rayo').val();
        data.promo = $("#promo_h-rayo option:selected").text();
        data.idproyecto = $('#idproyecto').val();

        $.ajax({
            type: "POST",
            data: data,
            url: '{!! url('/formulariorayo') !!}',

            success: function(data) {
                if(data.success) {
                    $('#name_h-rayo').val('');
                    $('#email_h-rayo').val('');
                    $('#phone_h-rayo').val('');
                    $('#address_h-rayo').val('');

                    $('#message_h-rayo').val('');
                    $('.spinner-h-rayo').addClass('nomostrar');
                    $('.mensaje-enviado-h-rayo').removeClass('nomostrar');
                    $('#contador_rayito').text(data.contador);
                    incrementarRayo(data.contador);
                }
                else
                {
                    $('.alerta-errores-h-rayo').removeClass('nomostrar');
                    var errorString = '<ul>';
                    $.each( data.errors, function( key, value) {
                        errorString += '<li>' + value + '</li>';
                        if(key=='name')
                        {
                            $('#name_h-rayo').addClass('input-rojo');
                        }
                        if(key=='email')
                        {
                            $('#email_h-rayo').addClass('input-rojo');
                        }
                        if(key=='phone')
                        {
                            $('#phone_h-rayo').addClass('input-rojo');
                        }
                    });
                    errorString += '</ul></div>';
                    $('.errores-h-rayo').append(errorString);
                    $('.spinner-h-rayo').addClass('nomostrar');
                    $('.mensaje-enviado-h-rayo').addClass('nomostrar');
                }
            },
            error: function (data) {
                $('.spinner-h-rayo').addClass('nomostrar');
                $('.mensaje-enviado-h-rayo').addClass('nomostrar');
                $('.alerta-errores-h-rayo').removeClass('nomostrar');
                $('.errores-h-rayo').append('{!!trans('validation.error_sending')!!}');

            }
        });

    });

    function incrementarRayo(contador)
    {
        var porcentaje = Math.round(350 * contador / 1000);
        $('.rayo_rc_rell').css('height', porcentaje + 'px');
    }
    $(document).ready(function() {
        var contador = '{{$proyecto->contador_formulario}}';
        incrementarRayo(contador);
    });
</script>