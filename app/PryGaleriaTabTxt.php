<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryGaleriaTabTxt extends Model
{
    protected $table = "pry_galeria_tabs_txt";
    public $primaryKey = "id";
    protected $fillable = [
        'id_galeria_tab',
        'id_idioma',
        'tab'
    ];
    public $timestamps = false;

    public function galeriaTab()
    {
        return $this->belongsTo('App\PryGaleriaTab', 'id', 'id_galeria_tab');
    }
}