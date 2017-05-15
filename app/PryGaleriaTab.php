<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryGaleriaTab extends Model
{
    protected $table = "pry_galeria_tabs";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_modulo'
    ];
    public $timestamps = false;

    public function textos()
    {
        return $this->hasMany('App\PryGaleriaTabTxt', 'id_galeria_tab', 'id');
    }
}