@extends('modulos.includes.plantilla')
@section('style')
    <link href="<?php echo URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet'); ?>" type="text/css">
    <link href="<?php echo URL::asset('css/formatomenu.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('css/menurounded/reset.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('css/menurounded/style.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('css/colorpicker.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('css/layout.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('css/style.css'); ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Londrina+Outline' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand:300' rel='stylesheet' type='text/css'>
    <link href="<?php echo URL::asset('css/fonts.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('css/headerEffects/component.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('css/youtubeiframe/youtube-iframe-responsive.css" rel="stylesheet'); ?>" type="text/css" />

    <link href="<?php echo URL::asset('css/wysihtml5/stylesheet.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->

    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->

    <!-- END THEME LAYOUT STYLES -->
    <script>
        var codigo_google_analytics = "{{$proyecto->google_analytics}}";
        if (codigo_google_analytics != '') {
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })
            (window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', codigo_google_analytics, 'auto');
            ga('send', 'pageview');
        }
    </script>

@endsection
@section('script')
<!--[if lt IE 9]>
    <script src="../assets/global/plugins/respond.min.js"></script>
    <script src="../assets/global/plugins/excanvas.min.js"></script>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="<?php echo URL::asset('assets/global/plugins/js.cookie.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.mi'); ?>n.js" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?php echo URL::asset('assets/global/scripts/app.min.js'); ?>" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo URL::asset('assets/pages/scripts/ui-modals.min.js'); ?>" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="<?php echo URL::asset('assets/layouts/layout5/scripts/layout.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/layouts/global/scripts/quick-sidebar.min.js'); ?>" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->

    <script src="<?php echo URL::asset('js/modernizr.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/velocity.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('js/main.js'); ?>" type="text/javascript"></script>

    <script src="<?php echo URL::asset('js/youtubeiframe/youtube-iframe-responsive.js'); ?>" type="text/javascript"></script>


@endsection

