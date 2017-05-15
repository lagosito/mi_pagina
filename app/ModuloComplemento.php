<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ModuloComplemento extends Model
{
    protected $table = "md_modulo_complemento";
    public $primaryKey = "id";
    protected $fillable = [
        'id_md_modulo',
        'id_complemento'
    ];
    public $timestamps = false;
}