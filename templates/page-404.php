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

    <div class="container">
    <header>
        <?php
            include "inc/banniere.php";
        ?>
        <nav>
            <?php
                include "inc/menu.php";
            ?>
        </nav>
    </header>

    <div class="title">
        <h2>Erreur 404</h2>
    </div>
    
    <div class="container2">
    <main>
        <img src="img/404.jpg" alt="Erreur404">
        <p class>
        Euh,la page demandée est introuvable !
        </p>
    </main>
    </div>

    </div>
</body>
</html>