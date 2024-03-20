<?php
session_start();

// Vérifier si l'utilisateur est connecté, le rediriger vers la page de connexion s'il ne l'est pas
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login_confluence.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confluence</title>
    <link rel="Shortcut icon" type="x-icon" href="../logo.svg">
    <link rel="shortcut icon" type="image/x-icon" href="../logo.ico">
    <link rel="icon" type="image/x-icon" href="../logo.ico">
    <meta name="description" content="Déclinaisons de la charte graphique sur différents supports.">
    <meta name="author" content="Pico Design - Alessandro Ansquer Capiluppi">
    <meta name="keywords" content="Confluence, Graphéine, Stage 2023, Chartre graphique, Déclinaisons, Supports de communication, Papier à entête, Newsletter, Carte de correspondance, Carte de visite, Plaquette  de présentation, Signature mail, Bannière réseaux sociaux, Posts réseaux sociaux, Vignette vidéo, Habillage vidéo, Badge, Kakémono, Powerpoint, Fond d'écran, Communication visuelle, Design graphique,  Portfolio, Alessandro, Alessandro Ansquer, Ansquer, Alessandro Capiluppi, DNMADE, Book, Designer graphique, Conception visuelle">
    <link rel="canonical" href="https://picodesign.fr/confluence">
    <!-- Balises Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Confluence">
    <meta property="og:url" content="https://picodesign.fr/php/login_confluence.php">
    <meta property="og:description" content="Déclinaisons de la charte graphique sur différents supports.">
    <!-- Balises Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Confluence">
    <meta name="twitter:description" content="Déclinaisons de la charte graphique sur différents supports.">
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
            <li class="lien"><a href="/php/page_protégée_confluence.php">FR</a></li>
            <li class="lien"><a href="/php/page_protégée_confluence.php">IT</a></li>
        </ul>
        <div class="titre">Confluence</div>
        <img class="image" src="/images/confluence/logo.jpg"></img>
        <div class="colab">
            Collaboration avec
            <span><a href="https://www.grapheine.com">Graphéine</a> pour <a href="https://www.ucly.fr/">Confluence</a></span>
            <span>Stage 2023</span>
        </div>
    </div>

    <!-- Contenu en dessous de la ligne de flottaison -->

    <!-- logo principale en double et le reste en petit-->
    <div class="description">
        <h5>Contexte</h5>
        <h6>Pour ce travail j'ai assisté l'équipe de Graphéine en m'occupant des déclinaisons de la charte graphique sur différents supports.</h6>
        <p>Les supports demandés étaient: <br>
        <ul>
            <li>Papier à entête administratif</li>
            <li>Newsletter interne</li>
            <li>Carte de correspondance et carte de visite</li>
            <li>Plaquette de présentation</li>
            <li>Signature mail</li>
            <li>Bannière réseaux sociaux et posts réseaux sociaux</li>
            <li>Vignette et habillage vidéo</li>
            <li>Badge</li>
            <li>Kakémono</li>
            <li>Écran en interne</li>
            <li>Powerpoint</li>
            <li>Fond d’écran lors de conférences</li>
        </ul>
        </p>
    </div>
    <div class="below-fold">
        <div class="gallery_mid">
            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/papier_a_entete.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/flyer_A5.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/badge.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/carte_correspondance.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/carte_de_visite_1.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/carte_de_visite_2.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/plaquette.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/plaquette_2.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/lettre_info_1.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/lettre_info_2.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/Instagram_exemple.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/post_insta_exemple.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/kakemono_1.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/kakemono_2.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/yt.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/vignette_YT.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/powerpoint.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/fonds.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/bonus_fonds_extra.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/bonus_pins.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/confluence/signature_mail.jpg"></img>
                <div class="image-title"></div>
            </div>
        </div>

    </div>
    <!-- fin -->
    <!-- footer deconection -->
    <div class="logout"><a href="logout_cap.php">Se déconnecter</a></div>
</body>

</html>