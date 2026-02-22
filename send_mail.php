<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "gurmeetkataria7@gmail.com";
    $subject = "New Contact Message";
   $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";


    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message!";
    }
}
?>
