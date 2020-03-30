<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("templates/meta.php"); ?>
        <link rel="stylesheet" href="assets/css/form.css">
        <title>Contact | Association des Étudiants Étrangers</title>
    </head>
    <body>
        <!-- HEADER -->
        <?php include("templates/header.php"); ?>
        <!-- HEADER -->

        <!-- FORMULAIRE -->
        <section class="container tuile">
            <header>
                <h2>Contact</h2>
            </header>
            <form method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label for="firstName">Prénom</label>
                            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Jon">
                        </div>
                        <div class="col">
                            <label for="lastName">Nom</label>
                            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Doe">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Mail</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="jondoe@gmail.com">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="10" placeholder="Votre message"></textarea>
                </div>
                <div class="alert alert-danger hidden" role="alert">
                    Formulaire invalide
                </div>
                <button class="btn btn-dark" type="submit">Envoyer</button>
            </form>
        </section>
        <!-- FORMULAIRE -->

        <!-- FOOTER -->
        <?php include("templates/footer.php"); ?>
        <!-- FOOTER -->

        <?php include("templates/scripts.php");?>
        <script src="assets/js/form_contact.js"></script>
    </body>
</html>