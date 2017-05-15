
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo URL::asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/global/plugins/dropzone/dropzone.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo URL::asset('assets/global/plugins/dropzone/basic.min.css'); ?>" rel="stylesheet" type="text/css">
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="<?php echo URL::asset('assets/global/css/components.min.css" rel="stylesheet'); ?>" id="style_components" type="text/css" />
<link href="<?php echo URL::asset('assets/global/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?php echo URL::asset('assets/layouts/layout5/css/layout.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/layouts/layout5/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/pages/css/portfolio.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo URL::asset('css/colorpicker.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo URL::asset('css/layout.css'); ?>" rel="stylesheet" type="text/css">

<link href="<?php echo URL::asset('css/'.$modulo->css_nombre); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo URL::asset('css/style.css'); ?>" rel="stylesheet" type="text/css">


@if($modulo->imagen_fondo!='')
<div id="container-{{$modulo->modulo_blade}}" class="contenedorprincipal" style="background-image: url('../../../../img/{{$modulo->imagen_fondo}}')!important; background-size: cover; margin: 0; width: 100%; position: relative; min-height: 800px;">
@else
<div id="container-{{$modulo->modulo_blade}}" class="contenedorprincipal" style="background-color: #{{$modulo->color_fondo}}; margin: 0; width: 100%; position: relative; min-height: 850px; >
@endif

    @if($modulo->tipo_id==1)
        <a name="inicio"></a>
    @else
        <a name="{{$modulo->titulo}}"></a>
    @endif

    <!-- BEGIN BREADCRUMBS -->
    {!! Form::open(array('url' => Request::segment(1).'/savecontenido/'. $modulo->id , 'class' => 'form-horizontal', 'files' => true)) !!}

    <div class="editorSave">
        <h5><button type="submit" class="btn" style="background-color: transparent">
                <i class="icono fa fa-floppy-o"></i>
            </button></h5>

        <div class="form-group" style="margin-bottom: 0">
                <span class="btn  fondo-file btn-file" style="position: static!important; font-size: 36px; padding-right: 0">
                    <span class="fa fa-picture-o"></span>
                    <input type="file" id="imagen_fondo" class="imagen-fondo" name="imagen_fondo" style="min-height: 0!important; margin-top: 50px; width: 50px">
                </span>
            </div>
        <br/>
        <div class="form-group" style="margin-bottom: 0">
             <button type="button" class="remover-fondo btn" style="background-color: transparent">
                <span class="fa fa-picture-o" style="font-size: 36px;color: white;  position: relative; padding-left: 10px">
                    <span class="fa fa-remove" style="color: red; position: absolute; top: 3px; right: 0px; font-size: 25px; width: 36px; height: 36px; line-height: 30px; border-radius: 18px!important;">
                    </span>
                </span>
            </button>
        </div>
        <br/>
       <div id="colorSelector" style="float: right; right: 15px">
                <div style="background-color: #{{$modulo->color_fondo}};"></div>
        </div>

    </div>
    <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
    <div class="transparencia">
        <div class="form-group form-md-line-input" style="position: absolute; left: 2%;  width: 98%">
            <input type="text" class="form-control input-marca" id="form_control_1" placeholder="Título" name="titulomd" value="{{$modulo->titulo}}">
            <span class="help-block">Ingrese titulo </span>
        </div>
        <div class="form-group form-md-line-input" style="position: absolute; top: {{$modulo->logo_x}}%; left: {{$modulo->logo_y}}%; z-index: 10">
            @if(isset($modulo->logo))
                <div class="imagethumb">
                    @if(@getimagesize(public_path().'/img/' . $modulo->logo))
                        <img src="{!!url('img/' . $modulo->logo)!!}" alt="" id="imginicial" width="200" height="100" style="z-index: -3">
                    @else
                        <img src="{!!url('img/no-image.png')!!}" alt="" id="imginicial" width="200" height="100" style="z-index: -3">
                    @endif
                    <span class="btn btn-primary btn-file">
                        <span class="fa fa-folder-open-o"></span> <input type="file" id="filelogo" class="files" name="filelogo">
                    </span>
                </div>
                <div class="spinner" style="display: none">Loading...</div>
            @endif
        </div>
        <div class="form-group form-md-line-input" >
            <input class="nomostrar" id="color_fondo" name="color_fondo" value="{{$modulo->color_fondo}}" style="border: 1px solid lightgray">
            <input class="nomostrar" id="remover_fondoimg" name="remover_fondoimg" value="0" >
        </div>
        @if($modulo->tipo_id==3)
         <div class="form-group form-md-line-input" style="position: absolute; left: 40%; top:75%; width: 25%">
            <input type="text" class="form-control input-footer" id="form_control_1" placeholder="Copyright" name="copyright" value="{{$proyecto->copyright}}">
            <span class="help-block">Ingrese copyright </span>
        </div>
        @endif
         <!--div class="form-group form-md-line-input" style="float: right; right: 30%; margin-top: 3%">
             <span class="btn btn-primary fondo-file btn-file">
                <span class="fa fa-folder-open-o"></span>
                Imagen de fondo<input type="file" id="imagen_fondo" class="imagen-fondo" name="imagen_fondo">
            </span>
        </div>
         <div class="form-group form-md-line-input" style="float: right; right: 27%; top: 5px;">
            <a href="{!!url('comercial/removeimgfondo/'.$modulo->id)!!}"><span class="fa fa-remove" style="font-size: 30px; color: red; border: 1px solid white; background-color: white; width: 36px; height: 36px; line-height: 30px; border-radius: 18px!important;"></span></a>
        </div-->

        <?php $cant = 1 ?>
        @foreach($estructuras as $estructura)
            <br/>
            <div>
                <input type="text" class="form-control nomostrar" id="form_control_1"  name="idmodulos[]" value="{{$estructura->id}}">
                @if($cant ==1)
                    @if(isset($estructura->titulo))
                        <div class="form-group form-md-line-input" style="position: absolute; top: {{$estructura->titulo_x }}%; left: {{ $estructura->titulo_y }}%; width: 25%; margin-bottom: 0">
                            <textarea type="text" class="form-control input-tituloh1" id="form_control_1" placeholder="Titulo item {{$cant}}" name="titulo[{{$estructura->id}}]" style="margin-bottom: 0">{{$estructura->titulo}}</textarea>
                            <span class="help-block">Ingrese título del item</span>
                        </div>
                    @endif
                     @if(isset($estructura->comentario))
                    <div class="form-group form-md-line-input" style="position: absolute; top: {{$estructura->comentario_x }}%; left: {{ $estructura->comentario_y }}%; width: 25%; margin-bottom: 0">
                        <textarea type="text" class="form-control input-comentarioh1" id="form_control_1" placeholder="Comentario {{$cant}}" name="comentario[{{$estructura->id}}]" style="resize: both; ">{{$estructura->comentario}}</textarea>
                        <span class="help-block">Ingrese comentario del item</span>
                    </div>
                    @endif
                @else
                    @if(isset($estructura->titulo))
                        <div class="form-group form-md-line-input" style="position: absolute; top: {{$estructura->titulo_x }}%; left: {{ $estructura->titulo_y }}%; width: 25%; margin-bottom: 0">
                            <textarea type="text" class="form-control input-titulo" id="form_control_1" placeholder="Titulo item {{$cant}}" name="titulo[{{$estructura->id}}]" style="margin-bottom: 0">{{$estructura->titulo}}</textarea>
                            <span class="help-block">Ingrese título del item</span>
                        </div>
                    @endif
                    @if(isset($estructura->comentario))
                    <div class="form-group form-md-line-input" style="position: absolute; top: {{$estructura->comentario_x }}%; left: {{ $estructura->comentario_y }}%; width: 25%; margin-bottom: 0">
                        <textarea type="text" class="form-control input-comentario" id="form_control_1" placeholder="Comentario {{$cant}}" name="comentario[{{$estructura->id}}]" style="resize: both; ">{{$estructura->comentario}}</textarea>
                        <span class="help-block">Ingrese comentario del item</span>
                    </div>
                    @endif
                @endif

                @if(isset($estructura->subtitulo))
                    <div class="form-group form-md-line-input" style="position: absolute; top: {{$estructura->subtitulo_x }}%; left: {{ $estructura->subtitulo_y }}%; width: 25%">
                        <input type="text" class="form-control input-subtitulo" id="form_control_1" placeholder="Subtítulo {{$cant}}" name="subtitulo[{{$estructura->id}}]" value="{{$estructura->subtitulo}}">
                        <span class="help-block">Ingrese subtítulo del item</span>
                    </div>
                @endif


                @if(isset($estructura->imagen))
                    <div class="imagethumb" style="position: absolute; top: {{$estructura->imagen_x }}%; left: {{ $estructura->imagen_y }}%">
                        @if(@getimagesize(public_path().'/img/' . $estructura->imagen))
                            <img src="{!!url('img/' . $estructura->imagen)!!}" alt="" id="imginicial" width="200" height="200" style="z-index: -3" class="input-imagen">
                        @else
                            <img src="{!!url('img/no-image.png')!!}" alt="" id="imginicial" width="200" height="200" style="z-index: -3" class="input-imagen">
                        @endif
                        <span class="btn btn-primary btn-file">
                                    <span class="fa fa-folder-open-o"></span> <input type="file" id="file{{$estructura->id}}" class="files" name="file{{$estructura->id}}">
                            </span>
                    </div>
                    <div class="spinner" style="display: none">Loading...</div>
                    <!--div style="position: absolute; top: {{$estructura->imagen_x }}%; left: {{ $estructura->imagen_y }}%">
                            <form action="../assets/global/plugins/dropzone/upload.php" class="dropzone dropzone-file-area dz-clickable" id="my-dropzone{{$cant}}" name="my-dropzone{{$cant}}" style="width: 500px;">
                                <h3 class="sbold">Suelte imagenes aquí<br/> o clic para agregar</h3>
                                <div class="dz-default dz-message"><span></span></div>
                                <input type="file" id="file{{$cant}}" name="file{{$cant}}" class=" files dz-hidden-input nomostrar">
                            </form>
                        </div>
                        <div style="position: absolute; top: {{$estructura->imagen_x }}%; left: {{ $estructura->imagen_y }}%">
                            <form action="../assets/global/plugins/dropzone/upload.php" class="dropzone dropzone-file-area dz-clickable" id="my-dropzone{{$cant}}" name="my-dropzone{{$cant}}" style="width: 500px;">
                                <h3 class="sbold">Suelte imagenes aquí<br/> o clic para agregar</h3>
                                <div class="dz-default dz-message"><span></span></div>
                                <input type="file" id="file{{$cant}}" name="file{{$cant}}" class=" files dz-hidden-input nomostrar">
                            </form>
                        </div-->
                @endif
                @if(isset($estructura->video))
                    <div class="form-group form-md-line-input" style="position: absolute; top: {{$estructura->video_x }}%; left: {{ $estructura->video_y }}%; width: 25%">
                        <input type="text" class="form-control input-video" id="form_control_1" placeholder="Video {{$cant}}" name="video[{{$estructura->id}}]" value="{{$estructura->video}}">
                        <span class="help-block">Ingrese id de video</span>
                    </div>
                @endif
                @if(isset($estructura->url))
                    <div class="form-group form-md-line-input" style="position: absolute; top: {{$estructura->url_x }}%; left: {{ $estructura->url_y }}%; width: 25%">
                        <input type="text" class="form-control input-url" id="form_control_1" placeholder="Url {{$cant}}" name="url[{{$estructura->id}}]" value="{{$estructura->url}}">
                        <span class="help-block">Ingrese url del item</span>
                    </div>
                @endif
                <?php $cant = $cant + 1 ?>
            </div>
        @endforeach
    </div>
    <?php $sociales = App\Console\Commands\Funciones::getSocial($pry->idesPR);?>
    @if(isset($sociales))
        <div class="form-group form-md-line-input input-social" style="position: absolute; top:35%; left: 45%;">
            @foreach($sociales as $social)
                <a class="{{$social->icono}} editarsocial" data-idredsocial="{{$social->id_red_social}}" data-icono="{{$social->icono}}" data-url="{{$social->url}}" data-id="{{$social->id}}" data-toggle="modal" data-target="#editarSocial"></a>
            @endforeach
        </div>
    @endif
    <!--/form-->
    {!! Form::close() !!}

