<?php
    include_once(__DIR__ . '/../libs/ads.php');
?>

<!DOCTYPE html>
<html lang-"fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Petits Annonces</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>

    <body>
        <?php require_once(__DIR__ ."/layout/header.php") ?>
            <main>
                <?php foreach ($ads as $ad): ?>
                    <article>
                        <a href="/<?= $ad['id']?>">
                        <div class="info">
                            <h2><?= $ad['title'] ?></h2>
                            <p><?= $ad['price'] ?> €</p>
                        </div>
                        <img src="<?= $ad['image'] ?>" alt="<?= $ad['title'] ?>" />
                        </a>
                    </article>
                <?php endforeach ?>
            </main>
        <?php require_once(__DIR__ . "/layout/footer.php") ?>
    </body>
</html>