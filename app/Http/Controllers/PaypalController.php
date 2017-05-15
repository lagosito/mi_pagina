<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

use App\ClienteVenta;
use App\ClienteVentaPedido;
use App\ClienteVentaProducto;
use Auth;
use DB;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class PaypalController extends BaseController
{
    private $_api_context;
    public $proy;
    public $id_pedido;

    public function __construct(Request $request)
    {
        // setup PayPal api context
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);

        //set proyecto

        $dominio = $request->root();
        $dominio = str_replace('www.', '', $dominio);
        $proyecto = DB::table('pry_proyecto')
            ->where('dominio', $dominio)
            ->first();
        $this->proy = $proyecto->id;
    }

    public function postPayment(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $items = array();
        $subtotal = 0;
        $cart = Cookie::get('carrito');
        $currency = 'USD';

        foreach($cart as $producto){

            if($producto['proy']== $this->proy)
            {
                $item = new Item();
                $item->setName($producto['item'])
                    ->setCurrency($currency)
                    ->setQuantity($producto['cantidad'])
                    ->setPrice($producto['precio']);

                $items[] = $item;
                $subtotal += $producto['cantidad'] * $producto['precio'];
            }
        }

        $item_list = new ItemList();
        $item_list->setItems($items);

        $details = new Details();
        $details->setSubtotal($subtotal)
            ->setShipping(0);

        $total = $subtotal + 0;

        $amount = new Amount();
        $amount->setCurrency($currency)
            ->setTotal($total)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Pedido de prueba en mi Laravel App Store');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
            ->setCancelUrl(\URL::route('payment.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Ups! Algo salió mal');
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // add payment ID to session
        \Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {
            // redirect to paypal
            return \Redirect::away($redirect_url);
        }

        return redirect('ecomerce/carrito');

    }

    public function getPaymentStatus()
    {
        // Get the payment ID before session clear
        $payment_id = \Session::get('paypal_payment_id');

        // clear the session payment ID
        \Session::forget('paypal_payment_id');

        $payerId = \Input::get('PayerID');
        $token = \Input::get('token');

        if (empty($payerId) || empty($token)) {
            return redirect('ecomerce/carrito');
        }

        $payment = Payment::get($payment_id, $this->_api_context);

        $execution = new PaymentExecution();
        $execution->setPayerId(\Input::get('PayerID'));

        $result = $payment->execute($execution, $this->_api_context);


        if ($result->getState() == 'approved') {

            $this->saveOrder();
            $this->forgetCookie();

            return redirect('ecomerce/confirmacion/'.$this->id_pedido);


            /*return \Redirect::route('/')
                ->with('message', 'Compra realizada de forma correcta');*/
        }
        return 'cancelado';
        /*return \Redirect::route('/')
            ->with('message', 'La compra fue cancelada');*/
    }

    protected function saveOrder()
    {
        $subtotal = 0;
        $cart = Cookie::get('carrito');
        $shipping = 0;

        foreach($cart as $producto){
            if($producto['proy']== $this->proy) {
                $subtotal += $producto['cantidad'] * $producto['precio'];
            }
        }
        $cliente = ClienteVenta::where('id_user', '=', Auth::user()->id)->select('id')->first();

        $nueva_orden= new ClienteVentaPedido();
        $nueva_orden->id_shop_cliente = $cliente->id;
        $nueva_orden->subtotal = $subtotal;
        $nueva_orden->costo_envio = $shipping;
        $nueva_orden->save();

        $this->id_pedido= $nueva_orden->id;

        /*$order = Order::create([
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'user_id' => \Auth::user()->id
        ]);*/

        foreach($cart as $producto){
            if($producto['proy']== $this->proy) {
                $this->saveOrderItem($producto, $nueva_orden->id);
            }
        }
    }

    protected function saveOrderItem($producto, $orden_id)
    {
        $pedido = new ClienteVentaProducto();
        $pedido->id_shop_pedido = $orden_id;
        $pedido->id_producto = $producto['id'];
        $pedido->costo = $producto['precio'];
        $pedido->cantidad = $producto['cantidad'];
        $pedido->save();

        /*OrderItem::create([
            'price' => $producto->price,
            'quantity' => $producto->quantity,
            'product_id' => $producto->id,
            'order_id' => $order_id
        ]);*/
    }

    protected function forgetCookie()
    {
        $carrito = Cookie::get('carrito');

        foreach($carrito as $producto)
        {
            if($producto['proy']== $this->proy) {
                Cookie::queue('carrito[' . $producto['id'] . ']', '', -100000);
            }
        }
    }

}