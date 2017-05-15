<link href="<?php echo url::asset('/css/modulo_c62_tabs.css'); ?>" rel="stylesheet" type="text/css" />

<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
	<style>
		#container{{$pry_modulo->idesPR}} {
			background-color: {{$combinacion->fondo}};
		}
		#container{{$pry_modulo->idesPR}} .titulo-custom-color {
			color: {{$combinacion->titulo}};
		}
		#container{{$pry_modulo->idesPR}} .subtitulo-custom-color {
			color: {{$combinacion->subtitulo}};
		}
		#container{{$pry_modulo->idesPR}} .nav-pills>li>a{
			color: {{$combinacion->color_menucat}};
			background-color: {{$combinacion->color_menucatfondo}};
		}
	</style>
@endif
<style>
	#container-modulo_c62_tabs .titulo{
		font-size: <?php echo 60+ $proyecto->font_size;?>px;
	}
	#container-modulo_c62_tabs .subtitulo, #container-modulo_c62_tabs .nav-pills>li>a{
		font-size: <?php echo 14+ $proyecto->font_size;?>px;
	}
	@media (max-width: 767px) and (min-width: 501px){
		#container-modulo_c62_tabs .titulo{
			font-size: <?php echo 45+ $proyecto->font_size; ?>px;
		}
		#container-modulo_c62_tabs .subtitulo{
			font-size: <?php echo 10+ $proyecto->font_size; ?>px;
		}
	}
	@media (max-width: 500px){
		#container-modulo_c62_tabs .titulo{
			font-size: <?php echo 30+ $proyecto->font_size; ?>px;
		}
		#container-modulo_c62_tabs .subtitulo{
			font-size: <?php echo 10+ $proyecto->font_size;?>px;
		}
	}

</style>
<style>
	.sortable-placeholder {
		margin-left: 0 !important;
		border: 1px solid #ccc;
		background-color: yellow;
		-webkit-box-shadow: 0px 0px 10px #888;
		-moz-box-shadow: 0px 0px 10px #888;
		box-shadow: 0px 0px 10px #888;
	}
