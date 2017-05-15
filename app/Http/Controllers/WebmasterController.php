<?php

namespace App\Http\Controllers;

use App\Agencia;
use App\ClienteModulo;
use App\Idioma;
use App\ModuloCategoria;
use App\ProyectoIdioma;
use App\PryCombinacionColores;
use App\Modulo;
use App\ModuloComplemento;
use App\ModuloEstructura;
use App\Proyecto;
use App\PryCursosCategoria;
use App\PryCursosCategoriaTxt;
use App\PryCursosCurso;
use App\PryCursosSector;
use App\PryGaleriaItem;
use App\PryGaleriaItemDetalle;
use App\PryGaleriaItemSlider;
use App\PryGaleriaTab;
use App\PryGoogleMap;
use App\PryMenuUrl;
use App\PryModulo;
use App\PryModuloEstructura;
use App\PryNoticia;
use App\PryNoticiaSlider;
use App\PryRedesSociales;
use App\PrySlider;
use App\PryTipografia;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Auth;
//DB
use App\Clientes;
//End

use DB;
use App\Console\Commands\Funciones;
use App\Console\Commands\Ecomerce;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Response;
use App\User;
use App;

use Illuminate\Support\Facades\Storage;
use Validator;

//png jpg

use App\Tinify\Tinify;

class WebmasterController extends BaseController
{
	public $idioma = 1;
    /*use DispatchesJobs, ValidatesRequests;*/
    public function __construct()
	{

		$this->middleware('auth');
		$this->middleware('eswebmaster');

		if(Cookie::get('idioma')!='')
		{
			$this->idioma = Cookie::get('idioma');
		}
		$myidioma = Idioma::where('id','=',$this->idioma)
			->select('siglas')
			->first();

		App::setLocale($myidioma->siglas);

	}
	public function getIndex()
	{
		return $this->getProyectos();
		/*return view('manager.principal');*/
	}
	public function getProyectos()
	{
		$proyectos = DB::table('pry_proyecto')
			->join('dat_cliente','dat_cliente.id','=','pry_proyecto.id_cliente')
			->join('dat_agencia', 'dat_agencia.id','=', 'dat_cliente.id_agencia')
			->where('dat_agencia.id_user', '=', Auth::user()->id)
			->where('pry_proyecto.deleted_at','=', null)
			->select('*','pry_proyecto.id as idesP', 'dat_cliente.id as idcliente')
			->get();

		$estado = 2;

		return view('agencia.proyectos')
			->with('proyectos',$proyectos)
			->with('estado', $estado);
	}
	public function getPublicados()
	{
		$proyectos = DB::table('pry_proyecto')
			->join('dat_cliente','dat_cliente.id','=','pry_proyecto.id_cliente')
			->join('dat_agencia', 'dat_agencia.id','=', 'dat_cliente.id_agencia')
			->where('dat_agencia.id_user', '=', Auth::user()->id)
			->where('pry_proyecto.deleted_at','=', null)
			->where('pry_proyecto.estado','=', 1)
			->select('*','pry_proyecto.id as idesP', 'dat_cliente.id as idcliente')
				->get();

		$estado = 1;

		return view('agencia.proyectos')
			->with('proyectos',$proyectos)
			->with('estado', $estado);
	}
	public function getBorradores()
	{
		$proyectos = DB::table('pry_proyecto')
			->join('dat_cliente','dat_cliente.id','=','pry_proyecto.id_cliente')
			->join('dat_agencia', 'dat_agencia.id','=', 'dat_cliente.id_agencia')
			->where('dat_agencia.id_user', '=', Auth::user()->id)
			->where('pry_proyecto.deleted_at','=', null)
			->where('pry_proyecto.estado','=', 0)
			->select('*','pry_proyecto.id as idesP', 'dat_cliente.id as idcliente')
			->get();

		$estado = 0;

		return view('agencia.proyectos')
			->with('proyectos',$proyectos)
			->with('estado', $estado);
	}
	public function getNuevoproyecto()
	{
		$ids_md_exclusivos = Funciones::getModulosExclusivos();

		$cabeceras = Modulo::where('tipo_id', '=', 1)
			->whereNotIn('id', $ids_md_exclusivos)
			->get();

		$pies = Modulo::where('tipo_id', '=', 3)
			->whereNotIn('id', $ids_md_exclusivos)
			->get();

		$agencias = Agencia::lists('nombre_agencia', 'id')->all();

		$categorias= ModuloCategoria::get();

		return view('comercial.proyectos.nuevoproyecto')
				->with('cabeceras', $cabeceras)
				->with('pies', $pies)
				->with('agencias', $agencias)
				->with('categorias', $categorias);
	}

	public function postNuevoproyecto(Request $request)
	{
		DB::beginTransaction();

		try {

			$proyecto = Funciones::nuevoProyecto($request);
			DB::commit();
			return redirect('agencia/editar/'.$proyecto->id.'/'.$proyecto->id_cliente);
		}
		catch (\Exception $e) {

			DB::rollback();

			return redirect()->back()->with("status",$e->getMessage());
		}
	}

