<link href="<?php echo URL::asset('/css/modulo_c_nosotros.css'); ?>" rel="stylesheet" type="text/css" />
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
    </style>
@endif
<style>
    #container-modulo_c_nosotros .titulo {
        font-size: <?php echo 26+ $proyecto->font_size?>px;
    }
    #container-modulo_c_nosotros .parrafo {
        font-size: <?php echo 14+ $proyecto->font_size?>px;
    }
    @media (max-width: 400px) and (min-width: 271px){
        #container-modulo_c_nosotros .titulo {
            font-size: <?php echo 18+ $proyecto->font_size?>px;
        }
        #container-modulo_c_nosotros .parrafo {
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 270px){
        #container-modulo_c_nosotros .titulo {
            font-size: <?php echo 14+ $proyecto->font_size?>px;
        }
        #container-modulo_c_nosotros .parrafo {
            font-size: <?php echo 12+ $proyecto->font_size?>px;
        }
    }
</style>
<div id="container-modulo_c_nosotros" class="wrapper">
    <div  class="container" style="width: 100%; padding: 0" id="container{{$pry_modulo->idesPR}}">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="fila">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 contenido">
                    @foreach($modulosDtll as $modulo)
                        <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                            <h1 class="editable" data-pk="{{$modulo->id}}" data-type="text"  data-name="titulo">
                                <img src="{!!url('img/rayita-roja.png')!!}"/>{{$modulo->titulo}}</h1>
                        </div>
                        <div class="parrafo comentario-custom-color">
                            <p class="editable" data-pk="{{$modulo->id}}" data-type="textarea"  data-name="comentario">
                            {{$modulo->comentario}}
                            </p>
                        </div>
                        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" >

                        @if($modulo->imagen!='')
                            <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$modulo->imagen)!!}" id="img-modulo{{$modulo->id}}" class="img-responsive img-original img-static" alt="" data-pk="{{$modulo->id}}"  data-pry="{{$proyecto->id}}" style="width: 100%; padding-top: 5%;">
                            <div class="edit-img-sincrop nomostrar">
                                <span class="btn btn-primary btn-remove-imagen-modulo" id="btn-remove-imagen-modulo{{$modulo->id}}" data-id = "{{$modulo->id}}" data-pry="{{$proyecto->id}}">
                                    <span class="fa fa-remove"></span>
                                </span>
                                <span class="btn-file-imagen">
                                    <span class="fa fa-pencil"></span> <input type="file" id="file" class="file-imagen" name="file" data-id = {{$modulo->id}}>
                                </span>
                            </div>
                        @else
                            <img src="" id="img-modulo{{$modulo->id}}" class="img-responsive img-original nomostrar img-static" alt="" data-pk="{{$modulo->id}}" data-pry="{{$proyecto->id}}" style="width: 100%; padding-top: 5%;">
                            <div class="edit-img-sincrop nomostrar">
                                <span class="btn btn-primary btn-remove-imagen-modulo nomostrar" id="btn-remove-imagen-modulo{{$modulo->id}}" data-id = "{{$modulo->id}}" data-pry="{{$proyecto->id}}">
                                    <span class="fa fa-remove"></span>
                                </span>
                                <span class="btn-file-imagen">
                                    <span class="fa fa-pencil"></span> <input type="file" id="file" class="file-imagen" name="file" data-id = {{$modulo->id}}>
                                </span>
                            </div>
                        @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
