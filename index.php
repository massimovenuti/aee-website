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
    $events = $bdd->select(2);

} catch (PDOException $exception) {
    var_dump($exception);
}
?>

<!DOCTYPE html>
<html lang="<?= $i18n->getCurrentLang() ?>">
<head>
    <?php include 'templates/head.php'; ?>
    <link rel="stylesheet" href="assets/css/index.css">
    <title><?= $i18n->get('home', 'pageTitle') ?></title>
</head>
<body>
<!-- HEADER -->
<?php include 'templates/header.php'; ?>

<!-- LATEST EVENTS -->
<section class="container tile">
    <!-- TITLE -->
    <header>
        <h2><?= $i18n->get('home', 'subtitle') ?></h2>
    </header>

    <!-- EVENTS -->
    <div class="row">
        <?php
        foreach ($events as $event) :
            ?>
            <div class="col-12 col-lg-6">
                <article class="card shadow-sm">
                    <img src="assets/img/<?= $event['image'] ?>" class="card-img-top"
                         alt="Image for event:<?= $event['title'] ?>">
                    <div class="card-body">
                        <h3 class="card-title"><?= $event['title'] ?></h3>
                        <p class="card-text"><?= $event['summary'] ?></p>
                        <a href="eventDetails.php?id=<?= $event['id'] ?>"><?= $i18n->get('general', 'details') ?></a>
                    </div>
                </article>
            </div>
        <?php
        endforeach;
        ?>
    </div>

    <!-- "SEE ALL" BUTTON -->
    <div>
        <?php
        if (count($events) > 0)
            echo "<a href='events.php' class='btn btn-dark'>" . $i18n->get('home', 'seeAllButton') . "</a>";
        else
            echo $i18n->get('home', 'noEvent');
        ?>
    </div>
</section>

<!-- CAROUSEL -->
<section class="carousel slide" data-ride="carousel" data-pause="hover">
    <!-- SLIDES -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/gal1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/gal2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/gal3.jpg" alt="Third slide">
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php include 'templates/footer.php'; ?>

<?php include 'templates/scripts.php'; ?>
</body>
</html>