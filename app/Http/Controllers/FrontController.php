<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Idioma;
use App\PryCursosCurso;
use App\PryMenuUrl;
use App\PryNoticiaSlider;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Auth;

use App\Modulo;
use App\ModuloEstructura;
use App\Proyecto;
use App\PryModulo;
use App\PryModuloEstructura;

use DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\File;
use App\Console\Commands\Funciones;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\User;
use App;

use Validator;

class FrontController extends BaseController
{
	public $correoglobal = "jgonzales@peruyoung.com";
	public $proy;
	public $cliente;
	public $idioma = 1;

	public function __construct(Request $request)
	{
		$dominio = $request->root();
		$dominio = str_replace('www.', '', $dominio);
		$proyecto = DB::table('pry_proyecto')
			->where('dominio', $dominio)
			->first();
		if(isset($proyecto))
		{
			$this->cliente = $proyecto->id_cliente;
			$this->proy = $proyecto->id;
		}

		if(Cookie::get('idioma')!='')
		{
			$this->idioma = Cookie::get('idioma');
		}
		$myidioma = Idioma::where('id','=',$this->idioma)
			->select('siglas')
			->first();

		App::setLocale($myidioma->siglas);

	}

	public function Proyecto(Request $request, $idMenuUrlCond =0)
	{
		/*
		$prys = Funciones::getModulos($this->proy, $this->cliente, 0);

		$urls_lista = PryMenuUrl::where('id_pry_proyecto', '=', $this->proy)->get();
		$urls = [];

		foreach($urls_lista as $url)
		{
			$tmp['titulo']=$url->titulo;
			$tmp['url']=$url->url;
			array_push($urls,$tmp);
		}

		if($urls_lista!='[]')
		{
			$menu = PryModulo::where('id_proyecto', '=', $this->proy)
				->where('tipo_id', '=', 1)
				->where('id_menu_url', '=', 0)
				->select('titulo')
				->get();

			$index = '';
		}
		else
		{
			$menu = Funciones::getMenu($this->proy,0);

			$index='';
		}
		*/


		//search  url to ides
		//$urlproyecto = Proyecto::where('url_proyecto', '=', $this->proy)->first();
		//$urlclient = Clientes::where('url_cliente', '=', $this->cliente)->first();


		/*if(!$urlclient || !$urlproyecto){
			return 1;
		}*/
		/*$idDBMenuUrl = PryMenuUrl::where('url', '=', $idMenuUrlCond)
			->where('id_pry_proyecto','=',$this->proy)
			->first();*/



		$idDBMenuUrl = DB::table('pry_menu_urls')
			->join('pry_menu_urls_txt','pry_menu_urls_txt.id_menu_url','=','pry_menu_urls.id')
			->where('pry_menu_urls_txt.id_idioma','=', $this->idioma)
			->where('pry_menu_urls.id_pry_proyecto', '=', $this->proy)
			->where('pry_menu_urls_txt.url', '=', $idMenuUrlCond)
			->select('pry_menu_urls.id')
			->first();

		//
		if(!$idDBMenuUrl){
			$idMenuUrl = 0;
		}else{
			$idMenuUrl = $idDBMenuUrl->id;
		}
		//end

		$pry_modulos = Funciones::getModulos($this->proy, $this->cliente, $idMenuUrl, $this->idioma);

		$urls_lista = Funciones::getInternas($this->idioma,$this->proy);

		$urls = [];

		foreach($urls_lista as $url)
		{
			$tmp['titulo']=$url->titulo;
			$tmp['url']='/'.$url->url;
			array_push($urls,$tmp);
		}

	
		if($idMenuUrl==0)
		{
			if(count($urls_lista)>0) //existen paginas internas
			{
				//obtiene titulo de cabecera principal en array de objetos
				//$menu = Funciones::getTituloCabecera($this->idioma, $this->proy);

				//obtiene titulo de modulos seleccionados como items para el menu
				$menu = Funciones::getMenu($this->proy,$idMenuUrl, $this->idioma);

				$index = [];
			}
			else
			{
				//obtiene titulo de modulos seleccionados como items para el menu
				$menu = Funciones::getMenu($this->proy,$idMenuUrl, $this->idioma);

				$index=[];
			}

		}
		else 
		{
			//obtiene titulo de modulos de la pagina principal, seleccionados como items para el menu
			$items_menu = Funciones::getMenu($this->proy,0, $this->idioma);

			$menu = [];
			$temp = [];
			$index = [];

			foreach ($items_menu as $item) {
				$temp['titulo'] = $item->titulo;
				$temp['url'] = '/#'.str_replace(' ', '', $item->titulo);
				array_push($index, $temp);
			}

		}


		$proyecto = Funciones::getProyecto($this->proy);

		$google_maps_api = 'http://maps.google.com/maps/api/js?key='.$proyecto->google_maps_key;

		$custom_tipografia = Funciones::getTipografia($this->proy);

		return view('modulos.ver.moduloindex')
			->with('pry_modulos', $pry_modulos)
			->with('proyecto', $proyecto)
			->with('menu', $menu)
			->with('index', $index)
			->with('urls', $urls)
			->with('id_menu_url', $idMenuUrl)
			->with('google_maps_api', $google_maps_api)
			->with('idioma', $this->idioma)
			->with('custom_tipografia', $custom_tipografia)
			->with('editar', 0);
	}

