<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ClienteVentaPedido extends Model
{
    protected $table = "shop_pedidos";
    public $primaryKey = "id";
    protected $fillable = [
        'id_shop_cliente',
        'subtotal',
        'costo_envio'
    ];
}