<?php

namespace App\Http\Controllers;

use App\PryEcomerceGaleriaProducto;
use App\PryGaleriaItemDetalle;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Auth;

use App\Modulo;
use App\ModuloEstructura;
use App\Proyecto;
use App\PryModulo;
use App\PryModuloEstructura;

use DB;
use Illuminate\Support\Facades\File;
use App\Console\Commands\Funciones;
use Illuminate\Http\Response;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\User;
use App\ClienteVenta;
use App\ClienteVentaPedido;
use App\ClienteVentaProducto;

use Illuminate\Support\Facades\Cookie;
use Validator;

class EcomerceController extends BaseController
{
	public $proy;

	public function __construct(Request $request)
	{
		$dominio = $request->root();
		$dominio = str_replace('www.', '', $dominio);
		$proyecto = DB::table('pry_proyecto')
			->where('dominio', $dominio)
			->first();
		$this->proy = $proyecto->id;
		
	}

	public function postCompra(Request $request)
	{
		$prod_en_carrito= Cookie::get('carrito['.$request->input('ides').']');
		$tmp = [];
		$id_proyecto = $request->input('id_proyecto');
		$md5 = $request->input('md5');

		$producto='';

		if(!$prod_en_carrito)
		{
			$producto = DB::table('pry_ecomerce_galeria_productos')
				->join('pry_galeria_item', 'pry_galeria_item.id','=','pry_ecomerce_galeria_productos.id_prod_galeria')
				->where('pry_galeria_item.id','=', $request->input('ides'))
				->select('pry_galeria_item.id', 'pry_galeria_item.item', 'pry_galeria_item.imagen', 'pry_ecomerce_galeria_productos.precio' )
				->first();

			if($producto)
			{
				$tmp['id'] = $producto->id;
				$tmp['item'] = $producto->item;
				$tmp['imagen'] = $producto->imagen;
				$tmp['precio'] = $producto->precio;
				$tmp['cantidad'] = 1;
				$tmp['md5'] = $md5;
				$tmp['proy'] = $id_proyecto;

				Cookie::queue('carrito[' . $tmp['id'] . ']', $tmp, 120);
			}

		}


		if($producto!=''){
			return response()->json($tmp);
		}
		else
		{
			if($prod_en_carrito)
			{
				return '-1';
			}

		}
	}
	public function getListaproducto(Request $request){
		$productos = DB::table('pry_galeria_item')
			->leftJoin('pry_ecomerce_galeria_productos','pry_ecomerce_galeria_productos.id_prod_galeria','=','pry_galeria_item.id')
			->select('pry_galeria_item.id as id_item', 'pry_galeria_item.item', 'pry_ecomerce_galeria_productos.id as id_ecomerce', 'pry_ecomerce_galeria_productos.precio' )
			->get();

		return view('ecomerce.ecomerce')
			->with('productos',$productos);
	}
	public function postDetalleitem(Request $request)
	{
		$id_item = $request->input('id_item');

		$detalle = PryGaleriaItemDetalle::where('id_pry_galeria_item','=', $id_item)->get();

		$html = '';

		foreach($detalle as $atributo)
		{
			$html = $html . '<div class="form-group col-sm-6">
                    		<label class="control-label">'.$atributo->label.'</label>
                    		<input class="form-control" type="text"  value="'. $atributo->valor.'" readonly/>
                			</div>';
		}

		return $html;
	}
	public function postSaveecomerceproducto(Request $request)
	{
		$id = $request->input('id_item');
		$precio = $request->input('precio_producto');

		$existente = PryEcomerceGaleriaProducto::where('id_prod_galeria','=', $id)->first();

		if($existente)
		{
			$item = PryEcomerceGaleriaProducto::find($existente->id);
			$item->precio = $precio;
			$item->save();
		}
		else
		{
			$item = new PryEcomerceGaleriaProducto();
			$item->id_prod_galeria = $id;
			$item->precio = $precio;
			$item->save();
		}

		return redirect()->back();

	}
	public function postRemoveitem(Request $request)
	{
		Cookie::queue('carrito[' . $request->input('idprod') . ']', '', -100000);
	}
	public function getRemoveitem($idprod)
	{
		Cookie::queue('carrito[' . $idprod . ']', '', -100000);

		return redirect()->back();
	}
	public function postUpdatecantidad(Request $request)
	{
		$idprod = $request->input('idprod');
		$producto = Cookie::get('carrito['.$idprod.']');

		if($producto)
		{
			$tmp = [];

			$tmp['id'] = $producto['id'];
			$tmp['item'] = $producto['item'];
			$tmp['imagen'] = $producto['imagen'];
			$tmp['precio'] = $producto['precio'];
			$tmp['cantidad'] = $request->input('cantidad');
			$tmp['md5'] = $producto['md5'];
			$tmp['proy'] = $producto['proy'];

			Cookie::queue('carrito[' . $idprod . ']', '', -100000);
			Cookie::queue('carrito[' . $idprod . ']', $tmp, 120);

			$carrito = Cookie::get('carrito');
			return $carrito;
		}

	}
	public function postReadcart(Request $request)
	{
		$productos_carrito = Cookie::get('carrito');
		$md5 = $request->input('md5');
		$carrito='';

		if($productos_carrito)
		{
			$carrito=[];

			foreach($productos_carrito as $producto)
			{
				if ($producto['md5'] == $md5)
				{
					$tmp = [];

					$tmp['id'] = $producto['id'];
					$tmp['item'] = $producto['item'];
					$tmp['imagen'] = $producto['imagen'];
					$tmp['precio'] = $producto['precio'];
					$tmp['cantidad'] = $producto['cantidad'];
					$tmp['md5'] = $producto['md5'];
					$tmp['proy'] = $producto['proy'];

					$carrito[$tmp['id']]= $tmp;
				}
			}
		}

		return $carrito;
	}


