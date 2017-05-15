<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryModuloEstructuraImg extends Model
{
    protected $table = "pry_modulo_estructura_img";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_modulo_estructura',
        'imagen',
        'imagen_movil'
    ];
    public $timestamps = false;

}