	public function getUnos()
	{
		return 2;
	}

	public function getContacto()
	{
		$nombre = 'angel';
		$email = 'agonza@peruyoung.com';
		$telefono = '3333';
		$mensaje = 'pruebas';


		$mail = 'Datos de remitente';
		$mail .= '<br>Nombre: ' . $nombre;
		$mail .= '<br>Email: ' . $email;
		$mail .= '<br>Teléfono: ' . $telefono;
		$mail .= '<br>Mensaje: ' . $mensaje;
		//Titulo
		$titulo = "Formulario web candelaria! - Contáctenos";
		//cabecera
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		//dirección del remitente 
		$headers .= "From: " . $this->correoglobal . "\r\n";

		$ace = mail($this->correoglobal, $titulo, utf8_decode($mail), $headers);

		//return redirect()->back()->with('message','Su mensaje fue enviado');
		return 1;
	}

	public function postFormulariocontacto(Request $request)
	{
		$data = array(
			'name' => $request->input('nombre'),
			'email' => $request->input('email'),
			'phone' => $request->input('telefono'),
			'message' => $request->input('mensaje')
		);
		$rules =
			['name' => 'required',
				'email' => 'required|email',
				'message' => 'required',
			];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {

			$email_proyecto = $request->input('email_proyecto');

			$nombre = $request->input('nombre');
			$email = $request->input('email');
			$telefono = $request->input('telefono');
			$mensaje = $request->input('mensaje');

			$mail = 'Datos de remitente';
			$mail .= '<br>Nombre: ' . $nombre;
			$mail .= '<br>Email: ' . $email;
			$mail .= '<br>Teléfono: ' . $telefono;
			$mail .= '<br>Mensaje: ' . $mensaje;
			//Titulo
			$titulo = "Formulario Contacto";
			//cabecera
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			//dirección del remitente
			$headers .= "From: " . $email_proyecto . "\r\n";

			$ace = mail($email_proyecto, $titulo, utf8_decode($mail), $headers);

			return array(
				'success' => true
			);
		} else {
			return array(
				'success' => false,
				'errors' => $validator->getMessageBag()->toArray()
			);
		}

	}

