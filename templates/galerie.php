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
    <h2>Galerie Photos</h2>
    
    <div class="img-grid">
        <div class="item">
        <img src="img/480px_Buen_Retiro_Park.jpg" alt="Buen Retiro Park" onclick="openLightbox(0)">
        <p>Buen Retiro Park</p>
    </div>
    <div class="item">
        <img src="img/480px_Calle_de_Alcala.jpg" alt="Calle de Alcala" onclick="openLightbox(1)">
        <p>Calle de Alcala</p>
    </div>
    <div class="item">
        <img src="img/480px_Congreso_de_los_Diputados.jpg" alt="Congreso_de_los_Diputados" onclick="openLightbox(2)">
        <p>Congreso_de_los_Diputados</p>
    </div>
    <div class="item">
        <img src="img/480px_Palacio_de_Comunicaciones.jpg" alt="Palacio de Comunicaciones" onclick="openLightbox(3)">
        <p>Palacio de Comunicaciones</p>
    </div>
    <div class="item">
        <img src="img/480px_Palacio_Real.jpg" alt="Palacio Real"onclick="openLightbox(4)">
        <p>Palacio Real</p>
    </div>
    <div class="item">
        <img src="img/480px_Plaza_de_Colขn.jpg" alt="Plaza_de_Colขn"onclick="openLightbox(5)">
        <p>Plaza_de_Colขn</p>
    </div>
    </div>

    <div class="lightbox" id="lightbox">
            <span class="close" onclick="closeLightbox()">&times;</span>
            <span class="prev" onclick="changeImage(-1)">&#10094;</span>
            <img id="lightboxImg">
            <span class="next" onclick="changeImage(1)">&#10095;</span>
    </div>

        <script>
            let currentIndex = 0;
            const images = ["img/1280px_Buen_Retiro_Park.jpg", "img/1280px_Calle_de_Alcala.jpg", "img/1280px_Congreso_de_los_Diputados.jpg", "img/1280px_Palacio_de_Comunicaciones.jpg", "img/1280px_Palacio_Real.jpg", "img/1280px_Plaza_de_Colขn.jpg"];
            const lightbox = document.getElementById("lightbox");
            const lightboxImg = document.getElementById("lightboxImg");

            function openLightbox(index) {
                currentIndex = index;
                lightboxImg.src = images[currentIndex];
                lightbox.style.display = "flex";
            }

            function closeLightbox() {
                lightbox.style.display = "none";
            }

            function changeImage(direction) {
                currentIndex = (currentIndex + direction + images.length) % images.length;
                lightboxImg.src = images[currentIndex];
            }
        </script>
    </body>
</html>

</body>
</html>