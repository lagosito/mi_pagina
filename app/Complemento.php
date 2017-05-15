<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Complemento extends Model
{
    protected $table = "dat_complementos";
    public $primaryKey = "id";
    protected $fillable = [
        'nombre'
    ];
    public $timestamps = false;
}