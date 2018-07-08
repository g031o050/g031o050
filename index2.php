<?php
try{
  $db = new PDO('mysql:host=153.126.169.143; dbname=g031o050', 'g031o050', 'g031o050',
  array(PDO::ATTR_EMULATE_PREPARES => false));  //データベースに接続、型変換の回避
  $name = $_POST["name"];  //データの受け取り
  $password = $_POST["pass"];  //データの受け取り


if(!empty($_POST)){
  //エラー項目の確認
  if($_POST['name'] == ''){
    $error['name'] = 'blank';
  }
  if(strlen($_POST['pass']) < 4){
    $error['pass'] = 'length';
  }
  if($_POST['pass'] == ''){
    $error['pass'] = 'blank';
  }

  if(empty($error)){
    $_SESSION['join'] = $_POST;
    header('Location: check.php');
    exit();

    // 書き直し
if ($_REQUEST['action'] == 'rewrite'){
  $_POST = $_SESSION['join'];
}
  }
}
}
catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage()); //データベースに繋がらない場合のエラーメッセージ
}

?>





<!DOCTYPE html>
<html>
  <head>
  <meta charset = "UFT-8">
   <title>新規会員登録</title>
  </head>
  <body>
  <center>
  <h1>新規会員登録</h1>
  <form action = "" method = "POST" enctype="multipart/form-data">
  <dl>
   <dt>MY CLOSET ID<font color="blue">　必須</font></dt>
   <dd>
   <input type="text" name="name" size="35" maxlength="255"
   value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); ?>">
<?php if(!empty($error['name']) && $error['name'] == 'blank'): ?>
<p><font color="red">* ユーザー名を入力してください</font></p>
<?php endif; ?>
   </dd>
   <dt>パスワード<font color="blue">　必須</font></dt>
   <dd>
   <input type="password" name="pass" size="15" maxlength="20"
   value="<?php echo htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8'); ?>">
 <?php if(!empty($error['pass']) && $error['pass'] == 'blank'): ?>
 <p><font color="red">* パスワードを入力してください</font></p>
 <?php endif; ?>
 <?php if(!empty($error['pass']) && $error['pass'] == 'length'): ?>
 <p><font color="red">* パスワードは４文字以上で入力してください</font></p>
 <?php endif; ?>
   </dd>
  </dl>
  <div><input type="submit" value="入力内容を確認する"></div>
    </form>
  </body>
</html>
