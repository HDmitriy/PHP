<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW5</title>
</head>
<body>
    <main>
        <div>
            <a href="index.php">Вернуться</a>
            <?php
                include("config.php");
                $idImage = $_GET['id'];
                $sqlImg = "SELECT * FROM gallery WHERE id=$idImage";                              
                $res = mysqli_query($connect, $sqlImg);
                if (mysqli_num_rows($res) > 0) {
                        $image = mysqli_fetch_assoc($res);
                        $update = "UPDATE gallery SET Count=Count+1 WHERE id=$idImage";
                        mysqli_query($connect, $update);
                }   
            ?>
                <img src="<?= $image['Address_big'] ?>" alt="image<?= $idImage ?>">
                <h2>Количество просмотров: <?= ++$image['Count'] ?></h2>
                <a href="index.php">Вернуться</a>
        </div>
    </main>
</body>
</html>