<?php
  include_once 'models/config.php';
?>
<?php
$path = PHOTO.$_FILES['userfile']['name'];
if(move_uploaded_file($_FILES['userfile'] ['tmp_name'],$path)){
    header("Location: hw4.php");
}