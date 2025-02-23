<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "info@forestmind.ee"; // Asenda oma e-posti aadressiga
    $subject = "Kontaktivorm: " . $name;
    $body = "Saaja: $name\nE-post: $email\nSõnum:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Sõnum saadetud edukalt!";
    } else {
        echo "Viga sõnumi saatmisel.";
    }
}
?>
