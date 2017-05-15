<link href="<?php echo URL::asset('/css/modulo_sanfer_contact.css'); ?>" rel="stylesheet" type="text/css" />
<a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
<a name="contactanos" id="contactanos"></a>
<div id="container-modulo_sanfer_contact" class="wrapper">
    <div  class="container" style="width: 100%; padding: 0" id="container{{$pry_modulo->idesPR}}">
        <div id="imagenfondo" >
            <?php
            $cont = 0;
            $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
            $modulo = $modulosDtll[0];
            if(isset($modulosDtll[1]))
            {
                $modulo2 = $modulosDtll[1];
            }
            ?>
            <div class="">

                <div class="col-md-6 contacto">
                    <div class="col-md-8 col-md-offset-1">
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h1 class="editable" data-pk="{{$modulo->id}}" data-type="text"  data-name="titulo">
                                <img src="{!!url('img/rayita-roja.png')!!}"/>{{$modulo->titulo}}</h1>
                        </div>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable" data-pk="{{$modulo->id}}" data-type="textarea"  data-name="comentario">
                                {{$modulo->comentario}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 formulario-sanfer">
                    <div class="titulo-tab paratodos">
                        <ul class="nav nav-tabs">
                            @if($editar==0)
                                <li class="active"><a data-toggle="tab" href="#servicios" class="titulo-tab">{{$modulo->subtitulo}}</a></li>

                                <li><a data-toggle="tab" href="#auspicidor" class="titulo-tab"><?php if(isset($modulo2)){echo $modulo2->subtitulo;} ?></a></li>

                            @else
                                <li class="active"><h3 class="editable" data-pk="{{$modulo->id}}" data-type="text"  data-name="subtitulo">{{$modulo->subtitulo}}</h3></li>
                                <li><h3 class="editable" data-pk="<?php if(isset($modulo2)){echo $modulo2->id;} ?>" data-type="text"  data-name="subtitulo"><?php if(isset($modulo2)){echo $modulo2->subtitulo;} ?></h3></li>
                            @endif                            
                        </ul>
                    </div>
                    <div class="titulo-tab parasanfer">
                        <h3 class="editable" data-pk="{{$modulo->id}}" data-type="text"  data-name="subtitulo">
                            {{$modulo->subtitulo}} </h3>
                    </div>

                    <img src="{!!url('img/raya.png')!!}" style="width: 100%; height: 2px;"/>
                    <div class="tab-content">
                        <div id="servicios" class="formulario-inputs col-md-12 tab-pane fade in active">
                            <div class="col-md-12">
                                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                                    <h1><img src="{!!url('img/rayita-roja.png')!!}"/>{!!trans('validation.title_form')!!}</h1>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="alert  alerta-errores-sanfer nomostrar" style="background: none!important;">
                                    <div class="errores-sanfer">
                                    </div>
                                </div>
                                <div class="alert  alert-dismissable nomostrar spinner-sanfer" style="background: none!important;">
                                    <label style="text-align: center;"><i class="fa fa-spin fa-spinner"></i>{!!trans('validation.sending_message')!!}</label>
                                </div>
                                <div class="alert alert-dismissable nomostrar mensaje-enviado-sanfer" style="background: none!important;">
                                    <label>{!!trans('validation.send_successful')!!}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <input class="sanfer-input" type="text" placeholder="{!!trans('validation.attributes.name')!!}" id="nombre_sanfer">
                            </div>
                            <div class="col-md-6">
                                <input class="sanfer-input" type="text" placeholder="{!!trans('validation.attributes.last_name')!!}" id="apellido_sanfer">
                            </div>
                            <div class="col-md-12">
                                <input class="sanfer-input" type="text" placeholder="{!!trans('validation.attributes.company')!!}" id="empresa_sanfer">
                            </div>
                            <div class="col-md-12">
                                <input class="sanfer-input" type="text" placeholder="{!!trans('validation.attributes.phone')!!}" id="fono_sanfer">
                            </div>
                            <div class="col-md-12">
                                <input class="sanfer-input" type="text" placeholder="{!!trans('validation.attributes.email')!!}" id="email_sanfer">
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="{!!trans('validation.attributes.message')!!}" id="mensaje_sanfer"> </textarea>
                            </div>
                            <div class="col-md-12">
                                <input id="agree" class="agree-checkbox" type="checkbox" checked>
                                <span class="parrafo"><a style="color:white; text-decoration: underline; font-size: 12px" href="javascript:;" data-toggle="modal" data-target="#agree-modal">{!!trans('validation.agree_terms')!!}</a></span>
                            </div>
                            <input type="text" class="nomostrar" id="email_contacto_proyecto" value="{{$proyecto->email_formulario}}" />
                            <div class="col-md-12">
                                <button id="botonsubmit_sanfer" data-parent="servicios" class="enviarformcontacto" type="submit"><img src="{!!url('img/rayita-roja-small.png')!!}"/>{!!trans('validation.attributes.send')!!}</button>
                            </div>
                            <div class="col-md-12" align="center">
                                <p class="parrafo" style="text-align: center"> {!!trans('validation.use_of_data')!!}</p>
                            </div>
                        </div>
                        <div id="auspiciador" class="tab-pane fade">
                            <div class="col-md-12">
                                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                                    <h1><img src="{!!url('img/rayita-roja.png')!!}"/>{!!trans('validation.title_form')!!}</h1>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="alert  alerta-errores-sanfer nomostrar" style="background: none!important;">
                                    <div class="errores-sanfer">
                                    </div>
                                </div>
                                <div class="alert  alert-dismissable nomostrar spinner-sanfer" style="background: none!important;">
                                    <label style="text-align: center;"><i class="fa fa-spin fa-spinner"></i>{!!trans('validation.sending_message')!!}</label>
                                </div>
                                <div class="alert alert-dismissable nomostrar mensaje-enviado-sanfer" style="background: none!important;">
                                    <label>{!!trans('validation.send_successful')!!}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <input class="sanfer-input" type="text" placeholder="{!!trans('validation.attributes.name')!!}" id="nombre_sanfer">
                            </div>
                            <div class="col-md-6">
                                <input class="sanfer-input" type="text" placeholder="{!!trans('validation.attributes.last_name')!!}" id="apellido_sanfer">
                            </div>
                            <div class="col-md-12">
                                <input class="sanfer-input" type="text" placeholder="{!!trans('validation.attributes.company')!!}" id="empresa_sanfer">
                            </div>
                            <div class="col-md-12">
                                <input class="sanfer-input" type="text" placeholder="{!!trans('validation.attributes.phone')!!}" id="fono_sanfer">
                            </div>
                            <div class="col-md-12">
                                <input class="sanfer-input" type="text" placeholder="{!!trans('validation.attributes.email')!!}" id="email_sanfer">
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="{!!trans('validation.attributes.message')!!}" id="mensaje_sanfer"> </textarea>
                            </div>
                            <div class="col-md-12">
                                <input id="agree" class="agree-checkbox" type="checkbox" checked>
                                <span class="parrafo"><a style="color:white; text-decoration: underline; font-size: 12px" href="javascript:;" data-toggle="modal" data-target="#agree-modal">{!!trans('validation.agree_terms')!!}</a></span>
                            </div>
                            <input type="text" class="nomostrar" id="email_contacto_proyecto" value="{{$proyecto->email_formulario2}}" />
                            <div class="col-md-12">
                                <button id="botonsubmit_sanfer" data-parent="auspiciador" class="enviarformcontacto" type="submit"><img src="{!!url('img/rayita-roja-small.png')!!}"/>{!!trans('validation.attributes.send')!!}</button>
                            </div>
                            <div class="col-md-12" align="center">
                                <p class="parrafo" style="text-align: center"> {!!trans('validation.use_of_data')!!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 footer">
                    <div class="logo col-sm-3 col-xs-6" align="center" style="position: relative">
                        <img src="{!!url('img/logos-footer/1-sanfernando.png')!!}" class="img-responsive" alt="" />
                    </div>
                    <div class="logo col-sm-3 col-xs-6" align="center" style="position: relative">
                        <img src="{!!url('img/logos-footer/2-itp.png')!!}" class="img-responsive" alt="" />
                    </div>
                    <div class="logo col-sm-3 col-xs-6" align="center" style="position: relative">
                        <img src="{!!url('img/logos-footer/3-mp.png')!!}" class="img-responsive" alt="" />
                    </div>
                    <div class="logo col-sm-3 col-xs-6" align="center" style="position: relative">
                        <img src="{!!url('img/logos-footer/4-cite.png')!!}" class="img-responsive" alt="" />
                    </div>

                </div>
            </div>
        </div>
        <div id="agree-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content" style="border-radius: 0">
                    <div class="modal-header" style="clear:both;float: left; width: 100%; background-image: url('{!!url('img/fondo-rayas-rojas.png')!!}'); background-size: cover ">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><img src="{!!url('img/rayita-roja.png')!!}"/>Términos y condiciones</h4>
                    </div>
                    <div class="modal-body" style="clear: both">
                        <p class="editable" data-pk="<?php if(isset($modulo2)){echo $modulo2->id;} ?>" data-type="textarea"  data-name="comentario"
                           style="white-space: pre-line;">
                            <?php if(isset($modulo2)){echo $modulo2->comentario;} ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@if($editar==0)
    <script>

        $('.enviarformcontacto').on('click', function(event) {

            $('.errores-sanfer').empty();
            $('.alerta-errores-sanfer').addClass('nomostrar');
            $('.mensaje-enviado-sanfer').addClass('nomostrar');
            if($('#agree').is(":checked"))
            {
                $('.spinner-sanfer').removeClass('nomostrar');

                var parent = $(this).attr('data-parent');
                console.log(parent);


                var data = {};

                data._token = '{!!csrf_token()!!}';
                data.nombre = $('#'+parent+' #nombre_sanfer').val();
                data.apellido = $('#'+parent+' #apellido_sanfer').val();
                data.empresa = $('#'+parent+' #empresa_sanfer').val();
                data.email = $('#'+parent+' #email_sanfer').val();
                data.email_proyecto = $('#'+parent+' #email_contacto_proyecto').val();
                data.telefono = $('#'+parent+' #fono_sanfer').val();
                data.mensaje = $('#'+parent+' #mensaje_sanfer').val();

                $.ajax({
                    type: "POST",
                    data: data,
                    url: '{!! url('/formulariosanfer') !!}',

                    success: function(data) {
                        if(data.success) {
                            $('#'+parent+' #nombre_sanfer').val('');
                            $('#'+parent+' #apellido_sanfer').val('');
                            $('#'+parent+' #empresa_sanfer').val('');
                            $('#'+parent+' #email_sanfer').val('');
                            $('#'+parent+' #fono_sanfer').val('');
                            $('#'+parent+' #mensaje_sanfer').val('');

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