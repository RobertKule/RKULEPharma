<?php
include("testConn.php");
    
if (isset($_POST['envoi'])) {
    $nom=htmlentities($_POST['nom']);
    $email=htmlentities($_POST['email']);
    $question=htmlentities($_POST['message']);
    $dat=date('Y-m-d H:i:s');
    RequetteSql("INSERT INTO questions(nom,email,question,dateajout) VALUES('$nom','$email','$question','$dat');");
    header("location:contact.php?message=\"Question envoyé avec succès\"");    
}
?>
                