</style>
<div id="container-modulo_c62_tabs" class="wrapper outer">
	<div class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
		<a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
		<?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma); ?>
		<div class="row fila">
			<div class="col-sm-12 contenido">
				 @foreach($modulosDtll as $modulo) @if($cont == 0 )
				<div class="subtitulo subtitulo-custom-color {{$proyecto->tipografia_titulos}}">
					<h6 class="editable" data-type="text" data-pk="{{$modulo->id}}" data-name="subtitulo">{!!$modulo->subtitulo!!}</h6>
					<br/><br/>
				</div>
				<div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
					<h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
				</div>
				 @endif <?php $cont++; ?>
				 @endforeach
			</div>
		</div>
		<input class="nomostrar" id="galeria_productos_id_proyecto" value="{{$proyecto->id}}">
		<?php
		$cont = 0;
		$tabs = App\Console\Commands\Funciones::getGaleriatabs($pry_modulo->idesPR, $idioma); ?>
		<div class="bloquecontabs">
			<div class="text-center">
				<ul class="pestanas nav nav-pills center-pills">
					@foreach($tabs as $tab)
						@if($cont==0)
						<li class="active"><a class="tab-click" data-toggle="pill" href="#tabcat{{$tab->id}}" data-id="{{$tab->id}}">{{$tab->tab}}</a></li>
						@else
						<li><a class="tab-click" data-toggle="pill" href="#tabcat{{$tab->id}}" data-id="{{$tab->id}}">{{$tab->tab}}</a></li>
						@endif
						<?php $cont = $cont+1; ?>
					@endforeach
					<li class="newGaleriaTab nomostrar"><a class="nuevo-galeriaTab tab-action" data-toggle="modal" data-target="#addGaleriaTab" href="javascript:;" data-id="{{$pry_modulo->idesPR}}"><span class="fa fa-plus"> NUEVO</span></a></li>
					<li class="editGaleriaTabs nomostrar"><a class="editar-galeriaTab tab-action" data-toggle="modal" data-target="#editGaleriaTab" href="javascript:;" data-id="{{$pry_modulo->idesPR}}"><span class="fa fa-pencil"> EDITAR</span></a></li>
				</ul>
			</div>
			<div class="tab-content">
			<?php $cont=0; ?>
			@foreach($tabs as $tab)
				@if($cont==0)
				<div id="tabcat{{$tab->id}}" class="tab-pane fade in active">
					<input type="text" class="nomostrar" id="tab_activo" value="{{$tab->id}}">
				@else
				<div id="tabcat{{$tab->id}}" class="tab-pane fade">
				@endif
					<?php $galeriaItems = App\Console\Commands\Funciones::getGaleriaItems($tab->id, $idioma); ?>

					<div class="row items-galeria{{$tab->id}}" style="margin-bottom: 20px" id="items-galeria{{$tab->id}}">
						<div class="sortable">
						@foreach($galeriaItems as $item)
							<div class="col-md-3 col-sm-4 col-xs-6 thumb" id="div_itemgaleria{{$item->id}}" data-id="{{$item->id}}" data-tab="{{$item->id_pry_galeria_tab}}">
								<a href="javascript:;" class="tabitemwrapper" >
									<span class="tabitemtext">
										<h3>{{$item->item}}</h3>
										<button type="button" id="cd-add-to-cart{{$item->id}}" class="btn btn-info botontabpopup ver-galeria-item cd-add-to-cart"
											data-toggle="modal"
											data-target="#detalleGaleriaItem"
											data-id="{{$item->id}}"
											data-imagen="{{$item->imagen}}"
											data-item="{{$item->item}}"
											data-pry="{{$pry_modulo->id_proyecto}}"
											data-ides="{!!$item->id!!}"
											data-url="{!!url('')!!}"
											data-token="{!!csrf_token()!!}"
											>VER</button>
										@if($editar==1)
										<span class="portlet-header fa fa-arrows mano-deslizar"></span>
										<button type="button" class="btn btn-info editar-galeria-item nomostrar" data-toggle="modal" data-target="#editarGaleriaItem" data-id="{{$item->id}}" data-imagen="{{$item->imagen}}" data-item="{{$item->item}}" data-pry="{{$pry_modulo->id_proyecto}}">Editar</button>
										<button type="button" class="btn btn-danger eliminar-galeria-item nomostrar"  data-id="{{$item->id}}" data-pry="{{$pry_modulo->id_proyecto}}">Eliminar</button>
										@endif
									</span>
									@if(@getimagesize(public_path().'/upload/'.$pry_modulo->id_proyecto.'/galeria/' . $item->imagen))
										<img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/galeria/'.$item->imagen)!!}" alt="" class="img-responsive" id="galeriaitem{{$item->id}}">
									@else
										<img src="{!!url('img/image_not_available.png')!!}" alt="" class="img-responsive" id="galeriaitem{{$item->id}}">
									@endif
								</a>
							</div>
						@endforeach
							@if($editar==1)
							<div class="col-md-3 col-sm-4 col-xs-6 thumb ui-sortable-handle newGaleriaitem nomostrar" data-id="0" data-tab="0">
								<a href="javascript:;" class="tabitemwrapper" >
									<span class="tabitemtext">
										<h3>Nuevo item</h3>
										<span class="portlet-header fa fa-arrows mano-deslizar nomostrar"></span>
										<button type="button" class="btn btn-info editar-galeria-item nomostrar" data-toggle="modal" data-target="#editarGaleriaItem" data-id="0" data-imagen="addGaleriaitem.jpg" data-item="Nuevo item" data-tab="{{$tab->id}}" data-pry="{{$pry_modulo->id_proyecto}}">Agregar item</button>
										<button type="button" class="btn btn-danger eliminar-galeria-item nomostrar2"  data-id="" data-pry="{{$pry_modulo->id_proyecto}}">Eliminar</button>
									</span>
									<img src="{!!url('img/addGaleriaitem.jpg')!!}" alt="" class="img-responsive" id="galeriaitem0-tab{{$tab->id}}">
								</a>
							</div>
							@endif
						</div>

					</div>
				</div>
				<?php $cont = $cont+1; ?>
			@endforeach
					@if($editar==1)
					<div class="col-md-3 col-sm-4 col-xs-6 thumb ui-sortable-handle clonarGaleriaitem nomostrar">
						<a href="javascript:;" class="tabitemwrapper" >
							<span class="tabitemtext">
								<h3>Nuevo item</h3>
								<span class="portlet-header fa fa-arrows mano-deslizar nomostrar"></span>
								<button type="button" class="btn btn-info editar-galeria-item nomostrar" data-toggle="modal" data-target="#editarGaleriaItem" data-id="0" data-imagen="addGaleriaitem.jpg" data-item="Nuevo item" data-tab="" data-pry="{{$pry_modulo->id_proyecto}}">Agregar item</button>
								<button type="button" class="btn btn-danger eliminar-galeria-item nomostrar2"  data-id="" data-pry="{{$pry_modulo->id_proyecto}}">Eliminar</button>
							</span>
							<img src="{!!url('img/addGaleriaitem.jpg')!!}" alt="" class="img-responsive" id="galeriaitem0">
						</a>
					</div>
					@endif
				</div>
			</div>
		</div>
		<div id="detalleGaleriaItem" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog tabs-modal-dialog">
				<!-- Modal content-->
				<div class="modal-content tabs-modal-content">
					<div class="modal-body tabs-modal-body row">
						<div class="col-md-6 sinpadding colfototabpopup" id="slider_galeria_c62">

						</div>
						<div class="col-md-6 sinpadding" id="detalle-galeria-item">
							<button type="button" class="close" data-dismiss="modal" style="font-size: 20px">&times;</button>
							<h2 class="itemname" id="ver-itemgaleria-name"></h2>
							<div class="row atributospops" id="atributospops">

							</div>
							<div class="form-group col-md-12" align="center">
								@if($proyecto->e_commerce==0)
								<button class="info-itemgaleria boton-formgaleria"  type="button">{!!trans('validation.information')!!}</button>
								@else
								<button class="boton-formgaleria comprarPrd"  type="button">{!!trans('validation.buy')!!}</button>
								@endif
							</div>
						</div>
						<div class="col-md-6 nomostrar sinpadding" id="form-galeria-item">

							<button type="button" class="close" data-dismiss="modal" style="font-size: 20px">&times;</button>
							<div class="moreinfo-galeria col-md-12">
								<div class="titulo-formgaleria">
									<a href="javascript:;" class="back-detalle-galeria-item">
										<span class="fa fa-caret-square-o-left"></span>
									</a>
									<h1>{!!trans('validation.more_info')!!}</h1>
								</div>
								<br/>
								<input type="text" class="nomostrar" id="email_formgaleria_proyecto" value="{{$proyecto->email_formulario}}" />
								<div class="col-md-12 alerta-errores-galeria nomostrar">
									<div class="errores-formgaleria alert alert-danger" style="background: none!important;">
									</div>
								</div>
								<div class="col-md-12 alert-dismissable nomostrar spinner-formgaleria" style="padding-right: 15px;">
									<div class="alert alert-info" style="background: none!important;">
										<label style="text-align: center;"><i class="fa fa-spin fa-spinner"></i> {!!trans('validation.sending_message')!!}...</label>
									</div>
								</div>
								<div class="col-md-12 alert-dismissable nomostrar mensaje-enviado-formgaleria" style="padding-right: 15px;">
									<div class="alert alert-success" style="background: none!important;">
										<label>Su mensaje fue enviado con éxito, le responderemos a la brevedad.</label>
									</div>
								</div>

								<div class="form-group col-md-12">
									<input type="text" class="nomostrar" id="nameitem-formgaleria"/>
									<input type="text" id="name-formgaleria" class="input-formgaleria" placeholder="{!!trans('validation.attributes.name')!!}*" required/>
								</div>
								<div class="form-group col-md-12" >
									<input type="text" id="email-formgaleria" class="input-formgaleria" placeholder="{!!trans('validation.attributes.email')!!}*" required/>
								</div>
								<div class="form-group col-md-12">
									<input type="text" id="phone-formgaleria" class="input-formgaleria" placeholder="{!!trans('validation.attributes.phone')!!}"/>
								</div>
								<div class="form-group col-md-12">
									<textarea id="message-formgaleria" class="textarea-formgaleria" placeholder="{!!trans('validation.attributes.message')!!}*" required></textarea>
								</div>
								<div class="form-group col-md-12" align="center">
									<button id="botonsubmit" class="enviar-formgaleria boton-formgaleria" type="submit">{!!trans('validation.attributes.send')!!}</button>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end modal detalle-->
