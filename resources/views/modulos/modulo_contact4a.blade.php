
<link href="<?php echo URL::asset('/css/modulo_contact4a.css'); ?>" rel="stylesheet" type="text/css" />
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
    </style>
@endif
<style>
    #container-modulo_contact4a .titulo{
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo_contact4a .subtitulo{
        font-size: <?php echo 11+ $proyecto->font_size?>px;
    }
    #container-modulo_contact4a .parrafo{
        font-size: <?php echo 16+ $proyecto->font_size?>px;
    }
    @media (max-width: 260px){
        #container-modulo_contact4a .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_contact4a .subtitulo{
            font-size: <?php echo 10+ $proyecto->font_size?>px;
        }
        #container-modulo_contact4a .parrafo{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 768px) and (min-width: 261px){
        #container-modulo_contact4a .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_contact4a .subtitulo{
            font-size: <?php echo 11+ $proyecto->font_size?>px;
        }
        #container-modulo_contact4a .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_contact4a" class="wrapper" style="height: 100%">

    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0; height: 100%">
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <div class="col-sm-12" style="height: 100%;">
            <div class="row" style="height: 100%">
                @foreach($modulosDtll as $modulo)
                    @if($cont==0)
                        <div class="contacto col-sm-6">
                            <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                                <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
                            </div>
                            <br/>
                            <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">
                                <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h1>
                            </div>
                            <div class="parrafo division comentario-custom-color">
                                <p class="editable" data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                            </div>
                            @elseif($cont==1)
                                <br/>
                                <div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">
                                    <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h1>
                                </div>
                                <div class="parrafo comentario-custom-color">
                                    <p class="editable" data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                                </div>

                        </div>
                    @endif
                    <?php $cont++;?>
                @endforeach
                <?php
                $maps = App\Console\Commands\Funciones::getGooglemaps($pry_modulo->idesPR);
                $cant=0;
                ?>
                <div class="col-sm-6" style="padding: 0">
                    @foreach($maps as $map)
                        <div id="googleMaps{{$map->id}}" class="height100vh"></div>
                        <a class="edit-google-map nomostrar" data-toggle="modal" data-target="#editGooglemap" href="javascript:;" data-id="{{$map->id}}" data-direccion="{{$map->direccion}}" data-longitud="{{$map->longitud}}" data-latitud="{{$map->latitud}}"><i class="fa fa-pencil"></i></a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    $( document ).ready(function() {
        if($(window).width()>=768) {
            $('#container-modulo_contact4a').parent().css('height', '100%');
            $('#container-modulo_contact4a').parent().css('overflow', 'hidden');
        }
    });
    $(window).resize(function() {
        if($(window).width()>=768) {
            $('#container-modulo_contact4a').parent().css('height', '100%');
            $('#container-modulo_contact4a').parent().css('overflow', 'hidden');
        }
        else
        {
            $('#container-modulo_contact4a').parent().css('height', 'initial');
        }
    });
</script>
<script>
    var google_maps_api = "{{$google_maps_api}}";
    if ($('script[src="'+google_maps_api+'"]').length <= 0) {
        var MapsScript = document.createElement("script");
        MapsScript.type = "text/javascript";
        MapsScript.id = "google_maps_script";
        MapsScript.src = "{{$google_maps_api}}";
        document.getElementsByTagName('head')[0].appendChild(MapsScript);
    }
</script>
@foreach($maps as $map)
    <script type="text/javascript">
        $.getScript("{{$google_maps_api}}")
            .done(function() {
                var geocoder_4a;
                var marker_4a;
                var latLng_4a;
                var latLng2_4a;
                var map_4a;
                var latitud_4a = '{{$map->latitud}}';
                var longitud_4a ='{{$map->longitud}}';

                function init_contact4a() {
                    geocoder_4a = new google.maps.Geocoder();
                    latLng_4a = new google.maps.LatLng(latitud_4a, longitud_4a);
                    map_4a = new google.maps.Map(document.getElementById('googleMaps{{$map->id}}'), {
                        zoom:15,
                        center: latLng_4a,
                        scrollwheel: false,
                    });


                    marker_4a = new google.maps.Marker({
                        position: latLng_4a,
                        title: '{{$map->direccion}}',
                        map: map_4a,
                        draggable: false
                    });
                }

                google.maps.event.addDomListener(window, 'load', init_contact4a);
            });
    </script>
@endforeach
