<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{
    use SoftDeletes;
    protected $table = "pry_proyecto";
    public $primaryKey = "id";
    protected $fillable = [
        'nombre_proyecto',
        'dominio',
        'id_cliente',
        'ubicacion_logo',
        'tipo_menu',
        'ubicacion_menu',
        'efecto_menu',
        'tipografia',
        'font_size',
        'copyright',
        'email_formulario',
        'email_formulario2',
        'descripcion_site',
        'keywords',
        'google_analytics',
        'google_maps_key',
        'instagram_user_id',
        'instagram_token',
        'twitter_timeline',
        'custom_css',
        'contador_formulario',
        'url_proyecto',
        'thumbnail',
        'e_commerce',
        'estado',
        'id_user_registrador',
        'multiples_idiomas',
        'datos_servidores'
    ];
    public $timestamps = false;
    protected $dates = ['deleted_at'];
}