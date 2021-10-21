<?php

require __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- /Google font -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PHP Dischi</title>
</head>

<body>

    <header>
        <img src="./img/spotify-logo.png" alt="Logo">
    </header>

    <main>
        <div class="container">
            <?php foreach ($database as $album) { ?>
                <div class="album">
                    <img src="<?= $album['poster'] ?>" alt="<?= $album['title'] . ' ' . $album['author'] ?>">
                    <h2><?= $album['title'] ?></h2>
                    <p><?= $album['author'] ?></p>
                    <p><?= $album['year'] ?></p>
                </div>
            <?php } ?>
        </div>
    </main>

</body>

</html>