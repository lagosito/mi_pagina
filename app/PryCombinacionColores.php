<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryCombinacionColores extends Model
{
    protected $table = "pry_combinacion_colores";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_modulo',
        'fondo',
        'titulo',
        'subtitulo',
        'comentario',
        'color_boton',
        'color_menu',
        'color_menucat',
        'color_menucatfondo'
    ];
    public $timestamps = false;
}