<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ClienteVenta extends Model
{
    protected $table = "shop_clientes";
    public $primaryKey = "id";
    protected $fillable = [
        'id_proyecto',
        'id_user',
        'nombre',
        'apellido',
        'email',
        'telefono',
        'pais',
        'direccion',
        'localidad',
        'region',
        'codigo_postal',
        'informacion'
    ];
    public $timestamps = false;
}