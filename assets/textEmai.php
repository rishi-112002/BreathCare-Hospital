<?php
$to = "rsoniji99@gmail.com";
$subject = "Test Mail";
$message = "This is a test email.";
$headers = "From: no-reply@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully";
} else {
    echo "Failed to send email";
}
?>
