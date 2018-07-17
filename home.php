<?php
session_start();
 // ログイン状態チェック
 if (!isset($_SESSION["login"])) {
header("Location: form1.php");
 exit;
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
   <h3>MY CLOSET</h3>
   <?php echo htmlspecialchars($_POST['name']); ?>さん</br>
   <button type="submit" class="btn btn-default" name="closet">クローゼット</button></br>
   <button type="submit" class="btn btn-default" name="album">アルバム</button></br>
   <button type="submit" class="btn btn-default" name="coordinate">コーディネート</button></br>
   <button type="submit" class="btn btn-default" name="calendar">カレンダー</button></br>
   <button type="submit" class="btn btn-default" name="search">検索</button></br>
   <button type="submit" class="btn btn-default" name="color">カラー</button></br>
   <?php
   print("<a href=\"logout.php\" target=\"_top\">ログアウト</a>");
   ?>
     </form>
   </center>
 </body>
 </html>
