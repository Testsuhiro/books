<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍の登録</title>
</head>
<body>
    <h1>レビューの新規投稿</h1>
    <form action="db/book_create" method="post"></form>
    @csrf
    社員名<br>
    <input type="text" name="user_name" id="user_name" class="form-control" required>
    <br>
    レビュー<br>
    <textarea name="review" id="review" class="form-control" rows="3" required></textarea>

</body>
</html>
