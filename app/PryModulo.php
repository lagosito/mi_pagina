<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\PryModuloTxt;

class PryModulo extends Model
{
    protected $table = "pry_modulo";
    public $primaryKey = "id";
    protected $fillable = [
        'tipo_id',
        'id_proyecto',
        'id_md_modulo',
        'id_menu_url',
        'orden',
        'comentario',
        'logo',
        'logo_texto',
        'color_fondo',
        'imagen_fondo',
        'modulo_blade',
        'css_nombre',
        'custom_menu',
        'item_menu',
        'link'
    ];
    public $timestamps = false;

    public function textos()
    {
        return $this->hasMany('App\PryModuloTxt', 'id_pry_modulo', 'id');
    }
}