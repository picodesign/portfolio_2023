<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Adresse e-mail de réception
    $recipient = 'hello.picodesign@gmail.com, alessandro@picodesign.fr';

    // Sujet de l'e-mail
    $subject = '✨Nouveau message site✨';

    // Contenu de l'e-mail
    $content = "Nom: $name\n";
    $content .= "Email: $email\n";
    $content .= "Message: $message\n";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\n"; // L'adresse e-mail de l'expéditeur est celle fournie par l'utilisateur
    $headers .= "Reply-To: hello.picodesign@gmail.com\r\n"; // L'adresse e-mail de réponse est celle de hello.picodesign@gmail.com

    // Envoyer l'e-mail
    if (mail($recipient, $subject, $content, $headers)) {
        // Afficher une confirmation
        echo '<script>alert("WAA Super! Votre message a été envoyé avec succès.");</script>';

        // Envoyer une réponse automatique
        $autoResponse = "Bonjour $name,\n\n";
        $autoResponse .= "J'ai bien reçu votre message et je vous répondrai dans les plus brefs délais.\n\n";
        $autoResponse .= "Cordialement,\nAlessandro";
        mail($email, "Réponse automatique - Votre message a été reçu", $autoResponse);

        // Redirection vers la page d'origine
        echo '<script>window.location.href = document.referrer;</script>';
    } else {
        echo '<script>alert("Une erreur s\'est produite lors de l\'envoi du message.");</script>';
    }
}
?>
