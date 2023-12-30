<?php 
    include("testConn.php");
    entete("Accueil",$_SESSION['nom']);
    menu(3);
    $emailUser=$_SESSION['email'];
    
?>
<main class=" mx-auto">
    <!-- je saute une ligne au dessus pour bien afficher le contenu -->
    <div class="row">
        <div class="my-sm-4">
            &emsp;
        </div>
        <!-- code visible uniquement sur les petits écran -->
        <div class="my-1 d-block d-sm-none" >
            &emsp;
        </div>
    </div>
    
    <!-- le contenu -->
    <?php    if (isset($_GET['message'])) {
        $message=$_GET['message'];
        echo "<div class=\"alert alert-success text-center\">
        $message
        </div>";  
        
    }
    ?>
    <div class="row mx-auto">
        <div class="col-lg-6 col-md-8 col-sm-10 mx-auto shadow-lg">
            <div class="card border border-secondary shadow-lg">
                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0 text-center">Contactez-nous</h3>
                </div>
                <div class="card-body bg-light">
                    <form action="contactiTr.php" method="post">
                        <div class="form-group">
                            <label for="nom">Nom:</label>
                            <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $nomUser?>" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $emailUser ?>" placeholder="Votre email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Votre message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary mt-3" name="envoi">Envoyer</button>
                    </form>
                </div>
                <div class="card-footer bg-light p-0">
                    <ul class="list-inline mx-auto">
                        <li class="list-inline-item"><a href="mailto:kulewakangitsirobert@gmail.com" class="btn btn-outline-secondary"><img src="../images/email.png" alt=""> Email</a></li>
                        <li class="list-inline-item"><a href="https://wa.me/+243893988899" class="btn btn-outline-secondary"><img src="../images/watsapp.png" alt="">WhatsApp</a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/BellarminRobertKule" class="btn btn-outline-secondary"><img src="../images/facebook.png" alt=""> Facebook</a></li>
                        <li class="list-inline-item"><a href="https://www.tiktok.com/KULE" class="btn btn-outline-secondary"><img src="../images/tiktok.png" alt=""> TikTok</a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/@wakule" class="btn btn-outline-secondary"><img src="../images/twiter.png" alt=""> Twitter</a></li>
                        <li class="list-inline-item"><a href="https://github.com/robertkule" class="btn btn-outline-secondary"><img src="../images/github.png" alt="">GitHub</a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/robertkule" class="btn btn-outline-secondary"><img src="../images/linkeld.png" alt=""> LinkedIn</a></li>
                        <li class="list-inline-item"><a href="https://www.youtube.com/robertkuleshows" class="btn btn-outline-secondary"><img src="../images/youtubee.png" alt=""> Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($_SESSION['compte']==1) {
    MAJuser("questions");
        echo "
        <div class=\"row mt-md-3 mt-sm-2\">
            <div class=\"col-md-10 mx-auto shadow-lg p-2\">
                <table class=\"table table-sm table-light table-hover mx-auto table-responsive border-5 border-secondary shadow-lg\">
                <thead class=\"table-light text-uppercase fw-bold  text-secondary\"> 
                    <tr class=\"text-uppercase fw-bold table-secondary\">
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Rédacteur</th>
                        <th scope=\"col\">email</th>
                        <th scope=\"col\">La question</th>
                        <th scope=\"col\">date d'ajout</th>
                        <th scope=\"col\">action</th>
                    </tr>
                </thead>
        ";
        try{
            include("connectionDb.php");
            // preparer la requette de lecture 
            $req=$conn->prepare("SELECT * FROM questions");

            $req->execute();

            $datat=$req->fetchAll(PDO::FETCH_ASSOC);
                foreach ($datat as $row) {

                    $idq=$row['id'];
                    $nomq=$row['nom'];
                    $emailq=$row['email'];
                    $questionq=$row['question'];
                    $dateajoutq=$row['dateajout'];
                    echo" <tr class=\"fs-9\">
                        <td>$idq</td>
                        <td>$nomq</td>
                        <td>$emailq</td>
                        <td>$questionq</td>
                        <td>$dateajoutq</td>
                        <td>
                            <a href=\"efface.php?id={$idq}\"><img src=\"../images/efface.png\" alt=\"\"></a>
                            <a href=\"efface.php?idrep={$idq}\"><img src=\"../images/repondre.png\" alt=\"\"></a>
                        </td>
                    </tr>";
                }
            }catch(PDOException $e){
                echo $e->getMessage();

            }

        }
            echo "</table>
            </div>
            </div> ";
        ?>
        
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