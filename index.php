<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("templates/meta.php"); ?>
        <link rel="stylesheet" href="assets/css/index_style.css">
        <title>AEE | Association des Étudiants Étrangers</title>
    </head>
    <body>
        <!-- NAVBAR -->
        <?php include("templates/navbar.php"); ?>
        <!-- NAVBAR -->

        <!-- HEADER -->
        <header>
            <!-- GALERIE -->
            <div class="container-fluid galerie">
                <div class="col-12 carous">
                    <div id="carouselExampleControls" class="carousel slide" data-interval="100000" data-pause="hover">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/gal1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/gal2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/gal.jpg" class="d-block w-100" alt="...">
                            </div>
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
            </div>
            <!-- GALERIE -->
        </header>
        <!-- HEADER -->

        <!-- DERNIERES ANNONCES -->
        <section class="container annonces">
            <div class="row">
                <div class="col-12 titre-2">
                    <h1>Dernières annonces</h1>
                </div>
                <div class="col-12 cards">
                    <div class="card" style="width:80%;">
                        <img src="assets/img/annonce1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titre</h5>
                            <p class="card-text">Lorem incididunt veniam aliqua nostrud cupidatat irure officia aliqua. Culpa magna culpa consequat sit incididunt culpa nulla officia reprehenderit esse. Laborum aliquip fugiat proident tempor nulla ipsum eu anim sunt. Non ea pariatur est ea aliqua laborum adipisicing fugiat aliqua labore elit minim consequat. Proident sint sunt ex minim consequat amet adipisicing sit. Non tempor labore deserunt exercitation adipisicing sit amet ut eu. Laboris enim duis irure ullamco incididunt esse sint laboris et est fugiat veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 cards">
                    <div class="card" style="width: 80%;">
                        <img src="assets/img/annonce2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titre</h5>
                            <p class="card-text">Lorem incididunt veniam aliqua nostrud cupidatat irure officia aliqua. Culpa magna culpa consequat sit incididunt culpa nulla officia reprehenderit esse. Laborum aliquip fugiat proident tempor nulla ipsum eu anim sunt. Non ea pariatur est ea aliqua laborum adipisicing fugiat aliqua labore elit minim consequat. Proident sint sunt ex minim consequat amet adipisicing sit. Non tempor labore deserunt exercitation adipisicing sit amet ut eu. Laboris enim duis irure ullamco incididunt esse sint laboris et est fugiat veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 annonces-link">
                    <a href="assets/src/annonces.php">Voir toutes les annonces</a>
                </div>
            </div>
        </section>
        <!-- DERNIERES ANNONCES -->

        <!-- FOOTER -->
        <?php include("templates/footer.php"); ?>
        <!-- FOOTER -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>