<?php
    session_start();
    if (empty($_SESSION["nom"]) OR $_SESSION["nom"]=="" OR $_SESSION["nom"]==null) {
        header('location: LaPage.php');
        exit();
    }
    include_once("mesfonction.php");
    $nomUser=$_SESSION['nom'];


    
    ?>