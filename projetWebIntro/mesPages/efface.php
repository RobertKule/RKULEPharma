<?php
// Connexion à la base de données (à remplacer par vos propres informations)
include("testConn.php");
$nomUser=$_SESSION['nom'];
entete("actions sur les questions",$nomUser);
menu(0);
    
try {
    //code...
    include("./connectionDb.php");
    
// Récupération de l'ID de l'élément à supprimer depuis la requête GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        echo "$id"; 
        $req=$conn->prepare("DELETE FROM questions WHERE id=$id;");
        $req->execute();  
        // Suppression de l'élément dans la base de données
            header("Location:./contact.php?message=\"Suppression de la question réussi\""); // Redirection vers la page principale après la suppression
            exit();
    } 
    elseif (isset($_GET['idrep'])) {
        $id=$_GET['idrep'];  
        // preparer la requette de lecture 
        $req=$conn->prepare("SELECT * FROM questions WHERE id=$id;");
        $req->execute();
        $datat=$req->fetchAll(PDO::FETCH_ASSOC);        
        foreach ($datat as $row) {
            $question=$row['question'];
            // $exp=$row['auteur'];
            // $reped=$_SESSION['nom'];
            echo "<div class=\"col-md-6  col-sm-12 mx-auto\">
                <div>
                <form action=\"efface.php\" method=\"post\" class=\"form-horizontal bg-light p-3\">
                <h3 class=\"text-center\">Une nouvelle réponse </h3>
                <div class=\"my-2\">
                    <label for=\"question \" class=\"text-primary fs-4\">Entrez une question </label>
                    <input type=\"texte\" name=\"question\" required id=\"question\"  maxlength=\"100\" class=\"user-select-all form-control overflow-auto\" value=\"$question\">
                </div>
                <div class=\"my-2\">
                    <label for=\"reponse\" class=\"text-primary fs-4\">Entrez une réponse </label>
                    <textarea name=\"reponse\" required id=\"reponse\"  class=\"user-select-all form-control col-6 m-2 p-2\" placeholder=\"Entrez ici votre réponse\"></textarea>
                </div>
                <input type=\"submit\" name=\"btenvreponse\" value=\"Envoyer la reponse\" class=\"btn btn-primary \">
            </form> 
            </div>
        ";
            
    }
    }
    else {
        echo "<div class=\"col-md-4 col-sm-12\">
        
                <div>
                <form action=\"efface.php\" method=\"post\" class=\"form-horizontal bg-light p-3\">
                <h3 class=\"text-center\">Une nouvelle réponse </h3>
                <div class=\"my-2\">
                    <label for=\"question \" class=\"text-primary fs-4\">Entrez une question </label>
                    <textarea name=\"question\" required id=\"question\"  maxlength=\"100\" class=\"user-select-all form-control col-6 m-2 p-2\" placeholder=\"Entrez ici la question posée\"></textarea>
                </div>
                <div class=\"my-2\">
                    <label for=\"reponse\" class=\"text-primary fs-4\">Entrez une réponse </label>
                    <textarea name=\"reponse\" required id=\"reponse\"  class=\"user-select-all form-control col-6 m-2 p-2\" placeholder=\"Entrez ici votre réponse\"></textarea>
                </div>
                <input type=\"submit\" name=\"btenvreponse\" value=\"Envoyer la reponse\" class=\"btn btn-primary \">
            </form> 
            </div>
           
                ";
                
            }
            if (isset($_POST['btenvreponse'])) {
                # code...
                $que=htmlspecialchars($_POST['question']);
                $rep=htmlspecialchars($_POST['reponse']);
                $dat=date('Y-m-d H:i:s');
                RequetteSql("INSERT INTO reponses(question,reponse,dateajout,reped) VALUES('$que','$rep','$dat','$reped');");
                header('location:contact.php?message="réponse envoyée avec succès"');
            } 
    // Fermeture de la connexion à la base de données
    
} catch (\Throwable $th) {
    //throw $th;
}


?>