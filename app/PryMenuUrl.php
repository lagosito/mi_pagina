<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class PryMenuUrl extends Model
{
    protected $table = "pry_menu_urls";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_proyecto',
        'titulo',
        'url'
    ];
    public $timestamps = false;

    public function textos()
    {
        return $this->hasMany('App\PryMenuUrlTxt', 'id_menu_url', 'id');
    }

}