<?php

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = 'namudesahar@hotmail.co.uk';
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nFrom: $email\nPhone: $phone\n\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo 'Thank you for your message!';
    } else {
        echo 'Sorry, there was an error sending your message. Please try again later.';
    }
}
?>
In the above code, we define the email address that we want to send the form submission to in the $to variable, and then we define the email's subject and body based on the form input. We then use the mail function to send the email, and we check if the email was sent successfully or not.

Note that the mail function might not work on all servers. If you encounter any issues, you might need to use a third-party library such as PHPMailer or SwiftMailer to send the email instead.