</div>
<div class="modal fade" id="editarSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="">
          <div class="container">
            <?php $iconossocial = App\Console\Commands\Funciones::getIconossocial();?>
            <!-- BEGIN PAGE CONTENT INNER -->
             {!! Form::open(array('url' => Request::segment(1).'/editarsociales','files' => true)) !!}
            <div class="">
                <div class="col-md-5">
                <?php $cant=0; ?>
            @foreach($sociales as $item)

                    <div class="col-md-12 form-group"  style="text-align: left">
                      {!! Form::label('input','Icono:') !!}
                      <input type="text" class="nomostrar" value="{{$item->icono}}" name="icono[]" id="iconosocial{{$cant}}" />

                    </div>
                    <div class="col-md-1 form-group" style="text-align: center; font-size: 20px; padding-top: 2%">
                        <span  class="{{$item->icono}} imagenicono[]" id="imagenicono{{$cant}}"></span>
                    </div>
                    <div class="col-md-11 form-group">
                        <select class="form-control selectsocial" name="id_red_social[]" data-id="{{$cant}}">
                            <option class="optsocial" data-icono="{{$item->icono}}" value="{{$item->id_red_social}}"></option>
                            @foreach($iconossocial as $icono)
                                <option class="optsocial" data-icono="{{$icono->icono}}" value="{{$icono->id}}">{{$icono->marca}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 form-group" style="text-align: left">
                          {!! Form::label('input','Url:') !!}
                          <input type="text" class="form-control" value="{{$item->url}}" name="url[]" id="urlsocial[{{$cant}}]" />

                    </div>
                    <input name="id_socialicono[]" class="nomostrar" id="id_socialicono{{$cant}}" value="{{$item->id}}"/>
                <?php $cant++; ?>
            @endforeach

                    <button type="submit" class="btn btns">Guardar <i class="fa fa-floppy-o"></i></button>
                </div>

            </div>
            {!! Form::close() !!}
            <!-- END PAGE CONTENT INNER -->
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
<script>

    $('.selectsocial').change(function(){
        var id = $(this).attr('data-id');
        $('#imagenicono'+id).removeClass();
        $('#imagenicono'+id).addClass($(this).children(":selected").attr('data-icono'));
        $('#iconosocial'+id).val($(this).children(":selected").attr('data-icono'));

    });

    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', label);

        var reader = new FileReader();

        reader.onload = function(e) {
            options.imgSrc = e.target.result;
            var ancho = $(input).parent().parent().find('img').css('width');
            var alto = $(input).parent().parent().find('img').css('height');
            $(input).parent().parent().find('img')
                    .attr('src', e.target.result)
                    .width(ancho)
                    .height(alto);
        };
        reader.readAsDataURL(this.files[0]);
    });
    $('.btn-file :file').on('fileselect', function(event, label) {
        $('#imgnombre').val(label);
    });

    var options =
    {
        imageBox: '.imageBox',
        thumbBox: '.thumbBox',
        spinner: '.spinner',
        imgSrc: 'avatar.png'
    };

    document.querySelector('.files').addEventListener('change', function(){

    });

