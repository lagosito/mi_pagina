<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryTipografia extends Model
{
    protected $table = "pry_tipografia_personalizada";
    public $primaryKey = "id";
    protected $fillable = [
        'id_proyecto',
        'estilo',
        'titulo',
        'parrafo',
        'titulo_url',
        'parrafo_url',
        'seleccionada'
    ];
    public $timestamps = false;

}