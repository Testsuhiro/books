<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍の登録</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/center.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
     -->
</head>
<body>
    <h1>書籍の登録</h1>
    <form action="db/book_result" method="post"></form>
    @csrf
    ISBN<br>
    <input type="number" name="isbn" id="isbn" class="form-control" required><br>
    書籍名<br>
    <input type="text" name="book_name" id="book_name" class="form-control" required>
    <br>
    著者名<br>
    <input type="text" name="author" id="author" class="form-control" required><br>
    出版社名<br>
    <input type="text" name="company" id="company" class="company" required><br>
    価格<br>
    <input type="number" name="price" id="price" class="form-control" required><br>

    <input type="submit" value="登録" class="btn-edit">
</body>
</html>
