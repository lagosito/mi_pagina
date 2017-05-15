<link href="<?php echo URL::asset('/css/modulo_f_casita.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}}{
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
            color: {{$combinacion->subtitulo}};
        }
        #container{{$pry_modulo->idesPR}} .fondo-boton {
            background-color: {{$combinacion->color_boton}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif

<div id="container-modulo_f_casita">
    <div class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="comoayudar" id="comoayudar"></a>
        <div class="hazte-socio">
            <div class="col-md-5">
                <!--img class="imagen" src="{!!url('img/imagescasitas/logo-circulo-100px.png')!!}" class="img-responsive" alt=""-->
                <input type="text" class="nomostrar" id="email_contacto_proyecto" value="{{$proyecto->email_formulario}}" />

                <?php
                $cont = 0;
                $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
                ?>
                @foreach($modulosDtll as $modulo)
                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{{$modulo->titulo}}</h1>
                    <br><br>
                </div>
                <div class="parrafo-titulo subtitulo-custom-color">
                    <h6 class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="subtitulo">{{$modulo->subtitulo}}</h6>
                </div>
                <div class=" col-md-12 alerta-errores-f_casita nomostrar" style="background: none!important;">
                    <div class="errores-f_casita alert alert-danger" style="background: none!important; color:black; border-color:black">
                    </div>
                </div>
                <div class="col-md-12 alert-dismissable nomostrar spinner-f_casita" style="background: none!important;">
                    <div class="alert alert-info" style="background: none!important;color:black; border-color:black">
                        <label style="text-align: center;"><i class="fa fa-spin fa-spinner"></i> Enviando mensaje...</label>
                    </div>
                </div>
                <div class="col-md-12 alert-dismissable nomostrar mensaje-enviado-f_casita" style="background: none!important;">
                    <div class="alert alert-success" style="background: none!important;color:black; border-color:black">
                        <label>¡Gracias por unirte!</label>
                    </div>
                </div>
                <div class="formulario-casitas">
                    <div class="col-md-12 input-casita">
                        <input type="text" class="inputtam" placeholder="Nombres" id="name_f_casita">
                    </div>
                    <div class="col-md-12 input-casita">
                        <input type="text" class="inputtam"  placeholder="Correo" id="email_f_casita">
                    </div>
                    <div class="col-md-12 input-casita">
                        <input type="text" class="inputtam"  placeholder="Teléfono" id="phone_f_casita">
                    </div>
                    <div class="col-md-8 textarea-casita">
                        <textarea class="taminput"  placeholder="Comentarios" id="comentarios_f_casita"></textarea>
                    </div>
                    <div class="col-md-4 caja-btn-enviar">
                        <button class="btnenviar fondo-boton" style="font-weight: 900;" type="button" id="botonsubmit_f_casita">ENVIAR</button>
                    </div>
                </div>
            </div>
            <div class="col-md-7" style="padding-right: 4%">
                <div class="youtube-container">
                    <div class="youtube-player" data-id="{{$modulo->video}}"  data-modulo="{{$modulo->id}}"></div>
                </div>
            </div>
        </div>
        <!--div class="col-md-12">
            <hr class="colorhr">
        </div-->
        <div class="col-md-12 piepagina">
            <div class="col-sm-6 contacto" >
                <div class="subtitulo comentario-custom-color {{$proyecto->tipografia_titulos}}">
                    <h6>Contacto</h6>
                </div>
                <div class="parrafo comentario-custom-color">
                   <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{{$modulo->comentario}}</p>
                </div>
             </div>
            <div class="col-sm-6 logopie" align="center">
                <img align="center" src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" class="imagen1" alt="" data-pk="{{$pry_modulo->idesPR}}" style="width: 155px"/>
                <span class="btn-file-logo nomostrar" style=" right: 0; padding-left: 10px">
                    <span class="fa fa-folder-open-o"></span> <input type="file" id="file" class="file-logo" name="file">
                </span>
            </div>
        </div>
    </div>
    @endforeach
</div>
<script>
    $('#botonsubmit_f_casita').on('click', function(event) {

        $('.errores-f_casita').empty();
        $('.alerta-errores-f_casita').addClass('nomostrar');
        $('.spinner-f_casita').removeClass('nomostrar');
        $('.mensaje-enviado-f_casita').addClass('nomostrar');

        $('#name_f_casita').removeClass('input-rojo');
        $('#email_f_casita').removeClass('input-rojo');
        $('#phone_f_casita').removeClass('input-rojo');

        var data = {};

        data._token = '{!!csrf_token()!!}';
        data.nombre = $('#name_f_casita').val();
        data.email = $('#email_f_casita').val();
        data.email_proyecto = $('#email_contacto_proyecto').val();
        data.telefono = $('#phone_f_casita').val();
        data.comentarios = $('#comentarios_f_casita').val();

        $.ajax({
            type: "POST",
            data: data,
            url: '{!! url('/formulariojesuita') !!}',

            success: function(data) {
                if(data.success) {
                    $('#name_f_casita').val('');
                    $('#email_f_casita').val('');
                    $('#phone_f_casita').val('');

                    $('#message_f_casita').val('');
                    $('.spinner-f_casita').addClass('nomostrar');
                    $('.mensaje-enviado-f_casita').removeClass('nomostrar');
                }
                else
                {
                    $('.alerta-errores-f_casita').removeClass('nomostrar');
                    var errorString = '<ul>';
                    $.each( data.errors, function( key, value) {
                        errorString += '<li>' + value + '</li>';
                        if(key=='nombre')
                        {
                            $('#name_f_casita').addClass('input-rojo');
                        }
                        if(key=='email')
                        {
                            $('#email_f_casita').addClass('input-rojo');
                        }
                        if(key=='telefono')
                        {
                            $('#phone_f_casita').addClass('input-rojo');
                        }
                    });
                    errorString += '</ul></div>';
                    $('.errores-f_casita').append(errorString);
                    $('.spinner-f_casita').addClass('nomostrar');
                    $('.mensaje-enviado-f_casita').addClass('nomostrar');
                }
            },
            error: function (data) {
                $('.spinner-f_casita').addClass('nomostrar');
                $('.mensaje-enviado-f_casita').addClass('nomostrar');
                $('.alerta-errores-f_casita').removeClass('nomostrar');
                $('.errores-f_casita').append('No se pudo enviar');

            }
        });

    });
</script>