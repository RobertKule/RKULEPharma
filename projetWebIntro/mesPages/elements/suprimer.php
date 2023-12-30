<?php
// Connexion à la base de données (à remplacer par vos propres informations)
try {
    //code...
    include("../connectionDb.php");
    
// Récupération de l'ID de l'élément à supprimer depuis la requête GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        echo "$id";
        if ($id != 1 ) {
            # code...
            $req=$conn->prepare("DELETE FROM utilisateurs WHERE id=$id;");
            $req->execute();  
        }
        // Suppression de l'élément dans la base de données
            header("Location:../client.php?message=\"Vous venez de supprimer un utilisateur !!!\""); // Redirection vers la page principale après la suppression
            exit();
    } else {
        echo "ID non spécifié.";
    }
    
    // Fermeture de la connexion à la base de données
    
} catch (\Throwable $th) {
    //throw $th;
}


?>