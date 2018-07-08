<?php
try{
$pdo = new PDO ('mysql:host=153.126.169.143; dbname=g031o050;','g031o050','g031o050',
array(PDO::ATTR_EMULATE_PREPARES => false));
$name = $_POST["name"];  //データの受け取り
 $password = $_POST["pass"];  //データの受け取り

if(!isset($_SESSION['join'])){
  header('Location: index2.php');
  exit();
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	//登録処理をする
	$sql = sprintf('INSERT INTO users SET name="%s", pass="%s"',
		mysqli_real_escape_string($db, $_SESSION['join']['name']),
		mysqli_real_escape_string($db, sha1($_SESSION['join']['pass']))
	);
	mysqli_query($db, $sql) or die(mysqli_error($db));
	unset($_SESSION['join']);

	header('Location: ok.php');


  $stmt = $db -> prepare("INSERT INTO users (name, pass) VALUES (:name, :pass)");  //insert文
     //user_id(AUTO_INCREMENT)
     $stmt->bindParam(":name", $name, PDO::PARAM_STR);  //パラメータ、変数、型の指定
     $stmt->bindParam(":pass", $password, PDO::PARAM_STR);  //パラメータ、変数、型の指定
     $stmt->execute();  //実行
     $qry = "SELECT * FROM users";  //userテーブルの全レコードを取得
     $data = $db -> query($qry);  //クエリの実行
     $db = null;  //データベースの切断
   }
}catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}
?>





<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>新規会員登録</title>
</head>
<body>
  <form action="" method="post">
  <dl>
    <dt>MY CLOSET ID</dt>
    <dd>
      <?php echo htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES, 'UTF-8'); ?>
    </dd>
    <dt>パスワード</dt>
    <dd>
      【表示されません】
    </dd>
  </dl>
  <div><a href="index2.php?action=rewrite">&laquo;&nbsp;キャンセル</a>
  <input type="submit" value="登録する"></div>
  </form>
</body>
</html>
