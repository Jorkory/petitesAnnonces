<?php $title="Accueil" ?>

<?php ob_start() ?>
<main>
    <?php foreach ($ads as $ad): ?>
        <article>
            <a href="?id=<?= $ad['id']?>">
                <div class="info">
                    <h2><?= $ad['title'] ?></h2>
                    <p><?= $ad['price'] ?> €</p>
                </div>
                <img src="<?= $ad['image'] ?>" alt="<?= $ad['title'] ?>" />
            </a>
        </article>
    <?php endforeach ?>
</main>
<?php $content=ob_get_clean() ?>

<?php require(__DIR__ . '/layout/layout.php');
            