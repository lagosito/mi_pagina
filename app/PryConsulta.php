<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryConsulta extends Model
{
    protected $table = "pry_consultas";
    public $primaryKey = "id";
    protected $fillable = [
        'id_proyecto',
        'nombre',
        'apellido',
        'empresa',
        'telefono',
        'email',
        'mensaje',
    ];
}