<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryGaleriaItem extends Model
{
    protected $table = "pry_galeria_item";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_galeria_tab',
        'imagen',
        'orden',
        'width',
        'align',
        'url'
    ];
    public $timestamps = false;

    public function textos()
    {
        return $this->hasMany('App\PryGaleriaItemTxt', 'id_galeria_item', 'id');
    }
}