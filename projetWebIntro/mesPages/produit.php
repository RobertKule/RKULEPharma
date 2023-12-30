
<?php 
    include("testConn.php");
    entete("Accueil",$_SESSION['nom']);
    menu(2);
?>
<main class="row bg-light my-lg-2 m-0">
    <!-- je saute une ligne au dessus pour bien afficher le contenu -->
    <div class="row">
        <div class="my-md-3">
            &emsp;
        </div>
        <!-- code visible uniquement sur les petits écran -->
        <div class="my-md-5 d-block d-md-none" >
            &emsp;
        </div>
        
    </div>
    
    <!-- le contenu -->
    <div class="pharmabg1 col-12 text-light text-center lh-2">
            <h1 class="fs-1 fw-bolder">Bienvenue dans nos locaux</h1>
            <p class="col">Nous sommes ravi de votre visite. Nous vous remercions sincerement.</p>
    </div>    
    <div class="row mx-auto shadow-lg ">
        <div class="col-md-12 text-center m-x-auto  p-2 rounded-5 shadow-lg my-2 bg-light text-dark border border-4 border-dark border-top-0 border-bottom-0">
            <h5 class="text-center text-Uppercase col-12 p-2 border border-5 border-dark border-top-0 border-start-0 border-end-0 shadow-lg ">la visite de nos locaux</h5>
            <div class="col-12 fill mx-0">
                    <img style="height: 20em;width: auto;" src="../images/produits/chambre1.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/chambre2.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/chambre3.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/chambre4.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/chambre5.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
            </div>
            
        </div>

        <div class="col-md-12 text-center m-x-auto  p-2 rounded-5 shadow-lg my-2 bg-dark text-light border border-4 border-light border-top-0 border-bottom-0">
            <h5 class="text-center text-Uppercase col-12 p-2 border border-5 border-light border-top-0 border-start-0 border-end-0 shadow-lg">la visite de nos locaux des soins</h5>
            <div class="col-12 fill mx-0">
                <img style="height: 20em;width: auto;" src="../images/produits/comp1.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                <img style="height: 20em;width: auto;" src="../images/produits/comp2.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">          
                <img style="height: 20em;width: auto;" src="../images/produits/trait1.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                <img style="height: 20em;width: auto;" src="../images/produits/trait2.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
            </div>
        </div>
        <div class="col-md-12 text-center m-x-auto  p-2 rounded-5 shadow-lg my-2 bg-light text-dark border border-4 border-dark border-top-0 border-bottom-0">
            <h5 class="text-center text-Uppercase col-12 p-2 border border-5 border-dark border-top-0 border-start-0 border-end-0 shadow-lg">la visite de nos traitements des médicaments</h5>
            <div class="col-12 fill mx-0">
                    <img style="height: 20em;width: auto;" src="../images/produits/med1.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/med2.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/med3.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/med4.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/med5.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/med6.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
            </div>
            
        </div>
        <div class="col-md-12 text-center m-x-auto  p-2 rounded-5 shadow-lg my-2 bg-dark text-light border border-4 border-light border-top-0 border-bottom-0">
            <h5 class="text-center text-Uppercase col-12 p-2 border border-5 border-light border-top-0 border-start-0 border-end-0 shadow-lg">Nous utilisons de l'IA également pour tester et améliorer notre manière de soigner.</h5>
            <div class="col-12 fill mx-0">
                    <img style="height: 20em;width: auto;" src="../images/produits/ia1.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/ia2.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/ia3.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/ia4.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
                    <img style="height: 20em;width: auto;" src="../images/produits/ia5.jpg" alt="un pharmatical product" class="img-fluid img-thumbnail">
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