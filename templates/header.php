<header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
        <!-- RESPONSIVE -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- RESPONSIVE -->

        <!-- LOGO -->
        <a class="btn btn-dark" href="index.php"> <?= $dico[$lang]['aee'] ?> </a>
        <!-- LOGO -->

        <!-- NAV -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- ACCUEIL -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><?= $dico[$lang]['accueil'] ?></a>
                </li>
                <!-- ACCUEIL -->
                <!-- QUI SOMMES-NOUS -->
                <li class="nav-item">
                    <a class="nav-link" href="aee.php"><?= $dico[$lang]['qui-sommes-nous'] ?></a>
                </li>
                <!-- QUI SOMMES-NOUS -->
                <!-- ANNONCES -->
                <li class="nav-item">
                    <a class="nav-link" href="annonces.php"><?= $dico[$lang]['annonces'] ?></a>
                </li>
                <!-- ANNONCES -->
                <!-- CONTACT -->
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><?= $dico[$lang]['contact'] ?></a>
                </li>
                <!-- CONTACT -->
            </ul>
            <!-- LANGUES -->
            <form method="get" class="form-inline">
                <input type="hidden" name="id" value="<?= $id ?>"/>
                <label for="lang"></label>
                <select id="lang" name="lang" class="shadow-sm" onchange='this.form.submit()'>
                    <option value="">LANG</option>
                    <option value="fr">FR</option>
                    <option value="en">EN</option>
                    <option value="de">DE</option>
                </select>
            </form>
            <!-- LANGUES -->
        </div>
        <!-- NAV -->
    </nav>
    <!-- NAVBAR -->
</header>

