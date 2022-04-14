<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW6</title>
</head>
<body>  
    <?php
        if (isset($_GET['a']))
            $a=($_GET['a']);
        if (isset($_GET['b'])) 
            $b=($_GET['b']);
        if (isset($_GET['sign']))
            $sign=($_GET['sign']);
            // как оптимально объединить циклы?
    
        if (isset($a)&&isset($b))
        switch ($sign) {  
            case 'sum':
                $res=$a+$b;
                break;
            case 'sub':
                $res=$a-$b;
                break;
            case 'mult':
                $res=$a*$b;
                break;
            case 'div':
                if ($b!=0) $res=$a/$b;
                else $res='none';
        }
    ?>
    <form>
        <input name="a" type="number" value="<?=$a?>">
        <select name="sign">
            <option <?php if ($sign=='sum')?> value="sum">+</option>
            <option <?php if ($sign=='sub')?> value="sub">-</option>
            <option <?php if ($sign=='mult')?> value="mult">*</option>
            <option <?php if ($sign=='div')?> value="div">/</option>
        </select>
        <input name="b" type="number" value="<?=$b?>">
        <input type="submit" value="=">
        <b><?php if (isset($res)) echo "$res"?></b>		
    </form>
</body>
</html>