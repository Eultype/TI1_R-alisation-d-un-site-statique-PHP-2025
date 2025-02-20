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
        <h2>Quelques liens vers nos partenaires</h2>
        <img src="img/liens.jpg" alt="Blason">
        <p class="text_liens">D'autres capitals se sont associées à notre site</p>
        <div class="lienss">
            <div class="lien">
                <a href="">Berlin</a>
                <a href="">Vienne</a>
                <a href="">Paris</a>
                <a href="">Madrid</a>
                <a href="">Rome</a>
                <a href="">Londres</a>
            </div>
            <div class="lien">
                <a href="">Lisbone</a>
                <a href="">Prague</a>
                <a href="">Amsterdam</a>
                <a href="">Copenhague</a>
                <a href="">Dublin</a>
                <a href="">Athènes</a>
            </div>
            <div class="lien">
                <a href="">Sofia</a>
                <a href="">Varsovie</a>
                <a href="">Heslinki</a>
                <a href="">Stokholm</a>
                <a href="">Oslo</a>
                <a href="">Budapest</a>
            </div>
        </div>
</body>
</html>