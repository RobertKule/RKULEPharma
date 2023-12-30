
<?php 
    include("mesfonction.php");
    entete("RKULEPharma.com","");
    menu(0);
?>
<main class="row">
        
    <!-- le contenu -->
       <div class="col-12 py-5 text-light text-dark text-center shadow-lg m-auto  rounded-5">
        <div class="py-5 col-12">  
        <span class="col-12 pb-2 fs-2 text-center">Bienvenue sur le site de RKULEPharma</span><br>
        <span>Veuillez vous connecter pour en savoir plus sur nous</span>
        <a href="login.php?message='Bienvenue à la page de connexion au site'">
            <div class="btn btn-primary p-2">Connectez-vous</div>
        </a>
        </div>
        <div class="row">
            <div class="fs-3 text-center border-top-0 border border-dark border-5">nos derniers articles</div>
        <div class="col d-flex flex-row mx-auto align-items-center justify-content-center">
        <?php 
      MAJuser("article");
            try{
                include("connectionDb.php");
                // preparer la requette de lecture 
                
                    $req=$conn->prepare("SELECT DISTINCT * FROM article ORDER BY dateAjout DESC LIMIT 0,3");
                    $req->execute();
                    $datat=$req->fetchAll(PDO::FETCH_ASSOC);
                
                foreach ($datat as $row) {
                    $id=$row['id'];
                    $nom=$row['nom'];
                    $im=$row['fileUrl1'];
                    $pdf=$row['fileUrl2'];
                    $description=$row['descrit'];
                    $date=$row['dateAjout'];
                    $auteur=$row['auteur'];
                    
                    echo "
                        <div \" class=\"card col-sm-3 p-2\" >
                        <div class=\"p-0 bg-light\" style=\"box-shadow:0px 0px 20px rgba(0,0,0,0.8);\">
                        <div class=\"card-header  p-0\">
                            <img src=\"$im\" alt=\"\" style=\"height:200px;width:100%;\" class=\"img-fluid img-thumbnail col-12\">
                        </div>
                        <div class=\"card-body col\">
                        <div class=\"col bg-light fw-bold fs-8 text-start text-secondary\">$nom</div>
                        <span class=\"d-inline-block text-truncate \" style=\"max-width: 100%;\">
                            $description
                        </span>

                        <a href=\"voirimg.php?id={$id}\"  class=\"btn btn-sm btn-link mx-auto p-2\">en savoir plus sur l'article</a>
                        </div>
                        <div class=\"card-footer  p-0\">
                            <div class=\"d-flex justify-content-between px-2\">
                                <div style=\"font-size:0.6em;\">
                                    <span class=\"fw-bold\">$auteur</span>
                                </div>
                                <div style=\"font-size:0.6em;>
                                    <img src=\"../images/date.png\"  class=\" img-fluid mx-1\" alt=\"\">$date
                                </div>
                            </div>
                            ";
                            
                        echo "</div>
                        </div>
                        </div>          
                    ";
                }
                
            }catch(PDOException $e){
                echo $e->getMessage();

            } 
?>
        </div>
        </div>
       </div>
</main>
    

</body>
</html>