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

    $query = htmlspecialchars($_GET['query']);
    if ($query && $query != "")
        $events = $bdd->selectFromQuery($query);
    else
        $events = $bdd->select();

} catch (PDOException $exception) {
    var_dump($exception);
}
?>

<!DOCTYPE html>
<html lang="<?= $i18n->getCurrentLang() ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/events.css">
    <title><?= $i18n->get('events', 'pageTitle') ?></title>
</head>
<body>
<!-- HEADER -->
<?php include 'templates/header.php'; ?>

<!-- EVENTS -->
<section class="container tile">
    <!-- TITLE -->
    <header>
        <h2><?= $i18n->get('events', 'title') ?></h2>
    </header>

    <!-- SEARCH BAR -->
    <form method="get">
        <div class="form-row">
            <!-- SEARCH BAR -->
            <div class="col-9">
                <label for="query" class="hidden"></label>
                <input type="search" id="query" name="query" class="form-control"
                       placeholder="<?= $i18n->get('general', 'search') ?>"/>
            </div>
            <!-- SUBMIT -->
            <div class="col-4 col-lg-3">
                <input type="submit" class="btn btn-light" value="<?= $i18n->get('events', 'validateButton') ?>"/>
            </div>
        </div>
    </form>

    <!-- NEW EVENT BUTTON -->
    <a class="btn btn-dark" href="newEvent.php" role="button">+</a>

    <!-- EVENTS -->
    <div id="events">
        <!-- LIST OF EVENTS -->
        <?php
        foreach ($events as $event) :
            ?>
            <article class="row shadow-sm">
                <div class="col-12 col-lg-3">
                    <img src="assets/img/<?= $event['image'] ?>" alt="Image for event:<?= $event['title'] ?>">
                </div>
                <div class="col-12 col-lg-9">
                    <h3><?= $event['title'] ?></h3>
                    <p> <?= $event['summary'] ?></p>
                    <a href="eventDetails.php?id=<?= $event['id'] ?>"><?= $i18n->get('general', 'details') ?></a>
                </div>
            </article>
        <?php
        endforeach;
        if ($query && count($events) == 0)
            echo $i18n->get('events', 'noEventFound') . $query;
        ?>
    </div>

    <!-- "SEE MORE" BUTTON -->
    <div>
        <?php
        if ($query == NULL)
            echo "<button id='loadEvents' class='btn btn-dark'>" . $i18n->get('events', 'seeMoreButton') . "</button>";
        ?>
        <p id="end" class="hidden"><?= $i18n->get('events', 'noMoreEvent') ?></p>
    </div>
</section>

<!-- FOOTER -->
<?php include 'templates/footer.php'; ?>

<?php include 'templates/scripts.php'; ?>
<script src="assets/js/loadEvents.js"></script>
</body>
</html>
