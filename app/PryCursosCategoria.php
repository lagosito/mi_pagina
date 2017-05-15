<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryCursosCategoria extends Model
{
    protected $table = "pry_cursos_categorias";
    public $primaryKey = "id";
    protected $fillable = [
        'id_sector'
    ];
    public $timestamps = false;

    public function textos()
    {
        return $this->hasMany('App\PryCursosCategoriaTxt', 'id_cursos_categoria', 'id');
    }
}