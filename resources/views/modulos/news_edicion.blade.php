 @if($imagen_raya=='true')
 <div id="imagenfondo" style="float: right; width: 100%; background-image: url('{!!url('img/fondo-rayas.png')!!}')!important; background-size: cover ">
 @else
 <div id="imagenfondo" style="float: right; width: 100%; background-image:url('{!!url('upload/'.$pry_modulo->id_proyecto.'/contenido/'.$pry_modulo->imagen_fondo)!!}')!important; background-size: cover ">
@endif

    <div class="row fila">
        <?php
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        $modulo = $modulosDtll[0];
        ?>
        
            <div class="col-sm-10 col-sm-offset-1 contenido">
                <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                    <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">
                    @if($imagen_raya=='true')
                        <img src="{!!url('img/rayita-roja.png')!!}"/>
                    @endif
                    {{$modulo->titulo}}</h1>
                </div>
                @if(isset($url_relacionado) and $url_relacionado=='true')
                <label style="font-weight: bold;">Url relacionada:</label>
                  <h1 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">
                    {{$modulo->subtitulo}}</h1>
                @endif
               
                <?php $noticias = App\Console\Commands\Funciones::getNoticias($pry_modulo->id_proyecto,$idioma);
                ?>
                <div class="col-md-12" align="center" style="padding-bottom: 15px">
                    <button type="button" class="btn btn-info nueva-noticia" data-toggle="modal" data-target="#nuevaNoticia">Nueva noticia</button>
                </div>

                <div class="row news-box" style="margin: 0">
                    @foreach($noticias as $noticia)
                        <div class="col-sm-6 col-md-4 noticia-box" id="noticia{{$noticia->id}}">
                            <div style="position: relative; padding: 0">
                                <span class="edicion">
                                    <button type="button" class="btn btn-info editar-noticia" data-toggle="modal" data-target="#editarNoticia" data-id="{{$noticia->id}}">Editar noticia</button>
                                    <button type="button" class="btn btn-danger eliminar-noticia"  data-id="{{$noticia->id}}">Eliminar</button>
                                </span>

                                <div class="noticia">
                                    <img src="{!!url('upload/'.$noticia->id_pry_proyecto.'/contenido/'.$noticia->imagen)!!}"  alt="" />
                                    <div class="textos">
                                        <h3 class="titulo-noticia">{{$noticia->titulo}}</h3>
                                        @if($imagen_raya=='true')
                                            <img src="{!!url('img/raya.png')!!}" style="width: 100%; height: 2px;"/>
                                        @endif
                                        <p class="parrafo">
                                            {{$noticia->introduccion}}
                                        </p>
                                        <a href="#" class="read-more">
                                        @if($imagen_raya=='true')
                                            <img src="{!!url('img/rayita-roja-small.png')!!}" style="width: 11px"/>
                                        @endif
                                        {!!trans('messages.read_more')!!}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-sm-12 btn-mas btn-back-home" align="center">
                    @if($modulo->es_url_externo==1)
                        <a class="btn-ver-mas btn-mas-noticias linkareferencia edit-linkareferencia borde-boton fondo-boton " id="linkareferencia{{$modulo->id}}" href="{{$modulo->url}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">
                        @if($imagen_raya=='true')
                            <img src="{!!url('img/rayita-roja-small.png')!!}"/>
                        @endif
                            {!!$modulo->url_texto!!}
                        </a>
                    @else
                        <a class="btn-ver-mas btn-mas-noticias ancla linkareferencia edit-linkareferencia borde-boton fondo-boton" id="linkareferencia{{$modulo->id}}" href="#{{str_replace(' ', '', $modulo->url)}}"  data-pk="{{$modulo->id}}" data-url="{{$modulo->url}}" data-texto="{{$modulo->url_texto}}" data-url-externo="{{$modulo->es_url_externo}}" data-name="url_texto" data-toggle="popover" data-trigger="click" data-popover-content="#popoverlinkareferencia" title="">
                        @if($imagen_raya=='true')
                            <img src="{!!url('img/rayita-roja-small.png')!!}"/>
                        @endif
                            {!!$modulo->url_texto!!}
                        </a>
                    @endif
                </div>
            </div>
    </div>
</div>

