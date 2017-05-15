<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryCursosSectorTxt extends Model
{
    protected $table = "pry_cursos_sectores_txt";
    public $primaryKey = "id";
    protected $fillable = [
        'id_cursos_sector',
        'id_idioma',
        'nombre',
    ];
    public $timestamps = false;

    public function sector()
    {
        return $this->belongsTo('App\PryCursosSector', 'id', 'id_cursos_sector');
    }
}