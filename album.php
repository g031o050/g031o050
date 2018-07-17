
<!DOCTYPE html>
<html>
<head>
 <meta charset = "UFT-8">
 <title>アルバム</title>
</head>
<body>
 <center>
   <h3>アルバム</h3>
   <?php echo htmlspecialchars($_POST['name']); ?>さん</br>
   <button type="submit" class="btn btn-default" name="outer">アウター</button></br>
   <button type="submit" class="btn btn-default" name="tops">トップス</button></br>
   <button type="submit" class="btn btn-default" name="botoms">ボトムス</button></br>
   <button type="submit" class="btn btn-default" name="bag">バッグ</button></br>
   <button type="submit" class="btn btn-default" name="shoes">シューズ</button></br>
   <?php
   print("<a href=\"logout.php\" target=\"_top\">ログアウト</a>");
   ?>
     </form>
   </center>
 </body>
 </html>
