<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryRedesSociales extends Model
{
    protected $table = "pry_redes_sociales";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_modulo',
        'id_red_social',
        'icono',
        'url'
    ];
    public $timestamps = false;
}