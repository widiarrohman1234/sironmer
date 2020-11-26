<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\HomeController;


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

//->middleware('auth')
Route::prefix('admin')->middleware('auth')->group(function(){
	Route::resource('beranda', BerandaController::class);
	Route::resource('kategori', KategoriController::class);
	Route::resource('pertanyaan', PertanyaanController::class);
	Route::resource('jawaban', JawabanController::class);
	Route::resource('user', UserController::class);
});

    //login Admin
Route::get('login', [AuthController::class, 'showLoginAdmin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

	//halaman User
Route::get('/', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index']);
Route::get('beranda', [HomeController::class, 'beranda']);
Route::get('beranda/{beranda}', [HomeController::class, 'detail']);
Route::get('Q&A', [HomeController::class, 'QA']);




