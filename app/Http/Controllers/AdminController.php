<?php

namespace App\Http\Controllers;

use App\PryCursosCategoria;
use App\PryCursosCategoriaTxt;
use App\PryCursosCurso;
use App\PryCursosCursoTxt;
use App\PryCursosSector;
use App\PryCursosSectorTxt;
use App\PryGaleriaItem;
use App\PryGaleriaItemTxt;
use App\PryGaleriaTab;
use App\PryGaleriaTabTxt;
use App\PryMenuUrl;
use App\PryMenuUrlTxt;
use App\PryModuloEstructuraImg;
use App\PryModuloEstructuraTxt;
use App\PryModuloTxt;
use App\PryNoticia;
use App\PryNoticiaTxt;
use App\PrySlider;
use App\PrySliderTxt;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Auth;

use App\Modulo;
use App\ModuloEstructura;
use App\Proyecto;
use App\PryModulo;
use App\PryModuloEstructura;

use DB;
use App\Console\Commands\Funciones;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;


use App\User;


use Validator;

class AdminController extends BaseController
{
	/*use DispatchesJobs, ValidatesRequests;*/
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('esadmin');
	}

	public function getIndex()
	{
		return view('admin.principal');
	}
	public function getNmodulos()
	{
		return view('admin.nmodulo');
	}
	public function postSavemodulo(Request $request)
	{
			$modulo = new Modulo();
			$modulo->tipo_id = $request->input('tModulo');
			$modulo->titulo = $request->input('titulo');
			$modulo->modulo_blade = $request->input('blade');
			$modulo->save();
			return $modulo->id;
		
	}
	public function postSvmodulos(Request $request)
	{

			$modulo_estructura = new ModuloEstructura();
			$modulo_estructura->id_modulo = $request->input('myid');
			$modulo_estructura->titulo_x = $request->input('dataposx');
			$modulo_estructura->titulo_y = $request->input('dataposy');
			$modulo_estructura->comentario_x = $request->input('dataposxC');
			$modulo_estructura->comentario_y = $request->input('dataposyC');
			$modulo_estructura->save();
	}

	public function getMigraridiomas()
	{
		/*DB::beginTransaction();

		try {
			$curso_categorias = PryCursosCategoria::get();

			foreach($curso_categorias as $item)
			{
				$curso_categorias_txt = new PryCursosCategoriaTxt();
				$curso_categorias_txt->id_cursos_categoria = $item->id;
				$curso_categorias_txt->id_idioma = 1;
				$curso_categorias_txt->nombre = $item->nombre;
				$curso_categorias_txt->save();
			}

			$cursos = PryCursosCurso::get();

			foreach($cursos as $item)
			{
				$curso_txt = new PryCursosCursoTxt();
				$curso_txt->id_curso = $item->id;
				$curso_txt->id_idioma = 1;
				$curso_txt->titulo = $item->titulo;
				$curso_txt->texto1 = $item->texto1;
				$curso_txt->texto2 = $item->texto2;
				$curso_txt->pdf = $item->pdf;
				$curso_txt->save();
			}

			$curso_sectores = PryCursosSector::get();

			foreach($curso_sectores as $item)
			{
				$curso_sector_txt = new PryCursosSectorTxt();
				$curso_sector_txt->id_cursos_sector = $item->id;
				$curso_sector_txt->id_idioma = 1;
				$curso_sector_txt->nombre = $item->nombre;
				$curso_sector_txt->save();
			}

			$galeria_items = PryGaleriaItem::get();

			foreach($galeria_items as $item)
			{
				$galeria_item_txt = new PryGaleriaItemTxt();
				$galeria_item_txt->id_galeria_item = $item->id;
				$galeria_item_txt->id_idioma = 1;
				$galeria_item_txt->item = $item->item;
				$galeria_item_txt->texto = $item->texto;
				$galeria_item_txt->save();
			}

			$galeria_tab = PryGaleriaTab::get();

			foreach($galeria_tab as $item)
			{
				$galeria_tab_txt = new PryGaleriaTabTxt();
				$galeria_tab_txt->id_galeria_tab = $item->id;
				$galeria_tab_txt->id_idioma = 1;
				$galeria_tab_txt->tab = $item->tab;
				$galeria_tab_txt->save();
			}

			$menu_url = PryMenuUrl::get();

			foreach($menu_url as $item)
			{
				$menu_url_txt = new PryMenuUrlTxt();
				$menu_url_txt->id_menu_url = $item->id;
				$menu_url_txt->id_idioma = 1;
				$menu_url_txt->titulo = $item->titulo;
				$menu_url_txt->url = $item->url;
				$menu_url_txt->save();
			}

			$estructuras = PryModuloEstructura::get();

			foreach($estructuras as $item)
			{
				if(isset($item->imagen) || $item->imagen_movil!='')
				{
					$estructura_img = new PryModuloEstructuraImg();
					$estructura_img->imagen = $item->imagen;
					$estructura_img->imagen_movil = $item->imagen_movil;
					$estructura_img->save();

					$itemf = PryModuloEstructura::find($item->id);
					$itemf->id_pry_modulo_estructura_img = $estructura_img->id;
					$itemf->id_idioma = 1;
					$itemf->save();
				}

			}

			$modulos = PryModulo::get();

			foreach($modulos as $item)
			{
				$modulo_txt = new PryModuloTxt();
				$modulo_txt->id_pry_modulo = $item->id;
				$modulo_txt->id_idioma = 1;
				$modulo_txt->titulo = $item->titulo;
				$modulo_txt->save();
			}

			$noticias = PryNoticia::get();

			foreach($noticias as $item)
			{
				$noticia_txt = new PryNoticiaTxt();
				$noticia_txt->id_noticia = $item->id;
				$noticia_txt->id_idioma = 1;
				$noticia_txt->titulo = $item->titulo;
				$noticia_txt->texto = $item->texto;
				$noticia_txt->introduccion = $item->introduccion;
				$noticia_txt->save();
			}

			$slider = PrySlider::get();

			foreach($slider as $item)
			{
				if($item->texto!='' || $item->texto2!='')
				{
					$slider_txt = new PrySliderTxt();
					$slider_txt->id_pry_slider = $item->id;
					$slider_txt->id_idioma = 1;
					$slider_txt->texto = $item->texto;
					$slider_txt->texto2 = $item->texto2;
					$slider_txt->save();
				}
			}

			DB::commit();
			return 'Successful migration';

		}
		catch (\Exception $e) {

			DB::rollback();

			return $e->getMessage();
		}

*/

	}
}

