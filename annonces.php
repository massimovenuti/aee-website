<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("templates/meta.php"); ?>
        <link rel="stylesheet" href="assets/css/annonces.css">
        <title>Annonces | Association des Étudiants Étrangers</title>
    </head>
    <body>
        <!-- HEADER -->
        <?php include("templates/header.php"); ?>
        <!-- HEADER -->

        <!-- ANNONCES -->
        <section class="container tuile">
            <header>
                <h2>Annonces</h2>
                <input type="text" class="form-control" placeholder="Rechercher">
                <a class="btn btn-dark" href="nouv.php" role="button">Ajouter une annonce</a>
            </header>
            <!-- CARDS -->
            <div class="row">
                <div class="col-12">
                    <!-- CARD 1 -->
                    <article class="row shadow-sm">
                            <div class="col-12 col-lg-3 annonce-img">
                                <img src="assets/img/annonce.jpg" alt="">
                            </div>
                            <div class="col-12 col-lg-9">
                                <h3>Annonce 1</h3>
                                <p>
                                    Lorem tempor nulla ipsum eu anim sunt. Non ea pariatur est ea aliqu sit amet ut eu. Laboris enim duis irure 
                                    ullamco incididunt esse sint laboris et est fugiat veniam.
                                </p>
                                <a href="details.php">Plus de détails</a>                
                            </div>
                    </article>
                    <!-- CARD 1 -->
                </div>
                <div class="col-12">
                    <!-- CARD 2 -->
                    <article class="row shadow-sm">
                        <div class="col-12 col-lg-3 annonce-img">
                            <img src="assets/img/annonce.jpg" alt="">
                        </div>
                        <div class="col-12 col-lg-9">
                            <h3>Annonce 2</h3>
                            <p>
                                Lorem incididunt veniam aliqua nostrud cupidataagna. Non ea pariatur est ea aliqua laborum adipisicing fugiat
                                aliqua labore elit minim consequat. Proident sint sunt ex minim consequat amet adipisicing sit. Non tempor 
                                labore deserunt exercitation adipisicing sit amet ut eu. Laboris enim duis irure ullamco incididunt 
                                esse sint laboris et est fugiat veniam.
                            </p>
                            <a href="details.php">Plus de détails</a>                
                        </div>
                    </article>
                    <!-- CARD 2 -->
                </div>
                <div class="col-12">
                    <!-- CARD 3 -->
                    <article class="row shadow-sm">
                        <div class="col-12 col-lg-3 annonce-img">
                            <img src="assets/img/annonce.jpg" alt="">
                        </div>
                        <div class="col-12 col-lg-9">
                            <h3>Annonce 3</h3>
                            <p>
                                Lorem incididunt veniam aliqua nostlpa consequat. Proident sint sunt ex minim consequat amet adipisicing 
                                sit. Non tempor labore deserunt exercitation adipisicing sit amet ut eu. Laboris enim duis irure ullamco 
                                incididunt esse sint laboris et est fugiat veniam.
                            </p>
                            <a href="details.php">Plus de détails</a>                
                        </div>
                    </article>
                    <!-- CARD 3 -->
                </div>
            </div>
            <!-- CARDS -->
        </section>
        <!-- ANNONCES -->

        <!-- FOOTER -->
        <?php include("templates/footer.php"); ?>
        <!-- FOOTER -->
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        
    </body>
</html>