	public function getCarrito(Request $request)
	{
		$productos_carrito = Cookie::get('carrito');

		$carrito = [];

		if(isset($productos_carrito))
		{
			foreach($productos_carrito as $producto)
			{
					$tmp = [];

					$tmp['id'] = $producto['id'];
					$tmp['item'] = $producto['item'];
					$tmp['imagen'] = $producto['imagen'];
					$tmp['precio'] = $producto['precio'];
					$tmp['cantidad'] = $producto['cantidad'];
					$tmp['proy'] = $producto['proy'];

					$carrito[$tmp['id']]= $tmp;

			}
		}


		return view('ecomerce.detallepedido')
			->with('carrito', $carrito)
			->with('id_proyecto', $this->proy);
	}


	public function postRegistrocliente(Request $request)
	{
		$data = array(
			'username' => $request->input('username')
		);

		$rules = array('username' => 'required|unique:users');

		$validator = Validator::make($data, $rules);

		if ($validator->fails())
		{
			 return redirect()->back()->with('error_registro', 'El usuario ya existe.');
		}
		else
		{
			$usuario = new User();
			$usuario->nivel_id = 6;
			$usuario->username= $request->input('username');
			$usuario->email= $request->input('email');
			$usuario->password = bcrypt($request->input('password'));
			$usuario->save();

			$shop_cliente = new ClienteVenta();
			$shop_cliente->id_proyecto=$request->input('idPryct');
			$shop_cliente->id_user = $usuario->id;
			$shop_cliente->fill($request->all());

			$shop_cliente->save();

			return redirect()->back()->with('message', 'Su registro se realizó con éxito.');
		}
	}
	public function postUseravailability(Request $request)
	{
		$data = array(
			'username' => $request->input('username')
		);

		$rules = array('username' => 'required|unique:users');

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
	public function getConfirmacion($id_pedido)
	{
		$order = ClienteVentaPedido::where('id','=', $id_pedido)->first();

		$detalle = DB::table('pry_galeria_item')
			->join('shop_productos', 'shop_productos.id_producto', '=', 'pry_galeria_item.id')
			->where('shop_productos.id_shop_pedido', '=', $order->id)
			->select('shop_productos.*', 'pry_galeria_item.item')
			->get();
		//$detalle =  ClienteVentaProducto::where('id_shop_pedido', '=', $order->id)->get();

		return view('ecomerce.confirmacion')
			->with('id_proyecto', $this->proy)
			->with('order', $order)
			->with('detalle', $detalle);
	}
}

