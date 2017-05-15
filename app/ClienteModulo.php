<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ClienteModulo extends Model
{
    protected $table = "dat_cliente_modulo";
    public $primaryKey = "id";
    protected $fillable = [
        'id_md_modulo',
        'id_cliente',
        'id_agencia'
    ];
    public $timestamps = false;
}
