<?php
try {
    session_start();
    include 'assets/php/I18n.php';
    include 'assets/php/Bdd.php';
    $bdd = new Bdd();
    $i18n = new I18n();
    $i18n->getLang();
    $bdd->connexion();
    $bdd->createTable();
    $events = $bdd->select();

} catch(PDOException $exception) {
    var_dump($exception);
}
?>

<!DOCTYPE html>
<html lang="<?= $i18n->getCurrentLang() ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/index.css">
    <title><?= $i18n->get('home', 'title') . ' | ' . $i18n->get('general', 'association') ?></title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'templates/header.php';?>
    <!-- HEADER -->

    <!-- LATEST EVENTS -->
    <section class="container tuile">
        <!-- HEADER -->
        <header>
            <h2><?= $i18n->get('home', 'subtitle') ?></h2>
        </header>
        <!-- HEADER -->
        <!-- EVENTS -->
        <div class="cards row">
            <?php
            if (count($events) > 0) :
                foreach ($events as $event) :
                    ?>
                    <div class="col-12 col-lg-6">
                        <article class="card shadow-sm">
                            <img src="assets/img/<?= $event['image'] ?>" class="card-img-top" alt="Image de l'annonce: <?= $event['titre'] ?>">
                            <div class="card-body">
                                <h3 class="card-title"><?= $event['titre'] ?></h3>
                                <p class="card-text"><?= $event['resume'] ?></p>
                                <a href="eventDetails.php?id=<?= $event['id'] ?>">
                                    <?= $i18n->get('general', 'details') ?>
                                </a>
                            </div>
                        </article>
                    </div>
                    <?php
                endforeach;
                ?>
                <div class="col-12">
                    <a href="events.php" class="btn btn-dark"><?= $i18n->get('home', 'seeAllButton') ?></a>
                </div>
                <?php
            else :
                ?>
                <p><?= $i18n->get('home', 'noEvent') ?></p>
                <?php
            endif;
            ?>
        </div>
        <!-- EVENTS -->
    </section>
    <!-- LATEST EVENTS -->

    <!-- CAROUSEL -->
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
    <!-- CAROUSEL -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
    <!-- FOOTER -->
    <?php include 'templates/scripts.php'; ?>
</body>
</html>