@extends('modulos.includes.plantilla')

@section('style')
	<link href="<?php echo URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet'); ?>" type="text/css" />
	<link href="<?php echo URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet'); ?>" type="text/css" />
	<link href="<?php echo URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet'); ?>" type="text/css" />
	<link href="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet'); ?>" type="text/css" />
	<link href="<?php echo URL::asset('assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet'); ?>" type="text/css">
	<link href="<?php echo URL::asset('css/menurounded/reset.css" rel="stylesheet'); ?>" type="text/css" />
	<link href="<?php echo URL::asset('css/menurounded/style.css" rel="stylesheet'); ?>" type="text/css" />

	<link href="<?php echo URL::asset('css/colorpicker.css'); ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo URL::asset('css/layout.css'); ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo URL::asset('css/style.css'); ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo URL::asset('css/formatomenu.css" rel="stylesheet'); ?>" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:700' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Londrina+Outline' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Quicksand:300' rel='stylesheet' type='text/css' />
	<link href="<?php echo URL::asset('css/fonts.css" rel="stylesheet'); ?>" type="text/css" />
	<link href="<?php echo URL::asset('css/croppie/croppie.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo URL::asset('css/style-modulo-edit.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo URL::asset('css/headerEffects/component.css" rel="stylesheet'); ?>" type="text/css" />
	<!--link href="<?php echo URL::asset('css/headerEffects/normalize.css" rel="stylesheet'); ?>" type="text/css" /-->

	<link href="<?php echo URL::asset('css/colorpickersliders/bootstrap.colorpickersliders.css" rel="stylesheet'); ?>" type="text/css" />

	<link href="<?php echo URL::asset('css/youtubeiframe/youtube-iframe-responsive.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo URL::asset('css/wysihtml5/bootstrap3-wysihtml5.min.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo URL::asset('css/wysihtml5/stylesheet.css'); ?>" rel="stylesheet" type="text/css" />

	<script src="<?php echo URL::asset('js/bootstrap3-wysihtml5/wysihtml5x-toolbar.min.js'); ?>" type="text/javascript"></script>

	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL STYLES -->

	<!-- END THEME GLOBAL STYLES -->
	<!-- BEGIN THEME LAYOUT STYLES -->

	<!-- END THEME LAYOUT STYLES -->
	@endsection

@section('script')
<!--[if lt IE 9]>
	<script src="../assets/global/plugins/respond.min.js"></script>
	<script src="../assets/global/plugins/excanvas.min.js"></script>
	<![endif]-->
	<!-- BEGIN CORE PLUGINS -->
	<script src="<?php echo URL::asset('assets/global/plugins/js.cookie.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.mi'); ?>n.js" type="text/javascript"></script>
	<script src="<?php echo URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo URL::asset('assets/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN THEME GLOBAL SCRIPTS -->
	<script src="<?php echo URL::asset('assets/global/scripts/app.min.js'); ?>" type="text/javascript"></script>
	<!-- END THEME GLOBAL SCRIPTS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo URL::asset('assets/pages/scripts/ui-modals.min.js'); ?>" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME LAYOUT SCRIPTS -->
	<script src="<?php echo URL::asset('assets/layouts/layout5/scripts/layout.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo URL::asset('assets/layouts/global/scripts/quick-sidebar.min.js'); ?>" type="text/javascript"></script>
	<!-- END THEME LAYOUT SCRIPTS -->

	<!-- MENU ROUNDED -->
	<script src="<?php echo URL::asset('js/modernizr.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo URL::asset('js/velocity.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo URL::asset('js/main.js'); ?>" type="text/javascript"></script>
	<!-- END MENU ROUNDED -->

	<!-- wysihtml5 x-editable -->
	<script src="<?php echo URL::asset('js/bootstrap3-wysihtml5/wysihtml5-0.3.0.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo URL::asset('js/bootstrap3-wysihtml5/bootstrap3-wysihtml5.js'); ?>" type="text/javascript"></script>

	<script src="<?php echo URL::asset('assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js'); ?>" type="text/javascript"></script>

	<script src="<?php echo URL::asset('js/bootstrap3-wysihtml5/wysihtml5.js'); ?>" type="text/javascript"></script>

	<script src="<?php echo URL::asset('js/youtubeiframe/youtube-iframe-responsive-view-edit.js'); ?>" type="text/javascript"></script>


@endsection

