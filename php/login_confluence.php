<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté, le rediriger vers une autre page s'il l'est
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("location: page_protégée_confluence.php");
    exit;
}

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier les identifiants de connexion
    $utilisateur = "DSAA"; // Nom d'utilisateur
    $motdepasse = "AccesAlapage@"; // Mot de passe

    if ($_POST['username'] === $utilisateur && $_POST['password'] === $motdepasse) {
        // Identifiants corrects, définir la variable de session et rediriger vers la page protégée
        $_SESSION['loggedin'] = true;
        header("location: page_protégée_confluence.php");
        exit;
    } else {
        $error = "Identifiants incorrects";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="Shortcut icon" type="x-icon" href="../logo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login.css">
    <!-- font -->
    <link rel="stylesheet" href="../css/font/font.css">
</head>

<body>
    <h3>Connexion</h3>
    <div class="message"><h6>Page protégée car projet confidentiel.</h6></div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username"><h5>Nom d'utilisateur: </h5> </label>
        <h6><input type="text" id="username" name="username"></h6>
        <label for="password"> <h5>Mot de passe: </h5></label>
        <h6><input type="password" id="password" name="password"></h6>
        <h6><input type="submit" value="Se connecter"></h6>
    </form>
    <h6><?php if (isset($error)) echo "<p>$error</p>"; ?></h6>
</body>

</html>