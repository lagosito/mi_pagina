<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = "dat_idiomas";
    public $primaryKey = "id";
    protected $fillable = [
        'idioma',
        'siglas',
        'icono'
    ];
    public $timestamps = false;
}