</div>
@if($editar==1)
	<div id="editarGaleriaItem" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog tabs-editar-modal modal-lg modal-lg-edit-galeria" >
			<!-- Modal content-->
			<div class="modal-content tabs-modal-content">
				<div class="modal-body tabs-modal-body row">
					<div class="col-md-6 sinpadding"  style="position: relative">
						<div style="position: relative; padding-bottom: 15px">
							<div class="croppie-box-galeriaitem" id="croppie-box-galeriaitem" style="padding: 0">
							</div>
							<input class="nomostrar id-galeriaitem" value="" id="id-galeriaitem">
							<input class="nomostrar id-galeriatab" value="" id="id-galeriatab">
							<input class="nomostrar id-galeriaproyecto" value="" id="id-galeriaproyecto">
							<input class="nomostrar upload_new_photo" value="0" id="upload_new_photo">

							<span class="btn btn-primary btn-openfile-galeriaitem" style="z-index: 1; right: 20px;">
								<span class="fa fa-folder-open-o"></span> <input type="file" id="openfile-galeriaitem" class="file" name="file">
							</span>
						</div>
						<div id="galeria_item_sliders">

						</div>
						<div class="col-md-12">
							<button type="button" class="btn addGaleriaItemSlider"><span class="fa fa-plus"> Nueva imagen</span></button>
						</div>
					</div>
					<div class="col-md-6 sinpadding">
						<button type="button" class="close" data-dismiss="modal" style="font-size: 20px">&times;</button>
						<div align="center">
							<input class="itemname" id="edit-itemgaleria-name" name="edit-itemgaleria-name"  style="border: 0; border-bottom: 1px dashed blue;width: 100%" placeholder="Product Name"/>
						</div>
						<div class="row atributospops" id="edit-atributospops">

						</div>
						<button type="button" class="btn btn-info addGaleriaItemdetalle"><span class="fa fa-plus"> Agregar atributo</span></button>
					</div>
					<div class="col-md-12" align="center">
						<span class="btn blue editable-submit btn-save-galeriaitem" style="right: 20px">
							<i class="fa fa-check"></i>
						</span>
						<br/>
						<div class="alert alert-success alert-dismissable nomostrar label-cargando col-md-6 col-md-offset-3" style="background: none">
							<label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> Guardando item...</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

