<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use Monolog\Processor\WebProcessor;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[WebController::class,'Index'])->name('main');

Route::get('/create-user',[WebController::class,'createUser'])->name('adduser');
Route::get('/create-dept',[WebController::class,'Createdepartment'])->name('adddept');
Route::post('/store/dept',[WebController::class,'Storedepartment'])->name('store');
Route::post('/store/user',[WebController::class,'storeUser'])->name('user');

