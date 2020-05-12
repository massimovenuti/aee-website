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
    <title><?= $i18n->get('contact', 'title') . ' | ' . $i18n->get('general', 'association') ?></title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'templates/header.php'; ?>
    <!-- HEADER -->

    <!-- CONTACT -->
    <section class="container tuile">
        <!-- HEADER -->
        <header>
            <h2><?= $i18n->get('contact', 'title') ?></h2>
        </header>
        <!-- HEADER -->
        <!-- FORM -->
        <form method="post">
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <label for="firstName"><?= $i18n->get('contact', 'labelFirstName') ?></label>
                        <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Jon">
                    </div>
                    <div class="col">
                        <label for="lastName"><?= $i18n->get('contact', 'labelLastName') ?></label>
                        <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Doe">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email"><?= $i18n->get('contact', 'labelMail') ?></label>
                <input type="email" id="email" name="email" class="form-control" placeholder="jondoe@gmail.com">
            </div>
            <div class="form-group">
                <label for="message"><?= $i18n->get('contact', 'labelMessage') ?></label>
                <textarea id="message" name="message" class="form-control" rows="10" placeholder="<?= $i18n->get('contact', 'placeholderMessage') ?>"></textarea>
            </div>
            <div class="alert alert-danger hidden" role="alert">
                <?= $i18n->get('general', 'invalidForm') ?>
            </div>
            <button class="btn btn-dark" type="submit"><?= $i18n->get('contact', 'sendButton') ?></button>
        </form>
        <!-- FORM -->
    </section>
    <!-- CONTACT -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
    <!-- FOOTER -->
    <?php include 'templates/scripts.php'; ?>
    <script src="assets/js/contactForm.js"></script>
</body>
</html>