<script>
	$('.ver-galeria-item').on('click', function (ev) {
		window.history.replaceState(null, null, "/?prod="+$(this).attr('data-id')+"&data-imagen="+$(this).attr('data-imagen')+"&data-item="+$(this).attr('data-item')+"&data-pry="+$(this).attr('data-pry')+"&data-nk="+$(this).attr('id')+"");
		$('#atributospops').empty();
		$('#detalle-galeria-item').removeClass('nomostrar');
		$('#form-galeria-item').addClass('nomostrar');
		$('.alerta-errores-galeria').addClass('nomostrar');
		$('.mensaje-enviado-formgaleria').addClass('nomostrar');
		$('#name-formgaleria').removeClass('input-rojo');
		$('#email-formgaleria').removeClass('input-rojo');
		$('#message-formgaleria').removeClass('input-rojo');
		$('.colfototabpopup').removeClass('padding-img-modal');

		var imagen = $(this).attr('data-imagen');
		var id_proyecto = $(this).attr('data-pry');
		var ruta = '{!!url('upload/')!!}' + '/' + id_proyecto + '/galeria';

		if(imagen=='')
		{
			$('#ver-itemgaleria-imagen').attr('src', 'img/image_not_available.png');
		}
		else
		{
			$('#ver-itemgaleria-imagen').attr('src', ruta+'/'+imagen);
		}

		$('#ver-itemgaleria-name').text($(this).attr('data-item'));
		$('#nameitem-formgaleria').val($(this).attr('data-item'));

		var id = $(this).attr('data-id');

		var datos = {};
		datos._token = '{!!csrf_token()!!}';
		datos.id_item = id;
		datos.id_proyecto = $('body').attr('data-idpry');

		$.ajax({
			type: "POST",
			url: "{!! url('/slidergaleria') !!}",
			data: datos,
			success: function(data){
				$('#slider_galeria_c62').empty();
				$('#slider_galeria_c62').append(data);
			},
			error: function(data){
				console.log(data);
			}
		});

		var data = {};
		data._token = '{!!csrf_token()!!}';
		data.id = id;
		data.editable = '0';
		data.idioma = $('body').attr('data-idioma');

		$.ajax({
			type: "POST",
			url: "{!! url('/detallegaleriaitem') !!}",
			data: data,
			success: function(data){
				$('#atributospops').append(data);
			},
			error: function(data){
				console.log(data);
			}
		});

	});

	$('.info-itemgaleria').on('click', function (ev) {

		$('#detalle-galeria-item').addClass('nomostrar');
		$('#form-galeria-item').removeClass('nomostrar');
		$('.alerta-errores-galeria').addClass('nomostrar');
		$('.mensaje-enviado-formgaleria').addClass('nomostrar');
		$('.input-formgaleria').removeClass('input-rojo');
		$('.textarea-formgaleria').removeClass('input-rojo');

	});
	$('.back-detalle-galeria-item').on('click', function (ev) {

		$('#detalle-galeria-item').removeClass('nomostrar');
		$('#form-galeria-item').addClass('nomostrar');
		$('.colfototabpopup').removeClass('padding-img-modal');
	});

	$('.enviar-formgaleria').on('click', function(event) {

		$('.errores-formgaleria').empty();
		$('.alerta-errores-galeria').addClass('nomostrar');
		$('.spinner-formgaleria').removeClass('nomostrar');
		$('.mensaje-enviado-formgaleria').addClass('nomostrar');
		$('.colfototabpopup').addClass('padding-img-modal');

		$('#name-formgaleria').removeClass('input-rojo');
		$('#email-formgaleria').removeClass('input-rojo');
		$('#message-formgaleria').removeClass('input-rojo');

		var data = {};

		data._token = '{!!csrf_token()!!}';
		data.nombreitem = $('#nameitem-formgaleria').val();
		data.nombre = $('#name-formgaleria').val();
		data.email = $('#email-formgaleria').val();
		data.email_proyecto = $('#email_formgaleria_proyecto').val();
		data.telefono = $('#phone-formgaleria').val();
		data.mensaje = $('#message-formgaleria').val();

		$.ajax({
			type: "POST",
			data: data,
			url: '{!! url('/moreinfogaleria') !!}',

			success: function(data) {
				if(data.success) {
					$('#name-formgaleria').val('');
					$('#email-formgaleria').val('');
					$('#phone-formgaleria').val('');

					$('#message-formgaleria').val('');
					$('.spinner-formgaleria').addClass('nomostrar');
					$('.mensaje-enviado-formgaleria').removeClass('nomostrar');
				}
				else
				{
					$('.alerta-errores-galeria').removeClass('nomostrar');
					var errorString = '<ul>';
					$.each( data.errors, function( key, value) {
						errorString += '<li>' + value + '</li>';
						if(key=='nombre')
						{
							$('#name-formgaleria').addClass('input-rojo');
						}
						if(key=='correo')
						{
							$('#email-formgaleria').addClass('input-rojo');
						}
						if(key=='mensaje')
						{
							$('#message-formgaleria').addClass('input-rojo');
						}
					});
					errorString += '</ul></div>';
					$('.errores-formgaleria').append(errorString);
					$('.spinner-formgaleria').addClass('nomostrar');
					$('.mensaje-enviado-formgaleria').addClass('nomostrar');
				}
			},
			error: function (data) {
				$('.spinner-formgaleria').addClass('nomostrar');
				$('.mensaje-enviado-formgaleria').addClass('nomostrar');
				$('.alerta-errores-galeria').removeClass('nomostrar');
				$('.errores-formgaleria').append('{!!trans('validation.error_sending')!!}');

			}
		});

	});
