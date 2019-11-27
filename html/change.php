<?php
//セッション開始
session_start();
//セッションがなかった場合インデックスページにリダイレクト
if(!isset($_SESSION['EMAIL'])){
  header( "Location: ./index.php" ) ;
	exit ;
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>カフェ勉 for auwifi|会員情報変更</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <ul class="link">
      <li class="headlink"><a href="logout.php">ログアウト</a></li>
      <li class="headlink"><a href="../index.php">トップページ</a></li>
    </ul>
    <div class="form-wrapper">
    <h1>会員情報変更</h1>
    <form action="change-output.php" method="post">
      <div class="form-item">
      <label for="id"></label>
      <input type="email" name="email" value="" required="required" placeholder="Email">
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" value="" required="required" placeholder="Password">
    </div>
    <div class="button-panel">
      <input type="submit" value="送信">
    </div>
    </form>
  </body>
</html>
