
<link href="<?php echo URL::asset('/css/modulo_f2.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .navbar-nav li a{
            color: {{$combinacion->color_menu}};
        }
        #container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
            color: {{$combinacion->subtitulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif
<style>
    #container-modulo_f2 ul a{
        font-size: <?php echo 18+ $proyecto->font_size?>px;
    }
    #container-modulo_f2 .contacttitulo {
        font-size: <?php echo 17+ $proyecto->font_size?>px;
    }
    #container-modulo_f2 .telefono {
        font-size: <?php echo 21+ $proyecto->font_size?>px;
    }
    #container-modulo_f2 .contactdatos {
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }

    @media (max-width: 239px) {
        #container-modulo_f2 .contacttitulo, #container-modulo_f2 .telefono {
         font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
        #container-modulo_f2 .contactdatos {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
        #container-modulo_f2 .footer{
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 319px) and (min-width: 240px) {
        #container-modulo_f2 .footer{
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
        #container-modulo_f2 .contacttitulo, #container-modulo_f2 .telefono {
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
        #container-modulo_f2 .contactdatos {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 500px) and (min-width: 320px){

        #container-modulo_f2 .footer{
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
        #container-modulo_f2 .contacttitulo, #container-modulo_f2 .telefono {
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
        #container-modulo_f2 .contactdatos {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) and (min-width: 501px){
        #container-modulo_f2 .footer{
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
    }
    @media (min-width: 768px) and (max-width: 1048px){
        #container-modulo_f2 .navbar-nav > li > a, #container-modulo_f2 .ultext, #container-modulo_f2 .cuerpo {
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
        #container-modulo_f2 .footer{
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
    }
    @media (min-width: 1049px){
        #container-modulo_f2 .navbar-nav > li > a, #container-modulo_f2 .ultext {
            font-size: <?php echo 15+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_f2" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div class="iconoscontacto" style="padding-left: 6%; padding-bottom: 8%; padding-top: 4%">
        @foreach($modulosDtll as $modulo)
            @if($cont==0)
                <div class="col-sm-4 col-xs-12 iconocontact">
                    <div class="col-xs-4">
                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" id="img-modulo{{$modulo->id}}" class="img-responsive" alt="" style="float: right"/>
                        <a class="editar-imagen nomostrar" data-toggle="modal" data-target="#editarimagen" data-width="42" data-height="65" data-pk="{{$modulo->id}}" data-pry="{{$pry_modulo->id_proyecto}}"><i class="fa fa-pencil"></i></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="contacttitulo subtitulo-custom-color">
                            <h5 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h5>
                        </div>
                        <div class="telefono subtitulo-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                    </div>
                </div>
                <?php $cont++?>
            @else
                <div class="col-sm-4  col-xs-12  iconocontact">
                    <div class="col-xs-4">
                        <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" id="img-modulo{{$modulo->id}}" class="img-responsive" alt="" style="float: right"/>
                        <a class="editar-imagen nomostrar" data-toggle="modal" data-target="#editarimagen" data-width="42" data-height="65" data-pk="{{$modulo->id}}" data-pry="{{$pry_modulo->id_proyecto}}"><i class="fa fa-pencil"></i></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="contacttitulo subtitulo-custom-color">
                            <h5 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h5>
                        </div>
                        <div class="contactdatos comentario-custom-color">
                            <p class="editable"  data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                    </div>
                </div>
                <?php $cont++?>
            @endif
        @endforeach
        </div>


        <div class="linkssection">
            <div class="piecabecera col-md-8">
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
            <div class="col-md-4 cuerpo" style="height: 50%;">
                <?php
                $sociales = App\Console\Commands\Funciones::getSocial($pry_modulo->idesPR);
                $cant=0;
                ?>
                <div class="redes-sociales" id="redes-sociales-f2">
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
        <div  style="height: 50%;">
            <div class="logo" align="center">
                <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" class="img-responsive" alt="" data-pk="{{$pry_modulo->idesPR}}"/>
                <span class="btn-file-logo nomostrar" style=" right: 40%">
                    <span class="fa fa-folder-open-o"></span> <input type="file" id="file" class="file-logo" name="file">
                </span>
            </div>
            <div class="footer comentario-custom-color">
                <h3 class="editable-copyright" data-type="text" data-pk="{{$proyecto->id}}" data-name="copyright">{{$proyecto->copyright}}</h3>
            </div>
        </div>


    </div>

</div>
@if($editar==0)
    <script>
        $(document).ready(function() {
            var total = $('#redes-sociales-f2 span').length;
            var i = 0;
            $("#redes-sociales-f2 .social").each(function () {
                if ($(this).hasClass('nomostrar')) {
                    i=i+1;
                }
            });
            if(i==total)
            {
                $("#redes-sociales-f2").addClass('nomostrar');
                $(" #container-modulo_f2 .piecabecera").removeClass('col-md-8');
                $(" #container-modulo_f2 .piecabecera").addClass('col-md-12');
                $(" #container-modulo_f2 .cuerpo").addClass('nomostrar');

            }
        });
    </script>
@endif