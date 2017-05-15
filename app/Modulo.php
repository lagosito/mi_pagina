<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $table = "md_modulo";
    public $primaryKey = "id";
    protected $fillable = [
        'tipo_id',
        'orden',
        'titulo',
        'comentario',
        'logo',
        'logo_texto',
        'color_fondo',
        'imagen_fondo',
        'modulo_blade',
        'css_nombre',
        'imagen',
        'custom_menu'
    ];
    public $timestamps = false;
}