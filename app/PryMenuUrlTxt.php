<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryMenuUrlTxt extends Model
{
    protected $table = "pry_menu_urls_txt";
    public $primaryKey = "id";
    protected $fillable = [
        'id_menu_url',
        'id_idioma',
        'titulo',
        'url'
    ];
    public $timestamps = false;

    public function menuurl()
    {
        return $this->belongsTo('App\PryMenuUrl', 'id', 'id_menu_url');
    }
}