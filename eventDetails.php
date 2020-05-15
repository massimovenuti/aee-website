<?php
try {
    session_start();
    include 'assets/php/I18n.php';
    include 'assets/php/Bdd.php';

    $i18n = new I18n();
    $i18n->getUserLang();

    $bdd = new Bdd();
    $bdd->connexion();
    $bdd->createTable();
    $events = $bdd->select();

    $id = intval(htmlspecialchars($_GET['id']));
    $detail = $bdd->selectFromId($id);
    if (count($detail) == 0)
        $detail = $events[0];

} catch (PDOException $exception) {
    var_dump($exception);
}
?>

<!DOCTYPE html>
<html lang="<?= $i18n->getCurrentLang() ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/eventDetails.css">
    <title><?= $detail[0]['title'] . ' | ' . $i18n->get('general', 'association') ?></title>
</head>
<body>
<!-- HEADER -->
<?php include 'templates/header.php'; ?>

<!-- EVENT DETAILS & OTHER EVENTS -->
<div class="container tile">
    <div class="row">
        <!-- EVENT DETAILS -->
        <article id="details" class="col-12 col-lg-8">
            <header>
                <img src="assets/img/<?= $detail[0]['image'] ?>" alt="Image for event: <?= $detail['title'] ?>">
                <h2><?= $detail[0]['title'] ?></h2>
            </header>
            <?= $detail[0]['content'] ?>
        </article>

        <!-- OTHER EVENTS  -->
        <aside class="col-12 col-lg-4">
            <!-- TITLE -->
            <header>
                <h2><?= $i18n->get('eventDetails', 'subtitle') ?></h2>
            </header>
            <!-- SEARCH BAR -->
            <form method="get" action="events.php">
                <div class="form-row">
                    <input type="hidden" name="id" value="<?= $id ?>"/>
                    <div class="col-9">
                        <label for="query" class="hidden"></label>
                        <input id="query" type="search" name="query" class="form-control"
                               placeholder="<?= $i18n->get('general', 'search') ?>"/>
                    </div>
                    <div class="col-3">
                        <input type="submit" class="btn btn-light" value="OK"/>
                    </div>
                </div>
            </form>
            <!-- EVENTS -->
            <?php
            foreach ($events as $event) :
                ?>
                <article class="col-12 shadow-sm">
                    <h3><?= $event['title'] ?></h3>
                    <a href="eventDetails.php?id=<?= $event['id'] ?>"><?= $i18n->get('general', 'details') ?></a>
                </article>
            <?php
            endforeach;
            if (count($events) == 0)
                echo $i18n->get('eventDetails', 'noEvent');
            ?>
        </aside>
    </div>
</div>

<!-- FOOTER -->
<?php include 'templates/footer.php'; ?>

<?php include 'templates/scripts.php'; ?>
</body>
</html>