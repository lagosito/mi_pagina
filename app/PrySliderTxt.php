<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PrySliderTxt extends Model
{
    protected $table = "pry_slider_txt";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_slider',
        'id_idioma',
        'texto',
        'texto2'
    ];
    public $timestamps = false;

    public function slider()
    {
        return $this->belongsTo('App\PrySlider', 'id', 'id_pry_slider');
    }
}