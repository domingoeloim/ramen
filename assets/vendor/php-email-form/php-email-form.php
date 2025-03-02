<?php

// Le code pour envoyer un email via la fonction PHP mail()
$receiving_email_address = 'eloimmaeder@gmail.com'; // Changez ceci avec votre propre adresse email

// Vérifiez si le formulaire a été soumis
if (isset($_POST['email']) && !empty($_POST['email'])) {
    // Récupérez l'adresse email de l'utilisateur
    $user_email = $_POST['email'];

    // Définissez le sujet de l'email
    $subject = "Nouvel abonnement au Bulletin de nouvelles";

    // Message à envoyer
    $message = "Un utilisateur s'est abonné à votre bulletin de nouvelles. \n\n";
    $message .= "Email : " . $user_email;

    // En-têtes de l'email (pour éviter d'être marqué comme spam)
    $headers = "From: no-reply@votre-domaine.com\r\n";
    $headers .= "Reply-To: " . $user_email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Utilisez la fonction mail() pour envoyer l'email
    if (mail($receiving_email_address, $subject, $message, $headers)) {
        // Si l'email est envoyé avec succès
        echo 'Votre demande d\'abonnement a été envoyée. Merci !';
    } else {
        // Si l'email n'a pas pu être envoyé
        echo 'Une erreur s\'est produite lors de l\'envoi de votre abonnement. Veuillez réessayer.';
    }
} else {
    echo 'Veuillez entrer une adresse e-mail valide.';
}
?>
