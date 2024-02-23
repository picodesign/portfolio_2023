<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera i dati dal modulo
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Indirizzo email del destinatario
    $recipient = 'hello.picodesign@gmail.com';

    // Oggetto dell'email
    $subject = '✨Nuovo messaggio dal sito✨';

    // Contenuto dell'email
    $content = "Nome: $name\n";
    $content .= "Email: $email\n";
    $content .= "Messaggio: $message\n";

    // Intestazioni dell'email
    $headers = "From: $email\r\n"; // L'indirizzo email del mittente è quello fornito dall'utente
    $headers .= "Reply-To: hello.picodesign@gmail.com\r\n"; // L'indirizzo email di risposta è quello di hello.picodesign@gmail.com

    // Invia l'email
    if (mail($recipient, $subject, $content, $headers)) {
        // Visualizza una conferma
        echo '<script>alert("Wow! Il tuo messaggio è stato inviato con successo.");</script>';

        // Invia una risposta automatica
        $autoResponse = "Ciao $name,\n\n";
        $autoResponse .= "Ho ricevuto il tuo messaggio e ti risponderò al più presto possibile.\n\n";
        $autoResponse .= "Cordiali saluti,\nAlessandro";
        mail($email, "Risposta automatica - Il tuo messaggio è stato ricevuto", $autoResponse);

        // Reindirizzamento alla pagina di origine
        echo '<script>window.location.href = document.referrer;</script>';
    } else {
        echo '<script>alert("Si è verificato un errore durante l\'invio del messaggio.");</script>';
    }
}
?>
