<?php 
    include("testConn.php");
    entete("blog-ajout",$_SESSION['nom']);
    $emailUser=$_SESSION['email'];
    
?>
<main class="container-fluid mx-auto">
    
<form action="" method="post" enctype="multipart/form-data" class="col-md-6 rounded-3 border border-5 border-secondary border-start-0 border-end-0 my-auto mx-auto bg-light p-2 shadow ">
        <h2 class="text-center">Création d'un nouveau article</h2>
        <?php        
        if (isset($_POST['btenv'])) {
            $nom=htmlentities($_POST['nom']);
            $dateajout=date('Y-m-d H:i:s');
            $descrit=htmlentities($_POST['texte']);
            $auteur=$_SESSION['nom'];
            # code...
        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
            if (isset($_FILES['f1']) AND $_FILES['f1']['error']== 0 AND isset($_FILES['f2']) AND $_FILES['f2']['error']== 0){
            // Testons si le fichier n'est pas trop gros
                    if ($_FILES['f1']['size'] <= 1000000 AND $_FILES['f2']['size'] <= 5000000)
                    {
                        // Testons si l'extension est autorisée pour l'image
                        $infosfichier1 =pathinfo($_FILES['f1']['name']);
                        $extension_upload1 = $infosfichier1['extension'];
                        $extensions_autorisees1 = array('jpg', 'jpeg', 'gif','png');
                        // Testons si l'extension est autorisée pour les pdf
                        $infosfichier2 =pathinfo($_FILES['f2']['name']);
                        $extension_upload2 = $infosfichier2['extension'];
                        $extensions_autorisees2 = array('PDF', 'pdf');
                        // Testons Recuperons le fichier
                        $dest1='dossier/' .basename($_FILES['f1']['name']);
                        $dest2='dossier/' .basename($_FILES['f2']['name']);
                        $ftmp1=$_FILES['f1']['tmp_name'];
                        $ftmp2=$_FILES['f2']['tmp_name'];
                        
                            if (in_array($extension_upload1,$extensions_autorisees1) AND in_array($extension_upload2,$extensions_autorisees2) )
                            {
                            // On peut valider le fichier et le stocker définitivement
                                move_uploaded_file($ftmp1, $dest1);
                                move_uploaded_file($ftmp2, $dest2);
                                RequetteSql("INSERT INTO article(auteur,descrit,nom,dateAjout,name1,fileUrl1,name2,fileUrl2)
                                 VALUES ('$auteur','$descrit','$nom','$dateajout','$ftmp1', '$dest1','$ftmp2', '$dest2');");
                                echo "<div class=\"alert alert-success\">L'envoi a bien été effectué !</div>";   
                            }else {
                                echo "<div class=\"alert alert-danger\">Une erreur est survenue lors de l'envvoi du fichier !</div>";
                            }
                }else {
                    echo "<div class=\"alert alert-danger\">Vos fichiers sont tres gros(1Mo pour l'image et 5Mo max pour le pdf)</div>";
                }
            }
        }
        ?>
        <label for="nom" class="form-label">Placez ici le titre de l'article</label><input maxlength="32" class="form-control" type="text" name="nom" required id="nom">
        <label for="texte" class="form-label">Placez ici une brève description du nouveau article</label><textarea name="texte" id="texte" class="form-control" required placeholder="Entrez ici le texte explicatif de l'article en moins de  "></textarea><label for="f1" class="form-label">Inserez une image de l'article</label><input class="form-control" placeholder="Entrez ici l'image" type="file" required name="f1" id="f1">
        <label for="f2" class="form-label">Entrez ici le pdf</label><input class="form-control" placeholder="Entrez ici le pdf" type="file" required name="f2" id="f2">
        <input type="submit" value="envoyer" name="btenv" class="btn btn-secondary  mx-auto p-2 my-2  col-md-2 "><br>
        <span class="col my-1">Retourner à la page des <a href="blog.php" class="btn btn-link">articles</a></span>
    </form>
</body>
</html>