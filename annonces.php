
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("templates/meta.php"); ?>
    <link rel="stylesheet" href="assets/css/annonces.css">
    <title>Annonces | Association des Étudiants Étrangers</title>
</head>
<body>
    <!-- HEADER -->
    <?php include("templates/header.php"); ?>
    <!-- HEADER -->

    <!-- ANNONCES -->
    <section class="container tuile">
        <header>
            <h2>Annonces</h2>
            <form method="GET">
                <div class="form-row">
                    <div class="col-9">
                        <input type="search" name="query" class="form-control" placeholder="Rechercher"/>
                    </div>
                    <div class="col-3 col-lg-2">
                        <input type="submit" class="btn btn-light" value="Valider"/>
                    </div>
                    <div class="col-12 col-lg-1">
                        <a class="btn btn-dark" href="nouv.php" role="button">+</a>
                    </div>
                </div>
            </form>
        </header>

        <!-- CARDS -->
        <div class="row">
            <?php
            include 'recherche.php';
            if (count($annonces) > 0) {
                foreach ($annonces as $annonce) { ?>
                    <div class="col-12">
                        <article class="row shadow-sm">
                                <div class="col-12 col-lg-3">
                                    <img src="assets/img/annonce.jpg" alt="">
                                </div>
                                <div class="col-12 col-lg-9">
                                    <h3><?= $annonce['titre']; ?></h3>
                                    <p> <?= $annonce['resume']; ?></p>
                                    <a href="details.php?id=<?= $annonce['id']; ?>">Plus de détails</a>
                                </div>
                        </article>
                    </div>
                <?php }
            } else { ?>
                <div class="col-12">
                    <p>Aucune annonce trouvée.</p>
                </div>
            <?php } ?>
        </div>
        <!-- CARDS -->
    </section>
    <!-- ANNONCES -->

    <!-- FOOTER -->
    <?php include("templates/footer.php"); ?>
    <!-- FOOTER -->

    <?php include("templates/scripts.php");?>
</body>
</html>