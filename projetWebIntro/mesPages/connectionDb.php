<?php 
    // ouverture de la connexion à la base de données
    $conn=new PDO('mysql:host=localhost;dbname=pharmadb','root','');
    // parametrage des exceptions et erreurs à la connection
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
?>