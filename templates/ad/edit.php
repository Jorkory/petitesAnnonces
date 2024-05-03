<?php $title = "Publier une annonce" ?>

<?php ob_start() ?>
    <main>
        <section>
            <h2>Publier une annonce :</h2>
            <form action="?action=create" method="POST">
                <div>
                <label for="title">Titre :</label>
                <input type="text" id="title" name="formAd[title]" value="<?= $form['title'] ?>" />
                </div>
                <div>
                <label for="description">Description :</label>
                <textarea id="description" name="formAd[description]" ><?= $form['description'] ?></textarea>
                </div>
                <div>
                <label for="text">Prix :</label>
                <input type="text" id="price" name="formAd[price]" value="<?= $form['price'] ?>" />
                </div>
                <div>
                <input type="submit" value="Publier" />
                </div>
            </form>
        </section>
    </main>
<?php $content = ob_get_clean() ?>

<?php require(__DIR__ . '/../layout/layout.php'); ?>
