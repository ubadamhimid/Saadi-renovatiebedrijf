<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@saadirenovatiebedrijf.nl';
    $mail->Password   = 'Voetbal10!';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    $salutation      = $_POST['salutation'];
    $lastName        = $_POST['lastName'];
    $email           = $_POST['email'];
    $phone           = $_POST['phone'];
    $preferredDate   = $_POST['preferredDate'];
    $preferredTime   = $_POST['preferredTime'];
    $spaceDetails    = $_POST['spaceDetails'];
    $termsAgreement  = isset($_POST['terms']) ? 'Ja' : 'Nee';

    $mail->setFrom('info@saadirenovatiebedrijf.nl', $lastName); // Verzender
    $mail->addAddress('info@saadirenovatiebedrijf.nl', $lastName); // Ontvanger

    $mail->isHTML(true);
    $mail->Subject = 'Afspraak Aanvraag: ' . $lastName;

    $mail->Body = "
        <p><strong>Aanhef: </strong> $salutation</p>
        <p><strong>Achternaam: </strong> $lastName</p>
        <p><strong>E-mailadres: </strong> $email</p>
        <p><strong>Telefoonnummer: </strong> $phone</p>
        <p><strong>Voorkeurdatum: </strong> $preferredDate</p>
        <p><strong>Voorkeurstijd: </strong> $preferredTime</p>
        <p><strong>Afmetingen en eventuele voorkeuren en ideeën: </strong> $spaceDetails</p>
        <p><strong>Voorwaarden: </strong> $termsAgreement</p>
    ";

    $mail->send();
    header('Location: index.php?status=success');
} catch (Exception $e) {
    header('Location: index.php?status=error');
    exit;
}
