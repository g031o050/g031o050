
  <?php
  try{
  $pdo = new PDO ("mysql:host=153.126.169.143; dbname=g031o050; charset=utf8','g031o050','g031o050',
  array(PDO::ATTR_EMULATE_PREPARES => false));
  }


  $stmt = $pdo->query("SELECT * FROM user ORDER BY no ASC");
  while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
   $username = $row["name"];   //データの受け取り
   $userpass = $_POST["pass"];  //データの受け取り
  echo<<<EOF

}

  $stmt = $pdo -> prepare("INSERT INTO user (name, pass) VALUES (:name, :pass)");
  $stmt->bindParam(':name', $username, PDO::PARAM_STR);
  $stmt->bindValue(':value', 1, PDO::PARAM_INT);

  $username = 'one';
  $stmt->execute();
  } catch (PDOException $e) {
    exit('データベース接続失敗。'.$e->getMessage());  //データベースに繋がらない場合のエラーメッセージ
  }

  ?>


?>



  <!DOCTYPE html>
  <html>
  <head>
    <title>確認画面</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>確認画面</h1>
        <th>ユーザー名</th>
        <th>パスワード</th>
        </tr>

      <?php
      //1行ずつ取り出し、データを表示
      while($value = $data->fetch()) {
        $values[] = $value;
      }
        foreach($values as $value){
        ?>
        <tr>
      		<td><?php echo $value['name']; ?></td>
          <td><?php echo $value['pass']; ?></td>
      	</tr>
        <?php
      }
      ?>

  </table>
</body>
</html>
