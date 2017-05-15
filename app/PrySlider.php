<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PrySlider extends Model
{
    protected $table = "pry_slider";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_modulo',
        'imagen',
        'link'
    ];
    public $timestamps = false;

    public function textos()
    {
        return $this->hasMany('App\PrySliderTxt', 'id_pry_slider', 'id');
    }
}