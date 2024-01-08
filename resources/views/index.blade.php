<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <!-- <form action="/login" method="post">
        @csrf
        ユーザID　：<input type="text" name="userId" require><br>
        パスワード：<input type="text" name="pass" require><br>
        <input type="submit" value="ログイン">
    </form> -->

    <div class="form-wrapper">
  <h1>LOGIN</h1>
  <form action="/login" method="post">
    @csrf
    <div class="form-item">
      <!-- <label for="useId"></label> -->
      <input type="text" name="userId" required="required" placeholder="User ID"></input>
    </div>
    <div class="form-item">
      <!-- <label for="password"></label> -->
      <input type="password" name="password" required="required" placeholder="Password"></input>
    </div>
    <!-- <div class="button-panel"> このdivタグは無くてもいい--> 
      <input type="submit" class="button" title="Login" value="Login"></input>
    <!-- </div> -->
  </form>
  <!-- <div class="form-footer">            //ログイン情報忘れたときの機能。余裕があれば
    <p><a href="#">Create an account</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div> -->
</div>
</body>
</html>