<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PryGoogleMap extends Model
{
    protected $table = "pry_google_maps";
    public $primaryKey = "id";
    protected $fillable = [
        'id_pry_modulo',
        'direccion',
        'longitud',
        'latitud'
    ];
    public $timestamps = false;
}