<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("templates/meta.php"); ?>
        <link rel="stylesheet" href="assets/css/form.css">
        <title>Ajouter une annonce | Association des Étudiants Étrangers</title>
    </head>
    <body>
        <!-- HEADER -->
        <?php include("templates/header.php"); ?>
        <!-- HEADER -->

        <!-- FORMULAIRE -->
        <section class="container tuile">
            <header>
                <h2>Nouvelle annonce</h2>
            </header>
            <form method="post">
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="resume">Résumé</label>
                    <textarea id="resume" name="resume" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="annonce">Annonce</label>
                    <textarea id="annonce" name="annonce" class="form-control" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" class="form-control-file">
                </div>
                <div class="alert alert-danger hidden" role="alert">
                    Formulaire invalide
                </div>
                <button class="btn btn-dark" type="submit">Publier l'annonce</button>
            </form>
        </section>
        <!-- FORMULAIRE -->

        <!-- FOOTER -->
        <?php include("templates/footer.php"); ?>
        <!-- FOOTER -->
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="assets/js/form_nouv.js"></script>
    </body>
</html>