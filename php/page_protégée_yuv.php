<?php
session_start();

// Vérifier si l'utilisateur est connecté, le rediriger vers la page de connexion s'il ne l'est pas
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login_yuv.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yuv Beauty</title>
    <link rel="Shortcut icon" type="x-icon" href="../logo.svg">
    <link rel="shortcut icon" type="image/x-icon" href="../logo.ico">
    <link rel="icon" type="image/x-icon" href="../logo.ico">
    <meta name="description" content="Pour compléter la charte graphique conçue par Graphéine, j'ai été chargé d'approfondir quelques idées pour les animations de la marque.">
    <meta name="author" content="Pico Design - Alessandro Ansquer Capiluppi">
    <meta name="keywords" content="Yuv Beauty, Graphéine, Stage 2023, Animation, Motion 3D, Motion texte, Pictos, Coloration professionnelle, Innovant, Cheveux, Nuances, Cartouches d'aluminium, Économie circulaire, Design, Portfolio, Alessandro, Alessandro Ansquer, Ansquer, Alessandro Capiluppi, DNMADE, Book, Designer graphique, Conception visuelle">
    <link rel="canonical" href="https://picodesign.fr/yuv">
    <!-- Balises Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Yuv Beauty">
    <meta property="og:url" content="https://picodesign.fr/php/page_protégée_yuv.html">
    <meta property="og:description" content="Pour compléter la charte graphique conçue par Graphéine, j'ai été chargé d'approfondir quelques idées pour les animations de la marque.">
    <!-- Balises Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Yuv Beauty">
    <meta name="twitter:description" content="Pour compléter la charte graphique conçue par Graphéine, j'ai été chargé d'approfondir quelques idées pour les animations de la marque.">
    <!-- font -->
    <link rel="stylesheet" href="../css/font/font.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/work/workmain.css">
    <!-- JavaScript -->
    <script src="../js/main.js" defer></script>
    <script src="../js/app.js" defer></script>
</head>

