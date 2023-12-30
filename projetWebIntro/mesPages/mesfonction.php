<?php
   function menu($nbre){
    if($nbre!=0){
    echo "
    <div class=\"nav nav-fill  nav-tabs dropdown d-md-none\">
      <a class=\"btn btn-sm btn-default dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\"><img src=\"../images/menu.png\" alt=\"un logo de menu\">Menu</a>
      <ul class=\"dropdown-menu nav-tabs p-2 border border-dark border-5 border-end-0 border-top-0 border-start-0\">
        <a href=\"accueil.php\" class=\"nav-link\">Accueil</a>
        <a href=\"produit.php\" class=\"nav-link  p-2\">nos locaux et services</a>
        <a href=\"contact.php\" class=\"nav-link\">contact</a>
        <a href=\"faq.php\" class=\"nav-link\">FAQ</a>
        <a href=\"blog.php\" class=\"nav-link\">Blog</a>
        
        <a href=\"client.php\" class=\"nav-link\"  aria-current=\"page\" p-2\">client</a>
      </ul>
    </div>";
}
     echo "
     <div class=\"d-none d-sm-none d-md-block d-lg-block\">
     <ul class=\"nav nav-fill nav-pills nav-tabs nav-underline\">";
    //si c'est le Accueil qui est actif
    if ($nbre==1) {
        # code...
        echo "
        <li class=\"nav-item\">
            <a href=\"accueil.php\" class=\"nav-link active\"  aria-current=\"page\" p-2\"><img src=\"../images/home.png\" alt=\"\"></a>
        </li>
        <li class=\"nav-item\">
            <a href=\"produit.php\" class=\"nav-link\">nos locaux et services</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"contact.php\" class=\"nav-link\">contact</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"faq.php\" class=\"nav-link\">FAQ</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"blog.php\" class=\"nav-link\">Blog</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"client.php\" class=\"nav-link  p-2\">Client</a>
        </li>
    
        ";
    }
    //si c'est le produit qui est actif
    elseif ($nbre==2) {
        # code...
        echo "
        <li class=\"nav-item\">
            <a href=\"accueil.php\" class=\"nav-link\">Accueil</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"produit.php\" class=\"nav-link active\"  aria-current=\"page\" p-2\"><img src=\"../images/contactus.png\" alt=\"\"></a>
        </li>
        <li class=\"nav-item\">
            <a href=\"contact.php\" class=\"nav-link\">contact</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"faq.php\" class=\"nav-link\">FAQ</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"blog.php\" class=\"nav-link\">Blog</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"client.php\" class=\"nav-link  p-2\">Client</a>
        </li>
    
        ";
    }
    //si c'est le contact qui est actif
    elseif ($nbre==3) {
        # code...
        echo "
        <li class=\"nav-item\">
            <a href=\"accueil.php\" class=\"nav-link\">Accueil</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"produit.php\" class=\"nav-link   aria-current=\"page\" p-2\">nos locaux et services</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"contact.php\" class=\"nav-link active\"><img src=\"../images/contactus.png\" alt=\"\"></a>
        </li>
        <li class=\"nav-item\">
            <a href=\"faq.php\" class=\"nav-link\">FAQ</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"blog.php\" class=\"nav-link\">Blog</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"client.php\" class=\"nav-link  p-2\">Client</a>
        </li>
    
        ";
    }
    //si c'est le FAQ qui est actif
    elseif ($nbre==4) {
        # code...
        echo "
        <li class=\"nav-item\">
            <a href=\"accueil.php\" class=\"nav-link\">Accueil</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"produit.php\" class=\"nav-link  p-2\">nos locaux et services</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"contact.php\" class=\"nav-link\">contact</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"faq.php\" class=\"nav-link active\"  aria-current=\"page\" p-2\"><img src=\"../images/faq.png\" alt=\"\"></a>
        </li>
        <li class=\"nav-item\">
            <a href=\"blog.php\" class=\"nav-link\">Blog</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"client.php\" class=\"nav-link  p-2\">Client</a>
        </li>
    
        ";
    }
    //si c'est le Blog qui est actif
    elseif ($nbre==5) {
        # code...
        echo "
        <li class=\"nav-item\">
            <a href=\"accueil.php\" class=\"nav-link\">Accueil</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"produit.php\" class=\"nav-link  p-2\">nos locaux et services</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"contact.php\" class=\"nav-link\">contact</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"faq.php\" class=\"nav-link\">FAQ</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"blog.php\" class=\"nav-link active\"  aria-current=\"page\" p-2\"><img src=\"../images/blog.png\" alt=\"\"></a>
        </li>
        <li class=\"nav-item\">
            <a href=\"client.php\" class=\"nav-link  p-2\">Client</a>
        </li>
    
        ";
    }
    
    //si c'est le client qui est actif
    elseif ($nbre==7) {
        # code...
        echo "
        <li class=\"nav-item\">
            <a href=\"accueil.php\" class=\"nav-link\">Accueil</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"produit.php\" class=\"nav-link  p-2\">nos locaux et services</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"contact.php\" class=\"nav-link\">contact</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"faq.php\" class=\"nav-link\">FAQ</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"blog.php\" class=\"nav-link\">Blog</a>
        </li>
        <li class=\"nav-item\">
            <a href=\"client.php\" class=\"nav-link active\"  aria-current=\"page\" p-2\"><img src=\"../images/users.png\" alt=\"\"></a>
        </li>
        
    
        ";

    }
   
    echo "
    </ul>
    </div>
    </header>";
}
   

