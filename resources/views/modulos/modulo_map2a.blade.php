
<link href="<?php echo URL::asset('/css/modulo_map2a.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .background-custom-color{
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
        #container{{$pry_modulo->idesPR}} .division {
            border-color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} #imagenfondo{
            text-align: center;

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
@endif
<style>
    #container-modulo_map2a .titulo{
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo_map2a .parrafo{
        font-size: <?php echo 16+ $proyecto->font_size?>px;
    }
    @media (max-width: 260px){
        #container-modulo_map2a .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }

        #container-modulo_map2a .parrafo{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 364px) and (min-width: 261px){
        #container-modulo_map2a .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }

        #container-modulo_map2a .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 768px) and (min-width: 365px){
        #container-modulo_map2a .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_map2a .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_map2a" class="wrapper" style="height: 100%">

    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0; height: 100%">

        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
            $cont = 0;
            $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
            $maps = App\Console\Commands\Funciones::getGooglemaps($pry_modulo->idesPR);
            $sociales = App\Console\Commands\Funciones::getSocial($pry_modulo->idesPR);
            $cant=0;
        ?>
        <div class="col-md-12" style="position: relative; width: 100%; padding: 0">

            <div class="col-sm-6" style="padding: 0">
                <div id="googleMaps{{$maps[0]->id}}" style="height: 400px; max-width:100%;"></div>
                <a class="edit-google-map nomostrar" data-toggle="modal" data-target="#editGooglemap" data-id="{{$maps[0]->id}}" data-direccion="{{$maps[0]->direccion}}" data-longitud="{{$maps[0]->longitud}}" data-latitud="{{$maps[0]->latitud}}"><i class="fa fa-pencil"></i></a>
            </div>
            @foreach($modulosDtll as $modulo)

                    <div class="contacto derecha-align col-sm-6 background-custom-color" id="imagenfondo" style="background-image: url('../../../upload/{{$pry_modulo->id_proyecto}}/contenido/{{$pry_modulo->imagen_fondo}}');">
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
                        </div>
                        <br/>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable" data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-5 division" ></div>

                        <div class="redes-sociales" id="redes-sociales-map2a">
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
                <?php $cont = $cont+1;?>
            @endforeach

        </div>
    </div>
</div>
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
<script type="text/javascript">
    $.getScript("{{$google_maps_api}}")
        .done(function() {
            var geocoder_2a_1;
            var marker_2a_1;
            var latLng_2a_1;
            var latLng2_2a_1;
            var map_2a_1;
            var latitud_2a_1 = '{{$maps[0]->latitud}}';
            var longitud_2a_1 ='{{$maps[0]->longitud}}';

            function init_map2a_1() {
                geocoder_2a_1 = new google.maps.Geocoder();
                latLng_2a_1 = new google.maps.LatLng(latitud_2a_1, longitud_2a_1);
                map_2a_1 = new google.maps.Map(document.getElementById('googleMaps{{$maps[0]->id}}'), {
                    zoom:15,
                    center: latLng_2a_1,
                    scrollwheel: false
                });


                marker_2a_1 = new google.maps.Marker({
                    position: latLng_2a_1,
                    title: '{{$maps[0]->direccion}}',
                    map: map_2a_1,
                    draggable: false
                });
            }

            google.maps.event.addDomListener(window, 'load', init_map2a_1);

        });
</script>