@section('content')
    <style>
        .nomostrar
        {
            display: none !important;
        }
    </style>

    <h5 id="_token" class="hidden" data-token="{{ csrf_token() }}"></h5>
    <?php $contador_modulos= 1?>
    <div class="micontenedor">
    @foreach($pry_modulos as $pry_modulo)

        <div class="sectionMDver" data-ides="{!!$pry_modulo->idesPR!!}" id="{{$contador_modulos}}">
            @include('modulos.'.$pry_modulo->modulo_blade)
        </div>
        <?php $contador_modulos= $contador_modulos+1;?>
    @endforeach
    </div>
    <script>

        $(document).scroll(function() {

            if( $(this).scrollTop() > 100 )
            {
                if($('.menu-section').hasClass('fixed'))
                {
                    $('.menu-section').addClass('fixed-scroll');
                }
            }
            else
            {
                if($('.menu-section').hasClass('fixed'))
                {
                    $('.menu-section').removeClass('fixed-scroll');
                }
            }
        });

        $( document ).ready(function() {

            //begin formato menu
            $('#navbar-cabecera').removeClass('nomostrar');

            if(!$('#bs-navbar').hasClass('nomostrar'))
            {
                $('#bs-navbar').addClass('navbar-collapse');
            }

            var tipoMenu = "{{$proyecto->tipo_menu}}";
            var Ubicacionmenu = "{{$proyecto->ubicacion_menu}}";
            var Efectomenu = "{{$proyecto->efecto_menu}}";
            var tipografiaTitulos = "{{$proyecto->tipografia_titulos}}";
            var tipografiaParrafos = "{{$proyecto->tipografia_parrafos}}";
            var font_size = "{{$proyecto->font_size}}";

            switch (tipoMenu){
                case '1' :
                    break;
                case '2':
                    $('.menu-section').addClass('fixed');
                    if($(window).width()>=768) {
                        $('#espacio-cabecera').css('height', '100px');
                    }
                    break;
                default : break;
            }


            switch (Ubicacionmenu){

                case '1': // logo centrado - menu icono a la derecha

                    $('#navbar-cabecera').addClass('logocentrado');
                    $('#marca').addClass('floatnone');
                    $('#bs-navbar').addClass('textcentrado');
                    $('#ulnav').removeClass('navbar-right');
                    $('#ulnav').addClass('navcentrado');
                    $('#marca').addClass('padleft0');
                    $('#ulnav').addClass('marginright0');

                    if($('#marca').hasClass('imagenlogo'))
                    {
                        $('#marca').removeClass('padleft0');
                        $('#marca').addClass('padding0');
                        $('#marca').attr('align','center');

                    }
                    $('.navbar-nav li a').addClass('lineheight');
                    $('#marca').addClass('lineheight');
                    $('#marca').addClass('margintop0');

                    $('#ulnav').addClass('marginright0');

                    $('#bs-navbar').removeClass('navbar-collapse');
                    $('#navbaricono').addClass('displayblock');
                    $('#navbar-cabecera').addClass('width100');

                    $('#bs-navbar').removeClass('textcentrado');
                    $('#navbaricono').removeClass('izq');
                    $('#navbaricono').addClass('derecha');
                    $('#navbaricono').addClass('alineadoatexto');
                    $('#ulnav').addClass('navbar-right');
                    $('#ulnav').removeClass('navcentrado');

                    $('.navbar-nav li a').addClass('lineheight');

                    $('.efecto_menu').removeClass('nomostrar');

                    if($('#marca').hasClass('imagenlogo')) {
                        $('#navbaricono').removeClass('alineadoatexto');
                        $('#navbaricono').addClass('alineadoalogo');
                    }
                    $('#marca').removeClass('lineheight');

                    $('.social-header-right').addClass('social-header-absolute-left');
                    break;

                case '2': //logo izquierda - menu icono a la derecha


                    $('#ulnav').addClass('marginright0');

                    $('#bs-navbar').removeClass('navbar-collapse');
                    $('#navbaricono').addClass('displayblock');
                    $('#navbar-cabecera').addClass('width100');

                    $('#bs-navbar').removeClass('textcentrado');
                    $('#navbaricono').removeClass('izq');
                    $('#navbaricono').addClass('derecha');
                    $('#navbaricono').addClass('alineadoatexto');
                    $('#ulnav').addClass('navbar-right');
                    $('#ulnav').removeClass('navcentrado');

                    $('.navbar-nav li a').addClass('lineheight');

                    $('.efecto_menu').removeClass('nomostrar');

                    if($('#marca').hasClass('imagenlogo')) {
                        $('#navbaricono').removeClass('alineadoatexto');
                        $('#navbaricono').addClass('alineadoalogo');
                    }
                    $('#marca').removeClass('lineheight');

                    $('.social-header-right').addClass('social-header-sandwich-right');
                    break;

                case '3' : // menu icono a la izquierda - logo izquierda

                    $('#ulnav').addClass('marginright0');

                    $('#bs-navbar').removeClass('navbar-collapse');
                    $('#navbaricono').addClass('displayblock');
                    $('#navbar-cabecera').addClass('width100');

                    $('#bs-navbar').removeClass('textcentrado');
                    $('#navbaricono').removeClass('derecha');
                    $('#navbaricono').addClass('izq');
                    $('#navbaricono').addClass('alineadoatexto');
                    $('#ulnav').removeClass('navbar-right');
                    $('#ulnav').removeClass('navcentrado');

                    $('.navbar-nav li a').addClass('lineheight');

                    $('.efecto_menu').removeClass('nomostrar');

                    if($('#marca').hasClass('imagenlogo')) {
                        $('#navbaricono').removeClass('alineadoatexto');
                        $('#navbaricono').addClass('alineadoalogo');
                    }
                    $('#marca').removeClass('lineheight');

                    $('.social-header-right').addClass('social-header-absolute-right-icon');
                    break;

                case '4': //logo izquierda- menu textual a la derecha

                    $('#ulnav').addClass('marginright0');

                    $('#bs-navbar').addClass('navbar-collapse');
                    $('#navbaricono').removeClass('displayblock');
                    $('#navbar-cabecera').removeClass('width100');
                    $('#bs-navbar').removeClass('textcentrado');
                    $('#ulnav').addClass('navbar-right');
                    $('#ulnav').removeClass('navcentrado');

                    if($('#marca').hasClass('imagenlogo'))
                    {
                        $('#marca').removeClass('lineheight');
                        $('.navbar-nav li a').removeClass('lineheight');
                    }


                    if($('.redes-sociales-header').hasClass('social-header-right'))
                    {
                        $('.social-header-right').addClass('social-header-absolute-right');
                        $('#ulnav').removeClass('marginright0');
                        $('#ulnav').addClass('marginright-social');
                    }
                    break;

                case '5' : //logo izquierda - menu textual medio

                    $('#ulnav').addClass('marginright0');
                    $('#bs-navbar').addClass('navbar-collapse');
                    $('#navbaricono').removeClass('displayblock');
                    $('#navbar-cabecera').removeClass('width100');
                    $('#bs-navbar').addClass('textcentrado');
                    $('#ulnav').removeClass('navbar-right');
                    $('#ulnav').addClass('navcentrado');
                    $('#marca').addClass('posabsolute');

                    $('.social-header-right').addClass('social-header-absolute-right');

                    break;
                case '6': // logo medio - menu textual a la derecha

                    $('#navbar-cabecera').addClass('logocentrado');
                    $('#marca').addClass('floatnone');
                    $('#marca').addClass('padleft0');
                    $('#ulnav').addClass('marginright0');

                    if($('#marca').hasClass('imagenlogo'))
                    {
                        $('#marca').removeClass('padleft0');
                        $('#marca').addClass('padding0');
                        $('#marca').attr('align','center');
                    }

                    $('#bs-navbar').addClass("medioderecha");

                    $('#marca').addClass('margintop0');

                    $('#bs-navbar').addClass('navbar-collapse');

                    $('.social-header-right').addClass('social-header-absolute-left');

                    break;

                case '7' : //menu textual medio -logo arriba menu

                    $('#navbar-cabecera').addClass('logocentrado');
                    $('#marca').addClass('floatnone');
                    $('#bs-navbar').addClass('textcentrado');
                    $('#ulnav').removeClass('navbar-right');
                    $('#ulnav').addClass('navcentrado');
                    $('#marca').addClass('padleft0');
                    $('#ulnav').addClass('marginright0');

                    $('.navbar-nav li a').addClass('lineheight');
                    $('#marca').addClass('lineheight');
                    $('#marca').addClass('margintop0');

                    $('#navbar-cabecera').addClass('padding15');
                    $('#ulnav').addClass('marginright0');
                    $('#bs-navbar').addClass('navbar-collapse');
                    $('#navbaricono').removeClass('displayblock');
                    $('#navbar-cabecera').removeClass('width100');

                    $('#socialheader').addClass('floatnone');

                    if($('#marca').hasClass('imagenlogo'))
                    {
                        $('#marca').removeClass('padleft0');
                        $('#marca').addClass('padding0');
                        $('#marca').attr('align','center');

                    }
                    else
                    {
                        $('#ulnav').addClass('margin-25');
                        $('#marca').removeClass('margintop0');
                    }

                    $('#bs-navbar').addClass("mediocentro");
                    $('.social-header-right').addClass('social-header-absolute-right');
                    break;

                case '8' : //menu textual medio- logo abajo menu

                    $('#navbar-cabecera').addClass('logocentrado');
                    $('#marca').addClass('floatnone');
                    $('#bs-navbar').addClass('textcentrado');
                    $('#ulnav').removeClass('navbar-right');
                    $('#ulnav').addClass('navcentrado');
                    $('#marca').addClass('padleft0');
                    $('#ulnav').addClass('marginright0');

                    if($('#marca').hasClass('imagenlogo'))
                    {
                        $('#marca').removeClass('padleft0');
                        $('#marca').addClass('padding0');
                        $('#marca').attr('align','center');

                    }
                    $('.navbar-nav li a').addClass('lineheight');
                    $('#marca').addClass('lineheight');

                    var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
                    var bsnavbar = document.getElementById('bs-navbar').outerHTML;
                    $('#cabecera').empty();
                    $('#cabecera').append(bsnavbar);
                    $('#cabecera').append(navbarheader);

                    $('#navbar-cabecera').addClass('padding15');

                    $('#bs-navbar').addClass('navbar-collapse');

                    $('#socialheader').addClass('floatnone');

                    $('#marca').addClass('margin-25');

                    $('#bs-navbar').addClass('nav-movil-absolute');

                    $('.social-header-right').addClass('social-header-absolute-right');
                    break;

                default :
                    break;
            }


            switch (Efectomenu){
                case '1' :
                    break;
                case '2':
                    $('#bs-navbar').css({"-webkit-transition": "none", "transition": "none"});
                    $('#navbaricono').addClass('efectox');
                    break;
                case '3':
                    $('#ulnav').addClass('marginright0');
                    $('#navbaricono').removeClass('efectox');

                    $('#bs-navbar').addClass('navbar-collapse');
                    $('#navbaricono').removeClass('displayblock');
                    $('#navbar-cabecera').removeClass('width100');
                    $('#bs-navbar').removeClass('textcentrado');
                    $('#ulnav').addClass('navbar-right');
                    $('#ulnav').removeClass('navcentrado');

                    $('#bs-navbar').addClass("cd-primary-nav");
                    $('#bs-navbar').addClass("cd-primary-nav");
                    $('.itemmenu').addClass("closeefecto3");
                    $('.cd-nav-trigger').removeClass('nomostrar');
                    $('#bs-navbar').addClass('mostrarnav');
                    $('#navbaricono').addClass('noicono');
                    break;
                default :
                    break;
            }
            //end formato menu

            //efecto 2 menu
            $(document).on('click','.efectox',function(e){
                $('#navbar-cabecera').toggleClass("menu-toggle");
                $('.cabecera').toggleClass("efecto1");
                $('.one').toggleClass("oneon");
                $('.two').toggleClass("twoon");
                $('.three').toggleClass("threeon");
                $('#espacio-cabecera').toggleClass("height-header");
                if($('#bs-navbar').hasClass('nomostrar'))
                {
                    $('#bs-navbar').removeClass('nomostrar');
                }
            });
            //end efecto 2 menu


        });

        function removeEfectopen(){
            if($('#bs-navbar').hasClass('in'))
            {
                $('#bs-navbar').removeClass('in')
            }
            if($('.cabecera').hasClass('efecto1')) {
                $('#navbar-cabecera').removeClass("menu-toggle");
                $('.cabecera').removeClass("efecto1");
                $('.one').removeClass("oneon");
                $('.two').removeClass("twoon");
                $('.three').removeClass("threeon");
            }
        }

        $('.ancla').click(function(){
            $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top
            }, 1000);
            return false;
        });

        $(document).on('click','.ancla',function(){
            $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top
            }, 1000);
            return false;
        });



        $(document).on('click','.cd-nav-trigger',function(){
            var overlayNav = $('.cd-overlay-nav'),
                    navigation = $('.cd-primary-nav'),
                    logo = $('.marca');

            if($(this).hasClass('close-nav'))
            {
                overlayNav.children('span').velocity({
                    translateZ: 0,
                    scaleX: 1,
                    scaleY: 1,
                }, 300, 'easeInCubic', function(){
                    navigation.addClass('fade-in');
                    logo.addClass('nomostrar');
                });
            }
            else{
                overlayNav.children('span').velocity({
                    translateZ: 0,
                    scaleX: 1,
                    scaleY: 1,
                }, 500, 'easeInCubic', function() {
                    navigation.removeClass('fade-in');
                    logo.removeClass('nomostrar');
                });
            }
        });

        $(document).on('click','.closeefecto3',function(){
            var overlayNav = $('.cd-overlay-nav'),
                    overlayContent = $('.cd-overlay-content'),
                    navigation = $('.cd-primary-nav'),
                    toggleNav = $('.cd-nav-trigger'),
                    logo = $('.marca');
            if(!toggleNav.hasClass('close-nav')) {
                //it means navigation is not visible yet - open it and animate navigation layer
                toggleNav.addClass('close-nav');

                overlayNav.children('span').velocity({
                    translateZ: 0,
                    scaleX: 1,
                    scaleY: 1,
                }, 500, 'easeInCubic', function(){
                    navigation.addClass('fade-in');
                    logo.addClass('nomostrar');
                });
            } else {
                //navigation is open - close it and remove navigation layer
                toggleNav.removeClass('close-nav');

                overlayContent.children('span').velocity({
                    translateZ: 0,
                    scaleX: 1,
                    scaleY: 1,
                }, 500, 'easeInCubic', function(){
                    navigation.removeClass('fade-in');
                    logo.removeClass('nomostrar');

                    overlayNav.children('span').velocity({
                        translateZ: 0,
                        scaleX: 0,
                        scaleY: 0,
                    }, 0);

                    overlayContent.addClass('is-hidden').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                        overlayContent.children('span').velocity({
                            translateZ: 0,
                            scaleX: 0,
                            scaleY: 0,
                        }, 0, function(){overlayContent.removeClass('is-hidden')});
                    });
                    if($('html').hasClass('no-csstransitions')) {
                        overlayContent.children('span').velocity({
                            translateZ: 0,
                            scaleX: 0,
                            scaleY: 0,
                        }, 0, function(){overlayContent.removeClass('is-hidden')});
                    }
                });
            }
        });

        $(window).resize(function() {

            if($(window).width()<768) {
                if($('.menu-section').hasClass('fixed'))
                {
                    $('#espacio-cabecera').css('height', '15px');
                }
            }
            else
            {
                if($('.menu-section').hasClass('fixed'))
                {
                    $('#espacio-cabecera').css('height', '100px');
                }
                var ubicacionMenu = "{{$proyecto->ubicacion_menu}}";
                if(ubicacionMenu!='1' && ubicacionMenu!='2' && ubicacionMenu!='3')
                {
                    if($('#cabecera').hasClass('efecto1'))
                    {
                        $('#cabecera').removeClass('efecto1');
                        $('#navbar-cabecera').removeClass('menu-toggle');
                        $('#bs-navbar').removeClass('in');
                        $('#bs-navbar').attr('aria-expanded', 'false');
                        $('#navbaricono').attr('aria-expanded', 'false');
                        $('#navbaricono').find('.icon-bar.one').removeClass('oneon');
                        $('#navbaricono').find('.icon-bar.two').removeClass('twoon');
                        $('#navbaricono').find('.icon-bar.three').removeClass('threeon');
                    }
                }
            }
        });

    </script>


@endsection