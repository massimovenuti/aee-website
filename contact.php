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
    <title><?= $i18n->get('contact', 'pageTitle') ?></title>
</head>
<body>
<!-- HEADER -->
<?php include 'templates/header.php'; ?>

<!-- CONTACT -->
<section class="container tile">
    <!-- TITLE -->
    <header>
        <h2><?= $i18n->get('contact', 'title') ?></h2>
    </header>

    <!-- CONTACT FORM -->
    <form method="post">
        <!-- FIRST NAME & LAST NAME -->
        <div class="form-group">
            <div class="form-row">
                <!-- FIRST NAME -->
                <div class="col">
                    <label for="firstName"><?= $i18n->get('contact', 'labelFirstName') ?></label>
                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Jon">
                </div>
                <!-- LAST NAME -->
                <div class="col">
                    <label for="lastName"><?= $i18n->get('contact', 'labelLastName') ?></label>
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Doe">
                </div>
            </div>
        </div>
        <!-- EMAIL -->
        <div class="form-group">
            <label for="email"><?= $i18n->get('contact', 'labelMail') ?></label>
            <input type="email" id="email" name="email" class="form-control" placeholder="jondoe@gmail.com">
        </div>
        <!-- MESSAGE -->
        <div class="form-group">
            <label for="message"><?= $i18n->get('contact', 'labelMessage') ?></label>
            <textarea id="message" name="message" class="form-control" rows="10"
                      placeholder="<?= $i18n->get('contact', 'placeholderMessage') ?>"></textarea>
        </div>
        <!-- ALERT -->
        <div class="alert alert-danger hidden" role="alert">
            <?= $i18n->get('general', 'invalidForm') ?>
        </div>
        <!-- SUBMIT -->
        <button class="btn btn-dark" type="submit"><?= $i18n->get('contact', 'sendButton') ?></button>
    </form>
</section>

<!-- FOOTER -->
<?php include 'templates/footer.php'; ?>

<?php include 'templates/scripts.php'; ?>
<script src="assets/js/contactForm.js"></script>
</body>
</html>