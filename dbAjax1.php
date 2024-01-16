<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["name"];
    $lastName = $_POST["surname"];
    $email = $_POST["email"];
    $enquiry = $_POST["enquiry"];
    $to = 'rsharma07feb@gmail.com';
    $subject = 'ASUMI RAWAT DESIGN Enquiry';

    $headers = "From: " . $email . "\r\n";
    $headers .= "Bcc: chetika.sethi@gmail.com \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = "<html><body>";
    $message .= 'First Name: ' . htmlspecialchars($firstName) . '<br />';
    $message .= 'Last Name: ' . htmlspecialchars($lastName) . '<br />';
    $message .= 'Email: ' . htmlspecialchars($email) . '<br />';
    $message .= 'Message: ' . htmlspecialchars($enquiry);
    $message .= "</body></html>";

    if (mail($to, $subject, $message, $headers)) {
        echo 'success####Your query has been successfully sent. We will contact you very soon!';
    } else {
        echo 'error####Something went wrong';
    }
}

?>
