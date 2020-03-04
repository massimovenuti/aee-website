<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("templates/meta.php"); ?>
        <link rel="stylesheet" href="assets/css/annonces_style.css">
        <title>Annonces | Association des Étudiants Étrangers</title>
    </head>
    <body>
        <!-- NAVBAR -->
        <?php include("templates/navbar.php"); ?>
        <!-- NAVBAR -->

        <!-- HEADER -->
        <header>
            <h2>Annonces</h2>
        </header>
        <!-- HEADER -->

        <!-- ANNONCES -->
        <section class="container">
            <div class="row annonces">
                <div class="col-12 bouton">
                    <a class="btn btn-primary" href="annonce_nouv.php" role="button">Ajouter une annonce</a>
                </div>

                <div class="col-3 annonce-img">
                    <img src="assets/img/annonce1.jpg" alt="">
                </div>
                <div class="col-9 annonce-txt">
                    <h2>Annonce 1</h2>
                    <p>Lorem tempor nulla ipsum eu anim sunt. Non ea pariatur est ea aliqua laborum adipisicing fugiat aliqua labore elit minim consequat. Proident sint sunt ex minim consequat amet adipisicing sit. Non tempor labore deserunt exercitation adipisicing sit amet ut eu. Laboris enim duis irure ullamco incididunt esse sint laboris et est fugiat veniam.</p>
                </div>

                <div class="col-3 annonce-img">
                    <img src="assets/img/annonce2.jpg" alt="">
                </div>
                <div class="col-9 annonce-txt">
                    <h2>Annonce 2</h2>
                    <p>Lorem incididunt veniam aliqua nostrud cupidatat irure officia aliqua. Culpa magna culLorem incididunt veniam aliqua nostrud cupidatat irure officia aliqua. Culpa magna culpa consequat sit incididunt culpa nulla officia reprehenderit esse. Laborum aliquip fugiat proident tempor nulla ipsum eu anim sunt. Non ea pariatur est ea aliqua laborum adipisicing fugiat aliqua labore elit minim consequat. Proident sint sunt ex minim consequat amet adipisicing sit. Non tempor labore deserunt exercitation adipisicing sit amet ut eu. Laboris enim duis irure ullamco incididunt esse sint laboris et est fugiat veniam.</p>
                </div>

                <div class="col-3 annonce-img">
                    <img src="assets/img/annonce3.jpg" alt="">
                </div>
                <div class="col-9 annonce-txt">
                    <h2>Annonce 3</h2>
                    <p>Lorem incididunt veniam aliqua nostrud cupidatat irure officia aliqua. Culpa magna culpa consequat sit incididunt culpa nulla officia reprehenderit esse. Laborum aliquip fugiat proident tempor nulla ipsum eu anim sunt. Non ea pariatur est ea aliqua laborum adipisicing fugiat aliqua labore elit minim consequat. Proident sint sunt ex minim consequat amet adipisicing sit. Non tempor labore deserunt exercitation adipisicing sit amet ut eu. Laboris enim duis irure ullamco incididunt esse sint laboris et est fugiat veniam.</p>
                </div>
            </div>
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