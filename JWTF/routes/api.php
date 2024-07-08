<?php


use App\Http\Controllers\BarcosController;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\SensoresController;
use App\Mail\ValidatorEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\LogHistoryController;



Route::group([

    'prefix' => 'auth'

], function ($router) {
    Route::post('register', 'App\Http\Controllers\AuthController@register');
    Route::post('login', [AuthController::class,'login'])->middleware('activate2');
    Route::post('verificarlogin',[AuthController::class,'verificarlogin'])->middleware('activate2');
    Route::post('verificar', [AuthController::class,'verifyTwoFactorCode'])->middleware(['active']);
});


Route::get('activate/{user}', 'App\Http\Controllers\AuthController@activate')->name('activate')->middleware('signed');


Route::group([
    'middleware' => ['api', 'active', 'twoFactor'],
    'prefix' => 'user'
], function ($router) {

    Route::get('get',[UserController::class,'index']);
    Route::post('post',[UserController::class,'store'])->middleware('authrole2');
    Route::delete('delete/{id}',[UserController::class,'destroy'])->middleware('authrole')->where('id','[0-9]+');
    Route::put('put/{id}',[UserController::class,'update'])->middleware('authrole2')->where('id','[0-9]+');
    Route::get('me', 'App\Http\Controllers\AuthController@me');
    


    




    
});



Route::post('guardardatos',[SensoresController::class,'store']);

Route::post('guardarValor',[SensoresController::class,'guardarValor']);

Route::get('obtenervalores',[SensoresController::class,'obtenervalores']);

Route::get('Logs/{id}',[SensoresController::class,'Logs']);


Route::get('obtenerestaciones',[SensoresController::class,'obtenerestaciones']);
Route::post('obtenerRegistrosPorEstacion/{id}',[SensoresController::class,'obtenerRegistrosPorEstacion']);
Route::post('guardarRelacionEstacion',[SensoresController::class,'guardarRelacionEstacion']);














