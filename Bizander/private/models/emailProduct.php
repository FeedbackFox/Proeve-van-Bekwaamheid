<?php 
$message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != ''){

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        # Recieve user input.
        $subject    = $_POST['subject']; 
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $message    = $_POST['message'];

        # Send email
        $to             = "Idias@bjornemmaneel.nl";

        $body           = "From: " . $name . ", Email: " . $email . "\r\n" . 
                          "Message: \r\n" . $message;

        $sent           = mail($to, $subject, $body);

        header('location: ../../public/product-overview');
        $message_sent = true;
        $valid_class_name = "valid-form";
    } else {
        $invalid_class_name = "form-invalid";
    }
    
}