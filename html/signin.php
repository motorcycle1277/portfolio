<?php
//XSS対策('<'や'&'などのエスケープ処理)
function h($s){
  return htmlspecialchars($s,ENT_QUOTES,'utf-8');
}
//セッション開始
session_start();
//すでにログインしているユーザーの処理
if(isset($_SESSION['EMAIL'])){
  echo "ようこそ".h($_SESSION['EMAIL'])."さん<br>";
  echo "<a href='logout.php'>ログアウトする</a>";
  //プログラム終了
  exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>カフェ勉 for auwifi|ログイン</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <ul class="link">
    <li class="headlink"><a href="../index.php">トップページ</a></li>
  </ul>
  <div class="form-wrapper">
    <h1>ログイン</h1>
    <form action="login.php" method="post">
      <div class="form-item">
        <label for="id"></label>
        <input type="email" name="email" value="" required="required" placeholder="Email">
      </div>
      <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" value="" required="required" placeholder="Password">
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="Sign In">
    </div>
  </form>
  <h1>新規登録</h1>
  <form action="signup.php" method="post">
    <div class="form-item">
      <label for="id"></label>
      <input type="email" name="email" value="" required="required" placeholder="Email">
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" value="" required="required" placeholder="Password">
    </div>
    <div class="form-item">
      <label for="name"></label>
      <input type="text" name="name" value="" required="required" placeholder="Nickname">
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign Up" value="Sign Up">
    </div>
  </form>
</div>
</body>
</html>
