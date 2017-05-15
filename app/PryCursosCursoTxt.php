<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryCursosCursoTxt extends Model
{
    protected $table = "pry_cursos_cursos_txt";
    public $primaryKey = "id";
    protected $fillable = [
        'id_curso',
        'id_idioma',
        'titulo',
        'texto1',
        'texto2',
        'pdf'
    ];
    public $timestamps = false;

    public function curso()
    {
        return $this->belongsTo('App\PryCursosCurso', 'id', 'id_curso');
    }
}