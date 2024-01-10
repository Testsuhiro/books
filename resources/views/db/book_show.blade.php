<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍の一覧表示</title>
</head>
<body>
    <!-- foreach追加 -->
    <h1>書籍一覧</h1>
    <table  border="1" class="table">
        <thead>
            <th>ISBN</th>               <!--ISBN -->
            <th>書籍名</th>             <!--書籍名 -->
            <th>著者名</th>             <!--著者名 -->
            <th>出版社名</th>           <!--出版社名 -->
            <th>価格</th>               <!--価格 -->
        </thead>
        <tbody>
            @foreach($records as $record)
                <tr>
                    <td></td>               <!--ISBN -->
                    <td></td>               <!--書籍名 -->
                    <td></td>               <!--著者名 -->
                    <td></td>               <!--出版社名 -->
                    <td></td>               <!--価格 -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
