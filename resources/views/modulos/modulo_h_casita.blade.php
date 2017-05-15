<link href="<?php echo URL::asset('/css/modulo_h_casita.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
            position: relative;
        }
    </style>
@endif
<style>
    .nomostrar{
        display:none;
    }
    .nomostrari{
        display:none!important;
    }
    @media (min-width: 768px){
        .fixed-manito {
            position: fixed;
            top: 20px;
            left:20px;
            z-index: 15000;
            width: 100px;
        }
        #container-modulo_h_casita {
            height: 100vh;
        }
    }
</style>
<div id="container-modulo_h_casita">
    <div class="container dataColor" id="container{{$pry_modulo->idesPR}}" data-color="#f05a21">
        <a name="home" id="home"></a>
        <span class="titulo" style="color: #f05a21"></span>
        <div id="espacio-cabecera"></div>
        <div class="">
            <div class="menu-section">
                <div class="cabecera col-md-12 " id="cabecera">
                    <div class="navbar-header nomostrar" id="navbar-cabecera">
                        <button id="navbaricono" class="navbar-toggle collapsed efectox" type="button" data-toggle="collapse" data-target="#bs-navbar"
                                aria-controls="bs-navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar one"></span>
                            <span class="icon-bar two"></span>
                            <span class="icon-bar three"></span>
                        </button>
                        <p class="navbar-brand marca imagenlogo"  id="marca" style="height: auto">
                            <img src="{!!url('img/casitaslogo1.png')!!}" class="img-responsive logo1" alt="">
                        </p>
                    </div>
                    <nav class="nomostrar menu-fixed collapse" id="bs-navbar"  aria-expanded="false" style="height: 1px; z-index: 120">
                        <ul class="nav navbar-nav navbar-right ultext" id="ulnav">
                            <li><a href="#quienessomos" class="ancla">Quiénes Somos</a></li>
                            <li><a href="#nuestrosobjetivos" class="ancla">Nuestros Objetivos</a></li>
                            <li><a href="#nuestrametodologia" class="ancla">Nuestra Metodología</a></li>
                            <li><a href="#logros" class="ancla">Logros en Casitas</a></li>
                            <li><a href="#comoayudar" class="ancla">Cómo ayudar</a></li>
                            <!--li><a href="#comoayudar" class="ancla">Cómo ayudar</a></li>
                            <li><a href="#" target="_blank">RAYO JESUITA</a></li-->
                        </ul>
                    </nav>
                </div>
            </div>
            <a href="#home" class="ancla"><img src="{!!url('img/imagescasitas/logo-circulo.svg')!!}" class="img-responsive logo2 nomostrari" alt=""></a>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 contenedor-menu-imagen" style="position:relative">
                <nav class="menu-manito">
                    <a href="#quienessomos" class="ancla tituloquienes">Quiénes Somos</a>
                    <a href="#nuestrosobjetivos" class="ancla tituloobjetivo">Nuestros Objetivos</a>
                    <a href="#nuestrametodologia" class="ancla titulometodologia">Nuestra Metodología</a>
                    <a href="#logros" class="ancla titulologros">Logros en Casitas</a>
                    <a href="#comoayudar" class="ancla titulojesuita">Cómo ayudar</a>
                    <!--a href="#comoayudar" class="ancla tituloayudar">Cómo ayudar</a>
                    <a href="#" target="_blank" class="titulojesuita">RAYO JESUITA</a-->
                </nav>
                <img class="img-responsive" style="width:100%; padding: 0 18% 0 18%" src="{!!url('img/imagescasitas/mano.svg')!!}" alt="">
            </div>
        </div>
        <a href="http://rayojesuita.pe" target="_blank"><img class="img-responsive logo-chico-rayo" src="{!!url('img/imagescasitas/rayojesuita-logochico.svg')!!}" alt=""></a>
        <a href="#comoayudar" class="ancla haste-socio-jesuitas">Hazte socio <span class="fa fa-heart"></span></a>
    </div>
</div>
@if($editar==0)

