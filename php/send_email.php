<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "shushital_99@hotmail.com";
    $headers = "From: $email";
    $email_body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>