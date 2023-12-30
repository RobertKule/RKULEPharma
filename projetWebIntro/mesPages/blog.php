<?php 
    include("testConn.php");
    entete("blog",$_SESSION['nom']);
    menu(5);
    $emailUser=$_SESSION['email'];
    
?>
<main class="row mx-auto">
    <!-- je saute une ligne au dessus pour bien afficher le contenu -->
    <div class="row">
        <div class="my-sm-4">
            &emsp;
        </div>
        <!-- code visible uniquement sur les petits écran -->
        <div class="my-sm-5 d-block d-sm-none" >
            &emsp;
        </div>
    </div>
    <!-- le contenu -->
    <form class="container pt-1 d-flex" role="search" method="post">
        <input name="cherche" class="form-control me-2" type="search" placeholder="Rechercher un client par son nom" aria-label="Search">
        <button class="btn btn-outline-secondary mx-1" type="submit" name="maj"><img src="../images/search.png" alt=""></button>
        <button class="btn btn-outline-secondary mx-1" type="submit" name="maj"><img src="../images/update.png" alt=""></button>
        <?php if ($_SESSION['compte']==1) {
            echo "<a href=\"ajoutb.php\" class=\"btn btn-outline-secondary mx-1\"><img src=\"../images/add.png\" alt=\"\"></a>";
        }
        ?>
    </form>
    <?php    if (isset($_GET['message'])) {
        $message=$_GET['message'];
        echo "<div class=\"alert alert-success text-center\">
        $message
        </div>";  
        
    }
    ?>
    <div class="row mx-auto">
        
      <?php 
      MAJuser("article");
            try{
                include("connectionDb.php");
                // preparer la requette de lecture 
                if (isset($_POST['cherche']) AND !empty($_POST['cherche'])) {
                    $recherche=htmlentities($_POST['cherche']);
                    $req=$conn->prepare("SELECT DISTINCT * FROM article WHERE nom LIKE '%$recherche%' OR descrit LIKE '%$recherche%';");
                    $req->execute();
                    $datat=$req->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    $req=$conn->prepare("SELECT DISTINCT * FROM article ORDER BY dateAjout DESC");
                    $req->execute();
                    $datat=$req->fetchAll(PDO::FETCH_ASSOC);
                
                }
                foreach ($datat as $row) {
                    $id=$row['id'];
                    $nom=$row['nom'];
                    $im=$row['fileUrl1'];
                    $pdf=$row['fileUrl2'];
                    $description=$row['descrit'];
                    $date=$row['dateAjout'];
                    $auteur=$row['auteur'];
                    
                    echo "
                        <div \" class=\"card col-md-3 p-2   \" >
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
                            <a href=\"$pdf\" target=\"_blank\" class=\"btn btn-outline-primary ms-2 col-8 m-1 mx-auto\">telecharger le pdf</a>
                            ";
                            if ($_SESSION['nom']==$auteur){
                                echo "<a href=\"editb.php?id={$id}\"class='btn  col-2 m-1 mx-auto'><img src=\"../images/edit.png\"  class=\"m-auto img-fluid \" alt=\"\"></a>
                            ";
                            }
                            if ($_SESSION['compte']==1 || $_SESSION['nom']==$auteur){
                                echo "<a href=\"elements/supe.php?id={$id}\"class='btn btn-outline-danger col-10 m-1 mx-auto'>suprimer l'article</a>
                            ";
                            }

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
    </main>
<!-- je saute une ligne au dessus pour bien afficher le contenu -->
<div class="row">
        <div class="my-sm-3">
            &emsp;
        </div>
        <!-- code visible uniquement sur les petits écran -->
        <div class="my-5 d-block d-sm-none" >
           &emsp;
        </div>
</div>
    

</body>
</html>