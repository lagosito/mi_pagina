<link href="<?php echo URL::asset('/css/build.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('/css/modulo_contact6.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>

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
        #container-modulo_contact6 .checkbox-success input[type="checkbox"]:checked + label::before,
         #container-modulo_contact6 .checkbox-success input[type="radio"]:checked + label::before {
             background-color: {{$combinacion->color_boton}};
             border-color: {{$combinacion->color_boton}};
         }
    </style>
@endif
<a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
<div id="container-modulo_contact6" class="wrapper">
    <div  class="container" style="width: 100%; padding: 0" id="container{{$pry_modulo->idesPR}}">
        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <?php
            $cont = 0;
            $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
            ?>
            <div class="col-sm-10 col-sm-offset-1 contenido">
                @foreach($modulosDtll as $modulo)
                    <div class="col-md-6 contacto">
                        <div class="col-md-8 col-md-offset-1">
                            <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                                <h1 class="editable" data-pk="{{$modulo->id}}" data-type="text"  data-name="titulo">
                                   {{$modulo->titulo}}</h1>
                            </div>
                            <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">
                                <h2 class="editable" data-pk="{{$modulo->id}}" data-type="text"  data-name="subtitulo">
                                    {{$modulo->subtitulo}}</h2>
                            </div>
                            <div class="email-form comentario-custom-color">
                                <p>{!! $proyecto->email_formulario !!}</p>
                            </div>
                            <div class="parrafo comentario-custom-color">
                                <p class="editable" data-pk="{{$modulo->id}}" data-type="textarea"  data-name="comentario">
                                    {{$modulo->comentario}}
                                </p>
                            </div>
                            <?php
                            $sociales = App\Console\Commands\Funciones::getSocial($pry_modulo->idesPR);
                            $cant=0;
                            ?>
                            <div class="redes-sociales col-sm-12" id="redes-sociales-contact6">
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
                @endforeach
                    <div class="col-md-6 formulario-contact6" >

                        <div  class="formulario-inputs col-md-12">
                            <div class="col-md-12">
                                <div class="titulo-form titulo-custom-color {{$proyecto->tipografia_titulos}}">
                                    <h1>{!!trans('messages.write_us')!!}</h1>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="alert  alerta-errores-form nomostrar" style="background: none!important;">
                                    <div class="errores-form">
                                    </div>
                                </div>
                                <div class="alert  alert-dismissable nomostrar spinner-form" style="background: none!important;">
                                    <label style="text-align: center;"><i class="fa fa-spin fa-spinner"></i>{!!trans('validation.sending_message')!!}</label>
                                </div>
                                <div class="alert alert-dismissable nomostrar mensaje-enviado-form" style="background: none!important;">
                                    <label>{!!trans('validation.send_successful')!!}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="label-form">{!!trans('validation.attributes.name')!!}</label>
                                <input class="white-input" type="text" placeholder="{!!trans('validation.attributes.name')!!}" id="nombre_form">
                            </div>
                            <div class="col-md-6">
                                <label class="label-form">{!!trans('messages.select')!!}</label>
                                <input class="white-input" type="text" placeholder="" id="select_form">
                            </div>
                            <div class="col-md-12">
                                <input class="white-input" type="text" placeholder="{!!trans('validation.attributes.email')!!}" id="email_form">
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="{!!trans('validation.attributes.message')!!}" id="mensaje_form"> </textarea>
                            </div>

                            <input type="text" class="nomostrar" id="email_contacto_proyecto" value="{{$proyecto->email_formulario}}" />
                            <div class="actions col-md-12">
                                <div class=" col-md-6 checkbox checkbox-success checkbox-circle" style="padding-bottom: 10px; padding-left: 7%">
                                    <input id="agree" class=" agree-checkbox styled" type="checkbox" checked>
                                    <label class="check" for="agree">
                                        <span><a class="terms-texto comentario-custom-color" href="javascript:;" data-toggle="modal" data-target="#agree-modal">{!!trans('validation.agree_terms')!!}</a></span>
                                    </label>
                                </div>
                                <div class="form-group col-md-6"  style="text-align: center;">
                                    <button id="botonsubmit_form" class="enviarformcontacto" type="submit">{!!trans('validation.attributes.send')!!}</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<div id="agree-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content" style="border-radius: 0">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Términos y condiciones</h4>
            </div>
            <div class="modal-body" style="clear: both">
                <p style="white-space: pre-line;">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original.
                    Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
            </div>

        </div>
    </div>
</div>
@if($editar==0)
    <script>

        $('#botonsubmit_sanfer').on('click', function(event) {

            $('.errores-sanfer').empty();
            $('.alerta-errores-sanfer').addClass('nomostrar');
            $('.mensaje-enviado-sanfer').addClass('nomostrar');
            if($('#agree').is(":checked"))
            {
                $('.spinner-sanfer').removeClass('nomostrar');


                var data = {};

                data._token = '{!!csrf_token()!!}';
                data.nombre = $('#nombre_sanfer').val();
                data.apellido = $('#apellido_sanfer').val();
                data.empresa = $('#empresa_sanfer').val();
                data.email = $('#email_sanfer').val();
                data.email_proyecto = $('#email_contacto_proyecto').val();
                data.telefono = $('#fono_sanfer').val();
                data.mensaje = $('#mensaje_sanfer').val();

                $.ajax({
                    type: "POST",
                    data: data,
                    url: '{!! url('/formulariosanfer') !!}',

                    success: function(data) {
                        if(data.success) {
                            $('#nombre_sanfer').val('');
                            $('#apellido_sanfer').val('');
                            $('#empresa_sanfer').val('');
                            $('#email_sanfer').val('');
                            $('#fono_sanfer').val('');
                            $('#mensaje_sanfer').val('');

                            $('.spinner-sanfer').addClass('nomostrar');
                            $('.mensaje-enviado-sanfer').removeClass('nomostrar');
                            $('#agree').removeAttr('checked')
                        }
                        else
                        {
                            $('.alerta-errores-sanfer').removeClass('nomostrar');
                            var errorString = '<ul>';
                            $.each( data.errors, function( key, value) {
                                errorString += '<li>' + value + '</li>';
                            });
                            errorString += '</ul></div>';
                            $('.errores-sanfer').append(errorString);
                            $('.spinner-sanfer').addClass('nomostrar');
                            $('.mensaje-enviado-sanfer').addClass('nomostrar');
                        }
                    },
                    error: function (data) {
                        $('.spinner-sanfer').addClass('nomostrar');
                        $('.mensaje-enviado-sanfer').addClass('nomostrar');
                        $('.alerta-errores-sanfer').removeClass('nomostrar');
                        $('.errores-sanfer').append('{!!trans('validation.error_sending')!!}');

                    }
                });
            }
            else{
                $('.alerta-errores-sanfer').removeClass('nomostrar');
                $('.errores-sanfer').append('{!!trans('validation.must_agree_terms')!!}');
            }


        });
    </script>
@endif