<body>

    <!-- Couverture -->
    <div class="cover">
        <ul class="menu">
            <li class="lien"><a href="../index.html">Projects</a></li>
            <li class="lien"><a href="../about.html">About</a></li>
            <li class="lien"><a href="/php/page_protégée_yuv.php">FR</a></li>
            <li class="lien"><a href="/php/page_protégée_yuv.php">IT</a></li>
        </ul>
        <div class="titre">Yuv beauty</div>
        <img class="image" src="/images/yuv/front.jpg"></img>
        <div class="colab">
            Collaboration avec
            <span><a href="https://www.grapheine.com">Graphéine</a> pour <a href="https://www.yuv.co">Yuv</a></span>
            <span>Stage 2023</span>
        </div>
    </div>

    <!-- Contenu en dessous de la ligne de flottaison -->
    <!-- partie 1 - intro contexte et existant-->
    <div class="description">
        <h5>Contexte</h5>
        <h6>Pour compléter la charte graphique conçue par Graphéine, j'ai été chargé d'approfondir quelques idées pour les animations de la marque.</h6>
        <p>Yuv propose une solution innovante pour la coloration professionnelle des cheveux. Son système numérique permet de formuler une multitude de nuances adaptées aux besoins de chaque client.</p>
        <p>Contrairement aux tubes jetables traditionnels, les cartouches d'aluminium de Yuv sont conçues dans une logique d'économie circulaire : elles sont vidées puis rechargées, éliminant ainsi les déchets plastiques à usage unique.</p>
    </div>
    <div class="below-fold">
        <div class="gallery_mid2">
            <div class="image-container">
                <img class="gallery-image" src="/images/yuv/chargement_machine.jpg"></img>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <img class="gallery-image" src="/images/yuv/cartouches.jpg"></img>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <img class="gallery-image" src="/images/yuv/app_existant.jpg"></img>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <img class="gallery-image" src="/images/yuv/reference_motionexistant.jpg"></img>
                <div class="image-title"></div>
            </div>
        </div>

    </div>
    <!-- fin -->
    <!-- partie 2 Debut Motion -->
    <div class="description">
        <h5>Motion 3D</h5>
        <h6>J'ai débuté par la création d'une vidéo promotionnelle visant à lier l'utilisation du Motion existant avec la machine.</h6>
        <p>J'ai décidé d'associer les points aux cartouches pour mon animation. En positionnant la caméra au-dessus de la machine dans Cinema 4D, j'ai obtenu ce résultat minimaliste. Ensuite, grâce à une transition en fondu, j'ai pu reproduire le mouvement existant dans After Effects.</p>
    </div>

    <!-- video et images -->
    <div class="below-fold">
        <div class="gallery2">
            <div class="double-container">
                <video controls loop muted class="gallery-image">
                    <source type="video/webm" src="/images/yuv/Final_3D.webm" />
                    <source type="video/mp4" src="/images/yuv/Final_3D.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <img class="gallery-image" src="/images/yuv/plan_intro.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/yuv/plan_cartouches.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/yuv/plan_macro.jpg"></img>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <img class="gallery-image" src="/images/yuv/plan_haut.jpg"></img>
                <div class="image-title"></div>
            </div>
        </div>
    </div>
    <!-- fin -->
    <!-- partie 3  Ae motion-->
    <div class="description">
        <h5>Motion texte</h5>
        <h6>J'ai exploré divers concepts d'animation en suivant la charte graphique de Graphéine.</h6>
        <p>Avec les retours de l'équipe, j'ai progressivement affiné ce motion mettant en valeur les avantages de la marque.</p>
        <p>Un cylindre est utilisé dans l'animation pour symboliser la machine et les cartouches (sous forme de texte), soulignant ainsi les atouts de la marque.</p>
    </div>
    <!-- video -->
    <div class="below-fold">
        <div class="gallery_mid2">
            <div class="double-container">
                <video controls loop muted class="gallery-image">
                    <source type="video/webm" src="/images/yuv/Final_Ae.webm" />
                    <source type="video/mp4" src="/images/yuv/Final_Ae.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <video autoplay loop muted class="gallery-image">
                    <source type="video/webm" src="/images/yuv/concept_gradient_hair.webm" />
                    <source type="video/mp4" src="/images/yuv/concept_gradient_hair.mp4" />
                </video>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <video autoplay loop muted class="gallery-image">
                    <source type="video/webm" src="/images/yuv/concept_draw_logo.webm" />
                    <source type="video/mp4" src="/images/yuv/concept_draw_logo.mp4" />
                </video>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <video autoplay loop muted class="gallery-image">
                    <source type="video/webm" src="/images/yuv/concept_draw_color.webm" />
                    <source type="video/mp4" src="/images/yuv/concept_draw_color.mp4" />
                </video>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <video autoplay loop muted class="gallery-image">
                    <source type="video/webm" src="/images/yuv/concept_fill.webm" />
                    <source type="video/mp4" src="/images/yuv/concept_fill.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <video autoplay loop muted class="gallery-image">
                    <source type="video/webm" src="/images/yuv/concept_doted_white.webm" />
                    <source type="video/mp4" src="/images/yuv/concept_doted_white.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <video autoplay loop muted class="gallery-image">
                    <source type="video/webm" src="/images/yuv/concept_doted_black.webm" />
                    <source type="video/mp4" src="/images/yuv/concept_doted_black.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
        </div>
    </div>
    <!-- fin -->
    <!-- Pictos -->
    <div class="description">
        <h5>Bonus - Pictos</h5>
        <h6>Vers la fin de mon stage, l'équipe de Graphéine envisageait de produire une série de pictogrammes pour servir aux futurs modes d'emploi de la machine.</h6>
        <p>Disposant d'un modèle 3D assez fidèle de la machine pour mes animations, j'ai initié les vues isométriques pour l'illustratrice de l'équipe.</p>
    </div>
    <div class="below-fold">
        <div class="gallery_mid">
            <div class="image-container">
                <img class="gallery-image" src="/images/yuv/3D_object.jpg"></img>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <img class="gallery-image" src="/images/yuv/pictos_base.jpg"></img>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <img class="gallery-image" src="/images/yuv/asset_pack_yuv.jpg"></img>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <img class="gallery-image" src="/images/yuv/cartouches_render.jpg"></img>
                <div class="image-title"></div>
            </div>
        </div>

    </div>
    <!-- fin -->
    <!-- footer deconection -->
    <div class="logout"><a href="logout_yuv.php">Se déconnecter</a></div>
</body>

</html>