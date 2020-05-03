<?php
session_start();
if (!empty($_GET["lang"])) {
    switch (strtolower($_GET["lang"])) {
        case "en":
            $_SESSION['lang'] = 'en';
            break;
        case "de":
            $_SESSION['lang'] = 'de';
            break;
        default:
            $_SESSION['lang'] = 'fr';
            break;
    }
}
if (empty($_SESSION["lang"])) {
    $_SESSION["lang"] = 'fr';
}
$lang=$_SESSION["lang"];

/* -------------------------------------------------------------------------------------------------- */
/* FR ---------------------------------------------- */
/* header */
$dico['fr']['association'] = 'Association des Étudiants Étrangers';
$dico['fr']['aee'] = 'AEE';
$dico['fr']['accueil'] = 'Accueil';
$dico['fr']['qui-sommes-nous'] = 'Qui sommes-nous ?';
$dico['fr']['annonces'] = 'Annonces';
$dico['fr']['contact'] = 'Contact';
/* index */
$dico['fr']['dernieres-annonces'] = 'Dernières annonces';
$dico['fr']['voir-tout'] = 'Voir tout';
$dico['fr']['0-annonce'] = "Aucune annonce n'a encore été publiée.";
/* aee */
$dico['fr']['aee-titre1'] = 'Titre 1';
$dico['fr']['aee-titre2'] = 'Titre 2';
$dico['fr']['aee-titre3'] = 'Titre 3';
$dico['fr']['aee-texte1'] = 'Qui irure amet occaecat deserunt excepteur Lorem qui nisi officia. Ut ipsum 
    eiusmod dolore eu amet incididunt et magna ut ex eiusmod sit. Sint id est ex culpa commodo. Deserunt culpa 
    irure nostrud occaecat consequat mollit id cupidatat dolore qui reprehenderit.';
$dico['fr']['aee-texte2'] = 'Qui irure amet occaecat deserunt excepteur Lorem qui nisi officia. Ut ipsum 
    eiusmod dolore eu amet incididunt et magna ut ex eiusmod sit. Sint id est ex culpa commodo. Deserunt culpa 
    irure nostrud occaecat consequat mollit id cupidatat dolore qui reprehenderit.';
$dico['fr']['aee-texte3'] = 'Qui irure amet occaecat deserunt excepteur Lorem qui nisi officia. Ut ipsum 
    eiusmod dolore eu amet incididunt et magna ut ex eiusmod sit. Sint id est ex culpa commodo. Deserunt culpa 
    irure nostrud occaecat consequat mollit id cupidatat dolore qui reprehenderit.';
/* annonces */
$dico['fr']['valider'] = 'Valider';
$dico['fr']['0-annonce-trouvee'] = "Aucune annonce trouvée pour: ";
$dico['fr']['voir-plus'] = 'Voir plus';
$dico['fr']['fin'] = 'Aucune autre annonce';
/* nouvelle annonce */
$dico['fr']['nouvelle-annonce'] = 'Nouvelle annonce';
$dico['fr']['form-titre'] = 'Titre';
$dico['fr']['form-resume'] = 'Résumé';
$dico['fr']['form-contenu'] = 'Contenu';
$dico['fr']['form-image'] = 'Image';
$dico['fr']['form-publier'] = "Publier l'annonce";
$dico['fr']['annonce-publiee'] = "Annonce publiée !";
/* details annonce */
$dico['fr']['voir-aussi'] = 'Voir aussi';
/* contact */
$dico['fr']['form-nom'] = 'Nom';
$dico['fr']['form-prenom'] = 'Prénom';
$dico['fr']['form-mail'] = 'Mail';
$dico['fr']['form-message'] = 'Message';
$dico['fr']['form-votre-message'] = 'Votre message';
$dico['fr']['form-envoyer'] = 'Envoyer';
/* divers */
$dico['fr']['details'] = 'Détails';
$dico['fr']['rechercher'] = 'Rechercher';
$dico['fr']['form-invalide'] = 'Formulaire invalide';
$dico['fr']['form-valide'] = 'Formulaire valide';

/* -------------------------------------------------------------------------------------------------- */
/* EN ---------------------------------------------- */
/* header */
$dico['en']['association'] = 'International Students Association';
$dico['en']['aee'] = 'ISA';
$dico['en']['accueil'] = 'Home';
$dico['en']['qui-sommes-nous'] = 'Who are we ?';
$dico['en']['annonces'] = 'Announcements';
$dico['en']['contact'] = 'Contact';
/* index */
$dico['en']['dernieres-annonces'] = 'Latest announcements';
$dico['en']['voir-tout'] = 'See all';
$dico['en']['0-annonce'] = "No announcements have been published yet.";
/* aee */
$dico['en']['aee-titre1'] = 'Title 1';
$dico['en']['aee-titre2'] = 'Title 2';
$dico['en']['aee-titre3'] = 'Title 3';
$dico['en']['aee-texte1'] = 'Qui irure amet occaecat deserunt excepteur Lorem qui nisi officia. Ut ipsum 
    eiusmod dolore eu amet incididunt et magna ut ex eiusmod sit. Sint id est ex culpa commodo. Deserunt culpa 
    irure nostrud occaecat consequat mollit id cupidatat dolore qui reprehenderit.';
