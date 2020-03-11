<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("templates/meta.php"); ?>
        <link rel="stylesheet" href="assets/css/index.css">
        <title>AEE | Association des Étudiants Étrangers</title>
    </head>
    <body>
        <!-- HEADER -->
        <?php include("templates/header.php"); ?>
        <!-- HEADER -->

        <!-- DERNIERES ANNONCES -->
        <section class="container tuile">
            <header>
                <h2>Dernières annonces</h2>
            </header>
            <!-- CARDS -->
            <div class="cards row">
                <div class="col-12 col-lg-6">
                    <!-- CARD 1 -->
                    <article class="card shadow-sm">
                        <img src="assets/img/annonce.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Titre</h3>
                            <p class="card-text">
                                Lorem tempor nulla ipsum eu anim sunt. Non ea pariatur est ea aliqu sit amet ut eu. Laboris enim duis 
                                irure ullamco incididunt esse sint laboris et est fugiat veniam.
                            </p>
                            <a href="details.php">Détails</a>
                        </div>
                    </article>
                    <!-- CARD 1 -->
                </div>
                <div class="col-12 col-lg-6">
                    <!-- CARD 2 -->
                    <article class="card shadow-sm">
                        <img src="assets/img/annonce.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Titre</h3>
                            <p class="card-text">
                                Lorem incididunt veniam aliqua nostrud cupidataagna. Non ea pariatur est ea aliqua laborum adipisicing 
                                fugiat aliqua labore elit minim consequat. Proident sint sunt ex minim consequat amet adipisicing sit. 
                                Non tempor labore deserunt exercitation adipisicing sit amet ut eu. 
                            </p>
                            <a href="details.php">Détails</a>
                        </div>
                    </article>
                    <!-- CARD 2 -->
                </div>
            </div>
            <!-- CARDS -->
            <footer>
                <a href="annonces.php" class="btn btn-dark">Voir toutes les annonces</a>
            </footer>
        </section>
        <!-- DERNIERES ANNONCES -->

        <!-- GALERIE -->
        <section class="container-fluid galerie">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-interval="100000" data-pause="hover">
                    <div class="carousel-inner">
                        <!-- SLIDE 1 -->
                        <div class="carousel-item active">
                            <img src="assets/img/gal1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <!-- SLIDE 1 -->
                        <!-- SLIDE 2 -->
                        <div class="carousel-item">
                            <img src="assets/img/gal2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <!-- SLIDE 2 -->
                        <!-- SLIDE 3 -->
                        <div class="carousel-item">
                            <img src="assets/img/gal.jpg" class="d-block w-100" alt="...">
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
        <!-- GALERIE -->

        <!-- FOOTER -->
        <?php include("templates/footer.php"); ?>
        <!-- FOOTER -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>