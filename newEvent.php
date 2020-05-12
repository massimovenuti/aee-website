<?php
session_start();
include 'assets/php/I18n.php';
$i18n = new I18n();
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/form.css">
    <title><?= $i18n->get('newEvent', 'title') . ' | ' . $i18n->get('general', 'association') ?></title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'templates/header.php'; ?>
    <!-- HEADER -->

    <!-- NEW EVENT -->
    <section class="container tuile">
        <!-- HEADER -->
        <header>
            <h2><?= $i18n->get('newEvent', 'title') ?></h2>
        </header>
        <!-- HEADER -->
        <!-- FORM -->
        <form method="post" action="assets/php/sendEvent.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titre"><?= $i18n->get('newEvent', 'labelTitle') ?></label>
                <input type="text" id="titre" name="titre" class="form-control">
            </div>
            <div class="form-group">
                <label for="resume"><?= $i18n->get('newEvent', 'labelSummary') ?></label>
                <textarea id="resume" name="resume" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="contenu"><?= $i18n->get('newEvent', 'labelContent') ?></label>
                <textarea id="contenu" name="contenu" class="form-control" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="image"><?= $i18n->get('newEvent', 'labelImage') ?></label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="alert alert-danger hidden" role="alert">
                <?= $i18n->get('general', 'invalidForm') ?>
            </div>
            <button type="submit" class="btn btn-dark"><?= $i18n->get('newEvent', 'createButton') ?></button>
        </form>
        <!-- FORM -->
    </section>
    <!-- NEW EVENT -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
    <!-- FOOTER -->
    <?php include 'templates/scripts.php'; ?>
    <script src="assets/js/annonceForm.js"></script>
</body>
</html>