$dico['en']['aee-texte2'] = 'Qui irure amet occaecat deserunt excepteur Lorem qui nisi officia. Ut ipsum 
    eiusmod dolore eu amet incididunt et magna ut ex eiusmod sit. Sint id est ex culpa commodo. Deserunt culpa 
    irure nostrud occaecat consequat mollit id cupidatat dolore qui reprehenderit.';
$dico['en']['aee-texte3'] = 'Qui irure amet occaecat deserunt excepteur Lorem qui nisi officia. Ut ipsum 
    eiusmod dolore eu amet incididunt et magna ut ex eiusmod sit. Sint id est ex culpa commodo. Deserunt culpa 
    irure nostrud occaecat consequat mollit id cupidatat dolore qui reprehenderit.';
/* annonces */
$dico['en']['valider'] = 'Validate';
$dico['en']['0-annonce-trouvee'] = "No announcement found for: ";
$dico['en']['voir-plus'] = 'See more';
$dico['en']['fin'] = 'No more announcement';
/* nouvelle annonce */
$dico['en']['nouvelle-annonce'] = 'New announcement';
$dico['en']['form-titre'] = 'Title';
$dico['en']['form-resume'] = 'Summary';
$dico['en']['form-contenu'] = 'Content';
$dico['en']['form-image'] = 'Image';
$dico['en']['form-publier'] = "Publish";
$dico['en']['annonce-publiee'] = "Announcement published !";
/* details annonce */
$dico['en']['voir-aussi'] = 'See also';
/* contact */
$dico['en']['form-nom'] = 'First name';
$dico['en']['form-prenom'] = 'Last name';
$dico['en']['form-mail'] = 'Mail';
$dico['en']['form-message'] = 'Message';
$dico['en']['form-votre-message'] = 'Your message';
$dico['en']['form-envoyer'] = 'Send';
/* divers */
$dico['en']['details'] = 'Details';
$dico['en']['rechercher'] = 'Search';
$dico['en']['form-invalide'] = 'Invalid form';
$dico['en']['form-valide'] = 'Valid form';


/* -------------------------------------------------------------------------------------------------- */
/* DE ---------------------------------------------- */
/* header */
$dico['de']['association'] = 'Verband der Ausländischen Studenten';
$dico['de']['aee'] = 'VAS';
$dico['de']['accueil'] = 'Empfang';
$dico['de']['qui-sommes-nous'] = 'Wer sind wir ?';
$dico['de']['annonces'] = 'Anzeigen';
$dico['de']['contact'] = 'Kontakt';
/* index */
$dico['de']['dernieres-annonces'] = 'Letzte Ankündigung';
$dico['de']['voir-tout'] = 'Alles sehen';
$dico['de']['0-annonce'] = "Es wurden noch keine Ankündigungen veröffentlicht.";
/* aee */
$dico['de']['aee-titre1'] = 'Titel 1';
$dico['de']['aee-titre2'] = 'Titel 2';
$dico['de']['aee-titre3'] = 'Titel 3';
$dico['de']['aee-texte1'] = 'Qui irure amet occaecat deserunt excepteur Lorem qui nisi officia. Ut ipsum 
    eiusmod dolore eu amet incididunt et magna ut ex eiusmod sit. Sint id est ex culpa commodo. Deserunt culpa 
    irure nostrud occaecat consequat mollit id cupidatat dolore qui reprehenderit.';
$dico['de']['aee-texte2'] = 'Qui irure amet occaecat deserunt excepteur Lorem qui nisi officia. Ut ipsum 
    eiusmod dolore eu amet incididunt et magna ut ex eiusmod sit. Sint id est ex culpa commodo. Deserunt culpa 
    irure nostrud occaecat consequat mollit id cupidatat dolore qui reprehenderit.';
$dico['de']['aee-texte3'] = 'Qui irure amet occaecat deserunt excepteur Lorem qui nisi officia. Ut ipsum 
    eiusmod dolore eu amet incididunt et magna ut ex eiusmod sit. Sint id est ex culpa commodo. Deserunt culpa 
    irure nostrud occaecat consequat mollit id cupidatat dolore qui reprehenderit.';
/* annonces */
$dico['de']['valider'] = 'Validieren';
$dico['de']['0-annonce-trouvee'] = "Keine Anzeige gefunden für: ";
$dico['de']['voir-plus'] = 'Mehr sehen';
$dico['de']['fin'] = 'Keine anderen Ankündigungen';
/* nouvelle annonce */
$dico['de']['nouvelle-annonce'] = 'Neue Anzeige';
$dico['de']['form-titre'] = 'Titel';
$dico['de']['form-resume'] = 'Zusammenfassung';
$dico['de']['form-contenu'] = 'Inhalt';
$dico['de']['form-image'] = 'Bild';
$dico['de']['form-publier'] = "Veröffentlichen";
$dico['de']['annonce-publiee'] = "Die Anzeige veröffentlicht wurde !";
/* details annonce */
$dico['de']['voir-aussi'] = 'Siehe auch';
/* contact */
$dico['de']['form-nom'] = 'Name';
$dico['de']['form-prenom'] = 'Vorname';
$dico['de']['form-mail'] = 'Mail';
$dico['de']['form-message'] = 'Nachricht';
$dico['de']['form-votre-message'] = 'Ihre Nachricht';
$dico['de']['form-envoyer'] = 'Senden';
/* divers */
$dico['de']['details'] = 'Details';
$dico['de']['rechercher'] = 'Suche';
$dico['de']['form-invalide'] = 'Ungültige Formular';
$dico['de']['form-valide'] = 'Gültiges Formular';
