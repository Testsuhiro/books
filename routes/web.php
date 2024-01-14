<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('index');
    return view('home');
});

//Route::post('/login',[DbController::class, 'login']);               //ログイン情報のチェック
Route::get('/db/book_show',[DbController::class,'bookShow']);       //書籍の一覧表示
Route::get('/db/book_create',[DbController::class,'bookCreate']);   //書籍の登録
Route::post('db/book_result',[DbController::class,'bookResult']);     //登録処理、確認
Route::post('db/book_review',[DbController::class,'bookReview']);   //レビュー一覧表示

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//追加
Route::get('/db/book_index',[App\Http\Controllers\HomeController::class, 'bookIndex'])->name('db/book_index');