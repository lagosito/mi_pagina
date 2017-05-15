<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return redirect('login');
});
*/
Route::controller('ecomerce','EcomerceController');
Route::controller('admin','AdminController');
Route::controller('comercial','ComercialController');
Route::controller('agencia','WebmasterController');
Route::controller('cliente','ClienteController');
Route::controller('pasareladepagos','PagosController');
Route::controller('tester','TesterController');
Route::controller('paypal','PaypalController');

Route::get('salir',[
    'uses' => 'Auth\AuthController@getLogout',
    'as'   => 'logout'
]);
Route::get('migrar',[
    'uses' => 'AdminController@getMigraridiomas',
    'as'   => 'migrar'
]);
Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PaypalController@postPayment',
));

Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));
Route::get('login',[
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'login'
]);
Route::post('login', 'Auth\AuthController@postLogin');

// Password reset link request routes...
Route::get('reestablecerpassword',[
    'uses' => 'Auth\PasswordController@getEmail',
    'as' => 'reestablecerpassword'
]);
Route::post('reestablecerpassword', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::post('resetpassword',[
    'uses' => 'Auth\PasswordController@postReset',
    'as' => 'resetpassword'
]);
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
/*Route::post('password/reset', 'Auth\PasswordController@postReset');*/
Route::get('borrador/{idproyecto}/{idcliente}/', 'FrontVer@getProyecto');
Route::get('borrador/{idproyecto}/{idcliente}/{urlamigable}', 'FrontVer@getProyecto');
Route::get('/{urlamigable}', 'FrontController@proyecto');
Route::get('/', 'FrontController@proyecto');
Route::controller('/', 'FrontController');



