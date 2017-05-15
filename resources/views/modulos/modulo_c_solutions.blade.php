<link href="<?php echo URL::asset('/css/modulo_c_solutions.css'); ?>" rel="stylesheet" type="text/css" />
<?php
    $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
    $sectores = \App\Console\Commands\Funciones::getSectoresCursos($pry_modulo->id_proyecto, $idioma);
    $i = 0
?>
<style>
    @foreach($sectores as $sector)
    #container{{$pry_modulo->idesPR}} .sector{{$sector->id}}.active img{
        content:url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$sector->icono_activo)!!}');
    }
    #container{{$pry_modulo->idesPR}} .sector{{$sector->id}} img{
        content:url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$sector->icono)!!}');
    }
    @endforeach

</style>
<div id="container-modulo_c_solutions" class="wrapper">
    <div id="container{{$pry_modulo->idesPR}}" class="container" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>

        <div id="imagenfondo col-md-12" class="img-fondo"  style="clear:both; padding:0;float: left; width: 100%; background-image: url('{!!url('img/slide-servicios.jpg')!!}')!important; background-size: cover ">
            <div class="fila">
                <div class="col-md-8 col-md-offset-2 col-sm-12 contenido">
                    <div class="intro-servicios comentario-custom-color">
                        <p class="editable"  data-type="textarea" data-pk="{{$modulosDtll[0]->id}}" data-name="comentario">@if(isset($modulosDtll[0]->comentario)){{$modulosDtll[0]->comentario}}@endif </p>
                    </div>
                    <ul class="nav nav-tabs nav-justified iconos-link" >
                        @foreach($sectores as $sector)
                            <li class="categ-negocio sector{{$sector->id}}" id="link{{$sector->id}}" >
                                <a class="link" data-toggle="tab" href="#sector{{$sector->id}}" data-id="{{$sector->id}}" aria-expanded="true">
                                    <div class="obj-link">
                                        <img src="{!!url('upload/'.$sector->id_proyecto.'/contenido/'.$sector->icono)!!}"  alt="" />
                                        <h4 class="titulo-link">{{$sector->nombre}}</h4>
                                    </div>
                                </a>
                                <a class="editar-pencil edit-sector hidden edicion-componentes" data-toggle="modal" data-target="#editarSector" data-pk="{{$sector->id}}" data-pry="{{$sector->id_proyecto}}" data-nombre="{{$sector->nombre}}" data-icono="{{$sector->icono}}" data-icono-activo="{{$sector->icono_activo}}" style="background-color: rgba(0,0,0,0.6)!important;"><i class="fa fa-pencil"></i></a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="fila linea-servicio hidden col-md-12" style="padding: 0">
                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h1 class="editable" data-pk="{{$modulosDtll[0]->id}}" data-type="text"  data-name="titulo">
                        <img src="{!!url('img/rayita-roja.png')!!}"/>
                        @if(isset($modulosDtll[0]->titulo)){{$modulosDtll[0]->titulo}}@endif</h1>
                </div>
                <div class="tab-content col-md-10 col-md-offset-1 col-sm-12">
                @foreach($sectores as $sector)
                    <div class="col-sm-12 tab-pane fade" id="sector{{$sector->id}}">

                        <ul class="nav nav-tabs nav-justified iconos-linea" >
                            <?php $categorias = \App\Console\Commands\Funciones::getCategoriasCursos($sector->id, $idioma);
                            ?>
                            @foreach($categorias as $categoria)
                                <li class="categ-linea" id="categ-linea{{$categoria->id}}" data-id="{{$categoria->id}}" data-sector="{{$sector->id}}">
                                    <a class="obj-linea" data-toggle="tab" href="#categ{{$categoria->id}}">
                                        <h4 class="titulo-link-linea">{{$categoria->nombre}}</h4>
                                    </a>
                                </li>
                            @endforeach
                            <li class="newCategoriaCurso categ-linea-edit hidden edicion-componentes">
                                <a class="obj-linea-edit" data-toggle="modal" data-target="#addCategoriaCurso" href="javascript:;" data-id-sector="{{$sector->id}}">
                                    <span class="fa fa-plus"> NUEVO</span>
                                </a>
                            </li>
                            <li class="editCategoriaCurso categ-linea-edit hidden edicion-componentes">
                                <a class="obj-linea-edit" data-toggle="modal" data-target="#editCategoriaCurso" href="javascript:;" data-id-sector="{{$sector->id}}">
                                    <span class="fa fa-pencil"> EDITAR</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
            <div class="fila hidden listado-cursos" id="listado-cursos" style="padding: 0; clear:both;">
                <div class="titulo-servicio titulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h1 class="editable" data-pk="{{$modulosDtll[0]->id}}" data-type="text"  data-name="subtitulo">
                        <img src="{!!url('img/rayita-roja.png')!!}"/>@if(isset($modulosDtll[0]->subtitulo)){{$modulosDtll[0]->subtitulo}}@endif
                    </h1>
                </div>
                <div class="tab-content" >
                @foreach($sectores as $sector)
                    <?php $categorias = \App\Console\Commands\Funciones::getCategoriasCursos($sector->id, $idioma);
                    ?>
                    @foreach($categorias as $categoria)
                    <div class="tab-pane fade" id="categ{{$categoria->id}}">

                        <ul class="docs" >
                            <?php $cursos = \App\Console\Commands\Funciones::getCursos($categoria->id, $idioma);
                            ?>
                            @foreach($cursos as $curso)
                            <li id="curso{{$curso->id}}">
                                <a class="titulo-docs curso" href="javascript:;" data-pry="{{$pry_modulo->id_proyecto}}" data-id="{{$curso->id}}" data-categ="{{$curso->id_categoria}}" data-sector="{{$sector->id}}" data-titulo="{{$curso->titulo}}" data-texto1="{{$curso->texto1}}" data-texto2="{{$curso->texto2}}" data-img1="{{$curso->imagen1}}" data-img2="{{$curso->imagen2}}" data-fondo="{{$curso->imagen_fondo}}" data-pdf="{{$curso->pdf}}">
                                    {{$curso->titulo}}
                                </a>
                                <a class="edit-curso hidden edicion-componentes" data-toggle="modal" data-target="#editCurso" href="javascript:;"><span class="fa fa-pencil"></span></a>
                                <a class="delete-curso hidden edicion-componentes" data-toggle="modal" data-target="#confirm_delete_curso" href="javascript:;"><span class="fa fa-remove"></span></a>
                            </li>
                            @endforeach
                            <li class="newCurso hidden edicion-componentes">
                                <a class="titulo-docs" data-toggle="modal" data-target="#addCurso" href="javascript:;" data-id-categoria="{{$categoria->id}}" data-pry="{{$pry_modulo->id_proyecto}}" data-sector="{{$sector->id}}">
                                    <span class="fa fa-plus"> NUEVO</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                @endforeach
                </div>
            </div>
                <!--div class="col-sm-12" align="center">
                    <img src="{!!url('img/flecha-abajo.png')!!}"  alt="" />
                </div-->
            <div class="detalle-curso hidden col-sm-12" style="padding: 0; float: left; width: 100%; background-image: url('{!!url('img/slide-soluciones-negocio.jpg')!!}'); background-size: cover ">
            <div class="col-sm-12" style="background-color: rgba(0,0,0,0.6); height: 100%; padding: 8% 0 8% 0">
                <div class="col-sm-12 " style="padding: 0">
                    <div class="col-sm-6 curso-box">
                        <img class="rayita" src="{!!url('img/rayita-roja.png')!!}"/><h2 class="titulo-curso">Bioseguridad en Granjas Avícolas</h2>
                    </div>

                </div>
                <div class="col-sm-6 curso-contenido">
                    <img src="{!!url('img/raya.png')!!}" style="width: 100%; height: 2px; margin-bottom: 20px"/>
                    <p class="texto-curso" id="texto1_curso">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    </p>
                    <img id="curso-img-1" src="{!!url('img/bioseguridad1.jpg')!!}" class="curso-img" alt="" />
                </div>
                <div class="col-sm-6 curso-contenido">
                    <img id="curso-img-2" src="{!!url('img/bioseguridad2.jpg')!!}" class="curso-img" alt="" />
                    <p class="texto-curso" id="texto2_curso">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                </div>
                <div class="col-sm-12 btn-pdf" align="center">
                    <a href="" class="btn-download-pdf download" download=""><img src="{!!url('img/rayita-roja-small.png')!!}"/>Descargar PDF <i class="fa fa-download" aria-hidden="true"></i></a>
                </div>
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

    <div id="addCategoriaCurso" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nueva Categoría</h4>
                </div>
                <div class="modal-body" align="center">
                    <input class="nomostrar id_sector"  id="id_sector" name="id_sector" value="">
                    <div class="editable-input">
                        <br/>
                        <label>Nombre Categoría: </label>
                        <input class=" form-control input-large input-blue nombre_sector" value="" id="nombre" name="nombre">
                    </div>
                    <div class="editable-buttons" style="margin-left: -10px;">
                        <br/>
                        <button type="button" class="btn blue editable-submit newCategoriaCurso-submit">
                            <i class="fa fa-check"> Guardar</i>
                        </button>
                        <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                            <i class="fa fa-times"> Cancelar</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="editCategoriaCurso" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edición de Categorías</h4>
                </div>
                {!! Form::open(array('url' => Request::segment(1).'/savecategoriascursos')) !!}
                <div class="modal-body" align="center">
                    <input type="text" class="form-control hidden" name="idioma" value="{{$idioma}}">
                    <div class="boxs-categ-cursos">
                        <div class="lista" id="lista">

                        </div>
                        <div class="editable-buttons" style="margin-left: -10px;">
                            <br/>
                            <button type="submit" class="btn blue editable-submit">
                                <i class="fa fa-check"> Guardar</i>
                            </button>
                            <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                                <i class="fa fa-times"> Cancelar</i>
                            </button>
                        </div>
                    </div>
                    <div class="desactivar nomostrar">
                        <h4>Esta categoría tiene cursos relacionados. No se ha eliminado.</h4>
                        <br><br>
                        <button type="button" class="ok-categ-curso btn btn-primary">OK</button>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

    <div id="addCurso" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nuevo Curso</h4>
                </div>
                <div class="modal-body" align="center" style="padding: 0">
                    <input class="hidden"  id="new_id_categoria_curso" name="new_id_categoria_curso" value="">
                    <input class="hidden"  id="new_id_proyecto_curso" name="new_id_proyecto_curso" value="">
                    <input class="hidden"  id="new_id_sector_curso" name="new_id_sector_curso" value="">
                    <div id="modal_fondo_curso" class="row" style="position: relative; margin:0; padding: 0;">
                        <div class="col-sm-12" style="background-color: rgba(0,0,0,0.6); height: 100%;padding: 15px; padding-bottom: 50px">
                            <div class="col-md-12">
                                <div class="col-md-6" style="padding: 0">
                                    <input type="text" class="form-control input-blue txt-white" name="titulo" id="new_titulo_curso" value="" placeholder="Titulo Curso" >
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <textarea class="form-control input-blue txt-white" name="texto1" id="new_texto1_curso" placeholder="Texto" style="min-height: 150px; margin-bottom:20px"></textarea>

                                <div class="image-curso1" align="center" style="position: relative">
                                    <img src="" alt=""  style="width: 100%; height: 150px;" >
                                    <span class="btn btn-primary btn-file-default">
                                        <span class="fa fa-folder-open-o"></span> <input type="file" name="imagen1" id="new_img1_curso">
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-curso2" align="center" style="position: relative">
                                    <img src="" alt=""  style="width: 100%; height: 150px;">
                                    <span class="btn btn-primary btn-file-default">
                                        <span class="fa fa-folder-open-o"></span> <input type="file" name="imagen2" id="new_img2_curso">
                                    </span>
                                </div>
                                <textarea class="form-control input-blue txt-white" name="texto2" id="new_texto2_curso" placeholder="Texto" style="min-height: 150px; margin-top:20px"></textarea>
                            </div>
                            <div class="col-md-6 col-md-offset-3" align="center" style="margin-top:50px">
                                <div class="input-group">
                                    <span class="input-group-btn pdf-curso">
                                        <input type="text" id="pdf_curso_nombre" class="form-control pdf_curso_nombre" readonly style="width: 85%">
                                        <span class="btn btn-primary btn-file-curso fa fa-upload">
                                            PDF <input type="file" id="new_pdf_curso">
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <span class="btn btn-primary btn-fondo-curso">
                            <span class="fa fa-picture-o"></span> <input type="file" name="fondo" id="new_fondo_curso">
                        </span>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12" align="center">
                        <div class="alert alert-success alert-dismissable hidden label-cargando col-md-6 col-md-offset-3" style="background: none">
                            <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> El curso se está guardando...</label>
                        </div>
                    </div>
                    <button type="button" class="btn blue editable-submit nuevo-curso-submit">
                        <i class="fa fa-check"> Guardar</i>
                    </button>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="editCurso" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Editar Curso</h4>
                </div>
                <div class="modal-body" align="center" style="padding: 0">
                    <input class="hidden"  id="edit_id_curso" name="edit_id_curso" value="">
                    <input class="hidden"  id="edit_id_proyecto_curso" name="edit_id_proyecto_curso" value="">
                    <div id="edit_modal_fondo_curso" class="row" style="position: relative; margin:0; padding: 0; background-position: center; background-size: cover; background-repeat: no-repeat">
                        <div class="col-sm-12" style="background-color: rgba(0,0,0,0.6); height: 100%;padding: 15px; padding-bottom: 50px">
                            <div class="col-md-12">
                                <div class="col-md-6" style="padding: 0">
                                    <input type="text" class="form-control input-blue txt-white" name="titulo" id="edit_titulo_curso" value="" placeholder="Titulo Curso" >
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <textarea class="form-control input-blue txt-white" name="texto1" id="edit_texto1_curso" placeholder="Texto" style="min-height: 150px; margin-bottom:20px"></textarea>

                                <div class="image-curso1" align="center" style="position: relative">
                                    <img src="" alt=""  style="width: 100%; height: 150px;" >
                                    <span class="btn btn-primary btn-file-default">
                                        <span class="fa fa-folder-open-o"></span> <input type="file" name="imagen1" id="edit_img1_curso">
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-curso2" align="center" style="position: relative">
                                    <img src="" alt=""  style="width: 100%; height: 150px;">
                                    <span class="btn btn-primary btn-file-default">
                                        <span class="fa fa-folder-open-o"></span> <input type="file" name="imagen2" id="edit_img2_curso">
                                    </span>
                                </div>
                                <textarea class="form-control input-blue txt-white" name="texto2" id="edit_texto2_curso" placeholder="Texto" style="min-height: 150px; margin-top:20px"></textarea>
                            </div>
                            <div class="col-md-6 col-md-offset-3" align="center" style="margin-top:50px">
                                <div class="input-group">
                                    <span class="input-group-btn pdf-curso">
                                        <input type="text" id="pdf_curso_nombre" class="form-control pdf_curso_nombre" readonly style="width: 85%">
                                        <span class="btn btn-primary btn-file-curso fa fa-upload">
                                            PDF<input type="file" id="edit_pdf_curso">
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <span class="btn btn-primary btn-fondo-curso">
                            <span class="fa fa-picture-o"></span> <input type="file" name="fondo" id="edit_fondo_curso">
                        </span>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12" align="center">
                        <div class="alert alert-success alert-dismissable hidden label-cargando col-md-6 col-md-offset-3" style="background: none">
                            <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> El curso se está guardando...</label>
                        </div>
                    </div>
                    <button type="button" class="btn blue editable-submit edit-curso-submit">
                        <i class="fa fa-check"> Guardar</i>
                    </button>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="confirm_delete_curso" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Eliminación de curso</h4>
                </div>
                <div class="modal-body" align="center">
                    <h4>¿Confirma que desea eliminar: <span id="curso_a_eliminar"></span>?</h4>

                </div>
                <div class="modal-footer">
                    <button type="button"  class="btn btn-primary btn-eliminar-curso">Sí, Eliminar</button>
                    <button type="button" data-dismiss="modal" class="btn">No, Cancelar</button>
                </div>
            </div>
        </div>
    </div>

