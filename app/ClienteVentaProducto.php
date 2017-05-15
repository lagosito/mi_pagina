<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ClienteVentaProducto extends Model
{
    protected $table = "shop_productos";
    public $primaryKey = "id";
    protected $fillable = [
        'id_shop_cliente',
        'id_producto',
        'costo',
        'cantidad'
    ];
    public $timestamps = false;
}