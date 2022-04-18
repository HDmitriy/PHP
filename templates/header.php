<link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
<header>
    <div class="logotip">
        <a class="linkhead" href='index.html'></a>
    </div>
</header>
<nav>
    <div class="menu">
        <ul class=""> 
            <li><a href="index.php" class="active alink" >Главная</a></li>
            <li><a href="guestbook.php" class="alink">Отзывы</a></li>
            <?php
            if(isset($_SESSION['login']) && isset($_SESSION['pass'])) {
                echo "<li><a class=alink href='login.php?action=profile'><u class=alink >Личный кабинет</u></a></li>";
                echo "<li><a class=alink href='login.php?action=logout'><u class=alink >Выйти</u> </a>(".$_SESSION['login'].")</li>";
            }else{
                echo "<li><a class=alink href='login.php'><u>Войти</u></a> / <a class= alink href='reg.php'><u>Регистрация</u></a></li>";
            }
            if(isset($_SESSION['login']) && isset($_SESSION['pass']) && $_SESSION['login'] == 'admin') {
            ?>
            <li><a class="alink" href="../admin/">Меню админа</a></li>
            <?}?>
        </ul>
    </div>
</nav>
<?
    if(isset($_SESSION['basket'])) {
        echo "<h3 class=\"basket\">Корзина: <span class=\"basket-items\"><a href='basket.php'><u>Просмотреть выбранные товары</u></a></span></h3>";
    }else{
        echo "<h3 class=\"basket\">Корзина: <span class=\"basket-items\">Товары не выбраны</span></h3>";
    }
?>