	public function postMoreinfogaleria(Request $request)
	{
		$data = array(
			'nombreitem' => $request->input('nombreitem'),
			'name' => $request->input('nombre'),
			'email' => $request->input('email'),
			'phone' => $request->input('telefono'),
			'message' => $request->input('mensaje')
		);
		$rules =
			['name' => 'required',
				'email' => 'required|email',
				'message' => 'required',
			];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {

			$email_proyecto = $request->input('email_proyecto');

			$item = $request->input('nombreitem');
			$nombre = $request->input('nombre');
			$email = $request->input('email');
			$telefono = $request->input('telefono');
			$mensaje = $request->input('mensaje');

			$mail = 'Datos de remitente';
			$mail .= '<br>Item: ' . $item;
			$mail .= '<br>Nombre: ' . $nombre;
			$mail .= '<br>Email: ' . $email;
			$mail .= '<br>Teléfono: ' . $telefono;
			$mail .= '<br>Mensaje: ' . $mensaje;
			//Titulo
			$titulo = "Más información sobre: " . $item;
			//cabecera
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			//dirección del remitente
			$headers .= "From: " . $email_proyecto . "\r\n";

			$ace = mail($email_proyecto, $titulo, utf8_decode($mail), $headers);

			return array(
				'success' => true
			);
		} else {
			return array(
				'success' => false,
				'errors' => $validator->getMessageBag()->toArray()
			);
		}

	}
	public function postDetallegaleriaitem(Request $request)
	{
		$iditem = $request->input('id');
		$editable = $request->input('editable');

		$detalle = Funciones::getGaleriaItemDetalleHtml($iditem, $editable, $this->idioma);

		return $detalle;
	}
	public function postFormulariosubscription(Request $request)
	{
		$data = array(
			'email' => $request->input('email'),
		);
		$rules = ['email' => 'required|email'];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {

			$email_proyecto = $request->input('email_proyecto');

			$email = $request->input('email');

			$mail = 'Datos de remitente';
			$mail .= '<br>Email: ' . $email;
			//Titulo
			$titulo = $request->input('titulo');
			//cabecera
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			//dirección del remitente
			$headers .= "From: " . $email_proyecto . "\r\n";

			$ace = mail($email_proyecto, $titulo, utf8_decode($mail), $headers);

			return array(
				'success' => true
			);
		} else {
			return array(
				'success' => false,
				'errors' => $validator->getMessageBag()->toArray()
			);
		}
	}

