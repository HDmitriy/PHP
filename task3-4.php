<?php
// №3 
function sum($a,$b) {
    return $a+$b;
    }
function dif($a,$b) {
    return $a-$b;
    }
function mult($a,$b) {
    return $a*$b;
    }
function div($a,$b) {
    if($b!=0){
        return $a/$b;
        }
    }


// №4
function mathOperation($a, $b, $operation) {
    switch ($operation) {
        case "+":
            return sum($a,$b);
            break;
        case "-":
            return dif($a,$b);
            break;
        case "/":
            return div($a,$b);
            break;
        case "*":
            return mult($a,$b);
            break;
        default:
            echo "Неправильные аргументы";
            break;
    }
}

?> 