<script>

    $('.edit-sector').on('click', function(event) {

        var ruta = '{!!url('upload/')!!}' + '/' + $(this).attr('data-pry') + '/contenido/';
        var id = $(this).attr('data-pk');
        var nombre= $(this).attr('data-nombre');

        $('#id_sector').val(id);
        $('#nombre_sector').val(nombre);
        $('#icono_sector').attr('src', ruta + $(this).attr('data-icono'));
        $('#icono_activo_sector').attr('src', ruta + $(this).attr('data-icono-activo'));

    });

    $('.newCategoriaCurso').on('click', function (ev) {
        $('#addCategoriaCurso').find('.id_sector').val($(this).find('a').attr('data-id-sector'));

    });
    $(document).on('click', '.newCategoriaCurso-submit', function() {

        var data = {};
        data._token = '{!!csrf_token()!!}';
        data.id_sector = $('#addCategoriaCurso').find('.id_sector').val();
        data.nombre = $('#addCategoriaCurso').find('.nombre_sector').val();
        data.id_proyecto = $('body').attr('data-idpry');

        $.ajax({
            type: "POST",
            url: "{!! url(Request::segment(1).'/newcategoriacurso') !!}",
            data: data,
            success: function(data){

                var item = '<li class="categ-linea" id="categ-linea' +data.id +'" data-id="'+ data.id + '" data-sector="' + data.id_sector + '">'
                        +'<a class="obj-linea" data-toggle="tab" href="#categ'+data.id+'">'
                        +'<h4 class="titulo-link-linea">'+data.nombre+'</h4></a></li>';

                $('#listado-cursos').find('.tab-content').append('<div class="tab-pane fade" id="categ'+ data.id +'">'
                        +'<ul class="docs" >'
                        +'<li class="newCurso">'
                        +'<a class="titulo-docs" data-toggle="modal" data-target="#addCurso" href="javascript:;" data-id-categoria="'+data.id+'">'
                        +'<span class="fa fa-plus"> NUEVO</span>'
                        +'</a>'
                        +'</li>'
                        +'</ul>'
                        +'</div>');
                $(item).insertBefore($('#sector'+data.id_sector).find('.newCategoriaCurso'));

                $('#addCategoriaCurso').modal('hide');
            },
            error: function(){
                alert('Error en la conexión');
            }
        });
    });

    $(document).on('click', '.editCategoriaCurso', function() {

        $('#editCategoriaCurso').find('.lista').empty();

        var id = $(this).find('a').attr('data-id-sector');

        var data = {};
        data._token = '{!!csrf_token()!!}';
        data.id_sector = id;
        data.idioma = $('body').attr('data-idioma');

        $.ajax({
            type: "POST",
            url: "{!! url(Request::segment(1).'/obtenercategoriascursos') !!}",
            data: data,
            success: function(data){
                $.each( data, function( key ) {
                    $('#editCategoriaCurso').find('.lista').append( '<div class="col-md-12 atributo" id="categ-curso'+ data[key].id +'" style="margin-bottom: 15px">'
                            +'<input type="text" name="categoria_id[]" value="'+ data[key].id +'" class="nomostrar"/>'
                            +'<input class="input-blue" type="text" name="categoria_nombre[]" value="'+ data[key].nombre +'" />'
                            +'<a href="javascript:;" class="eliminar-categoria-curso" data-id="'+ data[key].id +'">'
                            +'<i class="fa fa-times" aria-hidden="true"></i></a></div>');
                });

            },
            error: function(){
                alert('Error en la conexión');
            }
        });
    });

    $(document).on('click', '.eliminar-categoria-curso', function() {
        var id = $(this).attr('data-id');

        var data = {};
        data._token = '{!!csrf_token()!!}';
        data.id = id;

        $.ajax({
            type: "POST",
            url: "{!! url(Request::segment(1).'/eliminarcategoriacurso') !!}",
            data: data,
            success: function(data){
                if(data!=0){
                    $('#editCategoriaCurso').find('.desactivar').removeClass("nomostrar");
                    $('#editCategoriaCurso').find('.boxs-categ-cursos').addClass("nomostrar");
                    $('#editCategoriaCurso').find('.sieliminar-categ-curso').attr("id-categoria",data);
                }
                else{
                    $('#categ-curso'+id).remove();
                }
            },
            error: function(){
                alert('Error en la conexión');
            }
        });
    });

    $(document).on('click', '.ok-categ-curso', function() {

        $('#editCategoriaCurso').find('.desactivar').addClass("nomostrar");
        $('#editCategoriaCurso').find('.boxs-categ-cursos').removeClass("nomostrar");

    });

    $(document).on('change', '.btn-file-curso :file', function() {
        var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', label);

        var reader = new FileReader();
        reader.readAsDataURL(this.files[0]);
    });
    $('.btn-file-curso :file').on('fileselect', function(event, label) {
        $('.pdf_curso_nombre').val(label);
    });

    $(document).on('change', '.btn-fondo-curso :file', function() {

        var input = $(this);

        var reader = new FileReader();

        reader.onload = function(e) {
            var fondo = $(input).parent().parent();
            $(fondo).css('background-image','url('+ e.target.result+ ')');
            $(fondo).css('background-size','cover');
            $(fondo).css('background-position','center');
            $(fondo).css('background-repeat','no-repeat');

        };
        reader.readAsDataURL(this.files[0]);
    });

    $(document).on('click', '.newCurso', function(){

        $('#new_id_categoria_curso').val($(this).find('a').attr('data-id-categoria'));
        $('#new_id_proyecto_curso').val($(this).find('a').attr('data-pry'));
        $('#new_id_sector_curso').val($(this).find('a').attr('data-sector'));
        $('.label-cargando').addClass('hidden');

        $('#new_titulo_curso').val('');
        $('#new_texto1_curso').val('');
        $('#new_texto2_curso').val('');
        $('#new_img1_curso').replaceWith('<input type="file" name="imagen1" id="new_img1_curso">');
        $('#new_img2_curso').replaceWith('<input type="file" name="imagen2" id="new_img2_curso">');
        $('#new_fondo_curso').replaceWith('<input type="file" name="fondo" id="new_fondo_curso">');
        $('.image-curso1').find('img').attr('src', '');
        $('.image-curso2').find('img').attr('src', '');
        $('#modal_fondo_curso').css('background-image', 'none');

    });

    $(document).on('click', '.nuevo-curso-submit', function() {

        $('.label-cargando').removeClass('hidden');
        var data = new FormData();

        var imagen1, imagen2, pdf, fondo;

        imagen1 = document.getElementById('new_img1_curso');
        if(imagen1.files[0])
        {
            data.append('imagen1', imagen1.files[0]);
        }

        imagen2 = document.getElementById('new_img2_curso');
        if(imagen2.files[0])
        {
            data.append('imagen2', imagen2.files[0]);
        }

        pdf = document.getElementById('new_pdf_curso');
        if(pdf.files[0])
        {
            data.append('pdf', pdf.files[0]);
        }

        fondo = document.getElementById('new_fondo_curso');
        if(fondo.files[0])
        {
            data.append('fondo', fondo.files[0]);
        }


        data.append('id_categoria', $('#new_id_categoria_curso').val());
        data.append('id_proyecto', $('#new_id_proyecto_curso').val());
        data.append('titulo', $('#new_titulo_curso').val());
        data.append('texto1', $('#new_texto1_curso').val());
        data.append('texto2', $('#new_texto2_curso').val());
        data.append('_token', '{!!csrf_token()!!}');

        $.ajax({
            type: "POST",
            url: "{!! url(Request::segment(1).'/savenewcurso') !!}",
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                $('.label-cargando').addClass('hidden');
                $('#addCurso').modal('hide');
                var item =
                        '<li><a class="titulo-docs curso" href="javascript:;" data-pry="'+ $('#new_id_proyecto_curso').val() +'" data-id="'+ data.id
                        +'" data-categ="'+ data.id_categoria+ '" data-sector="' + $('#new_id_sector_curso').val() + '"data-titulo="'+data.titulo+'" data-texto1="'+ data.texto1+'" data-texto2="'+data.texto2
                        +'" data-img1="'+data.imagen1+'" data-img2="'+ data.imagen2+'" data-fondo="'+ data.imagen_fondo+'" data-pdf="'+data.pdf
                        +'">'
                        + data.titulo
                        +'</a><a class="edit-curso" data-toggle="modal" data-target="#editCurso" href="javascript:;"><span class="fa fa-pencil"></span></a>'
                        +'<a class="delete-curso" data-toggle="modal" data-target="#confirm_delete_curso" href="javascript:;"><span class="fa fa-remove"></span></a></li>';

                $(item).insertBefore($('#categ'+data.id_categoria).find('.newCurso'));
            },
            error: function (xmlHttpRequest, textStatus, errorThrown){
                if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                    return;
            }
        }, "json");
    });

    $(document).on('click', '.delete-curso', function(){
        var curso = $(this).parent().find('.curso');
        $('#curso_a_eliminar').text($(curso).attr('data-titulo'));
        $('.btn-eliminar-curso').attr('data-id', $(curso).attr('data-id'))
        $('.btn-eliminar-curso').attr('data-pry', $(curso).attr('data-pry'))
    });
    $(document).on('click', '.btn-eliminar-curso', function(){

        var id = $(this).attr('data-id');

        var data = {};
        data._token = '{!!csrf_token()!!}';
        data.id_curso = id;
        data.id_proyecto = $(this).attr('data-pry');

        $.ajax({
            type: "POST",
            url: "{!! url(Request::segment(1).'/eliminarcurso') !!}",
            data: data,
            success: function(data){

                $('.detalle-curso').addClass('hidden');
                $('#confirm_delete_curso').modal('hide');
                $('#curso'+id).remove();

            },
            error: function(){
                alert('Error en la conexión');
            }
        });

    });

    $(document).on('click', '.edit-curso', function(){

        var curso = $(this).parent().find('.curso');
        var ruta = '{!!url('upload/')!!}' + '/' + $(curso).attr('data-pry') + '/cursos';

        $('#edit_id_curso').val($(curso).attr('data-id'));
        $('#edit_id_proyecto_curso').val($(curso).attr('data-pry'));
        $('.label-cargando').addClass('hidden');

        $('#edit_titulo_curso').val($(curso).attr('data-titulo'));
        $('#edit_texto1_curso').val($(curso).attr('data-texto1'));
        $('#edit_texto2_curso').val($(curso).attr('data-texto2'));

        $('.image-curso1').find('img').attr('src', ruta + '/img/' + $(curso).attr('data-img1'));
        $('.image-curso2').find('img').attr('src', ruta + '/img/' + $(curso).attr('data-img2'));
        $('#edit_modal_fondo_curso').css('background-image', 'url('+ruta + '/img/' + $(curso).attr('data-fondo')+')');

        if($(curso).attr('data-pdf')!='')
        {
            $('.pdf_curso_nombre').val($(curso).attr('data-titulo')+'.pdf');
        }


    });

    $(document).on('click', '.edit-curso-submit', function() {

        $('.label-cargando').removeClass('hidden');
        var data = new FormData();

        var imagen1, imagen2, pdf, fondo;

        imagen1 = document.getElementById('edit_img1_curso');
        if(imagen1.files[0])
        {
            data.append('imagen1', imagen1.files[0]);
        }

        imagen2 = document.getElementById('edit_img2_curso');
        if(imagen2.files[0])
        {
            data.append('imagen2', imagen2.files[0]);
        }

        pdf = document.getElementById('edit_pdf_curso');
        if(pdf.files[0])
        {
            data.append('pdf', pdf.files[0]);
        }

        fondo = document.getElementById('edit_fondo_curso');
        if(fondo.files[0])
        {
            data.append('fondo', fondo.files[0]);
        }


        data.append('id_curso', $('#edit_id_curso').val());
        data.append('id_proyecto', $('#edit_id_proyecto_curso').val());
        data.append('titulo', $('#edit_titulo_curso').val());
        data.append('texto1', $('#edit_texto1_curso').val());
        data.append('texto2', $('#edit_texto2_curso').val());
        data.append('_token', '{!!csrf_token()!!}');
        data.append('idioma', $('body').attr('data-idioma'));

        $.ajax({
            type: "POST",
            url: "{!! url(Request::segment(1).'/editcurso') !!}",
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                $('.label-cargando').addClass('hidden');
                $('#editCurso').modal('hide');

                var item =
                        '<li><a class="titulo-docs curso" href="javascript:;" data-pry="'+ $('#edit_id_proyecto_curso').val() +'" data-id="'+ data.id
                        +'" data-titulo="'+data.titulo+'" data-texto1="'+ data.texto1+'" data-texto2="'+data.texto2
                        +'" data-img1="'+data.imagen1+'" data-img2="'+ data.imagen2+'" data-fondo="'+ data.imagen_fondo+'" data-pdf="'+data.pdf
                        +'">'
                        + data.titulo
                        +'</a><a class="edit-curso" data-toggle="modal" data-target="#editCurso" href="javascript:;"><span class="fa fa-pencil"></span></a>'
                        +'<a class="delete-curso" href="javascript:;"><span class="fa fa-remove"></span></a></li>';

                $('#curso'+ data.id).find('.curso').replaceWith(item);
            },
            error: function (xmlHttpRequest, textStatus, errorThrown){
                if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                    return;
            }
        }, "json");
    });
