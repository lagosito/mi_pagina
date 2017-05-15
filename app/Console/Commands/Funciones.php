<?php

namespace App\Console\Commands;

use App\Agencia;
use App\ClienteModulo;
use App\Clientes;
use App\ClienteVenta;
use App\ClienteVentaProducto;
use App\CombinacionColores;
use App\ModuloCombinacionColores;
use App\ModuloComplemento;
use App\ProyectoIdioma;
use App\PryCombinacionColores;
use App\PryConsulta;
use App\PryCursosCategoria;
use App\PryCursosCategoriaTxt;
use App\PryCursosCurso;
use App\PryCursosCursoTxt;
use App\PryCursosSector;
use App\PryCursosSectorTxt;
use App\PryEcomerceGaleriaProducto;
use App\PryGaleriaItem;
use App\PryGaleriaItemDetalle;
use App\PryGaleriaItemSlider;
use App\PryGaleriaItemTxt;
use App\PryGaleriaTab;
use App\PryGaleriaTabTxt;
use App\PryGoogleMap;
use App\PryMenuUrl;
use App\PryMenuUrlTxt;
use App\PryModuloEstructuraImg;
use App\PryModuloEstructuraTxt;
use App\PryModuloTxt;
use App\PryNoticia;
use App\PryNoticiaSlider;
use App\PryNoticiaTxt;
use App\PryRedesSociales;
use App\PrySlider;
use App\PrySliderTxt;
use App\PryTipografia;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

use DB;
use Auth;
use App\Modulo;
use App\ModuloEstructura;
use App\PryModulo;
use App\PryModuloEstructura;

use App\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
//png jpg

