<?php include 'assets/php/dico.php'; ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/aee.css">
    <title><?= $dico[$lang]['qui-sommes-nous'] . ' | ' . $dico[$lang]['association'] ?></title>
</head>
<body>
    <!-- HEADER -->
    <?php include("templates/header.php"); ?>
    <!-- HEADER -->

   <!-- DESCRIPTION -->
   <article class="container tuile">
       <!-- HEADER -->
        <header>
            <h2><?= $dico[$lang]['qui-sommes-nous'] ?></h2>
        </header>
       <!-- HEADER -->

       <!-- CONTENU -->
        <section class="row">
            <!-- PARTIE 1 -->
            <div class="col-12 col-md-5 text-right">
                <img src="assets/img/gal1.jpg" alt="Image descriptive de l'association" class="shadow-sm">
            </div>
            <div class="col-12 col-md-7 text-left">
                <h3><?= $dico[$lang]['aee-titre1'] ?></h3>
                <p><?= $dico[$lang]['aee-texte1'] ?></p>
            </div>
            <!-- PARTIE 1 -->
            <!-- PARTIE 2 -->
            <div class="col-12 col-md-7 text-right">
                <h3><?= $dico[$lang]['aee-titre2'] ?></h3>
                <p><?= $dico[$lang]['aee-texte2'] ?></p>
            </div>
            <div class="col-12 col-md-5 text-left">
                <img src="assets/img/gal1.jpg" alt="Image descriptive de l'association" class="shadow-sm">
            </div>
            <!-- PARTIE 2 -->
            <!-- PARTIE 3 -->
            <div class="col-12 col-md-5 text-right">
                <img src="assets/img/gal1.jpg" alt="Image descriptive de l'association" class="shadow-sm">
            </div>
            <div class="col-12 col-md-7 text-left">
                <h3><?= $dico[$lang]['aee-titre3'] ?></h3>
                <p><?= $dico[$lang]['aee-texte3'] ?></p>
            </div>
            <!-- PARTIE 3 -->
        </section>
       <!-- CONTENU -->
   </article>
    <!-- DESCRIPTION -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
    <!-- FOOTER -->

    <?php include("templates/scripts.php"); ?>
</body>
</html>