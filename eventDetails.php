<?php
try {
    session_start();
    include 'assets/php/I18n.php';
    include 'assets/php/Bdd.php';
    $i18n = new I18n();
    $bdd = new Bdd();
    $bdd->connexion();
    $bdd->createTable();
    $events = $bdd->select();
    $id = intval(htmlspecialchars($_GET['id']));
    $detail = $bdd->selectFromId($id);

    if (count($detail) == 0)
        $detail = $events[0];

} catch(PDOException $exception) {
    var_dump($exception);
}
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/details.css">
    <title><?= $detail[0]['titre'] . ' | ' . $i18n->get('general', 'association') ?></title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'templates/header.php'; ?>
    <!-- HEADER -->

    <!-- DETAILS -->
    <div class="container">
        <div class="row">
            <!-- EVENT -->
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
            <!-- EVENT -->
            <!-- ASIDE -->
            <div class="col-12 col-lg-4">
                <aside class="tuile">
                    <!-- HEADER -->
                    <header>
                        <h2><?= $i18n->get('eventDetails', 'subtitle') ?></h2>
                        <form method="get" action="events.php">
                            <div class="form-row">
                                <input type="hidden" name="id" value="<?= $id ?>"/>
                                <div class="col-9">
                                    <input type="search" name="query" class="form-control" placeholder="<?= $i18n->get('general', 'search') ?>"/>
                                </div>
                                <div class="col-3">
                                    <input type="submit" class="btn btn-light" value="OK"/>
                                </div>
                            </div>
                        </form>
                    </header>
                    <!-- HEADER -->
                    <!-- EVENTS -->
                    <div class="row">
                        <?php
                        if (count($events) > 0) :
                            foreach ($events as $event) :
                                ?>
                                <div class="col-12">
                                    <article class="row shadow-sm">
                                        <div class="col-12">
                                            <h3><?= $event['titre'] ?></h3>
                                            <a href="eventDetails.php?id=<?= $event['id'] ?>">
                                                <?= $i18n->get('general', 'details') ?>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <?php
                            endforeach;
                        else :
                            ?>
                            <div class="col-12">
                                <?= $i18n->get('eventDetails', 'noEvent'); ?>
                            </div>
                            <?php
                        endif;
                        ?>
                    </div>
                    <!-- EVENTS -->
                </aside>
            </div>
            <!-- ASIDE -->
        </div>
    </div>
    <!-- DETAILS -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
    <!-- FOOTER -->
    <?php include 'templates/scripts.php'; ?>
</body>
</html>