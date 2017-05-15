<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryEcomerceGaleriaProducto extends Model
{
    protected $table = "pry_ecomerce_galeria_productos";
    public $primaryKey = "id";
    protected $fillable = [
        'id_prod_galeria',
        'precio'
    ];
    public $timestamps = false;
}