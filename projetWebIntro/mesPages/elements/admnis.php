<?php
// Connexion à la base de données (à remplacer par vos propres informations)
try {
    //code...
    include("../connectionDb.php");
    
// Récupération de l'ID de l'élément à supprimer depuis la requête GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if ($id==$_SESSION['id']) {
            echo "<script>alert(\"Vous ne pouvez-pas effectuer cette action sur vous meme !!!!\");</script>";
        } else {
            # code...
        echo "$id"; 
        $req=$conn->prepare("UPDATE utilisateurs SET typeDeCompte=1 WHERE id=$id;");
        $req->execute();
        }
        
        // MAJ
         header("Location:../client.php?message=\"vous avez maintenant un autre administrateur !!!\""); // Redirection vers la page principale après la suppression
            exit();
    } else {
        echo "ID non spécifié.";
    }
    
    // Fermeture de la connexion à la base de données
    
} catch (\Throwable $th) {
    //throw $th;
}

?>