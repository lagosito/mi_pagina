<?php

namespace App\Http\Controllers;

use App\PryMenuUrl;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Auth;

use App;
use App\Modulo;
use App\ModuloEstructura;
use App\Clientes;
use App\Proyecto;
use App\PryModulo;
use App\PryModuloEstructura;
use App\Idioma;
use DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\File;
use App\Console\Commands\Funciones;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\User;


use Validator;

class FrontVer extends BaseController
{
	public $correoglobal = "jgonzales@peruyoung.com";
	public $proy;
	public $cliente;
	public $idioma =1;

	public function __construct(Request $request)
	{

		if(Cookie::get('idioma')!='')
		{
			$this->idioma = Cookie::get('idioma');
		}
		$myidioma = Idioma::where('id','=',$this->idioma)
					->select('siglas')
					->first();

		App::setLocale($myidioma->siglas);
	}

	public function getProyecto(Request $request, $idCliente, $idProy, $idMenuUrlCond =0)
	{

		//echo trans('passwords.reset');
		//search  url to ides
		$urlproyecto = Proyecto::where('url_proyecto', '=', $idProy)->first();
		$urlclient = Clientes::where('url_cliente', '=', $idCliente)->first();



		if(!$urlclient || !$urlproyecto){
			return 1;
		}

		$idDBMenuUrl = DB::table('pry_menu_urls')
			->join('pry_menu_urls_txt','pry_menu_urls_txt.id_menu_url','=','pry_menu_urls.id')
			->where('pry_menu_urls_txt.id_idioma','=', $this->idioma)
			->where('pry_menu_urls.id_pry_proyecto', '=',$urlproyecto->id)
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

		$pry_modulos = Funciones::getModulos($urlproyecto->id, $urlclient->id, $idMenuUrl, $this->idioma);

		$urls_lista = Funciones::getInternas($this->idioma,$urlproyecto->id);
		$urls = [];

		foreach($urls_lista as $url)
		{
			$tmp['titulo']=$url->titulo;
			$tmp['url']=$request->segment(1).'/'.$urlclient->url_cliente.'/'.$urlproyecto->url_proyecto.'/'.$url->url;
			array_push($urls,$tmp);
		}

	
		if($idMenuUrl==0)
		{
			if(count($urls_lista)>0) //existen paginas internas
			{
				//obtiene titulo de cabecera principal en array de objetos
				//$menu = Funciones::getTituloCabecera($this->idioma, $urlproyecto->id);

				//obtiene titulo de modulos seleccionados como items para el menu
				$menu = Funciones::getMenu($urlproyecto->id,$idMenuUrl, $this->idioma);

				$index = [];
			}
			else
			{
				//obtiene titulo de modulos seleccionados como items para el menu
				$menu = Funciones::getMenu($urlproyecto->id,$idMenuUrl, $this->idioma);

				$index=[];
			}

		}
		else 
		{
			//obtiene titulo de modulos de la pagina principal, seleccionados como items para el menu
			$items_menu = Funciones::getMenu($urlproyecto->id,0, $this->idioma);

			$menu = [];
			$temp = [];
			$index = [];

			foreach ($items_menu as $item) {
				$temp['titulo'] = $item->titulo;
				$temp['url'] = $request->segment(1).'/'.$urlclient->url_cliente.'/'.$urlproyecto->url_proyecto.'#'.str_replace(' ', '', $item->titulo);
				array_push($index, $temp);
			}

			/*$principal = Funciones::getTituloCabecera($this->idioma, $idProy);

			$index['titulo'] = $principal[0]->titulo;
			$index['url'] = $request->segment(1).'/'.$request->segment(2).'/'.$idProy.'/'.$idCliente;*/

		}

		$proyecto = Funciones::getProyecto($urlproyecto->id);

		$google_maps_api = 'http://maps.google.com/maps/api/js?key=AIzaSyDtKyRpTeyekTZfban4mYQpQDIcLwdv3kY';

		$custom_tipografia = Funciones::getTipografia($urlproyecto->id);

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
	public function postDetallegaleriaitem(Request $request)
	{
		$iditem = $request->input('id');
		$editable = $request->input('editable');
		$detalle = Funciones::getGaleriaItemDetalleHtml($iditem, $editable, $this->idioma);

		return $detalle;

	}

	/*public function postReadgaleriatabs(Request $request)
	{
		$id_modulo = $request->input('id_modulo');
		$tabs = Funciones::getGaleriaTabsHtml($id_modulo);

		return $tabs;
	}

	public function postObtenerimgslider(Request $request)
	{
		$id = $request->input('id_modulo');
		$id_proyecto = $request->input('id_proyecto');
		$data = Funciones::getImagenesSliderHtml($id, $id_proyecto);

		return $data;
	}
*/

	public function postObtenertextoslider(Request $request)
	{
		$id = $request->input('id_modulo');
		$data = Funciones::getTextoSliderHtml($id);

		return $data;
	}



}

