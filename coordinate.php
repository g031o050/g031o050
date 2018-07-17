<?php
if($_FILES['file']){
  print_r($_FILES['file']);
}
?>
<html>
<body>
<center>
<form action="./photo.php" method="POST" enctype="multipart/form-data">
  アウター：<input type="file" name="file"><br>
  トップス：<input type="file" name="file"><br>
  ボトムス：<input type="file" name="file"><br>
  バッグ：<input type="file" name="file"><br>
  シューズ：<input type="file" name="file"><br>
  <input type="submit" value="送信">
</form>
</center>
<img src="photo2.php" />
<body>
</html>
