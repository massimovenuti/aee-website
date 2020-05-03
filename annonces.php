<?php include 'assets/php/dico.php'; include 'assets/php/recherche.php'; ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/annonces.css">
    <title><?= $dico[$lang]['annonces'] . ' | ' . $dico[$lang]['association'] ?></title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'templates/header.php'; ?>
    <!-- HEADER -->

    <!-- ANNONCES -->
    <section class="container tuile">
        <!-- HEADER -->
        <header>
            <h2><?= $dico[$lang]['annonces'] ?></h2>
            <form method="get">
                <div class="form-row">
                    <div class="col-12 col-lg-1">
                        <a class="btn btn-dark" href="nouvAnnonce.php" role="button">+</a>
                    </div>
                    <div class="col-9">
                        <input type="search" name="query" class="form-control" placeholder="<?= $dico[$lang]['rechercher'] ?>"/>
                    </div>
                    <div class="col-3 col-lg-2">
                        <input type="submit" class="btn btn-light" value="<?= $dico[$lang]['valider'] ?>"/>
                    </div>
                </div>
            </form>
        </header>
        <!-- HEADER -->

        <!-- CARDS -->
        <div class="row" id="annonces">
            <?php
            if (count($annonces) > 0) {
                foreach ($annonces as $annonce) { ?>
                    <div class="col-12">
                        <article class="row shadow-sm">
                                <div class="col-12 col-lg-3">
                                    <img src="assets/img/<?= $annonce['image'] ?>" alt="Image de l'annonce: <?= $annonce['titre'] ?>">
                                </div>
                                <div class="col-12 col-lg-9">
                                    <h3><?= $annonce['titre'] ?></h3>
                                    <p> <?= $annonce['resume'] ?></p>
                                    <a href="details.php?id=<?= $annonce['id'] ?>">
                                        <?= $dico[$lang]['details'] ?>
                                    </a>
                                </div>
                        </article>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div class="col-12">
                    <?php
                    if ($query) {
                        echo $dico[$lang]['0-annonce-trouvee'] . $query;
                    } else {
                        echo $dico[$lang]['0-annonce'];
                    } ?>
                </div>
            <?php } ?>
        </div>
        <!-- CARDS -->

        <!-- VOIR PLUS -->
        <div>
            <?php
            if (count($annonces) > 0 && $query == NULL)  { ?>
                <button id="loadAnnonces" class="btn btn-dark"><?= $dico[$lang]['voir-plus'] ?></button>
            <?php } ?>

            <p id="end" class="hidden"><?= $dico[$lang]['fin'] ?></p>
        </div>
        <!-- VOIR PLUS -->
    </section>
    <!-- ANNONCES -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
    <!-- FOOTER -->

    <?php include 'templates/scripts.php'; ?>
    <script src="assets/js/loadAnnonces.js"></script>
</body>
</html>