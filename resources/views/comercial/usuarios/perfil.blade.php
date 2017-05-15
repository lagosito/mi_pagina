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
        <div class="page-content-container" id="page-content-container">
            <div class="page-content-row">
                <!-- BEGIN PAGE SIDEBAR -->

                <div class="page-content-col">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="portlet light" id="form_wizard_1">
                        <div class="portlet-body form col-md-12">
                            <!--form class="form-horizontal" action="" id="submit_form" method="POST" novalidate="novalidate"-->
                            {!! Form::open(array('url' => Request::segment(1).'/nuevacontraseña/'.$usuario->id, 'class' => 'form-horizontal','id' =>'submit_form')) !!}

                            <div class="form-wizard">
                                <div class="form-body">
                                    <div class="tab-content">

                                        <h3 class="block">Mi perfil</h3>
                                        <div class="alert alert-danger display-none">
                                            <button class="close" data-dismiss="alert"></button> Se encontraron algunos errores. Verificar los datos ingresados. </div>
                                        <div class="alert alert-success display-none">
                                            <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                        @if(Session::has('mensaje'))
                                            <div class="alert alert-danger" >
                                                <button class="close" data-dismiss="alert"></button>
                                                {{ Session::get('mensaje') }}
                                            </div>
                                        @endif
                                        <div class="col-md-5">
                                            <br>
                                            <div class="form-group form-md-line-input">
                                                <input type="password" class="form-control" id="form_control_1" placeholder="Nueva contraseña" name="password">
                                                <span class="help-block">Ingrese nueva contraseña</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="password" class="form-control" id="form_control_1" placeholder="Repetir nueva contraseña" name="repeatpass">
                                                <span class="help-block">Repetir contraseña</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="col-md-9" style="padding-left: 0">
                                        <br/>
                                        <button type="submit" class="btn green button-submit"> Guardar Cambios
                                            <i class="fa fa-check"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--/form-->
                            {!! Form::close() !!}

                            {!! Form::open(array('url' => Request::segment(1).'/cambiofotoperfil/'.$usuario->id, 'class' => 'form-horizontal', 'files' => true)) !!}

                            <div class="form-wizard">
                                <div class="form-body">
                                    <div class="tab-content">

                                        <h4 class="block">Foto de perfil</h4>
                                        <div class="col-md-5" style="padding-left: 0">
                                            <br/>
                                            <div class="imagethumb" style="margin-top:20px ">
                                                @if(@getimagesize(public_path().'/img/avatar/' . $usuario->imagen))
                                                    <img src="{!!url('img/avatar/' . $usuario->imagen)!!}" alt="" id="imginicial" width="200" height="200" style="z-index: -3">
                                                @else
                                                    <img src="{!!url('img/avatar/no_user_logo.png')!!}" alt="" id="imginicial" width="200" height="200" style="z-index: -3">
                                                @endif
                                                <span class="btn btn-primary btn-file">
                                            <span class="fa fa-folder-open-o"></span> <input type="file" id="avatar" class="files" name="file">
                                            </span>
                                            </div>
                                            <div class="spinner" style="display: none">Loading...</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="col-md-9" style="padding-left: 0">
                                        <br/>
                                        <button type="submit" class="btn green button-submit"> Actualizar foto
                                            <i class="fa fa-refresh"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--/form-->
                            {!! Form::close() !!}

                        </div>
                        <div class="col-md-3 selectionmdl" style=" overflow-y: auto;" id="selectionmdl">
                            <div class="mdlheader"></div>
                            <div class="mdlsection"></div>
                            <div class="mdlfooter"></div>
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
                        .height(200);
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