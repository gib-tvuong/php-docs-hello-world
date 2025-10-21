<?php

echo "Hello Azure!";


$to = "tvuongjr@gibraltar1.com"; // Recipient's email address
$subject = "Test Email from PHP Azure"; // Subject of the email
$message = "Hello, this is a test email sent using the PHP mail() function."; // Email body
$headers = "From: tvuongjr@gibraltar1.com"; // Sender's email address

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}