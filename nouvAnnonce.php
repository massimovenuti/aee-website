<?php include 'assets/php/dico.php'; ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/form.css">
    <title><?= $dico[$lang]['nouvelle-annonce'] . ' | ' . $dico[$lang]['association'] ?></title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'templates/header.php'; ?>
    <!-- HEADER -->

    <!-- NOUVELLE ANNONCE -->
    <section class="container tuile">
        <!-- HEADER -->
        <header>
            <h2><?= $dico[$lang]['nouvelle-annonce'] ?></h2>
        </header>
        <!-- HEADER -->

        <!-- FORMULAIRE -->
        <form method="post" action="assets/php/envoiAnnonce.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titre"><?= $dico[$lang]['form-titre'] ?></label>
                <input type="text" id="titre" name="titre" class="form-control">
            </div>
            <div class="form-group">
                <label for="resume"><?= $dico[$lang]['form-resume'] ?></label>
                <textarea id="resume" name="resume" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="contenu"><?= $dico[$lang]['form-contenu'] ?></label>
                <textarea id="contenu" name="contenu" class="form-control" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="image"><?= $dico[$lang]['form-image'] ?></label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="alert alert-danger hidden" role="alert">
                <?= $dico[$lang]['form-invalide'] ?>
            </div>
            <button type="submit" class="btn btn-dark"><?= $dico[$lang]['form-publier'] ?></button>
        </form>
        <!-- FORMULAIRE -->
    </section>
    <!-- NOUVELLE ANNONCE -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
    <!-- FOOTER -->

    <?php include 'templates/scripts.php'; ?>
    <script src="assets/js/annonceForm.js"></script>
</body>
</html>