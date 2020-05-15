<?php
session_start();
include 'assets/php/I18n.php';

$i18n = new I18n();
$i18n->getUserLang();
?>

<!DOCTYPE html>
<html lang="<?= $i18n->getCurrentLang() ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <title><?= $i18n->get('presentation', 'pageTitle') ?></title>
    <link rel="stylesheet" href="assets/css/presentation.css">
</head>
<body>
<!-- HEADER -->
<?php include 'templates/header.php'; ?>

<!-- PRESENTATION -->
<article class="container tile">
    <!-- TITLE -->
    <header>
        <h2><?= $i18n->get('presentation', 'title') ?></h2>
    </header>

    <!-- CONTENT -->
    <section class="row">
        <!-- PART 1 -->
        <div class="col-12 col-md-5 text-right">
            <img src="assets/img/gal1.jpg" alt="Image descriptive de l'association" class="shadow-sm">
        </div>
        <div class="col-12 col-md-7 text-left">
            <h3><?= $i18n->get('presentation', 'subtitle1') ?></h3>
            <p><?= $i18n->get('presentation', 'paragraph1') ?></p>
        </div>
        <!-- PART 2 -->
        <div class="col-12 col-md-7 text-right">
            <h3><?= $i18n->get('presentation', 'subtitle2') ?></h3>
            <p><?= $i18n->get('presentation', 'paragraph2') ?></p>
        </div>
        <div class="col-12 col-md-5 text-left">
            <img src="assets/img/gal1.jpg" alt="Image descriptive de l'association" class="shadow-sm">
        </div>
        <!-- PART 3 -->
        <div class="col-12 col-md-5 text-right">
            <img src="assets/img/gal1.jpg" alt="Image descriptive de l'association" class="shadow-sm">
        </div>
        <div class="col-12 col-md-7 text-left">
            <h3><?= $i18n->get('presentation', 'subtitle3') ?></h3>
            <p><?= $i18n->get('presentation', 'paragraph3') ?></p>
        </div>
    </section>
</article>

<!-- FOOTER -->
<?php include 'templates/footer.php'; ?>

<?php include("templates/scripts.php"); ?>
</body>
</html>