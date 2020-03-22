<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('store-data','CrudController@store');
Route::get('get-data','CrudController@getData');
Route::Post('edit-data','CrudController@editData');
Route::get('get-data-{id}','CrudController@DeleteData');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
