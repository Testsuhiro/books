<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メニュー画面</title>
    <link rel="stylesheet" href="/css/book_index.css">
</head>
<body>
    <div class="menu">
        <h1 class="title">Menu</h1>
        @csrf
        <ul>
            <li><a class="item" href="/db/book_show">書籍の一覧表示</a></li>
            <li><a class="item" href="/db/book_create">書籍の新規登録</a></li>
        </ul>
    <a class="a" href="/" class="a">Topページに戻る</a>
    </div>
</body>
</html>