<script>
    $(document).scroll(function() {

        if( $(this).scrollTop() > 100 )
        {
            if($(window).width()>=768) {

                if ($('.logo2').hasClass('fixed-manito')) {

                }
                else {
                    $('.logo2').addClass('fixed-manito');
                    $('.logo2').removeClass('nomostrari');
                }
            }
            else
            {
                if($('.logo2').hasClass('fixed-manito'))
                {
                    $('.logo2').addClass('nomostrari');
                    $('.logo2').removeClass('fixed-manito');
                }
            }
        }
        else
        {
            if($('.logo2').hasClass('fixed-manito'))
            {
                $('.logo2').addClass('nomostrari');
                $('.logo2').removeClass('fixed-manito');
            }
        }
    });
</script>
<script>
    $(window).scroll(function(){
        var scrollPos = $(document).scrollTop();
        var idAnterior = 0;
        var alturaAnterior=0;
        $('.micontenedor').find('.sectionMDver').each(function(index, el) {
            window['card_links_grid_' + index] = $(this).attr('id');

            if(window['card_links_grid_' + index]=='1')
            {
                alturaAnterior = $('#1').height();
            }
            else
            {
                idAnterior = $(this).attr('id')-1;
                alturaAnterior = $('#'+idAnterior).height();

            }
            var idContenedor = window['card_links_grid_' + index];
            var contenedor1 = $( '#'+idContenedor);
            var offsetVar = contenedor1.offset();
            var porcentaje = 0.7*alturaAnterior;
            var topOfOthPie = $("#container-modulo_f_casita").offset().top;
            var color='';

            if(scrollPos > (offsetVar.top-porcentaje) && scrollPos < (offsetVar.top+porcentaje)){
                if($(window).scrollTop() > topOfOthPie-porcentaje) {
                    $('.haste-socio-jesuitas').hide();
                }
                else{
                    $('.haste-socio-jesuitas').show();
                }
                /*var color = $(this).find('.titulo').css('color');
                $('.micontenedor').find('.haste-socio-jesuitas').css('background-color', color);*/
                if($(this).find('.container').hasClass('dataColor'))
                {
                    color = $(this).find('.container').attr('data-color');
                    $('.micontenedor').find('.haste-socio-jesuitas').css('color', '#FFFFFF');
                    $('.micontenedor').find('.haste-socio-jesuitas').css('background-color', color);
                }
                else
                {
                    color = $(this).find('.container').css('background-color');
                    $('.micontenedor').find('.haste-socio-jesuitas').css('color', color);
                    $('.micontenedor').find('.haste-socio-jesuitas').css('background-color', '#FFFFFF');
                }
            }

            });
    });
</script>

@else

    <script>
        $('#vsbl').parent().css('display', 'inline');
        $(window).scroll(function(){
            var scrollPos = $(document).scrollTop();
            var idAnterior = 0;
            var alturaAnterior=0;
            $('.micontenedor').find('.sectionMD').each(function(index, el) {
                window['card_links_grid_' + index] = $(this).attr('id');

                if(window['card_links_grid_' + index]=='1')
                {
                    alturaAnterior = $('#1').height();
                }
                else
                {
                    idAnterior = $(this).attr('id')-1;
                    alturaAnterior = $('#'+idAnterior).height();

                }
                var idContenedor = window['card_links_grid_' + index];
                var contenedor1 = $( '#'+idContenedor);
                var offsetVar = contenedor1.offset();
                var porcentaje = 0.7*alturaAnterior;
                var topOfOthPie = $("#container-modulo_f_casita").offset().top;
                var color ='';
                if(scrollPos > (offsetVar.top-porcentaje) && scrollPos < (offsetVar.top+porcentaje)){
                    if($(window).scrollTop() > topOfOthPie-porcentaje) {
                        $('.haste-socio-jesuitas').hide();
                    }
                    else{
                        $('.haste-socio-jesuitas').show();
                    }
                    if($(this).find('.container').hasClass('dataColor'))
                    {
                        color = $(this).find('.container').attr('data-color');
                        $('.micontenedor').find('.haste-socio-jesuitas').css('color', '#FFFFFF');
                        $('.micontenedor').find('.haste-socio-jesuitas').css('background-color', color);
                    }
                    else
                    {
                        color = $(this).find('.container').css('background-color');
                        $('.micontenedor').find('.haste-socio-jesuitas').css('color', color);
                        $('.micontenedor').find('.haste-socio-jesuitas').css('background-color', '#FFFFFF');
                    }

                }

            });
        });
    </script>
@endif