</script>
@endif

<script>
    $(function(){

        var sector = '<?php if(isset($_GET['sector'])){ echo $_GET['sector'];} else {echo '';} ?>';
        if(sector!='')
        {
            $('.categ-negocio').removeClass('active');
            $('#link'+sector).addClass('active');
            $('#sector'+sector).addClass('active');
            $('#sector'+sector).addClass('in');
            $('.linea-servicio').removeClass('hidden');
        }
        var categ = '<?php if(isset($_GET['categ'])){ echo $_GET['categ'];} else {echo '';} ?>';
        if(categ!='')
        {
            $('.categ-linea').removeClass('active');
            $('#categ-linea'+categ).addClass('active');
            $('#categ'+categ).addClass('active');
            $('#categ'+categ).addClass('in');
            $('.listado-cursos').removeClass('hidden');
        }
        var curso = '<?php if(isset($_GET['curso'])){ echo $_GET['curso'];} else {echo '';} ?>';
        if(curso!='')
        {
            $('.curso').removeClass('active');
            $('#curso'+curso).find('a.curso').addClass('active');
            $('#curso'+curso).find('a.curso').click();
        }
    });
</script>

    <script>
        $(document).on('click', '.curso', function(){

            var path = '{!!Request::path()!!}';
            console.log(path);

            window.history.replaceState(null, null, "/" + path +"?sector="+$(this).attr('data-sector')+"&categ="
                    +$(this).attr('data-categ')+"&curso=" +$(this).attr('data-id')+"");

            var id_proyecto = $(this).attr('data-pry');
            var ruta = '{!!url('upload/')!!}' + '/' + id_proyecto + '/cursos';

            if($('.detalle-curso').hasClass('hidden'))
            {
                $('.detalle-curso').removeClass('hidden')
            }
            $('.curso').removeClass('active');
            $(this).addClass('active');

            $('.titulo-curso').text($(this).attr('data-titulo'));
            $('#texto1_curso').text($(this).attr('data-texto1'));
            $('#texto2_curso').text($(this).attr('data-texto2'));

            if($(this).attr('data-img1')!='') {
                $('#curso-img-1').attr('src', ruta + '/img/' + $(this).attr('data-img1'));
                $('#curso-img-1').removeClass('hidden');
            }
            else {
                $('#curso-img-1').addClass('hidden');
            }

            if($(this).attr('data-img2')!='') {
                $('#curso-img-2').attr('src', ruta + '/img/' + $(this).attr('data-img2'));
                $('#curso-img-2').removeClass('hidden');
            }
            else {
                $('#curso-img-2').addClass('hidden');
            }

            $('.btn-download-pdf').attr('download',$(this).attr('data-titulo') );
            $('.btn-download-pdf').attr('href',ruta + '/pdf/' + $(this).attr('data-pdf') );
            console.log(ruta + '/pdf/' + $(this).attr('data-pdf') );

            $('.detalle-curso').css('background-image', 'url(' + ruta + '/img/' + $(this).attr('data-fondo') + ')');

            if ($(window).width()  > 767) {
                $('html, body').animate({
                    scrollTop: $('.detalle-curso').offset().top - 100
                }, 1000);
                return false;
            }
            else{
                $('html, body').animate({
                    scrollTop: $('.detalle-curso').offset().top
                }, 1000);
                return false;
            }
        });

        $(document).on('click', '.categ-linea', function(){

            var path = '{!!Request::path()!!}';

            window.history.replaceState(null, null, "/" + path +"?sector="+$(this).attr('data-sector')+"&categ="+$(this).attr('data-id')+"");

            $('.detalle-curso').addClass('hidden');
            $('.listado-cursos').removeClass('hidden');

            if ($(window).width()  > 767) {
                $('html, body').animate({
                    scrollTop: $('.listado-cursos').offset().top - 100
                }, 1000);
                return false;
            }
            else{
                $('html, body').animate({
                    scrollTop: $('.listado-cursos').offset().top
                }, 1000);
                return false;
            }
        });

        $(document).on('click', '.link', function(){

            var path = '{!!Request::path()!!}';

            window.history.replaceState(null, null, "/" + path +"?sector="+$(this).attr('data-id')+"");
            $('.detalle-curso').addClass('hidden');
            $('.listado-cursos').addClass('hidden');
            $('.linea-servicio').removeClass('hidden');

            if ($(window).width()  > 767) {
                $('html, body').animate({
                    scrollTop: $('.linea-servicio').offset().top-100
                }, 1000);
                return false;
            }
            else{
                $('html, body').animate({
                    scrollTop: $('.linea-servicio').offset().top
                }, 1000);
                return false;
            }
        });

    </script>


