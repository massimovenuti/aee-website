<?php include 'assets/php/dico.php'; ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/form.css">
    <title><?= $dico[$lang]['contact'] . ' | ' . $dico[$lang]['association'] ?></title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'templates/header.php'; ?>
    <!-- HEADER -->

    <!-- CONTACT -->
    <section class="container tuile">
        <!-- HEADER -->
        <header>
            <h2><?= $dico[$lang]['contact'] ?></h2>
        </header>
        <!-- HEADER -->

        <!-- FORMULAIRE -->
        <form method="post">
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <label for="firstName"><?= $dico[$lang]['form-prenom'] ?></label>
                        <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Jon">
                    </div>
                    <div class="col">
                        <label for="lastName"><?= $dico[$lang]['form-nom'] ?></label>
                        <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Doe">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email"><?= $dico[$lang]['form-mail'] ?></label>
                <input type="email" id="email" name="email" class="form-control" placeholder="jondoe@gmail.com">
            </div>
            <div class="form-group">
                <label for="message"><?= $dico[$lang]['form-message'] ?></label>
                <textarea id="message" name="message" class="form-control" rows="10" placeholder="<?= $dico[$lang]['form-votre-message'] ?>"></textarea>
            </div>
            <div class="alert alert-danger hidden" role="alert">
                <?= $dico[$lang]['form-invalide'] ?>
            </div>
            <button class="btn btn-dark" type="submit"><?= $dico[$lang]['form-envoyer'] ?></button>
        </form>
        <!-- FORMULAIRE -->
    </section>
    <!-- CONTACT -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
    <!-- FOOTER -->

    <?php include 'templates/scripts.php'; ?>
    <script src="assets/js/contactForm.js"></script>
</body>
</html>