<?php
  include_once 'models/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Работа с файлами</title>
</head>
<body>
<?php
    $images = array_slice(scandir(PHOTO), 2);
        for($i = 0;$i < count($images);$i++){?>
            <a href="image.php?name=<?= $images[$i]?>">
                <img width="250" src="<?=PHOTO.$images[$i]?>">
            </a> 
<?php
}?>

    <form action="server.php" method="POST" enctype="multipart/form-data">
      <span> <b>Выберите файл </b> </span>
      <input type="file" name="userfile"  accept="image/*"> 
      <input type="submit" value="Загрузить">
    </form>
  
</body>
</html>