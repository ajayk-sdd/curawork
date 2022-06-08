<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/getSuggestion', [App\Http\Controllers\SuggestionController::class, 'index']);
Route::post('/sendRequest', [App\Http\Controllers\SuggestionController::class, 'store']);
Route::post('/getMoreSuggestions', [App\Http\Controllers\SuggestionController::class, 'addMore']);

Route::post('/getRequests', [App\Http\Controllers\RequestsController::class, 'index']);
Route::post('/acceptRequest', [App\Http\Controllers\ReceivedRequestController::class, 'Update']);
Route::post('/getMoreRequests', [App\Http\Controllers\RequestsController::class, 'addMore']);

Route::post('/getReceivedRequests', [App\Http\Controllers\ReceivedRequestController::class, 'index']);
Route::post('/getMoreAccepts', [App\Http\Controllers\ReceivedRequestController::class, 'addMore']);
Route::post('/deleteRequest', [App\Http\Controllers\RequestsController::class, 'destroy']);

Route::post('/getConnections', [App\Http\Controllers\ConnectionController::class, 'index']);
Route::post('/deleteConnection', [App\Http\Controllers\ConnectionController::class, 'destroy']);
Route::post('/getConnectionsInCommon', [App\Http\Controllers\ConnectionController::class, 'show']);
Route::post('/getMoreConnections', [App\Http\Controllers\ConnectionController::class, 'addMore']);