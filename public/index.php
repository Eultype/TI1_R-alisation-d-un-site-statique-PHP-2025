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
        case "aboutme":
            $title = 'A propos';
            include "../templates/aproposView.php";
            break;
        case "history":
            $title = 'Histoire';
            include "../templates/histoireView.php";
            break;
        case "contact":
            $title = 'Contact';
            include "../templates/contactView.php";
            break;
        // variable p pas dans le switch 
        default:
            
            include "../templates/erreur404View.php";
    }

// sinon nous sommes sur l'accueil    
}else{
    // homepage title
    $title = "Accueil";
    // Appel de la vue
    include "../templates/accueilView.php";
}