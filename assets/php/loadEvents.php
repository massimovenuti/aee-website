<?php
try {
    session_start();
    include 'I18n.php';
    include 'Bdd.php';
    $bdd = new Bdd();
    $bdd->connexion();
    $bdd->createTable();
    $page = intval(htmlspecialchars(($_GET['page'])));

    if ($page)
        $annonces = $bdd->select($page);

    foreach ($annonces as $annonce) :
        ?>
        <div class="col-12">
            <article class="row shadow-sm">
                <div class="col-12 col-lg-3">
                    <img src="assets/img/<?= $annonce['image'] ?>" alt="Image de l'annonce: <?= $annonce['titre'] ?>">
                </div>
                <div class="col-12 col-lg-9">
                    <h3><?= $annonce['titre'] ?></h3>
                    <p> <?= $annonce['resume'] ?></p>
                    <a href="details.php?lang=<?= $lang ?>&id=<?= $annonce['id'] ?>">
                        <?= $i18n->get('general', 'details') ?>
                    </a>
                </div>
            </article>
        </div>
        <?php
    endforeach;
} catch(PDOException $exception) {
    var_dump($exception);
}
?>