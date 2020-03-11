<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("templates/meta.php"); ?>
        <link rel="stylesheet" href="assets/css/details.css">
        <title>Annonce | Association des Étudiants Étrangers</title>
    </head>
    <body>
        <!-- HEADER -->
        <?php include("templates/header.php"); ?>
        <!-- HEADER -->

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- ANNONCE -->
                    <article class="tuile">
                        <header>
                            <img src="assets/img/annonce.jpg" alt="">   
                            <h2>Titre de l'annonce</h2>             
                        </header>
                        <p>
                            Qui sunt mollit duis adipisicing cillum nulla ex Lorem voluptate excepteur aliqua velit. Proident ipsum 
                            dolore mollit velit reprehenderit est. Officia labore pariatur mollit nostrud sunt voluptate deserunt. 
                            Incididunt consequat qui eiusmod incididunt anim duis quis minim pariatur ut Lorem adipisicing pariatur.
                        </p>
                        <p>
                            Qui sunt mollit duis adipisicing cillum nulla ex Lorem voluptate excepteur aliqua velit. Proident ipsum 
                            dolore mollit velit reprehenderit est. Officia labore pariatur mollit nostrud sunt voluptate deserunt. 
                            Incididunt consequat qui eiusmod incididunt anim duis quis minim pariatur ut Lorem adipisicing pariatur.
                        </p>
                        <p>
                            Qui sunt mollit duis adipisicing cillum nulla ex Lorem voluptate excepteur aliqua velit. Proident ipsum 
                            dolore mollit velit reprehenderit est. Officia labore pariatur mollit nostrud sunt voluptate deserunt. 
                            Incididunt consequat qui eiusmod incididunt anim duis quis minim pariatur ut Lorem adipisicing pariatur.
                        </p>
                    </article>
                    <!-- ANNONCE -->
                </div>
                <div class="col-12 col-lg-4">
                    <!-- ASIDE -->
                    <aside class="tuile">
                        <header>
                            <h2>Voir aussi</h2>
                            <input type="text" class="form-control" placeholder="Rechercher">
                        </header>

                        <div class="row">
                            <div class="col-12">
                                <!-- CARD 1 -->
                                <article class="row shadow-sm">
                                    <div class="col-12">
                                        <h3>Annonce 1</h3>
                                        <a href="details.php">Plus de détails</a>
                                    </div>  
                                </article>
                                <!-- CARD 1 -->
                            </div>
                            <div class="col-12">
                                <!-- CARD 2 -->
                                <article class="row shadow-sm">
                                    <div class="col-12">
                                        <h3>Annonce 2</h3>
                                        <a href="details.php">Plus de détails</a>
                                    </div>    
                                </article>
                                <!-- CARD 2 -->
                            </div>
                            <div class="col-12">
                                <!-- CARD 3 -->
                                <article class="row shadow-sm">
                                    <div class="col-12">
                                        <h3>Annonce 3</h3>
                                        <a href="details.php">Plus de détails</a>
                                    </div>  
                                </article>
                                <!-- CARD 3 -->
                            </div>
                        </div>
                    </aside>
                    <!-- ASIDE -->
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include("templates/footer.php"); ?>
        <!-- FOOTER -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>