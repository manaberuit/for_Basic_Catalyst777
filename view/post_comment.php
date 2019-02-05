<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ひとこと掲示板</title>
<a class="nemu" href="./logout.php">ログアウト</a>
</head>
<body>
<h1>ひとこと掲示板</h1>
<form action="./controller.php" method="post">
  <?php if (count($errors) > 0) { ?>
  <ul>
    <?php foreach ($errors as $error) { ?>
    <li>
        <?php print entity_str($error); ?>
    </li>
    <?php } ?>
  </ul>
  <?php } ?>
  <label>名前：<input type="text" name="user_name"></label>
  <label>ひとこと：<input type="text" name="user_comment" size="60"></label>
  <input type="submit" name="submit" value="送信">
</form>
<?php
?>
  <ul>
    <?php
      /*
      ----------原因切り分けのためコメントアウト----------
      // 配列数分繰り返し処理を行う
      foreach ($data as $value) {
      */
    ?>
    <li>
    <form action="./controller.php" method="post">
    <input type="submit" value="削除"> 
    <!--------------原因切り分けのため、valueにただの文字列を入れておく-------------->
    <!--<input type="hidden" name="id" value="<?php print $value['id']; ?>">-->
    <input type="hidden" name="id" value="test">
    <!--------------------------------------------------------------------------->
    <input type="hidden" name="sql_kind" value="delete_post">
      <?php print $value['user_name'];?>:
      <?php print $value['user_comment'];?>
    </form>
    </li>
    <?php
      /*
      ----------原因切り分けのためコメントアウト----------
      }
      */
    ?>
  </ul>
</body>
</html>
