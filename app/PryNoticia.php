<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryNoticia extends Model
{
    protected $table = "pry_noticias";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_proyecto',
        'imagen',
        'destacado'
    ];

    public function textos()
    {
        return $this->hasMany('App\PryNoticiaTxt', 'id_noticia', 'id');
    }
}