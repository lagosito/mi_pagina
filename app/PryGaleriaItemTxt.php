<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryGaleriaItemTxt extends Model
{
    protected $table = "pry_galeria_item_txt";
    public $primaryKey = "id";
    protected $fillable = [
        'id_galeria_item',
        'id_idioma',
        'item',
        'texto'
    ];
    public $timestamps = false;

    public function galeriaItem()
    {
        return $this->belongsTo('App\PryGaleriaItem', 'id', 'id_galeria_item');
    }
}