<?php
try {
    session_start();
    include 'assets/php/I18n.php';
    include 'assets/php/Bdd.php';
    $i18n = new I18n();
    $bdd = new Bdd();
    $bdd->connexion();
    $bdd->createTable();
    $query = htmlspecialchars($_GET['query']);

    if ($query && $query != "")
        $events = $bdd->selectFromQuery($query);
    else
        $events = $bdd->select();

} catch(PDOException $exception) {
    var_dump($exception);
}
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/annonces.css">
    <title><?= $i18n->get('events', 'title') . ' | ' . $i18n->get('general', 'association') ?></title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'templates/header.php'; ?>
    <!-- HEADER -->

    <!-- EVENTS -->
    <section class="container tuile">
        <!-- HEADER -->
        <header>
            <h2><?= $i18n->get('events', 'title') ?></h2>
            <form method="get">
                <div class="form-row">
                    <div class="col-12 col-lg-1">
                        <a class="btn btn-dark" href="newEvent.php" role="button">+</a>
                    </div>
                    <div class="col-9">
                        <input type="search" name="query" class="form-control" placeholder="<?= $i18n->get('general', 'search') ?>"/>
                    </div>
                    <div class="col-3 col-lg-2">
                        <input type="submit" class="btn btn-light" value="<?= $i18n->get('events', 'validateButton') ?>"/>
                    </div>
                </div>
            </form>
        </header>
        <!-- HEADER -->
        <!-- CARDS -->
        <div class="row" id="annonces">
            <?php
            if (count($events) > 0) :
                foreach ($events as $event) :
                    ?>
                    <div class="col-12">
                        <article class="row shadow-sm">
                                <div class="col-12 col-lg-3">
                                    <img src="assets/img/<?= $event['image'] ?>" alt="Image de l'annonce: <?= $event['titre'] ?>">
                                </div>
                                <div class="col-12 col-lg-9">
                                    <h3><?= $event['titre'] ?></h3>
                                    <p> <?= $event['resume'] ?></p>
                                    <a href="eventDetails.php?id=<?= $event['id'] ?>">
                                        <?= $i18n->get('general', 'details') ?>
                                    </a>
                                </div>
                        </article>
                    </div>
                    <?php
                endforeach;
                ?>
                <?php
            else :
                ?>
                <div class="col-12">
                    <?php
                    if ($query)
                        echo $i18n->get('events', 'noEventFound') . $query;
                    else
                        echo $i18n->get('events', 'noMoreEvent');
                    ?>
                </div>
                <?php
            endif;
            ?>
        </div>
        <!-- CARDS -->
        <!-- SEE MORE -->
        <div>
            <?php
            if (count($events) > 0 && $query == NULL) :
                ?>
                <button id="loadAnnonces" class="btn btn-dark"><?= $i18n->get('events', 'seeMore') ?></button>
                <?php
            endif;
            ?>
            <p id="end" class="hidden"><?= $i18n->get('events', 'noMoreEvent') ?></p>
        </div>
        <!-- SEE MORE -->
    </section>
    <!-- EVENTS -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
    <!-- FOOTER -->
    <?php include 'templates/scripts.php'; ?>
    <script src="assets/js/loadAnnonces.js"></script>
</body>
</html>