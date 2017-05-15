<link href="<?php echo URL::asset('/css/modulo_h_sanfer_interna.css'); ?>" rel="stylesheet" type="text/css" />
<div id="container-modulo_h_sanfer_interna" class="wrapper">
    <div  class="container" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <div class="espacio-blanco"></div>
        <div class="menu-section">
            <div class="cabecera col-md-12" id="cabecera" style="position:relative">
                <div class="navbar-header nomostrar" id="navbar-cabecera">
                    <button id="navbaricono" class="navbar-toggle collapsed efectox" type="button" data-toggle="collapse" data-target="#bs-navbar"
                            aria-controls="bs-navbar" aria-expanded="false" style="z-index: 5">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar one"></span>
                        <span class="icon-bar two"></span>
                        <span class="icon-bar three"></span>
                    </button>

                    @if($pry_modulo->logo =='')
                        <p class="marca" id="marca">
                            <span class="editable-logo-texto" data-type="text" data-pk="{{$pry_modulo->idesPR}}" data-name="logo_texto">{!!$pry_modulo->logo_texto!!}</span>
                            <img src="" class="img-responsive logo nomostrar logo-cabecera" alt="" data-pk="{{$pry_modulo->idesPR}}" id="logo{{$pry_modulo->idesPR}}"/>
                            <a class="btn-file-logo editar-logo nomostrar" data-toggle="modal" data-target="#editarlogo" data-width="300" data-height="100" data-pk="{{$pry_modulo->idesPR}}" data-pry="{{$pry_modulo->id_proyecto}}"  style="padding-left: 11px; z-index: 25"><i class="fa fa-pencil"></i></a>
                        </p>
                    @else
                        <p class="marca imagenlogo"  id="marca" style="height: auto; position: relative">
                            <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->logo)!!}" class="img-responsive logo" alt="" data-pk="{{$pry_modulo->idesPR}}" id="logo{{$pry_modulo->idesPR}}"/>
                            <a class="btn-file-logo editar-logo nomostrar" data-toggle="modal" data-target="#editarlogo" data-width="300" data-height="100" data-pk="{{$pry_modulo->idesPR}}" data-pry="{{$pry_modulo->id_proyecto}}" style="padding-left: 11px; z-index:25"><i class="fa fa-pencil"></i></a>
                        </p>
                    @endif
                </div>
                <nav id="bs-navbar" class="collapse" aria-expanded="false" style="position:relative;height: 1px; z-index: 12;">
                    <ul class="nav navbar-nav navbar-right ultext" id="ulnav">
                        @foreach($menu as $item)
                            @if($item->titulo!='')
                                <li><a class="ancla itemmenu" href="#{{str_replace(' ', '', $item->titulo)}}">{{$item->titulo}}</a></li>
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
                        <li>
                            <a class="ancla-contacto itemmenu hidden-sm hidden-md hidden-lg" href="#contactanos">{!!trans('messages.contact_us')!!}</a>
                        </li>
                    </ul>
                </nav>
                <a class="btn-contacto ancla-contacto itemmenu hidden-xs" href="#contactanos"><img src="{!!url('img/rayita-roja-small.png')!!}"/>{!!trans('messages.contact_us')!!}</a>
            </div>
        </div>
    </div>
</div>
@if($editar==0)
    <script>
        $(window).scroll(function() {
            var offsetVar = $('.menu-section').offset();
            if ($(window).width()  > 767) {
                if ($(window).scrollTop() > offsetVar.top) {
                    $('.menu-section').addClass('menu-section-fixed');
                    $('.espacio-blanco').addClass('height100');
                }
                if ($(window).scrollTop() <= 0) {
                    $('.menu-section').removeClass('menu-section-fixed');
                    $('.espacio-blanco').removeClass('height100');
                }
            }

        });
        $(document).on('click', '.ancla-contacto', function(){
            if ($(window).width()  > 767) {
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top - 100
                }, 1000);
                return false;
            }
            else{
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 1000);
                return false;
            }
        });
    </script>
@endif