	public function postObtenerproyecto(Request $request)
	{
		$id_proyecto = $request->input('id_proyecto');
		$proyecto = DB::table('pry_proyecto')
			->join('dat_cliente', 'pry_proyecto.id_cliente', '=', 'dat_cliente.id')
			->join('users', 'dat_cliente.id_usuario', '=', 'users.id')
			->where('pry_proyecto.id', '=', $id_proyecto)
			->select('pry_proyecto.id as id_proyecto', 'pry_proyecto.nombre_proyecto', 'pry_proyecto.dominio', 'pry_proyecto.estado',
				'dat_cliente.cliente', 'dat_cliente.razon_social', 'dat_cliente.direccion', 'dat_cliente.ruc', 'pry_proyecto.email_formulario',
				'dat_cliente.nombres', 'dat_cliente.apellidop', 'dat_cliente.apellidom', 'dat_cliente.telefono', 'dat_cliente.telefono2',
				'users.email', 'users.name', 'pry_proyecto.instagram_user_id', 'pry_proyecto.twitter_timeline', 'pry_proyecto.google_analytics',
				'pry_proyecto.google_maps_key', 'pry_proyecto.instagram_token', 'pry_proyecto.descripcion_site', 'pry_proyecto.keywords',
				'pry_proyecto.e_commerce')
			->get();

		return $proyecto;
	}
	public function postEditproyecto(Request $request)
	{
		$idproyecto = $request->input('id_proyecto');

		$proyecto = Proyecto::find($idproyecto);
		$proyecto->fill($request->all());
		$proyecto->save();

		$cliente = Clientes::find($proyecto->id_cliente);
		$cliente->fill($request->all());
		$cliente->save();

		$user = User::find($cliente->id_usuario);
		$user->email = $request->input('email');
		$user->name = $request->input('name');
		$user->save();

		return redirect()->back();
	}
	public function getSoftdeleteproyecto($id)
	{
		//elimina el proyecto en memoria

		$proyecto = Proyecto::find($id);
		$proyecto->delete();
		return redirect()->back();
	}
	public function getPerfil($id)
	{
		$usuario = User::where('id', '=', $id)->first();

		return view('comercial.usuarios.perfil')
			->with('usuario', $usuario);
	}
	public function postNuevacontraseña(Request $request, $idusuario)
	{
		$nuevopass = $request->input('password');
		$repeatpass = $request->input('repeatpass');

		if($nuevopass!= '' && $nuevopass == $repeatpass)
		{
			$usuario = User::find($idusuario);
			$usuario->password = bcrypt($nuevopass);
			$usuario->save();

			return redirect()->back();
		}
		else
		{
			$mensaje = 'Las contraseñas no coinciden.';
			return redirect()->back()->with('mensaje', $mensaje);
		}

	}
	public function postCambiofotoperfil($idusuario)
	{
		if (Input::hasFile('file')) {

			$usuario = User::find($idusuario);

			$ext = Input::file('file')->getClientOriginalExtension();
			$path = 'img/avatar';
			$filename = date('dm') . '_' . uniqid() . '.' . $ext;
			$f = Input::file('file')->move($path, $filename);

			$prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
			$source = Tinify::fromFile($path.$filename);
			$source->toFile($path.$filename);

			$usuario->imagen = $filename;
			$usuario->save();

		}

		return redirect()->back();
	}
	public function getVer(Request $request, $idProy,$idCliente, $idMenuUrl =0)
	{
		$prys = Funciones::getModulos($idProy, $idCliente, $idMenuUrl);

		$urls_lista = PryMenuUrl::where('id_pry_proyecto', '=', $idProy)->get();
		$urls = [];

		foreach($urls_lista as $url)
		{
			$tmp['titulo']=$url->titulo;
			$tmp['url']=$request->segment(1).'/'.$request->segment(2).'/'.$idProy.'/'.$idCliente.'/'.$url->id;
			array_push($urls,$tmp);
		}

		if($idMenuUrl==0)
		{
			if($urls_lista!='[]')
			{
				$menu = PryModulo::where('id_proyecto', '=', $idProy)
					->where('tipo_id', '=', 1)
					->where('id_menu_url', '=', 0)
					->select('titulo')
					->get();

				$index = '';
			}
			else
			{
				$menu = Funciones::getMenu($idProy,$idMenuUrl);

				$index='';
			}

		}
		else
		{
			$menu = [];

			$principal = PryModulo::where('id_proyecto', '=', $idProy)
				->where('tipo_id', '=', 1)
				->where('id_menu_url', '=', 0)
				->select('titulo')
				->first();

			$index['titulo'] = $principal->titulo;
			$index['url'] = $request->segment(1).'/'.$request->segment(2).'/'.$idProy.'/'.$idCliente;

		}

		$proyecto = Funciones::getProyecto($idProy);

		$google_maps_api = 'http://maps.google.com/maps/api/js?key=AIzaSyDtKyRpTeyekTZfban4mYQpQDIcLwdv3kY';

		return view('modulos.ver.moduloindex')
			->with('prys', $prys)
			->with('proyecto', $proyecto)
			->with('menu', $menu)
			->with('index', $index)
			->with('urls', $urls)
			->with('google_maps_api', $google_maps_api)
			->with('editar', 0);

	}
	public function getEditar(Request $request, $idProy,$idCliente, $idMenuUrl =0)
	{
		$idiomas = ProyectoIdioma::where('id_proyecto', '=', $idProy)->get();

		$this->idioma = Funciones::idioma_inarray($this->idioma, $idiomas);

		$pry_modulos = Funciones::getModulos($idProy, $idCliente, $idMenuUrl, $this->idioma);

		$urls_lista = Funciones::getInternas($this->idioma,$idProy);

		//lista de urls internas
		$urls = [];

		foreach($urls_lista as $url)
		{
			$tmp['titulo']=$url->titulo;
			$tmp['url']=$request->segment(1).'/'.$request->segment(2).'/'.$idProy.'/'.$idCliente.'/'.$url->id;
			array_push($urls,$tmp);
		}

		if($idMenuUrl==0)
		{
			if(count($urls_lista)>0) //existen paginas internas
			{
				//obtiene titulo de cabecera principal en array de objetos
				//$menu = Funciones::getTituloCabecera($this->idioma, $idProy);

				//obtiene titulo de modulos seleccionados como items para el menu
				$menu = Funciones::getMenu($idProy,$idMenuUrl, $this->idioma);

				$index = [];
			}
			else
			{
				//obtiene titulo de modulos seleccionados como items para el menu
				$menu = Funciones::getMenu($idProy,$idMenuUrl, $this->idioma);

				$index=[];
			}

		}
		else 
		{
			//obtiene titulo de modulos de la pagina principal, seleccionados como items para el menu
			$items_menu = Funciones::getMenu($idProy,0, $this->idioma);

			$menu = [];
			$temp = [];
			$index = [];

			foreach ($items_menu as $item) {
				$temp['titulo'] = $item->titulo;
				$temp['url'] = $request->segment(1).'/'.$request->segment(2).'/'.$idProy.'/'.$idCliente.'#'.str_replace(' ', '', $item->titulo);
				array_push($index, $temp);
			}

			/*$principal = Funciones::getTituloCabecera($this->idioma, $idProy);

			$index['titulo'] = $principal[0]->titulo;
			$index['url'] = $request->segment(1).'/'.$request->segment(2).'/'.$idProy.'/'.$idCliente;*/

		}

		$proyecto = Funciones::getProyecto($idProy);

		$tipografias = DB::table('dat_tipografia')->get();

		$sociales = DB::table('dat_red_social')->get();

		$google_maps_api = 'http://maps.google.com/maps/api/js?key=AIzaSyDtKyRpTeyekTZfban4mYQpQDIcLwdv3kY';

		$url_cliente = Clientes::where('id', '=', $idCliente)->select('id', 'url_cliente')->first();

		$custom_tipografia = Funciones::getTipografia($idProy);

		return view('modulos.moduloindex')
			->with('pry_modulos',$pry_modulos)
			->with('proyecto', $proyecto)
			->with('menu', $menu)
			->with('google_maps_api', $google_maps_api)
			->with('tipografias',$tipografias)
			->with('sociales', $sociales)
			->with('id_menu_url', $idMenuUrl)
			->with('index', $index)
			->with('urls', $urls)
			->with('url_cliente', $url_cliente->url_cliente)
			->with('idioma', $this->idioma)
			->with('idiomas', $idiomas)
			->with('custom_tipografia', $custom_tipografia)
			->with('editar',1);
	}
	
