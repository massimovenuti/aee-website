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
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="assets/js/form_contact.js"></script>
    </body>
</html>