function entete($titre,$user){
    
    echo '<?php $user=isset($_SESSION["nom"])?$_SESSION["nom"]:null;?>';
    echo "
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>$titre-Pharmacie de Robert KULE</title>
        <link rel=\"stylesheet\" href=\"../mesStyles/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"../mesStyles/msform.css\">
        <script src=\"../mesStyles/bootstrap.min.js\"></script>
        <script src=\"../mesStyles/bootstrap.bundle.min.js\"></script>
        <!-- Script de l'heure automatique -->
        <script>
            function afficherHeure(){
                var date = new Date();
                var heures = date.getHours();
                var minutes = date.getMinutes();
                var secondes = date.getSeconds();
                
                heures = heures < 10 ? '0' + heures : heures;
                minutes = minutes < 10 ? '0' + minutes : minutes;
                secondes = secondes < 10 ? '0' + secondes : secondes;
                
                var heure = heures + ':' + minutes + ':' + secondes;
                document.getElementById('heure').innerHTML = heure;
            }
            
            setInterval(afficherHeure, 1000);
        </script>
    </head>
    <body class=\"m-auto p-auto container-fluid\">
    <div class=\"mb-5\"></div>

    <header class=\" shadow  bg-light fixed-top \">
    <div class=\"d-flex flex-row justify-content-end align-item-baseline bg-dark text-light p-md-2 p-sm-1\">
        <div class=\"flex-grow-1 fs-3 fw-bold text-nowrap\"><span class=\"d-block  text-light\"> Mon Entreprise</span></div>
        <a href=\"login.php?deconnection=$user\" class=\"btn btn-default\"><h4 ><img src=\"../images/userLogin.png\" alt=\"Icone de Login\" class=\"bg-dark rounded-circle mx-2 text-light fs-sm-9\" ><span class=\" text-nowrap overflow-hidden text-light\">$user</span></h4></a>
    </div>
    ";
   
    include("pied.php");
   }
   function RequetteSql($requettesql){
    
    try{
        include("connectionDb.php");
        // preparer la requette de lecture 
        $req=$conn->prepare("$requettesql");
        $req->execute();
        
    }catch(PDOException $e){
        echo $e->getMessage();

    }
}

//    recupere l'id
function MAJuser($table){
    Requettesql("ALTER TABLE $table DROP COLUMN id;");
    RequetteSql("ALTER TABLE $table ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY FIRST;");        
}


// ::MENU FLOTTAT
function supprime($idd){
    RequetteSql("DELETE FROM utilisateur WHERE id=$idd");
    MAJuser("utilisateurs");
}
?>

