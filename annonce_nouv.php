<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("templates/meta.php"); ?>
        <title>Ajouter une annonce | Association des Étudiants Étrangers</title>
    </head>
    <body>
        <!-- NAVBAR -->
        <?php include("templates/navbar.php"); ?>
        <!-- NAVBAR -->

        <!-- HEADER -->
        <header>
            <h1>Nouvelle annonce</h1>
        </header>
        <!-- HEADER -->

        <!-- FORMULAIRE -->
        <section class="container">
            <form>
                <div class="form-group">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Titre">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="10" placeholder="Votre annonce"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" class="form-control-file">
                    </div>
                </div>
            </form>
            <a class="btn btn-primary" href="annonce_nouv.php" role="button">Publier l'annonce</a>
        </section>
        <!-- FORMULAIRE -->

        <!-- FOOTER -->
        <?php include("templates/footer.php"); ?>
        <!-- FOOTER -->
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>