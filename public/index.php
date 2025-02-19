<?php
# TI1_Realisation_Site_Statique\public\index.php

/*
Notre contrôleur frontal
Il est la seule page publique du site
*/

// si on a une variable get nommée p
if(isset($_GET['p'])){

    // création d'un switch qui va vérifier la variable get p
    switch($_GET['p']){
        case "geo":
            $title = 'Geographie';
            include "../templates/geographie.php";
            break;
        case "hist":
            $title = 'Histoire';
            include "../templates/histoire.php";
            break;
        case "cult":
            $title = 'Culture';
            include "../templates/culture.php";
            break;
        case "gal":
            $title = 'Galerie';
            include "../templates/galerie.php";
            break;
        case "form":
            $title = 'Contacts';
            include "../templates/contact.php";
            break;
        case "link":
            $title = 'Liens';
            include "../templates/liens.php";
            break;
        // variable p pas dans le switch 
        default:
            $title = "Erreur 404";
            include "../templates/page-404.php";
    }

// sinon nous sommes sur l'accueil    
}else{
    // homepage title
    $title = "Page d'accueil";
    // Appel de la vue
    include "../templates/accueil.php";
}