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
    <link rel="stylesheet" href="assets/css/form.css">
    <title><?= $i18n->get('newEvent', 'pageTitle') ?></title>
</head>
<body>
<!-- HEADER -->
<?php include 'templates/header.php'; ?>

<!-- NEW EVENT -->
<section class="container tile">
    <!-- TITLE -->
    <header>
        <h2><?= $i18n->get('newEvent', 'title') ?></h2>
    </header>

    <!-- EVENT CREATION FORM -->
    <form method="post" action="assets/php/sendEvent.php" enctype="multipart/form-data">
        <!-- EVENT TITLE -->
        <div class="form-group">
            <label for="title"><?= $i18n->get('newEvent', 'labelTitle') ?></label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <!-- SUMMARY -->
        <div class="form-group">
            <label for="summary"><?= $i18n->get('newEvent', 'labelSummary') ?></label>
            <textarea id="summary" name="summary" class="form-control" rows="4"></textarea>
        </div>
        <!-- CONTENT -->
        <div class="form-group">
            <label for="content"><?= $i18n->get('newEvent', 'labelContent') ?></label>
            <textarea id="content" name="content" class="form-control" rows="10"></textarea>
        </div>
        <!-- IMAGE -->
        <div class="form-group">
            <label for="image"><?= $i18n->get('newEvent', 'labelImage') ?></label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <!-- ALERT -->
        <div class="alert alert-danger hidden" role="alert">
            <?= $i18n->get('general', 'invalidForm') ?>
        </div>
        <!-- SUBMIT -->
        <button type="submit" class="btn btn-dark"><?= $i18n->get('newEvent', 'createButton') ?></button>
    </form>
</section>

<!-- FOOTER -->
<?php include 'templates/footer.php'; ?>

<?php include 'templates/scripts.php'; ?>
<script src="assets/js/newEventForm.js"></script>
</body>
</html>