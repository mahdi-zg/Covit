<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Configuration pour l'envoi d'e-mail
    $to = "mohamedzgolli480@gmail.com"; // Remplacez par l'adresse e-mail où vous souhaitez recevoir les messages
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi de l'e-mail
    mail($to, $subject, $message, $headers);

    // Réponse pour la requête AJAX (facultatif)
    echo "Message sent successfully!";
}
?>