	public function postEditarproyecto($idproyecto, Request $request)
	{
		$proyecto = Proyecto::find($idproyecto);
		$proyecto->fill($request->all());
		$proyecto->save();

		$cliente = Clientes::find($proyecto->id_cliente);
		$cliente->fill($request->all());
		$cliente->save();

		$user = User::find($cliente->id_usuario);
		$user->email = $request->input('email');
		$user->save();

		return redirect('cliente/proyectos');
	}

		public function postObtenercoment(Request $request){
		$modulo = DB::table('pry_modulo')
			->select('comentario')
			->where('id','=',$request->input('ides'))
			->first();
		return $modulo->comentario;
	}
	public function postSavecoment(Request $request){
		$moduloPRY = PryModulo::find($request->input('idsPr'));
		$moduloPRY->comentario = $request->input('comentario');
		$moduloPRY->save();
		return redirect()->back();
	}

	public function postSaveorder(Request $request)
	{
		$orden = $request->input('orden');
		$tamaño = count($orden);

		for($i = 1 ; $i < $tamaño; $i++)
		{
			$mod = PryModulo::find($orden[$i]);
			$mod->orden= $i;
			$mod->save();
		}
	}
	public function postSavemodulocabecera(Request $request)
	{
		$id_proyecto = $request->input('id_proyecto');

		$proyecto = Proyecto::find($id_proyecto);
		$proyecto->fill($request->all());
		$proyecto->save();

		$id_modulo = $request->input('id_modulo');

		$logo_texto = $request->input('logo_texto');

		if(isset($logo_texto))
		{
			$modulo = PryModulo::find($id_modulo);
			$modulo->logo_texto = $logo_texto;
			$modulo->save();
		}

		//save imagen fondo
		Funciones::saveImagen($id_modulo, 1, $id_proyecto);

		$idiomas = $request->input('idiomas');

		$reiniciar = 0;

		if($idiomas!="")
		{
			$idiomas_bd = ProyectoIdioma::where('id_proyecto','=', $id_proyecto)->select('id_idioma')->get();

			$idiomas_actuales = [];

			foreach($idiomas_bd as $item)
			{
				array_push($idiomas_actuales, $item->id_idioma);
			}
			DB::beginTransaction();

			try {
				for($i=0; $i<count($idiomas); $i++)
				{
					if(!in_array($idiomas[$i], $idiomas_actuales))
					{
						Funciones::ClonarIdiomas($proyecto->id, $idiomas[$i]);

						$nuevo_idioma = new ProyectoIdioma();
						$nuevo_idioma->id_proyecto = $proyecto->id;
						$nuevo_idioma->id_idioma = $idiomas[$i];
						$nuevo_idioma->save();

						$reiniciar = 1;
					}
				}


				DB::commit();
			}
			catch (\Exception $e) {
				DB::rollback();
			}
		}

		$img_nocrop = $request->input('img_nocrop');
		if($img_nocrop!='')
		{
			Funciones::saveImgNoCrop($img_nocrop, $id_proyecto);
		}


		$img_a_eliminar = $request->input('img_a_eliminar');
		if($img_a_eliminar!='')
		{
			$img_a_eliminar = explode(",", $img_a_eliminar);

			$tam  = count($img_a_eliminar);

			for($i=0; $i<$tam; $i++)
			{
				Funciones::eliminarImgcontenido($img_a_eliminar[$i], $id_proyecto);
			}
		}

		$logo_cabecera = $request->input('logo_cabecera');

		if(isset($logo_cabecera))
		{
			Funciones::saveBase64imagen('1', $id_modulo, $id_proyecto, $logo_cabecera);
		}

		return $reiniciar;

	}
	public function postSavemodulo(Request $request)
	{
		$id_proyecto = $request->input('id_proyecto');

		$proyecto = Proyecto::find($id_proyecto);
		$proyecto->fill($request->all());
		$proyecto->save();

		$id_modulo = $request->input('id_modulo');
		$tipo = 1;
		//save imagen fondo
		Funciones::saveImagen($id_modulo, $tipo, $id_proyecto);

		$img_nocrop = $request->input('img_nocrop');
		if($img_nocrop!='')
		{
			Funciones::saveImgNoCrop($img_nocrop, $id_proyecto);
		}


		$img_a_eliminar = $request->input('img_a_eliminar');
		if($img_a_eliminar!='')
		{
			$img_a_eliminar = explode(",", $img_a_eliminar);

			$tam  = count($img_a_eliminar);

			for($i=0; $i<$tam; $i++)
			{
				Funciones::eliminarImgcontenido($img_a_eliminar[$i], $id_proyecto);
			}
		}

		$copyright = $request->input('copyright');
		if(isset($copyright))
		{
			$proyecto = Proyecto::find($id_proyecto);
			$proyecto->copyright = $copyright;
			$proyecto->save();
		}

		$modulo = PryModulo::find($id_modulo);

		if (Input::hasFile('file-logo')) {

			$ext = Input::file('file-logo')->getClientOriginalExtension();
			$path = 'upload/'.$modulo->id_proyecto.'/contenido/';
			$filename = date('dm') . '_' . uniqid() . '.' . $ext;
			$f = Input::file('file-logo')->move($path, $filename);

			//png
			$prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
			$source = Tinify::fromFile($path.$filename);
			$source->toFile($path.$filename);

			$modulo->logo = $filename;
		}
		$modulo->save();

	}
	public function postEditestructura(Request $request)
	{
		$estructuras = $request->input('estructura');
		$id_proyecto = $request->input('id_proyecto');

		if(isset($estructuras))
		{
			foreach($estructuras as $estructura)
			{
				$texto = PryModuloEstructura::find($estructura[0]);
				$texto->$estructura[1] = trim($estructura[2], " \t\n\r\0\x0B");
				$texto->save();
			}
		}

		$botones = $request->input('botones');

		if(isset($botones))
		{
			foreach ($botones as $boton) {
				$item = PryModuloEstructura::find($boton[0]);
				$item->$boton[1] = $boton[2];
				$item->url = $boton[3];
				$item->es_url_externo = $boton[4];
				$item->save();

			}
		}

		$img_crop = $request->input('img_crop');

		if(isset($img_crop))
		{
			foreach($img_crop as $imagen)
			{
				Funciones::saveBase64imagen('2', $imagen[0], $id_proyecto, $imagen[1]);
			}
		}

		$videos = $request->input('videos');

		if(isset($videos))
		{
			foreach ($videos as $video) {
				$mod_estructura = PryModuloEstructura::find($video[0]);
				$mod_estructura->video = $video[1];
				$mod_estructura->save();
			}
		}
	}
	public function postSaveattrproyecto(Request $request)
	{
		$proyecto = Proyecto::find($request->input('id_proyecto'));
		$proyecto->fill($request->all());
		$proyecto->save();

		$idiomas = $request->input('idiomas');

		$idiomas_bd = ProyectoIdioma::where('id_proyecto','=', $proyecto->id)->select('id_idioma')->get();

		$idiomas_actuales = [];

		foreach($idiomas_bd as $item)
		{
			array_push($idiomas_actuales, $item->id_idioma);
		}
		DB::beginTransaction();

		try {
			for($i=0; $i<count($idiomas); $i++)
			{
				if(!in_array($idiomas[$i], $idiomas_actuales))
				{
					Funciones::ClonarIdiomas($proyecto->id, $idiomas[$i]);

					$nuevo_idioma = new ProyectoIdioma();
					$nuevo_idioma->id_proyecto = $proyecto->id;
					$nuevo_idioma->id_idioma = $idiomas[$i];
					$nuevo_idioma->save();
				}
			}


			DB::commit();
		}
		catch (\Exception $e) {
			DB::rollback();
			return $e->getMessage();
		}

	}
	public function postDisponibilidadusuario(Request $request)
	{
		$username = $request->input('username');

		$user = User::where('username', '=', $username)->first();

		if(isset($user))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	public function postBuscarusuario(Request $request)
	{
		$valor = $request->input('valor');
		$tipo = $request->input('tipo');

		return Funciones::buscarUsuario($valor, $tipo);
	}
	public function postBuscarcliente(Request $request)
	{
		$username = $request->input('username');
		$email = $request->input('email');

		return Funciones::buscarCliente($username, $email);
	}
	public function postEmailavailability(Request $request)
	{
		$data = array(
			'email' => $request->input('email')
		);

		$rules = array('email' => 'required|unique:users');

		$validator = Validator::make($data, $rules);

		if ($validator->fails())
		{
			return 0;
		}
		else
		{
			return 1;
		}
	}
	public function postSavecambios(Request $request)
	{
		$estructura = PryModuloEstructura::find($request->get('pk'));
		$name = $request->get('name');
		$value = $request->get('value');
		$estructura->$name = $value;
		$estructura->save();

		return $estructura;

	}
	public function postSavecopyright(Request $request)
	{
		$proyecto = Proyecto::find($request->get('pk'));
		$name = $request->get('name');
		$value = $request->get('value');
		$proyecto->$name = $value;
		$proyecto->save();

		return $proyecto;
	}
	public function postSavelogotexto(Request $request)
	{
		$modulo = PryModulo::find($request->get('pk'));
		$name = $request->get('name');
		$value = $request->get('value');
		$modulo->$name = $value;
		$modulo->save();

		return $modulo;
	}
	public function postSaveimagen(Request $request)
	{
		$id = $request->input('id');
		$tipo = $request->input('tipo');
		$id_proyecto = $request->input('id_proyecto');

		return Funciones::saveImagen($id, $tipo, $id_proyecto);

	}
	public function postRemovefondo(Request $request)
	{
		$modulo = PryModulo::find($request->input('id'));
		$modulo->imagen_fondo = '';
		$modulo->save();
	}
	public function postSavecolorfondo(Request $request)
	{
		$modulo = PryModulo::find($request->input('id'));
		$modulo->color_fondo = $request->input('color');
		$modulo->save();
	}
	public function postSaveprycolores(Request $request)
	{

		$id_pry_modulo = $request->input('id_pry_modulo');
		$fondo = $request->input('fondo');
		$titulo = $request->input('titulo');
		$subtitulo = $request->input('subtitulo');
		$comentario = $request->input('comentario'); 
		$color_boton = $request->input('color_boton');
		$color_menu = $request->input('color_menu');
		$color_menucat = $request->input('color_menucat');
		$color_menucatfondo = $request->input('color_menucatfondo');

		$combinacion = PryCombinacionColores::where('id_pry_modulo', '=', $id_pry_modulo)
			->first();

		if($combinacion)
		{
			$dato = PryCombinacionColores::find($combinacion->id);
			$dato->fondo = $fondo;
			$dato->titulo = $titulo;
			$dato->subtitulo = $subtitulo;
			$dato->comentario = $comentario;
			$dato->color_boton = $color_boton;
			$dato->color_menu = $color_menu;
			$dato->color_menucat = $color_menucat;
			$dato->color_menucatfondo = $color_menucatfondo;
			$dato->save();
		}
		else
		{
			$dato = new PryCombinacionColores();
			$dato->id_pry_modulo = $id_pry_modulo;
			$dato->fondo = $fondo;
			$dato->titulo = $titulo;
			$dato->subtitulo = $subtitulo;
			$dato->comentario = $comentario;
			$dato->color_boton = $color_boton;
			$dato->color_menu = $color_menu;
			$dato->color_menucat = $color_menucat;
			$dato->color_menucatfondo = $color_menucatfondo;
			$dato->save();
		}

		return Funciones::savePryColores($request);
	}
	public function postGetsocial(Request $request)
	{
		$sociales = DB::table('dat_red_social')->lists('marca', 'id');

		return $sociales;

	}
	public function postSaveiconsocial(Request $request)
	{
		$social= PryRedesSociales::find($request->input('id'));
		$social->icono = $request->input('icono');
		$social->save();
	}
	public function postEditarsocial(Request $request)
	{
		$id = $request->input('id_socialicono');
		$icono = $request->input('icono');
		$url = $request->input('urlsocial');
		$id_redsocial = $request->input('id_red_social');

		$social = PryRedesSociales::find($id);
		$social->icono = $icono;
		$social->url = $url;
		$social->id_red_social = $id_redsocial;
		$social->save();


		return $social;
	}
	public function postEditartitulomodulo(Request $request)
	{
		$id = $request->input('id');
		$titulo = $request->input('titulo');
		$idioma = $request->input('idioma');
		$item_menu = $request->input('item_menu');

		Funciones::editarTituloModulo($id, $titulo, $idioma, $item_menu);
	}
	public function postSavebase64imagen(Request $request)
	{
		$imagen = $request->input('base64img');
		$tipo = $request->input('tipo');
		$id = $request->input('id');
		$id_proyecto = $request->input('id_proyecto');

		$filename= Funciones::saveBase64imagen($tipo, $id, $id_proyecto, $imagen);

		return $filename;
	}
	public function postCreargaleriaitem(Request $request)
	{
		$id_tab = $request->input('id_pry_galeria_tab');
		$itemdato = $request->input('item');
		$id_proyecto = $request->input('id_proyecto');

		$label_detalle_item = $request->input('galeriaitem_detalle_label');
		$valor_detalle_item = $request->input('galeriaitem_detalle_valor');

		$item = Funciones::crearGaleriaItem($id_tab, $itemdato,'', $label_detalle_item, $valor_detalle_item, $id_proyecto);

		return $item;
	}
	public function postSavegaleriaitemslider(Request $request)
	{
		$id_proyecto = $request->input('id_proyecto');
		$files = $request->input('cantidad_files');
		$id_galeria_item = $request->input('id_galeria_item');
		$cantidad_existentes = $request->input('cantidad_existentes');
		$ids_item_slider = $request->input('ids_item_slider');

		Funciones::saveGaleriaItemSlider($id_galeria_item, $files, $id_proyecto, $cantidad_existentes, $ids_item_slider);
	}
	public function postGuardardatosgaleria(Request $request)
	{
		$id_item = $request->input('id');
		$itemdato = $request->input('item');

		$ids_detalle_item = $request->input('galeriaitem_detalle_id');
		$label_detalle_item = $request->input('galeriaitem_detalle_label');
		$valor_detalle_item = $request->input('galeriaitem_detalle_valor');

		$idioma = $request->input('idioma');

		Funciones::guardarDatosGaleria($id_item, $itemdato,'', $ids_detalle_item, $label_detalle_item, $valor_detalle_item, $idioma);
	}
	public function postEditarlinkareferencia(Request $request)
	{
		$id = $request->input('id_md_estructura');
		$name = $request->input('name');
		$texto = $request->input('texto');
		$url = $request->input('url');
		$es_url_externo = $request->input('es_url_externo');

		$data = Funciones::editarLinkareferencia($id, $name, $texto, $url, $es_url_externo);

		return $data;
	}
	public function postEliminargaleriaitem(Request $request)
	{
		$id_item = $request->input('id');
		$id_proyecto = $request->input('id_proyecto');

		Funciones::eliminarGaleriaItem($id_item, $id_proyecto);

	}
	public function postDetallegaleriaitem(Request $request)
	{
		$iditem = $request->input('id');
		$editable = $request->input('editable');
		$idioma = $request->input('idioma');

		$detalle = Funciones::getGaleriaItemDetalleHtml($iditem, $editable, $idioma);

		return $detalle;

	}
	public function postNewgaleriatab(Request $request)
	{
		$id = $request->input('id_modulo');
		$nombre = $request->input('tab');

		Funciones::newGaleriaTab($id, $nombre);

	}
	public function postReadgaleriatabs(Request $request)
	{
		$id_modulo = $request->input('id_modulo');
		$idioma = $request->input('idioma');

		$tabs = Funciones::getGaleriaTabsHtml($id_modulo, $idioma);

		return $tabs;
	}
	public function postEditargaleriatabs(Request $request)
	{
		$ids_tab = $request->input('ids_tab');
		$nombres_tab = $request->input('nombres_tab');
		$idioma = $request->input('idioma');

		Funciones::editarGaleriaTabs($ids_tab, $nombres_tab, $idioma);
	}
	public function postEliminargaleriatabs(Request $request)
	{
		$id_tab = $request->input('id');

		return Funciones::eliminarGaleriaTabs($id_tab);

	}

	public function postDesactivargaleriatabs(Request $request)
	{
		$id_tabs = $request->input('id_tab');

		Funciones::desactivarGaleriaTabs($id_tabs);

	}

	public function postMoreinfogaleria(Request $request)
	{
		$data = array(
			'nombreitem' => $request->input('nombreitem'),
			'nombre' => $request->input('nombre'),
			'email' => $request->input('email'),
			'telefono' => $request->input('telefono'),
			'mensaje' => $request->input('mensaje')
		);
		$rules =
			[	'nombre' => 'required',
				'email' => 'required|email',
				'mensaje' => 'required',
			];

		$validator = Validator::make( $data, $rules);

		if ($validator->passes()) {

			Mail::send('emails.moreinfogaleria', $data, function ($message) {
				$message->subject('More information '. Input::get('nombreitem'));
				$message->to('mk.chirinos@gmail.com');
				$message->from(Input::get('email'));
			});

			return array(
				'success' => true
			);
		}
		else
		{
			return array(
				'success' => false,
				'errors' => $validator->getMessageBag()->toArray()
			);
		}

	}
	public function postEditarlinkvideoplay(Request $request)
	{
		$id = $request->input('id_md_estructura');
		$video = $request->input('video');

		$mod_estructura = PryModuloEstructura::find($id);
		$mod_estructura->video = $video;
		$mod_estructura->save();

		return $mod_estructura;
	}
	public function postObtenerimgslider(Request $request)
	{
		$id = $request->input('id_modulo');
		$id_proyecto = $request->input('id_proyecto');
		$data = Funciones::getImagenesSliderHtml($id, $id_proyecto);

		return $data;
	}
	public function postObtenerimgtextoslider(Request $request)
	{
		$id = $request->input('id_modulo');
		$id_proyecto = $request->input('id_proyecto');
		$idioma = $request->input('idioma');
		$holder1 = $request->input('holder1');
		$holder2 = $request->input('holder2');
		$holder3 = $request->input('holder3');

		$data = Funciones::getImgTextoSliderHtml($id, $id_proyecto, $idioma, $holder1, $holder2, $holder3);

		return $data;
	}
	public function postSaveslider(Request $request)
	{

		Funciones::saveSlider($request);

		 return redirect()->back();
	}
	public function postSavesliderimgtexto(Request $request)
	{
		$id = $request->input('id_modulo_slider');
		$id_proyecto = $request->input('id_pry_slider');
		$id_sliders = $request->input('idsliders');
		$texto_sliders = $request->input('texto-img-slider');
		$texto2_sliders = $request->input('texto2-img-slider');
		$link_sliders = $request->input('link-img-slider');
		$files = $request->input('cantfiles');
		$idioma = $request->input('idioma');

		Funciones::saveSliderImgTexto($id, $id_proyecto, $id_sliders, $texto_sliders, $texto2_sliders, $link_sliders, $files, $idioma);

		return redirect()->back();
	}
	public function postEliminarimgslider(Request $request)
	{
		$id_slider = $request->input('id_slider');
		Funciones::eliminarimgslider($id_slider);
	}

	public function postObtenermodulosunicos(Request $request)
	{
		$tipo = $request->input('tipo');
		$data = Funciones::getModulosUnicosHtml($tipo);
		return $data;
	}
	public function postObtenercontenidos(Request $request)
	{
		$data = Funciones::getContenidosHtml();
		return $data;
	}
	public function postReemplazarmodulo(Request $request)
	{
		$id_modulo = $request->input('id_modulo_actual');
		$id_proyecto = $request->input('id_pry_new_modulo');
		$id_modulo_nuevo = $request->input('id_modulo_nuevo');

		if (!File::isDirectory('upload/'.$id_proyecto))
		{
			File::makeDirectory('upload/'.$id_proyecto);

			if (!File::isDirectory('upload/'.$id_proyecto.'/galeria'))
			{
				File::makeDirectory('upload/' . $id_proyecto . '/galeria');
			}
			if (!File::isDirectory('upload/'.$id_proyecto.'/slider'))
			{
				File::makeDirectory('upload/'.$id_proyecto.'/slider');
			}
			if (!File::isDirectory('upload/'.$id_proyecto.'/contenido'))
			{
				File::makeDirectory('upload/'.$id_proyecto.'/contenido');
			}
		}

		DB::beginTransaction();

		try {
			Funciones::eliminarModulo($id_modulo, $id_proyecto);
			Funciones::Clonarmodulo($id_modulo_nuevo, $id_proyecto);

			DB::commit();
		}
		catch (\Exception $e) {
			DB::rollback();
		}

		return redirect()->back();
	}
	public function postAgregarmodulos(Request $request)
	{
		$id_proyecto = $request->input('id_pry_mdcontenidos');
		$id_menu_url = $request->input('id_menu_url_mdcontenidos');
		$contseleccionados = $request->input('cont_seleccionados');

		if (!File::isDirectory('upload/'.$id_proyecto))
		{
			File::makeDirectory('upload/'.$id_proyecto);

			if (!File::isDirectory('upload/'.$id_proyecto.'/galeria'))
			{
				File::makeDirectory('upload/' . $id_proyecto . '/galeria');
			}
			if (!File::isDirectory('upload/'.$id_proyecto.'/slider'))
			{
				File::makeDirectory('upload/'.$id_proyecto.'/slider');
			}
			if (!File::isDirectory('upload/'.$id_proyecto.'/contenido'))
			{
				File::makeDirectory('upload/'.$id_proyecto.'/contenido');
			}
		}

		DB::beginTransaction();

		try {
			for($i=0; $i< sizeof($contseleccionados) ; $i++)
			{
				Funciones::Clonarmodulo($contseleccionados[$i], $id_proyecto, $id_menu_url);
			}

			DB::commit();
		}
		catch (\Exception $e) {
			DB::rollback();
			//return $e->getMessage();
		}

		return redirect()->back();
	}
	public function postEliminarmodulocontenido(Request $request)
	{
		$id_modulo = $request->input('id_modulo_to_delete');
		$id_proyecto = $request->input('id_pry_modulo_to_delete');


		DB::beginTransaction();

		try {
			Funciones::eliminarModulo($id_modulo, $id_proyecto);
			DB::commit();
		}
		catch (\Exception $e) {
			DB::rollback();
		}

		return redirect()->back();
	}

	public function postCabecerainternas(Request $request)
	{
		$id_proyecto = $request->input('id_pry_cabecerainterna');
		$id_modulo_nuevo = $request->input('id_new_cabecerainterna');
		$id_modulo = PryModulo::where('id_proyecto', '=', $id_proyecto)
			->where('tipo_id','=', 1)
			->where('id_menu_url', '!=', 0)
			->first();

		$id_menu_url = PryMenuUrl::where('id_pry_proyecto', '=', $id_proyecto)->select('id')->first();

		if (!File::isDirectory('upload/'.$id_proyecto))
		{
			File::makeDirectory('upload/'.$id_proyecto);

			if (!File::isDirectory('upload/'.$id_proyecto.'/galeria'))
			{
				File::makeDirectory('upload/' . $id_proyecto . '/galeria');
			}
			if (!File::isDirectory('upload/'.$id_proyecto.'/slider'))
			{
				File::makeDirectory('upload/'.$id_proyecto.'/slider');
			}
			if (!File::isDirectory('upload/'.$id_proyecto.'/contenido'))
			{
				File::makeDirectory('upload/'.$id_proyecto.'/contenido');
			}
		}

		DB::beginTransaction();

		try {
			if($id_modulo=='')
			{
				Funciones::Clonarmodulo($id_modulo_nuevo, $id_proyecto, $id_menu_url->id);
			}
			else
			{
				Funciones::eliminarModulo($id_modulo->id, $id_proyecto);
				Funciones::Clonarmodulo($id_modulo_nuevo, $id_proyecto, $id_menu_url->id);
			}

			DB::commit();
		}
		catch (\Exception $e) {
			DB::rollback();
		}

		return redirect()->back();
	}
	public function postObtenercss(Request $request)
	{
		$id_pry = $request->input('id_pry');
		$css = Proyecto::where('id', '=', $id_pry)->select('custom_css')->first();

		return $css;

	}
	public function postSavecustomcss(Request $request)
	{
		$css = $request->input('custom_css');
		$id_pry = $request->input('id_pry_custom_css');

		$custom_css = Proyecto::find($id_pry);
		$custom_css->custom_css = $css;
		$custom_css->save();

		return redirect()->back();
	}
	public function postSavemenuurls(Request $request)
	{

		$id_pry_proyecto = $request->input('id_pry_menu_url');
		$ids = $request->input('id_menu_url');
		$titulos = $request->input('titulo_menu_url');
		$urls = $request->input('url_menu_url');
		$idioma = $request->input('idioma');

		Funciones::saveMenuUrl($id_pry_proyecto, $ids, $titulos, $urls, $idioma);

		return redirect()->back();
	}
	public function postSavegooglemap(Request $request)
	{
		$id = $request->input('id_google_map');
		$direccion = $request->input('direccion-maps');
		$longitud = $request->input('longitud-maps');
		$latitud = $request->input('latitud-maps');

		$google_maps= PryGoogleMap::find($id);
		$google_maps->direccion = $direccion;
		$google_maps->longitud = $longitud;
		$google_maps->latitud = $latitud;
		$google_maps->save();

		return redirect()->back();
	}
	public function postObtenertextoslider(Request $request)
	{
		$id = $request->input('id_modulo');
		$idioma = $request->input('idioma');

		$data = Funciones::getTextoSliderHtml($id, $idioma);

		return $data;
	}
	public function postSaveslidertextos(Request $request)
	{
		$id_pry_modulo = $request->input('id_modulo_slider_texto');
		$id_sliders = $request->input('idsliderstexto');
		$textos = $request->input('slider_textos');
		$idioma = $request->input('idioma');

		Funciones::saveSliderTextos($id_pry_modulo, $id_sliders, $textos, $idioma);

		return redirect()->back();

	}
	public function postObteneritemgaleriaslider(Request $request)
	{
		$id_item = $request->input('id_item');
		$id_proyecto = $request->input('id_proyecto');
		$data = Funciones::getImagenesSliderGaleriaHtml($id_item, $id_proyecto);

		return $data;
	}
	public function postEliminargaleriaitemslider(Request $request)
	{
		$id_galeria_item_slider = $request->input('id_galeria_item_slider');
		$id_proyecto = $request->input('id_proyecto');

		Funciones::eliminarGaleriaItemSlider($id_galeria_item_slider,$id_proyecto);
	}
	public function postSaveorderitemgaleria(Request $request)
	{
		$orden = $request->input('ids_items_galeria');

		$tamaño = count($orden)-1;

		for($i = 0 ; $i < $tamaño; $i++)
		{
			$item = PryGaleriaItem::find($orden[$i]);
			$item->orden= $i;
			$item->save();
		}
	}

	public function postSaveimgrayos(Request $request)
	{
		$id = $request->input('id_md_img_rayo');

		$id_proyecto = $request->input('id_rayo_pry');

		Funciones::saveImgRayos($id, $id_proyecto);

		return redirect()->back();
	}

	public function getVentas($id_proyecto = 0)
	{
		$cliente = Clientes::where('id_usuario', '=', Auth::user()->id)->first();

		$proyectos = Proyecto::where('id_cliente', '=', $cliente->id)->lists('nombre_proyecto','id')->all();

		$ventas = ClienteVenta::where('id_proyecto','=', $id_proyecto)->get();

		return view('manager.ventas.ventas')
			->with('cliente',$cliente)
			->with('proyectos',$proyectos)
			->with('ventas', $ventas)
			->with('id_proyecto', $id_proyecto);

	}

	public function postVentasporproyecto(Request $request)
	{
		$id_proyecto = $request->input('id_proyecto');
		return Funciones::getVentasPorProyecto($id_proyecto);
	}

	public function getDetalleventa($id_venta)
	{
		$shop_cliente= ClienteVenta::where('id','=', $id_venta)->first();

		$productos = DB::table('pry_galeria_item')
			->join('shop_productos','pry_galeria_item.id','=','shop_productos.id_producto')
			->where('shop_productos.id_shop_cliente','=', $id_venta)
			->select('shop_productos.*', 'pry_galeria_item.item')
			->get();

		return view('manager.ventas.detalleventa')
			->with('cliente',$shop_cliente)
			->with('productos',$productos);
	}
	public function postSavethumbnail(Request $request)
	{
		$imagen = $request->input('base64img');
		$id_proyecto = $request->input('id_proyecto');

		$filename= Funciones::savethumbnail($id_proyecto, $imagen);

		return $filename;
	}
	public function postCreatecrewitem(Request $request)
    {
        $detalle1 = [];
        $detalle1[0] = $request->input('label');

        $detalle2 = [];
        $detalle2[0] = $request->input('valor');

        $item = Funciones::crearGaleriaItem($request->input('tab'), $request->input('item'),$request->input('texto'), $detalle1, $detalle2, $request->input('id_proyecto'), 0);

        return $item;
    }
	public function postEditcrewitem(Request $request)
	{
		Funciones::editarCrewItem($request->input('id'), $request->input('item'), $request->input('texto'), $request->input('label'), $request->input('valor'), $request->input('idioma'));
	}
	public  function postSavenoticia(Request $request)
	{
		Funciones::saveNoticia($request);

		return redirect()->back();
	}
	public function postNoticia(Request $request)
	{
		$id = $request->input('id_noticia');
		$idioma = $request->input('idioma');

		$noticia = Funciones::getNoticia($id, $idioma);

		return $noticia;
	}
	public function postEliminarnoticia(Request $request)
	{
		$id = $request->input('id_noticia');

		Funciones::deleteNoticia($id);

		return $id;

	}
	public function postSavenuevanoticia(Request $request)
	{
		Funciones::saveNuevaNoticia($request);

		return redirect()->back();
	}
	public function postObtenernoticiaslider(Request $request)
	{
		$id = $request->input('id_noticia');

		$data = PryNoticiaSlider::where('id_noticia', '=', $id)->get();

		return $data;
	}
	public function postSavesector(Request $request)
	{
		Funciones::saveSector($request);

		return redirect()->back();

	}
	public function postNewcategoriacurso(Request $request)
	{
		$id_proyecto = $request->input('id_proyecto');
		$id_sector = $request->input('id_sector');
		$nombre = $request->input('nombre');

		return Funciones::newCategoriaCurso($id_proyecto, $id_sector, $nombre);
	}
	public function postObtenercategoriascursos(Request $request)
	{
		$id_sector = $request->input('id_sector');
		$idioma = $request->input('idioma');

		$categorias = Funciones::getCategoriasCursos($id_sector, $idioma);

		return $categorias;
	}
	public function postSavecategoriascursos(Request $request)
	{
		$ids = $request->input('categoria_id');
		$nombres = $request->input('categoria_nombre');
		$idioma = $request->input('idioma');

		Funciones::saveCategoriasCursos($ids, $nombres, $idioma);

		return redirect()->back();
	}
	public function postEliminarcategoriacurso(Request $request)
	{
		$id_categoria = $request->input('id');

		return Funciones::eliminarCategoriaCurso($id_categoria);

	}
	public function postSavenewcurso(Request $request)
	{
		$curso = Funciones::saveNewCurso($request);

		return $curso;
	}
	public function postEliminarcurso(Request $request)
	{
		$id_curso = $request->input('id_curso');
		$id_proyecto = $request->input('id_proyecto');

		Funciones::eliminarCurso($id_curso, $id_proyecto);
	}
	public function postEditcurso(Request $request)
	{
		$curso = Funciones::editCurso($request);

		return $curso;
	}
	public function getConsultas($id_proyecto = 0)
	{
		$cliente = Clientes::where('id_usuario', '=', Auth::user()->id)->first();

		$proyectos = Proyecto::where('id_cliente', '=', $cliente->id)->lists('nombre_proyecto','id')->all();

		if($id_proyecto==0)
		{
			$proyecto = Proyecto::where('id_cliente', '=', $cliente->id)->select('id')->first();

			if(isset($proyecto))
			{
				$id_proyecto = $proyecto->id;
			}

		}

		$consultas = PryConsulta::where('id_proyecto','=', $id_proyecto)->get();

		return view('manager.consultas.consultas')
			->with('cliente',$cliente)
			->with('proyectos',$proyectos)
			->with('consultas', $consultas)
			->with('id_proyecto', $id_proyecto);

	}
	public function postEditarfaicon(Request $request)
	{
		$id = $request->input('id_md_icono');
		$faicono = $request->input('icono');
		$campo = $request->input('campo');

		$icon = PryModuloEstructura::find($id);
		$icon->$campo = $faicono;
		$icon->save();

		return $faicono;
	}
	public function postCreatecollageitem(Request $request)
	{
		$id_proyecto = $request->input('id_proyecto');

		$nuevo_item = Funciones::crearGaleriaItem($request->input('tab'), $request->input('item'),'', [], [], $id_proyecto, $request->input('width'), $request->input('url'), $request->input('align'));

		Funciones::saveImagen($nuevo_item->id, '2', $id_proyecto);

		$item = PryGaleriaItem::find($nuevo_item->id);

		return $item;
	}
	public function postUpdatecollageitem(Request $request)
	{
		$id_item = $request->input('id');

		Funciones::guardarDatosGaleria($id_item, $request->input('item'),'',[],[],[],$request->input('idioma'), $request->input('width'), $request->input('url'), $request->input('align'));
		Funciones::saveImagen($id_item, '2', $request->input('id_proyecto'));
	}
	public function postCreatetipografia(Request $request)
	{
		$titulo_url = $request->input('titulo_url');
		$parrafo_url= $request->input('parrafo_url');
		$id_proyecto = $request->input('id_proyecto');

		return Funciones::createTipografia($titulo_url, $parrafo_url, $id_proyecto);

	}
	public function postReadtipografias(Request $request)
	{
		$id_proyecto = $request->input('id_proyecto');

		return Funciones::readTipografias($id_proyecto);
	}
	public function postSettipografia(Request $request)
	{
		$id_proyecto = $request->input('id_proyecto');
		$id_tipografia = $request->input('id');

		return Funciones::setTipografia($id_tipografia, $id_proyecto);
	}
	public function postDeletetipografia(Request $request)
	{
		$id_tipografia = $request->input('id');

		Funciones::deleteTipografia($id_tipografia);
	}
	public function postCreateitem(Request $request)
	{
		$id_proyecto = $request->input('id_proyecto');

		$nuevo_item = Funciones::crearGaleriaItem($request->input('tab'), $request->input('item'),$request->input('texto'), [], [], $id_proyecto, 0);

		Funciones::saveImagen($nuevo_item->id, '2', $id_proyecto);

		$item = PryGaleriaItem::find($nuevo_item->id);

		return $item;
	}
	public function postUpdateitem(Request $request)
	{
		$id_item = $request->input('id');

		Funciones::guardarDatosGaleria($id_item, $request->input('item'),$request->input('texto'),[],[],[],$request->input('idioma'), 0);
		Funciones::saveImagen($id_item, '2', $request->input('id_proyecto'));

		$item = PryGaleriaItem::find($id_item);

		return $item;
	}
	public function postCreateitemvideo(Request $request)
	{
		$id_proyecto = $request->input('id_proyecto');

		$nuevo_item = Funciones::crearGaleriaItem($request->input('tab'), $request->input('item'),$request->input('texto'), [], [], $id_proyecto, 0);


		$item = PryGaleriaItem::find($nuevo_item->id);
		$item->imagen = $request->input('video');
		$item->save();

		return $item;
	}
	public function postUpdateitemvideo(Request $request)
	{
		$id_item = $request->input('id');

		Funciones::guardarDatosGaleria($id_item, $request->input('item'),$request->input('texto'),[],[],[],$request->input('idioma'), 0);

		$item = PryGaleriaItem::find($id_item);
		$item->imagen = $request->input('video');
		$item->save();

	}
	public function postEditiframe(Request $request)
	{
		$id = $request->input('id');
		$url = $request->input('url');

		$iframe = PryModuloEstructura::find($id);
		$iframe->url = $url;
		$iframe->save();

		return redirect()->back();

	}
	public function postSaveuploadfile(Request $request)
	{
		return Funciones::updateUploadFile($request);
	}

}
