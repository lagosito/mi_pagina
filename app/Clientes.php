<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = "dat_cliente";
    public $primaryKey = "id";
    protected $fillable = [
        'nombres',
        'apellidop',
        'apellidom',
        'telefono',
        'telefono2',
        'id_usuario',
        'razon_social',
        'direccion',
        'ruc',
        'cliente',
        'id_webmaster',
        'id_agencia',
        'url_cliente'
    ];
    public $timestamps = false;
}
