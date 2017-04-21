<?php

    if (isset($_POST['submit'])){

        $name = $_POST['name'];
        $header = "From: " . $_POST['email'];
        $subject = wordwrap($_POST['subject'], 70);
        $message = $_POST['message'];
       

        $errors = array();

        if (!empty($name)){
            $name = $_POST['name'];
        }else{
            $errors[] = 'Please enter your name';
        }

        if (!empty($email)){
            $email = $_POST['email'];
        }else{
            $errors[] = 'Please enter valid email';
        }

        if (!empty($message)){
            $message = wordwrap($_POST['message'], 70);
        }else {
            $errors[] = 'Please enter your message';
        }

        // sending mail:
        $recipient = "andrejatrajkovic999@gmail.com";

        mail($recipient, $subject, $message, $header);
        
        header("Location: index.php");

    }



