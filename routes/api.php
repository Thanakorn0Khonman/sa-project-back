<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return[
        'API' => "It's Working!"
    ];
});

Route::apiResource('register', RegisterController::class);

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});

//Route::middleware('auth:api')->group(function () {
//    Route::get('/user', [UserController::class, 'getUserData']);
//});

Route::group(['middleware' => 'auth:api'], function (){
    Route::get('/user', [UserController::class, 'getUserData']);
});

Route::apiResource('products', ProductController::class);

Route::post('/cart/add/{product}',[CartController::class,'cartAdd']);
Route::delete('/cart/remove/{product}',[CartController::class,'cartRemove']);
Route::post('orders', [OrderController::class, 'store']);

