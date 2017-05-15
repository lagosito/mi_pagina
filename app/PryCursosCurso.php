<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryCursosCurso extends Model
{
    protected $table = "pry_cursos_cursos";
    public $primaryKey = "id";
    protected $fillable = [
        'id_categoria',
        'imagen1',
        'imagen2',
        'imagen_fondo'
    ];
    public $timestamps = false;

    public function textos()
    {
        return $this->hasMany('App\PryCursosCursoTxt', 'id_curso', 'id');
    }
}