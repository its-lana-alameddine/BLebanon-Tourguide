<?php
    if (isset($_POST['submit'])) {
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        $myMail = "BLebanonn@hotmail.com";
        $header = "From: " . $email;
        $message2 = "You have received a message from: " . $email . ". \n\n" . $message;

        //1. E-mail your sending it to
        //2. Subject
        //3. the message
        mail($myMail, "", $message2, $header);
        header("Location: touristguide project.php?emailsent");
    }
?>