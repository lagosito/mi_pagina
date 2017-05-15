<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ProyectoIdioma extends Model
{
    protected $table = "pry_proyecto_idiomas";
    public $primaryKey = "id";
    protected $fillable = [
        'id_proyecto',
        'id_idioma'
    ];
    public $timestamps = false;
}