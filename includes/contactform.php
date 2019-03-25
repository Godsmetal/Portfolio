<?php

    if (isset($_POST['submit'])) {
        
        //Set user input to variables
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];
        
        //Setup email
        $mailTo = "mxs2640@g.rit.edu";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an e-mail from ".$name.".\n\n".$message;

        //Mail to self -- Note to send to gmail may need to find an alternative
        mail($mailTo, $subject, $txt, $headers);
        
        //Redirect with header info
        header("Location: ../views/contact.php?mailsent");
    }