</script>
<script>
    $(document).on('change', '.fondo-file :file', function() {
        var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', label);

        var reader = new FileReader();

        reader.onload = function(e) {
            options.imgSrc = e.target.result;
            $('.contenedorprincipal').css('background-image','url('+ e.target.result+ ')');
            $('.contenedorprincipal').css('background-size','cover');
            $('.contenedorprincipal').css('background-position','center');
            $('.contenedorprincipal').css('background-repeat','no-repeat');
            $('#remover_fondoimg').val('0');

        };
        reader.readAsDataURL(this.files[0]);
    });
    $('.fondo-file :file').on('fileselect', function(event, label) {

    });

    var options =
    {
        imageBox: '.imageBox',
        thumbBox: '.thumbBox',
        spinner: '.spinner',
        imgSrc: 'avatar.png'
    };

    document.querySelector('.imagen-fondo').addEventListener('change', function(){

    });


    $('.remover-fondo').on('click', function(event) {

		$('.contenedorprincipal').css('background-image', '');
		$('#remover_fondoimg').val('1');
		var input = $('#imagen_fondo');
         var clon = "<input type='file' id='imagen_fondo' class='imagen-fondo' name='imagen_fondo' style='min-height: 0!important; margin-top: 50px'>";
        input.replaceWith(clon);

	});

</script>
<script src="<?php echo URL::asset('assets/layouts/layout5/scripts/layout.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/colorpicker/js/colorpicker.js'); ?>" type="text/javascript"></script>
<script>
    $('#colorSelector').ColorPicker({
        color: '#{{$modulo->color_fondo}}',
        onShow: function (colpkr) {
            $(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            $('#colorSelector div').css('backgroundColor', '#' + hex);
            $('#color_fondo').val(hex);
            $('.contenedorprincipal').css('background-color','#' + hex);
        }
    });
</script>
