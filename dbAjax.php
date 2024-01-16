<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $services = $_POST["services"];
    $projectType = $_POST["project_type"];
    $budget = $_POST["budget"];
    $location = $_POST["location"];
    $to = 'rsharma07feb@gmail.com';
    $subject = 'ASUMI RAWAT DESIGN Enquiry';

    $headers = "From: " . $email . "\r\n";
    $headers .= "Bcc: chetika.sethi@gmail.com \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = "<html><body>";
    $message .= 'Name: ' . htmlspecialchars($name) . '<br />';
    $message .= 'Email: ' . htmlspecialchars($email) . '<br />';
    $message .= 'Phone Number: ' . htmlspecialchars($phone) . '<br />';
    $message .= 'What You’re Looking For: ' . htmlspecialchars($services) . '<br />';
    $message .= 'Project Type: ' . htmlspecialchars($projectType) . '<br />';
    $message .= 'Budget: ' . htmlspecialchars($budget) . '<br />';
    $message .= 'Property Location: ' . htmlspecialchars($location);
    $message .= "</body></html>";

    if (mail($to, $subject, $message, $headers)) {
        echo 'success####Your query has been successfully sent. We will contact you very soon!';
    } else {
        echo 'error####Something went wrong';
    }
}

?>
