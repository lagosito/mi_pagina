<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
class RolComercial
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {
        switch ($this->auth->user()->nivel_id) {
            case 6:
                return redirect('ecomerce/carrito');
            case 5:
                return redirect('tester');
            case 4:
                return redirect('admin');
            case 3:
                return $next($request);
            case 2:
                return redirect('agencia');
            case 1:
                return redirect('cliente');
        }
        
    }
}
