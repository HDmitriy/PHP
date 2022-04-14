<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW6</title>
</head>
<body>  
    <?
    $a =($_POST['num1']);
    $b =($_POST['num2']);
    if(isset($_POST['operation'])) {
        if($a==="" || $b==="") {
            $res = "Введите числа";
        }
        else {
            switch ($_POST['operation']) {
                case '+':
                    $res = $a + $b;
                    break;
                case '-':
                    $res = $a - $b;
                    break;
                case '*':
                    $res = $a * $b;
                    break;
                case '/':
                    if ($b == 0) {
                        $res = "На ноль делить нельзя";
                    }
                    else {
                        $res = $a / $b;
                    }	
                    break;
            }
        }
    }
    ?>

    <form action="#"	method="POST">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <div>
            <input type="submit" name="operation" value="+" >
            <input type="submit" name="operation" value="-">
            <input type="submit" name="operation" value="*">
            <input type="submit" name="operation" value="/">
        </div>
    </form>
    <div>Результат: <?=$res ?></div>
  
</body>
</html>