</script>
@if($editar==1)
<script>
	$( ".sortable" ).sortable({
		handle: ".portlet-header",
		update: function () { save_new_order() }
	});
	function save_new_order() {
		var items_galeria = [];
		var id_tab = $('#tab_activo').val();

		$('#items-galeria'+id_tab +' .sortable').children().each(function (i) {
			items_galeria.push($(this).attr('data-id'));
		});

		var data = {};

		data._token = '{!!csrf_token()!!}';
		data.ids_items_galeria = items_galeria;

		$.ajax({
			type: "POST",
			data: data,
			url: '{!! url(Request::segment(1).'/saveorderitemgaleria') !!}',

			success: function(data) {
				console.log(data)
			},
			error: function (data) {
				console.log(data)
			}
		});

	}
	$( ".sortable" ).disableSelection();

	$(document).on('click', '.tab-click', function() {
		$('#tab_activo').val($(this).attr('data-id'));
	});
</script>
@endif
@if($proyecto->e_commerce==1 and $editar==0)
<div class="cd-cart-container empty">
	<a href="#0" class="cd-cart-trigger">
		Cart
		<ul class="count"> <!-- cart items count -->
			<li>0</li>
			<li>0</li>
		</ul> <!-- .count -->
	</a>

	<div class="cd-cart">
		<div class="wrapper">
			<form class="form-horizontal" method="GET" action="{!!url('ecomerce/carrito')!!}">
			<header>
				<h2>Carrito</h2>
				<span class="undo">Producto eliminado. <a href="#0">retroceder</a></span>
			</header>
			
			<div class="body">
				<input type="hidden" name="idPryct" value="{!!$proyecto->id!!}">
				<ul>
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
				
			</div>

			<footer>
				<button type="submit" class="checkout btn-pagos btn"><em>Comprar - $<span>0</span></em></button>
			</footer>
			</form>
		</div>
	</div> <!-- .cd-cart -->
