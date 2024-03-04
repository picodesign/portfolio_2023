<?php
session_start();

// Vérifier si l'utilisateur est connecté, le rediriger vers la page de connexion s'il ne l'est pas
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("location: login_yuv.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="Shortcut icon" type="x-icon" href="../logo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/work/yuv.css">
    <script src="/js/main.js" defer></script>
    <script src="/js/app.js" defer></script>
    <title>Yuv</title>
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
        <div class="titre">Yuv</div>
        <video class="image" control="false" autoplay="autoplay" loop="true">
            <source type="video/webm" src="/images/yuv/timelapse.webm" />
            <source type="video/mp4" src="/images/yuv/timelapse.mp4" />
        </video>
        <div class="colab">
            Collaboration avec
            <span><a href="https://www.grapheine.com">Graphéine</a> pour <a href="https://www.yuv.co">Yuv</a></span>
            <span>Stage 2023</span>
        </div>
    </div>

    <!-- Contenu en dessous de la ligne de flottaison -->
    <div class="description">
        <h5>Contexte</h5>
        <p>Pour completer la charte graphique designer par Graphéine, j'ai eté charger de devlopper plus en approfondi quelques idée pour les motion de la marque.</p>
        <p>Yuv propose une solution innovante pour la coloration professionnelle des cheveux. Grâce à son système numérique ca permet de formuler une infinité de nuances adaptées aux besoins de chaque client.</p>
        <p> Contrairement aux tubes jetables traditionnels, les cartouches d'aluminium Yuv sont conçues dans une logique d'économie circulaire: elles sont vidées puis rechargées de nouveau, éliminant ainsi les déchets plastiques à usage unique.</p>
    </div>
    <div class="below-fold">



        <!-- Galerie d'images -->
        <div class="gallery">
            <div class="double-container">
                <div id="player"></div>
                <!-- <script src="https://www.youtube.com/iframe_api"></script>
                <script>
                    let player;

                    function onYouTubeIframeAPIReady() {
                        player = new YT.Player('player', {
                            height: '600px',
                            videoId: 'NLuGfE-3aaM',
                            playerVars: {
                                'autoplay': 1,
                                'controls': 1,
                                'rel': 0,
                                'modestbranding': 1,
                                'loop': 1,
                                'fs': 1,
                                'iv_load_policy': 3,
                                'start': 105,
                                'enablejsapi': 1,
                                'origin': window.location.origin
                            },
                            events: {
                                'onReady': onPlayerReady
                            }
                        });
                    }

                    function onPlayerReady(event) {
                        // volume range
                        // player.setVolume(20);
                        player.setVolume(2);
                    }
                </script> -->
            </div>
            <div class="image-container">
                <video autoplay loop muted class="gallery-image">
                    <source type="video/webm" src="/images/vm/backstage_timelapse.webm" />
                    <source type="video/mp4" src="/images/vm/backstage_timelapse.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <video autoplay loop muted class="gallery-image">
                    <source type="video/webm" src="/images/vm/backstage_timelapse_2.webm" />
                    <source type="video/mp4" src="/images/vm/backstage_timelapse_2.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <video autoplay loop muted class="gallery-image">
                    <source type="video/webm" src="/images/vm/backstage_timelapse_3.webm" />
                    <source type="video/mp4" src="/images/vm/backstage_timelapse_3.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                    <img class="gallery-image" src="/images/vm/projection.jpg"></img>
                    <div class="image-title"></div>
            </div>

            </div>
        </div>
    <a href="logout_yuv.php">Se déconnecter</a>

</body>

</html>