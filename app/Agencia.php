<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    protected $table = "dat_agencia";
    public $primaryKey = "id";
    protected $fillable = [
        'nombre_agencia',
        'id_user'
    ];
    public $timestamps = false;

   
}
