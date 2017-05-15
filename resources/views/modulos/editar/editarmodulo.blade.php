@extends('modulos.includes.plantilla')
@section('style')
    <link href="<?php echo URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet'); ?>" type="text/css" />
    <link href="<?php echo URL::asset('css/formatomenu.css" rel="stylesheet'); ?>" type="text/css" />
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
    @endsection
@section('script')
<!--[if lt IE 9]>
    <script src="../assets/global/plugins/respond.min.js"></script>
    <script src="../assets/global/plugins/excanvas.min.js"></script>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="<?php echo URL::asset('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/js.cookie.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.mi'); ?>n.js" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?php echo URL::asset('assets/global/plugins/jquery-ui/jquery-ui.min.js'); ?>" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
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
@endsection
@section('content')
    <style>
        .editorPL{
            position: absolute;
            z-index: 3;
            height: auto;
            background: #000;
            opacity: .8;
            color: #fff;
            margin: 20px 0 0 10px;
            padding: 3px;
        }
        .editorSave{
            position: absolute;
            z-index: 10;
            height: auto;
            background: #000;
            opacity: .8;
            color: #fff;
            top:20px;
            right: 10px;
            padding: 3px;
        }
        .icono
        {
            color: #fff;
            font-size: 40px !important;
            padding-left: 9px;
            cursor: pointer;
        }
        .nomostrar
        {
            display: none !important;
        }
    </style>
    @foreach($prys as $pry)
        <div class="sectionMD" style="background-color: white">
            @if($pry->idesPR == $modulo->id)
                @include('modulos.editar.contenidoaeditar')
            @else
                @include('modulos.'.$pry->modulo_blade)
            @endif
        </div>
    @endforeach
    <script>
        $( document ).ready(function() {

            //begin formato menu
            $('#navbar-cabecera').removeClass('nomostrar');
            $('#bs-navbar').addClass('navbar-collapse');

            var Ubicacionlogo = "{{$proyecto->ubicacion_logo}}";
            var Ubicacionmenu = "{{$proyecto->ubicacion_menu}}";
            var Efectomenu = "{{$proyecto->efecto_menu}}";
            var tipografiaTitulos = "{{$proyecto->tipografia_titulos}}";
            var tipografiaParrafos = "{{$proyecto->tipografia_parrafos}}";

            $('body').addClass(tipografiaParrafos);
            $('.titulo').addClass(tipografiaTitulos);
            $('.subtitulo').addClass(tipografiaTitulos);

            switch (Ubicacionlogo){
                case '1' :

                    break;
                case '2':
                    $('#navbar-cabecera').addClass('logocentrado');
                    $('#marca').addClass('floatnone');
                    $('#bs-navbar').addClass('textcentrado');
                    $('#ulnav').removeClass('navbar-right');
                    $('#ulnav').addClass('navcentrado');
                    $('#marca').addClass('padleft0');
                    $('#ulnav').addClass('padright0');
                    break;
                case '3':
                    var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
                    var bsnavbar = document.getElementById('bs-navbar').outerHTML;
                    $('#cabecera').empty();
                    $('#cabecera').append(bsnavbar);
                    $('#cabecera').append(navbarheader);
                    $('#navbar-cabecera').addClass('logocentrado');
                    $('#marca').addClass('floatnone');
                    $('#bs-navbar').addClass('textcentrado');
                    $('#ulnav').removeClass('navbar-right');
                    $('#ulnav').addClass('navcentrado');
                    $('#marca').addClass('padleft0');
                    $('#ulnav').addClass('padright0');
                    break;
                default : break;
            }

            switch (Ubicacionmenu){
                case '1': // menu textual a la derecha

                    $('#ulnav').addClass('padright0');

                    $('#bs-navbar').addClass('navbar-collapse');
                    $('#navbaricono').removeClass('displayblock');
                    $('#navbar-cabecera').removeClass('width100');
                    $('#bs-navbar').removeClass('textcentrado');
                    $('#ulnav').addClass('navbar-right');
                    $('#ulnav').removeClass('navcentrado');

                    break;
                case '2' : //menu textual medio

                    $('#ulnav').addClass('padright0');

                    $('#bs-navbar').addClass('navbar-collapse');
                    $('#navbaricono').removeClass('displayblock');
                    $('#navbar-cabecera').removeClass('width100');
                    $('#bs-navbar').addClass('textcentrado');
                    $('#ulnav').removeClass('navbar-right');
                    $('#ulnav').addClass('navcentrado');


                    break;
                case '3' : //menu textual medio arriba menu
                    $('#ulnav').addClass('padright0');
                    $('#bs-navbar').addClass('navbar-collapse');
                    $('#navbaricono').removeClass('displayblock');
                    $('#navbar-cabecera').removeClass('width100');

                    $('#bs-navbar').addClass('textcentrado');
                    $('#ulnav').removeClass('navbar-right');
                    $('#ulnav').addClass('navcentrado');

                    $('#socialheader').addClass('floatnone');

                    break;
                case '4' : //menu textual medio abajo menu
                    var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
                    var bsnavbar = document.getElementById('bs-navbar').outerHTML;
                    $('#cabecera').empty();
                    $('#cabecera').append(bsnavbar);
                    $('#cabecera').append(navbarheader);

                    $('#ulnav').addClass('padright0');

                    $('#bs-navbar').addClass('navbar-collapse');
                    $('#navbaricono').removeClass('displayblock');
                    $('#navbar-cabecera').removeClass('width100');

                    $('#bs-navbar').addClass('textcentrado');
                    $('#ulnav').removeClass('navbar-right');
                    $('#ulnav').addClass('navcentrado');

                    $('#socialheader').addClass('floatnone');
                    break;

                case '5' : // menu icono a la izquierda

                    $('#ulnav').addClass('padright0');

                    $('#bs-navbar').removeClass('navbar-collapse');
                    $('#navbaricono').addClass('displayblock');
                    $('#navbar-cabecera').addClass('width100');

                    $('#bs-navbar').removeClass('textcentrado');
                    $('#navbaricono').removeClass('derecha');
                    $('#navbaricono').addClass('izq');
                    $('#ulnav').removeClass('navbar-right');
                    $('#ulnav').removeClass('navcentrado');

                    $('.efecto_menu').removeClass('nomostrar');
                    break;
                case '6': // menu icono a la derecha

                    $('#ulnav').addClass('padright0');

                    $('#bs-navbar').removeClass('navbar-collapse');
                    $('#navbaricono').addClass('displayblock');
                    $('#navbar-cabecera').addClass('width100');

                    $('#bs-navbar').removeClass('textcentrado');
                    $('#navbaricono').removeClass('izq');
                    $('#navbaricono').addClass('derecha');
                    $('#ulnav').addClass('navbar-right');
                    $('#ulnav').removeClass('navcentrado');

                    $('.efecto_menu').removeClass('nomostrar');
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

                default :
                    break;
            }
            //end formato menu

            //efecto menu
            $(document).on('click','.efectox',function(e){
                $('#navbar-cabecera').toggleClass("menu-toggle");
                $('.cabecera').toggleClass("efecto1");
                $('.one').toggleClass("oneon");
                $('.two').toggleClass("twoon");
                $('.three').toggleClass("threeon");
            });
            //end efecto menu
        });
</script>
@endsection