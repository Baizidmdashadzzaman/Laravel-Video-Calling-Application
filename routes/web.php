<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VideocallController;

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

Route::get('/', [VideocallController::class,'index'])->name('videocall.index');
Route::get('/video-call-give', [VideocallController::class,'video_call_give'])->name('videocall.give');
Route::get('/video-call-take', [VideocallController::class,'video_call_take_call'])->name('videocall.take');