<div id="editarNoticia" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog tabs-editar-modal modal-lg modal-lg-edit-galeria" >
        <!-- Modal content-->
        {!! Form::open(array('url' => Request::segment(1).'/savenoticia', 'files' => true)) !!}
        <div class="modal-content tabs-modal-content">
            <div class="modal-body tabs-modal-body row">
                <div class="col-md-6 sinpadding"  style="position: relative">
                    <div class="col-md-12" style="position: relative; padding-bottom: 15px">
                        <div class="col-md-12">
                            <img src="" name="img-noticia" id="img-noticia" style="width: 100%">
                        </div>
                        <input class="nomostrar" value="" id="id_noticia" name="id_noticia">
                        <input class="nomostrar" value="" id="noticia_idioma" name="idioma">

							<span class="btn btn-primary btn-openfile-noticia" style="z-index: 1; right: 20px;">
								<span class="fa fa-folder-open-o"></span> <input type="file" id="openfile-noticia" class="file" name="file">
							</span>
                    </div>
                    <div id="noticia_slider_edit">

                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn addNoticiaSlider"><span class="fa fa-plus"> Nueva imagen</span></button>
                    </div>
                </div>
                <div class="col-md-6 sinpadding" >
                    <button type="button" class="close" data-dismiss="modal" style="font-size: 20px">&times;</button>
                    <div class="col-md-12">
                        <input class="titulo-noticia" id="edit-titulo-noticia" name="titulo"  style="border: 0; border-bottom: 1px dashed blue;width: 100%;color:#000!important;" placeholder="Titulo Noticia"/>
                    </div>

                    <div class="col-md-12">
                        <textarea rows="3" maxlength="150" class="intro-noticia" id="edit-intro-noticia" name="introduccion" placeholder="Introducción"></textarea>
                    </div>
                    <div class="col-md-12">
                        <textarea rows="15" class="texto-noticia" id="edit-texto-noticia" name="texto" placeholder="Contenido"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="checkbox" class="destacado-noticia" id="edit-destacado-noticia" name="destacado"> Destacada
                    </div>
                </div>
                <div class="col-md-12" align="center">
                    <button type="submit" class="btn blue editable-submit btn-save-noticia" style="right: 20px">
                        <i class="fa fa-check"></i>
                    </button>
                    <br/>
                    <div class="alert alert-success alert-dismissable nomostrar label-cargando col-md-6 col-md-offset-3" style="background: none">
                        <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> Guardando noticia...</label>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div id="nuevaNoticia" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog tabs-editar-modal modal-lg modal-lg-edit-galeria" >
        <!-- Modal content-->
        {!! Form::open(array('url' => Request::segment(1).'/savenuevanoticia', 'files' => true)) !!}
        <div class="modal-content tabs-modal-content">
            <div class="modal-body tabs-modal-body row">
                <div class="col-md-6 sinpadding"  style="position: relative">
                    <input class="nomostrar" name="id_pry_proyecto" value="{{$pry_modulo->id_proyecto}}">
                    <div class="col-md-12" style="position: relative; padding-bottom: 15px">
                        <div class="col-md-12">
                            <img src="{!!url('img/icon-picture.png')!!}" name="img-noticia" style="width: 100%">
                        </div>

                        <span class="btn btn-primary btn-openfile-noticia" style="z-index: 1; right: 20px;">
                            <span class="fa fa-folder-open-o"></span> <input type="file" id="openfile-noticia" class="file" name="file">
                        </span>
                    </div>
                    <div id="noticia_slider">

                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn addNoticiaSlider"><span class="fa fa-plus"> Nueva imagen</span></button>
                    </div>
                </div>
                <div class="col-md-6 sinpadding" >
                    <button type="button" class="close" data-dismiss="modal" style="font-size: 20px">&times;</button>
                    <div class="col-md-12">
                        <input class="titulo-noticia"  name="titulo"  style="color:#000!important;border: 0; border-bottom: 1px dashed blue;width: 100%" placeholder="Titulo Noticia"/>
                    </div>

                    <div class="col-md-12">
                        <textarea rows="3" maxlength="150" class="intro-noticia"  name="introduccion" placeholder="Introducción"></textarea>
                    </div>
                    <div class="col-md-12">
                        <textarea rows="15" class="texto-noticia" name="texto" placeholder="Contenido"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="checkbox" class="destacado-noticia"  name="destacado"> Destacada
                    </div>
                </div>
                <div class="col-md-12" align="center">
                    <button type="submit" class="btn blue editable-submit btn-save-noticia" style="right: 20px">
                        <i class="fa fa-check"></i>
                    </button>
                    <br/>
                    <div class="alert alert-success alert-dismissable nomostrar label-cargando col-md-6 col-md-offset-3" style="background: none">
                        <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> Guardando noticia...</label>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

