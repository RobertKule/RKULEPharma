
<?php 
    include("testConn.php");
    entete("Réponses aux questions",$_SESSION['nom']);
    menu(4);
    $typec=$_SESSION['compte'];
    
?>
<main class="container-fluid m-0">
    <!-- je saute une ligne au dessus pour bien afficher le contenu -->
    <div class="row">
        <div class="my-sm-3">
            &emsp;
        </div>
        <div class="my-sm-3">
            &emsp;
        </div>
        
    </div>
    
    <!-- le contenu -->
    <div class="container bg-body m-md-0">
        <div class="row">
        <h1 class="text-center fs-1 fw-bold">Réponses aux questions frequement posée</h1>
        <?php    if (isset($_GET['message'])) {
        $message=$_GET['message'];
        echo "<div class=\"alert alert-success text-center\">
        $message
        </div>";  
        
    }
    ?>
            <div class="row mx-auto">
                <?php 
                MAJuser("reponses");
                try{
                    include("connectionDb.php");
                    // preparer la requette de lecture 
                    $req=$conn->prepare("SELECT * FROM reponses ORDER BY dateajout DESC;");
                    $req->execute();
                    $datat=$req->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($datat as $row) {
                            # code...
                            $id=$row['id'];
                            $question=$row['question'];
                            $reponse=$row['reponse'];
                            $user=$row['reped'];
                            echo "
                            <div style=\"height: 375px;\" class=\"col-md-3 my-1 mx-auto p-1 border border-5 border-secondary border-start-0 border-end-0 shadow-lg rounded rounded-5\">
                            <div class=\"card my-auto hautf fs-8 border border-secondary shadow-lg \">
                                <div style=\"height: 100px\" class=\"card-header  fs-6 text-light mb-1 shadow-lg border-top bg-secondary\">
                                    <div class=\"text-primary\">La question posées</div>
                                    $question
                                </div>
                                <div style=\"height: 200px\" class=\"card-body text-justify bg-body border border-secondary p-auto overflow-auto  hautf\">
                                    <div class=\"text-primary\">Notre réponse  : $user</div>
                                    $reponse
                                </div>";

                                if ($_SESSION['compte']==1) {
                                    echo "
                                    <div style=\"height: 50px\" class=\"card-footer border-bottom p-0\">
                                        <a href=\"elements/sup.php?id={$id}\" 
                                        class='btn btn-sm btn-danger col-12'>
                                        suprimer cette réponse</a>
                                    </div>";
                                }
                                echo "  
                            </div>
                        </div>";
                        
                        }
                        }catch(PDOException $e){
                            echo $e->getMessage();
    
                        } 
            
            
            ?>
            </div>
            
        </div>
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