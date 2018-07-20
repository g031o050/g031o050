<?php
session_start();
// ログイン状態チェック
if (!isset($_SESSION["NAME"])) {
	header("Location: logout.php");
	exit;
}
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>メイン</title>
	</head>
	<body>
    <center>
		<h1>メイン画面</h1>
		<!-- ユーザーIDにHTMLタグが含まれても良いようにエスケープする -->
		<p>ようこそ<u><?php echo htmlspecialchars($_SESSION["NAME"], ENT_QUOTES); ?></u>さん</p>  <!-- ユーザー名をechoで表示 --> <!-- uタグはアンダーバー -->
      <a href="closet.php"><img src="closeticon2.jpg" alt="TAG closet" border="0" width="150" height="150"></a>
      <a href="album.php"><img src="albumicon.jpg" alt="TAG album" border="0" width="150" height="150"></a>
      <a href="coordinate.php"><img src="coordinateicon.jpg" alt="TAG coordinate" border="0" width="150" height="150"></a>
      <a href="calendar.php"><img src="calendaricon.jpg" alt="TAG calendar" border="0" width="150" height="150"></a>
      <a href="search.php"><img src="searchicon.jpg" alt="TAG searchi" border="0" width="150" height="150"></a>
      <a href="color.php"><img src="coloricon.jpg" alt="TAG color" border="0" width="150" height="150"></a><br>
			<a href="logout.php">ログアウト</a>
  </center>
	</body>
</html>
