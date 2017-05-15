<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryCursosSector extends Model
{
    protected $table = "pry_cursos_sectores";
    public $primaryKey = "id";
    protected $fillable = [
        'id_proyecto',
        'icono',
        'icono_activo',
        'link'
    ];
    public $timestamps = false;

    public function textos()
    {
        return $this->hasMany('App\PryCursosSectorTxt', 'id_cursos_sector', 'id');
    }
}