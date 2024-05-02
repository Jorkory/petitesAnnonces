<?php $title = htmlspecialchars($ad->title) ?>

<?php ob_start() ?>
<main>
    <section class="ad__section">
        <h2><?= htmlspecialchars($ad->title) ?></h2>
        <img src="<?= $ad->image ?>" alt="<?= htmlspecialchars($ad->title) ?>">
        <div class="info">
            <h3>Description :</h3>
            <p><?= nl2br(htmlspecialchars($ad->description)) ?></p>
        </div>
    </section>
</main>
<?php $content = ob_get_clean() ?>

<?php require(__DIR__ . '/../layout/layout.php');

