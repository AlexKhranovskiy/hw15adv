<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

//Route::get('/', function () {
//    $ = App\User::paginate(15);
//
//    $users->withPath('custom/url');
//
//    //
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/edit', [HomeController::class, 'form']);
Route::post('/edit/Create', [HomeController::class, 'create']);

Route::get('/{id}', [HomeController::class, 'advt']);

Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

//Route::prefix('advtsrr')->group(function () {
//    Route::get('/', [AdvtController::class, 'index'])->middleware('auth');
//
//    Route::match(['get', 'post'], '/create', [AdvtController::class, 'form'])->middleware('auth');
//    Route::match(['get', 'post'], '/update/{id}', [AdvtController::class, 'form'])->middleware('auth');
//
//    Route::get('/delete/{id}', [AdvtController::class, 'delete'])->middleware('auth');
//});

//Route::get('/', function () {
//    return view('layout');
//});
