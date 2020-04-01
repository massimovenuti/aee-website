<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'templates/meta.php'; ?>
    <link rel="stylesheet" href="assets/css/annonces_details.css">
    <title>Annonce | Association des Étudiants Étrangers</title>
</head>
<body>
    <?php
    include 'templates/header.php';
    include 'assets/php/annonces_get.php';
    $query = htmlspecialchars(($_GET['query']));
    $id = intval(htmlspecialchars(($_GET['id'])));
    if ($query)
        $annonces = get_annonces_by_content($query);
    $annonce = get_annonces_by_id($id);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <!-- ANNONCE -->
                <article class="tuile">
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
                        <form method="get" action="annonces.php">
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
                        if (count($annonces) > 0) {
                            for ($i = 0; $i < count($annonces) && $i < 5; $i++) { ?>
                            <div class="col-12">
                                <article class="row shadow-sm">
                                    <div class="col-12">
                                        <h3><?= $annonces[$i]['titre']; ?></h3>
                                        <a href="annonces_details.php?id=<?= $annonces[$i]['id']; ?>">Plus de détails</a>
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
    <?php
    include 'templates/footer.php';
    include 'templates/scripts.php';
    ?>
</body>
</html>