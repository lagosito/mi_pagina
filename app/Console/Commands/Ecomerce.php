<?php

namespace App\Console\Commands;

use App\Agencia;
use App\ClienteModulo;
use App\Clientes;
use App\CombinacionColores;
use App\ModuloCombinacionColores;
use App\ModuloComplemento;
use App\PryCombinacionColores;
use App\PryGaleriaItem;
use App\PryGaleriaItemDetalle;
use App\PryGaleriaItemSlider;
use App\PryGaleriaTab;
use App\PryGoogleMap;
use App\PryMenuUrl;
use App\PryRedesSociales;
use App\PrySlider;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

use DB;
use Auth;
use App\Modulo;
use App\ModuloEstructura;
use App\PryModulo;
use App\PryModuloEstructura;

use App\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;


class Ecomerce extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    static function CostoProd($idItem)
    {
        
    }
    static function ComprasPY($ides,$cantidades){
        for ($i=0; $i < sizeof($ides) ; $i++) { 
            $producto = DB::table('pry_ecomerce_galeria_productos')
                ->join('pry_galeria_item', 'pry_galeria_item.id','=','pry_ecomerce_galeria_productos.id_prod_galeria')
                ->where('pry_galeria_item.id','=', $ides[$i])
                ->select('pry_galeria_item.id', 'pry_galeria_item.item', 'pry_galeria_item.imagen', 'pry_ecomerce_galeria_productos.precio' )
                ->first();
            if ($producto){
        ?>
            <tr>
                <td></td>
                <td><?php echo $producto->item; ?></td>
                <td><?php echo $cantidades[$i]; ?></td>
                <td><?php echo $producto->precio; ?></td>
                <td>$<?php echo number_format($producto->precio*$cantidades[$i],2); ?>
                    <input type="hidden" class="costoPrd" value="<?php echo $producto->precio*$cantidades[$i]; ?>">
                </td>
            </tr>
        <?php
            }
        }
    }
    
}