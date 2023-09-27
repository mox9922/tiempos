<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendedoreController; 
use App\Http\Controllers\CompradoreController; 
use App\Http\Controllers\ConfiguracioneController;
use App\Http\Controllers\SorteoController;

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
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//****************Login */
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');


//***************************USUARIOS***************************
Route::resource('users', App\Http\Controllers\UserController::class);
Route::get('index',[App\Http\Controllers\UserController::class,'index'])->name('index');
Route::get('create',[App\Http\Controllers\UserController::class,'create'])->name('create');

//**************************************CONFIGURACIONES*********************************/
Route::resource('configuraciones', App\Http\Controllers\ConfiguracioneController::class);
Route::get('index',[App\Http\Controllers\ConfiguracioneController::class,'index']);
Route::get('create',[App\Http\Controllers\ConfiguracioneController::class,'create'])->name('create');


//**************************************SORTEOS *********************************/
Route::resource('sorteos', App\Http\Controllers\SorteoController::class);
Route::get('index',[App\Http\Controllers\SorteoController::class,'index']);
Route::get('create',[App\Http\Controllers\SorteoController::class,'create'])->name('create');


//**************************************COMISIONES *********************************/
Route::resource('comisiones', App\Http\Controllers\ComisioneController::class);

//**************************************COMISIONES *********************************/
Route::resource('restringidos', App\Http\Controllers\RestringidoController::class);




// ----------------------------- forget password ----------------------------//
Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');
