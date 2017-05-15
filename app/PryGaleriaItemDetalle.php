<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryGaleriaItemDetalle extends Model
{
    protected $table = "pry_galeria_item_detalle";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_galeria_item',
        'label',
        'valor',
        'id_idioma'
    ];
    public $timestamps = false;
}