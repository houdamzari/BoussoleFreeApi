<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserrsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/generate-pdf', [
    'uses' => 'App\Http\Controllers\UserrsController@generatePDF',
    'as' => 'generate'
]);

Route::get('/', [UserrsController::class, 'index']);
Route::post('store-form', [UserrsController::class, 'store']);

//retrive data
Route::get('/redirect', [UserrsController::class, 'redirect']);

