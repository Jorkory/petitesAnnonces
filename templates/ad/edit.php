<?php $title = "Publier une annonce" ?>

<?php ob_start() ?>
    <main>
        <section>
            <h2>Publier une annonce :</h2>
            <form action="" method="POST">
                <div>
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title"/>
                </div>
                <div>
                <label for="description">Description :</label>
                <textarea id="description" name="description"></textarea>
                </div>
                <div>
                <label for="text">Prix :</label>
                <input type="text" id="price" name="price"/>
                </div>
                <div>
                <input type="submit" value="Publier" />
                </div>
            </form>
        </section>
    </main>
<?php $content = ob_get_clean() ?>

<?php require(__DIR__ . '/../layout/layout.php'); ?>
