<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("templates/meta.php"); ?>
    <link rel="stylesheet" href="assets/css/details.css">
    <title>Annonce | Association des Étudiants Étrangers</title>
</head>
<body>
    <!-- HEADER -->
    <?php include("templates/header.php"); ?>
    <!-- HEADER -->
    <?php
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <!-- ANNONCE -->
                <article class="tuile">
                    <?php
                    include "form_nouv.php";
                    $id = intval($_GET['id']);
                    $annonce = $pdo->query(
                        "SELECT * FROM annonces WHERE id == $id"
                    )->fetchAll(); ?>
                    <header>
                        <img src="assets/img/annonce.jpg" alt="">
                        <h2><?= $annonce[0]['titre']; ?></h2>
                    </header>
                    <div>
                        <?= $annonce[0]['contenu'] ?>
                    </div>
                </article>
                <!-- ANNONCE -->
            </div>
            <div class="col-12 col-lg-4">
                <!-- ASIDE -->
                <aside class="tuile">
                    <header>
                        <h2>Voir aussi</h2>
                        <form method="GET">
                            <div class="form-row">
                                <div class="col-9">
                                    <input type="search" name="query" class="form-control" placeholder="Recherche"/>
                                </div>
                                <div class="col-3">
                                    <input type="submit" class="btn btn-light" value="OK"/>
                                </div>
                            </div>
                        </form>
                    </header>
                    <div class="row">
                        <?php
                        include 'recherche.php';
                        if (count($annonces) > 0) {
                            for ($i = 0; $i < count($annonces) && $i < 5; $i++) { ?>
                            <div class="col-12">
                                <article class="row shadow-sm">
                                    <div class="col-12">
                                        <h3><?= $annonces[$i]['titre']; ?></h3>
                                        <a href="details.php?id=<?= $annonces[$i]['id']; ?>">Plus de détails</a>
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
                </aside>
                <!-- ASIDE -->
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include("templates/footer.php"); ?>
    <!-- FOOTER -->

    <?php include("templates/scripts.php");?>
</body>
</html>