<?php 
include("testConn.php");
if (isset($_POST['btenv'])) {
            $id=htmlentities($_POST['id']);
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
                                RequetteSql("UPDATE article SET auteur='$auteur',descrit='$descrit',nom='$nom',dateAjout='$dateajout',
                                name1='$ftmp1',fileUrl1='$dest1',name2='$ftmp2',fileUrl2='$dest2'
                                WHERE id =$id;");
                                header("location:blog.php?message=\"Mis à jour de l'article réussi !!!\"");
                            }else {
                                echo "<div class=\"alert alert-danger\">Une erreur est survenue lors de l'envvoi du fichier !</div>";
                            }
                }else {
                    echo "<div class=\"alert alert-danger\">Vos fichiers sont tres gros(1Mo pour l'image et 5Mo max pour le pdf)</div>";
                }
            }
        }
        ?>