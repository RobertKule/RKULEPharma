<?php 
    include("testConn.php");
    entete("blog",$_SESSION['nom']);
    $emailUser=$_SESSION['email'];
    
?>
<main class="container-fluid mx-auto">
    <!-- je saute une ligne au dessus pour bien afficher le contenu -->
    <!-- <div class="row">
        <div class="my-sm-4">
            &emsp;
        </div>
         code visible uniquement sur les petits écran 
        <div class="my-5 d-block d-sm-none" >
            &emsp;
        </div>
    </div> -->

    <div class="row mx-auto">
      <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
            try{
                include("connectionDb.php");
                // preparer la requette de lecture 
                $req=$conn->prepare("SELECT * FROM article WHERE id=$id;");
                $req->execute();
                $datat=$req->fetchAll(PDO::FETCH_ASSOC);
                foreach ($datat as $row) {
                    $im=$row['fileUrl1'];
                    $nom=$row['nom'];
                    $descrit=$row['descrit'];
                    $dateaj=$row['dateAjout'];
                    $titre=$row['nom'];
                    $auteur=$row['auteur'];
                        echo "
                        <div style=\"max-height: 95vh; \" class=\"row col-md-10 mx-auto taillefix shadow-lg p-0\">
                            <div class=\"col-md-12 p-2 text-center bg-body \">
                                $nom
                            </div>
                            <div class=\"col-md-5 p-2\">
                                <img style=\"max-height: 50vh;width:100vw;\" src=\"$im\" alt=\"\" class=\"img-fluid img-thumbnail \">
                            </div>
                            <div class=\"col-md-7 p-2\">
                                <div class=\"col-md-12 \">
                                    <h5>desscription</h5>
                                    $descrit
                                </div>
                                <div class=\"d-flex justify-content-between m-3 px-2\">
                                    <div style=\"font-size:1em;\">
                                        <span class=\"fw-bold\">$auteur</span>
                                    </div>
                                    <div style=\"font-size:1em;>
                                        <img src=\"../images/date.png\"  class=\" img-fluid mx-1\" alt=\"\">$dateaj
                                    </div>
                                    </div>
                            </div>
                            <div class=\"col-md-4\"><a href=\"blog.php\" class=\"btn btn-outline-primary\">Retour au blog</a></div>
                        
                            </div>
                            <div class=\"my-2 d-none d-sm-block d-md-none\">
                            &emsp;
                        </div>
                        
                    </div>";
                }
            }catch(PDOException $e){
                echo $e->getMessage();

            }
      }else {
        header("location:blog.php?message=\"Aucune action efectuée !!!\"");
      } 
?>
</div>
    </main>
<!-- je saute une ligne au dessus pour bien afficher le contenu -->
<div class="row">
        <div class="my-5">
            &emsp;
        </div>
        <!-- code visible uniquement sur les petits écran -->
        <div class="my-5 d-block d-sm-none" >
           &emsp;
        </div><div class="my-5 d-block d-sm-none" >
           &emsp;
        </div>
</div>
    

</body>
</html>