<?php $title = "Page introuvable" ?>

<?php ob_start() ?>
<main>
    <h2>Erreur 404</h2>
    <p>Aïe, la page que vous cherchez n'existe pas !</p>
</main>
    <?php $content = ob_get_clean() ?>

<?php require(__DIR__ . '/../layout/layout.php');