@section('content')
	<style>
		.dropdown {
			display: inline-block;
			margin-top: -20px;
			width:90px;
			margin-right: 10px;
			margin-left: 10px;
		}
		.dropdown a {
			color: #fff;
		}
		.dropdown dd,
		.dropdown dt {
			margin: 0px;
			padding: 0px;
		}
		.dropdown ul {
			margin: -1px 0 0 0;
		}
		.dropdown dd {
			position: relative;
		}
		.dropdown a,
		.dropdown a:visited {
			color: #000;
			text-decoration: none;
			outline: none;
		}
		.dropdown dt a {
			background-color: #fff;
			border: none;
			display: block;
			line-height: 24px;
			overflow: hidden;
			width: 125px;
			font-size: 14px;
			color: #555;
			width:90px;
			padding: 0;
		}
		.dropdown dt a span,
		.multiSel span {
			cursor: pointer;
			display: inline-block;
			padding: 0 3px 2px 0;
		}
		.dropdown dd ul {
			background-color: #fff;
			border: 1px solid #c2cad8;
			font-size: 14px;
			line-height: 1.42857;
			color: #555;
			display: none;
			left: -15px;
			padding: 2px 15px 2px 5px;
			position: absolute;
			top: 60px;
			width: 125px;
			list-style: none;
			height: auto;
			overflow: auto;
			-moz-border-radius-bottomleft: 8px!important;
			border-bottom-right-radius: 8px!important;
			border-bottom-left-radius: 8px!important;
			-moz-border-radius-bottomright: 8px!important;
		}
		.dropdown span.value {
			display: none;
		}
		.dropdown dd ul li a {
			padding: 5px;
			display: block;
		}
		.dropdown dd ul li a:hover {
			background-color: #fff;
		}

		.dropdown dd ul li img:hover {
			border: 1px solid skyblue;
			border-radius: 5px;
		}
		.dropdown .hida{
			padding: 0;
		}

	</style>
	@if($editar == 1)
		<input type="text" id="tipografia_titulos" name="tipografia_titulos" value="{{$proyecto->tipografia_titulos}}" class="nomostrar"/>
		<input type="text" id="tipografia_parrafos" name="tipografia_parrafos" value="{{$proyecto->tipografia_parrafos}}" class="nomostrar"/>
		<input type="text" id="tipografia_titulos_anterior" value="" class="nomostrar"/>
		<input type="text" id="tipografia_parrafos_anterior" value="" class="nomostrar"/>
		<input type="text" id="font_size_anterior" value="0" class="nomostrar"/>

		<input type="text" name="id_proyecto" value="{{$proyecto->id}}" class="nomostrar" id="id_pry_form_menu"/>

		<div style="height: 102px"></div>
		<div class="miniatura oculta" id="miniaturaweb" style="display: none">
			<div class="cel-iframe miniatura-box"  style="background: url('{!!url('img/recursos/phone.svg')!!}'); background-repeat: no-repeat;
					background-size: cover;">
				<iframe  src="{!!url('borrador/'.$url_cliente.'/'.$proyecto->url_proyecto)!!}"  align="center">
				</iframe>
			</div>
		</div>
		<?php $editar=1; ?>

	@endif
	<h5 id="_token" class="hidden" data-token="{{ csrf_token() }}"></h5>
	<?php $cant_modulos= count($pry_modulos); $contador_modulos= 1?>
	<div class="micontenedor">
		@foreach($pry_modulos as $pry_modulo)

			<div class="sectionMD" data-ides="{!!$pry_modulo->idesPR!!}" id="{{$contador_modulos}}" tabindex="-1">
				@if($editar == 1)
					<div class="editorPL">

						<span id="vsbl"></span>

						<a class="logo-a-proyectos col-md-1 col-sm-1 col-xs-3"  href="{!!url(Request::segment(1).'/proyectos')!!}" align="center">
						<span data-toggle="tooltip" data-placement="bottom" title="Volver a listado de proyectos">
							<img src="{!!url('img/iconos-editar/mipagina_short.svg')!!}">
						</span>
						</a>
					<span class="col-md-10 col-sm-9 col-xs-7" style="padding-top: 13px;">
					<span class="contador-modulos">{{$contador_modulos}}</span>
					<span class="main-navigation">
						@if($pry_modulo->titulo!='')
							<a class="titulo-modulo"  data-ides="{!!$pry_modulo->idesPR!!}" data-titulo="{!!$pry_modulo->titulo!!}" data-item-menu="{!!$pry_modulo->item_menu!!}" data-toggle="popover" data-trigger="click" data-popover-content="#popovertitulomodulo" href="javascript:;"><span data-toggle="tooltip" data-placement="bottom" title="Modificar título de módulo que aparece en menú">{{$pry_modulo->titulo}}</span></a>
						@else
							<a class="titulo-modulo"  data-ides="{!!$pry_modulo->idesPR!!}" data-titulo="{!!$pry_modulo->titulo!!}" data-item-menu="{!!$pry_modulo->item_menu!!}" data-toggle="popover" data-trigger="click" data-popover-content="#popovertitulomodulo" href="javascript:;"><span data-toggle="tooltip" data-placement="bottom" title="Modificar título de módulo que aparece en menú">Empty</span></a>
						@endif
					</span>
						@if(Auth::user()->nivel_id >=3)
							@if($urls)
								<a class="cabecera-internas" data-toggle="modal" data-target="#cabeceraInternas" href="javascript:;" data-pry="{{$proyecto->id}}"><img data-toggle="tooltip" data-placement="bottom" title="Agregar o reemplazar cabeceras de páginas internas" class="icono-img" src="{!!url('img/iconos-editar/editadas/add_modulo_add_header.svg')!!}"></a>
							@endif
						@endif

						@if($pry_modulo->tipo_id==2)
							<span class="modulo-crud">
							<a class="delete-modulo" data-toggle="modal" data-target="#confirm_delete_modulo" href="javascript:;" data-id="{{$pry_modulo->idesPR}}" data-pry="{{$pry_modulo->id_proyecto}}"><img data-toggle="tooltip" data-placement="bottom" title="Eliminar módulo" class="icono-img" src="{!!url('img/iconos-editar/editadas/add_modulo_minus.svg')!!}"></a>
							<a class="add-modulo-contenido" data-toggle="modal" data-target="#addModulosContenido" href="javascript:;" data-pry="{{$proyecto->id}}" data-menu-url="{{$id_menu_url}}" ><img data-toggle="tooltip" data-placement="bottom" title="Agregar módulo" class="icono-img" src="{!!url('img/iconos-editar/editadas/add_modulo.svg')!!}"></a>
						</span>
						@else
							<span class="modulo-crud">
							<a class="add-modulo-contenido" data-toggle="modal" data-target="#addModulosContenido" href="javascript:;" data-pry="{{$proyecto->id}}" data-menu-url="{{$id_menu_url}}"><img data-toggle="tooltip" data-placement="bottom" title="Agregar módulo" class="icono-img" src="{!!url('img/iconos-editar/editadas/add_modulo.svg')!!}"></a>
						</span>
						@endif

						@if($pry_modulo->tipo_id==1)
							<a class="replace-modulo" data-toggle="modal" data-target="#replaceModulo" href="javascript:;" data-id="{{$pry_modulo->idesPR}}" data-pry="{{$pry_modulo->id_proyecto}}" data-tipo="{{$pry_modulo->tipo_id}}" data-menu-url="{{$pry_modulo->id_menu_url}}"><img data-toggle="tooltip" data-placement="bottom" title="Reemplazar módulo" class="icono-img" src="{!!url('img/iconos-editar/editadas/1473712809_ui_file-replace_.svg')!!}"></a>
							<input type="hidden" id="header-exists" value="1">
						@elseif($pry_modulo->tipo_id==3)
							<a class="replace-modulo" data-toggle="modal" data-target="#replaceModulo" href="javascript:;" data-id="{{$pry_modulo->idesPR}}" data-pry="{{$pry_modulo->id_proyecto}}" data-tipo="{{$pry_modulo->tipo_id}}" data-menu-url="{{$pry_modulo->id_menu_url}}"><img data-toggle="tooltip" data-placement="bottom" title="Reemplazar módulo" class="icono-img" src="{!!url('img/iconos-editar/editadas/1473712809_ui_file-replace_.svg')!!}"></a>
							<input type="hidden" id="footer-exists" value="1">
						@endif
						<?php $sliderfondo = 0 ?>
						<?php $complementos = \App\Console\Commands\Funciones::getComplementos($pry_modulo->id_md_modulo);?>
						@foreach($complementos as $complemento)
							@if($complemento->id_complemento == 3)
								<span>
							<a class="editar-slider" data-toggle="modal" data-target="#editSlider" href="javascript:;" data-id="{{$pry_modulo->idesPR}}" data-pry="{{$pry_modulo->id_proyecto}}">
								<img data-toggle="tooltip" data-placement="bottom" title="Agregar o quitar imágenes de slider" class="icono-img" src="{!!url('img/iconos-editar/editadas/slider.svg')!!}">
							</a>
						</span>
								<?php $sliderfondo = 1 ?>
							@endif
							@if($complemento->id_complemento == 5)
								<span>
							<a class="editar-slider-texto" data-toggle="modal" data-target="#editSliderTexto" href="javascript:;" data-id="{{$pry_modulo->idesPR}}" data-pry="{{$pry_modulo->id_proyecto}}">
								<img data-toggle="tooltip" data-placement="bottom" title="Editar textos de slider" class="icono-img" src="{!!url('img/iconos-editar/editadas/slider.svg')!!}">
							</a>
						</span>
								<?php $sliderfondo = 1 ?>
							@endif
							@if($complemento->id_complemento == 7)
								<span>
							<a class="editar-slider-img-texto " data-toggle="modal" data-target="#editSlider-ImgTexto" href="javascript:;" data-id="{{$pry_modulo->idesPR}}" data-pry="{{$pry_modulo->id_proyecto}}">
								<img data-toggle="tooltip" data-placement="bottom" title="Agregar o quitar imágenes de slider" class="icono-img" src="{!!url('img/iconos-editar/editadas/slider.svg')!!}">
							</a>
						</span>
								<?php $sliderfondo = 0 ?>
							@endif
						@endforeach

						@if($sliderfondo == 0)

							<span class="fondo-file btn-files add-img-fondo" style="font-size: 25px; padding: 0" data-toggle="tooltip" data-placement="bottom" title="Agregar o cambiar imagen de fondo">
						<img  class="icono-img" src="{!!url('img/iconos-editar/editadas/image_background.svg')!!}">
						<input type="file" id="imagen_fondo{!! $pry_modulo->idesPR !!}" class="imagen-fondo" name="imagen_fondo" data-id="{{$pry_modulo->idesPR}}" style="width: 35px;">
					</span>

							<span class="form-group" style="margin-bottom: 0; padding-left: 5px;" data-toggle="tooltip" data-placement="bottom" title="Quitar imagen de fondo">
						<a class="remover-fondo" data-id="{{$pry_modulo->idesPR}}" style="position: relative">
							<img  class="icono-img" src="{!!url('img/iconos-editar/editadas/image_background.svg')!!}">
							<span class="fa fa-remove" style="color: red; position: absolute; bottom: 0; top:0; left:0; margin:auto; right: 0; font-size: 20px;line-height: 40px;">
							</span>
						</a>
					</span>

						@endif

						@if($proyecto->multiples_idiomas==1 and $pry_modulo->tipo_id==1)
							<div class="select-idiomas">
								<dl class="dropdown-idiomas" >
									<dt class="idiomas-img">
										<a href="#" style="padding:0;">
											<span class="hida-idiomas" data-toggle="tooltip" data-placement="bottom" title="Seleccionar idiomas"><img  class="icono-img" src="{!!url('img/iconos-editar/editadas/lenguage.svg')!!}"></span>
											<p class="multiSel"></p>
										</a>
									</dt>
									<dd>
										<div class="multiSelect-idiomas">
											<ul>
												<li style="position:relative">
													<a>Inglés
												<span class="banderitas-idiomas">
													<img src="{!!url('img/recursos/icons_idiomas/1482113841_flag_UK_england_united_kingdom.svg')!!}">
													<img src="{!!url('img/recursos/icons_idiomas/1482113848_flag_us_america_united_states.svg')!!}">
												</span>
												<span>
													<img id="idioma-select2" class="idioma-select" data-id="2" data-check="0" src="{!!url('img/recursos/icons_idiomas/1482113920_check-circle-outline-blank.svg')!!}">
												</span>
													</a>
												</li>
												<li style="position:relative">
													<a>Español
												<span class="banderitas-idiomas">
													<img src="{!!url('img/recursos/icons_idiomas/1482113852_flag_spain.svg')!!}">
												</span>
												<span>
													<img id="idioma-select1" class="idioma-select" data-id="1" data-check="0" src="{!!url('img/recursos/icons_idiomas/1482113920_check-circle-outline-blank.svg')!!}" >
												</span>
													</a>
												</li>
											</ul>
										</div>
									</dd>
								</dl>
							</div>
						@endif
						<span>
						<a class="openComent"  data-ides="{!!$pry_modulo->idesPR!!}">
							<img data-toggle="tooltip" data-placement="bottom" title="Agregar comentario sobre módulo" class="icono-img" src="{!!url('img/iconos-editar/editadas/coment.svg')!!}">
						</a>
					</span>
					<a class="custom-css" data-toggle="modal" data-target="#customCss" href="javascript:;" data-pry="{{$proyecto->id}}"><span data-toggle="tooltip" data-placement="bottom" title="Agregar estilos personalizados" >CSS</span></a>

					<button class="combinacion-colores" id="swatchesonly{{$pry_modulo->idesPR}}" data-id="{{$pry_modulo->idesPR}}" data-idcontenedor ="container-{{$pry_modulo->modulo_blade}}" data-id-md-modulo="{{$pry_modulo->id_md_modulo}}"  style="background: url('{!!url('img/iconos-editar/1473712843_color-select.svg')!!}') no-repeat center;" data-toggle="tooltip" data-placement="bottom" title="Modificar colores de diseño" >
					</button>

						@if($pry_modulo->tipo_id==2)
							<span class="orden-modulos">
							<a class="upDiv"  data-ides="{!!$pry_modulo->idesPR!!}">
								<img data-toggle="tooltip" data-placement="bottom" title="Mover módulo hacia arriba" class="icono-img" src="{!!url('img/iconos-editar/editadas/flecha-arriba.svg')!!}">
							</a>
							<a class="BajarDiv"  data-ides="{!!$pry_modulo->idesPR!!}">
								<img data-toggle="tooltip" data-placement="bottom" title="Mover módulo hacia abajo" class="icono-img" src="{!!url('img/iconos-editar/editadas/flecha-abajo.svg')!!}">
							</a>
						</span>
						@endif
						@if($pry_modulo->tipo_id==1)

							<input type="hidden" name="ubicacion_menu2" id="ubicacion_menu2" value="{{$proyecto->ubicacion_menu}}">
							<div class="tipo-menu">
								<dl class="dropdown" data-toggle="tooltip" data-placement="bottom" title="Definir ubicación y tipo de menú">
									<dt>
										<a href="#">
											<span class="hida"><img id="pic-{{$proyecto->ubicacion_menu}}" src="{!!url('img/opciones_menu/'.$proyecto->ubicacion_menu.'_opcionmenu.jpg')!!}"></span>
											<p class="multiSel"></p>
										</a>
									</dt>
									<dd>
										<div id="thumbs" class="multiSelect">
											<ul>
												@if($pry_modulo->custom_menu==1)
													<li><img id="pic-0" src="{!!url('img/opciones_menu/0_opcionmenu.jpg')!!}"></li>
												@endif
												<li><img id="pic-1" src="{!!url('img/opciones_menu/1_opcionmenu.jpg')!!}"></li>
												<li><img id="pic-2" src="{!!url('img/opciones_menu/2_opcionmenu.jpg')!!}"></li>
												<li><img id="pic-3" src="{!!url('img/opciones_menu/3_opcionmenu.jpg')!!}"></li>
												<li><img id="pic-4" src="{!!url('img/opciones_menu/4_opcionmenu.jpg')!!}"></li>
												<li><img id="pic-5" src="{!!url('img/opciones_menu/5_opcionmenu.jpg')!!}"></li>
												<li><img id="pic-6" src="{!!url('img/opciones_menu/6_opcionmenu.jpg')!!}"></li>
												<li><img id="pic-7" src="{!!url('img/opciones_menu/7_opcionmenu.jpg')!!}"></li>
												<li><img id="pic-8" src="{!!url('img/opciones_menu/8_opcionmenu.jpg')!!}"></li>
											</ul>
										</div>
									</dd>
								</dl>
							</div>
							<span>
							<a class="menu-anclado" >
								<input type="hidden" name="tipo_menu" id="tipo_menu" class="tipo_menu_anclado" value="{{$proyecto->tipo_menu}}">
								@if($proyecto->tipo_menu==1)
									<img data-toggle="tooltip" data-placement="bottom" title="Establecer menú fijo en pantalla" class="icono-img" src="{!!url('img/iconos-editar/editadas/noanclado.svg')!!}">
								@else
									<img data-toggle="tooltip" data-placement="bottom" title="Quitar menú fijo en pantalla" class="icono-img" src="{!!url('img/iconos-editar/editadas/anclado.svg')!!}">
								@endif
							</a>
						</span>
							<select class="form-control efecto_menu nomostrar" name="efecto_menu" style="width:100px; display: inline;">
								<option value="0">Efecto menú</option>
								<option value="2">Efecto 1</option>
								<option value="3">Efecto 2</option>
							</select>
							<button type="button" class="btn btn-guardar-menu button-submit-menu" data-id="{{$pry_modulo->idesPR}}">Guardar</button>

						@else
							<button type="button" class="btn btn-guardar-menu btn-save-modulo" data-id="{{$pry_modulo->idesPR}}">Guardar</button>
						@endif
						<br>
						@if($proyecto->subpagina==1)
							<a class="menu-urls " data-toggle="modal" data-target="#menuUrls" href="javascript:;" data-pry="{{$proyecto->id}}">
							<span data-toggle="tooltip" data-placement="bottom" title="Agregar páginas internas">
								<span class="add-sub-navigation">+</span>
								<span class="texto-sub-navigation">
									Añadir Sub página 
								</span>
							</span>
							</a>
						@endif

						<span class="contenedor-tipografia">
						<select class="form-control tipografia select-tipografia" name="tipografia">
							<option value="">Tipografía</option>
							@foreach($tipografias as $tipografia)
								<option value="{{$tipografia->id}}" data-titulo="{{$tipografia->titulo}}" data-parrafo="{{$tipografia->parrafo}}">{{$tipografia->estilo}}</option>
							@endforeach
							@if(isset($custom_tipografia))
								<option value="0" data-titulo="{!! $custom_tipografia->titulo !!}" data-parrafo="{!! $custom_tipografia->parrafo !!}">Personalizada({!! str_replace('-', ' ',$custom_tipografia->titulo) !!} - {!! str_replace('-', ' ',$custom_tipografia->parrafo) !!})</option>
							@else
								<option value="0" data-titulo="" data-parrafo="" id="option-tipografia-custom">Personalizada</option>
							@endif
						</select>
						<span class="fa fa-cog hidden add-more-tipografia" data-toggle="modal" data-target="#tipografiaPersonalizada"></span>
					</span>
					<span class="contenedor-font-size">
						<select class="form-control font_size select-font-size text-center" name="font_size">
							<option value=""></option>
							<option value="+2">+2</option>
							<option value="+1">+1</option>
							<option value="0">0</option>
							<option value="-1">-1</option>
							<option value="-2">-2</option>
						</select>
					</span>
					</span>
					<span class="col-md-1 col-sm-1 col-xs-2" style="text-align:right; padding-right: 0;">
						<a class="btn vistaminiatura" style="background-color: transparent" ><img data-toggle="tooltip" data-placement="bottom" title="Ver diseño en pantalla móvil" class="icono-img" src="{!!url('img/iconos-editar/1473713032_Mobile.svg')!!}"></a>
							<br/>
						<a class="link-editmodulo" target="_blank"  href="{!!url('borrador/'.$url_cliente.'/'.$proyecto->url_proyecto)!!}" ><img data-toggle="tooltip" data-placement="bottom" title="Ver diseño en pantalla ordenador" class="icono-img" src="{!!url('img/iconos-editar/1473713127_Fullscreen-Set-11.svg')!!}"></a>
					</span>
						<?php $tam = $contador_modulos * 100 /$cant_modulos; ?>
						<div id="bar" class="progress col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-9 col-xs-offset-3  col-xs-7" role="progressbar">
							<div class="progress-bar progress-bar-success" style="width: {{$tam}}%;"> </div>
						</div>
						<!--hr class="col-md-11 col-md-offset-1" style="width: 20%;"-->
					</div>
					<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
					@if(isset($combinacion))
						<div class="panel-colores" id="panel-colores{{$pry_modulo->idesPR}}" style="display: none;">
							<div class="caja-negra">
								@if(isset($combinacion->color_menu))
									<div class="form-inline">
										<label>Menú</label>
										<button class="form-control btn-pick-color color-menu" id="color-menu{{$pry_modulo->idesPR}}" data-color="{{$combinacion->color_menu}}"  data-id="{{$pry_modulo->idesPR}}" data-idcontenedor ="container-{{$pry_modulo->modulo_blade}}" data-value="{{$combinacion->color_menu}}">
										</button>
									</div>
								@endif

								@if(isset($combinacion->fondo))
									<div class="form-inline">
										<label>Fondo</label>
										<button class="form-control btn-pick-color color-fondo" id="color-fondo{{$pry_modulo->idesPR}}" data-color="<?php if(isset($combinacion->fondo)){echo $combinacion->fondo;}?>"  data-id="{{$pry_modulo->idesPR}}" data-idcontenedor ="container-{{$pry_modulo->modulo_blade}}" data-value="<?php if(isset($combinacion->fondo)){echo $combinacion->fondo;}?>">
										</button>
										<input class="nomostrar" value="">
									</div>
								@endif
								@if(isset($combinacion->titulo))
									<div class="form-inline">
										<label>Titulo</label>
										<button class="form-control btn-pick-color color-titulo" id="color-titulo{{$pry_modulo->idesPR}}" data-color="{{$combinacion->titulo}}" data-id="{{$pry_modulo->idesPR}}" data-idcontenedor ="container-{{$pry_modulo->modulo_blade}}" data-value="{{$combinacion->titulo}}">
										</button>
									</div>
								@endif
								@if(isset($combinacion->subtitulo))
									<div class="form-inline">
										<label>Subtitulo</label>
										<button class="form-control btn-pick-color color-subtitulo" id="color-subtitulo{{$pry_modulo->idesPR}}" data-color="{{$combinacion->subtitulo}}"  data-id="{{$pry_modulo->idesPR}}" data-idcontenedor ="container-{{$pry_modulo->modulo_blade}}" data-value="{{$combinacion->subtitulo}}">
										</button>
									</div>
								@endif
								@if(isset($combinacion->color_menucatfondo))
									<div class="form-inline">
										<label>Fondo Categoría</label>
										<button class="form-control btn-pick-color color-menucatfondo" id="color-menucatfondo{{$pry_modulo->idesPR}}" data-color="{{$combinacion->color_menucatfondo}}"  data-id="{{$pry_modulo->idesPR}}" data-idcontenedor ="container-{{$pry_modulo->modulo_blade}}" data-value="{{$combinacion->color_menucatfondo}}">
										</button>
									</div>
								@endif
								@if(isset($combinacion->color_menucat))
									<div class="form-inline">
										<label>Categoría</label>
										<button class="form-control btn-pick-color color-menucat" id="color-menucat{{$pry_modulo->idesPR}}" data-color="{{$combinacion->color_menucat}}"  data-id="{{$pry_modulo->idesPR}}" data-idcontenedor ="container-{{$pry_modulo->modulo_blade}}" data-value="{{$combinacion->color_menucat}}">
										</button>
									</div>
								@endif
								@if(isset($combinacion->comentario))
									<div class="form-inline">
										<label>Texto</label>
										<button class="form-control btn-pick-color color-comentario" id="color-comentario{{$pry_modulo->idesPR}}" data-color="{{$combinacion->comentario}}" data-id="{{$pry_modulo->idesPR}}" data-idcontenedor ="container-{{$pry_modulo->modulo_blade}}" data-value="{{$combinacion->comentario}}">
										</button>
									</div>
								@endif
								@if(isset($combinacion->color_boton))
									<div class="form-inline">
										<label>Fondo botón</label>
										<button class="form-control btn-pick-color color-boton" id="color-boton{{$pry_modulo->idesPR}}" data-color="{{$combinacion->color_boton}}"  data-id="{{$pry_modulo->idesPR}}" data-idcontenedor ="container-{{$pry_modulo->modulo_blade}}" data-value="{{$combinacion->color_boton}}">
										</button>
									</div>
								@endif
							</div>
							<div class="form-inline boton-save">
								<label></label>
								<button type="button" class="btn panel-colores-submit" data-id="{{$pry_modulo->idesPR}}" style="margin-top: 5px; background-color: transparent; font-size: 25px;" >
									<i class="fa fa-floppy-o"></i>
								</button>
							</div>
						</div>
					@endif
				@endif

				@include('modulos.'.$pry_modulo->modulo_blade)
			</div>
			<?php $contador_modulos= $contador_modulos + 1; ?>
		@endforeach
	</div>
	@include('modulos.editar.popupseditar')

	<script src="<?php echo URL::asset('js/colorpickersliders/tinycolor.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo URL::asset('js/colorpickersliders/bootstrap.colorpickersliders.js'); ?>" type="text/javascript"></script>
	<script>

		$('#vsbl').parent().css('display', 'inline');
		$(window).scroll(function(){
			var scrollPos = $(document).scrollTop();
			var idAnterior = 0;
			var alturaAnterior=0;
			$('.micontenedor').find('.sectionMD').each(function(index, el) {
				window['card_links_grid_' + index] = $(this).attr('id');

				if(window['card_links_grid_' + index]=='1')
				{
					alturaAnterior = $('#1').height();
				}
				else
				{
					idAnterior = $(this).attr('id')-1;
					alturaAnterior = $('#'+idAnterior).height();

				}
				var idContenedor = window['card_links_grid_' + index];
				var contenedor1 = $( '#'+idContenedor);
				var offsetVar = contenedor1.offset();
				var porcentaje = 0.4*alturaAnterior;
				if(scrollPos > (offsetVar.top-porcentaje) && scrollPos < (offsetVar.top+porcentaje)){
					$('.editorPL').css('display', 'none');
					$(this).find('.editorPL').css('display', 'inline');
					$('.panel-colores').slideUp("fast");
				}

			});
		});
		$("html").click(function(){
			$('.panel-colores').slideUp("fast");

			// $('.panel-colores').hide();
			// console.log("hacer click afuera del negrito");
		});
		$('.caja-negra').click(function(e){
			e.stopPropagation();
			//console.log("haciendo click en el negrito");
		});
		$('.btn-pick-color').click(function(e){
			e.stopPropagation();
			// console.log("haciendo click en seleccion de color");
		});

	</script>
	<script>
		$(".color-fondo").ColorPickerSliders({
			size: 'sm',
			placement: 'bottom',
			swatches: [
				'#51a7f9','#70bf41','#f5d331','#f39031','#eb5d57','#b36ae2','#ffffff',
				'#0965c0','#3f892d','#dcbd2b','#de6b2c','#c93a26','#773f9c','#dcdee0',
				'#174f86','#295d1a','#c39725','#bd5b24','#872416','#5f327c','#a7aba9',
				'#002452','#1b420a','#a4761d','#924619','#57140a','#3b1f4d','#535860',
				'#000000'
			],
			previewontriggerelement: false,
			customswatches: false,
			order: {},
			onchange: function(container, color, triggerelement) {
				var idcontenedor = $(triggerelement).attr('data-idcontenedor');
				var id_pry_modulo = $(triggerelement).attr('data-id');
				var color1 = color.tiny.toHexString();

				$(triggerelement).attr('data-value', color1);
				$('#container' + id_pry_modulo).css('background-color', color1);
				$(triggerelement).css('background-color', color1);
				$('#container' + id_pry_modulo).find('.background-custom-color').css('background-color', color1);
			}
		});
		$('.color-fondo').each(function(){
			$(this).trigger("colorpickersliders.updateColor", $(this).attr('data-color'));
			$(this).css('background-color',  $(this).attr('data-color'));
		});


		$(".color-titulo").ColorPickerSliders({
			size: 'sm',
			placement: 'bottom',
			swatches: [
				'#51a7f9','#70bf41','#f5d331','#f39031','#eb5d57','#b36ae2','#ffffff',
				'#0965c0','#3f892d','#dcbd2b','#de6b2c','#c93a26','#773f9c','#dcdee0',
				'#174f86','#295d1a','#c39725','#bd5b24','#872416','#5f327c','#a7aba9',
				'#002452','#1b420a','#a4761d','#924619','#57140a','#3b1f4d','#535860',
				'#000000'
			],
			previewontriggerelement: false,
			customswatches: false,
			order: {},
			onchange: function(container, color, triggerelement) {
				var idcontenedor= $(triggerelement).attr('data-idcontenedor');
				var id_pry_modulo = $(triggerelement).attr('data-id');
				var color1 = color.tiny.toHexString();
				$(triggerelement).attr('data-value', color1);

				$('#container'+id_pry_modulo).find('.titulo-custom-color').css('color', color1);
				$('#container'+id_pry_modulo).find('.division').css('border-color', color1);
				$(triggerelement).css('background-color', color1);
			}
		});
		$('.color-titulo').each(function(){
			$(this).trigger("colorpickersliders.updateColor", $(this).attr('data-color'));
			$(this).css('background-color', $(this).attr('data-color'))
		});
		$(".color-subtitulo").ColorPickerSliders({
			size: 'sm',
			placement: 'bottom',
			swatches: [
				'#51a7f9','#70bf41','#f5d331','#f39031','#eb5d57','#b36ae2','#ffffff',
				'#0965c0','#3f892d','#dcbd2b','#de6b2c','#c93a26','#773f9c','#dcdee0',
				'#174f86','#295d1a','#c39725','#bd5b24','#872416','#5f327c','#a7aba9',
				'#002452','#1b420a','#a4761d','#924619','#57140a','#3b1f4d','#535860',
				'#000000'
			],
			previewontriggerelement: false,
			customswatches: false,
			order: {},
			onchange: function(container, color, triggerelement) {
				var idcontenedor= $(triggerelement).attr('data-idcontenedor');
				var id_pry_modulo = $(triggerelement).attr('data-id');
				var color1 = color.tiny.toHexString();
				$(triggerelement).attr('data-value', color1);

				$('#container'+id_pry_modulo).find('.subtitulo-custom-color').css('color', color1);
				$(triggerelement).css('background-color', color1);
			}
		});
		$('.color-subtitulo').each(function(){
			$(this).trigger("colorpickersliders.updateColor", $(this).attr('data-color'));
			$(this).css('background-color', $(this).attr('data-color'))
		});
		$(".color-comentario").ColorPickerSliders({
			size: 'sm',
			placement: 'bottom',
			swatches: [
				'#51a7f9','#70bf41','#f5d331','#f39031','#eb5d57','#b36ae2','#ffffff',
				'#0965c0','#3f892d','#dcbd2b','#de6b2c','#c93a26','#773f9c','#dcdee0',
				'#174f86','#295d1a','#c39725','#bd5b24','#872416','#5f327c','#a7aba9',
				'#002452','#1b420a','#a4761d','#924619','#57140a','#3b1f4d','#535860',
				'#000000'
			],
			previewontriggerelement: false,
			customswatches: false,
			order: {},
			onchange: function(container, color, triggerelement) {
				var idcontenedor= $(triggerelement).attr('data-idcontenedor');
				var id_pry_modulo = $(triggerelement).attr('data-id');
				var color1 = color.tiny.toHexString();
				$(triggerelement).attr('data-value', color1);
				$('#container'+id_pry_modulo).find('.comentario-custom-color').css('color', color1);
				$(triggerelement).css('background-color', color1);
			}
		});
		$('.color-comentario').each(function(){
			$(this).trigger("colorpickersliders.updateColor", $(this).attr('data-color'));
			$(this).css('background-color', $(this).attr('data-color'))
		});
		$(".color-boton").ColorPickerSliders({
			size: 'sm',
			placement: 'bottom',
			swatches: [
				'#51a7f9','#70bf41','#f5d331','#f39031','#eb5d57','#b36ae2','#ffffff',
				'#0965c0','#3f892d','#dcbd2b','#de6b2c','#c93a26','#773f9c','#dcdee0',
				'#174f86','#295d1a','#c39725','#bd5b24','#872416','#5f327c','#a7aba9',
				'#002452','#1b420a','#a4761d','#924619','#57140a','#3b1f4d','#535860',
				'#000000'
			],
			previewontriggerelement: false,
			customswatches: false,
			order: {},
			onchange: function(container, color, triggerelement) {
				var idcontenedor= $(triggerelement).attr('data-idcontenedor');
				var id_pry_modulo = $(triggerelement).attr('data-id');
				var color1 = color.tiny.toHexString();
				$(triggerelement).attr('data-value', color1);

				$('#container'+id_pry_modulo).find('.borde-boton').css('border-color', color1);
				$('#container'+id_pry_modulo).find('.fondo-boton').css('background-color', color1);
				$('#container'+id_pry_modulo).find('.simbolo-boton').css('color', color1);
				$(triggerelement).css('background-color', color1);
			}
		});
		$('.color-boton').each(function(){
			$(this).trigger("colorpickersliders.updateColor", $(this).attr('data-color'));
			$(this).css('background-color', $(this).attr('data-color'))
		});
		$(".color-menu").ColorPickerSliders({
			size: 'sm',
			placement: 'bottom',
			swatches: [
				'#51a7f9','#70bf41','#f5d331','#f39031','#eb5d57','#b36ae2','#ffffff',
				'#0965c0','#3f892d','#dcbd2b','#de6b2c','#c93a26','#773f9c','#dcdee0',
				'#174f86','#295d1a','#c39725','#bd5b24','#872416','#5f327c','#a7aba9',
				'#002452','#1b420a','#a4761d','#924619','#57140a','#3b1f4d','#535860',
				'#000000'
			],
			previewontriggerelement: false,
			customswatches: false,
			order: {},
			onchange: function(container, color, triggerelement) {
				var idcontenedor= $(triggerelement).attr('data-idcontenedor');
				var id_pry_modulo = $(triggerelement).attr('data-id');
				var color1 = color.tiny.toHexString();
				$(triggerelement).attr('data-value', color1);
				$('#container'+id_pry_modulo).find('.marca').css('color', color1);
				$('#container'+id_pry_modulo).find('.navbar-nav li a').css('color', color1);
				$(triggerelement).css('background-color', color1);

			}
		});
		$('.color-menu').each(function(){
			$(this).trigger("colorpickersliders.updateColor", $(this).attr('data-color'));
			$(this).css('background-color', $(this).attr('data-color'))
		});
		$(".color-menucat").ColorPickerSliders({
			size: 'sm',
			placement: 'bottom',
			swatches: [
				'#51a7f9','#70bf41','#f5d331','#f39031','#eb5d57','#b36ae2','#ffffff',
				'#0965c0','#3f892d','#dcbd2b','#de6b2c','#c93a26','#773f9c','#dcdee0',
				'#174f86','#295d1a','#c39725','#bd5b24','#872416','#5f327c','#a7aba9',
				'#002452','#1b420a','#a4761d','#924619','#57140a','#3b1f4d','#535860',
				'#000000'
			],
			previewontriggerelement: false,
			customswatches: false,
			order: {},
			onchange: function(container, color, triggerelement) {
				var idcontenedor= $(triggerelement).attr('data-idcontenedor');
				var id_pry_modulo = $(triggerelement).attr('data-id');
				var color1 = color.tiny.toHexString();
				$(triggerelement).attr('data-value', color1);

				$('#container'+id_pry_modulo).find('.pestanas li a').css('color', color1);
				$(triggerelement).css('background-color', color1);

			}
		});
		$('.color-menucat').each(function(){
			$(this).trigger("colorpickersliders.updateColor", $(this).attr('data-color'));
			$(this).css('background-color', $(this).attr('data-color'))
		});
		$(".color-menucatfondo").ColorPickerSliders({
			size: 'sm',
			placement: 'bottom',
			swatches: [
				'#51a7f9','#70bf41','#f5d331','#f39031','#eb5d57','#b36ae2','#ffffff',
				'#0965c0','#3f892d','#dcbd2b','#de6b2c','#c93a26','#773f9c','#dcdee0',
				'#174f86','#295d1a','#c39725','#bd5b24','#872416','#5f327c','#a7aba9',
				'#002452','#1b420a','#a4761d','#924619','#57140a','#3b1f4d','#535860',
				'#000000'
			],
			previewontriggerelement: false,
			customswatches: false,
			order: {},
			onchange: function(container, color, triggerelement) {
				var idcontenedor= $(triggerelement).attr('data-idcontenedor');
				var id_pry_modulo = $(triggerelement).attr('data-id');
				var color1 = color.tiny.toHexString();
				$(triggerelement).attr('data-value', color1);

				$('#container'+id_pry_modulo).find('.pestanas li a').css('background-color', color1);
				$(triggerelement).css('background-color', color1);

			}
		});
		$('.color-menucatfondo').each(function(){
			$(this).trigger("colorpickersliders.updateColor", $(this).attr('data-color'));
			$(this).css('background-color', $(this).attr('data-color'))
		});

		$(document).on('click', '.panel-colores-submit', function() {
			var id_pry_modulo = $(this).attr('data-id');
			var fondo = $(this).parent().parent().find('.color-fondo').attr('data-value');
			var titulo = $(this).parent().parent().find('.color-titulo').attr('data-value');
			var subtitulo = $(this).parent().parent().find('.color-subtitulo').attr('data-value');
			var comentario = $(this).parent().parent().find('.color-comentario').attr('data-value');
			var color_boton = $(this).parent().parent().find('.color-boton').attr('data-value');
			var color_menu = $(this).parent().parent().find('.color-menu').attr('data-value');
			var color_menucat = $(this).parent().parent().find('.color-menucat').attr('data-value');
			var color_menucatfondo = $(this).parent().parent().find('.color-menucatfondo').attr('data-value');
			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.id_pry_modulo = id_pry_modulo;
			data.fondo = fondo;
			data.titulo = titulo;
			data.subtitulo = subtitulo;
			data.comentario = comentario;
			data.color_boton = color_boton;
			data.color_menu = color_menu;
			data.color_menucat = color_menucat;
			data.color_menucatfondo = color_menucatfondo;

			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/saveprycolores') !!}",
				data: data,
				success: function(data){
					$('#panel-colores'+id_pry_modulo).slideUp("fast");
				},
				error: function(){
					console.log('Error en la conexión');
				}
			});
		});
		$(document).on('click', '.combinacion-colores', function() {

			var panel = $(this).parent().parent().parent().find('.panel-colores');
			if($(panel).css('display')=='none')
			{
				var pos = $(this).position();
				var width = $(this).outerWidth();
				var menuWidth = $(panel).outerWidth();
				var left = (pos.left + width + 25) + 'px';
				var top= (pos.top +35) +'px';

				$(panel).css({
					position: 'fixed',
					left: left,
					top: top
				});
				$(panel).css("z-index", "100");

				$(panel).slideDown("fast");
			}
			else
			{

				$(panel).slideUp("fast");
			}

		});
	</script>
	<script>
		//idiomas
		$(document).on('click', ".dropdown-idiomas dt a", function() {
			$(".dropdown-idiomas dd ul").slideToggle('fast');
		});

		$(".dropdown-idiomas dd ul li a").hover(function(){

			if($(this).find('.idioma-select').hasClass('active'))
			{
				$(this).find('.idioma-select').attr('src', '{!!url('img/recursos/icons_idiomas/1482113929_ok_circle-hover.png')!!}');
			}
			else
			{
				$(this).find('.idioma-select').attr('src', '{!!url('img/recursos/icons_idiomas/1482113920_check-circle-outline-blank-hover.png')!!}');
			}

		}, function(){

			if($(this).find('.idioma-select').hasClass('active'))
			{
				$(this).find('.idioma-select').attr('src', '{!!url('img/recursos/icons_idiomas/1482113929_ok_circle.svg')!!}');
			}
			else
			{
				$(this).find('.idioma-select').attr('src', '{!!url('img/recursos/icons_idiomas/1482113920_check-circle-outline-blank.svg')!!}');
			}
		});


		$(document).on('click','.idioma-select',function(){

			var check = $(this).attr('data-check');

			if(check=='1')
			{
				$(this).attr('data-check', '0');
				$(this).attr('src', '{!!url('img/recursos/icons_idiomas/1482113920_check-circle-outline-blank.svg')!!}');
				$(this).removeClass('active');
			}
			else
			{
				$(this).attr('data-check', '1');
				$(this).attr('src', '{!!url('img/recursos/icons_idiomas/1482113929_ok_circle-hover.png')!!}');
				$(this).addClass('active');
			}
		});
		//tipo menu
		$(document).on('click', ".dropdown dt a", function() {
			$(".dropdown dd ul").slideToggle('fast');
		});

		$(document).on('click', ".dropdown dd ul li a", function() {
			$(".dropdown dd ul").hide();
		});

		function getSelectedValue(id) {
			return $("#" + id).find("dt a span.value").html();
		}

		$(document).bind('click', function(e) {
			var $clicked = $(e.target);
			if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
			if (!$clicked.parents().hasClass("dropdown-idiomas")) $(".dropdown-idiomas dd ul").hide();
		});

		$(document).on('click', '.multiSelect img', function() {


			var id = $(this).attr('id');

			id= id.replace(/pic-/g, "");

			var ret = $(".hida");
			var url = '{!! url('img/opciones_menu/') !!}';
			var img = '<img id="pic-'+ id +'" src="'+url +'/'+id+'_opcionmenu.jpg">';
			$(ret).empty();
			$(ret).append(img);
			$('#ubicacion_menu2').val(id);
			$('.dropdown dt a').append(ret);
			$(".dropdown dd ul").hide();

			removeEfectopen();

			switch (id){

				case '0': // custom
					logo_izquierda();

					var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
					var bsnavbar = document.getElementById('bs-navbar').outerHTML;
					$('#cabecera').empty();
					$('#cabecera').append(navbarheader);
					$('#cabecera').append(bsnavbar);

					$('#navbar-cabecera').removeClass('padding15');
					$('#ulnav').removeClass('marginright0');

					$('#bs-navbar').removeClass('navbar-collapse');
					$('#navbaricono').removeClass('displayblock');
					$('#navbar-cabecera').removeClass('width100');

					$('#bs-navbar').removeClass('textcentrado');
					$('#navbaricono').removeClass('izq');
					$('#navbaricono').removeClass('derecha');
					$('#ulnav').removeClass('navbar-right');
					$('#ulnav').removeClass('navcentrado');

					$('.efecto_menu').removeClass('nomostrar');
					$('#socialheader').removeClass('floatnone');

					$('#bs-navbar').removeClass("cd-primary-nav");
					$('.itemmenu').removeClass("closeefecto3");
					$('.cd-nav-trigger').addClass('nomostrar');
					$('#bs-navbar').removeClass('mostrarnav');
					$('#navbaricono').removeClass('noicono');
					$('#navbaricono').removeClass('alineadoatexto');

					if($('#marca').hasClass('imagenlogo')) {
						$('#navbaricono').removeClass('alineadoatexto');
						$('#navbaricono').removeClass('alineadoalogo');
					}

					$('#marca').removeClass('padleft0');
					$('#marca').removeClass('padding0');
					$('#marca').removeAttr('align','center');

					$('#navbar-cabecera').removeClass('logocentrado');
					$('#marca').removeClass('floatnone');
					$('#marca').removeClass('padleft0');

					if($('#marca').hasClass('imagenlogo'))
					{
						$('#marca').removeClass('padleft0');
						$('#marca').removeClass('padding0');

					}

					$('.efecto_menu').val(0);
					$('#bs-navbar').removeClass("medioderecha");
					$('#marca').removeClass('margin-25');
					$('#marca').removeClass('posabsolute');
					$('#marca').removeClass('lineheight');
					$('#ulnav').removeClass('margin-25');
					$('#bs-navbar').removeClass("mediocentro");
					$('#bs-navbar').removeClass('nav-movil-absolute');

					$('.social-header-right').removeClass('social-header-absolute-right');
					$('.social-header-right').removeClass('social-header-sandwich-right');
					$('.social-header-right').removeClass('social-header-absolute-right-icon');
					$('.social-header-right').removeClass('social-header-absolute-left');
					break;

				case '1': // logo centrado - menu icono a la derecha
					logo_medio();

					var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
					var bsnavbar = document.getElementById('bs-navbar').outerHTML;
					$('#cabecera').empty();
					$('#cabecera').append(navbarheader);
					$('#cabecera').append(bsnavbar);

					$('#navbar-cabecera').removeClass('padding15');
					$('#ulnav').addClass('marginright0');

					$('#bs-navbar').removeClass('navbar-collapse');
					$('#navbaricono').addClass('displayblock');
					$('#navbar-cabecera').addClass('width100');

					$('#bs-navbar').removeClass('textcentrado');
					$('#navbaricono').removeClass('izq');
					$('#navbaricono').addClass('derecha');
					$('#ulnav').addClass('navbar-right');
					$('#ulnav').removeClass('navcentrado');

					$('.efecto_menu').removeClass('nomostrar');
					$('#socialheader').removeClass('floatnone');

					$('#bs-navbar').removeClass("cd-primary-nav");
					$('.itemmenu').removeClass("closeefecto3");
					$('.cd-nav-trigger').addClass('nomostrar');
					$('#bs-navbar').removeClass('mostrarnav');
					$('#navbaricono').removeClass('noicono');
					$('#navbaricono').addClass('alineadoatexto');

					if($('#marca').hasClass('imagenlogo')) {
						$('#navbaricono').removeClass('alineadoatexto');
						$('#navbaricono').addClass('alineadoalogo');
					}

					$('#marca').removeClass('padleft0');
					$('#marca').removeClass('padding0');
					$('#marca').removeAttr('align','center');

					$('#navbar-cabecera').addClass('logocentrado');
					$('#marca').addClass('floatnone');
					$('#marca').addClass('padleft0');

					if($('#marca').hasClass('imagenlogo'))
					{
						$('#marca').removeClass('padleft0');
						$('#marca').addClass('padding0');
						$('#marca').attr('align','center');

					}

					$('.efecto_menu').val(0);
					$('#bs-navbar').removeClass("medioderecha");
					$('#marca').removeClass('margin-25');
					$('#marca').removeClass('posabsolute');
					$('#marca').removeClass('lineheight');
					$('#ulnav').removeClass('margin-25');
					$('#bs-navbar').removeClass("mediocentro");
					$('#bs-navbar').removeClass('nav-movil-absolute');

					$('.social-header-right').removeClass('social-header-absolute-right');
					$('.social-header-right').removeClass('social-header-sandwich-right');
					$('.social-header-right').removeClass('social-header-absolute-right-icon');
					$('.social-header-right').addClass('social-header-absolute-left');
					break;

				case '2': //logo izquierda - menu icono a la derecha
					logo_izquierda();
					var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
					var bsnavbar = document.getElementById('bs-navbar').outerHTML;
					$('#cabecera').empty();
					$('#cabecera').append(navbarheader);
					$('#cabecera').append(bsnavbar);

					$('#navbar-cabecera').removeClass('padding15');
					$('#ulnav').addClass('marginright0');

					$('#bs-navbar').removeClass('navbar-collapse');
					$('#navbaricono').addClass('displayblock');
					$('#navbar-cabecera').addClass('width100');

					$('#bs-navbar').removeClass('textcentrado');
					$('#navbaricono').removeClass('izq');
					$('#navbaricono').addClass('derecha');
					$('#ulnav').addClass('navbar-right');
					$('#ulnav').removeClass('navcentrado');

					$('.efecto_menu').removeClass('nomostrar');
					$('#socialheader').removeClass('floatnone');

					$('#bs-navbar').removeClass("cd-primary-nav");
					$('.itemmenu').removeClass("closeefecto3");
					$('.cd-nav-trigger').addClass('nomostrar');
					$('#bs-navbar').removeClass('mostrarnav');
					$('#navbaricono').removeClass('noicono');
					$('#navbaricono').addClass('alineadoatexto');

					if($('#marca').hasClass('imagenlogo')) {
						$('#navbaricono').removeClass('alineadoatexto');
						$('#navbaricono').addClass('alineadoalogo');
					}

					$('#marca').removeClass('padleft0');
					$('#marca').removeClass('padding0');
					$('#marca').removeAttr('align','center');

					$('.efecto_menu').val(0);
					$('#bs-navbar').removeClass("medioderecha");
					$('#marca').removeClass('margin-25');
					$('#marca').removeClass('posabsolute');
					$('#marca').removeClass('lineheight');
					$('#ulnav').removeClass('margin-25');
					$('#bs-navbar').removeClass("mediocentro");
					$('#bs-navbar').removeClass('nav-movil-absolute');

					$('.social-header-right').removeClass('social-header-absolute-right');
					$('.social-header-right').removeClass('social-header-absolute-left');
					$('.social-header-right').removeClass('social-header-absolute-right-icon');
					$('.social-header-right').addClass('social-header-sandwich-right');

					break;

				case '3' : // menu icono a la izquierda - logo izquierda
					logo_izquierda();
					var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
					var bsnavbar = document.getElementById('bs-navbar').outerHTML;
					$('#cabecera').empty();
					$('#cabecera').append(navbarheader);
					$('#cabecera').append(bsnavbar);

					$('#navbar-cabecera').removeClass('padding15');

					$('#ulnav').addClass('marginright0');

					$('#bs-navbar').removeClass('navbar-collapse');
					$('#navbaricono').addClass('displayblock');
					$('#navbar-cabecera').addClass('width100');

					$('#bs-navbar').removeClass('textcentrado');
					$('#navbaricono').removeClass('derecha');
					$('#navbaricono').addClass('izq');
					$('#ulnav').removeClass('navbar-right');
					$('#ulnav').removeClass('navcentrado');

					$('.efecto_menu').removeClass('nomostrar');
					$('#socialheader').removeClass('floatnone');

					$('#bs-navbar').removeClass("cd-primary-nav");
					$('.itemmenu').removeClass("closeefecto3");
					$('.cd-nav-trigger').addClass('nomostrar');
					$('#bs-navbar').removeClass('mostrarnav');
					$('#navbaricono').removeClass('noicono');
					$('#navbaricono').addClass('alineadoatexto');
					$('#ulnav').removeClass('margin-25');

					$('#marca').removeClass('padleft0');
					$('#marca').removeClass('padding0');
					$('#marca').removeAttr('align','center');

					if($('#marca').hasClass('imagenlogo')) {
						$('#navbaricono').removeClass('alineadoatexto');
						$('#navbaricono').addClass('alineadoalogo');
					}

					$('.efecto_menu').val(0);
					$('#bs-navbar').removeClass("medioderecha");
					$('#marca').removeClass('margin-25');
					$('#marca').removeClass('posabsolute');
					$('#marca').removeClass('lineheight');

					$('#bs-navbar').removeClass("mediocentro");
					$('#bs-navbar').removeClass('nav-movil-absolute');

					$('.social-header-right').removeClass('social-header-sandwich-right');
					$('.social-header-right').removeClass('social-header-absolute-left');
					$('.social-header-right').removeClass('social-header-absolute-right');
					$('.social-header-right').addClass('social-header-absolute-right-icon');
					break;

				case '4': //logo izquierda- menu textual a la derecha
					logo_izquierda()
					var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
					var bsnavbar = document.getElementById('bs-navbar').outerHTML;
					$('#cabecera').empty();
					$('#cabecera').append(navbarheader);
					$('#cabecera').append(bsnavbar);
					$('#navbar-cabecera').removeClass('padding15');
					$('#ulnav').addClass('marginright0');

					$('#navbaricono').removeClass('derecha');
					$('#navbaricono').removeClass('izq');

					$('#bs-navbar').addClass('navbar-collapse');
					$('#navbaricono').removeClass('displayblock');
					$('#navbar-cabecera').removeClass('width100');
					$('#bs-navbar').removeClass('textcentrado');
					$('#ulnav').addClass('navbar-right');
					$('#ulnav').removeClass('navcentrado');

					$('.efecto_menu').addClass('nomostrar');
					$('#socialheader').removeClass('floatnone');

					$('#bs-navbar').removeClass("cd-primary-nav");
					$('.itemmenu').removeClass("closeefecto3");
					$('.cd-nav-trigger').addClass('nomostrar');
					$('#bs-navbar').removeClass('mostrarnav');
					$('#navbaricono').removeClass('noicono');

					$('#marca').removeClass('lineheight');
					$('.navbar-nav li a').removeClass('lineheight');

					$('#marca').removeClass('posabsolute');

					if($('#marca').hasClass('imagenlogo'))
					{
						$('#marca').removeClass('lineheight');
						$('.navbar-nav li a').removeClass('lineheight');
					}
					$('#ulnav').removeClass('margin-25');
					$('#marca').removeClass('margin-25');
					$('.efecto_menu').val(0);

					$('#bs-navbar').removeClass("mediocentro");
					$('#bs-navbar').removeClass('nav-movil-absolute');

					if($('.redes-sociales-header').hasClass('social-header-right'))
					{
						$('.social-header-right').removeClass('social-header-sandwich-right');
						$('.social-header-right').removeClass('social-header-absolute-left');
						$('.social-header-right').removeClass('social-header-absolute-right-icon');
						$('.social-header-right').addClass('social-header-absolute-right');
						$('#ulnav').removeClass('marginright0');
						$('#ulnav').addClass('marginright-social');
					}

					break;

				case '5' : //logo izquierda - menu textual medio
					logo_izquierda();
					var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
					var bsnavbar = document.getElementById('bs-navbar').outerHTML;
					$('#cabecera').empty();
					$('#cabecera').append(navbarheader);
					$('#cabecera').append(bsnavbar);

					$('#navbar-cabecera').removeClass('padding15');
					$('#ulnav').addClass('marginright0');

					$('#navbaricono').removeClass('derecha');
					$('#navbaricono').removeClass('izq');

					$('#bs-navbar').addClass('navbar-collapse');
					$('#navbaricono').removeClass('displayblock');
					$('#navbar-cabecera').removeClass('width100');
					$('#bs-navbar').addClass('textcentrado');
					$('#ulnav').removeClass('navbar-right');
					$('#ulnav').addClass('navcentrado');

					$('.efecto_menu').addClass('nomostrar');
					$('#socialheader').removeClass('floatnone');

					$('#bs-navbar').removeClass("cd-primary-nav");
					$('.itemmenu').removeClass("closeefecto3");
					$('.cd-nav-trigger').addClass('nomostrar');
					$('#bs-navbar').removeClass('mostrarnav');
					$('#navbaricono').removeClass('noicono');

					$('#marca').removeClass('padleft0');
					$('#marca').removeClass('padding0');
					$('#marca').removeAttr('align','center');

					$('#marca').removeClass('lineheight');
					$('.navbar-nav li a').removeClass('lineheight');
					$('#bs-navbar').removeClass("medioderecha");
					$('#marca').removeClass('margin-25');
					$('#ulnav').removeClass('margin-25');

					$('.efecto_menu').val(0);
					$('#marca').addClass('posabsolute');
					$('#bs-navbar').removeClass("mediocentro");
					$('#bs-navbar').removeClass('nav-movil-absolute');

					$('.social-header-right').removeClass('social-header-sandwich-right');
					$('.social-header-right').removeClass('social-header-absolute-left');
					$('.social-header-right').removeClass('social-header-absolute-right-icon');
					$('.social-header-right').addClass('social-header-absolute-right');
					break;
				case '6': // logo medio - menu textual a la derecha
					logo_medio()
					var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
					var bsnavbar = document.getElementById('bs-navbar').outerHTML;
					$('#cabecera').empty();
					$('#cabecera').append(navbarheader);
					$('#cabecera').append(bsnavbar);
					$('#navbar-cabecera').removeClass('padding15');
					$('#ulnav').addClass('marginright0');

					$('#navbaricono').removeClass('derecha');
					$('#navbaricono').removeClass('izq');

					$('#bs-navbar').addClass('navbar-collapse');
					$('#navbaricono').removeClass('displayblock');
					$('#navbar-cabecera').removeClass('width100');
					$('#bs-navbar').removeClass('textcentrado');
					$('#ulnav').addClass('navbar-right');
					$('#ulnav').removeClass('navcentrado');

					$('.efecto_menu').addClass('nomostrar');
					$('#socialheader').removeClass('floatnone');

					$('#bs-navbar').removeClass("cd-primary-nav");
					$('.itemmenu').removeClass("closeefecto3");
					$('.cd-nav-trigger').addClass('nomostrar');
					$('#bs-navbar').removeClass('mostrarnav');
					$('#navbaricono').removeClass('noicono');

					$('#marca').removeClass('lineheight');
					$('.navbar-nav li a').removeClass('lineheight');

					$('#marca').removeClass('posabsolute');

					if($('#marca').hasClass('imagenlogo'))
					{
						$('#marca').removeClass('lineheight');
						$('.navbar-nav li a').removeClass('lineheight');
						$('#bs-navbar').addClass("medioderecha");
					}
					else
					{
						$('#bs-navbar').addClass("medioderecha");
					}
					$('#ulnav').removeClass('margin-25');
					$('#marca').removeClass('margin-25');
					$('.efecto_menu').val(0);
					$('#bs-navbar').removeClass("mediocentro");
					$('#bs-navbar').removeClass('nav-movil-absolute');

					$('.social-header-right').removeClass('social-header-sandwich-right');
					$('.social-header-right').removeClass('social-header-absolute-right');
					$('.social-header-right').removeClass('social-header-absolute-right-icon');
					$('.social-header-right').addClass('social-header-absolute-left');

					break;

				case '7' : //menu textual medio -logo arriba menu
					logo_medio();

					var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
					var bsnavbar = document.getElementById('bs-navbar').outerHTML;
					$('#cabecera').empty();
					$('#cabecera').append(navbarheader);
					$('#cabecera').append(bsnavbar);

					$('#navbar-cabecera').addClass('padding15');

					$('#ulnav').addClass('marginright0');

					$('#navbaricono').removeClass('derecha');
					$('#navbaricono').removeClass('izq');

					$('#bs-navbar').addClass('navbar-collapse');
					$('#navbaricono').removeClass('displayblock');
					$('#navbar-cabecera').removeClass('width100');

					$('#bs-navbar').addClass('textcentrado');
					$('#ulnav').removeClass('navbar-right');
					$('#ulnav').addClass('navcentrado');

					$('.efecto_menu').addClass('nomostrar');
					$('#socialheader').addClass('floatnone');

					$('#bs-navbar').removeClass("cd-primary-nav");
					$('.itemmenu').removeClass("closeefecto3");
					$('.cd-nav-trigger').addClass('nomostrar');
					$('#bs-navbar').removeClass('mostrarnav');
					$('#navbaricono').removeClass('noicono');

					if($('#marca').hasClass('imagenlogo'))
					{
						$('#marca').removeClass('padleft0');
						$('#marca').addClass('padding0');
						$('#marca').attr('align','center');

					}
					else
					{
						$('#ulnav').addClass('margin-25');
						$('#marca').removeClass('margintop0');
					}

					$('#marca').addClass('lineheight');
					$('.navbar-nav li a').addClass('lineheight');
					$('#bs-navbar').removeClass("medioderecha");
					$('#bs-navbar').removeClass('nav-movil-absolute');
					$('#bs-navbar').addClass("mediocentro");
					$('#marca').removeClass('margin-25');

					$('.efecto_menu').val(0);
					$('#marca').removeClass('posabsolute');

					$('.social-header-right').removeClass('social-header-sandwich-right');
					$('.social-header-right').removeClass('social-header-absolute-left');
					$('.social-header-right').removeClass('social-header-absolute-right-icon');
					$('.social-header-right').addClass('social-header-absolute-right');

					break;

				case '8' : //menu textual medio- logo abajo menu
					logo_medio();
					var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
					var bsnavbar = document.getElementById('bs-navbar').outerHTML;
					$('#cabecera').empty();
					$('#cabecera').append(bsnavbar);
					$('#cabecera').append(navbarheader);

					$('#navbar-cabecera').addClass('padding15');

					$('#ulnav').addClass('marginright0');

					$('#navbaricono').removeClass('derecha');
					$('#navbaricono').removeClass('izq');

					$('#bs-navbar').addClass('navbar-collapse');
					$('#navbaricono').removeClass('displayblock');
					$('#navbar-cabecera').removeClass('width100');

					$('#bs-navbar').addClass('textcentrado');
					$('#ulnav').removeClass('navbar-right');
					$('#ulnav').addClass('navcentrado');

					$('.efecto_menu').addClass('nomostrar');
					$('#socialheader').addClass('floatnone');

					$('#bs-navbar').removeClass("cd-primary-nav");
					$('.itemmenu').removeClass("closeefecto3");
					$('.cd-nav-trigger').addClass('nomostrar');
					$('#bs-navbar').removeClass('mostrarnav');
					$('#navbaricono').removeClass('noicono');
					$('#ulnav').removeClass('margin-25');

					if($('#marca').hasClass('imagenlogo'))
					{
						$('#marca').removeClass('padleft0');
						$('#marca').addClass('padding0');
						$('#marca').attr('align','center');

					}

					$('#marca').addClass('lineheight');
					$('.navbar-nav li a').addClass('lineheight');
					$('#bs-navbar').removeClass("medioderecha");
					$('#marca').removeClass('margintop0');
					$('#marca').addClass('margin-25');

					$('.efecto_menu').val(0);
					$('#marca').removeClass('posabsolute');
					$('#bs-navbar').removeClass("mediocentro");
					$('#bs-navbar').addClass('nav-movil-absolute');

					$('.social-header-right').removeClass('social-header-sandwich-right');
					$('.social-header-right').removeClass('social-header-absolute-left');
					$('.social-header-right').removeClass('social-header-absolute-right-icon');
					$('.social-header-right').addClass('social-header-absolute-right');
					break;

				default :
					break;
			}

		});
	</script>
	<script>

		$(window).resize(function() {
			if($(window).width()<768) {
				if($('.menu-section').hasClass('fixed'))
				{
					$('#espacio-cabecera').css('height', '15px');
				}
			}
			else
			{
				if($('.menu-section').hasClass('fixed'))
				{
					$('#espacio-cabecera').css('height', '100px');
				}
				var ubicacionMenu = "{{$proyecto->ubicacion_menu}}";
				if(ubicacionMenu!='1' && ubicacionMenu!='2' && ubicacionMenu!='3')
				{
					if($('#cabecera').hasClass('efecto1'))
					{
						$('#cabecera').removeClass('efecto1');
						$('#navbar-cabecera').removeClass('menu-toggle');
						$('#bs-navbar').removeClass('in');
						$('#bs-navbar').attr('aria-expanded', 'false');
						$('#navbaricono').attr('aria-expanded', 'false');
						$('#navbaricono').find('.icon-bar.one').removeClass('oneon');
						$('#navbaricono').find('.icon-bar.two').removeClass('twoon');
						$('#navbaricono').find('.icon-bar.three').removeClass('threeon');

					}
				}
			}
		});

		//guardar modulo
		function guardarEstructura(id_modulo, recargar, id_proyecto)
		{
			var estructura = [];
			var botones = [];
			var img_crop=[];
			var videos = [];

			$('#container'+id_modulo+' .editable-unsaved').each(function(){
				if($(this).hasClass('editable-copyright') || $(this).hasClass('editable-logo-texto')) {
				}
				else {

					var struct = [];
					struct.push($(this).attr('data-pk'));
					struct.push($(this).attr('data-name'));
					if($(this).text()=='Empty')
					{
						struct.push('');
					}
					else{
						if($(this).hasClass('editable-wysihtml5'))
						{
							struct.push($(this).html());
						}
						else
						{
							struct.push($(this).text());
						}

					}
					estructura.push(struct);
				}






			});

			$('#container'+id_modulo+' .edit-linkareferencia').each(function(){
				var boton = [];
				boton.push($(this).attr('data-pk'));
				boton.push($(this).attr('data-name'));
				boton.push($(this).attr('data-texto'));
				boton.push($(this).attr('data-url'));
				boton.push($(this).attr('data-url-externo'));

				botones.push(boton);

			});
			$('#container'+id_modulo+' .imagen').each(function(){

				if ($(this).find('img').attr('data-base64')=='1') {
					var imagen = [];
					imagen.push($(this).find('a').attr('data-pk'));
					imagen.push($(this).find('img').attr('src'));
					img_crop.push(imagen);
				}
			});
			$('#container'+id_modulo+' .edit-IDvideo-play').each(function(){
				var video = [];
				video.push($(this).attr('data-pk'));
				video.push($(this).attr('data-video'));

				videos.push(video);

			});


			if(estructura.length>0 || botones.length>0 || img_crop.length>0 || videos.length>0){
				var struct = {};
				struct._token = '{!!csrf_token()!!}';
				struct.estructura = estructura;
				struct.botones =botones;
				struct.img_crop = img_crop;
				struct.videos = videos;
				struct.id_proyecto = id_proyecto;
				console.log(estructura);
				$.ajax({
					type: "POST",
					url: "{!! url(Request::segment(1).'/editestructura') !!}",
					data: struct,
					success: function(data){
						$('#guardando-modal').modal('hide');
						console.log(data);
						if(recargar==1)
						{
							location.reload();
						}
					},
					error: function(){
						$('#guardando-modal').modal('hide');
						alert('Error en la conexión');
					}
				});
			}
			else
			{
				$('#guardando-modal').modal('hide');
				if(recargar==1)
				{
					location.reload();
				}
			}
		}
		$(document).on('click','.btn-save-modulo',function(e){
			$('#guardando-modal').modal('show');

			var id_modulo = $(this).attr('data-id');
			var	fondo = document.getElementById('imagen_fondo'+id_modulo);
			var id_proyecto = $('body').attr('data-idpry');
			var img_nocrop =[];
			var img_a_eliminar=[];

			var data = new FormData();


			if($('#container'+id_modulo +' .editable-copyright').length > 0)
			{
				if($('#container'+id_modulo +' .editable-copyright').text()=='Empty')
				{
					data.append('copyright', '');
				}
				else{
					data.append('copyright', $('#container'+id_modulo +' .editable-copyright').text());
				}

			}

			$('#container'+id_modulo+' .btn-remove-imagen-modulo').each(function(){

				if ($(this).attr('data-remove')=='1') {

					img_a_eliminar.push($(this).attr('data-id'));
				}
			});

			$('#container'+id_modulo+' .file-imagen').each(function(){

				if (this.files.length > 0) {
					var id = $(this).parent().parent().parent().find('img').attr('data-pk');
					data.append('img_nocrop'+id, this.files[0]);
					img_nocrop.push(id);
				}
			});

			if(fondo)
			{
				if (fondo.files.length > 0) {
					data.append('file', fondo.files[0]);
				}
			}
			$('#container'+id_modulo+' .file-logo').each(function(){

				if (this.files.length > 0) {
					data.append('file-logo', this.files[0]);
				}
			});

			data.append('id_modulo', id_modulo);
			data.append('id_proyecto', id_proyecto);
			data.append('_token', '{!!csrf_token()!!}');
			data.append('tipografia', $(this).parent().find('.tipografia').val());
			data.append('font_size',$(this).parent().find('.font_size').val());
			data.append('img_nocrop', img_nocrop);
			data.append('img_a_eliminar', img_a_eliminar);

			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/savemodulo') !!}",
				processData: false,
				contentType: false,
				data: data,
				success: function (data) {
					//console.log(data);
					for(var i=0; i<img_nocrop.length; i++ )
					{
						$('#btn-remove-imagen-modulo'+img_nocrop[i]).removeClass('nomostrar');
					}

					guardarEstructura(id_modulo, 0, id_proyecto);

				},
				error: function (xmlHttpRequest, textStatus, errorThrown){
					if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
						return;
				}
			}, "json");
		});
		//end guardar modulo
		//guardar modulo cabecera
		$(document).on('click','.button-submit-menu',function(e){

			$('#guardando-modal').modal('show');

			var id_modulo = $(this).attr('data-id');
			var	fondo = document.getElementById('imagen_fondo'+id_modulo);
			var id_proyecto = $('body').attr('data-idpry');
			var idiomas = [];
			var img_nocrop =[];
			var img_a_eliminar=[];

			var data = new FormData();

			if($('.editable-logo-texto'))
			{
				if($('.editable-logo-texto').text()=='Empty')
				{
					data.append('logo_texto', '')
				}
				else{
					data.append('logo_texto', $('.editable-logo-texto').text())
				}

			}

			$('#container'+id_modulo+' .btn-remove-imagen-modulo').each(function(){

				if ($(this).attr('data-remove')=='1') {

					img_a_eliminar.push($(this).attr('data-id'));
				}
			});

			$('#container'+id_modulo+' .file-imagen').each(function(){

				if (this.files.length > 0) {
					var id = $(this).parent().parent().parent().find('img').attr('data-pk');
					data.append('img_nocrop'+id, this.files[0]);
					img_nocrop.push(id);
				}
			});

			$('.idioma-select').each(function(){
				if($(this).attr('data-check')=='1')
				{
					idiomas.push($(this).attr('data-id'));
				}
			});

			if(fondo)
			{
				if (fondo.files.length > 0) {
					data.append('file', fondo.files[0]);
				}
			}

			if($('.marca img').attr('data-base64')=='1')
			{
				data.append('logo_cabecera', $('.marca img').attr('src'));
			}

			data.append('id_modulo', id_modulo);
			data.append('id_proyecto', id_proyecto);
			data.append('_token', '{!!csrf_token()!!}');
			data.append('tipografia', $(this).parent().find('.tipografia').val());
			data.append('ubicacion_menu',$(this).parent().find('#ubicacion_menu2').val());
			data.append('efecto_menu',$(this).parent().find('.efecto_menu').val());
			data.append('tipo_menu', $(this).parent().find('.tipo_menu_anclado').val());
			data.append('ubicacion_logo', $(this).parent().find('.ubicacion_logo').val());
			data.append('font_size',$(this).parent().find('.font_size').val());
			data.append('idiomas',idiomas);
			data.append('img_nocrop', img_nocrop);
			data.append('img_a_eliminar', img_a_eliminar);
			data.append('link_logo', $('.marca').attr('data-href'))


			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/savemodulocabecera') !!}",
				processData: false,
				contentType: false,
				data: data,
				success: function (data) {
					guardarEstructura(id_modulo, data, id_proyecto);

				},
				error: function (xmlHttpRequest, textStatus, errorThrown){
					if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
						return;
				}
			}, "json");
		});
		//end guardar modulo cabecera

		$( document ).ready(function() {

			$('.edicion-componentes').removeClass('hidden');

			$('a[data-toggle="tooltip"]').tooltip();
			//begin formato menu
			$('#navbar-cabecera').removeClass('nomostrar');
			if(!$('#bs-navbar').hasClass('nomostrar'))
			{
				$('#bs-navbar').addClass('navbar-collapse');
			}


			var idiomas_selected =[<?php foreach($idiomas as $i){
					echo '"'. $i->id_idioma.'",';
				}?>];


			for (var i=0; i<idiomas_selected.length; i++)
			{
				$('#idioma-select'+ idiomas_selected[i]).addClass('active');
				$('#idioma-select'+ idiomas_selected[i]).attr('data-check', '1');
				$('#idioma-select'+ idiomas_selected[i]).attr('src', '{!!url('img/recursos/icons_idiomas/1482113929_ok_circle.svg')!!}');

			}

			var tipoMenu = "{{$proyecto->tipo_menu}}";
			var Ubicacionmenu = "{{$proyecto->ubicacion_menu}}";
			var Efectomenu = "{{$proyecto->efecto_menu}}";
			var pryTipografia = "{!! $proyecto->tipografia !!}";
			var tipografiaTitulos = "{{$proyecto->tipografia_titulos}}";
			var tipografiaParrafos = "{{$proyecto->tipografia_parrafos}}";
			var font_size = "{{$proyecto->font_size}}";

			if(font_size!='')
			{
				$('#font_size_anterior').val(font_size);
			}

			if(pryTipografia=='0')
			{
				$('.add-more-tipografia').removeClass('hidden');

			}

			$('.ubicacion_menu').val(Ubicacionmenu);
			$('.tipo_menu_anclado').val(tipoMenu);
			$('.font_size').val(font_size);

			switch (tipoMenu){
				case '1' :
					break;
				case '2':
					//$('.menu-section').addClass('fixed');
					break;
				default : break;
			}

			switch (Ubicacionmenu){

				case '1': // logo centrado - menu icono a la derecha

					$('#navbar-cabecera').addClass('logocentrado');
					$('#marca').addClass('floatnone');
					$('#bs-navbar').addClass('textcentrado');
					$('#ulnav').removeClass('navbar-right');
					$('#ulnav').addClass('navcentrado');
					$('#marca').addClass('padleft0');
					$('#ulnav').addClass('marginright0');

					if($('#marca').hasClass('imagenlogo'))
					{
						$('#marca').removeClass('padleft0');
						$('#marca').addClass('padding0');
						$('#marca').attr('align','center');

					}
					$('.navbar-nav li a').addClass('lineheight');
					$('#marca').addClass('lineheight');
					$('#marca').addClass('margintop0');

					$('#ulnav').addClass('marginright0');

					$('#bs-navbar').removeClass('navbar-collapse');
					$('#navbaricono').addClass('displayblock');
					$('#navbar-cabecera').addClass('width100');

					$('#bs-navbar').removeClass('textcentrado');
					$('#navbaricono').removeClass('izq');
					$('#navbaricono').addClass('derecha');
					$('#navbaricono').addClass('alineadoatexto');
					$('#ulnav').addClass('navbar-right');
					$('#ulnav').removeClass('navcentrado');

					$('.navbar-nav li a').addClass('lineheight');

					$('.efecto_menu').removeClass('nomostrar');

					if($('#marca').hasClass('imagenlogo')) {
						$('#navbaricono').removeClass('alineadoatexto');
						$('#navbaricono').addClass('alineadoalogo');
					}
					$('#marca').removeClass('lineheight');

					$('.social-header-right').addClass('social-header-absolute-left');
					break;

				case '2': //logo izquierda - menu icono a la derecha


					$('#ulnav').addClass('marginright0');

					$('#bs-navbar').removeClass('navbar-collapse');
					$('#navbaricono').addClass('displayblock');
					$('#navbar-cabecera').addClass('width100');

					$('#bs-navbar').removeClass('textcentrado');
					$('#navbaricono').removeClass('izq');
					$('#navbaricono').addClass('derecha');
					$('#navbaricono').addClass('alineadoatexto');
					$('#ulnav').addClass('navbar-right');
					$('#ulnav').removeClass('navcentrado');

					$('.navbar-nav li a').addClass('lineheight');

					$('.efecto_menu').removeClass('nomostrar');

					if($('#marca').hasClass('imagenlogo')) {
						$('#navbaricono').removeClass('alineadoatexto');
						$('#navbaricono').addClass('alineadoalogo');
					}
					$('#marca').removeClass('lineheight');

					$('.social-header-right').addClass('social-header-sandwich-right');
					break;

				case '3' : // menu icono a la izquierda - logo izquierda

					$('#ulnav').addClass('marginright0');

					$('#bs-navbar').removeClass('navbar-collapse');
					$('#navbaricono').addClass('displayblock');
					$('#navbar-cabecera').addClass('width100');

					$('#bs-navbar').removeClass('textcentrado');
					$('#navbaricono').removeClass('derecha');
					$('#navbaricono').addClass('izq');
					$('#navbaricono').addClass('alineadoatexto');
					$('#ulnav').removeClass('navbar-right');
					$('#ulnav').removeClass('navcentrado');

					$('.navbar-nav li a').addClass('lineheight');

					$('.efecto_menu').removeClass('nomostrar');

					if($('#marca').hasClass('imagenlogo')) {
						$('#navbaricono').removeClass('alineadoatexto');
						$('#navbaricono').addClass('alineadoalogo');
					}
					$('#marca').removeClass('lineheight');

					$('.social-header-right').addClass('social-header-absolute-right-icon');
					break;

				case '4': //logo izquierda- menu textual a la derecha

					$('#ulnav').addClass('marginright0');

					$('#bs-navbar').addClass('navbar-collapse');
					$('#navbaricono').removeClass('displayblock');
					$('#navbar-cabecera').removeClass('width100');
					$('#bs-navbar').removeClass('textcentrado');
					$('#ulnav').addClass('navbar-right');
					$('#ulnav').removeClass('navcentrado');

					if($('#marca').hasClass('imagenlogo'))
					{
						$('#marca').removeClass('lineheight');
						$('.navbar-nav li a').removeClass('lineheight');
					}

					if($('.redes-sociales-header').hasClass('social-header-right'))
					{
						$('.social-header-right').addClass('social-header-absolute-right');
						$('#ulnav').removeClass('marginright0');
						$('#ulnav').addClass('marginright-social');
					}
					break;

				case '5' : //logo izquierda - menu textual medio

					$('#ulnav').addClass('marginright0');
					$('#bs-navbar').addClass('navbar-collapse');
					$('#navbaricono').removeClass('displayblock');
					$('#navbar-cabecera').removeClass('width100');
					$('#bs-navbar').addClass('textcentrado');
					$('#ulnav').removeClass('navbar-right');
					$('#ulnav').addClass('navcentrado');
					$('#marca').addClass('posabsolute');

					$('.social-header-right').addClass('social-header-absolute-right');

					break;
				case '6': // logo medio - menu textual a la derecha

					$('#navbar-cabecera').addClass('logocentrado');
					$('#marca').addClass('floatnone');
					$('#marca').addClass('padleft0');
					$('#ulnav').addClass('marginright0');

					if($('#marca').hasClass('imagenlogo'))
					{
						$('#marca').removeClass('padleft0');
						$('#marca').addClass('padding0');
						$('#marca').attr('align','center');
					}

					$('#bs-navbar').addClass("medioderecha");

					$('#marca').addClass('margintop0');

					$('#bs-navbar').addClass('navbar-collapse');

					$('.social-header-right').addClass('social-header-absolute-left');

					break;

				case '7' : //menu textual medio -logo arriba menu

					$('#navbar-cabecera').addClass('logocentrado');
					$('#marca').addClass('floatnone');
					$('#bs-navbar').addClass('textcentrado');
					$('#ulnav').removeClass('navbar-right');
					$('#ulnav').addClass('navcentrado');
					$('#marca').addClass('padleft0');
					$('#ulnav').addClass('marginright0');

					$('.navbar-nav li a').addClass('lineheight');
					$('#marca').addClass('lineheight');
					$('#marca').addClass('margintop0');

					$('#navbar-cabecera').addClass('padding15');
					$('#ulnav').addClass('marginright0');
					$('#bs-navbar').addClass('navbar-collapse');
					$('#navbaricono').removeClass('displayblock');
					$('#navbar-cabecera').removeClass('width100');

					$('#socialheader').addClass('floatnone');

					if($('#marca').hasClass('imagenlogo'))
					{
						$('#marca').removeClass('padleft0');
						$('#marca').addClass('padding0');
						$('#marca').attr('align','center');

					}
					else
					{
						$('#ulnav').addClass('margin-25');
						$('#marca').removeClass('margintop0');
					}
					$('#bs-navbar').addClass("mediocentro");

					$('.social-header-right').addClass('social-header-absolute-right');
					break;

				case '8' : //menu textual medio- logo abajo menu

					$('#navbar-cabecera').addClass('logocentrado');
					$('#marca').addClass('floatnone');
					$('#bs-navbar').addClass('textcentrado');
					$('#ulnav').removeClass('navbar-right');
					$('#ulnav').addClass('navcentrado');
					$('#marca').addClass('padleft0');
					$('#ulnav').addClass('marginright0');

					if($('#marca').hasClass('imagenlogo'))
					{
						$('#marca').removeClass('padleft0');
						$('#marca').addClass('padding0');
						$('#marca').attr('align','center');

					}
					$('.navbar-nav li a').addClass('lineheight');
					$('#marca').addClass('lineheight');

					var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
					var bsnavbar = document.getElementById('bs-navbar').outerHTML;
					$('#cabecera').empty();
					$('#cabecera').append(bsnavbar);
					$('#cabecera').append(navbarheader);

					$('#navbar-cabecera').addClass('padding15');

					$('#bs-navbar').addClass('navbar-collapse');
					$('#bs-navbar').addClass('nav-movil-absolute');

					$('#socialheader').addClass('floatnone');

					$('#marca').addClass('margin-25');

					$('.social-header-right').addClass('social-header-absolute-right');
					break;

				default :
					break;
			}

			switch (Efectomenu){
				case '1' :
					break;
				case '2':
					$('#bs-navbar').css({"-webkit-transition": "none", "transition": "none"});
					$('#navbaricono').addClass('efectox');
					break;
				case '3':
					$('#ulnav').addClass('marginright0');
					$('#navbaricono').removeClass('efectox');

					$('#bs-navbar').addClass('navbar-collapse');
					$('#navbaricono').removeClass('displayblock');
					$('#navbar-cabecera').removeClass('width100');
					$('#bs-navbar').removeClass('textcentrado');
					$('#ulnav').addClass('navbar-right');
					$('#ulnav').removeClass('navcentrado');

					$('#bs-navbar').addClass("cd-primary-nav");
					$('#bs-navbar').addClass("cd-primary-nav");
					$('.itemmenu').addClass("closeefecto3");
					$('.cd-nav-trigger').removeClass('nomostrar');
					$('#bs-navbar').addClass('mostrarnav');
					$('#navbaricono').addClass('noicono');
					break;
				default :
					break;
			}
			//end formato menu

			//

			//efecto 2 menu
			$(document).on('click','.efectox',function(e){
				$('#navbar-cabecera').toggleClass("menu-toggle");
				$('.cabecera').toggleClass("efecto1");
				$('.one').toggleClass("oneon");
				$('.two').toggleClass("twoon");
				$('.three').toggleClass("threeon");
				$('#espacio-cabecera').toggleClass("height-header");
				if($('#bs-navbar').hasClass('nomostrar'))
				{
					$('#bs-navbar').removeClass('nomostrar');
				}
			});
			//end efecto 2 menu

			var cantidadMD = $('.sectionMD').size();

			var primerContenido = 0 ;

			if($('#footer-exists').val()=='1' && $('#header-exists').val()=='1')
			{
				cantidadMD = cantidadMD-2;
				primerContenido = 1;
			}
			else
			{
				if($('#header-exists').val()=='1')
				{
					primerContenido = 1;
					cantidadMD = cantidadMD-1;
				}
				else
				{
					if($('#footer-exists').val()=='1')
					{
						primerContenido = 0;
						cantidadMD = cantidadMD-2;
					}
					else
					{
						primerContenido = 0;
						cantidadMD = cantidadMD-1;
					}
				}
			}


			$('.micontenedor').find('.sectionMD').each(function(index, el) {

				if(index == primerContenido)
				{
					$(this).find('a.upDiv').css('display', 'none');
				}
				if(index == (cantidadMD))
				{
					$(this).find('a.BajarDiv').css('display', 'none');
				};
			});


			//set valores toolbar formato menu
			var ubicacion_logo=$('.ubicacion_logo').find('option:selected').val();
			var tipo_menu = $('.tipo_menu_anclado').val();
			var ubicacion_menu = "<?php echo $proyecto->ubicacion_menu ?>";
			var efecto_menu = "<?php echo $proyecto->efecto_menu ?>";
			var tipografia = "<?php echo $proyecto->tipografia ?>";

			$(".optmenu").each(function( i ) {
				if ($( this ).attr('data-logo') == ubicacion_logo|| $( this ).attr('data-logo') == '0')
				{
					$( this ).removeClass('nomostrar');
					if(ubicacion_logo == $(this).val())
					{
						$('#ubicacion_menu').val(ubicacion_logo);
					}
				}
				else
				{
					$( this ).addClass('nomostrar');
				}
			});
			$('.ubicacion_menu').val(ubicacion_menu);
			$('.efecto_menu').val(efecto_menu);
			$('.tipografia').val(tipografia);

			//fin set valores toolbar formato menu


		});

		function removeEfectopen(){
			if($('#bs-navbar').hasClass('in'))
			{
				$('#bs-navbar').removeClass('in')
			}
			if($('.cabecera').hasClass('efecto1')) {
				$('#navbar-cabecera').removeClass("menu-toggle");
				$('.cabecera').removeClass("efecto1");
				$('.one').removeClass("oneon");
				$('.two').removeClass("twoon");
				$('.three').removeClass("threeon");
			}
		}

		function logo_izquierda()
		{
			var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
			var bsnavbar = document.getElementById('bs-navbar').outerHTML;
			$('#cabecera').empty();
			$('#cabecera').append(navbarheader);
			$('#cabecera').append(bsnavbar);

			$('#navbar-cabecera').removeClass('logocentrado');
			$('#marca').removeClass('floatnone');
			$('#marca').removeClass('padleft0');
			$('#ulnav').removeClass('marginright0');
			$('#marca').removeClass('padding0');
			$('#marca').removeAttr('align','center');
			$('.navbar-nav li a').removeClass('lineheight');

			$('.ubicacion_menu').val(0);
			$('.efecto_menu').addClass('nomostrar');
			$('#bs-navbar').removeClass("medioderecha");
			$('#marca').removeClass('margin-25');
			$('#marca').removeClass('posabsolute');
			$('#marca').removeClass('margintop0');
			$('#ulnav').removeClass('margin-25');
		}

		function logo_medio()
		{
			$('#navbar-cabecera').addClass('logocentrado');
			$('#marca').addClass('floatnone');
			$('#marca').addClass('padleft0');
			if($('#marca').hasClass('imagenlogo'))
			{
				$('#marca').removeClass('padleft0');
				$('#marca').addClass('padding0');
				$('#marca').attr('align','center');

			}
			$('.navbar-nav li a').addClass('lineheight');
			$('#marca').addClass('lineheight');

			$('.ubicacion_menu').val(0);
			$('.efecto_menu').addClass('nomostrar');
			$('#bs-navbar').removeClass("medioderecha");
			$('#marca').removeClass('margin-25');
			$('#marca').removeClass('posabsolute');
			$('#marca').addClass('margintop0');
			$('#ulnav').removeClass('margin-25');
		}

		$('.ancla').click(function(){
			$('html, body').animate({
				scrollTop: $( $(this).attr('href') ).offset().top
			}, 1000);
			return false;
		});

		$(document).on('click','.ancla',function(){
			$('html, body').animate({
				scrollTop: $( $(this).attr('href') ).offset().top
			}, 1000);
			return false;
		});

		$(document).on('click','.menu-anclado',function(){

			var anclado = $('.tipo_menu_anclado').val();

			if(anclado=='1')
			{
				$(this).find('img').attr('src', '{!!url('img/iconos-editar/anclado.svg')!!}');
				$(this).find('img').attr('title', 'Quitar menú fijo en pantalla');
				$('.tipo_menu_anclado').val('2');
			}
			else
			{
				$(this).find('img').attr('src', '{!!url('img/iconos-editar/noanclado.svg')!!}');
				$(this).find('img').attr('title', 'Establecer menú fijo en pantalla');
				$('.tipo_menu_anclado').val('1');
			}
		});

		$('.efecto_menu').change(function(){
			var efectoMenu = $( this ).val();

			removeEfectopen();

			switch (efectoMenu){
				case '1' :
					if($('.ubicacion_menu').val()==5)
					{
						$('#bs-navbar').removeClass('navbar-collapse');
						$('#navbaricono').addClass('displayblock');
						$('#navbar-cabecera').addClass('width100');

						$('#bs-navbar').removeClass('textcentrado');
						$('#navbaricono').removeClass('derecha');
						$('#navbaricono').addClass('izq');
						$('#ulnav').removeClass('navbar-right');
						$('#ulnav').removeClass('navcentrado');

						$('.efecto_menu').removeClass('nomostrar');
						$('#socialheader').removeClass('floatnone');
					}
					if($('.ubicacion_menu').val()==6)
					{
						$('#bs-navbar').removeClass('navbar-collapse');
						$('#navbaricono').addClass('displayblock');
						$('#navbar-cabecera').addClass('width100');

						$('#bs-navbar').removeClass('textcentrado');
						$('#navbaricono').removeClass('izq');
						$('#navbaricono').addClass('derecha');
						$('#ulnav').addClass('navbar-right');
						$('#ulnav').removeClass('navcentrado');

						$('.efecto_menu').removeClass('nomostrar');
						$('#socialheader').removeClass('floatnone');
					}
					$('#navbaricono').removeClass('efectox');
					$('#bs-navbar').removeAttr( 'style' );

					$('#bs-navbar').removeClass("cd-primary-nav");
					$('.itemmenu').removeClass("closeefecto3");
					$('.cd-nav-trigger').addClass('nomostrar');
					$('#bs-navbar').removeClass('mostrarnav');
					$('#navbaricono').removeClass('noicono');
					break;
				case '2':
					if($('.ubicacion_menu').val()==5)
					{
						$('#bs-navbar').removeClass('navbar-collapse');
						$('#navbaricono').addClass('displayblock');
						$('#navbar-cabecera').addClass('width100');

						$('#bs-navbar').removeClass('textcentrado');
						$('#navbaricono').removeClass('derecha');
						$('#navbaricono').addClass('izq');
						$('#ulnav').removeClass('navbar-right');
						$('#ulnav').removeClass('navcentrado');

						$('.efecto_menu').removeClass('nomostrar');
						$('#socialheader').removeClass('floatnone');
					}
					if($('.ubicacion_menu').val()==6)
					{
						$('#bs-navbar').removeClass('navbar-collapse');
						$('#navbaricono').addClass('displayblock');
						$('#navbar-cabecera').addClass('width100');

						$('#bs-navbar').removeClass('textcentrado');
						$('#navbaricono').removeClass('izq');
						$('#navbaricono').addClass('derecha');
						$('#ulnav').addClass('navbar-right');
						$('#ulnav').removeClass('navcentrado');

						$('.efecto_menu').removeClass('nomostrar');
						$('#socialheader').removeClass('floatnone');
					}

					$('#bs-navbar').css("-webkit-transition", "none");
					$('#bs-navbar').css("transition", "none");
					$('#navbaricono').addClass('efectox');

					$('#bs-navbar').removeClass("cd-primary-nav");
					$('.itemmenu').removeClass("closeefecto3");
					$('.cd-nav-trigger').addClass('nomostrar');
					$('#bs-navbar').removeClass('mostrarnav');
					$('#navbaricono').removeClass('noicono');
					break;
				case '3':
					var navbarheader = document.getElementById('navbar-cabecera').outerHTML;
					var bsnavbar = document.getElementById('bs-navbar').outerHTML;
					$('#cabecera').empty();
					$('#cabecera').append(navbarheader);
					$('#cabecera').append(bsnavbar);

					$('#ulnav').addClass('marginright0');

					$('#bs-navbar').addClass('navbar-collapse');
					$('#navbaricono').removeClass('displayblock');
					$('#navbar-cabecera').removeClass('width100');
					$('#bs-navbar').removeClass('textcentrado');
					$('#ulnav').addClass('navbar-right');
					$('#ulnav').removeClass('navcentrado');

					$('.efecto_menu').removeClass('nomostrar');
					$('#socialheader').removeClass('floatnone');

					$('#bs-navbar').addClass("cd-primary-nav");
					$('.itemmenu').addClass("closeefecto3");
					$('.cd-nav-trigger').removeClass('nomostrar');
					$('.cd-nav-trigger').addClass('derecha');
					$('#bs-navbar').addClass('mostrarnav');
					$('#navbaricono').addClass('noicono');
					break;

				default :
					break;
			}

		});

		//eliminar subpagina
		$(document).on('click','.eliminarsubpagina',function(){
			$('.deseaeliminarsubpagina').removeClass("nomostrar");
			$('.boxs-subpagina').addClass("nomostrar");
			var id = $(this).attr('data-id');
			var idpry = $(this).attr('data-pry');
			var idcliente = $(this).attr('data-cliente');
			$('.sieliminarsubpagina').attr('data-id',id);
			$('.sieliminarsubpagina').attr('data-pry',idpry);
			$('.sieliminarsubpagina').attr('data-cliente',idcliente);

		});

		$(document).on('click','.sieliminarsubpagina',function(){
			var id =$(this).attr('data-id');
			var idpry =$(this).attr('data-pry');
			var idcliente =$(this).attr('data-cliente');

			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.id = id;

			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/eliminarsubpagina') !!}",
				data: data,
				success: function(data){
					window.location = "{!!url(Request::segment(1).'/editar/"+idpry+"/"+idcliente+"')!!}";
				},
				error: function(){
					alert('Error en la conexión');
				}
			});
		});

		$(document).on('click', '.noeliminarsubpagina', function() {
			$('.deseaeliminarsubpagina').addClass("nomostrar");
			$('.boxs-subpagina').removeClass("nomostrar");

		});


		$(document).on('click','.cd-nav-trigger',function(){
			var overlayNav = $('.cd-overlay-nav'),
					navigation = $('.cd-primary-nav'),
					logo = $('.marca');

			if($(this).hasClass('close-nav'))
			{
				overlayNav.children('span').velocity({
					translateZ: 0,
					scaleX: 1,
					scaleY: 1,
				}, 300, 'easeInCubic', function(){
					navigation.addClass('fade-in');
					logo.addClass('nomostrar');
				});
			}
			else{
				overlayNav.children('span').velocity({
					translateZ: 0,
					scaleX: 1,
					scaleY: 1,
				}, 500, 'easeInCubic', function() {
					navigation.removeClass('fade-in');
					logo.removeClass('nomostrar');
				});
			}
		});

		$(document).on('click','.closeefecto3',function(){
			var overlayNav = $('.cd-overlay-nav'),
					overlayContent = $('.cd-overlay-content'),
					navigation = $('.cd-primary-nav'),
					toggleNav = $('.cd-nav-trigger'),
					logo = $('.marca');
			if(!toggleNav.hasClass('close-nav')) {
				//it means navigation is not visible yet - open it and animate navigation layer
				toggleNav.addClass('close-nav');

				overlayNav.children('span').velocity({
					translateZ: 0,
					scaleX: 1,
					scaleY: 1,
				}, 500, 'easeInCubic', function(){
					navigation.addClass('fade-in');
					logo.addClass('nomostrar');
				});
			} else {
				//navigation is open - close it and remove navigation layer
				toggleNav.removeClass('close-nav');

				overlayContent.children('span').velocity({
					translateZ: 0,
					scaleX: 1,
					scaleY: 1,
				}, 500, 'easeInCubic', function(){
					navigation.removeClass('fade-in');
					logo.removeClass('nomostrar');

					overlayNav.children('span').velocity({
						translateZ: 0,
						scaleX: 0,
						scaleY: 0,
					}, 0);

					overlayContent.addClass('is-hidden').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
						overlayContent.children('span').velocity({
							translateZ: 0,
							scaleX: 0,
							scaleY: 0,
						}, 0, function(){overlayContent.removeClass('is-hidden')});
					});
					if($('html').hasClass('no-csstransitions')) {
						overlayContent.children('span').velocity({
							translateZ: 0,
							scaleX: 0,
							scaleY: 0,
						}, 0, function(){overlayContent.removeClass('is-hidden')});
					}
				});
			}
		});

		$("#tipografiaPersonalizada").on("shown.bs.modal", function () {
			$('#listado-tipografias').empty();
			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.id_proyecto = $('body').attr('data-idpry');
			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/readtipografias') !!}",
				data: data,
				success: function(data){
					$.each( data, function( key ) {
						if(data[key].seleccionada=='1'){
							$('#listado-tipografias').append('<option value="'+data[key].id+'" selected>'+data[key].estilo+'</option>');
						}
						else{
							$('#listado-tipografias').append('<option value="'+data[key].id+'">'+data[key].estilo+'</option>')
						}

					});
					$('.alert-tipografia-personalizada').addClass('hidden');

				},
				error: function(){
					alert('Error en la conexión');
				}
			});
		});

		$('.tipografia').change(function(){

			$('#tipografia_titulos_anterior').val($('#tipografia_titulos').val());
			$('#tipografia_parrafos_anterior').val($('#tipografia_parrafos').val());

			var tipografia_titulos =$(this).find('option:selected').attr('data-titulo');
			var tipografia_parrafos = $(this).find('option:selected').attr('data-parrafo');

			$('#tipografia_titulos').val(tipografia_titulos);
			$('#tipografia_parrafos').val(tipografia_parrafos);

			$('body').removeClass($('#tipografia_parrafos_anterior').val());
			$('body').addClass(tipografia_parrafos);
			$('.titulo').removeClass($('#tipografia_titulos_anterior').val());
			$('.titulo').addClass(tipografia_titulos);
			$('.subtitulo').removeClass($('#tipografia_titulos_anterior').val());
			$('.subtitulo').addClass(tipografia_titulos);

			var val_tipografia= $(this).find('option:selected').val();

			$('.tipografia').each(function(){
				$(this).val(val_tipografia);
			});

			if(val_tipografia=='0')
			{
				$('.add-more-tipografia').removeClass('hidden');

			}
			else{
				$('.add-more-tipografia').addClass('hidden');
			}

		});



		$(document).on('click','.add-tipografia',function(){

			var titulo_url =$('#input-tipografia-titulo').val();
			var parrafo_url = $('#input-tipografia-parrafo').val();
			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.id_proyecto = $('body').attr('data-idpry');
			data.titulo_url = titulo_url;
			data.parrafo_url = parrafo_url;
			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/createtipografia') !!}",
				data: data,
				success: function(data){
					$('#listado-tipografias').append('<option value="'+data.id+'">'+data.estilo+'</option>');

					$('head').append("<link href='"+titulo_url+"' rel='stylesheet' type='text/css'/>"+
							"<link href='"+parrafo_url+"' rel='stylesheet' type='text/css'/>"+
							"<style>"+
							"."+data.titulo+"  {font-family: '"+ data.titulo.replace('-', ' ')+"', sans-serif;}"+
							"."+data.parrafo+"  {font-family: '"+ data.parrafo.replace('-', ' ')+"', sans-serif;}"+
							"</style>");
				},
				error: function(){
					alert('Error en la conexión');
				}
			});
		});
		$(document).on('click','.set-tipografia',function(){

			var id = $('#listado-tipografias').val();

			if(id>'0'){
				var data = {};
				data._token = '{!!csrf_token()!!}';
				data.id_proyecto = $('body').attr('data-idpry');
				data.id = id;

				$.ajax({
					type: "POST",
					url: "{!! url(Request::segment(1).'/settipografia') !!}",
					data: data,
					success: function(data){
						$('head').append("<link href='"+data.titulo_url+"' rel='stylesheet' type='text/css'/>"+
								"<link href='"+data.parrafo_url+"' rel='stylesheet' type='text/css'/>"+
								"<style>"+
								"."+data.titulo+"  {font-family: '"+ data.titulo.replace('-', ' ')+"', sans-serif;}"+
								"."+data.parrafo+"  {font-family: '"+ data.parrafo.replace('-', ' ')+"', sans-serif;}"+
								"</style>");

						$('.tipografia option[value="0"]').attr('data-titulo', data.titulo);
						$('.tipografia option[value="0"]').attr('data-parrafo', data.parrafo);
						$('.tipografia option[value="0"]').text('Personalizada('+data.titulo.replace('-', ' ')+ ' - ' + data.parrafo.replace('-',' ')+')');

						$('#tipografia_titulos_anterior').val($('#tipografia_titulos').val());
						$('#tipografia_parrafos_anterior').val($('#tipografia_parrafos').val());

						$('#tipografia_titulos').val(data.titulo);
						$('#tipografia_parrafos').val(data.parrafo);

						$('body').removeClass($('#tipografia_parrafos_anterior').val());
						$('body').addClass(data.parrafo);
						$('.titulo').removeClass($('#tipografia_titulos_anterior').val());
						$('.titulo').addClass(data.titulo);
						$('.subtitulo').removeClass($('#tipografia_titulos_anterior').val());
						$('.subtitulo').addClass(data.titulo);

						$('#tipografiaPersonalizada').modal('hide');
					},
					error: function(){
						alert('Error en la conexión');
					}
				});

			}
			else{
				$('.alert-tipografia-personalizada').removeClass('hidden');
			}

		});
		$(document).on('click','.delete-tipografia',function(){

			var id = $('#listado-tipografias').val();

			if(id>'0') {
				var data = {};
				data._token = '{!!csrf_token()!!}';
				data.id_proyecto = $('body').attr('data-idpry');
				data.id = $('#listado-tipografias').val();

				$.ajax({
					type: "POST",
					url: "{!! url(Request::segment(1).'/deletetipografia') !!}",
					data: data,
					success: function (data) {
						$('.alert-tipografia-personalizada').addClass('hidden');
						$('#listado-tipografias option[value="'+id+'"]').remove();
					},
					error: function () {
						alert('Error en la conexión');
					}
				});
			}
			else{
				$('.alert-tipografia-personalizada').removeClass('hidden');
			}
		});

		$('.font_size').change(function(){
			var font_size = $( this ).val();
			var font_anterior = $('#font_size_anterior').val();

			fontSize(font_size, font_anterior, 'p');
			fontSize(font_size, font_anterior, 'h1');
			fontSize(font_size, font_anterior, 'h2');
			fontSize(font_size, font_anterior, 'h3');
			fontSize(font_size, font_anterior, 'h4');
			fontSize(font_size, font_anterior, 'h5');
			fontSize(font_size, font_anterior, 'h6');
			fontSize(font_size, font_anterior, 'span');
			fontSize(font_size, font_anterior, 'a');

			$('#font_size_anterior').val(font_size);

			var font= $(this).find('option:selected').val();

			$('.font_size').each(function(){
				$(this).val(font);
			});

		});

		$('.vistaminiatura').on('click', function() {


			if($('#miniaturaweb').hasClass('oculta'))
			{
				$(".sectionMD").animate({
					width: '-=300px'
				}, 700);
				$('#miniaturaweb').removeClass('oculta');
				$('#miniaturaweb').show('slide', {direction: 'right'}, 700);


			}
			else
			{
				$(".sectionMD").animate({
					width: '+=300px'
				}, 700);
				$('#miniaturaweb').addClass('oculta');
				$('#miniaturaweb').hide('slide', {direction: 'right'}, 700);

			}
		});

		$('.openComent').on('click', function(event) {

			$('.idsPr').val($(this).attr('data-ides'));
			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.ides = $(this).attr('data-ides');
			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/obtenercoment') !!}",
				data: data,
				success: function(data){
					$('.ComentaTxt').val(data);
					$("#responsive").modal();
				},
				error: function(){
					alert('Error en la conexión');
				}
			});
		});
		//subir bajar modulos
		$(".upDiv,.BajarDiv").click(function(){
			var boton = $(this);
			var cantidadMD = $('.sectionMD').size();

			var primerContenido = 0 ;

			if($('#footer-exists').val()=='1' && $('#header-exists').val()=='1')
			{
				cantidadMD = cantidadMD-2;
				primerContenido = 1;
			}
			else
			{
				if($('#header-exists').val()=='1')
				{
					primerContenido = 1;
					cantidadMD = cantidadMD-1;
				}
				else
				{
					if($('#footer-exists').val()=='1')
					{
						primerContenido = 0;
						cantidadMD = cantidadMD-2;
					}
					else
					{
						primerContenido = 0;
						cantidadMD = cantidadMD-1;
					}
				}
			}


			var row = $(boton).parent().parent().parent().parent();
			var orden = $('.sectionMD').index(row);
			var tmp;
			var tmp2;
			var porcentaje1;
			var porcentaje2;

			if (boton.is(".upDiv")) {
				row.insertBefore(row.prev());

				tmp = $(row.next()).attr('id');
				tmp2 = $(row).attr('id');

				porcentaje1 = $(row.next()).find('.progress-bar').css('width');
				porcentaje2 = $(row).find('.progress-bar').css('width');

				$(row.next()).attr('id', tmp2);
				$(row.next()).find('.contador-modulos').text(tmp2);
				$(row).attr('id', tmp);
				$(row).find('.contador-modulos').text(tmp);
				$(row.next()).find('.progress-bar').css('width', porcentaje2);
				$(row).find('.progress-bar').css('width', porcentaje1);
				$(row).focus();
			}
			else {
				row.insertAfter(row.next());

				tmp = $(row.prev()).attr('id');
				tmp2 = $(row).attr('id');

				porcentaje1 = $(row.prev()).find('.progress-bar').css('width');
				porcentaje2 = $(row).find('.progress-bar').css('width');

				$(row.prev()).attr('id', tmp2);
				$(row.prev()).find('.contador-modulos').text(tmp2);
				$(row).attr('id', tmp);
				$(row).find('.contador-modulos').text(tmp);
				$(row.prev()).find('.progress-bar').css('width', porcentaje2);
				$(row).find('.progress-bar').css('width', porcentaje1);
				$(row).focus();
			}
			var array = [];

			$('.micontenedor').find('.sectionMD').each(function(index, el) {

				$(this).find('a.upDiv').css('display', 'inline-block');
				$(this).find('a.BajarDiv').css('display', 'inline-block');

				array.push($(this).attr('data-ides'));
				if(index == primerContenido)
				{
					$(this).find('a.upDiv').css('display', 'none');
				}
				if(index == (cantidadMD))
				{
					$(this).find('a.BajarDiv').css('display', 'none');
				};
			});

			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.orden = array;
			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/saveorder') !!}",
				data: data,
				success: function(){

				},
				error: function(){
					alert('Error en la conexión');
				}
			});
		});

		//custom popover
		$(function() {
			$("[data-toggle=popover]").popover({

				html: true,
				container: 'body',
				placement: "bottom",
				content: function () {
					var content = $(this).attr("data-popover-content");
					return $(content).children(".popover-content").html();
				},
				title: function () {
					var title = $(this).attr("data-popover-content");
					return $(title).children(".popover-title").html();
				}

			});
		});
		//popover edit link-referencia

		$(document).on('click', '.edit-linkareferencia', function() {
			$(this).popover('show');
			$('.popover #id_link_referencia').val($(this).attr('data-pk'));
			$('.popover .edit-upload-file').attr('data-pk', $(this).attr('data-pk'));
			$('.popover #texto_link_referencia').val($(this).attr('data-texto'));
			$('.popover #name_link_referencia').val($(this).attr('data-name'));
			$('.popover #url_link_referencia').val($(this).attr('data-url'));

			var url_externo = $(this).attr('data-url-externo');
			$('.popover #value_url_externo').val(url_externo);

			switch(url_externo)
			{
				case '0':
					$('.popover #es_ancla').prop('checked', 'true');
					$('.url-externo').addClass('nomostrar');
					$('.url-download').addClass('nomostrar');
					$('.url-interno').removeClass('nomostrar');
					$('.popover #url_link_referencia').removeAttr('readonly');
					break;
				case '1':
					$('.popover #es_url_externo').prop('checked', 'true');
					$('.url-interno').addClass('nomostrar');
					$('.url-download').addClass('nomostrar');
					$('.url-externo').removeClass('nomostrar');
					$('.popover #url_link_referencia').removeAttr('readonly');
					break;
				case '2':
					$('.popover #es_download').prop('checked', 'true');
					$('.url-interno').addClass('nomostrar');
					$('.url-externo').addClass('nomostrar');
					$('.url-download').removeClass('nomostrar');
					$('.popover #url_link_referencia').prop('readonly', true);
					break;
			}
			/*if(url_externo == '1')
			 {
			 $('.popover #es_url_externo').prop('checked', 'true');
			 $('.url-interno').addClass('nomostrar');
			 $('.url-externo').removeClass('nomostrar');
			 }
			 else
			 {
			 $('.popover #es_url_externo').removeAttr('checked');
			 $('.url-externo').addClass('nomostrar');
			 $('.url-interno').removeClass('nomostrar');
			 }*/

		});
		$(document).on('click', '#es_url_externo', function() {
			if (this.checked)
			{
				$('.url-interno').addClass('nomostrar');
				$('.url-download').addClass('nomostrar');
				$('.url-externo').removeClass('nomostrar');
				$('.popover #value_url_externo').val('1');
				$('.popover #url_link_referencia').removeAttr('readonly');
			}

		});
		$(document).on('click', '#es_ancla', function() {
			if (this.checked)
			{
				$('.url-interno').removeClass('nomostrar');
				$('.url-download').addClass('nomostrar');
				$('.url-externo').addClass('nomostrar');
				$('.popover #value_url_externo').val('0');
				$('.popover #url_link_referencia').removeAttr('readonly');
			}
		});
		$(document).on('click', '#es_download', function() {
			if (this.checked)
			{
				$('.url-interno').addClass('nomostrar');
				$('.url-download').removeClass('nomostrar');
				$('.url-externo').addClass('nomostrar');
				$('.popover #value_url_externo').val('2');
				$('.popover #url_link_referencia').prop('readonly', true);
			}
		});
		$(document).on('change', '#texto_link_referencia', function() {

			$('.popover #texto_link_referencia').val($(this).val());
		});
		$(document).on('change', '#url_link_referencia', function() {

			$('.popover #url_link_referencia').val($(this).val());
		});
		$(document).on('click', '.editlink-referencia-submit', function() {

			var id = $('.popover #id_link_referencia').val();
			$('#linkareferencia'+ id).attr('data-url', $('.popover #url_link_referencia').val());
			$('#linkareferencia'+ id).attr('data-url-externo', $('.popover #value_url_externo').val());
			$('#linkareferencia'+ id).attr('data-texto', $('.popover #texto_link_referencia').val());
			$('#linkareferencia'+ id).text($('.popover #texto_link_referencia').val());
			$('.popover').popover('hide');

			/*var data = {};
			 data._token = '{!!csrf_token()!!}';
			 data.id_md_estructura = $('.popover #id_link_referencia').val();
			 data.name = $('.popover #name_link_referencia').val();
			 data.texto = $('.popover #texto_link_referencia').val();
			 data.url= $('.popover #url_link_referencia').val();
			 data.es_url_externo= $('.popover #es_url_externo').val();
			 data.idioma = $('body').attr('data-idioma');

			 $.ajax({
			 url: '{!! url(Request::segment(1).'/editarlinkareferencia') !!}',
			 data: data,
			 type: 'POST',
			 success: function(data) {
			 $('#linkareferencia'+ data.id).attr('data-url', data.url);
			 $('#linkareferencia'+ data.id).attr('data-url-externo', data.es_url_externo);
			 $('#linkareferencia'+ data.id).attr('data-texto', data.texto);
			 $('#linkareferencia'+ data.id).text(data.texto);
			 $('.popover').popover('hide');
			 }
			 });*/
		});
		//end popover edit link-referencia

		//popover redes sociales
		$(document).on('change', '.list-social', function() {

			$('.popover #icono').val($(this).children(":selected").attr('data-icono'));
			$('.popover #id_red_social').val($(this).children(":selected").val());
		});
		$(document).on('click', '.editsocial', function() {

			$('.popover #urlsocial').val($(this).attr('data-url'));
			$('.popover #id_socialicono').val($(this).attr('data-pk'));
			$('.popover #icono').val($(this).attr('data-icono'));
			$('.popover #id_red_social').val($(this).attr('data-idred'));
			$('.popover .list-social').val($(this).attr('data-idred'));
		});
		$(document).on('change', '#urlsocial', function() {

			$('.popover #urlsocial').val($(this).val());
		});
		$(document).on('click', '.editsocial-submit', function() {

			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.id_socialicono = $('.popover #id_socialicono').val();
			data.icono = $('.popover #icono').val();
			data.urlsocial= $('.popover #urlsocial').val();
			data.id_red_social = $('.popover #id_red_social').val();

			$.ajax({
				url: '{!! url(Request::segment(1).'/editarsocial') !!}',
				data: data,
				type: 'POST',
				success: function(data) {
					$('#socialicono'+ data.id).removeClass();
					$('#socialicono'+ data.id).addClass(data.icono);
					$('#socialicono'+ data.id).addClass('editsocial');
					$('#socialicono'+ data.id).attr('data-url', data.url);
					$('#socialicono'+ data.id).attr('data-icono', data.icono);
					$('#socialicono'+ data.id).attr('data-idred', data.id_red_social);
					$('.popover').popover('hide');

				}
			});
		});
		//en popover redes sociales

		//popover fa-icons

		$(document).on('change', '.list-fa-icons', function() {

			$('.popover #fa_icono').val($(this).children(":selected").val());
		});
		$(document).on('click', '.edit-icono', function() {

			$('.popover #id_md_icono').val($(this).attr('data-pk'));
			$('.popover #fa_icono').val($(this).attr('data-icono'));
			$('.popover #fa_icono_campo').val($(this).attr('data-campo'));
			$('.popover .list-fa-icons').val($(this).attr('data-icono'));

		});

		$(document).on('click', '.editicono-submit', function() {

			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.id_md_icono = $('.popover #id_md_icono').val();
			data.icono = $( "#fa_icono").val();
			data.campo = $('.popover #fa_icono_campo').val();

			$.ajax({
				url: '{!! url(Request::segment(1).'/editarfaicon') !!}',
				data: data,
				type: 'POST',
				success: function(data) {

					$('#faicon'+ $('.popover #id_md_icono').val()).removeClass();
					$('#faicon'+ $('.popover #id_md_icono').val()).addClass('iconos');
					$('#faicon'+ $('.popover #id_md_icono').val()).addClass('subtitulo-custom-color');
					$('#faicon'+ $('.popover #id_md_icono').val()).addClass('edit-icono');
					$('#faicon'+ $('.popover #id_md_icono').val()).addClass('fa');
					$('#faicon'+ $('.popover #id_md_icono').val()).addClass($('.popover #fa_icono').val());
					$('#faicon'+ $('.popover #id_md_icono').val()).attr('data-icono',$('.popover #fa_icono').val());
					$('.popover').popover('hide');
				}
			});
		});
		//en popover fa-icons

		//popover titulo modulo
		$(document).on('click', '.titulo-modulo', function() {

			$('.popover #etiqueta_titulomodulo').val($(this).attr('data-titulo'));
			$('.popover #etiqueta_idmodulo').val($(this).attr('data-ides'));
			var check_item_menu = $(this).attr('data-item-menu')
			
			if(check_item_menu=='1')
			{
				$('.popover #etiqueta_item_menu').val('1');
				$('.popover #etiqueta_item_menu').prop('checked', 'true');
			}
			else
			{
				$('.popover #etiqueta_item_menu').val('0');
				$('.popover #etiqueta_item_menu').removeAttr('checked');
			}
		});
		$(document).on('change', '#etiqueta_titulomodulo', function() {

			$('.popover #etiqueta_titulomodulo').val($(this).val());
		});
		$(document).on('click', '#etiqueta_item_menu', function() {
			if (this.checked)
			{
				$('.popover #etiqueta_item_menu').val('1');
			}
			else
			{
				$('.popover #etiqueta_item_menu').val('0');
			}

		});
		$(document).on('click', '.edit-titulomodulo-submit', function() {

			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.id = $('.popover #etiqueta_idmodulo').val();
			data.titulo = $('.popover #etiqueta_titulomodulo').val();
			data.idioma = $('body').attr('data-idioma');
			data.item_menu = $('.popover #etiqueta_item_menu').val();

			$.ajax({
				url: '{!! url(Request::segment(1).'/editartitulomodulo') !!}',
				data: data,
				type: 'POST',
				success: function(data) {
					location.reload()
				}
			});
		});
		//end popoover titulo modulo

		//popover edit linkvideo-play
		$(document).on('click', '.edit-linkvideo-play', function() {
			//$('.edit-linkvideo-play').popover('show');
			$('.popover #video_linkvideo-play').val($(this).attr('data-video'));
			$('.popover #id_linkvideo-play').val($(this).attr('data-pk'));

		});
		$(document).on('change', '#video_linkvideo-play', function() {

			$('.popover #video_linkvideo-play').val($(this).val());
		});
		$(document).on('click', '.edit-linkvideo-play-submit', function() {

			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.id_md_estructura = $('.popover #id_linkvideo-play').val();
			data.video = $('.popover #video_linkvideo-play').val();

			$.ajax({
				url: '{!! url(Request::segment(1).'/editarlinkvideoplay') !!}',
				data: data,
				type: 'POST',
				success: function(data) {

					$('#linkvideo-play'+ data.id).attr('data-video', data.video);
					$('.popover').popover('hide');
				}
			});
		});
		//end popover edit linkvideo-play

		//popover edit idvideo-play embed youtube
		$(document).on('click', '.edit-IDvideo-play', function() {
			//$('.edit-idvideo-play').popover('show');
			$('.popover #video_idvideo-play').val($(this).attr('data-video'));
			$('.popover #id_idvideo-play').val($(this).attr('data-pk'));

		});
		$(document).on('change', '#video_idvideo-play', function() {

			$('.popover #video_idvideo-play').val($(this).val());
		});
		$(document).on('click', '.edit-idvideo-play-submit', function() {

			$('#idvideo-play'+ $('.popover #id_idvideo-play').val()).parent().parent().find('.youtube-thumb').attr('src', '//i.ytimg.com/vi/' + $('.popover #video_idvideo-play').val() + '/hqdefault.jpg')
			$('#idvideo-play'+ $('.popover #id_idvideo-play').val()).attr('data-video', $('.popover #video_idvideo-play').val());
			$('.popover').popover('hide');

			/*var data = {};
			 data._token = '{!!csrf_token()!!}';
			 data.id_md_estructura = $('.popover #id_idvideo-play').val();
			 data.video = $('.popover #video_idvideo-play').val();

			 $.ajax({
			 url: '{!! url(Request::segment(1).'/editarlinkvideoplay') !!}',
			 data: data,
			 type: 'POST',
			 success: function(data) {
			 $('#idvideo-play'+ data.id).parent().parent().find('.youtube-thumb').attr('src', '//i.ytimg.com/vi/' + data.video + '/hqdefault.jpg')
			 $('#idvideo-play'+ data.id).attr('data-video', data.video);
			 $('.popover').popover('hide');
			 }
			 });*/
		});
		//end popover edit idvideo-play embed youtube

		//popover combinacion colores
		$(document).on('click', '.combinacion-colores', function() {

			$('.popover #id_pry_modulo_colores').val($(this).attr('data-id'));
		});

		$(document).on('click', '.edit-titulomodulo-submit', function() {

			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.id = $('.popover #etiqueta_idmodulo').val();
			data.titulo = $('.popover #etiqueta_titulomodulo').val();
			data.idioma = $('body').attr('data-idioma');


			$.ajax({
				url: '{!! url(Request::segment(1).'/editartitulomodulo') !!}',
				data: data,
				type: 'POST',
				success: function(data) {
					location.reload()
				}
			});
		});
		//end popoover combinacion colores
	</script>
	<script src="<?php echo URL::asset('js/cropbox/croppie.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo URL::asset('js/modulos-editar/content-editable.js'); ?>" type="text/javascript"></script>
	<script>

		$(document).ready(function() {

			$('.editsocial').attr('href', 'javascript:;');
			$('.editsocial').css('border', '1px dashed #0088cc');
			$('.edit-icono').attr('href', 'javascript:;');
			$('.edit-icono').css('border', '1px dashed #0088cc');
			$('.social').removeClass('nomostrar');
			$('.social').removeClass('hidden');
			$('.edit-img-sincrop').removeClass('nomostrar');
			$('.redes-sociales').removeClass('nomostrar');
			$('.edit-linkareferencia').attr('href', 'javascript:;');
			$('.edit-linkareferencia').removeClass('ancla');
			$('.edit-linkareferencia').css('border', '1px dashed #0088cc');
			$('.edit-linkvideo-play').attr('href', 'javascript:;');
			$('.playsimbol').css('border', '1px dashed #0088cc');
			$('.playsimbol2').css('border', '1px dashed #0088cc');

			$('.btn-file').removeClass('nomostrar');
			$('.btn-file-logo').removeClass('nomostrar');
			$('.editar-imagen').removeClass('nomostrar');
			$('.editar-galeria-item').removeClass('nomostrar');
			$('.eliminar-galeria-item').removeClass('nomostrar');
			$('.ver-galeria-item').addClass('nomostrar');
			$('.newGaleriaitem').removeClass('nomostrar');
			$('.newGaleriaTab').removeClass('nomostrar');
			$('.editGaleriaTabs').removeClass('nomostrar');

			$('.edit-google-map').removeClass('nomostrar');
			$('.editar-imagen-rayos').removeClass('nomostrar');
			$('.edit-img-logros').removeClass('nomostrar');
			$('#marca').removeAttr('href');

			$.fn.editable.defaults.mode = 'inline';
			/*$.fn.editable.defaults.params = function (params)
			 {
			 params._token = $("#_token").data("token");
			 return params;
			 };*/


			$('.editable').editable({
				success: function(response, newValue) {
					$(this).text(newValue);
				}
			});
			$('.editable-copyright').editable({
				success: function(response, newValue) {
					$(this).text(newValue);
				}
			});
			$('.editable-logo-texto').editable({
				success: function(response, newValue) {
					$(this).text(newValue);
				}
			});

			/*$('.editable').editable({
			 url:'{!! url(Request::segment(1).'/savecambios') !!}',
			 send:'always',
			 ajaxOptions: {
			 dataType: 'json'
			 }

			 });*/
			/*$('.editable-copyright').editable({
			 url:'{!! url(Request::segment(1).'/savecopyright') !!}',
			 send:'always',
			 ajaxOptions: {
			 dataType: 'json'
			 }

			 });*/
			/*$('.editable-logo-texto').editable({
			 url:'{!! url(Request::segment(1).'/savelogotexto') !!}',
			 send:'always',
			 ajaxOptions: {
			 dataType: 'json'
			 }

			 });*/

		});

		//edit imagen

		$('.editar-imagen').on('click', function(event) {
			var ancho = $(this).attr('data-width');
			var alto = $(this).attr('data-height');
			var id = $(this).attr('data-pk');
			var img= $(this).parent().find('img').attr('src');
			var id_proyecto = $(this).attr('data-pry');

			$('#id-modulo-estructura').val(id);
			$('#id-pry-editimg').val(id_proyecto);
			$('#croppie-box').attr('data-height',alto);
			$('#croppie-box').attr('data-width',ancho);

			$('#croppie-box').find('.cr-boundary').remove();
			$('#croppie-box').find('.cr-slider-wrap').remove();

			var $uploadCrop;
			var anchoBound = parseFloat(ancho);
			var altoBound = parseFloat(alto);
			$uploadCrop = $('#croppie-box').croppie({
				viewport: {
					width: ancho,
					height: alto,
					type: 'square'
				},
				boundary: {
					width: anchoBound,
					height: altoBound
				},
				exif: true,
				mouseWheelZoom: false,
				enforceBoundary: false
			});
			$uploadCrop.croppie('bind', {
				url: img
			});

		});
		$('.btn-save-cropimg').on('click', function (ev) {
			$('.label-cargando').removeClass('nomostrar');
			$('.nota-editar-img').addClass('nomostrar');
			recortarCroppie($('#croppie-box'), $('#id-modulo-estructura').val(), $('#id-pry-editimg').val(), '2', '#img-modulo', '#editarimagen');

		});
		$('#editarimagen').on('hidden.bs.modal', function () {
			$('.label-cargando').addClass('nomostrar');
			$('.nota-editar-img').removeClass('nomostrar');
		});

		function recortarCroppie(uploadCrop, idmodulo, idpry, tipo, idimagen, idmodal)
		{
			uploadCrop.croppie('result', {
				type: 'canvas',
				size: { width: $(uploadCrop).attr('data-width'),
					height: $(uploadCrop).attr('data-height')
				}
			}).then(function (base64Image) {
				if(tipo==1)
				{
					if($('#marca').hasClass('imagenlogo'))
					{
						$(idimagen + idmodulo).attr('src', base64Image);
						$(idimagen + idmodulo).attr('data-base64', '1');
						$('#marca').attr('data-href', $('#link-logo').val());
						$(idmodal).modal('hide');
					}
					else {
						guardarbase64imagen(base64Image,idmodulo, idpry, tipo, idimagen, idmodal);
					}
				}
				else{
					$(idimagen + idmodulo).attr('src', base64Image);
					$(idimagen + idmodulo).attr('data-base64', '1');
					$(idmodal).modal('hide');


				}
				//guardarbase64imagen(base64Image,idmodulo, idpry, tipo, idimagen, idmodal);

			});
		}

		$(document).on('change', '.btn-file :file', function() {
			var input = $(this),
					label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', label);

			var reader = new FileReader();
			var $uploadCrop;

			var ancho = $('#croppie-box').attr('data-width');
			var alto = $('#croppie-box').attr('data-height');
			$('#croppie-box').find('.cr-boundary').remove();
			$('#croppie-box').find('.cr-slider-wrap').remove();

			reader.onload = function(e) {

				$uploadCrop.croppie('bind', {
					url: e.target.result
				});
			};
			reader.readAsDataURL(this.files[0]);
			var anchoBound = parseFloat(ancho)+50;
			var altoBound = parseFloat(alto)+50;
			$uploadCrop = $('#croppie-box').croppie({
				viewport: {
					width: ancho,
					height: alto,
					type: 'square'
				},
				boundary: {
					width: anchoBound,
					height: altoBound
				},
				exif: true,
				mouseWheelZoom: false,
				enforceBoundary: false
			});

		});
		$('.btn-file :file').on('fileselect', function(event, label) {
			$('#imgnombre').val(label);
		});

		document.querySelector('#file').addEventListener('change', function(){

		});

		function guardarbase64imagen(base64, id, idpry, tipo, idimagen, modal)
		{
			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.id=id;
			data.base64img = base64;
			data.tipo = tipo;
			data.id_proyecto = idpry;

			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/savebase64imagen') !!}",
				data: data,
				success: function (data) {
					if(tipo==1)
					{
						if($('#marca').hasClass('imagenlogo'))
						{
							$(idimagen + id).attr('src', base64);
							$(modal).modal('hide');
						}
						else {
							location.reload();
						}
					}
					else{
						$(idimagen + id).attr('src', base64);
						$(modal).modal('hide');
						if(tipo==3)
						{
							resetDatosGaleria(idimagen + id, data);
						}
					}

				},
				error: function (xmlHttpRequest, textStatus, errorThrown){
					if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
						return;
				}
			}, "json");
		}

		function guardarimagen(input, id, tipo, idproyecto)
		{
			if(tipo ==2 || tipo ==1)//imagen galeria o fondo
			{
				input = document.getElementById(input);
			}

			var data = new FormData();
			data.append('file', input.files[0]);
			data.append('id', id);
			data.append('tipo', tipo);
			data.append('id_proyecto', idproyecto);
			data.append('_token', '{!!csrf_token()!!}');

			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/saveimagen') !!}",
				processData: false,
				contentType: false,
				data: data,
				success: function (data) {
					if(tipo==2)
					{
						var ruta = '{!!url('upload/')!!}';
						$('#galeriaitem' + id).attr('src', ruta + '/'+ idproyecto + '/galeria/' + data);
						guardarItemGaleriaSlider(id, idproyecto);
						resetDatosGaleria('#galeriaitem' + id, data);
					}
					if(tipo==4)
					{
						$('#btn-remove-imagen-modulo'+id).removeClass('nomostrar');
					}

				},
				error: function (xmlHttpRequest, textStatus, errorThrown){
					if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
						return;
				}
			}, "json");
		}

		//end edit imagen
	</script>
	<script>
		//fondo imagen
		$(document).on('change', '.fondo-file :file', function() {

			var input = $(this),
					label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', label);

			var reader = new FileReader();

			reader.onload = function(e) {
				var fondo = $(input).parent().parent().parent().parent().find('#imagenfondo');
				$(fondo).css('background-image','url('+ e.target.result+ ')');
				$(fondo).css('background-size','cover');
				$(fondo).css('background-position','center');
				$(fondo).css('background-repeat','no-repeat');

			};
			reader.readAsDataURL(this.files[0]);

		});
		$('.fondo-file :file').on('fileselect', function(event, label) {

		});

		document.querySelector('.imagen-fondo').addEventListener('change', function(){

		});


		$('.remover-fondo').on('click', function(event) {

			var fondo = $(this).parent().parent().parent().parent().find('#imagenfondo');
			$(fondo).css('background-image', '');

			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.id = $(this).attr('data-id');
			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/removefondo') !!}",
				data: data,
				success: function(){
					$(fondo).css('background-image', '');
				},
				error: function(){
					alert('Error en la conexión');
				}
			});

		});

	</script>
	<script>
		//logo
		$(document).on('click', '.editar-logo', function() {
			var ancho = $(this).attr('data-width');
			var alto = $(this).attr('data-height');
			var id = $(this).attr('data-pk');
			var img= $(this).parent().find('img').attr('src');
			var id_proyecto = $('body').attr('data-idpry');
			var link = $(this).attr('data-link');

			$('#id-modulo').val(id);
			$('#link-logo').val(link);
			$('#id-pry-editlogo').val(id_proyecto);
			$('#croppie-box-logo').attr('data-height',alto);
			$('#croppie-box-logo').attr('data-width',ancho);

			$('#croppie-box-logo').find('.cr-boundary').remove();
			$('#croppie-box-logo').find('.cr-slider-wrap').remove();

			var $uploadCrop;
			var anchoBound = parseFloat(ancho);
			var altoBound = parseFloat(alto);
			$uploadCrop = $('#croppie-box-logo').croppie({
				viewport: {
					width: ancho,
					height: alto,
					type: 'square'
				},
				boundary: {
					width: anchoBound,
					height: altoBound
				},
				exif: true,
				mouseWheelZoom: false,
				enforceBoundary: false
			});
			$uploadCrop.croppie('bind', {
				url: img
			});

		});
		$('.btn-save-croplogo').on('click', function (ev) {
			$('.label-cargando').removeClass('nomostrar');
			$('.nota-editar-img').addClass('nomostrar');
			var logo = document.getElementById('openfile-logo');
			if(logo)
			{
				if (logo.files.length > 0) {
					recortarCroppie($('#croppie-box-logo'), $('#id-modulo').val(), $('#id-pry-editlogo').val() , '1', '#logo', '#editarlogo');
				}
				$('.marca').attr('data-href', $('#link-logo').val());
				$('.editar-logo').attr('data-link', $('#link-logo').val());
				$('#editarlogo').modal('hide');
			}

		});
		$('#editarlogo').on('hidden.bs.modal', function () {
			$('.label-cargando').addClass('nomostrar');
			$('.nota-editar-img').removeClass('nomostrar');
		});
		$(document).on('change', '.btn-openfile-logo :file', function() {
			var input = $(this),
					label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', label);

			var reader = new FileReader();
			var $uploadCrop;

			var ancho = $('#croppie-box-logo').attr('data-width');
			var alto = $('#croppie-box-logo').attr('data-height');
			$('#croppie-box-logo').find('.cr-boundary').remove();
			$('#croppie-box-logo').find('.cr-slider-wrap').remove();

			reader.onload = function(e) {

				$uploadCrop.croppie('bind', {
					url: e.target.result
				});
			};
			reader.readAsDataURL(this.files[0]);
			var anchoBound = parseFloat(ancho)+50;
			var altoBound = parseFloat(alto)+50;
			$uploadCrop = $('#croppie-box-logo').croppie({
				viewport: {
					width: ancho,
					height: alto,
					type: 'square'
				},
				boundary: {
					width: anchoBound,
					height: altoBound
				},
				exif: true,
				mouseWheelZoom: false,
				enforceBoundary: false
			});

		});
		$('.btn-openfile-logo :file').on('fileselect', function(event, label) {
			$('#imgnombre').val(label);
		});

		document.querySelector('#openfile-logo').addEventListener('change', function(){

		});


		$(document).on('change', '.btn-file-logo :file', function() {
			var input = $(this),
					label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', label);

			var reader = new FileReader();

			reader.onload = function(e) {
				var ancho = $(input).parent().parent().find('img').css('width');
				var alto = $(input).parent().parent().find('img').css('height');
				$(input).parent().parent().find('img')
						.attr('src', e.target.result)
						.width(ancho)
						.height('auto');
				$('.logo'+$(input).parent().parent().find('img').attr('data-pk')).attr('src', e.target.result);
			};
			reader.readAsDataURL(this.files[0]);
			/*guardarimagen(this,$(input).parent().parent().find('img').attr('data-pk'), '3', '0');

			 if($(input).parent().parent().find('img').hasClass('logo-cabecera'))
			 {
			 location.reload();
			 }*/


		});
		$('.btn-file-logo :file').on('fileselect', function(event, label) {
			$('#imgnombre').val(label);
		});

		document.querySelector('.file-logo').addEventListener('change', function(){

		});
	</script>
	<script src="<?php echo URL::asset('js/modulos-editar/galeria-edicion.js'); ?>" type="text/javascript"></script>

	<link href="<?php echo URL::asset('css/wysihtml5/stylesheet.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo URL::asset('css/wysihtml5/bootstrap3-wysihtml5.min.css'); ?>" rel="stylesheet" type="text/css" />
	<script src="<?php echo URL::asset('js/bootstrap3-wysihtml5/handlebars.runtime.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo URL::asset('js/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.js'); ?>" type="text/javascript"></script>

	<script src="<?php echo URL::asset('js/modulos-editar/sliders-edicion.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo URL::asset('js/modulos-editar/modulos-manipulacion.js'); ?>" type="text/javascript"></script>
	<script>
		//custom css
		$(document).on('click', '.custom-css', function() {

			var id_pry = $(this).attr('data-pry');
			$('#id_pry_custom_css').val(id_pry);

			var data = {};
			data._token = '{!!csrf_token()!!}';
			data.id_pry = id_pry;

			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/obtenercss') !!}",
				data: data,
				success: function (data) {
					$('#custom_css_text').val(data.custom_css);
				},
				error: function () {
					alert('Error en la conexión');
				}
			});

		});
		//end custom css
	</script>

	<script>
		//menu urls
		$('.nueva-url-menu').on('click', function (ev) {

			var data = '<div class="form-inline">'
					+'<input class="form-control input-url" value="" name="titulo_menu_url[]" placeholder="Título">'
					+'<input class="form-control input-url" value="" name="url_menu_url[]" placeholder="Url">'
					+'</div>';

			$('#items_menu_url').append(data);
		});
		//end menu urls
	</script>
	<script>
		//edit google maps
		$('.edit-google-map').on('click', function (ev) {
			$('#id_google_map').val($(this).attr('data-id'));
			$('#direccion-maps').val($(this).attr('data-direccion'));
			$('#longitud-maps').val($(this).attr('data-longitud'));
			$('#latitud-maps').val($(this).attr('data-latitud'));
			initialize($(this).attr('data-latitud'),$(this).attr('data-longitud'));

		});
		//end edit google maps
	</script>

	<script type="text/javascript">

		var geocoder;
		var marker;
		var latLng;
		var latLng2;
		var map;

		function initialize(latitud, longitud) {
			geocoder = new google.maps.Geocoder();
			latLng = new google.maps.LatLng(latitud, longitud);
			map = new google.maps.Map(document.getElementById('mapCanvas'), {
				zoom:15,
				center: latLng,
			});


			marker = new google.maps.Marker({
				position: latLng,
				title: 'Arrastra el marcador si quieres moverlo',
				map: map,
				draggable: true
			});

			google.maps.event.addListener(map, "idle", function(){
				google.maps.event.trigger(map, 'resize');
				google.maps.event.trigger(map, 'resize'); map.setCenter(marker.getPosition());
				map.setZoom( map.getZoom() );
			});

			google.maps.event.addListener(map, 'click', function(event) {
				updateMarker(event.latLng);
			});

			geocodePosition(latLng);

			// Permito los eventos drag/drop sobre el marcador
			google.maps.event.addListener(marker, 'dragstart', function() {
				updateMarkerAddress('Arrastrando...');
			});

			google.maps.event.addListener(marker, 'drag', function() {
				updateMarkerStatus('Arrastrando...');
				updateMarkerPosition(marker.getPosition());
			});

			google.maps.event.addListener(marker, 'dragend', function() {
				updateMarkerStatus('Arrastre finalizado');
				geocodePosition(marker.getPosition());
			});

		}

		//google.maps.event.addDomListener(window, 'load', initialize);

		// ESTA FUNCION OBTIENE LA DIRECCION A PARTIR DE LAS COORDENADAS POS
		function geocodePosition(pos) {
			geocoder.geocode({
				latLng: pos
			}, function(responses) {
				if (responses && responses.length > 0) {
					updateMarkerAddress(responses[0].formatted_address);
				} else {
					updateMarkerAddress('No puedo encontrar esta direccion.');
				}
			});
		}

		// OBTIENE LA DIRECCION A PARTIR DEL LAT y LON DEL FORMULARIO
		function codeLatLon() {
			str= document.form_mapa.longitud.value+" , "+document.form_mapa.latitud.value;
			latLng2 = new google.maps.LatLng(document.form_mapa.latitud.value ,document.form_mapa.longitud.value);
			marker.setPosition(latLng2);
			map.setCenter(latLng2);
			geocodePosition (latLng2);
			// document.form_mapa.direccion.value = str+" OK";
		}

		// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
		function codeAddress() {
			var address = $('#direccion-maps').val();
			geocoder.geocode( { 'address': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					updateMarkerPosition(results[0].geometry.location);
					marker.setPosition(results[0].geometry.location);
					map.setCenter(results[0].geometry.location);
					geocodePosition(marker.getPosition())
				} else {
					alert('ERROR : ' + status);
				}
			});
		}

		// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
		function codeAddress2 (address) {

			geocoder.geocode( { 'address': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					updateMarkerPosition(results[0].geometry.location);
					marker.setPosition(results[0].geometry.location);
					map.setCenter(results[0].geometry.location);
					$('#direccion-maps').val(address);
				} else {
					alert('ERROR : ' + status);
				}
			});
		}

		function updateMarkerStatus(str) {
			$('#direccion-maps').val(str);
		}

		// RECUPERO LOS DATOS LON LAT Y DIRECCION Y LOS PONGO EN EL FORMULARIO
		function updateMarkerPosition (latLng) {
			$('#longitud-maps').val(latLng.lng());
			$('#latitud-maps').val(latLng.lat());
		}

		function updateMarkerAddress(str) {
			$('#direccion-maps').val(str);
		}

		function updateMarker(location) {
			marker.setPosition(location);
			updateMarkerPosition(location);
			geocodePosition(location);
		}

	</script>

	<script>
		function fontSize(tam, tam_actual, clase) {
			var size = 0;
			$(clase).each(function(){
				if($(this).css('font-size')) {
					size = parseInt($(this).css('font-size').replace("px",""));
					size = size + parseInt(tam) - parseInt(tam_actual);
					$(this).css('font-size',size+"px");
				}
				else
				{
					if($(this).parent().css('font-size'))
					{
						size = parseInt($(this).parent().css('font-size').replace("px",""));
						size = size + parseInt(tam) - parseInt(tam_actual);
						$(this).css('font-size',size+"px");
					}
				}

			});
		}
	</script>
	<script>
		$(document).on('click', '.btn-remove-imagen-modulo', function() {

			$(this).attr('data-remove', '1');
			$(this).addClass('nomostrar');
			$(this).parent().parent().find('img').attr('src', '');
			/*var id_modulo_estructura = $(this).attr('data-id');
			 var id_proyecto = $(this).attr('data-pry');

			 var data = {};
			 data._token = '{!!csrf_token()!!}';
			 data.id_modulo_estructura = id_modulo_estructura;
			 data.id_proyecto = id_proyecto;

			 $.ajax({
			 type: "POST",
			 url: "{!! url(Request::segment(1).'/eliminarimgcontenido') !!}",
			 data: data,
			 success: function (data) {
			 location.reload();
			 },
			 error: function () {
			 alert('Error en la conexión');
			 }
			 });*/

		});

		$(document).on('change', '.btn-file-imagen :file', function() {
			var input = $(this),
					label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', label);

			var reader = new FileReader();

			reader.onload = function(e) {

				$(input).parent().parent().parent().find('img')
						.attr('src', e.target.result)
						.width('100%')
						.height('auto');
				$(input).parent().parent().parent().find('img').removeClass('nomostrar');
				$('#btn-remove-imagen-modulo'+$(input).attr('data-id')).removeClass('nomostrar');
				$('#btn-remove-imagen-modulo'+$(input).attr('data-id')).attr('data-remove', '0');
			};
			reader.readAsDataURL(this.files[0]);
			//guardarimagen(this,$(input).parent().parent().parent().find('img').attr('data-pk'), '4', $(input).parent().parent().parent().find('img').attr('data-pry'));



		});

		$('.btn-file-imagen :file').on('fileselect', function(event, label) {
			$('#imgnombre').val(label);
		});

		document.querySelector('.file-imagen').addEventListener('change', function(){

		});
	</script>
	<script>
		//imagenes rayos ordenador-movil

		$('.editar-imagen-rayos').on('click', function(event) {

			var id = $(this).attr('data-pk');
			var img= $(this).parent().find('.img-rayos').attr('src');
			var img_movil= $(this).parent().find('.img-rayos-movil').attr('src');
			var id_proyecto = $(this).attr('data-pry');

			$('#id_md_img_rayo').val(id);
			$('#id_rayo_pry').val(id_proyecto);
			$('#img_rayo_ordenador').attr('src', img);
			$('#img_rayo_movil').attr('src', img_movil);

		});

		$(document).on('change', '.btn-file-rayo :file', function() {
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
		$('.btn-file-rayo :file').on('fileselect', function(event, label) {

		});
	</script>
	<script>
		$(document).on('change', '.btn-file-default :file', function() {
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
	</script>

	<script>
		//edit file to download
		$(document).on('change', '.btn-file-upload :file', function() {
			var input = $(this),
					label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', label);

			var reader = new FileReader();
			reader.readAsDataURL(this.files[0]);
		});
		$('.btn-file-upload :file').on('fileselect', function(event, label) {
			$('#file_name').val(label);
		});

		$(document).on('click', '.edit-upload-file', function() {

			$('#id_upload_file').val($(this).attr('data-pk'));

		});
		$(document).on('click', '.edit-upload-file-submit', function() {

			var data = new FormData();

			var file = document.getElementById('input_fileupload');

			if(file)
			{
				if (file.files.length > 0) {
					data.append('file', file.files[0]);
				}
			}

			data.append('id_pry_estructura', $('#id_upload_file').val());
			data.append('id_proyecto', $('body').attr('data-idpry'));
			data.append('_token', '{!!csrf_token()!!}');
			console.log($('#id_upload_file').val());

			$.ajax({
				type: "POST",
				url: "{!! url(Request::segment(1).'/saveuploadfile') !!}",
				processData: false,
				contentType: false,
				data: data,
				success: function (data) {
					$('.popover #url_link_referencia').prop('readonly', true);
					$('.popover #url_link_referencia').val(data);
					$('#editFile').modal('hide');
				},
				error: function (xmlHttpRequest, textStatus, errorThrown){
					if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
						return;
				}
			}, "json");
		});

		//end edit file to download
	</script>
@endsection