<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name']; 
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "example@gmail.com";//Your Email address might not work for gmail
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: ContactUs.php?mailsend");
}
?>