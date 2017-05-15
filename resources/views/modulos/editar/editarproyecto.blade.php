@extends('includes.app')
@section('style')

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo URL::asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="<?php echo URL::asset('assets/global/css/components.min.css" rel="stylesheet'); ?>" id="style_components" type="text/css" />
<link href="<?php echo URL::asset('assets/global/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?php echo URL::asset('assets/layouts/layout5/css/layout.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/layouts/layout5/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo URL::asset('assets/pages/css/portfolio.min.css'); ?>" rel="stylesheet" type="text/css">

<script src="<?php echo URL::asset('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
@endsection

@section('script')
       <!--[if lt IE 9]>
<script src="<?php echo URL::asset('assets/global/plugins/respond.min.js'); ?>"></script>
<script src="<?php echo URL::asset('assets/global/plugins/excanvas.min.js'); ?>"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/js.cookie.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo URL::asset('assets/global/plugins/select2/js/select2.full.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('js/jquery.validate.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js'); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo URL::asset('assets/global/scripts/app.min.js'); ?>" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL::asset('js/form-wizard.js'); ?>" type="text/javascript"></script>
<!--script src="<?php echo URL::asset('assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/pages/scripts/portfolio-3.min.js" type="text/javascript'); ?>"></script>
<script src="<?php echo URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?php echo URL::asset('assets/layouts/layout5/scripts/layout.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('assets/layouts/global/scripts/quick-sidebar.min.js'); ?>" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->

@endsection
        <!-- END THEME LAYOUT SCRIPTS -->
@section('content')
    <div class="page-content">
        <!-- BEGIN BREADCRUMBS -->

        <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
        <div class="page-content-container">
            <div class="page-content-row">
                <!-- BEGIN PAGE SIDEBAR -->

                <div class="page-content-col">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="portlet light" id="form_wizard_1">
                        <div class="portlet-body form">
                            {!! Form::open(array('url' => 'comercial/savecontenido/'. $modulo->id , 'class' => 'form-horizontal', 'files' => true)) !!}
                        <!--form class="form-horizontal" action="" id="submit_form" method="POST" novalidate="novalidate"-->
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <div class="">
                                            <button type="submit" class="btn green button-submit"> Guardar
                                                <i class="fa fa-floppy-o"></i>
                                            </button>
                                            <div class="col-md-12">
                                                <br>

                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Título" name="titulomd" value="{{$modulo->titulo}}">
                                                    <span class="help-block">Ingrese título de plantilla</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <textarea type="text" class="form-control" id="form_control_1" placeholder="Comentario" name="comentariomd" style="resize: vertical;">{{$modulo->comentario}}</textarea>
                                                    <span class="help-block">Ingrese comentario</span>
                                                </div>

                                                <?php $cant = 1 ?>
                                                @foreach($estructuras as $estructura)
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input type="text" class="form-control display-none" id="form_control_1"  name="idmodulos[]" value="{{$estructura->id}}">

                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" id="form_control_1" placeholder="Titulo item {{$cant}}" name="titulo[]" value="{{$estructura->titulo}}">
                                                            <span class="help-block">Ingrese título del item</span>
                                                        </div>
                                                            <div class="form-group form-md-line-input">
                                                                <input type="text" class="form-control" id="form_control_1" placeholder="Subtítulo {{$cant}}" name="subtitulo[]" value="{{$estructura->subtitulo}}">
                                                                <span class="help-block">Ingrese subtítulo del item</span>
                                                            </div>
                                                        <div class="form-group form-md-line-input">
                                                            <textarea type="text" class="form-control" id="form_control_1" placeholder="Comentario {{$cant}}" name="comentario[]" style="resize: vertical; min-height: 150px" >{{$estructura->comentario}}</textarea>
                                                            <span class="help-block">Ingrese comentario del item</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-md-offset-1">
                                                        <div class="imagethumb">
                                                            @if(@getimagesize(public_path().'/img/' . $estructura->imagen))
                                                                <img src="{!!url('img/' . $estructura->imagen)!!}" alt="" id="imginicial" width="200" height="180">
                                                            @else
                                                                <img src="{!!url('img/no-image.png')!!}" alt="" id="imginicial" width="200" height="180">
                                                            @endif
                                                            <span class="btn btn-primary btn-file">
                                                                    <span class="fa fa-folder-open-o"></span> <input type="file" id="file{{$cant}}" class="files" name="file{{$cant}}">
                                                            </span>
                                                        </div>
                                                        <div class="spinner" style="display: none">Loading...</div>

                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" id="form_control_1" placeholder="Video {{$cant}}" name="video[]" value="{{$estructura->video}}">
                                                            <span class="help-block">Seleccione video</span>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" id="form_control_1" placeholder="Url {{$cant}}" name="url[]" value="{{$estructura->url}}">
                                                            <span class="help-block">Ingrese url del item</span>
                                                        </div>
                                                    </div>
                                                    <?php $cant = $cant + 1 ?>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           <!--/form-->
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END SIDEBAR CONTENT LAYOUT -->
    </div>
    <script>
        $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', label);

            var reader = new FileReader();

            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                $(input).parent().parent().find('img')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(180);
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
@endsection