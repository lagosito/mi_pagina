<link href="<?php echo URL::asset('/css/modulo_f4.css'); ?>" rel="stylesheet" type="text/css" />
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
        a.twitter-timeline {
            /* Buttonish */
            display: inline-block;
            padding: 6px 12px 6px 30px;
            margin: 10px 0;
            border: #ccc solid 1px;
            border-radius: 3px;
            background: #f8f8f8 url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNy4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNzIgNzIiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDcyIDcyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IHg9IjAiIGZpbGw9Im5vbmUiIHdpZHRoPSI3MiIgaGVpZ2h0PSI3MiIvPg0KPHBhdGggZmlsbD0iIzU1YWNlZSIgZD0iTTY4LjgxMiwxNS4xNDFjLTIuMzQ4LDEuMDM5LTQuODY5LDEuNzQzLTcuNTE5LDIuMDZjMi43MDMtMS42Miw0Ljc3OC00LjE4Nyw1Ljc1Ni03LjI0NGMtMi41MjksMS41LTUuMzMsMi41OTItOC4zMTMsMy4xNzYNCglDNTYuMzQ5LDEwLjU5MSw1Mi45NDgsOSw0OS4xODIsOWMtNy4yMjksMC0xMy4wOTIsNS44NjEtMTMuMDkyLDEzLjA5M2MwLDEuMDI2LDAuMTE4LDIuMDIxLDAuMzM4LDIuOTgxDQoJYy0xMC44ODUtMC41NDgtMjAuNTI4LTUuNzU3LTI2Ljk4Ny0xMy42NzljLTEuMTI2LDEuOTM2LTEuNzcxLDQuMTg0LTEuNzcxLDYuNTgxYzAsNC41NDIsMi4zMTIsOC41NTEsNS44MjQsMTAuODk4DQoJYy0yLjE0Ni0wLjA2OS00LjE2NS0wLjY1Ny01LjkzLTEuNjM4Yy0wLjAwMiwwLjA1NS0wLjAwMiwwLjExLTAuMDAyLDAuMTYyYzAsNi4zNDUsNC41MTMsMTEuNjM4LDEwLjUwNCwxMi44NA0KCWMtMS4xMDEsMC4yOTgtMi4yNTYsMC40NTctMy40NDksMC40NTdjLTAuODQ2LDAtMS42NjctMC4wNzgtMi40NjUtMC4yMzFjMS42NjcsNS4yLDYuNDk5LDguOTg2LDEyLjIzLDkuMDkNCgljLTQuNDgyLDMuNTEyLTEwLjEyOSw1LjYwNi0xNi4yNiw1LjYwNmMtMS4wNTUsMC0yLjA5Ni0wLjA2MS0zLjEyMi0wLjE4NGM1Ljc5NCwzLjcxNywxMi42NzYsNS44ODIsMjAuMDY3LDUuODgyDQoJYzI0LjA4MywwLDM3LjI1MS0xOS45NDksMzcuMjUxLTM3LjI0OWMwLTAuNTY2LTAuMDE0LTEuMTM0LTAuMDM5LTEuNjk0QzY0LjgzOCwyMC4wNjgsNjcuMDU4LDE3Ljc2NSw2OC44MTIsMTUuMTQxeiIvPg0KPC9zdmc+DQo=") 8px 8px no-repeat;
            background-size: 1em 1em;

            /* Text */
            font: normal 12px/18px Helvetica, Arial, sans-serif;
            color: white!important;
            white-space: nowrap;
        }

        a.twitter-timeline:hover,
        a.twitter-timeline:focus {
            background-color: #dedede;
        }

        /* Color Highlight for keyboard navigation */

        a.twitter-timeline:focus {
            outline: none;
            border-color: #0089cb;
        }
        #instafeed {
            width: 100%}

        #instafeed a {
            display: block;
            float: left;
            position: relative;
            width: 50%;
        }

        #instafeed img {
            display: block;
            width: 100%;
            height: 100%;
        }
    </style>
@endif
<style>
    #container-modulo_f4 .titulo{
        font-size: <?php echo 16+ $proyecto->font_size?>px;
    }
    #container-modulo_f4 .subtitulo{
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }
    #container-modulo_f4 .parrafo, #container-modulo_f4 .navbar-nav > li > a{
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }
    #container-modulo_f4 .inputrounded{
        font-size: <?php echo 14+ $proyecto->font_size?>px;
    }
