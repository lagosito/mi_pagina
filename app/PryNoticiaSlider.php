<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryNoticiaSlider extends Model
{
    protected $table = "pry_noticias_slider";
    public $primaryKey = "id";
    protected $fillable = [
        'id_noticia',
        'imagen'
    ];
    public $timestamps = false;
}