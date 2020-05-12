<header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
        <!-- RESPONSIVE -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- RESPONSIVE -->
        <!-- LOGO -->
        <a class="btn btn-dark" href="index.php"> <?= $i18n->get('general', 'isa') ?> </a>
        <!-- LOGO -->
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- INDEX -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><?= $i18n->get('home', 'title') ?></a>
                </li>
                <!-- INDEX -->
                <!-- ASSOCIATION -->
                <li class="nav-item">
                    <a class="nav-link" href="presentation.php"><?= $i18n->get('presentation', 'title') ?></a>
                </li>
                <!-- ASSOCIATION -->
                <!-- EVENTS -->
                <li class="nav-item">
                    <a class="nav-link" href="events.php"><?= $i18n->get('events', 'title') ?></a>
                </li>
                <!-- EVENTS -->
                <!-- CONTACT -->
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><?= $i18n->get('contact', 'title') ?></a>
                </li>
                <!-- CONTACT -->
            </ul>
            <!-- LANG -->
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
            <!-- LANG -->
        </div>
        <!-- NAV -->
    </nav>
    <!-- NAVBAR -->
</header>