<script>
    $(document).on('click', '.editar-noticia', function() {

        var ruta = '{!!url('upload/')!!}';
        var id = $(this).attr('data-id');

        var id_proyecto ='';

        var data = {};
        data._token = '{!!csrf_token()!!}';
        data.id_noticia = id;
        data.idioma = $('body').attr('data-idioma');

        $.ajax({
            type: "POST",
            url: "{!! url(Request::segment(1).'/noticia') !!}",
            data: data,
            success: function(data){

                $('#edit-titulo-noticia').val(data.titulo);
                $('#edit-intro-noticia').val(data.introduccion);
                $('#edit-texto-noticia').val(data.texto);
                $('#id_noticia').val(data.id);
                $('#noticia_idioma').val(data.id_idioma);
                $('#img-noticia').attr('src', ruta+ '/'+ data.id_pry_proyecto+ '/contenido/'+data.imagen );

                if(data.destacado == '1')
                {
                    $('#edit-destacado-noticia').attr('checked','checked');
                }
                else
                {
                    $('#edit-destacado-noticia').removeAttr('checked');
                }

            },
            error: function(){
                console.log('Error en la conexión');
            }
        });

        $('#noticia_slider_edit').empty();

        var datos = {};
        datos._token = '{!!csrf_token()!!}';
        datos.id_noticia = id;

        $.ajax({
            type: "POST",
            url: "{!! url(Request::segment(1).'/obtenernoticiaslider') !!}",
            data: datos,
            success: function (data) {

                var slider = '';
                $.each( data, function( key ) {
                    $('#noticia_slider_edit').append( '<div class="col-sm-4 thumb-noticia" id="imgThumbNoticiaSlider'+ data[key].id+'">'
                            +'<input type="text" class="form-control nomostrar" name="id_noticia_slider[]" value="'+ data[key].id+'">'
                            +'<input type="text" class="form-control nomostrar" name="cantfiles_noticia_slider[]">'
                            +'<div class="image-thumb-noticia-slider">'
                            +'<img src="'+ruta+ '/'+ '{{$proyecto->id}}' + '/contenido/'+ data[key].imagen+'" alt="" id="imginicial" width="150" height="150">'
                            +'<span class="btn btn-primary btn-delete-noticia-slider" data-id="'+ data[key].id+'">'
                            +'<span class="fa fa-trash-o"></span>'
                            +'</span>'
                            +'<span class="btn btn-primary btn-file-noticia-slider">'
                            +'<span class="fa fa-folder-open-o"></span> <input type="file" id="file_noticia_slider'+key+'" class="file_noticia_slider" name="file_noticia_slider'+key+'">'
                            +'</span>'
                            +'</div>'
                            +'</div>');
                });
            },
            error: function () {
                console.log('Error en la conexión');
            }
        });
    });
    $(document).on('change', '.btn-openfile-noticia :file', function() {
        var input = $(this);
        var reader = new FileReader();

        reader.onload = function(e) {

            $(input).parent().parent().find('img')
                    .attr('src', e.target.result)
                    .width('100%')
                    .height('auto');
        };

        reader.readAsDataURL(this.files[0]);
        $('#upload_new_photo').val('1');

    });
    $(document).on('click', '.eliminar-noticia', function() {
        var id = $(this).attr('data-id');

        var data = {};
        data._token = '{!!csrf_token()!!}';
        data.id_noticia = id;

        $.ajax({
            type: "POST",
            url: "{!! url(Request::segment(1).'/eliminarnoticia') !!}",
            data: data,
            success: function(data){
                $('#noticia'+ data).remove();
            },
            error: function(){
                console.log('Error en la conexión');
            }
        });
    });
    $(document).on('click', '.addNoticiaSlider', function() {

        var cantImgSlider = $(".image-thumb-noticia-slider").length;

        var data = '<div class="col-sm-4 thumb-noticia" id="nuevoThumbNoticiaSlider'+cantImgSlider+'">'
                +'<div class="image-thumb-noticia-slider">'
                +'<input type="text" class="form-control nomostrar" name="cantfiles_noticia_slider[]">'
                +'<img src="{!!url('img/no-image.png')!!}" alt="" id="imginicial" width="150" height="150">'
                +'<span class="btn btn-primary btn-remove-selected-noticia-slider" data-id="'+cantImgSlider+'">'
                +'<span class="fa fa-remove"></span>'
                +'</span>'
                +'<span class="btn btn-primary btn-file-noticia-slider">'
                +'<span class="fa fa-folder-open-o"></span> <input type="file" id="file_noticia_slider'+ cantImgSlider +'" class="file_noticia_slider" name="file_noticia_slider'+ cantImgSlider +'">'
                +'</span>'
                +'</div>'
                +'</div>';

        $('#noticia_slider_edit').append(data);
    });
    $(document).on('change', '.btn-file-noticia-slider :file', function() {
        var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', label);

        var reader = new FileReader();

        reader.onload = function(e) {
            $(input).parent().parent().find('img')
                    .attr('src', e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    });
    $('.btn-file-slider :file').on('fileselect', function(event, label) {

    });
</script>