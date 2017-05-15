<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryGaleriaItemSlider extends Model
{
    protected $table = "pry_galeria_item_slider";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_galeria_item',
        'imagen'
    ];
    public $timestamps = false;
}