<link href="<?php echo URL::asset('/css/modulo_f3.css'); ?>" rel="stylesheet" type="text/css" />
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
        #container{{$pry_modulo->idesPR}} .navbar-nav li a{
            color: {{$combinacion->color_menu}};
        }
    </style>
@endif
<style>
    #container-modulo_f3 .titulo{
        font-size: <?php echo 42+ $proyecto->font_size?>px;
    }
    #container-modulo_f3 .subtitulo,  #container-modulo_f3 .navbar-nav > li > a{
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }
    #container-modulo_f3 .parrafo{
        font-size: <?php echo 16+ $proyecto->font_size?>px;
    }
    @media (max-width: 260px){
        #container-modulo_f3 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_f3 .parrafo{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 364px) and (min-width: 261px){
        #container-modulo_f3 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_f3 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 768px) and (min-width: 365px){
        #container-modulo_f3 .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_f3 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_f3" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="col-sm-12" style="background-color: rgba(0,0,0,0.7); height: 100%; padding:0;">

                @foreach($modulosDtll as $modulo)
                    <div class="encabezado col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo" id="titulo-subscription-f3">{!!$modulo->titulo!!}</h1>
                        </div>
                        <br/>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                        <div style="padding-left: 7%">
                            <br/><br/>
                            <label class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">PLEASE ENTER YOUR EMAIL</label>
                            <div class="alert alert-danger alerta-errores-f3 nomostrar" style="background: none!important;">
                                <div class="errores-f3">
                                </div>
                            </div>
                            <div class="alert alert-info alert-dismissable nomostrar spinner-f3" style="background: none!important;">
                                <label style="text-align: center;"><i class="fa fa-spin fa-spinner"></i> Enviando email...</label>
                            </div>
                            <div class="alert alert-success alert-dismissable nomostrar mensaje-enviado-f3" style="background: none!important;">
                                <label>¡Gracias por subscribirse!.</label>
                            </div>
                            <div class="form-inline">
                                <input type="text" class="nomostrar" id="email_contacto_proyecto_f3" value="{{$proyecto->email_formulario}}" />
                                <input type="text" class="inputrounded" name="email_f3" id="email_f3"/>
                                <button id="btn_subscribe_f3" class="btn btn-rounded fondo-boton editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</button>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="division col-sm-12">
                    <br/> <br/> <br/> <br/>  <br/>
                </div>
                <div class="linkssection col-sm-10 col-sm-offset-1" style="padding: 0">
                    <div class="piecabecera col-md-9">
                        <div class="navbar-header" >
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-pie"
                                    aria-controls="bs-navbar" aria-expanded="false" >
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <nav id="navbar-pie" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                            <ul class="nav navbar-nav ultext" id="ulnav">
                                @foreach($menu as $item)
                                    @if($item->titulo!='')
                                        <li><a class="ancla" href="#{{str_replace(' ', '', $item->titulo)}}">{{$item->titulo}}</a></li>
                                    @endif
                                @endforeach
                                @foreach($index as $url_index)
                                    @if($url_index['titulo']!='')
                                        <li><a class="itemmenu" href="{!!url($url_index['url'])!!}">{{$url_index['titulo']}}</a></li>
                                    @endif
                                @endforeach
                                @foreach($urls as $url)
                                    @if($url['titulo']!='')
                                        <li><a class="itemmenu" href="{!!url($url['url'])!!}">{{$url['titulo']}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3 cuerpo" style="height: 50%;">
                        <?php
                        $sociales = App\Console\Commands\Funciones::getSocial($pry_modulo->idesPR);
                        $cant=0;
                        ?>
                        <div class="redes-sociales" id="redes-sociales-f3">
                            @foreach($sociales as $social)
                                @if($cant==0)
                                    @if($social->url!='')
                                        <span class="social social">
                                    @else
                                        <span class="social nomostrar">
                                    @endif
                                            <a class="{{$social->icono}} editsocial" id="socialicono{{$social->id}}" data-pk="{{$social->id}}" data-url="{{$social->url}}" data-icono="{{$social->icono}}" data-idred="{{$social->id_red_social}}" title="" target="_blank" data-toggle="popover" data-trigger="click" data-popover-content="#popoversocial" href="{{$social->url}}"></a>
                                        </span>
                                @else
                                    @if($social->url!='')
                                        <span class="social">
                                    @else
                                        <span class="social nomostrar">
                                    @endif
                                        &nbsp;&nbsp;<a class="{{$social->icono}} editsocial" id="socialicono{{$social->id}}" data-pk="{{$social->id}}" data-url="{{$social->url}}" data-icono="{{$social->icono}}" data-idred="{{$social->id_red_social}}" title=""  data-toggle="popover" data-trigger="click" data-popover-content="#popoversocial" target="_blank" href="{{$social->url}}"></a>
                                        </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="logo col-sm-12" align="center" style="position: relative">
                    <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" class="img-responsive" alt="" data-pk="{{$pry_modulo->idesPR}}"/>
                    <span class="btn-file-logo nomostrar" style=" right: 40%">
                        <span class="fa fa-folder-open-o"></span> <input type="file" id="file" class="file-logo" name="file">
                    </span>
                </div>
                <div class="footer comentario-custom-color col-sm-12">
                    <h3 class="editable-copyright" data-type="text" data-pk="{{$proyecto->id}}" data-name="copyright">{{$proyecto->copyright}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@if($editar==0)
    <script>
        $(document).ready(function() {
            var total = $('#redes-sociales-f3 span').length;
            var i = 0;
            $("#redes-sociales-f3 .social").each(function () {
                if ($(this).hasClass('nomostrar')) {
                    i=i+1;
                }
            });
            if(i==total)
            {
                $("#redes-sociales-f3").addClass('nomostrar');
                $(" #container-modulo_f3 .piecabecera").removeClass('col-md-8');
                $(" #container-modulo_f3 .piecabecera").addClass('col-md-12');
                $(" #container-modulo_f3 .cuerpo").addClass('nomostrar');

            }
        });
    </script>
    <script>
        $('#btn_subscribe_f3').on('click', function(event) {

            $('.errores-f3').empty();
            $('.alerta-errores-f3').addClass('nomostrar');
            $('.spinner-f3').removeClass('nomostrar');
            $('.mensaje-enviado-f3').addClass('nomostrar');

            $('#email_f3').removeClass('input-rojo');


            var data = {};

            data._token = '{!!csrf_token()!!}';
            data.email = $('#email_f3').val();
            data.titulo = $('#titulo-subscription-f3').text();
            data.email_proyecto = $('#email_contacto_proyecto_f3').val();

            $.ajax({
                type: "POST",
                data: data,
                url: '{!! url('/formulariosubscription') !!}',

                success: function(data) {
                    if(data.success) {
                        $('#email_f3').val('');

                        $('#message_f3').val('');
                        $('.spinner-f3').addClass('nomostrar');
                        $('.mensaje-enviado-f3').removeClass('nomostrar');
                    }
                    else
                    {
                        $('.alerta-errores-f3').removeClass('nomostrar');
                        var errorString = '<ul>';
                        $.each( data.errors, function( key, value) {
                            errorString += '<li>' + value + '</li>';
                            if(key=='email')
                            {
                                $('#email_f3').addClass('input-rojo');
                            }
                        });
                        errorString += '</ul></div>';
                        $('.errores-f3').append(errorString);
                        $('.spinner-f3').addClass('nomostrar');
                        $('.mensaje-enviado-f3').addClass('nomostrar');
                    }
                },
                error: function (data) {
                    $('.spinner-f3').addClass('nomostrar');
                    $('.mensaje-enviado-f3').addClass('nomostrar');
                    $('.alerta-errores-f3').removeClass('nomostrar');
                    $('.errores-f3').append('No se puedo enviar');

                }
            });

        });
    </script>
@endif
