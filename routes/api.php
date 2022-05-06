<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
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

Route::get('/property/all', [PropertyController::class, 'all']);
Route::get('/property/detail/{id}', [PropertyController::class, 'detail']);
Route::post('/property/post', [PropertyController::class, 'post']);
Route::put('/property/put/{id}', [PropertyController::class, 'put']);
Route::delete('/property/delete/{id}', [PropertyController::class, 'delete']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });