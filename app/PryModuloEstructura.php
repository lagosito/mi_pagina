<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryModuloEstructura extends Model
{
    protected $table = "pry_modulo_estructura";
    public $primaryKey = "id";
    protected $fillable = [
        'id_modulo',
        'titulo',
        'subtitulo',
        'comentario',
        'imagen',
        'imagen_movil',
        'video',
        'url',
        'url_texto',
        'es_url_externo',
        'id_idioma'
    ];
    public $timestamps = false;


}