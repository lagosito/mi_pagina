<link href="<?php echo URL::asset('/css/modulo_f1.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .navbar-nav li a{
            color: {{$combinacion->color_menu}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
    </style>
@endif
<style>
    #container-modulo_f1 .navbar-nav > li > a {
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }
    #container-modulo_f1 .footer {
        font-size: <?php echo 16+ $proyecto->font_size?>px;
    }
    @media (max-width: 767px) and (min-width: 500px) {
        #container-modulo_f1 .footer {
            font-size: <?php echo 13+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 500px){
        #container-modulo_f1 .footer {
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_f1" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
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
        <div class="row cuerpo" style="height: 50%;">
            <?php
            $sociales = App\Console\Commands\Funciones::getSocial($pry_modulo->idesPR);
            $cant=0;
            ?>
            <div class="redes-sociales" id="redes-sociales-f1">
                @foreach($sociales as $social)
                    @if($cant==0)
                        @if($social->url!='')
                            <span class="social">
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
            <div class="logo" align="center" style="position: relative">
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
<script>
    $(document).ready(function() {
        var total = $('#redes-sociales-f1 span').length;
        var i = 0;
        $("#redes-sociales-f1 .social").each(function () {
            if ($(this).hasClass('nomostrar')) {
                i=i+1;
            }
        });
        if(i==total)
        {
            $("#redes-sociales-f1").addClass('nomostrar');
        }
    });
</script>