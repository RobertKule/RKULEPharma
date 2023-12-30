<?php 
    include("testConn.php");
    entete("Carrière",$_SESSION['nom']);
    menu(6);
    $nomUser=$_SESSION['nom'];
    $emailUser=$_SESSION['email'];
    
?>
<main class="container-fluid mx-auto">
    <!-- je saute une ligne au dessus pour bien afficher le contenu -->
    <div class="row">
        <div class="my-sm-4">
            &emsp;
        </div>
        <!-- code visible uniquement sur les petits écran -->
        <div class="my-5 d-block d-sm-none" >
            &emsp;
        </div>
    </div>
    
    <!-- le contenu -->
       
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