<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['Message'];

        $to = 'minura.adikaram@gmail.com';
        $headers = "From: " . $email;
        $txt = "You have received an email from ".$name.".\n\n".$message;

        // Use mail() function to send the email
        if(mail($to, $subject, $txt, $headers)) {
            echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        } 
        else {
            echo "Mail not sent. Please try again later.";
        }
    }
?>
