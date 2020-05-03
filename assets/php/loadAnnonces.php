<?php
include 'connectBD.php';
include 'dico.php';

// Sélection des annonces suivantes
if (isset($_GET['offset'])) {
    $offset = intval(htmlspecialchars(($_GET['offset'])));
    $annonces = $pdo->query(
        "SELECT * FROM annonces ORDER BY id DESC LIMIT 4 OFFSET $offset"
    )->fetchAll();
}

// Annonces
foreach ($annonces as $annonce) { ?>
    <div class="col-12">
        <article class="row shadow-sm">
            <div class="col-12 col-lg-3">
                <img src="assets/img/<?= $annonce['image'] ?>" alt="Image de l'annonce: <?= $annonce['titre'] ?>">
            </div>
            <div class="col-12 col-lg-9">
                <h3><?= $annonce['titre'] ?></h3>
                <p> <?= $annonce['resume'] ?></p>
                <a href="details.php?lang=<?= $lang ?>&id=<?= $annonce['id'] ?>">
                    <?= $dico[$lang]['details'] ?>
                </a>
            </div>
        </article>
    </div>
<?php }