use App\Tinify\Tinify;
class Funciones extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    static function getModulos($idProy, $idCliente, $idMenuUrl, $idioma)
    {
        if($idMenuUrl==0)
        {
            $idCabeceraInterna=0;
        }
        else
        {
            $id_url = PryMenuUrl::where('id_pry_proyecto', '=', $idProy)->select('id')->first();
            $idCabeceraInterna = $id_url->id;
        }

        $modulos = DB::table('pry_modulo')
            ->join('pry_modulo_txt','pry_modulo_txt.id_pry_modulo','=','pry_modulo.id')
            ->where('pry_modulo.id_proyecto','=',$idProy)
            ->where('pry_modulo.id_menu_url','=',$idMenuUrl)
            ->where('pry_modulo_txt.id_idioma','=',$idioma)
            ->orWhere(function ($query) use ($idProy, $idCabeceraInterna, $idioma) {
                $query->where('pry_modulo.id_proyecto','=',$idProy)
                    ->where('pry_modulo.tipo_id','=',1)
                    ->where('pry_modulo_txt.id_idioma','=',$idioma)
                    ->where('pry_modulo.id_menu_url', '=',$idCabeceraInterna);
            })
            ->orWhere(function ($query) use ($idProy, $idioma) {
                $query->where('pry_modulo.id_proyecto','=',$idProy)
                    ->where('pry_modulo_txt.id_idioma','=',$idioma)
                    ->where('pry_modulo.tipo_id','=',3);
            })
            ->select('pry_modulo.id as idesPR',
                'pry_modulo.tipo_id',
                'pry_modulo.id_proyecto',
                'pry_modulo.id_md_modulo',
                'pry_modulo.id_menu_url',
                'pry_modulo.orden',
                'pry_modulo_txt.titulo',
                'pry_modulo.comentario',
                'pry_modulo.logo',
                'pry_modulo.logo_texto',
                'pry_modulo.imagen_fondo',
                'pry_modulo.modulo_blade',
                'pry_modulo.css_nombre',
                'pry_modulo.custom_menu',
                'pry_modulo.item_menu',
                'pry_modulo.link',
                'pry_modulo_txt.id_idioma')
            ->orderBy('pry_modulo.tipo_id')
            ->orderBy('pry_modulo.orden')
            ->groupBy('pry_modulo.id')
            ->get();

        return $modulos;
    }
    static function getMenu($idProy, $idMenuUrl, $idioma)
    {
        //obtiene titulo de modulos
        $menu = DB::table('pry_modulo')
            ->join('pry_modulo_txt','pry_modulo_txt.id_pry_modulo','=','pry_modulo.id')
            ->where('pry_modulo.id_proyecto','=',$idProy)
            ->where('pry_modulo.id_menu_url','=',$idMenuUrl)
            ->where('pry_modulo.item_menu','=',1)
            ->where('pry_modulo_txt.id_idioma','=',$idioma)
            ->orWhere(function ($query) use ($idProy, $idioma) {
                $query->where('pry_modulo.id_proyecto','=',$idProy)
                    ->where('pry_modulo.tipo_id','=',1)
                    ->where('pry_modulo.item_menu','=',1)
                    ->where('pry_modulo_txt.id_idioma','=',$idioma);
            })
            ->orWhere(function ($query) use ($idProy, $idioma) {
                $query->where('pry_modulo.id_proyecto','=',$idProy)
                    ->where('pry_modulo.tipo_id','=',3)
                    ->where('pry_modulo.item_menu','=',1)
                    ->where('pry_modulo_txt.id_idioma','=',$idioma);
            })
            ->select('pry_modulo_txt.titulo', 'pry_modulo.tipo_id','pry_modulo.orden')
            ->orderBy('pry_modulo.tipo_id')
            ->orderBy('pry_modulo.orden')
            ->get();

        return $menu;
    }
    static function getProyecto($idProy)
    {
        $tipografia_personalizada = Funciones::getTipografia($idProy);
        $pry = Proyecto::where('id', '=', $idProy)->select('id', 'tipografia')->first();

        if(isset($tipografia_personalizada) and $pry->tipografia=='0') {
            $proyecto = DB::table('pry_proyecto')
                ->leftjoin('pry_tipografia_personalizada', 'pry_tipografia_personalizada.id_proyecto', '=', 'pry_proyecto.id')
                ->select('pry_proyecto.*', 'pry_tipografia_personalizada.titulo as tipografia_titulos', 'pry_tipografia_personalizada.parrafo as tipografia_parrafos')
                ->where('pry_proyecto.id', '=', $idProy)
                ->where('pry_tipografia_personalizada.seleccionada','=',1)
                ->first();
        }
        else{
            $proyecto = DB::table('pry_proyecto')
                ->leftjoin('dat_tipografia', 'dat_tipografia.id', '=', 'pry_proyecto.tipografia')
                ->select('pry_proyecto.*', 'dat_tipografia.titulo as tipografia_titulos', 'dat_tipografia.parrafo as tipografia_parrafos')
                ->where('pry_proyecto.id', '=', $idProy)
                ->first();
        }


        return $proyecto;
    }
    static function clean($string)
    {
        $utf8 = array(
            '/[áàâãªä]/u'   =>   'a',
            '/[ÁÀÂÃÄ]/u'    =>   'A',
            '/[ÍÌÎÏ]/u'     =>   'I',
            '/[íìîï]/u'     =>   'i',
            '/[éèêë]/u'     =>   'e',
            '/[ÉÈÊË]/u'     =>   'E',
            '/[óòôõºö]/u'   =>   'o',
            '/[ÓÒÔÕÖ]/u'    =>   'O',
            '/[úùûü]/u'     =>   'u',
            '/[ÚÙÛÜ]/u'     =>   'U',
            '/ç/'           =>   'c',
            '/Ç/'           =>   'C',
            '/ñ/'           =>   'n',
            '/Ñ/'           =>   'N',
            '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
            '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote '/[“”«»„]/u'    =>   ' ', // Double quote
            '/ /'           =>   '-',
        );
        return preg_replace(array_keys($utf8), array_values($utf8), $string);
    }
    static function nuevoProyecto(Request $request)
    {
        $cliente_existente = $request->input('cliente_existente');
        $id_cliente = $request->input('id_cliente');
        $id_usuario = $request->input('id_usuario');
        $usuario_existente = $request->input('usuario_existente');

        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $rpassword = $request->input('rpassword');

        $idcabecera = $request->input('idcabecera');
        $contseleccionados = $request->input('cont_seleccionados');
        $idfooter = $request->input('idfooter');

        if($cliente_existente=='0')
        {
            if($usuario_existente=='0')
            {
                $usuario = new User();
                $usuario->username = $username;
                $usuario->email = $email;

                if($password== $rpassword)
                {
                    $usuario->password = bcrypt($password);
                }

                $usuario->save();

                $cliente = new Clientes();
                $cliente->fill($request->all());
                $cliente->id_usuario = $usuario->id;
                $cliente->url_cliente = $usuario->username;
                $cliente->save();
            }
            else
            {
                $usuario = User::find($id_usuario);
                $usuario->username = $username;
                $usuario->email = $email;
                $usuario->save();

                $cliente = new Clientes();
                $cliente->fill($request->all());
                $cliente->url_cliente = $usuario->username;
                $cliente->save();
            }

        }
        else
        {
            $usuario = User::find($id_usuario);
            $usuario->username = $username;
            $usuario->email = $email;
            $usuario->save();

            $cliente = Clientes::find($id_cliente);
            $cliente->fill($request->all());
            $cliente->url_cliente = $usuario->username;
            $cliente->save();

        }

        $total_modulos=sizeof($contseleccionados);

        if($idcabecera!='0')
        {
            $total_modulos= $total_modulos+1;
        }
        if($idfooter!='0')
        {
            $total_modulos= $total_modulos+1;
        }

        $proyecto = new Proyecto();
        $proyecto->fill($request->all());
        $proyecto->id_cliente = $cliente->id;
        $proyecto->copyright = '2016 STUDIO TIGRES. All rights reserved';
        $proyecto->id_user_registrador = Auth::user()->id;
        $proyecto->url_proyecto= Funciones::clean($proyecto->nombre_proyecto);

        if($total_modulos>=8)
        {
            $proyecto->ubicacion_menu = 2;
        }
        else{
            $proyecto->ubicacion_menu = 4;
        }

        $proyecto->save();

        $idioma = new ProyectoIdioma();
        $idioma->id_proyecto = $proyecto->id;
        $idioma->id_idioma = 1;
        $idioma->save();

        if (!File::isDirectory('upload/'.$proyecto->id))
        {
            File::makeDirectory('upload/'.$proyecto->id);

            if (!File::isDirectory('upload/'.$proyecto->id.'/galeria'))
            {
                File::makeDirectory('upload/' . $proyecto->id . '/galeria');
            }
            if (!File::isDirectory('upload/'.$proyecto->id.'/slider'))
            {
                File::makeDirectory('upload/'.$proyecto->id.'/slider');
            }
            if (!File::isDirectory('upload/'.$proyecto->id.'/contenido'))
            {
                File::makeDirectory('upload/'.$proyecto->id.'/contenido');
            }
        }

        if($idcabecera!='0')
        {
            Funciones::ClonarModulo($idcabecera, $proyecto->id);
        }
        else{
            Funciones::crearModulovacio($proyecto->id, 1);
        }

        for($i=0; $i< sizeof($contseleccionados) ; $i++)
        {
            Funciones::Clonarmodulo($contseleccionados[$i], $proyecto->id);
        }

        if($idfooter!='0')
        {
            Funciones::ClonarModulo($idfooter, $proyecto->id);
        }
        else {
            Funciones::crearModulovacio($proyecto->id, 3);
        }

        return $proyecto;
        //dd($id_cliente);

    }
    static function deleteProyecto($id)
    {

        $modulos = PryModulo::where('id_proyecto','=', $id)->get();

        foreach($modulos as $modulo)
        {
            $estructuras = PryModuloEstructura::where('id_modulo','=', $modulo->id)->get();
            $complementos = ModuloComplemento::where('id_md_modulo','=', $modulo->id_md_modulo)->get();

            PryCombinacionColores::where('id_pry_modulo','=', $modulo->id)->delete();

            foreach($estructuras as $estructura)
            {
                $struct = PryModuloEstructura::find($estructura->id);
                $struct->delete();
            }
            foreach($complementos as $complemento)
            {
                switch($complemento->id_complemento)
                {
                    case 1 : //red social
                        PryRedesSociales::where('id_pry_modulo', '=', $modulo->id)->delete();
                        break;
                    case 2 : //galeria
                        $galeriaTabs = PryGaleriaTab::where('id_pry_modulo','=', $modulo->id)->get();
                        foreach($galeriaTabs as $tab)
                        {
                            $galeriaItems = PryGaleriaItem::where('id_pry_galeria_tab','=', $tab->id)->get();
                            foreach($galeriaItems as $item)
                            {
                                PryGaleriaItemDetalle::where('id_pry_galeria_item','=', $item->id)->delete();
                                PryGaleriaItemSlider::where('id_pry_galeria_item','=', $item->id)->delete();
                                PryEcomerceGaleriaProducto::where('id_prod_galeria', '=', $item->id)->delete();
                                $item->delete();
                            }
                            $tab->delete();
                        }
                        break;
                    case 3: //slider
                        PrySlider::where('id_pry_modulo', '=', $modulo->id)->delete();
                        break;
                    case 4: //google-maps
                        PryGoogleMap::where('id_pry_modulo', '=', $modulo->id)->delete();
                        break;
                    case 5: //slidertexto
                        PrySlider::where('id_pry_modulo', '=', $modulo->id)->delete();
                        break;
                    default:
                        break;
                }
            }
            $modulo->delete();
        }
        PryMenuUrl::where('id_pry_proyecto','=', $id)->delete();

        $ventas = ClienteVenta::where('id_proyecto','=', $id)->get();

        foreach($ventas as $venta)
        {
            ClienteVentaProducto::where('id_shop_cliente', '=', $venta->id)->delete();
            $venta->delete();
        }

        $proyecto = Proyecto::withTrashed()->find($id);
        $proyecto->forceDelete();

        File::deleteDirectory('upload/'.$id);
    }

    static function eliminarSubPagina($id){
        
        $modulos = PryModulo::where('id_menu_url','=', $id)->get();

        foreach($modulos as $modulo)
        {
            $estructuras = PryModuloEstructura::where('id_modulo','=', $modulo->id)->delete();
            $complementos = ModuloComplemento::where('id_md_modulo','=', $modulo->id_md_modulo)->get();

            PryCombinacionColores::where('id_pry_modulo','=', $modulo->id)->delete();

            foreach($estructuras as $estructura)
            {
                $struct = PryModuloEstructura::find($estructura->id);
                $struct->textos()->delete();
                $struct->delete();
            }
            $modulo->textos()->delete();

            foreach($complementos as $complemento)
            {
                switch($complemento->id_complemento)
                {
                    case 1 : //red social
                        PryRedesSociales::where('id_pry_modulo', '=', $modulo->id)->delete();
                        break;
                    case 2 : //galeria
                        $galeriaTabs = PryGaleriaTab::where('id_pry_modulo','=', $modulo->id)->get();
                        foreach($galeriaTabs as $tab)
                        {
                            $galeriaItems = PryGaleriaItem::where('id_pry_galeria_tab','=', $tab->id)->get();
                            foreach($galeriaItems as $item)
                            {
                                PryGaleriaItemDetalle::where('id_pry_galeria_item','=', $item->id)->delete();
                                File::delete('upload/'.$modulo->id_proyecto.'/galeria/'.$item->imagen);

                                PryGaleriaItemTxt::where('id_galeria_item','=', $item->id)->delete();

                                $sliders = PryGaleriaItemSlider::where('id_pry_galeria_item')->get();
                                foreach($sliders as $img)
                                {
                                    File::delete('upload/'.$modulo->id_proyecto.'/galeria/'.$img->imagen);
                                    $img->delete();
                                }
                                $item->delete();
                            }
                            PryGaleriaTabTxt::where('id_galeria_tab', '=', $tab->id)->delete();

                            $tab->delete();
                        }
                        break;
                    case 3: //slider
                        $sliders = PrySlider::where('id_pry_modulo', '=', $modulo->id)->get();
                        foreach($sliders as $img)
                        {
                            File::delete('upload/'.$modulo->id_proyecto.'/slider/'.$img->imagen);
                            $img->delete();
                        }
                        break;
                    case 4://google map
                        PryGoogleMap::where('id_pry_modulo', '=', $modulo->id)->delete();
                        break;
                    case 5://slider texto
                        $sliders = PrySlider::where('id_pry_modulo', '=', $modulo->id)->get();
                        foreach($sliders as $item)
                        {
                            $item->textos()->delete();
                            $item->delete();
                        }

                        break;
                    case 6://noticias
                        break;
                    case 7://slider img texto
                        $sliders = PrySlider::where('id_pry_modulo', '=', $modulo->id)->get();
                        foreach($sliders as $img)
                        {
                            File::delete('upload/'.$modulo->id_proyecto.'/slider/'.$img->imagen);
                            $img->textos()->delete();
                            $img->delete();
                        }
                        break;
                    case 8://sectores
                        break;
                    default:
                        break;
                }
            }
            $modulo->delete();
        }
        PryMenuUrl::find($id)->delete();

    }
    static function ModulosDtll($id, $idioma)
    {
        $estructura = DB::table('pry_modulo_estructura')
            ->leftjoin('pry_modulo_estructura_img', 'pry_modulo_estructura_img.id', '=', 'pry_modulo_estructura.id_pry_modulo_estructura_img')
            ->where('pry_modulo_estructura.id_modulo', '=', $id)
            ->where('pry_modulo_estructura.id_idioma', '=', $idioma)
            ->select('pry_modulo_estructura.id', 'pry_modulo_estructura.id_modulo', 'pry_modulo_estructura.id_idioma',
                'pry_modulo_estructura.titulo',
                'pry_modulo_estructura.subtitulo',
                'pry_modulo_estructura.comentario',
                'pry_modulo_estructura_img.imagen',
                'pry_modulo_estructura_img.imagen_movil',
                'pry_modulo_estructura.video',
                'pry_modulo_estructura.url',
                'pry_modulo_estructura.url_texto',
                'pry_modulo_estructura.es_url_externo')
            ->get();

        return $estructura;
    }
    static function  crearModulovacio($idproyecto, $tipo)
    {
        $nuevomodulo= new PryModulo();
        $nuevomodulo->tipo_id = $tipo;
        $nuevomodulo->id_proyecto = $idproyecto;
        $nuevomodulo->id_md_modulo = 0;
        $nuevomodulo->id_menu_url = 0;
        $nuevomodulo->orden = 0;
        $nuevomodulo->comentario = '';
        $nuevomodulo->logo_texto = '';
        $nuevomodulo->modulo_blade = 'modulo_vacio';
        $nuevomodulo->css_nombre = '';
        $nuevomodulo->save();

        $idiomas = ProyectoIdioma::where('id_proyecto', '=', $idproyecto)->get();

        foreach($idiomas as $idioma)
        {
            $textos= new PryModuloTxt();
            $textos->id_pry_modulo = $nuevomodulo->id;
            $textos->id_idioma = $idioma->id_idioma;
            if($tipo ==1)
            {
                $textos->titulo = 'Cabecera';
            }
            if($tipo == 3)
            {
                $textos->titulo = 'Pie';
            }
            $textos->save();
        }

    }
    static function Clonarmodulo($idmodulo, $idproyecto, $idMenuUrl=0)
    {
        $modulo = Modulo::where('id', '=', $idmodulo)->first();
        $complementos = ModuloComplemento::where('id_md_modulo','=', $idmodulo)->get();

        $estructura = ModuloEstructura::where('id_modulo', '=', $idmodulo)->get();


        $nuevomodulo= new PryModulo();
        $nuevomodulo->tipo_id = $modulo->tipo_id;
        $nuevomodulo->id_proyecto = $idproyecto;
        $nuevomodulo->id_md_modulo = $modulo->id;
        $nuevomodulo->id_menu_url = $idMenuUrl;
        $nuevomodulo->orden = $modulo->orden;
        $nuevomodulo->comentario = $modulo->comentario;
        $nuevomodulo->logo_texto = $modulo->logo_texto;
        $nuevomodulo->color_fondo = $modulo->color_fondo;
        $nuevomodulo->custom_menu = $modulo->custom_menu;
        $nuevomodulo->item_menu = 1;

        if($modulo->logo!='')
        {
            if(File::exists('img/'.$modulo->logo))
            {
                $file = 'img/'.$modulo->logo;
                $dest = 'upload/'.$idproyecto.'/contenido/'.$idproyecto.$modulo->logo;

                File::copy($file, $dest);

                $nuevomodulo->logo = $idproyecto.$modulo->logo;
            }
        }

        if($modulo->imagen_fondo!='')
        {
            if(File::exists('img/'.$modulo->imagen_fondo))
            {
                $file = 'img/'.$modulo->imagen_fondo;
                $dest = 'upload/'.$idproyecto.'/contenido/'.$idproyecto.$modulo->imagen_fondo;

                File::copy($file, $dest);

                $nuevomodulo->imagen_fondo = $idproyecto.$modulo->imagen_fondo;
            }
        }

        $nuevomodulo->modulo_blade = $modulo->modulo_blade;
        $nuevomodulo->css_nombre = $modulo->css_nombre;
        $nuevomodulo->save();

        $idiomas = ProyectoIdioma::where('id_proyecto', '=', $idproyecto)->get();

        foreach($idiomas as $idioma)
        {
            $textos= new PryModuloTxt();
            $textos->id_pry_modulo = $nuevomodulo->id;
            $textos->id_idioma = $idioma->id_idioma;
            $textos->titulo = $modulo->titulo;
            $textos->save();

        }

        $combinacionColores = ModuloCombinacionColores::where('id_md_modulo','=', $idmodulo)->first();

        $nueva_comb_colores = new PryCombinacionColores();
        $nueva_comb_colores->id_pry_modulo = $nuevomodulo->id;
        $nueva_comb_colores->fondo = $combinacionColores->fondo;
        $nueva_comb_colores->titulo = $combinacionColores->titulo;
        $nueva_comb_colores->subtitulo = $combinacionColores->subtitulo;
        $nueva_comb_colores->comentario = $combinacionColores->comentario;
        $nueva_comb_colores->color_boton = $combinacionColores->color_boton;
        $nueva_comb_colores->color_menu = $combinacionColores->color_menu;
        $nueva_comb_colores->color_menucat = $combinacionColores->color_menucat;
        $nueva_comb_colores->color_menucatfondo = $combinacionColores->color_menucatfondo;
        $nueva_comb_colores->save();



        foreach($complementos as $complemento)
        {
            switch($complemento->id_complemento)
            {
                case 1 : //red social
                    if($idmodulo==36 || $idmodulo==35 || $idmodulo==59)
                    {
                        $i=4;
                    }
                    else
                    {
                        if($idmodulo==69)
                        {
                            $i=5;
                        }
                        else{
                            $i=3;
                        }

                    }
                    $redessociales = DB::table('dat_red_social')->take($i)->get();

                    foreach($redessociales as $social)
                    {
                        $nuevo = new PryRedesSociales();
                        $nuevo->id_pry_modulo = $nuevomodulo->id;
                        $nuevo->id_red_social = $social->id;
                        $nuevo->icono = $social->icono;
                        $nuevo->url = '';
                        $nuevo->save();
                    }
                break;

                case 2 : //galeria

                    $nuevotab = new PryGaleriaTab();
                    $nuevotab->id_pry_modulo = $nuevomodulo->id;
                    $nuevotab->save();

                    foreach($idiomas as $idioma)
                    {
                        $texto = new PryGaleriaTabTxt();
                        $texto->id_galeria_tab = $nuevotab->id;
                        $texto->id_idioma = $idioma->id_idioma;
                        $texto->tab = 'Lorem';
                        $texto->save();
                    }

                break;

                case 3: //slider
                    if(File::exists('img/'.$modulo->modulo_blade.'slider.jpg'))
                    {
                        $file = 'img/'.$modulo->modulo_blade.'slider.jpg';
                        $dest = 'upload/'.$idproyecto.'/slider/'.$modulo->modulo_blade.'sliderdefault.jpg';

                        File::copy($file, $dest);

                        $slider = new PrySlider();
                        $slider->id_pry_modulo = $nuevomodulo->id;
                        $slider->imagen = $modulo->modulo_blade.'sliderdefault.jpg';
                        $slider->save();
                    }
                break;

                case 4: //Google maps
                    $maps = new PryGoogleMap();
                    $maps->id_pry_modulo = $nuevomodulo->id;
                    $maps->direccion = 'Eifflerstrabe 43 22769 Hamburg Germany';
                    $maps->longitud = '9.960110799999939';
                    $maps->latitud = '53.562561';
                    $maps->save();
                    break;

                default:
                case 5: //slider textos
                    $slider = new PrySlider();
                    $slider->id_pry_modulo = $nuevomodulo->id;
                    $slider->save();

                    foreach($idiomas as $idioma)
                    {
                        $texto = new PrySliderTxt();
                        $texto->id_pry_slider = $slider->id;
                        $texto->id_idioma = $idioma->id_idioma;
                        $texto->texto = '<p><b>NUESTROS MENSAJES</b></p><p><br></p><p>Nullam eget turpis vitae lacus maximus dictum et ac arcu. Fusce sit amet blandit ipsum. Proin sodales massa vitae nulla lobortis venenatis. Vestibulum finibus, justo sed tristique volutpat, dolor ante ultrices metus, eget tempor velit nisi at mi. In et augue aliquam, congue ex nec, rhoncus libero. Quisque cursus ipsum sed rhoncus bibendum. Duis eu mi urna. Integer hendrerit cursus mauris, in egestas sapien vestibulum sed. Nulla facilisi. Pellentesque eget enim quis elit varius efficitur. Fusce non dapibus tortor. Fusce mattis libero non diam maximus, ac eleifend felis malesuada.<br></p>';
                        $texto->save();
                    }
                    break;

                case 6: //noticias
                    for($i=0; $i<3; $i++)
                    {
                        $noticia = new PryNoticia();
                        $noticia->id_pry_proyecto = $idproyecto;
                        $noticia->destacado = 1;

                        if(File::exists('img/'.$modulo->modulo_blade.'_noticia.jpg'))
                        {
                            $file = 'img/'.$modulo->modulo_blade.'_noticia.jpg';
                            $dest = 'upload/'.$idproyecto.'/contenido/'.$modulo->modulo_blade.'noticia'.$i.'.jpg';

                            File::copy($file, $dest);

                            $noticia->imagen = $modulo->modulo_blade.'noticia'.$i.'.jpg';
                        }

                        $noticia->save();

                        foreach($idiomas as $idioma)
                        {
                            $texto = new PryNoticiaTxt();
                            $texto->id_noticia = $noticia->id;
                            $texto->id_idioma = $idioma->id_idioma;
                            $texto->titulo = 'Lorem ipsum dolore sit amet';
                            $texto->introduccion = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna';
                            $texto->texto= 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna';
                            $texto->save();
                        }
                    }
                    break;

                case 7://slider img texto
                    if(File::exists('img/'.$modulo->modulo_blade.'slider.png'))
                    {
                        $file = 'img/'.$modulo->modulo_blade.'slider.png';
                        $dest = 'upload/'.$idproyecto.'/slider/'.$modulo->modulo_blade.'sliderdefault.png';

                        File::copy($file, $dest);

                        $slider = new PrySlider();
                        $slider->id_pry_modulo = $nuevomodulo->id;
                        $slider->imagen = $modulo->modulo_blade.'sliderdefault.png';
                        $slider->save();

                        foreach($idiomas as $idioma) {

                            $textos = new PrySliderTxt();
                            $textos->id_pry_slider = $slider->id;
                            $textos->id_idioma = $idioma->id_idioma;
                            $textos->texto = 'Lorem ipsum';
                            $textos->texto2 = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.';
                            $textos->save();
                        }
                    }
                    break;

                case 8://sectores
                    for($i=0; $i<3; $i++)
                    {
                        $sector = new PryCursosSector();
                        $sector->id_proyecto = $idproyecto;

                        if(File::exists('img/icono-avion-blanco.png'))
                        {
                            $file = 'img/icono-avion-blanco.png';
                            $dest = 'upload/'.$idproyecto.'/contenido/'.$modulo->modulo_blade.'icono-avion-blanco'.$i.'.png';

                            File::copy($file, $dest);

                            $sector->icono = $modulo->modulo_blade.'icono-avion-blanco'.$i.'.png';
                        }
                        if(File::exists('img/icono-avion-azul.png'))
                        {
                            $file = 'img/icono-avion-azul.png';
                            $dest = 'upload/'.$idproyecto.'/contenido/'.$modulo->modulo_blade.'icono-avion-azul'.$i.'.png';

                            File::copy($file, $dest);

                            $sector->icono_activo = $modulo->modulo_blade.'icono-avion-azul'.$i.'.png';
                        }

                        $sector->save();

                        foreach($idiomas as $idioma)
                        {
                            $texto = new PryCursosSectorTxt();
                            $texto->id_cursos_sector = $sector->id;
                            $texto->id_idioma = $idioma->id_idioma;
                            $texto->nombre = 'Lorem';
                            $texto->save();
                        }
                    }
                    break;
                default:
                    break;
            }
        }

        foreach($estructura as $item)
        {
            $id_imagen = 0;
            if($item->imagen !="")
            {
                if(File::exists('img/'.$item->imagen))
                {
                    $file = 'img/'.$item->imagen;
                    $dest = 'upload/'.$idproyecto.'/contenido/'.$idproyecto.$item->imagen;

                    File::copy($file, $dest);

                    $imagenes = new PryModuloEstructuraImg();
                    $imagenes->imagen = $idproyecto.$item->imagen;
                    $imagenes->save();

                    $id_imagen = $imagenes->id;
                }
            }

            foreach($idiomas as $idioma)
            {
                $nuevoitem = new PryModuloEstructura();
                $nuevoitem->id_modulo = $nuevomodulo->id;
                $nuevoitem->id_idioma = $idioma->id_idioma;
                $nuevoitem->titulo = $item->titulo;
                $nuevoitem->subtitulo = $item->subtitulo;
                $nuevoitem->comentario = $item->comentario;
                $nuevoitem->url = $item->url;
                $nuevoitem->url_texto = $item->url_texto;
                $nuevoitem->video = $item->video;
                $nuevoitem->id_pry_modulo_estructura_img = $id_imagen;
                $nuevoitem->save();
            }

        }
        return 1;
    }

    static function ClonarIdiomas($id_proyecto, $idioma)
    {
        $idioma_anterior = ProyectoIdioma::where('id_proyecto', '=', $id_proyecto)->first()->id_idioma;

        $menuurls = PryMenuUrl::where('id_pry_proyecto', '=', $id_proyecto)->get();

        foreach ($menuurls as $interna)
        {
            $txt = PryMenuUrl::find($interna->id)->textos()->where('id_idioma', '=', $idioma_anterior)->first();

            $nuevo = new PryMenuUrlTxt();
            $nuevo->id_menu_url = $txt->id_menu_url;
            $nuevo->id_idioma = $idioma;
            $nuevo->titulo = $txt->titulo;
            $nuevo->url = $txt->url;
            $nuevo->save();
        }

        $noticias = PryNoticia::where('id_pry_proyecto', '=', $id_proyecto)->get();

        foreach($noticias as $noticia)
        {
            $txt = PryNoticia::find($noticia->id)->textos()->where('id_idioma', '=', $idioma_anterior)->first();

            $nuevo = new PryNoticiaTxt();
            $nuevo->id_noticia = $txt->id_noticia;
            $nuevo->id_idioma = $idioma;
            $nuevo->titulo = $txt->titulo;
            $nuevo->texto = $txt->texto;
            $nuevo->introduccion = $txt->introduccion;
            $nuevo->save();
        }

        $sectores = PryCursosSector::where('id_proyecto', '=', $id_proyecto)->get();

        foreach($sectores as $sector)
        {
            $txt = PryCursosSector::find($sector->id)->textos()->where('id_idioma', '=', $idioma_anterior)->first();

            $nuevo = new PryCursosSectorTxt();
            $nuevo->id_cursos_sector = $txt->id_cursos_sector;
            $nuevo->id_idioma = $idioma;
            $nuevo->nombre = $txt->nombre;
            $nuevo->save();

            $categorias = PryCursosCategoria::where('id_sector', '=', $sector->id)->get();

            foreach($categorias as $categ)
            {
                $txt = PryCursosCategoria::find($categ->id)->textos()->where('id_idioma', '=', $idioma_anterior)->first();

                $nuevo = new PryCursosCategoriaTxt();
                $nuevo->id_cursos_categoria = $txt->id_cursos_categoria;
                $nuevo->id_idioma = $idioma;
                $nuevo->nombre = $txt->nombre;
                $nuevo->save();

                $cursos = PryCursosCurso::where('id_categoria','=', $categ->id)->get();

                foreach($cursos as $curso)
                {
                    $txt = PryCursosCurso::find($curso->id)->textos()->where('id_idioma', '=', $idioma_anterior)->first();

                    $nuevo = new PryCursosCursoTxt();
                    $nuevo->id_curso = $txt->id_curso;
                    $nuevo->id_idioma = $idioma;
                    $nuevo->titulo = $txt->titulo;
                    $nuevo->texto1 = $txt->texto1;
                    $nuevo->texto2 = $txt->texto2;
                    $nuevo->pdf = $txt->pdf;
                    $nuevo->save();
                }
            }

        }

        $modulos = PryModulo::where('id_proyecto', '=', $id_proyecto)->select('id', 'id_md_modulo')->get();

        foreach($modulos as $modulo) {
            $txt = PryModulo::find($modulo->id)->textos()->where('id_idioma', '=', $idioma_anterior)->first();

            $nuevo = new PryModuloTxt();
            $nuevo->id_pry_modulo = $txt->id_pry_modulo;
            $nuevo->id_idioma = $idioma;
            $nuevo->titulo = $txt->titulo;
            $nuevo->save();

            $estructuras = PryModuloEstructura::where('id_modulo', '=', $modulo->id)
                ->where('id_idioma', '=', $idioma_anterior)
                ->get();

            foreach ($estructuras as $estruct) {
                $nuevo = new PryModuloEstructura();
                $nuevo->id_modulo = $estruct->id_modulo;
                $nuevo->id_idioma = $idioma;
                $nuevo->titulo = $estruct->titulo;
                $nuevo->subtitulo = $estruct->subtitulo;
                $nuevo->comentario = $estruct->comentario;
                $nuevo->video = $estruct->video;
                $nuevo->url = $estruct->url;
                $nuevo->url_texto = $estruct->url_texto;
                $nuevo->es_url_externo = $estruct->es_url_externo;
                $nuevo->save();
            }

            $complementos = ModuloComplemento::where('id_md_modulo', '=', $modulo->id_md_modulo)->get();

            foreach ($complementos as $complemento) {
                switch ($complemento->id_complemento) {
                    case 1 : //red social

                        break;
                    case 2 : //galeria

                        $tabs = PryGaleriaTab::where('id_pry_modulo', '=', $modulo->id)->get();

                        foreach($tabs as $tab)
                        {
                            $txt = PryGaleriaTab::find($tab->id)->textos()->where('id_idioma', '=', $idioma_anterior)->first();

                            $nuevo = new PryGaleriaTabTxt();
                            $nuevo->id_galeria_tab = $txt->id_galeria_tab;
                            $nuevo->id_idioma = $idioma;
                            $nuevo->tab = $txt->tab;
                            $nuevo->save();

                            $items = PryGaleriaItem::where('id_pry_galeria_tab', '=', $tab->id)->get();

                            foreach($items as $item)
                            {
                                $txt = PryGaleriaItem::find($item->id)->textos()->where('id_idioma', '=', $idioma_anterior)->first();

                                $nuevo = new PryGaleriaItemTxt();
                                $nuevo->id_galeria_item = $txt->id_galeria_item;
                                $nuevo->id_idioma = $idioma;
                                $nuevo->item = $txt->item;
                                $nuevo->texto = $txt->texto;
                                $nuevo->save();

                                $detalle = PryGaleriaItemDetalle::where('id_pry_galeria_item','=', $item->id)
                                    ->where('id_idioma','=', $idioma_anterior)
                                    ->get();

                                foreach($detalle as $dtll)
                                {
                                    $nuevo = new PryGaleriaItemDetalle();
                                    $nuevo->id_pry_galeria_item = $dtll->id_pry_galeria_item;
                                    $nuevo->label = $dtll->label;
                                    $nuevo->valor = $dtll->valor;
                                    $nuevo->id_idioma = $idioma;
                                    $nuevo->save();
                                }
                            }
                        }

                        break;

                    case 3: //slider

                        break;
                    case 4: //Google maps
                        break;
                    default:
                    case 5: //slider textos

                        $sliders = PrySlider::where('id_pry_modulo', '=', $modulo->id)->get();

                        foreach($sliders as $slider)
                        {
                            $txt = PrySlider::find($slider->id)->textos()->where('id_idioma','=', $idioma_anterior)->first();

                            $nuevo = new PrySliderTxt();
                            $nuevo->id_pry_slider = $txt->id_pry_slider;
                            $nuevo->id_idioma = $idioma;
                            $nuevo->texto = $txt->texto;
                            $nuevo->texto2 = $txt->texto2;
                            $nuevo->save();
                        }

                        break;

                    case 6: //noticias

                        break;

                    case 7://slider img texto
                        $sliders = PrySlider::where('id_pry_modulo', '=', $modulo->id)->get();

                        foreach($sliders as $slider)
                        {
                            $txt = PrySlider::find($slider->id)->textos()->where('id_idioma','=', $idioma_anterior)->first();

                            $nuevo = new PrySliderTxt();
                            $nuevo->id_pry_slider = $txt->id_pry_slider;
                            $nuevo->id_idioma = $idioma;
                            $nuevo->texto = $txt->texto;
                            $nuevo->texto2 = $txt->texto2;
                            $nuevo->save();
                        }
                        break;

                    case 8://sectores

                        break;
                    default:
                        break;
                }
            }
        }

        return 1;
    }

    static function  dtCliente($idesP){
        $cliente = DB::table('pry_proyecto')
            ->where('pry_proyecto.id','=', $idesP)
            ->join('dat_cliente','dat_cliente.id','=','pry_proyecto.id_cliente')
            ->join('users','users.id','=','dat_cliente.id_usuario')
            ->first();

        ?>
        data-proyecto="<?php echo $cliente->nombre_proyecto; ?>"
        data-url="<?php echo $cliente->dominio; ?>"
        data-cliente="<?php echo $cliente->cliente; ?>"
        data-razonsocial="<?php echo $cliente->razon_social; ?>"
        data-direccion="<?php echo $cliente->direccion; ?>"
        data-ruc="<?php echo $cliente->ruc; ?>"
        data-nombre="<?php echo $cliente->nombres; ?>"
        data-apellidop="<?php echo $cliente->apellidop; ?>"
        data-apellidom="<?php echo $cliente->apellidom; ?>"
        data-email="<?php echo $cliente->email; ?>"
        data-telefono="<?php echo $cliente->telefono; ?>"
        data-telefono2="<?php echo $cliente->telefono2; ?>"
        <?php
    }
    static function getSocial($idmodulo)
    {
        $sociales = PryRedesSociales::where('id_pry_modulo', '=', $idmodulo)->get();

        return $sociales;
    }
    static function getIconosSocial()
    {
        $sociales = DB::table('dat_red_social')->get();

        return $sociales;
    }
    static function getGaleriaTabs($idmodulo, $idioma)
    {
        $tabs = DB::table('pry_galeria_tabs')
            ->join('pry_galeria_tabs_txt', 'pry_galeria_tabs_txt.id_galeria_tab', '=', 'pry_galeria_tabs.id')
            ->where('pry_galeria_tabs.id_pry_modulo', '=', $idmodulo)
            ->where('pry_galeria_tabs_txt.id_idioma', '=', $idioma)
            ->where('pry_galeria_tabs.desactivar', '=', 0)
            ->select('pry_galeria_tabs.id', 'pry_galeria_tabs_txt.tab')
            ->get();

        return $tabs;
    }
    static function getGaleriaTabsHtml($idmodulo, $idioma)
    {
        $tabs = DB::table('pry_galeria_tabs')
            ->join('pry_galeria_tabs_txt', 'pry_galeria_tabs_txt.id_galeria_tab', '=', 'pry_galeria_tabs.id')
            ->where('pry_galeria_tabs.id_pry_modulo', '=', $idmodulo)
            ->where('pry_galeria_tabs_txt.id_idioma', '=', $idioma)
            ->select('pry_galeria_tabs.id', 'pry_galeria_tabs_txt.tab')
            ->get();

        $data = '';

        foreach($tabs as $tab)
        {
            $data = $data .'<div class="col-md-12 atributo" style="margin-bottom: 15px" id="galeria-tab-box'.$tab->id.'"><input type="text" name="galeriatab_id[]" value="'.$tab->id.'" class="nomostrar"/>'
                .'<input class="input-blue" type="text" name="galeriatab_tab[]" value="'.$tab->tab.'" /> <a href="javascript:;" class="eliminargaleriatab" data-id="'.$tab->id.'"> <i class="fa fa-times" aria-hidden="true"></i></a></div>';
        }

        return $data;
    }
    static function getAllGaleriaItems($id_pry_modulo, $idioma)
    {
        //--//
        $tabs = PryGaleriaTab::where('id_pry_modulo', '=', $id_pry_modulo)
            ->get();
        $ids_tabs = [];
        foreach($tabs as $tab)
        {
            array_push($ids_tabs, $tab->id);
        }

        $items = DB::table('pry_galeria_item')
            ->join('pry_galeria_item_txt', 'pry_galeria_item_txt.id_galeria_item', '=', 'pry_galeria_item.id')
            ->whereIn('pry_galeria_item.id_pry_galeria_tab', $ids_tabs)
            ->where('pry_galeria_item_txt.id_idioma', '=', $idioma)
            ->select('pry_galeria_item.id','pry_galeria_item.id_pry_galeria_tab', 'pry_galeria_item_txt.id_idioma',
                'pry_galeria_item_txt.item',
                'pry_galeria_item_txt.texto',
                'pry_galeria_item.imagen',
                'pry_galeria_item.orden')
            ->orderBy('pry_galeria_item.orden')
            ->get();

        return $items;
    }
    static function getGaleriaItems($idGaleriatab,$idioma)
    {
        $items = DB::table('pry_galeria_item')
            ->join('pry_galeria_item_txt', 'pry_galeria_item_txt.id_galeria_item', '=', 'pry_galeria_item.id')
            ->where('pry_galeria_item.id_pry_galeria_tab', '=', $idGaleriatab)
            ->where('pry_galeria_item_txt.id_idioma', '=', $idioma)
            ->select('pry_galeria_item.id','pry_galeria_item.id_pry_galeria_tab', 'pry_galeria_item_txt.id_idioma',
                'pry_galeria_item_txt.item',
                'pry_galeria_item_txt.texto',
                'pry_galeria_item.imagen',
                'pry_galeria_item.orden',
                'pry_galeria_item.width',
                'pry_galeria_item.url',
                'pry_galeria_item.align')
            ->orderBy('pry_galeria_item.orden')
            ->orderBy('pry_galeria_item.id')
            ->get();

        return $items;
    }
    static function getGaleriaItemDetalle($idGaleriaitem, $idioma)
    {
        $detalle = PryGaleriaItemDetalle::where('id_pry_galeria_item', '=', $idGaleriaitem)
            ->where('id_idioma', '=', $idioma)
            ->get();

        return $detalle;
    }
    static function getGaleriaItemDetalleHtml($idGaleriaitem, $editable, $idioma)
    {
        $detalle = PryGaleriaItemDetalle::where('id_pry_galeria_item', '=', $idGaleriaitem)
                    ->where('id_idioma', '=', $idioma)
                    ->get();

        $data = '';

        if($editable == '0')
        {
            foreach($detalle as $dt)
            {
                $data = $data .'<div class="col-md-6 atributo"><p>'.$dt->label.'</p><span>'.$dt->valor.'</span></div>';
            }
        }
        else
        {
            foreach($detalle as $dt)
            {
                $data = $data .'<div class="col-md-6 atributo"><input type="text" name="galeriaitem_detalle_id[]" value="'.$dt->id.'" class="nomostrar"/>'
                    .'<input class="input-blue" type="text" name="galeriaitem_detalle_label[]" value="'.$dt->label.'"/>'
                    .'<textarea class="input-blue" type="text" name="galeriaitem_detalle_valor[]">'.$dt->valor.'</textarea></div>';
            }
        }

        return $data;
    }
    static function eliminarGaleriaItem($id_item, $id_proyecto)
    {
        $galeria_slider = PryGaleriaItemSlider::where('id_pry_galeria_item', '=', $id_item)->get();

        foreach($galeria_slider as $item)
        {
            File::delete('upload/'.$id_proyecto.'/galeria/'.$item->imagen);
            $item_slider = PryGaleriaItemSlider::find($item->id);
            $item_slider->delete();
        }

        $detalle = PryGaleriaItemDetalle::where('id_pry_galeria_item','=', $id_item)
            ->select('id')
            ->get();

        foreach($detalle as $dt)
        {
            $detalle_item = PryGaleriaItemDetalle::find($dt->id);
            $detalle_item->delete();
        }
        $item = PryGaleriaItem::find($id_item);

        $item->textos()->delete();

        File::delete('upload/'.$id_proyecto.'/galeria/'.$item->imagen);

        $item->delete();
    }
    static function newGaleriaTab($id, $nombre)
    {
        $id_proyecto = PryModulo::where('id', '=', $id)->select('id_proyecto')->first()->id_proyecto;

        $tab = new PryGaleriaTab();
        $tab->id_pry_modulo = $id;
        $tab->save();

        $idiomas = ProyectoIdioma::where('id_proyecto', '=', $id_proyecto)->get();

        foreach($idiomas as $idioma)
        {
            $txt = new PryGaleriaTabTxt();
            $txt->id_galeria_tab = $tab->id;
            $txt->id_idioma = $idioma->id_idioma;
            $txt->tab = $nombre;
            $txt->save();
        }
    }
    static function editarGaleriaTabs($ids_tab, $nombres_tab, $idioma)
    {
        $total_tabs = count($ids_tab);

        for($i=0; $i< $total_tabs; $i++)
        {
            $tab = PryGaleriaTab::find($ids_tab[$i])->textos()->where('id_idioma', '=', $idioma)->first();
            $tab->tab = $nombres_tab[$i];
            $tab->save();

        }
    }
    static function eliminarGaleriaTabs($id_tab)
    {  
        $item = PryGaleriaItem::where('id_pry_galeria_tab','=', $id_tab)->count();
        if($item!=0){
            return $id_tab;
        }
        else{
            $tab = PryGaleriaTab::find($id_tab);
            $tab->textos()->delete();
            $tab->delete();
            return 0;
        }        
    }

    static function desactivarGaleriaTabs($id_tabs)
    {  
        $tab = PryGaleriaTab::find($id_tabs);
        $tab->desactivar = 1;
        $tab->save();       
    }

    static function crearGaleriaItem($id_tab, $itemdato, $texto, $label_detalle_item, $valor_detalle_item, $id_proyecto, $width=0, $url='', $align='')
    {
        $item = new PryGaleriaItem();
        $item->id_pry_galeria_tab = $id_tab;
        $item->width= $width;
        $item->url = $url;
        $item->align = $align;
        $item->save();

        $idiomas = ProyectoIdioma::where('id_proyecto', '=', $id_proyecto)->get();

        foreach($idiomas as $idioma)
        {
            $item_texto = new PryGaleriaItemTxt();
            $item_texto->id_galeria_item = $item->id;
            $item_texto->item = $itemdato;
            $item_texto->texto= $texto;
            $item_texto->id_idioma = $idioma->id_idioma;
            $item_texto->save();

            $total_item_detalle = count($label_detalle_item);

            for($j = 0; $j< $total_item_detalle; $j++)
            {
                $detalle = new PryGaleriaItemDetalle();
                $detalle->id_pry_galeria_item = $item->id;
                $detalle->label = $label_detalle_item[$j];
                $detalle->valor = $valor_detalle_item[$j];
                $detalle->id_idioma = $idioma->id_idioma;
                $detalle->save();
            }
        }

        return $item;
    }
    static function guardarDatosGaleria($id_item, $itemdato, $texto, $ids_detalle_item, $label_detalle_item, $valor_detalle_item, $idioma, $width=0, $url='', $align='')
    {
        $item = PryGaleriaItem::find($id_item);
        $item->width= $width;
          $item->url = $url;
        $item->align = $align;
        $item->save();

        $item = PryGaleriaItem::find($id_item)->textos()->where('id_idioma','=', $idioma)->first();
        $item->item = $itemdato;
        $item->texto = $texto;
        $item->save();


        $detalle_item_existentes = count($ids_detalle_item);
        $total_detalle_items = count($label_detalle_item);

        for($i=0; $i< $detalle_item_existentes; $i++)
        {
            $detalle = PryGaleriaItemDetalle::find($ids_detalle_item[$i]);
            $detalle->label = $label_detalle_item[$i];
            $detalle->valor = $valor_detalle_item[$i];
            $detalle->save();

        }

        for($j = $detalle_item_existentes; $j< $total_detalle_items; $j++)
        {
            $detalle = new PryGaleriaItemDetalle();
            $detalle->id_pry_galeria_item = $id_item;
            $detalle->label = $label_detalle_item[$j];
            $detalle->valor = $valor_detalle_item[$j];
            $detalle->id_idioma= $idioma;
            $detalle->save();
        }
    }
    
    static function editarCrewItem($id_item, $nombre, $texto, $detalle1, $detalle2, $idioma)
    {
        $item = PryGaleriaItem::find($id_item)->textos()->where('id_idioma', '=', $idioma)->first();
        $item->item = $nombre;
        $item->texto = $texto;
        $item->save();

        $detalle = PryGaleriaItemDetalle::where('id_pry_galeria_item', '=', $id_item)
            ->where('id_idioma', '=', $idioma)
            ->first();

        $detalle->label = $detalle1;
        $detalle->valor = $detalle2;
        $detalle->save();
    }
   
    static function saveGaleriaItemSlider($id_galeria_item, $files, $id_proyecto, $cantidad_existentes, $ids_item_slider)
    {
        $total = $files;
        /*$imagenes = PryGaleriaItemSlider::where('id_pry_galeria_item', '=', $id_galeria_item)->get();

        $ids_item_slider = [];

        foreach($imagenes as $img)
        {
            array_push($ids_item_slider,$img->id);
        }*/
        $ids_item_slider = explode(",", $ids_item_slider);

        for($i = 0; $i< $cantidad_existentes; $i++)
        {
            if (Input::hasFile('file_item_slider'.$i)) {

                $ext = Input::file('file_item_slider'.$i)->getClientOriginalExtension();
                $path = 'upload/'.$id_proyecto.'/galeria/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('file_item_slider'.$i)->move($path, $filename);

                $item_galeria_slider = PryGaleriaItemSlider::find($ids_item_slider[$i]);
                $item_galeria_slider->imagen = $filename;


                $item_galeria_slider->save();
                //png
                $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path.$filename);
                $source->toFile($path.$filename);
            }
        }

        for($j= $cantidad_existentes; $j< $total; $j++)
        {
            if (Input::hasFile('file_item_slider'.$j)) {;

                $ext = Input::file('file_item_slider'.$j)->getClientOriginalExtension();
                $path = 'upload/'.$id_proyecto.'/galeria/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('file_item_slider'.$j)->move($path, $filename);

                $item_galeria_slider = new PryGaleriaItemSlider();
                $item_galeria_slider->id_pry_galeria_item = $id_galeria_item;
                $item_galeria_slider->imagen = $filename;

                
                $item_galeria_slider->save();

                //png
                $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path.$filename);
                $source->toFile($path.$filename);
            }
        }
    }
    static function saveImgNoCrop($img_nocrop, $id_proyecto)
    {
        $img_nocrop = explode(",", $img_nocrop);

        $tam  = count($img_nocrop);

        for($i=0; $i<$tam; $i++)
        {
            $estructura = PryModuloEstructura::find($img_nocrop[$i]);

            if (Input::hasFile('img_nocrop'.$img_nocrop[$i])) {

                $ext = Input::file('img_nocrop'.$img_nocrop[$i])->getClientOriginalExtension();
                $path = 'upload/'.$id_proyecto.'/contenido/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('img_nocrop'.$img_nocrop[$i])->move($path, $filename);

                $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path.$filename);
                $source->toFile($path.$filename);

                $img_estructura = PryModuloEstructuraImg::find($estructura->id_pry_modulo_estructura_img);
                $img_estructura->imagen = $filename;
                $img_estructura->save();

            }
        }
    }
    static function saveBase64imagen($tipo, $id, $id_proyecto, $imagen)
    {
        $filename='';

        if($tipo==1)//logo
        {
            $modulo = PryModulo::find($id);

            list($type, $imagen) = explode(';', $imagen);
            list(, $imagen) = explode(',', $imagen);
            $imagen = base64_decode($imagen);
            $path = 'upload/'.$id_proyecto.'/contenido/';
            $filename = date('dm') . '_' . uniqid() . '.png';
            file_put_contents($path. $filename, $imagen);

            $modulo->logo = $filename;
            $modulo->save();

            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);
        }
        if($tipo==2)//imagen estructura
        {
            $estructura = PryModuloEstructura::find($id);

            list($type, $imagen) = explode(';', $imagen);
            list(, $imagen) = explode(',', $imagen);
            $imagen = base64_decode($imagen);
            $path = 'upload/'.$id_proyecto.'/contenido/';
            $filename = date('dm') . '_' . uniqid() . '.png';
            file_put_contents($path. $filename, $imagen);

            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);

            $img_estructura = PryModuloEstructuraImg::find($estructura->id_pry_modulo_estructura_img);
            $img_estructura->imagen = $filename;
            $img_estructura->save();
        }
        if($tipo==3)//item galeria
        {
            $item = PryGaleriaItem::find($id);

            list($type, $imagen) = explode(';', $imagen);
            list(, $imagen) = explode(',', $imagen);
            $imagen = base64_decode($imagen);
            $path = 'upload/'.$id_proyecto.'/galeria/';
            $filename = date('dm') . '_' . uniqid() . '.png';
            file_put_contents($path. $filename, $imagen);

            $item->imagen = $filename;
            $item->save();

            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);
        }
        return $filename;
    }
    static function saveImagen($id, $tipo, $id_proyecto)
    {
        $filename = '';

        if($tipo == '1')//imagen fondo
        {
            $modulo = PryModulo::find($id);

            if (Input::hasFile('file')) {

                $ext = Input::file('file')->getClientOriginalExtension();
                $path = 'upload/'.$modulo->id_proyecto.'/contenido/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('file')->move($path, $filename);

                //png
                $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path.$filename);
                $source->toFile($path.$filename);


                $modulo->imagen_fondo = $filename;
            }
            $modulo->save();
        }
        if($tipo == '2')//imagen galeria
        {
            $item = PryGaleriaItem::find($id);

            if (Input::hasFile('file')) {

                $ext = Input::file('file')->getClientOriginalExtension();
                $path = 'upload/'.$id_proyecto.'/galeria/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('file')->move($path, $filename);
                //png
                $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path.$filename);
                $source->toFile($path.$filename);

                $item->imagen = $filename;
            }
            $item->save();
        }
        if($tipo == '3')//logo
        {
            $modulo = PryModulo::find($id);

            if (Input::hasFile('file')) {

                $ext = Input::file('file')->getClientOriginalExtension();
                $path = 'upload/'.$modulo->id_proyecto.'/contenido/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('file')->move($path, $filename);

                //png
               $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path.$filename);
                $source->toFile($path.$filename);

                $modulo->logo = $filename;
            }
            $modulo->save();
        }
        if($tipo == '4')//img estructura sin crop
        {
            $estructura = PryModuloEstructura::find($id);

            if (Input::hasFile('file')) {

                $ext = Input::file('file')->getClientOriginalExtension();
                $path = 'upload/'.$id_proyecto.'/contenido/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('file')->move($path, $filename);

                //png
                $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path.$filename);
                $source->toFile($path.$filename);

                $img_estructura = PryModuloEstructuraImg::find($estructura->id_pry_modulo_estructura_img);
                $img_estructura->imagen = $filename;
                $img_estructura->save();

            }
        }

        return $filename;
    }
    static function editarLinkareferencia($id, $name, $texto, $url, $es_url_externo)
    {
        $mod_estructura = PryModuloEstructura::find($id);
        $mod_estructura->url = $url;
        $mod_estructura->$name = $texto;
        $mod_estructura->es_url_externo = $es_url_externo;
        $mod_estructura->save();

        $data=[];
        $data['url']=$mod_estructura->url;
        $data['id']=$mod_estructura->id;
        $data['texto']=$mod_estructura->$name;
        $data['es_url_externo']=$mod_estructura->es_url_externo;

        return $data;
    }
    static function getImagenesSliderHtml($id_modulo, $id_proyecto)
    {
        $imagenes = PrySlider::where('id_pry_modulo','=', $id_modulo)->get();

        $data='';
        $path = '/upload/'.$id_proyecto.'/slider/';

        $i = 0;

        foreach($imagenes as $img)
        {
            $data = $data . '<div class="col-sm-6" style="margin-bottom: 30px;"><div class="col-sm-12" id="imgThumbSlider'. $img->id.'">'
							.'<input type="text" class="form-control nomostrar" name="idsliders[]" value="'.$img->id.'">'
                            .'<input type="text" class="form-control nomostrar" name="cantfiles[]">'
							.'<div class="imagethumbslider">'
								.'<img src="'.url($path.$img->imagen).'" alt="" id="imginicial" width="220" height="160">'
                                .'<span class="btn btn-primary btn-delete-slider" data-id="'.$img->id.'">'
                                    .'<span class="fa fa-trash-o"></span>'
                                .'</span>'
								.'<span class="btn btn-primary btn-file-slider">'
									.'<span class="fa fa-folder-open-o"></span> <input type="file" id="fileslider'.$i.'" class="fileslider" name="fileslider'.$i.'">'
								.'</span>'
							.'</div>'
                            .'<input type="text" class="form-control" name="link[]" value="'.$img->link.'" placeholder="Link">'
						.'</div>'
                       .'</div>';

            $i++;
        }

        return $data;
    }
    static function getImgTextoSliderHtml($id_modulo, $id_proyecto, $idioma, $holder1,$holder2,$holder3)
    {
        $imagenes = DB::table('pry_slider')
            ->leftjoin('pry_slider_txt', 'pry_slider_txt.id_pry_slider', '=', 'pry_slider.id')
            ->where('pry_slider.id_pry_modulo','=', $id_modulo)
            ->where('pry_slider_txt.id_idioma','=', $idioma)
            ->select('pry_slider.id', 'pry_slider_txt.texto', 'pry_slider_txt.texto2', 'pry_slider.link', 'pry_slider.imagen')
            ->get();

        $data='';
        $path = '/upload/'.$id_proyecto.'/slider/';

        $i = 0;

        foreach($imagenes as $img)
        {
            $data = $data . '<div class="col-sm-12" style="margin-bottom: 30px;padding:0"><div class="col-sm-6" id="imgThumbSlider'. $img->id.'">'
                .'<input type="text" class="form-control nomostrar" name="idsliders[]" value="'.$img->id.'">'
                .'<input type="text" class="form-control nomostrar" name="cantfiles[]">'
                .'<div class="imagethumbslider">'
                .'<img src="'.url($path.$img->imagen).'" alt="" id="imginicial" width="220" height="160">'
                .'<span class="btn btn-primary btn-delete-sliderimg-texto" data-id="'.$img->id.'">'
                .'<span class="fa fa-trash-o"></span>'
                .'</span>'
                .'<span class="btn btn-primary btn-file-slider">'
                .'<span class="fa fa-folder-open-o"></span> <input type="file" id="fileslider'.$i.'" class="fileslider" name="fileslider'.$i.'">'
                .'</span>'
                .'</div>'
                .'</div>'
                .'<div class="col-sm-6">'
                .'<textarea class="form-control" name="texto-img-slider[]" placeholder="'.$holder1.'" style="margin-bottom: 3px;">'
                .$img->texto.'</textarea>'
                .'<textarea class="form-control" name="texto2-img-slider[]" placeholder="'.$holder2.'" style="margin-bottom: 3px;">'
                .$img->texto2.'</textarea>'
                .'<textarea class="form-control" name="link-img-slider[]" placeholder="'.$holder3.'" style="margin-bottom: 3px;">'
                .$img->link.'</textarea>'
                .'</div></div>';

            $i++;
        }

        return $data;
    }

    static function getImagenesSlider($id_modulo)
    {
        $imagenes = PrySlider::where('id_pry_modulo','=', $id_modulo)
            ->get();

        return $imagenes;
    }
    static function getSliderTextos($id_modulo, $idioma)
    {
        $slider = DB::table('pry_slider')
            ->leftjoin('pry_slider_txt', 'pry_slider_txt.id_pry_slider', '=', 'pry_slider.id')
            ->where('pry_slider.id_pry_modulo','=', $id_modulo)
            ->where('pry_slider_txt.id_idioma', '=', $idioma)
            ->select('pry_slider.id','pry_slider.id_pry_modulo',
                'pry_slider.imagen',
                'pry_slider_txt.texto',
                'pry_slider_txt.texto2',
                'pry_slider.link')
            ->get();

        return $slider;
    }
    static function eliminarimgslider($id_slider)
    {
        $img = PrySlider::find($id_slider);
        $modulo = PryModulo::where('id', '=', $img->id_pry_modulo)->select('id_proyecto')->first();

        File::delete('upload/'.$modulo->id_proyecto.'/slider/'.$img->imagen);
        $img->textos()->delete();
        $img->delete();
    }
    static function getComplementos($id_modulo)
    {
        $complementos = ModuloComplemento::where('id_md_modulo', '=', $id_modulo)->get();
        return $complementos;
    }
    static function getModulosExclusivos()
    {
        $nivel_usuario = Auth::user()->nivel_id;

        $ids_md_exclusivos=[];

        if($nivel_usuario==1)//cliente
        {
            $id_cliente = Clientes::where('id_usuario', '=', Auth::user()->id)->first();

            $modulos_exclusivos = ClienteModulo::where('id_cliente', '!=', $id_cliente)
                ->select('id_md_modulo')
                ->distinct()
                ->get();

            foreach($modulos_exclusivos as $md)
            {
                array_push($ids_md_exclusivos, $md->id_md_modulo);
            }
        }
        else
        {
            if($nivel_usuario==2)//agencia
            {
                $id_agencia = Agencia::where('id_user', '=', Auth::user()->id)->first();

                $modulos_exclusivos = ClienteModulo::where('id_agencia', '!=', $id_agencia)
                    ->select('id_md_modulo')
                    ->distinct()
                    ->get();

                foreach($modulos_exclusivos as $md)
                {
                    array_push($ids_md_exclusivos, $md->id_md_modulo);
                }
            }
        }

        return $ids_md_exclusivos;
    }
    static function getModulosUnicosHtml($tipo)
    {
        $data = '';
        $ids_md_exclusivos = Funciones::getModulosExclusivos();

        if($tipo == 1)//cabeceras
        {
            $cabeceras = Modulo::where('tipo_id', '=', 1)->whereNotIn('id', $ids_md_exclusivos)->get();

            foreach($cabeceras as $cabecera)
            {
                $data = $data . '<div class="col-md-6 col-sm-6 marcoselect" style="margin-bottom: 10px">'
                                    .'<a href="javascript:;" class="modulo-unico" data-id="'.$cabecera->id.'" rel="nofollow">'
                                        .'<div>'
                                            .'<img src="'.url('img/md_miniatura/'. $cabecera->imagen).'" alt="" class="imgwidth" style="height: 50%; ">'
                                        .'</div>'
                                    .'</a>'
                                .'</div>';
            }
        }
        elseif($tipo == 3)//pies
        {
            $pies = Modulo::where('tipo_id', '=', 3)->whereNotIn('id', $ids_md_exclusivos)->get();

            foreach($pies as $pie)
            {
                $data = $data . '<div class="col-md-6 col-sm-6 marcoselect" style="margin-bottom: 10px">'
                                    .'<a href="javascript:;" class="modulo-unico" data-id="'.$pie->id.'" rel="nofollow">'
                                        .'<div>'
                                            .'<img src="'.url('img/md_miniatura/'. $pie->imagen).'" alt="" class="imgwidth" style="height: 50%; ">'
                                        .'</div>'
                                    .'</a>'
                                .'</div>';
            }
        }

        return $data;
    }
    static function getCabecerasInternasHtml()
    {
        $data = '';

        $ids_md_exclusivos = Funciones::getModulosExclusivos();

        $cabeceras = Modulo::where('tipo_id', '=', 1)->whereNotIn('id', $ids_md_exclusivos)->get();

        foreach($cabeceras as $cabecera)
        {
            $data = $data . '<div class="col-md-6 col-sm-6 marcoselect" style="margin-bottom: 10px">'
                .'<a href="javascript:;" class="modulo-cabecera-interna" data-id="'.$cabecera->id.'" rel="nofollow">'
                .'<div>'
                .'<img src="'.url('img/md_miniatura/'. $cabecera->imagen).'" alt="" class="imgwidth" style="height: 50%; ">'
                .'</div>'
                .'</a>'
                .'</div>';
        }

        return $data;
    }
    static function getContenidosHtml()
    {
        $ids_md_exclusivos = Funciones::getModulosExclusivos();

        $contenidos = Modulo::where('tipo_id', '=', 2)->whereNotIn('id', $ids_md_exclusivos)->get();

        $data = '';
        foreach($contenidos as $contenido)
        {
            $data = $data . '<div class="col-md-6 col-sm-6 multipleselect" style=" margin-bottom: 10px">'
                                .'<div  class="contenido-new" data-idmodulo="'.$contenido->id.'" rel="nofollow">'
                                    .'<input type="checkbox" name="cont_seleccionados[]" value="'.$contenido->id.'" class="mdseleccionados nomostrar">'
                                    .'<div>'
                                        .'<img  src="'.url('img/md_miniatura/'. $contenido->imagen).'" alt="" class="imgwidth" style="height: 50%; ">'
                                    .'</div>'
                                .'</div>'
                                .'<br>'
                            .'</div>';
        }
        return $data;
    }

    static function eliminarModulo($id_modulo, $id_proyecto)
    {
        $modulo = PryModulo::find($id_modulo);

        $estructuras = PryModuloEstructura::where('id_modulo', '=', $id_modulo)->get();

        foreach($estructuras as $estructura)
        {
            $img = PryModuloEstructuraImg::where('id', '=', $estructura->id_pry_modulo_estructura_img)->first();
            if(isset($img))
            {
                $img->delete();
            }
            $estructura->delete();
        }

        $complementos = ModuloComplemento::where('id_md_modulo', '=', $modulo->id_md_modulo)->get();

        PryCombinacionColores::where('id_pry_modulo', '=', $id_modulo)->delete();


        foreach($complementos as $complemento)
        {
            switch($complemento->id_complemento)
            {
                case 1 : //red social
                    PryRedesSociales::where('id_pry_modulo', '=', $id_modulo)->delete();
                    break;
                case 2 : //galeria
                    $galeriaTabs = PryGaleriaTab::where('id_pry_modulo','=', $id_modulo)->get();
                    foreach($galeriaTabs as $tab)
                    {
                        $galeriaItems = PryGaleriaItem::where('id_pry_galeria_tab','=', $tab->id)->get();
                        foreach($galeriaItems as $item)
                        {
                            PryGaleriaItemDetalle::where('id_pry_galeria_item','=', $item->id)->delete();
                            File::delete('upload/'.$id_proyecto.'/galeria/'.$item->imagen);

                            PryGaleriaItemTxt::where('id_galeria_item','=', $item->id)->delete();

                            $sliders = PryGaleriaItemSlider::where('id_pry_galeria_item')->get();
                            foreach($sliders as $img)
                            {
                                File::delete('upload/'.$id_proyecto.'/galeria/'.$img->imagen);
                                $img->delete();
                            }
                            $item->delete();
                        }
                        PryGaleriaTabTxt::where('id_galeria_tab', '=', $tab->id)->delete();

                        $tab->delete();
                    }
                    break;
                case 3: //slider
                    $sliders = PrySlider::where('id_pry_modulo', '=', $id_modulo)->get();
                    foreach($sliders as $img)
                    {
                        File::delete('upload/'.$id_proyecto.'/slider/'.$img->imagen);
                        $img->delete();
                    }
                    break;
                case 4://google map
                    PryGoogleMap::where('id_pry_modulo', '=', $id_modulo)->delete();
                    break;
                case 5://slider texto
                    $sliders = PrySlider::where('id_pry_modulo', '=', $id_modulo)->get();
                    foreach($sliders as $item)
                    {
                        $item->textos()->delete();
                        $item->delete();
                    }

                    break;
                case 6://noticias
                    break;
                case 7://slider img texto
                    $sliders = PrySlider::where('id_pry_modulo', '=', $id_modulo)->get();
                    foreach($sliders as $img)
                    {
                        File::delete('upload/'.$id_proyecto.'/slider/'.$img->imagen);
                        $img->textos()->delete();
                        $img->delete();
                    }
                    break;
                case 8://sectores
                    break;
                default:
                    break;
            }
        }

        $modulo->delete();
    }

    static function getCombinacionColores($id_pry_modulo)
    {
        $combinacion = PryCombinacionColores::where('id_pry_modulo', '=', $id_pry_modulo)->first();

        return $combinacion;
    }

    static function getMenuurls($id_pry_proyecto, $idioma)
    {
        $urls = DB::table('pry_menu_urls')
            ->leftjoin('pry_menu_urls_txt', 'pry_menu_urls_txt.id_menu_url', '=', 'pry_menu_urls.id')
            ->where('pry_menu_urls.id_pry_proyecto', '=', $id_pry_proyecto)
            ->where('pry_menu_urls_txt.id_idioma', '=', $idioma)
            ->select('pry_menu_urls.id', 'pry_menu_urls.id_pry_proyecto', 'pry_menu_urls_txt.titulo', 'pry_menu_urls_txt.url' )
            ->get();

        return $urls;
    }

    static function getGooglemaps($id_pry_modulo)
    {
        $maps = PryGoogleMap::where('id_pry_modulo', '=', $id_pry_modulo)->get();

        return $maps;
    }
    static function getTextoSliderHtml($id_modulo, $idioma)
    {
        $textos = DB::table('pry_slider')
            ->join('pry_slider_txt', 'pry_slider_txt.id_pry_slider','=', 'pry_slider.id')
            ->where('pry_slider.id_pry_modulo', '=', $id_modulo)
            ->where('pry_slider_txt.id_idioma','=', $idioma)
            ->select('pry_slider.id','pry_slider.id_pry_modulo',
                'pry_slider.imagen',
                'pry_slider_txt.texto',
                'pry_slider_txt.texto2',
                'pry_slider.link')
            ->get();

        $data='';

        $i = 0;

        foreach($textos as $texto)
        {
            $data = $data . '<div class="col-sm-12 slider-texto">'
                .'<input type="text" class="form-control nomostrar" name="idsliderstexto[]" value="'.$texto->id.'">'
                .'<input type="text" class="form-control nomostrar" name="canttextos[]">'
                .'<textarea id="texto-slider' .$texto->id.'" class="textarea-editable" name="slider_textos[]" >'.$texto->texto.'</textarea>'
                .'</div>';

            $i++;
        }

        return $data;
    }
    static function saveSliderTextos($id_pry_modulo, $id_sliders, $textos, $idioma)
    {
        $total = count($textos);

        $existentes= count($id_sliders);

        $id_pry_proyecto = PryModulo::where('id', '=', $id_pry_modulo)->select('id_proyecto')->first()->id_proyecto;

        $idiomas = ProyectoIdioma::where('id_proyecto', '=', $id_pry_proyecto)->get();

        for($i = 0; $i< $existentes; $i++)
        {
            $slider = PrySlider::find($id_sliders[$i])->textos()->where('id_idioma', '=', $idioma)->first();
            $slider->texto = $textos[$i];
            $slider->save();
        }

        for($j= $existentes; $j< $total; $j++)
        {
            if($textos[$j]!='')
            {
                $slider = new PrySlider();
                $slider->id_pry_modulo = $id_pry_modulo;
                $slider->save();

                foreach($idiomas as $idioma)
                {
                    $texto = new PrySliderTxt();
                    $texto->id_pry_slider = $slider->id;
                    $texto->id_idioma = $idioma->id_idioma;
                    $texto->texto = $textos[$j];
                    $texto->save();

                }


            }
        }
    }

    static function eliminarImgcontenido($id, $id_proyecto)
    {
        $estructura = PryModuloEstructura::find($id);

        $imagen = PryModuloEstructuraImg::where('id', '=', $estructura->id_pry_modulo_estructura_img)->first();

        if(File::exists('upload/'.$id_proyecto.'/contenido/'.$imagen->imagen))
        {
            File::delete('upload/'.$id_proyecto.'/contenido/'.$imagen->imagen);
        }

        $imagen->imagen = '';
        $imagen->save();
    }

    static function getClientesporAgencia($id_agencia)
    {
        $clientes = Clientes::where('id_agencia','=', $id_agencia)->get();

        $data = '<ul><li><input type="checkbox" value="Todos" data-id="0" id="all_clients"/>Todos</li>';

        foreach($clientes as $cliente)
        {
            $data = $data .
            '<li><input type="checkbox" value="'.$cliente->cliente.'" data-id="'.$cliente->id.'" />'.$cliente->cliente.'</li>';
        }
        $data = $data.'</ul>';

        return $data;
    }

    static function getClientesexclusivosmodulo($id_agencia, $id_modulo)
    {

        $clientes_modulo = ClienteModulo::where('id_md_modulo', '=', $id_modulo)
            ->where('id_agencia','=', $id_agencia)
            ->select('id_cliente')
            ->get();

        $ids_clientes_exclusivos = [];

        foreach($clientes_modulo as $cliente)
        {
            array_push($ids_clientes_exclusivos, $cliente->id_cliente);
        }

        $clientes = Clientes::where('id_agencia','=', $id_agencia)->whereNotIn('id', $ids_clientes_exclusivos)->get();
        $clientes_exclusivos = Clientes::where('id_agencia','=', $id_agencia)->whereIn('id', $ids_clientes_exclusivos)->get();
        $cant = count($clientes);
        $data='';

        if($cant==0)
        {
            $data = '<ul><li><input type="checkbox" value="Todos" data-id="0" id="all_clients" checked/>Todos</li>';
        }
        else
        {
            $data = '<ul><li><input type="checkbox" value="Todos" data-id="0" id="all_clients"/>Todos</li>';
        }

        foreach($clientes_exclusivos as $cliente)
        {
            $data = $data .
                '<li><input type="checkbox" value="'.$cliente->cliente.'" data-id="'.$cliente->id.'" checked/>'.$cliente->cliente.'</li>';
        }
        foreach($clientes as $cliente)
        {
            $data = $data .
                '<li><input type="checkbox" value="'.$cliente->cliente.'" data-id="'.$cliente->id.'" />'.$cliente->cliente.'</li>';
        }

        $data = $data.'</ul>';

        return $data;
    }
    static function getModulosContenidoxCategoria($id_categoria, $ids_md_exclusivos)
    {
        $contenidos = Modulo::where('tipo_id', '=', 2)
            ->whereNotIn('id', $ids_md_exclusivos)
            ->where('id_md_categoria', '=', $id_categoria)
            ->get();

        return $contenidos;
    }
    static function getSlidergaleriaHtml($id_galeria_item, $id_proyecto)
    {
        $item = PryGaleriaItem::where('id','=',$id_galeria_item)->first();

        $imagenes = PryGaleriaItemSlider::where('id_pry_galeria_item', '=', $id_galeria_item)->get();

        $data = '<div id="slide_galeriaitem_' . $id_galeria_item . '" class="carousel slide" data-ride="carousel">'
            . '<ol class="carousel-indicators">';


        $path = '/upload/'.$id_proyecto.'/galeria/';

        $total_img = count($imagenes);

        if($total_img>0)
        {
            $data = $data . '<li data-target="#slide_galeriaitem_' . $id_galeria_item . '" data-slide-to="0" class="active"></li>';
        }

        $i = 1;
        foreach ($imagenes as $img)
        {
            $data = $data . '<li data-target="#slide_galeriaitem_' . $id_galeria_item . '" data-slide-to="' . $i . '"></li>';
            $i = $i + 1;
        }
        $data = $data . '</ol><div class="carousel-inner" role="listbox">';

        $data = $data . '<div class="item active">'
            . '<img class="imagenSlider" src="'.url($path.$item->imagen).'" alt="" >'
            . '</div>';

        foreach ($imagenes as $img)
        {
            $data = $data . '<div class="item">'
                . '<img class="imagenSlider" src="'.url($path.$img->imagen).'" alt="">'
                . '</div>';
        }
        $data = $data . '</div>'
                .'<a class="left carousel-control" href="#slide_galeriaitem_' . $id_galeria_item . '" role="button" data-slide="prev">
                    <span class="fa fa-angle-left flecha"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slide_galeriaitem_' . $id_galeria_item . '" role="button" data-slide="next">
                    <span class="fa fa-angle-right flecha"></span>
                    <span class="sr-only">Next</span>
                </a></div>';

        return $data;
    }
    static function getImagenesSliderGaleriaHtml($id_item, $id_proyecto)
    {
        $imagenes = PryGaleriaItemSlider::where('id_pry_galeria_item', '=', $id_item)->get();

        $data='';
        $path = '/upload/'.$id_proyecto.'/galeria/';

        $i = 0;

        foreach($imagenes as $img)
        {
            $data = $data . '<div class="col-sm-4 thumb-item-galeria" id="imgThumbSliderGaleria'. $img->id.'">'
                .'<input type="text" class="form-control nomostrar" name="id_item_slider[]" value="'.$img->id.'">'
                .'<input type="text" class="form-control nomostrar" name="cantfiles_item_slider[]">'
                .'<div class="image-thumb-item-slider">'
                .'<img src="'.url($path.$img->imagen).'" alt="" id="imginicial" width="150" height="150">'
                .'<span class="btn btn-primary btn-delete-item-slider" data-id="'.$img->id.'">'
                .'<span class="fa fa-trash-o"></span>'
                .'</span>'
                .'<span class="btn btn-primary btn-file-item-slider">'
                .'<span class="fa fa-folder-open-o"></span> <input type="file" id="file_item_slider'.$i.'" class="file_item_slider" name="file_item_slider'.$i.'">'
                .'</span>'
                .'</div>'
                .'</div>';

            $i++;
        }

        return $data;
    }
    static function eliminarGaleriaItemSlider($id_galeria_item_slider, $id_proyecto)
    {
        $img = PryGaleriaItemSlider::find($id_galeria_item_slider);

        File::delete('upload/'.$id_proyecto.'/galeria/'.$img->imagen);
        $img->delete();
    }
    static function savethumbnail($id_proyecto, $imagen)
    {
        $proyecto = Proyecto::find($id_proyecto);

        list($type, $imagen) = explode(';', $imagen);
        list(, $imagen) = explode(',', $imagen);
        $imagen = base64_decode($imagen);
        $path = 'upload/'.$id_proyecto.'/';
        $filename = date('dm') . '_' . uniqid() . '.png';
        file_put_contents($path. $filename, $imagen);

        $proyecto->thumbnail = $filename;
        $proyecto->save();

        $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
        $source = Tinify::fromFile($path.$filename);
        $source->toFile($path.$filename);

        return $filename;
    }
    static function saveImgRayos($id_modulo, $id_proyecto)
    {
        $modulo = PryModuloEstructura::find($id_modulo);

        if (Input::hasFile('file_rayo')) {

            $ext = Input::file('file_rayo')->getClientOriginalExtension();
            $path = 'upload/'.$id_proyecto.'/contenido/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('file_rayo')->move($path, $filename);

            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);



            $img = PryModuloEstructuraImg::find($modulo->id_pry_modulo_estructura_img);
            $img->imagen = $filename;
            $img->save();
        }
        if (Input::hasFile('file_rayo_movil')) {

            $ext = Input::file('file_rayo_movil')->getClientOriginalExtension();
            $path = 'upload/'.$id_proyecto.'/contenido/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('file_rayo_movil')->move($path, $filename);

            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);

            $img = PryModuloEstructuraImg::find($modulo->id_pry_modulo_estructura_img);
            $img->imagen_movil = $filename;
            $img->save();
        }

        return redirect()->back();

    }
    static function getVentasPorProyecto($id_proyecto)
    {
        $ventas = ClienteVenta::where('id_proyecto','=', $id_proyecto)->get();

        $data='';

        foreach($ventas as $venta)
        {
            $data = $data . '<tr><td class="highlight"><div class="success"></div>&nbsp;'. $venta->id.
                                        '</td><td>'.
                                            $venta->nombre.'&nbsp;'.$venta->apellido.
                                         '</td><td>'.$venta->direccion.', '.$venta->localidad.', '.$venta->region.', '.$venta->pais.'</td><td><a href="'.url('cliente/detalleventa/'.$venta->id).'" class="btn btn-outline btn-circle dark btn-sm blue">
                                                <i class="fa fa-eye"></i> Ver </a>
                                        </td>
                                    </tr>';
        }
        return $data;
    }
    static function getNoticiasDestacadas($id_proyecto, $idioma)
    {
        $noticias = DB::table('pry_noticias')
            ->join('pry_noticias_txt', 'pry_noticias_txt.id_noticia', '=', 'pry_noticias.id')
            ->where('pry_noticias.id_pry_proyecto','=', $id_proyecto)
            ->where('pry_noticias_txt.id_idioma', '=', $idioma)
            ->where('pry_noticias.destacado','=', 1)
            ->select('pry_noticias.id','pry_noticias.id_pry_proyecto',
                'pry_noticias_txt.titulo',
                'pry_noticias_txt.texto',
                'pry_noticias_txt.introduccion',
                'pry_noticias.imagen',
                'pry_noticias.destacado')
            ->orderBy('id', 'DESC')
            ->take(3)
            ->get();

        return $noticias;
    }
    static function getUltimasNoticias($cantidad, $id_proyecto, $idioma)
    {
        $noticias = DB::table('pry_noticias')
            ->join('pry_noticias_txt', 'pry_noticias_txt.id_noticia', '=', 'pry_noticias.id')
            ->where('pry_noticias.id_pry_proyecto','=', $id_proyecto)
            ->where('pry_noticias_txt.id_idioma', '=', $idioma)
            ->where('pry_noticias.destacado','=', 0)
            ->select('pry_noticias.id','pry_noticias.id_pry_proyecto',
                'pry_noticias_txt.titulo',
                'pry_noticias_txt.texto',
                'pry_noticias_txt.introduccion',
                'pry_noticias.imagen',
                'pry_noticias.destacado')
            ->orderBy('id', 'DESC')
            ->take($cantidad)
            ->get();

        return $noticias;
    }
    static function getNoticias($id_proyecto, $idioma)
    {
        $noticias = DB::table('pry_noticias')
            ->join('pry_noticias_txt', 'pry_noticias_txt.id_noticia', '=', 'pry_noticias.id')
            ->where('pry_noticias.id_pry_proyecto','=', $id_proyecto)
            ->where('pry_noticias_txt.id_idioma', '=', $idioma)
            ->select('pry_noticias.id','pry_noticias.id_pry_proyecto',
                'pry_noticias_txt.titulo',
                'pry_noticias_txt.texto',
                'pry_noticias_txt.introduccion',
                'pry_noticias.imagen',
                'pry_noticias.destacado')
            ->orderBy('id', 'DESC')
            ->get();

        return $noticias;
    }
    static function getNoticiastop6($id_proyecto, $idioma)
    {
        $noticias = DB::table('pry_noticias')
            ->join('pry_noticias_txt', 'pry_noticias_txt.id_noticia', '=', 'pry_noticias.id')
            ->where('pry_noticias.id_pry_proyecto','=', $id_proyecto)
            ->where('pry_noticias_txt.id_idioma', '=', $idioma)
            ->select('pry_noticias.id','pry_noticias.id_pry_proyecto',
                'pry_noticias_txt.titulo',
                'pry_noticias_txt.texto',
                'pry_noticias_txt.introduccion',
                'pry_noticias.imagen',
                'pry_noticias.destacado')
            ->orderBy('id', 'DESC')
            ->take(6)
            ->get();

        return $noticias;
    }
    static function getNoticiasnext6($id_proyecto,$num, $idioma)
    {
        $noticias = DB::table('pry_noticias')
            ->join('pry_noticias_txt', 'pry_noticias_txt.id_noticia', '=', 'pry_noticias.id')
            ->where('pry_noticias.id_pry_proyecto','=', $id_proyecto)
            ->where('pry_noticias_txt.id_idioma', '=', $idioma)
            ->where('pry_noticias.id','<', $num)
            ->select('pry_noticias.id','pry_noticias.id_pry_proyecto',
                'pry_noticias_txt.titulo',
                'pry_noticias_txt.texto',
                'pry_noticias_txt.introduccion',
                'pry_noticias.imagen',
                'pry_noticias.destacado')
            ->orderBy('id', 'DESC')
            ->take(6)
            ->get();

        $data = '';
        $i=0;
        $j=0;
        $tam=count($noticias);
        $path = '/upload/'.$id_proyecto.'/contenido/';
        $pathimg = 'img/';

        foreach($noticias as $noticia){
            if($i==0){
                $data = $data . '<div>';
            }

            if($i==3){
                $data = $data . '</div><div>';
                $i = 0;
            }

            $data = $data . '<div class="col-sm-4 noticia-box">'
                            .'<div class="noticia" data-id="'.$noticia->id.'">'
                                    .'<img src="'.url($path.$noticia->imagen).'">'
                                    .'<div class="textos">'
                                        .'<h3 class="titulo-noticia">'.$noticia->titulo.'</h3>'
                                        .'<img src="'.url($pathimg.'raya.png').'" style="width: 100%; height: 2px;"/>'
                                        .'<p class="parrafo">'.
                                            $noticia->introduccion
                                        .'</p>'
                                        .'<a href="javascript:;" class="read-more" data-img="'.url($path.$noticia->imagen).'" data-titulo="'.$noticia->titulo.'" data-texto="'.$noticia->texto.'">'
                                            .'<img src="'.url($pathimg.'rayita-roja-small.png').'" style="width: 11px"/>Leer más</a>'
                                    .'</div>'
                                .'</div>'
                            .'</div>';
            $i = $i+1;
            $j = $j+1;
            if($j==$tam){
                $data = $data .'</div>';
            }
        }

        return $data;
    }
    static  function  getNoticia($id, $idioma)
    {
        if($id!='')
        {
            $noticia = DB::table('pry_noticias')
                ->join('pry_noticias_txt', 'pry_noticias_txt.id_noticia', '=', 'pry_noticias.id')
                ->where('pry_noticias.id', '=', $id)
                ->where('pry_noticias_txt.id_idioma', '=', $idioma)
                ->select('pry_noticias.id','pry_noticias.id_pry_proyecto','pry_noticias_txt.id_idioma',
                    'pry_noticias_txt.titulo',
                    'pry_noticias_txt.texto',
                    'pry_noticias_txt.introduccion',
                    'pry_noticias.imagen',
                    'pry_noticias.destacado')
                ->first();

            $data = [];
            $data['id']= $noticia->id;
            $data['id_pry_proyecto']= $noticia->id_pry_proyecto;
            $data['id_idioma']= $noticia->id_idioma;
            $data['titulo']= $noticia->titulo;
            $data['texto']= $noticia->texto;
            $data['introduccion']= $noticia->introduccion;
            $data['imagen']= $noticia->imagen;
            $data['destacado']= $noticia->destacado;


            return $data;
        }
    }
    static function saveNoticia(Request $request)
    {
        $noticia = PryNoticia::find($request->input('id_noticia'));

        $ids_noticia_slider = $request->input('id_noticia_slider');
        $cantidad_existentes=  count($request->input('id_noticia_slider'));
        $total = count($request->input('cantfiles_noticia_slider'));


        if (Input::hasFile('file')) {

            $ext = Input::file('file')->getClientOriginalExtension();
            $path = 'upload/'.$noticia->id_pry_proyecto.'/contenido/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('file')->move($path, $filename);

            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);

            $noticia->imagen = $filename;
        }

        $destacado = $request->input('destacado');

        if(isset($destacado))
        {
            $noticia->destacado = 1;
        }
        else
        {
            $noticia->destacado = 0;
        }

        $noticia->save();


        for($i = 0; $i< $cantidad_existentes; $i++)
        {
            if (Input::hasFile('file_noticia_slider'.$i)) {

                $ext = Input::file('file_noticia_slider'.$i)->getClientOriginalExtension();
                $path = 'upload/'.$noticia->id_pry_proyecto.'/contenido/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('file_noticia_slider'.$i)->move($path, $filename);

                $noticia_slider = PryNoticiaSlider::find($ids_noticia_slider[$i]);
                $noticia_slider->imagen = $filename;

                $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path.$filename);
                $source->toFile($path.$filename);

                $noticia_slider->save();
                //png

            }
        }

        for($j= $cantidad_existentes; $j< $total; $j++)
        {
            if (Input::hasFile('file_noticia_slider'.$j)) {;

                $ext = Input::file('file_noticia_slider'.$j)->getClientOriginalExtension();
                $path = 'upload/'.$noticia->id_pry_proyecto.'/contenido/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('file_noticia_slider'.$j)->move($path, $filename);

                $noticia_slider = new PryNoticiaSlider();
                $noticia_slider->id_noticia = $noticia->id;
                $noticia_slider->imagen = $filename;

                //png
                $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path.$filename);
                $source->toFile($path.$filename);

                $noticia_slider->save();


            }
        }

        $idioma = $request->input('idioma');

        $noticiatxt = PryNoticia::find($request->input('id_noticia'))->textos()->where('id_idioma', '=', $idioma)->first();
        $noticiatxt->fill($request->all());
        $noticiatxt->save();

    }

    static function saveNuevaNoticia(Request $request)
    {
        $noticia = new PryNoticia();

        $noticia->fill($request->all());

        if (Input::hasFile('file')) {

            $ext = Input::file('file')->getClientOriginalExtension();
            $path = 'upload/'.$noticia->id_pry_proyecto.'/contenido/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('file')->move($path, $filename);

            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);

            $noticia->imagen = $filename;
        }

        $destacado = $request->input('destacado');

        if(isset($destacado))
        {
            $noticia->destacado = 1;
        }
        else
        {
            $noticia->destacado = 0;
        }

        $noticia->save();

        $idiomas = ProyectoIdioma::where('id_proyecto', '=', $noticia->id_pry_proyecto)->get();

        foreach($idiomas as $item)
        {
            $texto = new PryNoticiaTxt();
            $texto->id_noticia = $noticia->id;
            $texto->id_idioma = $item->id_idioma;
            $texto->fill($request->all());
            $texto->save();

        }

    }
    static function deleteNoticia($id)
    {
        $noticia = PryNoticia::find($id);

        File::delete('upload/'.$noticia->id_pry_proyecto.'/contenido/'.$noticia->imagen);

        $noticia->textos()->delete();

        $slider = PryNoticiaSlider::where('id_noticia','=', $id)->get();

        foreach($slider as $item)
        {
            File::delete('upload/'.$noticia->id_pry_proyecto.'/contenido/'.$item->imagen);
            $item->delete();
        }

        $noticia->delete();

    }
    static function getSectoresCursos($id_proyecto, $idioma)
    {
        $data = DB::table('pry_cursos_sectores')
            ->join('pry_cursos_sectores_txt','pry_cursos_sectores_txt.id_cursos_sector', '=', 'pry_cursos_sectores.id')
            ->where('pry_cursos_sectores.id_proyecto', '=', $id_proyecto)
            ->where('pry_cursos_sectores_txt.id_idioma', '=', $idioma)
            ->select('pry_cursos_sectores.id','pry_cursos_sectores.id_proyecto',
                'pry_cursos_sectores_txt.nombre',
                'pry_cursos_sectores.icono',
                'pry_cursos_sectores.icono_activo',
                'pry_cursos_sectores.link')
            ->get();

        return $data;
    }
    static function getCategoriasCursos($id_sector, $idioma)
    {
        $data = DB::table('pry_cursos_categorias')
            ->join('pry_cursos_categorias_txt','pry_cursos_categorias_txt.id_cursos_categoria', '=', 'pry_cursos_categorias.id')
            ->where('pry_cursos_categorias.id_sector', '=', $id_sector)
            ->where('pry_cursos_categorias_txt.id_idioma', '=', $idioma)
            ->select('pry_cursos_categorias.id','pry_cursos_categorias.id_sector',
                'pry_cursos_categorias_txt.nombre')
            ->get();

        return $data;
    }
    static function getCursos($id_categoria, $idioma)
    {
        $data = DB::table('pry_cursos_cursos')
            ->join('pry_cursos_cursos_txt','pry_cursos_cursos_txt.id_curso', '=', 'pry_cursos_cursos.id')
            ->where('pry_cursos_cursos.id_categoria', '=', $id_categoria)
            ->where('pry_cursos_cursos_txt.id_idioma', '=', $idioma)
            ->select( 'pry_cursos_cursos.id','pry_cursos_cursos.id_categoria',
                'pry_cursos_cursos_txt.titulo',
                'pry_cursos_cursos_txt.texto1',
                'pry_cursos_cursos_txt.texto2',
                'imagen1',
                'imagen2',
                'imagen_fondo',
                'pry_cursos_cursos_txt.pdf')
            ->get();

        return $data;
    }
    static function saveSector(Request $request)
    {
        $idioma = $request->input('idioma');

        $sector = PryCursosSector::find($request->input('id_sector'));
        $sector->link = $request->input('link');

        if (Input::hasFile('icono')) {

            $ext = Input::file('icono')->getClientOriginalExtension();
            $path = 'upload/'.$sector->id_proyecto.'/contenido/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('icono')->move($path, $filename);

            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);

            $sector->icono = $filename;
        }

        if (Input::hasFile('icono_activo')) {

            $ext = Input::file('icono_activo')->getClientOriginalExtension();
            $path = 'upload/'.$sector->id_proyecto.'/contenido/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('icono_activo')->move($path, $filename);

            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);

            $sector->icono_activo = $filename;
        }

        $sector->save();

        $texto =  $sector->textos()->where('id_idioma', '=', $idioma)->first();
        $texto->nombre = $request->input('nombre');
        $texto->save();

    }
    static function newCategoriaCurso($id_proyecto, $id_sector, $nombre)
    {
        $nuevo = new PryCursosCategoria();
        $nuevo->id_sector = $id_sector;
        $nuevo->save();

        $idiomas = ProyectoIdioma::where('id_proyecto', '=', $id_proyecto)->get();

        foreach($idiomas as $item)
        {
            $texto = new PryCursosCategoriaTxt();
            $texto->id_cursos_categoria = $nuevo->id;
            $texto->id_idioma = $item->id_idioma;
            $texto->nombre = $nombre;
            $texto->save();

        }

        $data=[];
        $data['id']= $nuevo->id;
        $data['id_sector']= $nuevo->id_sector;
        $data['nombre']= $nombre;

        return $data;

    }
    static function saveCategoriasCursos($ids, $nombres, $idioma)
    {
        $cant = count($ids);

        for($i=0; $i < $cant; $i++)
        {
            $categoria = PryCursosCategoria::find($ids[$i])->textos()->where('id_idioma', '=', $idioma)->first();
            $categoria->nombre = $nombres[$i];
            $categoria->save();
        }
    }
    static function eliminarCategoriaCurso($id_categoria)
    {
        $categoria = PryCursosCurso::where('id_categoria','=', $id_categoria)->count();
        if($categoria!=0){
            return $id_categoria;
        }
        else{
            $categoria = PryCursosCategoria::find($id_categoria);
            $categoria->textos()->delete();
            $categoria->delete();
            return 0;
        }
    }
    static function saveNewCurso(Request $request)
    {
        $id_proyecto = $request->input('id_proyecto');

        $curso= new PryCursosCurso();
        $curso->id_categoria = $request->input('id_categoria');

        if (Input::hasFile('imagen1')) {

            if (!File::isDirectory('upload/'.$id_proyecto.'/cursos'))
            {
                File::makeDirectory('upload/' . $id_proyecto . '/cursos');

                if (!File::isDirectory('upload/'.$id_proyecto.'/cursos/img'))
                {
                    File::makeDirectory('upload/' . $id_proyecto . '/cursos/img');
                }
            }

            $ext = Input::file('imagen1')->getClientOriginalExtension();
            $path = 'upload/'.$id_proyecto.'/cursos/img/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('imagen1')->move($path, $filename);

            //png
            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);

            $curso->imagen1 = $filename;
        }

        if (Input::hasFile('imagen2')) {

            if (!File::isDirectory('upload/'.$id_proyecto.'/cursos'))
            {
                File::makeDirectory('upload/' . $id_proyecto . '/cursos');

                if (!File::isDirectory('upload/'.$id_proyecto.'/cursos/img'))
                {
                    File::makeDirectory('upload/' . $id_proyecto . '/cursos/img');
                }
            }

            $ext = Input::file('imagen2')->getClientOriginalExtension();
            $path = 'upload/'.$id_proyecto.'/cursos/img/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('imagen2')->move($path, $filename);

            //png
            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);

            $curso->imagen2 = $filename;
        }

        if (Input::hasFile('fondo')) {

            if (!File::isDirectory('upload/'.$id_proyecto.'/cursos'))
            {
                File::makeDirectory('upload/' . $id_proyecto . '/cursos');

                if (!File::isDirectory('upload/'.$id_proyecto.'/cursos/img'))
                {
                    File::makeDirectory('upload/' . $id_proyecto . '/cursos/img');
                }
            }

            $ext = Input::file('fondo')->getClientOriginalExtension();
            $path = 'upload/'.$id_proyecto.'/cursos/img/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('fondo')->move($path, $filename);

            //png
            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);

            $curso->imagen_fondo = $filename;
        }

        $textopdf = '';
        if (Input::hasFile('pdf')) {

            if (!File::isDirectory('upload/'.$id_proyecto.'/cursos'))
            {
                File::makeDirectory('upload/' . $id_proyecto . '/cursos');

                if (!File::isDirectory('upload/'.$id_proyecto.'/cursos/pdf'))
                {
                    File::makeDirectory('upload/' . $id_proyecto . '/cursos/pdf');
                }
            }

            $ext = Input::file('pdf')->getClientOriginalExtension();
            $path = 'upload/'.$id_proyecto.'/cursos/pdf/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('pdf')->move($path, $filename);

            $textopdf = $filename;
        }

        $curso->save();

        $idiomas = ProyectoIdioma::where('id_proyecto', '=', $id_proyecto)->get();

        foreach($idiomas as $idioma)
        {
            $textos= new PryCursosCursoTxt();
            $textos->id_curso = $curso->id;
            $textos->id_idioma = $idioma->id_idioma;
            $textos->titulo = $request->input('titulo');
            $textos->texto1 = $request->input('texto1');
            $textos->texto2 = $request->input('texto2');
            $textos->pdf = $textopdf;
            $textos->save();

        }

        $data = [];
        $data['id']= $curso->id;
        $data['id_categoria']= $curso->id_categoria;
        $data['titulo']= $request->input('titulo');
        $data['texto1']= $request->input('texto1');
        $data['texto2']= $request->input('texto2');
        $data['imagen1']= $curso->imagen1;
        $data['imagen2']= $curso->imagen2;
        $data['imagen_fondo']= $curso->imagen_fondo;
        $data['pdf']= $textopdf;

        return $data;
    }
    static function eliminarCurso($id_curso, $id_proyecto)
    {
        $curso = PryCursosCurso::find($id_curso);

        File::delete('upload/'.$id_proyecto.'/cursos/img/'.$curso->imagen1);
        File::delete('upload/'.$id_proyecto.'/cursos/img/'.$curso->imagen2);
        File::delete('upload/'.$id_proyecto.'/cursos/img/'.$curso->imagen_fondo);
        File::delete('upload/'.$id_proyecto.'/cursos/pdf/'.$curso->pdf);

        $textos = $curso->textos()->get();

        foreach($textos as $item)
        {
            File::delete('upload/'.$id_proyecto.'/cursos/pdf/'.$item->pdf);
            $item->delete();
        }

        $curso->delete();

    }
    static function editCurso(Request $request)
    {
        $id_proyecto = $request->input('id_proyecto');
        $idioma = $request->input('idioma');

        $curso= PryCursosCurso::find($request->input('id_curso'));

        if (Input::hasFile('imagen1')) {

            if (!File::isDirectory('upload/'.$id_proyecto.'/cursos'))
            {
                File::makeDirectory('upload/' . $id_proyecto . '/cursos');

                if (!File::isDirectory('upload/'.$id_proyecto.'/cursos/img'))
                {
                    File::makeDirectory('upload/' . $id_proyecto . '/cursos/img');
                }
            }

            $ext = Input::file('imagen1')->getClientOriginalExtension();
            $path = 'upload/'.$id_proyecto.'/cursos/img/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('imagen1')->move($path, $filename);

            //png
            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);

            $curso->imagen1 = $filename;
        }

        if (Input::hasFile('imagen2')) {

            if (!File::isDirectory('upload/'.$id_proyecto.'/cursos'))
            {
                File::makeDirectory('upload/' . $id_proyecto . '/cursos');

                if (!File::isDirectory('upload/'.$id_proyecto.'/cursos/img'))
                {
                    File::makeDirectory('upload/' . $id_proyecto . '/cursos/img');
                }
            }

            $ext = Input::file('imagen2')->getClientOriginalExtension();
            $path = 'upload/'.$id_proyecto.'/cursos/img/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('imagen2')->move($path, $filename);

            //png
            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);

            $curso->imagen2 = $filename;
        }

        if (Input::hasFile('fondo')) {

            if (!File::isDirectory('upload/'.$id_proyecto.'/cursos'))
            {
                File::makeDirectory('upload/' . $id_proyecto . '/cursos');

                if (!File::isDirectory('upload/'.$id_proyecto.'/cursos/img'))
                {
                    File::makeDirectory('upload/' . $id_proyecto . '/cursos/img');
                }
            }

            $ext = Input::file('fondo')->getClientOriginalExtension();
            $path = 'upload/'.$id_proyecto.'/cursos/img/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('fondo')->move($path, $filename);

            //png
            $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
            $source = Tinify::fromFile($path.$filename);
            $source->toFile($path.$filename);

            $curso->imagen_fondo = $filename;
        }

        $curso->save();

        $texto = $curso->textos()->where('id_idioma','=', $idioma)->first();

        $texto->titulo = $request->input('titulo');
        $texto->texto1 = $request->input('texto1');
        $texto->texto2 = $request->input('texto2');

        if (Input::hasFile('pdf')) {

            if (!File::isDirectory('upload/'.$id_proyecto.'/cursos'))
            {
                File::makeDirectory('upload/' . $id_proyecto . '/cursos');

                if (!File::isDirectory('upload/'.$id_proyecto.'/cursos/pdf'))
                {
                    File::makeDirectory('upload/' . $id_proyecto . '/cursos/pdf');
                }
            }

            $ext = Input::file('pdf')->getClientOriginalExtension();
            $path = 'upload/'.$id_proyecto.'/cursos/pdf/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('pdf')->move($path, $filename);

            $texto->pdf = $filename;
        }

        $texto->save();

        $data = [];
        $data['id']= $curso->id;
        $data['id_categoria']= $curso->id_categoria;
        $data['titulo']= $texto->titulo;
        $data['texto1']= $texto->texto1;
        $data['texto2']= $texto->texto2;
        $data['imagen1']= $curso->imagen1;
        $data['imagen2']= $curso->imagen2;
        $data['imagen_fondo']= $curso->imagen_fondo;
        $data['pdf']= $texto->pdf;

        return $data;
    }
    static function saveConsultas($id_proyecto, $nombre, $apellido, $empresa, $telefono, $email, $mensaje)
    {
        $consulta = new PryConsulta();
        $consulta->id_proyecto = $id_proyecto;
        $consulta->nombre = $nombre;
        $consulta->apellido = $apellido;
        $consulta->empresa = $empresa;
        $consulta->telefono = $telefono;
        $consulta->email = $email;
        $consulta->mensaje = $mensaje;
        $consulta->save();
    }
    static function getProyectosPorUser($id_user)
    {
        $proyectos = DB::table('pry_proyecto')
            ->join('dat_cliente','dat_cliente.id','=','pry_proyecto.id_cliente')
            ->where('dat_cliente.id_usuario', '=', $id_user)
            ->where('pry_proyecto.deleted_at','=', null)
            ->select('pry_proyecto.id', 'pry_proyecto.nombre_proyecto')
            ->get();

        $tam =count($proyectos);
        $data = '';

        for($i=0; $i<$tam-1; $i++)
        {
            $data = $data . $proyectos[$i]->nombre_proyecto. ', ';
        }
        if(isset($proyectos[$tam-1]))
        {
            $data = $data . $proyectos[$tam-1]->nombre_proyecto;
        }
        return $data;

    }
    static function getDatosProyecto($id_proyecto)
    {
        //informacion relacionada al proyecto y cliente

        $proyecto = DB::table('pry_proyecto')
            ->join('dat_cliente', 'pry_proyecto.id_cliente', '=', 'dat_cliente.id')
            ->join('users', 'dat_cliente.id_usuario', '=', 'users.id')
            ->where('pry_proyecto.id', '=', $id_proyecto)
            ->select('users.username', 'pry_proyecto.id as id_proyecto', 'pry_proyecto.nombre_proyecto', 'pry_proyecto.dominio', 'pry_proyecto.estado',
                'dat_cliente.cliente', 'dat_cliente.razon_social', 'dat_cliente.direccion', 'dat_cliente.ruc', 'pry_proyecto.email_formulario','pry_proyecto.email_formulario2',
                'dat_cliente.nombres', 'dat_cliente.apellidop', 'dat_cliente.apellidom', 'dat_cliente.telefono', 'dat_cliente.telefono2',
                'users.email', 'users.name', 'pry_proyecto.instagram_user_id', 'pry_proyecto.twitter_timeline', 'pry_proyecto.google_analytics',
                'pry_proyecto.google_maps_key', 'pry_proyecto.instagram_token', 'pry_proyecto.descripcion_site', 'pry_proyecto.keywords',
                'pry_proyecto.e_commerce' , 'pry_proyecto.subpagina', 'pry_proyecto.multiples_idiomas', 'pry_proyecto.datos_servidores')
            ->get();

        return $proyecto;
    }
    static function buscarUsuario($valor, $tipo)
    {
        if('username'==$tipo){
            $dato = DB::table('users')
                ->select( 'users.id as idUsuario',
                    'users.username',
                    'users.email',
                    'dat_cliente.id as idCliente',
                    'dat_cliente.nombres',
                    'dat_cliente.apellidop',
                    'dat_cliente.telefono',
                    'dat_cliente.cliente')
                ->leftJoin('dat_cliente','dat_cliente.id_usuario','=','users.id')
                ->where('users.username','=',$valor)
                ->get();

        }else{
            $dato = DB::table('users')
                ->select('users.id as idUsuario',
                    'users.username',
                    'users.email',
                    'dat_cliente.id as idCliente',
                    'dat_cliente.nombres',
                    'dat_cliente.apellidop',
                    'dat_cliente.telefono',
                    'dat_cliente.cliente')
                ->leftJoin('dat_cliente','dat_cliente.id_usuario','=','users.id')
                ->where('users.email','=',$valor)
                ->get();
        }
        if($dato){
            return $dato;
        }else{
            return 0;
        }
    }
    static function buscarCliente($username, $email)
    {
        $usuario = User::where(function($query) use ($username, $email){
                        $query->where('username', $username)
                            ->orWhere('email',$email);
                    })
                        ->select('email','username')
                        ->first();
        if($usuario){
            return $usuario;
        }else{
            return 0;
        }
    }
    static function getInternas($idioma, $id_proyecto)
    {
        $textos = DB::table('pry_menu_urls')
            ->join('pry_menu_urls_txt','pry_menu_urls_txt.id_menu_url','=','pry_menu_urls.id')
            ->where('pry_menu_urls_txt.id_idioma','=', $idioma)
            ->where('pry_menu_urls.id_pry_proyecto', '=', $id_proyecto)
            ->select('pry_menu_urls.id', 'pry_menu_urls_txt.titulo', 'pry_menu_urls_txt.url')
            ->get();

        return $textos;
    }
    static function getTituloCabecera($idioma, $id_proyecto)
    {
        //obtiene titulo de cabecera principal en array de objetos

        $textos = DB::table('pry_modulo')
            ->join('pry_modulo_txt','pry_modulo_txt.id_pry_modulo','=','pry_modulo.id')
            ->where('pry_modulo_txt.id_idioma','=', $idioma)
            ->where('pry_modulo.id_proyecto', '=', $id_proyecto)
            ->where('pry_modulo.tipo_id', '=', 1)
            ->where('pry_modulo.id_menu_url', '=', 0)
            ->select('pry_modulo.id', 'pry_modulo_txt.titulo')
            ->get();

        return $textos;
    }
    static function savePryColores(Request $request)
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

        return $dato;
    }
    static function editarTituloModulo($id_modulo, $titulo, $idioma, $item_menu)
    {
        $modulo = PryModulo::find($id_modulo)->textos()->where('id_idioma','=', $idioma)->first();
        $modulo->titulo = $titulo;
        $modulo->save();

        $modulo = PryModulo::find($id_modulo);
        $modulo->item_menu = $item_menu;
        $modulo->save();
    }
    static function saveSlider(Request $request)
    {
        $id = $request->input('id_modulo_slider');
        $id_proyecto = $request->input('id_pry_slider');
        $id_sliders = $request->input('idsliders');
        $files = $request->input('cantfiles');
        $links = $request->input('link');

        $existentes= count($id_sliders);
        $total = count($files);

        for($i = 0; $i< $existentes; $i++)
        {
            $slider = PrySlider::find($id_sliders[$i]);

            if (Input::hasFile('fileslider'.$i)) {

                $ext = Input::file('fileslider'.$i)->getClientOriginalExtension();
                $path = 'upload/'.$id_proyecto.'/slider/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('fileslider'.$i)->move($path, $filename);

                $slider->imagen = $filename;

                //png
                $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path.$filename);
                $source->toFile($path.$filename);
            }
            $slider->link = $links[$i];

            $slider->save();
        }

        for($j= $existentes; $j< $total; $j++)
        {
            if (Input::hasFile('fileslider'.$j)) {;

                $ext = Input::file('fileslider'.$j)->getClientOriginalExtension();
                $path = 'upload/'.$id_proyecto.'/slider/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('fileslider'.$j)->move($path, $filename);

                $slider = new PrySlider();
                $slider->id_pry_modulo = $id;
                $slider->imagen = $filename;

                //png
                $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path.$filename);
                $source->toFile($path.$filename);

                $slider->link = $links[$j];
                $slider->save();
            }
        }
    }
    static function saveSliderImgTexto($id, $id_proyecto, $id_sliders, $texto_sliders, $texto2_sliders, $link_sliders, $files, $idioma)
    {
        $existentes= count($id_sliders);
        $total = count($files);

        for($i = 0; $i< $existentes; $i++)
        {
            $slider = PrySlider::find($id_sliders[$i]);
            $slider->link = $link_sliders[$i];

            if (Input::hasFile('fileslider'.$i)) {

                $ext = Input::file('fileslider'.$i)->getClientOriginalExtension();
                $path = 'upload/'.$id_proyecto.'/slider/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('fileslider'.$i)->move($path, $filename);

                $slider->imagen = $filename;

                //png
                $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path.$filename);
                $source->toFile($path.$filename);
            }

            $slider->save();

            $texto = $slider->textos()->where('id_idioma','=', $idioma)->first();

            $texto->texto = $texto_sliders[$i];
            $texto->texto2 = $texto2_sliders[$i];
            $texto->save();
        }
        $idiomas = ProyectoIdioma::where('id_proyecto', '=', $id_proyecto)->get();

        for($j= $existentes; $j< $total; $j++) {
            if (Input::hasFile('fileslider' . $j)) {

                $ext = Input::file('fileslider' . $j)->getClientOriginalExtension();
                $path = 'upload/' . $id_proyecto . '/slider/';
                $filename = date('dm') . '_' . uniqid() . '.' . $ext;
                $f = Input::file('fileslider' . $j)->move($path, $filename);

                $slider = new PrySlider();
                $slider->id_pry_modulo = $id;
                $slider->imagen = $filename;
                $slider->link = $link_sliders[$j];

                //png
                $prueba = Tinify::setKey("Jsn6qaRf7CQate13FO-I_l6sA2bS5BtN");
                $source = Tinify::fromFile($path . $filename);
                $source->toFile($path . $filename);

                $slider->save();

                foreach($idiomas as $idioma)
                {
                    $texto = new PrySliderTxt();
                    $texto->id_pry_slider= $slider->id;
                    $texto->id_idioma = $idioma->id_idioma;
                    $texto->texto = $texto_sliders[$j];
                    $texto->texto2 = $texto2_sliders[$j];
                    $texto->save();

                }

            }
        }
    }
    static function saveMenuUrl($id_pry_proyecto, $ids, $titulos, $urls, $idioma)
    {
        $urls_existentes = count($ids);
        $total = count($titulos);

        for($i=0; $i< $urls_existentes; $i++)
        {
            $url = PryMenuUrl::find($ids[$i])->textos()->where('id_idioma', '=', $idioma)->first();
            $url->titulo = $titulos[$i];
            $url->url = $urls[$i];
            $url->save();

        }

        for($j = $urls_existentes; $j< $total; $j++)
        {
            $url = new PryMenuUrl();
            $url->id_pry_proyecto = $id_pry_proyecto;
            $url->save();

            $idiomas = ProyectoIdioma::where('id_proyecto', '=', $id_pry_proyecto)->get();

            foreach($idiomas as $idioma)
            {
                $textos= new PryMenuUrlTxt();
                $textos->id_menu_url = $url->id;
                $textos->id_idioma = $idioma->id_idioma;
                $textos->titulo = $titulos[$j];
                $textos->url = $urls[$j];
                $textos->save();

            }
        }
    }

    static function getIdiomas($id_proyecto)
    {
        $idiomas = DB::table('pry_proyecto_idiomas')
            ->join('dat_idiomas', 'dat_idiomas.id', '=', 'pry_proyecto_idiomas.id_idioma')
            ->where('pry_proyecto_idiomas.id_proyecto', '=', $id_proyecto)
            ->select('dat_idiomas.id', 'dat_idiomas.siglas', 'dat_idiomas.icono')
            ->get();

        return $idiomas;
    }

    static function idioma_inarray($item, $array)
    {
        $existe = false;

        foreach($array as $i)
        {
            if($item==$i->id_idioma)
            {
                $existe = true;
            }
        }
        if($existe == false)
        {
            $item = $i->id_idioma;
        }

        return $item;
    }
    static function getTipografia($id_proyecto)
    {
        $tipografia = PryTipografia::where('id_proyecto','=', $id_proyecto)
            ->where('seleccionada', '=', '1')
            ->first();

        return $tipografia;
    }
    static function readTipografias($id_proyecto)
    {
        $tipografias = PryTipografia::where('id_proyecto', '=', $id_proyecto)
            ->select('id', 'estilo', 'seleccionada')
            ->get();

        return $tipografias;
    }
    static function createTipografia($titulo_url, $parrafo_url, $id_proyecto)
    {
        $clase_titulo = substr($titulo_url, stripos($titulo_url, '=')+1);
        $clase_parrafo = substr($parrafo_url, stripos($parrafo_url, '=')+1);

        $titulo = explode(":", $clase_titulo);
        $parrafo = explode(":", $clase_parrafo);

        $tipografia = new PryTipografia();
        $tipografia->id_proyecto = $id_proyecto;
        $tipografia->estilo = $titulo[0] . ' - ' . $parrafo[0];
        $tipografia->titulo = str_replace('+', '-',$titulo[0]);
        $tipografia->parrafo = str_replace('+', '-',$parrafo[0]);
        $tipografia->titulo_url = $titulo_url;
        $tipografia->parrafo_url = $parrafo_url;
        $tipografia->seleccionada = 0;
        $tipografia->save();

        $data = [];
        $data['id'] = $tipografia->id;
        $data['estilo'] = $tipografia->estilo;
        $data['titulo'] = $tipografia->titulo;
        $data['parrafo'] = $tipografia->parrafo;

        return $data;
    }
    static function deleteTipografia($id)
    {
        PryTipografia::where('id', '=', $id)->delete();
    }
    static function setTipografia($id, $id_proyecto)
    {
        PryTipografia::where('id_proyecto', '=', $id_proyecto)
            ->update(['seleccionada' => 0]);

        $tipografia = PryTipografia::find($id);
        $tipografia->seleccionada= 1;
        $tipografia->save();

        $data = [];
        $data['titulo']=$tipografia->titulo;
        $data['parrafo']=$tipografia->parrafo;
        $data['titulo_url']=$tipografia->titulo_url;
        $data['parrafo_url']=$tipografia->parrafo_url;

        return $data;
    }
    static function getAgencia($id_user)
    {
        return Agencia::where('id_user', $id_user)->first()->id;
    }
    static function updateUploadFile(Request $request)
    {
        $id_proyecto = $request->input('id_proyecto');

        $estructura = PryModuloEstructura::find($request->input('id_pry_estructura'));
     
        if (Input::hasFile('file')) {

             if (!File::isDirectory('upload/'.$id_proyecto.'/archivos'))
            {
                File::makeDirectory('upload/'.$id_proyecto.'/archivos');
            }

            $ext = Input::file('file')->getClientOriginalExtension();
            $path = 'upload/'.$id_proyecto.'/archivos/';
            $filename = date('dm') . '_' . uniqid() . '.' . $ext;
            $f = Input::file('file')->move($path, $filename);
            $estructura->url = $filename;

        }
        $estructura->save();
        
        return $filename;

    }


}