<?php ini_set('display_errors',1); ?>
<?php session_start();?>
<?php require_once('html/config.php');?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>カフェ勉 for auwifi</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
    <h1 class="title">カフェ勉 for auwifi</h1>
      <nav>
        <ul>
          <?php require_once('html/header.php'); ?>
        </ul>
      </nav>
    </header>
    <div class="clear"></div>
    <main>
      <form action="html/stationdata.php" method="post">
        <label for="stationfind">駅選択:</label>
        <select name="stationfind" id="stationfind">
          <option value="nagoya">名古屋</option>
          <option value="tokyo">東京</option>
          <option value="oosaka">大阪</option>
        </select>
        <input type="submit" value="送信">
      </form>
      <br>
        <?php
      echo '<div class="tenpo">';
      if(isset($_SESSION['stationname'])){
      if($_SESSION['stationname'] == "nagoya" || "tokyo" || "oosaka"){
        require_once("html/find.php");
       }
      }
      echo '</div>';
      ?>
    </main>
    <footer>
      <hr>
      <a href="html/about.html" class="index-footer">カフェ勉forauwifiの使い方</a>
    </footer>
  </body>
</html>
