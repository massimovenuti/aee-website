<?php
include 'assets/php/dico.php';
include 'assets/php/recherche.php';

// Sélection de l'annonce dont il faut afficher les détails
// Si l'id n'a pas de correspondance, on prend la dernière annonce publiée
$id = intval(htmlspecialchars($_GET['id']));
$detail = $pdo->query(
    'SELECT * FROM annonces WHERE id = $id'
)->fetchAll();

if (count($detail) == 0) {
    $detail = $pdo->query(
        'SELECT * FROM annonces ORDER BY id DESC LIMIT 1'
    )->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/details.css">
    <title><?= $detail[0]['titre'] . ' | ' . $dico[$lang]['association'] ?></title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'templates/header.php'; ?>
    <!-- HEADER -->

    <!-- DETAILS -->
    <div class="container">
        <div class="row">
            <!-- DETAILS ANNONCE -->
            <div class="col-12 col-lg-8">
                <article class="tuile" id="details">
                    <header>
                        <img src="assets/img/<?= $detail[0]['image'] ?>" alt="Image de l'annonce: <?= $detail['titre'] ?>">
                        <h2><?= $detail[0]['titre'] ?></h2>
                    </header>
                    <div>
                        <?= $detail[0]['contenu'] ?>
                    </div>
                </article>
            </div>
            <!-- DETAILS ANNONCE -->

            <!-- VOIR AUSSI -->
            <div class="col-12 col-lg-4">
                <aside class="tuile">
                    <!-- HEADER -->
                    <header>
                        <h2><?= $dico[$lang]['voir-aussi'] ?></h2>
                        <form method="get">
                            <div class="form-row">
                                <input type="hidden" name="id" value="<?= $id ?>"/>
                                <div class="col-9">
                                    <input type="search" name="query" class="form-control" placeholder="<?= $dico[$lang]['rechercher'] ?>"/>
                                </div>
                                <div class="col-3">
                                    <input type="submit" class="btn btn-light" value="OK"/>
                                </div>
                            </div>
                        </form>
                    </header>
                    <!-- HEADER -->

                    <!-- ANNONCES -->
                    <div class="row">
                        <?php
                        if (count($annonces) > 0) {
                            for ($i = 0; $i < count($annonces) && $i < 5; $i++) { ?>
                            <div class="col-12">
                                <article class="row shadow-sm">
                                    <div class="col-12">
                                        <h3><?= $annonces[$i]['titre'] ?></h3>
                                        <a href="details.php?id=<?= $annonces[$i]['id'] ?>">
                                            <?= $dico[$lang]['details'] ?>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <?php }
                        } else { ?>
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
                    <!-- ANNONCES -->
                </aside>
            </div>
            <!-- VOIR AUSSI -->
        </div>
    </div>
    <!-- DETAILS -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
    <!-- FOOTER -->

    <?php include 'templates/scripts.php'; ?>
</body>
</html>