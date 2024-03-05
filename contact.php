<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    
    $to = "rlasithdilshan@gmail.com";
    $subject = "New Contact Form Submission";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $to\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n\n";
    $mailBody .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $mailBody, $headers);
}
?>
