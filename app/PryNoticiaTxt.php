<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryNoticiaTxt extends Model
{
    protected $table = "pry_noticias_txt";
    public $primaryKey = "id";
    protected $fillable = [
        'id_noticia',
        'id_idioma',
        'titulo',
        'texto',
        'introduccion'
    ];
    public $timestamps = false;

    public function noticia()
    {
        return $this->belongsTo('App\PryNoticia', 'id', 'id_noticia');
    }
}