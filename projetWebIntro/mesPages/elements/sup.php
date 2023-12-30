<?php
// Connexion à la base de données (à remplacer par vos propres informations)
try {
    //code...
    include("../connectionDb.php");
    
// Récupération de l'ID de l'élément à supprimer depuis la requête GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        echo "$id"; 
        $req=$conn->prepare("DELETE FROM reponses WHERE id=$id;");
        $req->execute();  
        // Suppression de l'élément dans la base de données
            header("Location:../faq.php?message=\"Suppression réussie !!!\""); // Redirection vers la page principale après la suppression
            exit();
    } else {
        echo "ID non spécifié.";
    }
    
    // Fermeture de la connexion à la base de données
    
} catch (\Throwable $th) {
    //throw $th;
}


?>