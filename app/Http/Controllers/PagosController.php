<?php

namespace App\Http\Controllers;

use App\ClienteVenta;
use App\ClienteVentaProducto;
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

use Illuminate\Support\Facades\Cookie;
use Validator;

class PagosController extends BaseController
{


    public function __construct(Request $request)
    {

    }
    public function getIndex()
    {

    }
    public function getCarritocompras($md5)
    {
        $productos_carrito = Cookie::get('productos_carrito');

        $carrito = [];

        if(isset($productos_carrito))
        {
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


        return view('ecomerce.pagos')
            ->with('carrito', $carrito);
    }
    public function postCarrito(Request $request)
    {
        $ides = $request->input('idesprd');
        $cantidades = $request->input('quantity');

        return view('ecomerce.pagos')
        ->with('proyecto',$request->input('idPryct'))
        ->with('ides',$ides)
        ->with('cantidades',$cantidades);
        /*$carrito = $request->input('carrito');
        $md5 = $request->input('md5');

        if(isset($carrito)) {

            foreach ($carrito as $producto) {
                if ($producto['md5'] == $md5) {
                    $tmp = [];

                    $tmp['id'] = $producto['id'];
                    $tmp['item'] = $producto['item'];
                    $tmp['imagen'] = $producto['imagen'];
                    $tmp['precio'] = $producto['precio'];
                    $tmp['cantidad'] = $producto['cantidad'];
                    $tmp['md5'] = $producto['md5'];
                    $tmp['proy'] = $producto['proy'];

                    Cookie::queue('productos_carrito[' . $tmp['id'] . ']', '', -100000);
                    Cookie::queue('productos_carrito[' . $tmp['id'] . ']', $tmp, 120);
                }

            }
        }*/
        return 1;

    }
    public function getCarrito(Request $request)
    {
        return "Sin acceso";

    }
    public function postRegistropedido(Request $request)
    {
        $ides = $request->input('ides');
        $cantidades = $request->input('cantidades');

        $shop_cliente = new ClienteVenta();
        $shop_cliente->id_proyecto=$request->input('id_proyecto');
        $shop_cliente->fill($request->all());

        $shop_cliente->save();
        $i = 0;

        foreach($ides as $id)
        {
            $nuevo = new ClienteVentaProducto();
            $nuevo->id_shop_cliente = $shop_cliente->id;
            $nuevo->id_producto = $id;
            $nuevo->cantidad = $cantidades[$i];

            $costo = PryEcomerceGaleriaProducto::where('id_prod_galeria', '=', $id)->first();

            $nuevo->costo = $costo->precio;
            $nuevo->save();

            $i++;
        }
        return redirect('pasareladepagos/compra/'.$shop_cliente->id);
    }
    public function getCompra($id_compra)
    {
        $shop_cliente= ClienteVenta::where('id','=', $id_compra)->first();

        $productos = DB::table('pry_galeria_item')
            ->join('shop_productos','pry_galeria_item.id','=','shop_productos.id_producto')
            ->where('shop_productos.id_shop_cliente','=', $id_compra)
            ->select('shop_productos.*', 'pry_galeria_item.item')
            ->get();

        return view('ecomerce.resumenpedido')
            ->with('cliente',$shop_cliente)
            ->with('productos',$productos);
    }


}