	public function postFormulariorayo(Request $request)
	{
		$data = array(
			'name' => $request->input('nombre'),
			'email' => $request->input('email'),
			'phone' => $request->input('telefono'),
		);
		$rules =
			['name' => 'required',
				'email' => 'required|email',
				'phone' => 'required'
			];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {

			$email_proyecto = $request->input('email_proyecto');

			$nombre = $request->input('nombre');
			$email = $request->input('email');
			$telefono = $request->input('telefono');
			$direccion = $request->input('direccion');
			$promo = $request->input('promo');

			$mail = 'Datos de remitente';
			$mail .= '<br>Nombre: ' . $nombre;
			$mail .= '<br>Correo: ' . $email;
			$mail .= '<br>Teléfono: ' . $telefono;
			$mail .= '<br>Direccion: ' . $direccion;
			$mail .= '<br>Promo: ' . $promo;
			//Titulo
			$titulo = "Formulario Rayo Jesuita";
			//cabecera
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			//dirección del remitente
			$headers .= "From: " . $email_proyecto . "\r\n";

			$ace = mail($email_proyecto, $titulo, utf8_decode($mail), $headers);

			$idproyecto = $request->input('idproyecto');

			$proyecto = Proyecto::find($idproyecto);

			$contador = $proyecto->contador_formulario +1;

			$proyecto->contador_formulario = $contador;
			$proyecto->save();

			return array(
				'success' => true,
				'contador' => $contador
			);
		} else {
			return array(
				'success' => false,
				'errors' => $validator->getMessageBag()->toArray()
			);
		}

	}
	public function postFormulariojesuita(Request $request)
	{
		$data = array(
			'name' => $request->input('nombre'),
			'email' => $request->input('email'),
			'phone' => $request->input('telefono'),
			'comentarios' => $request->input('comentarios')
		);
		$rules =
			['name' => 'required',
				'email' => 'required|email',
				'phone' => 'required',
			];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {

			$email_proyecto = $request->input('email_proyecto');
			$nombre = $request->input('nombre');
			$email = $request->input('email');
			$telefono = $request->input('telefono');
			$comentarios = $request->input('comentarios');

			$mail = 'Datos de remitente';
			$mail .= '<br>Nombre: ' . $nombre;
			$mail .= '<br>Email: ' . $email;
			$mail .= '<br>Teléfono: ' . $telefono;
			$mail .= '<br>Comentarios: ' . $comentarios;
			//Titulo
			$titulo = "Formulario Jesuitas";
			//cabecera
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			//dirección del remitente
			$headers .= "From: Casitas <".$email_proyecto.">\r\n";

			$ace = mail($email_proyecto, $titulo, utf8_decode($mail), $headers);

			return array(
				'success' => true
			);
		} else {
			return array(
				'success' => false,
				'errors' => $validator->getMessageBag()->toArray()
			);
		}

	}
	public function postSlidergaleria(Request $request)
	{
		$id_galeria_item = $request->input('id_item');
		$id_proyecto = $request->input('id_proyecto');

		$data = Funciones::getSlidergaleriaHtml($id_galeria_item, $id_proyecto);

		return $data;
	}
	public function postFormulariosanfer(Request $request)
	{
		$data = array(
			'name' => $request->input('nombre'),
			'email' => $request->input('email'),
			'phone' => $request->input('telefono'),
			'message' => $request->input('mensaje')
		);
		$rules =
			['name' => 'required',
				'email' => 'required|email',
				'message' => 'required',
			];

		$validator = Validator::make($data, $rules);

		if ($validator->passes()) {

			$email_proyecto = $request->input('email_proyecto');

			$nombre = $request->input('nombre');
			$apellido = $request->input('apellido');
			$empresa = $request->input('empresa');
			$email = $request->input('email');
			$telefono = $request->input('telefono');
			$mensaje = $request->input('mensaje');

			$mail = 'Datos de remitente';
			$mail .= '<br>Nombre: ' . $nombre;
			$mail .= '<br>Apellido: ' . $apellido;
			$mail .= '<br>Empresa: ' . $empresa;
			$mail .= '<br>Email: ' . $email;
			$mail .= '<br>Teléfono: ' . $telefono;
			$mail .= '<br>Mensaje: ' . $mensaje;
			//Titulo
			$titulo = "Formulario Contacto";
			//cabecera
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			//dirección del remitente
			$headers .= "From: " . $email_proyecto . "\r\n";

			$ace = mail($email_proyecto, $titulo, utf8_decode($mail), $headers);

			Funciones::saveConsultas($this->proy, $nombre, $apellido, $empresa, $telefono, $email, $mensaje);

			return array(
				'success' => true
			);
		} else {
			return array(
				'success' => false,
				'errors' => $validator->getMessageBag()->toArray()
			);
		}

	}

	public function postNoticia(Request $request)
	{
		$id = $request->input('id');
		$idioma = $request->input('idioma');

		$noticia = Funciones::getNoticia($id, $idioma);

		return $noticia;
	}

	public function postNoticiasnext6(Request $request)
	{
		$id_proyecto = $request->input('id_proyecto');
		$num = $request->input('num');
		$idioma = $request->input('idioma');

		$noticias = Funciones::getNoticiasnext6($id_proyecto,$num, $idioma);

		return $noticias;
	}
	public function postObtenernoticiaslider(Request $request)
	{
		$id = $request->input('id_noticia');

		$data = PryNoticiaSlider::where('id_noticia', '=', $id)->get();

		return $data;
	}
	public function postObtenercurso(Request $request)
	{
		$curso = PryCursosCurso::where('id', '=', $request->input('id_curso'))->first();

		return $curso;
	}
	public function postSetidioma(Request $request)
	{
		$idioma = $request->input('idioma');

		Cookie::queue('idioma', $idioma, 480);
	}
}

