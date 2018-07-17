
<?php
 // セッション開始
session_start();
 // 既にログインしている場合にはメインページに遷移
 if (isset($_SESSION['login'])) {
header('Location: home.php');
 exit;
 }

$db['host'] = 'localhost';
$db['user'] = 'g031o050';
$db['pass'] = 'g031o050';
$db['dbname'] = 'g031o050';
$error = '';



 // 確認ボタンが押されたら
 if (isset($_POST["kakunin"])) {
   if (empty($_POST['name'])) {
     $error = 'IDが未入力です。';
   }else if (empty($_POST['pass'])) {
     $error = 'パスワードが未入力です。';
   }else if (empty($_POST['name']) || empty($_POST['pass'])){
     $error = 'ID・パスワードが未入力です。';
   }


 　 if (!empty($_POST['name']) && !empty($_POST['pass'])) {
    $username = $_POST['name'];
    $password = $_POST['pass'];
    $dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);
    $pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    echo 'っっdっfsdfdfsdfd';
   }
}


//  if ($id < 4) {
//  throw new Exception('パスワードは4桁以上で入力してください。');
//  }
//  }
//  try{
//  $sqlname = 'SELECT COUNT(*) FROM user WHERE `name` = '$username'';
//  $ss = $pdo->query($sqlname);
//  $count = $ss->fetchColumn();
//  $id = strlen($_POST['passoword']);
//  cheak($id,$count);
//
// $stmt = $pdo->prepare("INSERT INTO `user`(`name`, `pass`) VALUES (:username, :password)");
// $pass = password_hash($password, PASSWORD_DEFAULT);
//
// $stmt->bindParam(':username', $username, PDO::PARAM_STR);
// $stmt->bindParam(':password', $pass, PDO::PARAM_STR);
//   $stmt -> execute();
//
// $_SESSION['kakunin'] = $username;
// echo '<script>
//   alert("登録内容の確認");
// location.href="check.php";
// </script>';
//  } catch (PDOException $e) {
//  exit(‘データベース接続失敗。’.$e->getMessage()); //データベースに繋がらない場合のエラーメッセージ
//  }
//  }
// }


?>
<!DOCTYPE html>
<html>
 <head>
 <title>新規会員登録</title>
 </head>
 <body>
  <center>
 <main>
<h1>新規会員登録</h1>
 <form id="loginForm" name="loginForm" action="" method="POST">
 <p style="color:red;"><?php echo $error ?></p>
 <label for="name"> MY CLOSET ID<br>
<input type="text" id="name" name="name" placeholder="MY CLOSET ID" value="<?php if (!empty($_POST["name"])) {echo htmlspecialchars($_POST["name"], ENT_QUOTES);} ?>">
 </label><br>
 <label for="pass">パスワード<br>
 <input type="password" id="pass" name="pass" value="" placeholder="パスワード"><br>
 ※4桁以上<br>
 </label>
 <input type="submit" id="kakunin" name="kakunin" value="確認"><br>
 <a href="form1.php">ログイン</a><br>
 </form>
 </main>
</center>
 </body>
</html>
