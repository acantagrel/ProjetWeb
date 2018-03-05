<?php session_start(); ?>
<html>
    <!-- Page d'accueil -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logoIRAEER.png"  type="image/png">
		
		<!-- Attention au chemin ! -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/iraeer.css" rel="stylesheet">
        <title>IRAEER</title>

    </head>
    <body>
        <?php 
            include "../includes/navBar.php";
            include "../includes/connect.php";
        ?>

        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-2">
                    <img src="../images/logoIRAEER.png" class="img-responsive" id="image"/>
                </div>
                <div class="col-lg-6">
                    <p class="alinea"> 
                        <br/> Bienvenue sur <abbr title="Interface web de Recueil d’Avis d’Expérimentateur et d’Evaluation de Ressentis"><b>IRAEER</b></abbr>, le site qui vous permet d'<em>évaluer la qualité</em> de vos sites web !
                        <br/> Pour cela, rien de plus simple, créer un compte (c'est gratuit !) ou connectez-vous et vous pourrez alors réaliser 
                        des campagnes de tests pour évaluer le contenu, l'attrait et l'utilisabilité de vos interfaces.
                        <br/>En créant un compte, vous aurez accès à :
                    
                        <ul class="accueil">
                            <li> la création de campagnes de tests,</li> 
                            <li> aux réponses à vos campagnes et leurs analyses, </li>
                            <li> à la liste des campagnes ouvertes à tous et vous aurez la possibilité d'y répondre. </li>
                        </ul>
                    </p>
                </div>
                <div class="col-lg-3" id="colButton">
                    <?php 
                        include "../includes/buttons.php";
                    ?>
                    
                </div>
            </div>
        </div>
        
        
        <!-- plugins bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../jquery/jquery.min.js"></script>

        <?php
            include "../includes/footer.php";
        ?>
    </body>
</html>
