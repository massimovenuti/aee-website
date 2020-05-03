<?php
include 'assets/php/dico.php';
include 'assets/php/connectBD.php';
// Sélection des annonces
$annonces = $pdo->query(
    'SELECT * FROM annonces ORDER BY id DESC LIMIT 2'
)->fetchAll();
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/index.css">
    <title><?= $dico[$lang]['accueil'] . ' | ' . $dico[$lang]['association'] ?></title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'templates/header.php';?>
    <!-- HEADER -->

    <!-- DERNIÈRES ANNONCES -->
    <section class="container tuile">
        <!-- HEADER -->
        <header>
            <h2><?= $dico[$lang]['dernieres-annonces'] ?></h2>
        </header>
        <!-- HEADER -->

        <!-- CARDS -->
        <div class="cards row">
            <?php
            if (count($annonces) > 0) {
                foreach ($annonces as $annonce) { ?>
                    <div class="col-12 col-lg-6">
                        <article class="card shadow-sm">
                            <img src="assets/img/<?= $annonce['image'] ?>" class="card-img-top" alt="Image de l'annonce: <?= $annonce['titre'] ?>">
                            <div class="card-body">
                                <h3 class="card-title"><?= $annonce['titre'] ?></h3>
                                <p class="card-text"><?= $annonce['resume'] ?></p>
                                <a href="details.php?id=<?= $annonce['id'] ?>">
                                    <?= $dico[$lang]['details'] ?>
                                </a>
                            </div>
                        </article>
                    </div>
                <?php } ?>
                <div class="col-12">
                    <a href="annonces.php" class="btn btn-dark"><?= $dico[$lang]['voir-tout'] ?></a>
                </div>
            <?php } else { ?>
                <p><?= $dico[$lang]['0-annonce'] ?></p>
            <?php } ?>
        </div>
        <!-- CARDS -->
    </section>
    <!-- DERNIÈRES ANNONCES -->

    <!-- GALERIE -->
    <section class="container-fluid galerie">
        <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-interval="100000" data-pause="hover">
                <div class="carousel-inner">
                    <!-- SLIDE 1 -->
                    <div class="carousel-item active">
                        <img src="assets/img/gal1.jpg" class="d-block w-100" alt="Image 1">
                    </div>
                    <!-- SLIDE 1 -->
                    <!-- SLIDE 2 -->
                    <div class="carousel-item">
                        <img src="assets/img/gal2.jpg" class="d-block w-100" alt="Image 2">
                    </div>
                    <!-- SLIDE 2 -->
                    <!-- SLIDE 3 -->
                    <div class="carousel-item">
                        <img src="assets/img/gal.jpg" class="d-block w-100" alt="Image 3">
                    </div>
                    <!-- SLIDE 3 -->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- GALERIE -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
    <!-- FOOTER -->

    <?php include 'templates/scripts.php'; ?>
</body>
</html>