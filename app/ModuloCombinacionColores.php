<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ModuloCombinacionColores extends Model
{
    protected $table = "md_combinacion_colores";
    public $primaryKey = "id";
    protected $fillable = [
        'id_md_modulo',
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