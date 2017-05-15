
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
    <head>

        <meta charset="utf-8" />
        <title>{{$proyecto->nombre_proyecto}}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="{{$proyecto->descripcion_site}}" name="description" />
        <meta content="{{$proyecto->keywords}}" name="keywords" />
        @if(isset($_GET['prod']))
            <meta property="og:url"                content="{!!url('/'.'?prod='.$_GET['prod'].'&data-imagen='.$_GET['data-imagen'].'&data-item='.$_GET['data-item'].'&data-pry='.$_GET['data-pry'].'&data-nk='.$_GET['data-nk'].'')!!}" />
            <meta property="og:type"               content="article" />
            
            <meta property="og:description"        content="{!!$_GET['data-item']!!}" />
            <meta property="og:image"              content="http://www.mogador.local/upload/{!!$_GET['data-pry']!!}/galeria/{!!$_GET['data-imagen']!!}" />
        @endif
        <!-- BEGIN LAYOUT FIRST STYLES -->
        <meta name="google-site-verification" content="rqrDphBCR8TpHvJ7Q7zplcr2DlpIugkXFR0y5fp561M" />
        <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
        <!-- END LAYOUT FIRST STYLES -->

        <link href="<?php echo URL::asset('/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />

        <link href="<?php echo URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
            <script src="<?php echo URL::asset('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
            <script src="<?php echo URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="<?php echo URL::asset('assets/global/plugins/jquery-ui/jquery-ui.min.js'); ?>" type="text/javascript"></script>
            <script src="{!!url('js/jquery.bcSwipe.min.js')!!}"></script>

            <!-- END PAGE LEVEL PLUGINS -->
            <script src="<?php echo URL::asset('js/jquery.easing.1.3.js'); ?>" type="text/javascript"></script>
            <script src="<?php echo URL::asset('js/jquery.parallax-scroll.js'); ?>" type="text/javascript"></script>

            @yield('style')
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        @if(isset($custom_tipografia))
            <link href='{!! $custom_tipografia->titulo_url !!}' rel='stylesheet' type='text/css'/>
            <link href='{!! $custom_tipografia->parrafo_url !!}' rel='stylesheet' type='text/css'/>
            <?php
                $family_titulo= str_replace('-', ' ', $custom_tipografia->titulo);
                $family_parrafo= str_replace('-', ' ', $custom_tipografia->parrafo);
            ?>
            <style>
                .{!! $custom_tipografia->titulo !!}  {
                    font-family: '{!! $family_titulo !!}', sans-serif;
                }
                .{{$custom_tipografia->parrafo}}  {
                    font-family: '{!! $family_parrafo !!}', sans-serif;
                }
            </style>
        @endif

        @if($proyecto->e_commerce==1 and $editar==0)
            <link rel="stylesheet" href="{!!url('tienda/css/reset.css')!!}"/> <!-- CSS reset -->
            <link rel="stylesheet" href="{!!url('tienda/css/style.css')!!}"/> <!-- Resource style -->
        @endif

    </head>
    <!-- END HEAD -->
    <body data-url="{!!md5(url(''))!!}" class="{{$proyecto->tipografia_parrafos}}" data-myurl="{!!url('')!!}" data-urlsegment="{!! url(Request::segment(1)) !!}" data-token="{!!csrf_token()!!}" data-idioma="{!! $idioma !!}" data-idpry="{!! $proyecto->id !!}">
    @yield('content')

    @yield('script')
    @if($proyecto->e_commerce==1 and $editar==0)
        <script src="{!!url('tienda/js/main.js')!!}"></script>
    @endif

<style type="text/css">
    {!! $proyecto->custom_css !!}
</style>
<!-- /.modal -->
<div id="responsive" class="modal fade" tabindex="-1" aria-hidden="false">
    {!! Form::open(array('url' => Request::segment(1).'/savecoment', 'class' => 'form-horizontal','id' =>'submit_form')) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Comentarios de cliente</h4>
            </div>
            <div class="modal-body">
                <div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" class="form-control idsPr" name="idsPr"/>
                            <textarea name="comentario" id="" class="form-control ComentaTxt" rows="14"></textarea>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cerrar</button>
                <button type="submit" class="btn green">Guardar Cambios</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

</body>

</html>