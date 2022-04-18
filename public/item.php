<?php include_once "../controllers/Product.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Интернет-магазин книг</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <? include_once "../templates/header.php"; ?>

    <div class="content">
            <div class="item-content">
                <? if(!$good){die("Ошибка 404");} ?>
                <h2><?=$good['name']?></h2>
                <div class="img-big"><img src="<?=$good['src']?>" alt="<?=$good['name']?>" title="<?=$good['name']?>"></div>
                <div class="item_desc clearfix">
                    <h3>Описание товара:</h3>
                    <div class="short">
                        <p><?=$good['description']?></p>
                    </div>
                    <div class="o-pay">
                        <p class="price"><?=$good['price']?>р.</p>
                        <p class="add-to-basket"><a href="#" title="Добавить в корзину">Купить</a></p>
                    </div>
                </div>
            </div>
        </div>

</div>
<footer>
        <? include_once "../templates/footer.php"; ?>
    </footer>
</body>
</html>