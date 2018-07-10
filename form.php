<!DOCTYPE html>

<html>
<head>
  <meta charset = "UFT-8">
  <title>ログイン</title>
</head>
<body>
  <center>
    <h1>ログイン</h1>
    <form method = "POST" action = "record.php">
        ユーザ名:<input type="text" name="name"size="20"maxlength="15"><br><br>
        パスワード:<input type="password" name="pass"size="20"maxlength="15"><br><br>
        <input type = "submit" value = "ログイン" span style="color:#ff0000;"/>
      </form>
    </center>
  </body>
  </html>




  <?php
  $dbname = "mysql:host=153.126.145.118;dbname=g031o070;charset=utf8";  //データベース、書式の設定
  $usrname = "g031o070";  //ユーザー名
  $paword = "g031o070";  //パスワード
  try{
    $db = new PDO($dbname, $usrname, $paword, array(PDO::ATTR_EMULATE_PREPARES => false));  //データベースに接続、型変換の回避
  } catch (PDOException $e) {
    exit('データベース接続失敗。'.$e->getMessage()); //データベースに繋がらない場合のエラーメッセージ
  }
  ?>

  <?php
  try{
  $dbname = "mysql:host=localhost;dbname=g031o050;charset=utf8",'test','test';  //データベース、書式の設定
  array(PDO::ATTR_EMULATE_PREPARES => false));
  }
    $db = new PDO($dbname, $username, $userpass, array(PDO::ATTR_EMULATE_PREPARES => false));  //データベースに接続、型変換の回避
  } catch (PDOException $e) {
    exit('再度入力してください。'.$e->getMessage()); //データベースに繋がらない場合のエラーメッセージ
  }
  ?>