</div> <!-- cd-cart-container -->

@endif

@if(isset($_GET['prod']))
    <script>
    	$('#atributospops').empty();
		$('#detalle-galeria-item').removeClass('nomostrar');
		$('#form-galeria-item').addClass('nomostrar');
		$('.alerta-errores-galeria').addClass('nomostrar');
		$('.mensaje-enviado-formgaleria').addClass('nomostrar');
		$('#name-formgaleria').removeClass('input-rojo');
		$('#email-formgaleria').removeClass('input-rojo');
		$('#message-formgaleria').removeClass('input-rojo');
		$('.colfototabpopup').removeClass('padding-img-modal');

		var imagen = '{!!$_GET['data-imagen']!!}';
		var id_proyecto = {!!$_GET['data-pry']!!};
		var ruta = '{!!url('upload/')!!}' + '/' + id_proyecto + '/galeria';
		$('.tabs-modal-dialog').attr('data-nk','{!!$_GET['data-nk']!!}');
		if(imagen=='')
		{
			$('#ver-itemgaleria-imagen').attr('src', 'img/image_not_available.png');
		}
		else
		{
			$('#ver-itemgaleria-imagen').attr('src', ruta+'/'+imagen);
		}

		$('#ver-itemgaleria-name').text('{!!$_GET['data-item']!!}');
		$('#nameitem-formgaleria').val('{!!$_GET['data-item']!!}');

		var id = {!!$_GET['prod']!!};

		var datos = {};
		datos._token = '{!!csrf_token()!!}';
		datos.id_item = id;
		datos.id_proyecto = $('body').attr('data-idpry');

		$.ajax({
			type: "POST",
			url: "{!! url('/slidergaleria') !!}",
			data: datos,
			success: function(data){
				$('#slider_galeria_c62').empty();
				$('#slider_galeria_c62').append(data);
			},
			error: function(data){
				console.log(data);
			}
		});

		var data = {};
		data._token = '{!!csrf_token()!!}';
		data.id = id;
		data.editable = '0';
		data.idioma = $('body').attr('data-idioma');

		$.ajax({
			type: "POST",
			url: "{!! url('/detallegaleriaitem') !!}",
			data: data,
			success: function(data){
				$('#atributospops').append(data);
			},
			error: function(data){
				console.log(data);
			}
		});
		// set focus when modal is opened
	$('#detalleGaleriaItem').modal({
	    show: true
	});
	</script>
@endif
