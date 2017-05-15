<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ModuloEstructura extends Model
{
    protected $table = "md_modulo_estructura";
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
        'url_texto'

    ];
    public $timestamps = false;
}