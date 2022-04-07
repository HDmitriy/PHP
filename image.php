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
  <a href="hw4.php"> Вернуться </a>
  <div>
    <?php
    if($_GET['name']){?>
        <img width="650" src="<?= PHOTO.$_GET['name']?>">
<?php
}
?>
  </div>
</body>
</html>