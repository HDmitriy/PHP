<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW5</title>
</head>
<body>
    <main>
        <div>
            <?php
            include("config.php");
                $sql = "SELECT * FROM gallery ORDER BY Count DESC";
                $table = mysqli_query($connect, $sql);
                while ($data = mysqli_fetch_assoc($table)) : ?>
                    <a href='image.php?id=<?= $data['id'] ?>'>
                        <img  src='<?= $data['Address_small'] ?>' alt='img"<?= $data['Name'] ?>'>
                    </a>
            <?php endwhile; ?>
        </div>
    </main>
</body>
</html>