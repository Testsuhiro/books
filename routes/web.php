<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;

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
    return view('index');
});

Route::post('/login',[DbController::class, 'login']);               //ログイン情報のチェック
Route::get('/db/book_show',[DbController::class,'bookShow']);       //書籍の一覧表示
Route::get('/db/book_create',[DbController::class,'bookCreate']);   //書籍の登録
Route::post('db/book_result',[DbController::class,'bookResult']);     //登録処理、確認
