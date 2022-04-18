<?php include_once "../controllers/Product.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Интернет-магазин книг</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
    <script src="js/jquery.js"></script>
    <script src="js/my.js"></script>
</head>
<body> 
<div id="container">
    <? include_once "../templates/header.php"; ?>
  
    <div class="cont-text">
    <h1 >Интернет-магазин книг</h1>
            <p class="hello">Приветствуем в интернет-магазие книг, здесь вы сможете найти, что почитать!</p>

</div>
  
    <div class="content">
     
    
        <?php
        if(isset($goods)){
            foreach ($goods as $good){?>
                <div class="item">
                    <a href="item.php?id=<?=$good['id']?>"><img src="<?=$good['small_src']?>" alt="<?=$good['name']?>" title="<?=$good['name']?>"></a>
                    <h3 class="item-name"><a href="item.php?id=<?=$good['id']?>"><?=$good['name']?></a></h3>
                    <p class="price"><?=$good['price']?>р.</p>
                    <p class="add-to-basket"><a href="#" onclick="item(<?=$good['id']?>)" title="Добавить в корзину">Купить</a></p>
                </div>
            <?}
        }
        ?>
    </div>
    
</div>
<footer>
        <? include_once "../templates/footer.php"; ?>
    </footer>
</body>
</html>