
<?php
if (null !=(session_start())) {
    session_destroy();
}
        
    include("mesfonction.php");
    entete("Login","Connexion");
    menu(0);
    
?>
<main>
    <section>
    <div class="bg-light">
        <div class="row ">
            <div class="col my-2">&thinsp;</div>
        </div>
        <div class=" offset-md-3 col-lg-6">  
            <form action="login.php" method="post" class=" py-2 px-4 border border-5 border-dark border-start-0 border-end-0  mx-auto form-horizontal text-dark bg-transparent shadow-lg">
                <div class="row form-control btn btn-default pasdecourseur">
                    <h2 >Login <img src="../images/userLogin.png" alt="Icone de Login" class="bg-dark rounded-circle " ></h2>
                </div>
                <?php    if (isset($_GET['message'])) {
                    $message=$_GET['message'];
                    echo "<div class=\"alert alert-success text-center \">
                    $message
                    </div>";  
        
                }
                    ?>
                <?php
                if (isset($_GET["deconnection"])) {
                    if ($_GET["deconnection"]!="Connexion") {
                        $deconn=$_GET["deconnection"];
                        echo "<div class=\"alert alert-success text-center mx-auto\">Au revoir $deconn</div>";
                    }
                    
                }
        // je déclare les variables
            //Je me connecte au site
        if ((isset($_POST['btconnection']))) {

                $email=htmlentities($_POST['email']);
                $motDePasse=htmlentities($_POST['motDePasse']);
        
                try{
                    include("connectionDb.php");
                    // preparer la requette de lecture 
                    $req=$conn->prepare("SELECT * FROM utilisateurs;");

                    $req->execute();
                    $nbre=0;
                    $datat=$req->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($datat as $row) {
                                if ((strtoupper($row['email'])==strtoupper($email)) AND  password_verify($motDePasse,$row['motDePasse'])){
                                    $nbre=1;
                                    break;
                                }
                        }
                     if ($nbre==1) {
        
                        session_start();
                        $_SESSION['id']=$row['id'];
                        $_SESSION['nom']=$row['nom'];
                        $_SESSION['email']=$row['email'];
                        $_SESSION['compte']=$row['typeDeCompte'];
                        header('Location: accueil.php?message="Heureux de vous revoir '.$_SESSION['nom'].' !!!"');
                     }else {
        
                        echo "<div class=\"alert alert-danger\">
                            Vos informations sont incorrectes
                        </div>";
                     }
                }catch(PDOException $e){
                    echo $e->getMessage();

                }
                
                
            }

        ?>

                <div class="input-group mt-5 mx-2">
                        <span class="input-group-text" id="nom"><img src="../images/username.png" alt=""></span>
                        <input type="email" class="form-control" placeholder="IDENTIFIANT-email" aria-label="Username" aria-describedby=nom name="email">
                </div>
                <div class="input-group  mt-4 mb-3 mx-2">
                        <span class="input-group-text" id=motDePasse><img src="../images/password.png" alt=""></span>
                        <input type="password" class="form-control" placeholder="mot de passe" aria-label="password" aria-describedby=motDePasse name="motDePasse">
                </div>
                
                <div class="row ">
                    <div class="btn-group-justified offset-md-4 col-md-4">
                        <input type="submit" class="btn btn-dark form-control mt-3" value="Se connecter" name="btconnection">
                    </div>
                </div>
                <div class="form-control btn btn-default saute pasdecourseur">
                    Vous n'avez pas de compte?<a href="inscription.php" class="btn btn-link ">Inscrivez-vous</a>
                  <br>  Retour à <a href="index.php" class="btn btn-link ">l'accueil du site</a>
                </div>
                
            </form>
            
        </div>
    
        
        </section>
    </main>
    

</body>
</html>