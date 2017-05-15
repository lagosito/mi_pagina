
<link href="<?php echo URL::asset('/css/modulo_map2.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
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
        @media (max-width: 767px)
        {
            #container{{$pry_modulo->idesPR}} .contacto {
                background-color: {{$combinacion->fondo}};
            }
        }
    </style>
@endif
<style>
    #container-modulo_map2 .transparencia-map2{
        height: 100vh;
        position: absolute;
        top: 0;
        background: -moz-linear-gradient(left,  rgba(0,0,0,1) 0%, rgba(0,0,0,0.55) 60%, rgba(0,0,0,0.5) 66%, rgba(0,0,0,0.26) 82%, rgba(0,0,0,0.01) 99%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(left,  rgba(0,0,0,1) 0%,rgba(0,0,0,0.55) 60%,rgba(0,0,0,0.5) 66%,rgba(0,0,0,0.26) 82%,rgba(0,0,0,0.01) 99%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to right,  rgba(0,0,0,1) 0%,rgba(0,0,0,0.55) 60%,rgba(0,0,0,0.5) 66%,rgba(0,0,0,0.26) 82%,rgba(0,0,0,0.01) 99%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */

    }

    #container-modulo_map2 .titulo{
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo_map2 .parrafo{
        font-size: <?php echo 16+ $proyecto->font_size?>px;
    }
    @media (max-width: 260px){
        #container-modulo_map2 .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
        #container-modulo_map2 .parrafo{
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) and (min-width: 261px){
        #container-modulo_map2 .titulo{
            font-size: <?php echo 35+ $proyecto->font_size?>px;
        }
        #container-modulo_map2 .parrafo{
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_map2" class="wrapper" style="height: 100%">

    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0; height: 100%">
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $maps = App\Console\Commands\Funciones::getGooglemaps($pry_modulo->idesPR);
        $cant=0;
        ?>
        <div class="map-container">
        @foreach($maps as $map)
            @foreach($modulosDtll as $modulo)
                @if($cont==0)
                    <div id="googleMaps{{$map->id}}" class="google-maps"></div>
                    <a class="edit-google-map nomostrar" data-toggle="modal" data-target="#editGooglemap" href="javascript:;" data-id="{{$map->id}}" data-direccion="{{$map->direccion}}" data-longitud="{{$map->longitud}}" data-latitud="{{$map->latitud}}"><i class="fa fa-pencil"></i></a>
                    <div class="transparencia-map2 col-md-5 col-sm-6 hidden-xs"></div>
                    <div class="contacto col-xs-12 ">
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h1 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h1>
                        </div>
                        <br/>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable" data-type="textarea" data-pk="{{$modulo->id}}" data-name="comentario">{!!$modulo->comentario!!}</p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 division"></div>
                        <?php
                        $sociales = App\Console\Commands\Funciones::getSocial($pry_modulo->idesPR);
                        $cant=0;
                        ?>
                        <div class="redes-sociales" id="redes-sociales-map2">
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
                @endif
                <?php $cont++;?>
            @endforeach


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

@foreach($maps as $map)
    <script type="text/javascript">

        $.getScript("{{$google_maps_api}}")
            .done(function() {

                var geocoder_2;
                var marker_2;
                var latLng_2;
                var latLng2_2;
                var map_2;
                var latitud_2 = '{{$map->latitud}}';
                var longitud_2 ='{{$map->longitud}}';

                function init_map2() {
                    geocoder_2 = new google.maps.Geocoder();
                    latLng_2 = new google.maps.LatLng(latitud_2, longitud_2);
                    map_2 = new google.maps.Map(document.getElementById('googleMaps{{$map->id}}'), {
                        zoom:15,
                        center: latLng_2,
                    });


                    marker_2 = new google.maps.Marker({
                        position: latLng_2,
                        title: '{{$map->direccion}}',
                        map: map_2,
                        draggable: false
                    });
                }

                google.maps.event.addDomListener(window, 'load', init_map2);
            });
    </script>
@endforeach
