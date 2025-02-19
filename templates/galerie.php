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
    <h2>Bienvenue sur notre site consacré à Madrid.</h2>
    <div class="img-grid">
        <div class="item">
        <img src="img/480px_Buen_Retiro_Park.jpg" alt="Buen Retiro Park">
        <p>Buen Retiro Park</p>
    </div>
    <div class="item">
        <img src="img/480px_Calle_de_Alcala.jpg" alt="Calle de Alcala">
        <p>Calle de Alcala</p>
    </div>
    <div class="item">
        <img src="img/480px_Congreso_de_los_Diputados.jpg" alt="Congreso_de_los_Diputados">
        <p>Congreso_de_los_Diputados</p>
    </div>
    <div class="item">
        <img src="img/480px_Palacio_de_Comunicaciones.jpg" alt="Palacio de Comunicaciones">
        <p>Palacio de Comunicaciones</p>
    </div>
    <div class="item">
        <img src="img/480px_Palacio_Real.jpg" alt="Palacio Real">
        <p>Palacio Real</p>
    </div>
    <div class="item">
        <img src="img/480px_Plaza_de_Colขn.jpg" alt="Plaza_de_Colขn">
        <p>Plaza_de_Colขn</p>
    </div>
    </div>

</body>
</html>