<?php
try {
    session_start();
    include 'I18n.php';
    include 'Bdd.php';

    $i18n = new I18n();
    $i18n->getUserLang();

    $bdd = new Bdd();
    $bdd->connexion();
    $bdd->createTable();

    $page = intval(htmlspecialchars(($_GET['page'])));
    if ($page)
        $events = $bdd->select(4, $page);

    foreach ($events as $event) :
        ?>
        <article class="row shadow-sm">
            <div class="col-12 col-lg-3">
                <img src="assets/img/<?= $event['image'] ?>" alt="Image for event: <?= $event['title'] ?>">
            </div>
            <div class="col-12 col-lg-9">
                <h3><?= $event['title'] ?></h3>
                <p> <?= $event['summary'] ?></p>
                <a href="eventDetails.php?id=<?= $event['id'] ?>"><?= $i18n->get('general', 'details') ?></a>
            </div>
        </article>
    <?php
    endforeach;

} catch (PDOException $exception) {
    var_dump($exception);
}
?>