<?php
session_start();

// Vérifier si l'utilisateur est connecté, le rediriger vers la page de connexion s'il ne l'est pas
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login_cap.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cap Atlantique</title>
    <link rel="Shortcut icon" type="x-icon" href="../logo.svg">
    <link rel="shortcut icon" type="image/x-icon" href="../logo.ico">
    <link rel="icon" type="image/x-icon" href="../logo.ico">
    <meta name="description" content="Annimation pour CapAtlantique">
    <meta name="author" content="Pico Design - Alessandro Ansquer Capiluppi">
    <meta name="keywords" content="Cap Atlantique, Graphéine, Stage 2023, Animation 3D, Sel de Guérande, Logo, Graphisme, Animation, Recherches, Design, Collaboration, Portfolio, Alessandro, Alessandro Ansquer,Ansquer, Alessandro Capiluppi, DNMADE, Book, Designer graphique, Conception visuelle, Arts graphiques, Création artistique, Graphéine, Cap Atlantique, Guérande, Logo, Animation 3D">
    <link rel="canonical" href="https://picodesign.fr/CapAtlantique">
    <!-- Balises Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Cap Atlantique">
    <meta property="og:url" content="https://picodesign.fr/php/login_cap.php">
    <meta property="og:description" content="Annimation pour CapAtlantique">
    <!-- Balises Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Cap Atlantique">
    <meta name="twitter:description" content="Annimation pour CapAtlantique">
    <!-- font -->
    <link rel="stylesheet" href="../css/font/font.css">
    <!-- css -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/work/workmain.css">
    <!-- js -->
    <script src="../js/main.js" defer></script>
    <script src="../js/app.js" defer></script>
</head>

<body>

    <!-- Couverture -->
    <div class="cover">
        <ul class="menu">
            <li class="lien"><a href="../index.html">Projects</a></li>
            <li class="lien"><a href="../about.html">About</a></li>
            <li class="lien"><a href="/php/page_protégée_cap.php">FR</a></li>
            <li class="lien"><a href="/php/page_protégée_cap.php">IT</a></li>
        </ul>
        <div class="titre">Cap Atlantique</div>
        <video class="image" control="false" autoplay loop>
            <source type="video/webm" src="/images/cap/timelapse.webm" />
            <source type="video/mp4" src="/images/cap/timelapse.mp4" />
        </video>
        <div class="colab">
            Collaboration avec
            <span><a href="https://www.grapheine.com">Graphéine</a> pour <a href="https://www.cap-atlantique.fr/">Cap Atlantique</a></span>
            <span>Stage 2023</span>
        </div>
    </div>

    <!-- Contenu en dessous de la ligne de flottaison -->
    <!-- video principale en double et le reste en petit-->
    <div class="description">
        <h5>Contexte</h5>
        <h6>Pour accompagner le travail de Graphéine sur Cap Atlantique, j'ai voulu ajouter une pincée de sel avec une animation en 3D 😉</h6>
        <p>Vous trouverez l' animation principale et les recherches pour cette animation. L' animation représente le sel de Guérande se déplaçant pour former le logo (j'aurais aimé faire mieux mais mon stage touchait malheureusement à sa fin).</p>
    </div>
    <div class="below-fold">
        <div class="gallery_mid">
            <div class="double-container">
                <video controls autoplay loop muted class="gallery-image">
                    <source type="video/webm" src="/images/cap/Final.webm" />
                    <source type="video/mp4" src="/images/cap/Final.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <img class="gallery-image" src="/images/cap/logo_reference.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/cap/extrait_final.jpg"></img>
                <div class="image-title"></div>
            </div>


            <div class="double-container">
                <video controls autoplay="false" loop muted class="gallery-image">
                    <source type="video/webm" src="/images/cap/v1.webm" />
                    <source type="video/mp4" src="/images/cap/v1.mp4" />
                </video>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/cap/extrait_v1.jpg"></img>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <img class="gallery-image" src="/images/cap/extrait_v1_2.jpg"></img>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <img class="gallery-image" src="/images/cap/extrait_v2.jpg"></img>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <img class="gallery-image" src="/images/cap/test_abtrait.jpg"></img>
                <div class="image-title"></div>
            </div>
        </div>

    </div>
    <!-- fin -->
    <!-- footer deconection -->
    <div class="logout"><a href="logout_cap.php">Se déconnecter</a></div>
</body>

</html>