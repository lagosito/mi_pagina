<link href="<?php echo URL::asset('/css/modulo_sanfer_solutions.css'); ?>" rel="stylesheet" type="text/css" />
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
        #container{{$pry_modulo->idesPR}} .linkareferencia {
            border-color: {{$combinacion->color_boton}} ;
            background-color: {{$combinacion->color_boton}} ;
        }
    </style>
@endif
<div id="container-modulo_sanfer_solutions" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        $sectores = \App\Console\Commands\Funciones::getSectoresCursos($pry_modulo->id_proyecto, $idioma);
        ?>
        <div id="imagenfondo" style="float: left; width: 100%; background-image: url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
            <div class="fila">
                @foreach($modulosDtll as $modulo)
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 contenido">
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h1 class="editable" data-pk="{{$modulo->id}}" data-type="text"  data-name="titulo">
                            <img src="{!!url('img/rayita-roja.png')!!}"/>{{$modulo->titulo}}</h1>
                    </div>
                    <div class="parrafo comentario-custom-color">
                        <p class="editable" data-pk="{{$modulo->id}}"  data-type="textarea"  data-name="comentario">
                            {{$modulo->comentario}}
                        </p>
                    </div>
                    <div class="col-sm-12 iconos-link" >
                        @foreach($sectores as $sector)
                            <div class="col-sm-4 categ-negocio" align="center">
                                <div class="obj-link">
                                    <a class="link" href="{{$sector->link}}">
                                        <img src="{!!url('upload/'.$sector->id_proyecto.'/contenido/'.$sector->icono)!!}"  alt="" />
                                        <h4 class="titulo-link">{{$sector->nombre}}</h4>
                                    </a>
                                 </div>
                                <a class="editar-pencil edit-sector hidden edicion-componentes" data-toggle="modal" data-target="#editarSector" data-pk="{{$sector->id}}" data-pry="{{$sector->id_proyecto}}" data-nombre="{{$sector->nombre}}" data-icono="{{$sector->icono}}" data-icono-activo="{{$sector->icono_activo}}" data-link="{{$sector->link}}" style="line-height: 35px!important;background-color: rgba(0,0,0,0.6)!important;"><i class="fa fa-pencil"></i></a>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@if($editar==1)
    <div id="editarSector" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="text-align: center; font-family: 'MontserratBold', sans-serif">EDICIÓN</h4>
                </div>
                {!! Form::open(array('url' => Request::segment(1).'/savesector', 'files' => true)) !!}
                <div class="modal-body">
                    <div class="contenedor-edit-sector" style="width: 100%;">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="form-control nomostrar" name="id_sector" id="id_sector" value="">
                                <input type="text" class="form-control nomostrar" name="idioma" value="{{$idioma}}">

                                <div class="col-md-6">
                                    <h5 style="font-weight: bold; text-align: center">Icono</h5>
                                    <br>
                                    <div class="image-sector" align="center" style="position: relative">
                                        <img src="" alt=""  style="width: 80px; height: 80px; background-color: #eee" id="icono_sector">
                                    <span class="btn btn-primary btn-file-default">
                                        <span class="fa fa-folder-open-o"></span> <input type="file" name="icono">
                                    </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5 style="font-weight: bold; text-align: center">Icono activo</h5>
                                    <br>
                                    <div class="image-sector" align="center" style="position: relative">
                                        <img src="" alt=""  style="width: 80px; height: 80px; background-color: #eee" id="icono_activo_sector">
                                    <span class="btn btn-primary btn-file-default">
                                        <span class="fa fa-folder-open-o"></span> <input type="file" name="icono_activo">
                                    </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <input type="text" class="form-control input-blue" name="nombre" id="nombre_sector" value="" style="text-align: center">
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <input type="text" class="form-control input-blue" name="link" id="link_sector" placeholder="Link" value="" style="text-align: center">
                                </div>

                                <div class="col-md-12" align="center">
                                    <div class="alert alert-success alert-dismissable nomostrar label-cargando col-md-6 col-md-offset-3" style="background: none">
                                        <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> La imagen se está guardando...</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn blue editable-submit">
                        <i class="fa fa-check"> Guardar</i>
                    </button>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script>
        $('.edit-sector').on('click', function(event) {

            var ruta = '{!!url('upload/')!!}' + '/' + $(this).attr('data-pry') + '/contenido/';
            var id = $(this).attr('data-pk');
            var nombre= $(this).attr('data-nombre');
            var link = $(this).attr('data-link');

            $('#id_sector').val(id);
            $('#nombre_sector').val(nombre);
            $('#link_sector').val(link);
            $('#icono_sector').attr('src', ruta + $(this).attr('data-icono'));
            $('#icono_activo_sector').attr('src', ruta + $(this).attr('data-icono-activo'));

        });
    </script>
@endif