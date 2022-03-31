<?php 
// №1 
$a = rand(-5, 5);
$b = rand(-5, 5);

if($a >= 0 && $b >= 0){
    if($a > $b){
        echo  $res = $a - $b;
    } 
    else {
        echo  $res = $b - $a;
           }
}
else if($a<0 && $b<0) {
    echo  $res = $a * $b;
}
else {
    echo  $res = $a + $b;
}
?>