</style>
<div id="container-modulo_f4" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="col-sm-12" style="height: 100%; padding:0;">
                <div class="cuerpo">
                    <?php
                    $sociales = App\Console\Commands\Funciones::getSocial($pry_modulo->idesPR);
                    $cant=0;
                    ?>
                    <div class="redes-sociales" id="redes-sociales-f4">
                        <ul class="lista-redes-sociales-f4">
                        @foreach($sociales as $social)
                            @if($social->url!='')
                                <li class="social social">
                            @else
                                <li class="social nomostrar">
                            @endif
                                    <a class="{{$social->icono}} editsocial" id="socialicono{{$social->id}}" data-pk="{{$social->id}}" data-url="{{$social->url}}" data-icono="{{$social->icono}}" data-idred="{{$social->id_red_social}}" title="" target="_blank" data-toggle="popover" data-trigger="click" data-popover-content="#popoversocial" href="{{$social->url}}"></a>
                                </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                <?php
                $cont = 0;
                $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
                ?>
                @foreach($modulosDtll as $modulo)
                    <div class="encabezado col-sm-4">
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo" id="titulo-subscription-f3">{!!$modulo->titulo!!}</h1>
                        </div>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                        <div>
                            <br/><br/>
                            <label class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</label>

                            <div class="alert alert-danger alerta-errores-f4 nomostrar" style="background: none!important;">
                                <div class="errores-f4">
                                </div>
                            </div>
                            <div class="alert alert-info alert-dismissable nomostrar spinner-f4" style="background: none!important;">
                                <label style="text-align: center;"><i class="fa fa-spin fa-spinner"></i> Enviando email...</label>
                            </div>
                            <div class="alert alert-success alert-dismissable nomostrar mensaje-enviado-f4" style="background: none!important;">
                                <label>¡Gracias por subscribirse!.</label>
                            </div>
                            <div class="form-group inner-addon left-addon">
                                <label for="email">
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <input type="text" class="nomostrar" id="email_contacto_proyecto_f4" value="{{$proyecto->email_formulario}}" />
                                <input type="text" class="inputrounded" name="email_f4" id="email_f4" placeholder="Your e-mail"/>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-sm-4 twitter-container">
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h1>LATEST TWEETS</h1>
                    </div>
                    <a class="twitter-timeline" data-height="200" data-show-replies="false"
                       data-aria-polite="assertive" data-tweet-limit="2" data-theme="dark" data-tweet-color="#FFFFFF" data-chrome="noscrollbar noheader nofooter noborders transparent" href="{{$proyecto->twitter_timeline}}"></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-sm-4 instagram-container">
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h1>INSTAGRAM</h1>
                    </div>
                    <div id="instafeed">
                    </div>
                </div>
                <br/><br/><br/>
                <div class="division col-sm-12">

                </div>
                <div class="linkssection col-sm-10 col-sm-offset-1" style="padding: 0">
                    <div class="piecabecera col-md-12">
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
                            <ul class="nav navbar-nav ultext">
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
            var total = $('#redes-sociales-f4 span').length;
            var i = 0;
            $("#redes-sociales-f4 .social").each(function () {
                if ($(this).hasClass('nomostrar')) {
                    i=i+1;
                }
            });
            if(i==total)
            {
                $("#redes-sociales-f4").addClass('nomostrar');
                $(" #container-modulo_f4 .piecabecera").removeClass('col-md-8');
                $(" #container-modulo_f4 .piecabecera").addClass('col-md-12');
                $(" #container-modulo_f4 .cuerpo").addClass('nomostrar');

            }
        });
    </script>
    <script>
        $( "#email_f4" ).on( "keypress", function(event) {
            if(event.which == 13)
            {
                $('.errores-f4').empty();
                $('.alerta-errores-f4').addClass('nomostrar');
                $('.spinner-f4').removeClass('nomostrar');
                $('.mensaje-enviado-f4').addClass('nomostrar');

                $('#email_f4').removeClass('input-rojo');


                var data = {};

                data._token = '{!!csrf_token()!!}';
                data.email = $('#email_f4').val();
                data.titulo = $('#titulo-subscription-f4').text();
                data.email_proyecto = $('#email_contacto_proyecto_f4').val();

                $.ajax({
                    type: "POST",
                    data: data,
                    url: '{!! url('/formulariosubscription') !!}',

                    success: function(data) {
                        if(data.success) {
                            $('#email_f4').val('');

                            $('#message_f4').val('');
                            $('.spinner-f4').addClass('nomostrar');
                            $('.mensaje-enviado-f4').removeClass('nomostrar');
                        }
                        else
                        {
                            $('.alerta-errores-f4').removeClass('nomostrar');
                            var errorString = '<ul>';
                            $.each( data.errors, function( key, value) {
                                errorString += '<li>' + value + '</li>';
                                if(key=='email')
                                {
                                    $('#email_f4').addClass('input-rojo');
                                }
                            });
                            errorString += '</ul></div>';
                            $('.errores-f4').append(errorString);
                            $('.spinner-f4').addClass('nomostrar');
                            $('.mensaje-enviado-f4').addClass('nomostrar');
                        }
                    },
                    error: function (data) {
                        $('.spinner-f4').addClass('nomostrar');
                        $('.mensaje-enviado-f4').addClass('nomostrar');
                        $('.alerta-errores-f4').removeClass('nomostrar');
                        $('.errores-f4').append('No se puedo enviar');

                    }
                });

            }
        });
    </script>
    <script src="<?php echo URL::asset('js/instafeed/instafeed.min.js'); ?>" type="text/javascript"></script>
    <script>
        @if($proyecto->instagram_user_id!='' && $proyecto->instagram_token!='')
        $(document).ready(function()
        {
            var userFeed = new Instafeed({
                get: 'user',
                userId: '{{$proyecto->instagram_user_id}}',
                accessToken: '{{$proyecto->instagram_token}}',
                sortBy: 'most-recent',
                limit: 8
            });
            userFeed.run();

        });
        $(window).load(function () {
            $("#instafeed a").attr('target','_blank');
        });
        @endif
    </script>
@endif
