<?php
?>

<!DOCTYPE html>
<html lang="fr">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <?php
            include "inc/banniere.php";
        ?>
    </header>
        <nav>
            <?php
                include "inc/menu.php";
            ?>
        </nav>


        <div class="container">
        <h2>Bienvenue sur notre site consacré à Madrid</h2>
        <img src="img/armoiries.png" alt="Blason">
        <div class="intro_accueil">
        <p class="text">
        Madrid est la capitale et la plus grande ville d'Espagne. Située dans la partie centrale du royaume, elle est également la 
        capitale et la ville la plus peuplée de la Communauté de Madrid. En tant que capitale d'État, elle abrite la plupart des 
        institutions politiques du pays, dont la résidence royale, le siège du gouvernement et le Parlement.<br>
        <br>
        Elle compte une population d'environ 3,3 millions d'habitants intra-muros sur une superficie totale de 604,3 km2, au sein d'une 
        aire urbaine d'environ 6,5 millions d'habitants en 2014. En comptant sa population intra-muros, Madrid est la deuxième ville de 
        l'Union européenne, derrière Berlin.<br>
        <br>
        Ville mondiale, elle abrite le siège de nombreuses institutions, dont l'Organisation mondiale du tourisme, l'Organisation des 
        États Ibéro-américains, l'Académie royale espagnole et l'Institut Cervantes. Considérée comme l'une des principales places 
        financières de l'Europe du Sud, elle partage le statut de cœur économique de l'Espagne avec Barcelone. Elle accueille le siège 
        social des plus grandes entreprises du pays, comme Telefónica, Repsol ou Iberia.<br>
        <br>
        Les bâtiments d'architecture récente côtoient des constructions de style néo-classique, telles que la porte d'Alcalá, la place de 
        Cybèle ou la cathédrale de l'Almudena. Ville d'art, ses trois principaux musées, le musée du Prado, le musée Reina Sofía et le 
        musée Thyssen-Bornemisza, comptent parmi les plus visités au monde. En outre, Madrid abrite deux des plus grands clubs de football 
        au monde, le Real Madrid et l'Atlético de Madrid.
        </p>
        <br>
        </div>
        <p>Dans ce site, vous trouverez diverses ,informations concernant :</p>
        <br>
        <div class="liste_accueil"> 
            <ul>
                <li>
                    <a href="./?p=geo">Une brève présentation de Bruxelles sur son rôle en Belgique et dans le monde</a>
                </li>
                <li>
                    <a href="./?p=hist">Un rappel historique, de sa fondation à aujourd'hui</a>
                </li>
                <li>
                    <a href="./?p=cult">Un tour d'horizon en matière d'art et culture</a>
                </li>
                <li>
                    <a href="./?p=gal">Une galerie de photographies</a>
                </li>
                <li>
                    <a href="./?p=form">Un formulaire pour nous contacter</a>
                </li>
                <li>
                    <a href="./?p=link">Des liens vers des sites partenaires</a>
                </li>
            </ul>
        </div>
        <br>
        <footer>
            <p>Sources : Wikipedia - Ville de Bruxelles</p>
        </footer>
        
</body>
</html>