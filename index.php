
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("templates/meta.php"); ?>
    <link rel="stylesheet" href="assets/css/index.css">
    <title>AEE | Association des Étudiants Étrangers</title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'templates/header.php'; ?>
    <!-- HEADER -->

    <!-- DERNIÈRES ANNONCES -->
    <section class="container tuile">
        <header>
            <h2>Dernières annonces</h2>
        </header>

        <!-- CARDS -->
        <div class="cards row">
            <?php
            include 'recherche.php';
            if (count($annonces) > 0) {
                for ($i = 0; $i < count($annonces) && $i < 2; $i++) { ?>
                    <div class="col-12 col-lg-6">
                        <article class="card shadow-sm">
                            <img src="assets/img/annonce.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title"><?= $annonces[$i]['titre']; ?></h3>
                                <p class="card-text"><?= $annonces[$i]['resume']; ?></p>
                                <a href="details.php?id=<?= $annonces[$i]['id']; ?>">Détails</a>
                            </div>
                        </article>
                    </div>
                <?php } ?>
                <div class="col-12">
                    <a href="annonces.php" class="btn btn-dark">Voir toutes les annonces</a>
                </div>
            <?php } else { ?>
                <p>Aucune annonce n'a encore été publiée.</p>
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
                        <img src="assets/img/gal1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <!-- SLIDE 1 -->
                    <!-- SLIDE 2 -->
                    <div class="carousel-item">
                        <img src="assets/img/gal2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <!-- SLIDE 2 -->
                    <!-- SLIDE 3 -->
                    <div class="carousel-item">
                        <img src="assets/img/gal.jpg" class="d-block w-100" alt="...">
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
    <?php include("templates/footer.php"); ?>
    <!-- FOOTER -->

    <?php include("templates/scripts.php");?>
</body>
</html>