<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userid;

class DbController extends Controller
{
    /*public function login(Request $req)
    { 
        $validUser = Userid::select('user_id')->get();
        $validPass = Userid::select('pass')->get();

        
        /*ログイン情報のチェック
        ID、passはDBから持ってきて、変数に代入
        入力したデータと合致するかチェック

    
        //フォームから指名のデータを取得(name="userName")
        $userId = $req->userId;
        pass = $req->pass;

        //入力チェック
        if(!isset($userId) || !isset($pass)) {
            //変数が存在しない場合
            return redirect("/");  //ログインページに強制移動
        }

        if(strlen($userId) === 0 || strlen($pass) === 0) {
            //未入力の場合
            return redirect("/");  //ログインページに強制移動
        }
        if($userId === $validUser && $pass === $validPass) {

            return view('top.result');
        }  
    }*/

    //ログイン機能テスト

    public function login(Request $req)
    {
        $validUser = "okawa";
        $validPass = "jel9102";

        $userId = $req->userId;
        $password = $req->password;

        //バリデーション処理に変更する
        if(!isset($userId) || !isset($password)) {
            return redirect("/");  
        }

        if(strlen($userId) === 0 || strlen($password) === 0) {
            return redirect("/");  
        }

        if($userId === $validUser && $password === $validPass){

        return view('db.result');
        }
    }

    public function bookShow()
    {
        return view('db.book_show');
    }

    public function bookCreate()
    {
        return view('db.book_create');
    }
}