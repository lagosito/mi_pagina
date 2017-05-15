<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryModuloTxt extends Model
{
    protected $table = "pry_modulo_txt";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_modulo',
        'id_idioma',
        'titulo',
    ];
    public $timestamps = false;

    public function modulo()
    {
        return $this->belongsTo('App\PryModulo', 'id', 'id_pry_modulo');
    }
}