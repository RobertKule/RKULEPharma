<?php 
    include("testConn.php");
    entete("modification",$nomUser);
    $emailUser=$_SESSION['email'];
    
?>
<main class="container-fluid mx-auto">
    <!-- je saute une ligne au dessus pour bien afficher le contenu -->
    <div class="row">
        <div class="my-sm-4">
            &emsp;
        </div>
        <!-- code visible uniquement sur les petits écran -->
        <div class="my-2 d-block d-sm-none" >
            &emsp;
        </div>
    </div>
    <!-- le contenu -->
<?php 
if (isset($_GET['id'])) {
    $id=$_GET['id'];  
    try{
          include("connectionDb.php");
          // preparer la requette de lecture 
            $req=$conn->prepare("SELECT * FROM article WHERE id=$id;");
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
               <form action=\"traitementEditb.php\" method=\"post\" enctype=\"multipart/form-data\" class=\"col-md-6 rounded-3 border border-5 border-secondary border-start-0 border-end-0 my-auto mx-auto bg-light p-2 shadow \">
               <h2 class=\"text-center\">Création d'un nouveau article</h2>
               <input value=\"$id\" class=\"form-control\" type=\"hidden\" name=\"id\" required id=\"id\">
                <label for=\"nom\" class=\"form-label\">Placez ici le titre de l'article</label><input maxlength=\"32\" value=\"$nom\" class=\"form-control\" type=\"text\" name=\"nom\" required id=\"nom\">
                <label for=\"texte\" class=\"form-label\">Placez ici une brève description du nouveau article</label><input type=\"text\" value=\"$description\" name=\"texte\" id=\"texte\" class=\"form-control\" required>
                <label for=\"f1\" class=\"form-label\">Inserez une image de l'article</label><input value=\"$im\" class=\"form-control\" placeholder=\"Entrez ici l'image\" type=\"file\" required name=\"f1\" id=\"f1\">
                <label for=\"f2\" class=\"form-label\">Entrez ici le pdf</label><input value=\"$pdf\" class=\"form-control\" placeholder=\"Entrez ici le pdf\" type=\"file\" required name=\"f2\" id=\"f2\">
                <input type=\"submit\" value=\"envoyer\" name=\"btenv\" class=\"btn btn-secondary  mx-auto p-2 my-2  col-md-2 \"><br>
                <span class=\"col my-1\">Retourner à la page des <a href=\"blog.php\" class=\"btn btn-link\">articles</a></span>
            </form>
    ";
          }
          
      }catch(PDOException $e){
          echo $e->getMessage();
          
      } 

}   
    ?>
</body>
</html>