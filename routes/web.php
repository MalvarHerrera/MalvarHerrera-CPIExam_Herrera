<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Control;

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
Route::get('/',[control::class,'viewFunction'])->name('view');
Route::get('/add',[control::class,'addFunction'])->name('add');
Route::post('/save',[control::class,'saveFunction'])->name('save');
Route::get('/edit/{id}',[control::class,'editFunction'])->name('edit');
Route::post('/update',[control::class,'updateFunction'])->name('update');
Route::get('/delete/{id}',[control::class,'deleteFunction'])->name('delete');
