<?php

if (isset($_POST['submit'])) {
    $name = $_POST['fname'];
    $surname = $_POST['lname'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $mailTo = "amanda.heryprieto@etu.unilim.fr";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name." ".$surname.".\n\n".$message;

    mail($mailTo, $name, $txt, $headers);

    header("Location: index.php?MessageSent");
}

?>