
<?php 
    include("testConn.php");
    entete("Accueil",$_SESSION['nom']);
    menu(1);
    
    
?>
<main>
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
    <div class="pharmabg col-12 text-light text-center lh-2">
            <h1 class="fs-1 fw-bolder">RKULE pharma</h1>
            <p class="col">Une entreprise pharmaceutique africaine engagée</p>
    </div>
<!-- bloc d'informations sur l'entreprise -->
<!-- bloc1 -->
    <?php    if (isset($_GET['message'])) {
        $message=$_GET['message'];
        echo "<div class=\"alert alert-success text-center\">
        $message
        </div>";  
        
    }
    ?>
    <div class="row bg-light shadow-lg my-1 bg-body mx-auto pharmabg2">
        <!-- la presentation -->
        <div class="card p-2 mx-1 bg-light  shadow-lg  col-md-5 col-sm-10 mx-auto ">
            <div class="card-header m-auto col-12">
                <h2 class="fs-3 text-primary-emphasis text-center text-uppercase">Présentation</h2>
            </div>
            <div class="card-body m-auto col-12 border border-5 border-secondary  border-bottom-0 border-start-0 border-end-0">
                <p class="fs-8 text-dark text-justify overflow-auto text-normal">
                &emsp;RKULE pharma est une entreprise pharmaceutique africaine 
                        spécialisée dans la recherche, le développement et la 
                        commercialisation de médicaments innovants pour les 
                        maladies les plus prévalentes en Afrique. L'entreprise est 
                        basée à Goma, en République démocratique du Congo, et 
                        dispose d'un réseau de distribution étendu dans toute 
                        l'Afrique.
                </p>
            </div>
            <div class="card-footer m-0 mx-0 col-12">
                <img src="../images/bg/pharmaPresentation.jpg" alt="" class="m-auto p-auto img-fluid img-thumbnail shadow-lg">
            </div>
            
            
        </div>
        <!-- La mission de l'entreprise -->
        <div class="card p-2 mx-1 bg-transparent  shadow col-md-5 col-sm-10  mx-auto">
            <div class="card-header  m-auto col-12">
                <h2 class="fs-3 text-primary-emphasis text-center text-uppercase">Mission</h2>
            </div>
            <div class="card-body m-auto col-12 border border-5 border-secondary  border-bottom-0 border-start-0 border-end-0">
                <p class="fs-8 text-dark text-justify text-normal">
                &emsp;La mission de RKULE pharma est de contribuer à améliorer
                la santé des populations africaines en leur fournissant 
                des médicaments sûrs, efficaces et abordables. 
                L'entreprise s'engage à développer des médicaments qui 
                répondent aux besoins spécifiques des patients africains.
                </p>
            </div>
            <div class="card-footer m-auto col-12">
                <img src="../images/bg/pharmaMission.jpg" alt="" class="m-auto p-0 img-fluid img-thumbnail shadow-lg">
            </div>  
        </div>
    </div>

    <!-- Deuxième bloc -->
    <div class="row mx-auto m-1 mt-md-2 bg-light shadow-lg p-auto">
        <div class="row shadow-lg  py-5 px-2 rounded-5 text-light bg-dark mx-auto">
            <div class="col-md-6 mx-auto">
                <h2 class="fs-3 text-center border border-5 border-light  border-top-0 border-start-0 border-end-0 text-uppercase">Engagement social</h2>
                <p class="col-md-9 mx-auto">
                    RKULE pharma est engagée dans la responsabilité sociale des entreprises. 
                    L'entreprise soutient des programmes de santé communautaire dans toute l'Afrique, 
                    notamment des programmes de prévention et de traitement des maladies infectieuses.
                </p>
            </div>    
            <div class="col-md-3 mx-auto">
                <img src="../images/bg/engagemenyS.jpg" alt="IA et la medecine" class="m-auto p-0 img-fluid img-thumbnail shadow-lg">
            </div>
        </div>
        <div class="col-md-12 mx-auto shadow-lg bg-light p-5 rounded-5 mx-auto my-3  ">
            <h2 class="fs-2 text-primary-emphasis text-center text-uppercase border border-5 border-dark  border-top-0 border-start-0 border-end-0">Perspectives</h2>
            <p class="col-md-8 mx-auto text-dark">
                RKULE pharma est engagée dans la responsabilité sociale des entreprises. 
                L'entreprise soutient des programmes de santé communautaire dans toute l'Afrique, 
                notamment des programmes de prévention et de traitement des maladies infectieuses.
            </p>
        </div>
                        
    </div>

            <div class=" bg-dark col-md-12 col mx-auto my-2 p-1 shadow-lg text-light p-5">
                        <h2 class="fs-2 text-center border border-5 border-light  border-top-0 border-start-0 border-end-0 text-uppercase">Produits et services</h2>
                        <p class="col-md-8 mx-auto">
                        &emsp;RKULE pharma propose une gamme diversifiée de médicaments 
                            pour traiter un large éventail de maladies, notamment :
                            <ul class="col-md-8 mx-auto list-group class">
                                <li >Les maladies infectieuses, telles que le paludisme, la tuberculose et le VIH/sida</li>
                                <li>Les maladies non transmissibles, telles que les maladies cardiovasculaires, le diabète et le cancer</li>
                                <li>Les maladies tropicales négligées, telles que la leishmaniose et la maladie de Chagas</li>
                            </ul>
                            &emsp;L'entreprise développe également 
                            des médicaments innovants pour des maladies pour lesquelles il n'existe 
                            actuellement aucun traitement efficace.
                        </p>
                        
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