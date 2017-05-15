<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "dat_roles";
    public $primaryKey = "id";
    protected $fillable = [
        'rol'
    ];
    public $timestamps = false;
}