<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PassportController;
use App\Http\Controllers\WCApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//HOME
Route::get('/spa/', [WCApiController::class, 'spa'])
->name ('home.spa');





//crear tienda
Route::post('/shops/', [WCApiController::class, 'createShops'])
->name ('shops.create');

//listar tiendas
Route::get('/shops/', [WCApiController::class, 'viewShops'])
->name ('shops.view');

//Añadir cuadro
Route::post('/shops/{id}/pictures/', [WCApiController::class, 'addPicture'])
->name ('picture.create');

//Listar cuadros de una tienda
Route::get('/shops/{id}/pictures/', [WCApiController::class, 'viewPictureByShop'])
->name ('shop.pictureViewByShop');

//Listar todos los cuadros
Route::get('/show/picture/', [WCApiController::class, 'viewPictures'])
->name ('shop.pictureView');

//Burn out Shop
Route::delete('shops/{id}/pictures/', [WCApiController::class, 'destroy'])
->name ('shop.destroy');


// === Seguridad
//Register (fuera del grupo de seguidad)
Route::post('register', [PassportController::class, 'register']);
//login
Route::post('login', [PassportController::class, 'login']);

Route::post('logout', [PassportController::class, 'logout']);
//Rutas aseguradas por el middleware
Route::middleware('auth:api') -> group(function() {
    Route::post('pruebas', [PassportController::class, 'pruebasM']);
});

