<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userid;
use App\Models\Book;

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

        return view('db.index');
        }
    }

    //書籍一覧表示
    public function booKShow()
    {
        $data = [
            'records' => Book::all()
        ];
        return view('db.book_show', $data);
    }

    //書籍の登録画面
    public function booKCreate()
    {
        return view('db.book_create');
    }


    //書籍登録処理、確認画面表示
    public function bookResult(Request $req)
    {
        //モデルのインスタンスを生成
        $book = new Book();

        //フォームのデータをプロパティに代入
        $book->book_id = $req->book_id;
        $book->book_name = $req->book_name;
        $book->book_writer = $req->book_writer;
        $book->book_pub = $req->book_pub;
        $book->book_price = $req->book_price;

        //テーブルにデータを保存
        $book->save();

        //登録したデータをビューに渡し、表示
        $data = [
            'book_id' =>$req->book_id,
            'book_name' => $req->book_name,
            'book_writer' => $req->book_writer,
            'book_pub' => $req->book_pub,
            'book_price' => $req->book_price
        ];
        return view('db.book_result');
    }
}
