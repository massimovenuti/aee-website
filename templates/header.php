<header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
        <!-- BOOTSTRAP RESPONSIVE -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- "ISA" BUTTON -->
        <a class="btn btn-dark" href="index.php"> <?= $i18n->get('general', 'isa') ?> </a>

        <!-- LINKS TO PAGES -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><?= $i18n->get('home', 'title') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="presentation.php"><?= $i18n->get('presentation', 'title') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="events.php"><?= $i18n->get('events', 'title') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><?= $i18n->get('contact', 'title') ?></a>
                </li>
            </ul>
        </div>

        <!-- LANG -->
        <form method="get" class="form-inline">
            <label for="lang"></label>
            <select id="lang" name="lang" class="shadow-sm" onchange='this.form.submit()'>
                <option value="">LANG</option>
                <option value="fr">FR</option>
                <option value="en">EN</option>
                <option value="de">DE</option>
            </select>
            <?php
            if ($id != NULL)
                echo "<input type='hidden' name='id' value='" . $id . "'/>"
            ?>
        </form>
    </nav>
</header>

