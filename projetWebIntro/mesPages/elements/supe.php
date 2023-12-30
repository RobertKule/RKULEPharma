<!-- fichier de suppression de l'article -->
<?php
    try {
        include("../connectionDb.php");
        
    // Récupération de l'ID de l'élément à supprimer depuis la requête GET
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            echo "$id"; 
            // Suppression de l'élément dans la base de données
            $req=$conn->prepare("DELETE FROM article WHERE id=$id;");
            $req->execute();
            header("Location:../blog.php?message=\"blog supprimé avec succès !!!\""); // Redirection vers la page principale après la suppression
                exit();
        } else {
            echo "ID non spécifié.";
        }
        
        // Fermeture de la connexion à la base de données
        
    } catch (\Throwable $th) {
        //throw $th;
    }


?>