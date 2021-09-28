<?php
    if(isset($_POST['submit'])){
        // Form Data
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // To
        $recipient = "thriplebeecontact@gmail.com";

        // Email Body
        $email_content = $subject."\n\nYou have recieved an email from ".$name."(".$email.").\n\n".$message;

        // From
        $email_headers = "From: champr1313@gmail.com";

        if(mail($recipien, $subject, $email_content, $email_headers)){
            header("Location: ../index.php?mailsend=succeeded");
        }
        else{
            header("Location: ../index.php?mailsend=failed");
        }
    }
?>