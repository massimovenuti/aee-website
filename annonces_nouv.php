<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'templates/meta.php'; ?>
    <link rel="stylesheet" href="assets/css/form.css">
    <title>Ajouter une annonce | Association des Étudiants Étrangers</title>
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <!-- FORMULAIRE -->
    <section class="container tuile">
        <header>
            <h2>Nouvelle annonce</h2>
        </header>

        <?php include 'assets/php/annonces_envoi.php'; ?>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" class="form-control">
            </div>
            <div class="form-group">
                <label for="resume">Résumé</label>
                <textarea id="resume" name="resume" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="contenu">Contenu</label>
                <textarea id="contenu" name="contenu" class="form-control" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="alert alert-danger hidden" role="alert">
                Formulaire invalide
            </div>
            <button type="submit" class="btn btn-dark">Publier l'annonce</button>
        </form>
    </section>
    <!-- FORMULAIRE -->

    <?php
    include 'templates/footer.php';
    include 'templates/scripts.php';
    ?>
    <script src="assets/js/annonces_nouv.js"></script>
</body>
</html>