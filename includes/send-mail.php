<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verzamel de formuliergegevens
    $voornaam = htmlspecialchars(trim($_POST['voornaam']));
    $achternaam = htmlspecialchars(trim($_POST['achternaam']));
    $email = htmlspecialchars(trim($_POST['email']));
    $telefoon = htmlspecialchars(trim($_POST['telefoon']));
    $bericht = htmlspecialchars(trim($_POST['bericht']));

    // Ontvangst e-mailadres
    $to = "milanoss2007@gmail.com";
    $subject = "Nieuw bericht van contactformulier milanmegens.nl";

    // Inhoud van de e-mail
    $body = "Voornaam: $voornaam\n";
    $body .= "Achternaam: $achternaam\n";
    $body .= "E-mail: $email\n";
    if (!empty($telefoon)) {
        $body .= "Telefoon nummer: $telefoon\n\n";
    }
    $body .= "Bericht:\n$bericht\n";

    // Headers
    $headers = "From: $email\r\n";

    // Verzend de e-mail naar de site eigenaar
    $mailSent = mail($to, $subject, $body, $headers);

    // Verzend de bevestigingsmail naar de gebruiker
    $confirmation_subject = "Bevestiging van je bericht";
    $confirmation_body = "Beste $voornaam $achternaam,\n\n";
    $confirmation_body .= "Ik heb je bericht succesvol ontvangen! Ik zal zo snel mogelijk contact met je opnemen.\n\n";
    $confirmation_body .= "Met vriendelijke groet,\n\n";
    $confirmation_body .= "Milan Megens\n\n";
    $confirmation_headers = "From: no-reply@milanmegens.nl\r\n";

    $confirmationMailSent = mail($email, $confirmation_subject, $confirmation_body, $confirmation_headers);

    if ($mailSent && $confirmationMailSent) {
        header("Location: ../start.php?status=success#contact");
        exit();
    } else {
        header("Location: ../start.php?status=error#contact");
        exit();
    }
} else {
    header("Location: ../start.php?status=invalid#contact");
    exit();
}
?>