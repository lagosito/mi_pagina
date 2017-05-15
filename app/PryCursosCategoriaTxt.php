<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryCursosCategoriaTxt extends Model
{
    protected $table = "pry_cursos_categorias_txt";
    public $primaryKey = "id";
    protected $fillable = [
        'id_cursos_categoria',
        'id_idioma',
        'nombre'
    ];
    public $timestamps = false;

    public function categoria()
    {
        return $this->belongsTo('App\PryCursosCategoria', 'id', 'id_cursos_categoria');
    }
}