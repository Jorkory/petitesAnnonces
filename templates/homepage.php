<?php $title="Accueil" ?>

<?php ob_start() ?>
<main>
    <?php foreach ($ads as $ad): ?>
        <article>
            <a href="?id=<?= $ad['id'] ?? 'error' ?>">
                <div class="info">
                    <h2><?= htmlspecialchars($ad['title']) ?></h2>
                    <p><?= $ad['price'] ?> €</p>
                </div>
                <img src="<?= $ad['image'] ?>" alt="<?= htmlspecialchars($ad['title']) ?>" />
            </a>
        </article>
    <?php endforeach ?>
</main>
<?php $content=ob_get_clean() ?>

<?php require(__DIR__ . '/layout/layout.php');
            