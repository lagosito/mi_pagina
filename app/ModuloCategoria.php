<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ModuloCategoria extends Model
{
    protected $table = "md_categorias";
    public $primaryKey = "id";
    protected $fillable = [
        'id',
        'categoria'
    ];
    public $timestamps = false;
}