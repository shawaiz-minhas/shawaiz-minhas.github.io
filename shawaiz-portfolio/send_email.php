<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Recipient email address (change this to your email)
    $to = 'shawaizminhas456@gmail.com';
    
    // Subject of the email
    $subject = 'New Message from Contact Form';
    
    // Construct the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message\n";
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send the email using mail() function
    if (mail($to, $subject, $email_message, $headers)) {
        echo '<script>alert("Your message has been sent."); window.location.replace("index.html");</script>';
    } else {
        echo '<script>alert("Sorry, there was an error sending your message."); window.location.replace("index.html");</script>';
    }
}
?>
