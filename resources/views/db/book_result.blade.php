<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍の登録確認</title>
</head>
<body>
    <h1>以下の書籍を登録しました</h1>
    <table class="table">
        <tr><th>ISBN</th><th>書籍名</th><th>著者名</th><th>出版社名</th><th>価格</th></tr>
        <tr>
            <td>{{ $book_id }}</td>
            <td>{{ $book_name }}</td>
            <td>{{ $book_writer }}</td>
            <td>{{ $book_pub }}</td>
            <td>{{ $book_price }}</td>
        </tr>
        <br>
        <a href="/">Topページに戻る</a>
</body>
</html>
