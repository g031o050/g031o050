<?php
// ログインボタンが押された場合
if (isset($_POST["login"])) {
    print_r('login');
    print_r($_POST["name"]);
    print_r($_POST["pass"]);

    if (!empty($_POST["name"]) && !empty($_POST["pass"])) { //ユーザID及びパスワードが空でなければ
        $dbname = 'mysql:host=153.126.169.143;dbname=g031o050;charset=utf8';  //データベース、書式の設定
        $usrname = 'g031o050';  //ユーザー名;
        $paword = 'g031o050';  //パスワード

        try{
        $db = new PDO($dbname, $usrname, $paword, array(PDO::ATTR_EMULATE_PREPARES => false));  //データベースに接続、型変換の回避
        $stmt = $dbh->prepare("SELECT * FROM user WHERE name = :name AND pass = :pass");    //入力したユーザIDかつパスワードの情報を選択
        $stmt->bindParam(":name", $_POST["name"], PDO::PARAM_STR);
        $stmt->bindParam(":pass", $_POST["pass"], PDO::PARAM_STR);
        print_r($stmt);

        print_r($stmt->fetch(PDO::FETCH_ASSOC));
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {    //入力したユーザIDとパスワードに一致するデータがあれば
            header("Location: record.php");
            exit();  // 処理終了
        } else {
          print_r(‘データなし’);// 該当データなし
            $errorFlag = true;
            $errorMessage = 'ユーザー名あるいはパスワードに誤りがあります。';   //エラー文
        }

        } catch (PDOException $e) {
        exit(‘データベース接続失敗。’.$e->getMessage()); //データベースに繋がらない場合のエラーメッセージ
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset = "UFT-8">
 <title>ログイン</title>
</head>
<body>
 <center>
   <h1>ログイン</h1>
   <form method = "POST" action="record.php">
       ユーザ名: <input type="text" name="name" size="20" maxlength="15"> </input><br><br>
       パスワード:<input type="password" name="pass" size="20" maxlength="15"><br><br>
       <input type = "submit" name ="login" value = "ログイン" span style="color:#ff0000;"/>
     </form>
   </center>
 </body>
 </html>
