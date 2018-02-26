<?php session_start(); ?>
<html>
    <!-- Page d'accueil -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Attention au chemin ! -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/iraeer.css" rel="stylesheet">
        <title>IRAEER</title>

    </head>
    <body>
        <?php
            include "../includes/navBar.php"
            include "../includes/connect.php";
        ?>

        <div class="container">
            <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                <img src="../images/logoIRAEER.png" id="image"/>
                <br/>
                <h4 style="text-align:center;"><strong> Origine d'IRAEER </strong></h4>
                <br/>

                <div class="pres">
                    Ce site web a été développé par A.Bouquet et A. Cantagrel dans le cadre de notre formation au sein de l'<abbr title="Ecole Nationale Supérieure de Cognitique">ENSC</abbr>. </br>
                    Lors de notre première année de formation, un projet web devait être mené à bien. Ce projet visait la conception d'un interface de recueil et d'analyse de retours d'utilisateurs suite à l'utilisation de site web.
                    <br/><br/>
                    <img src="../images/logoensc.png"/>
                    Pour plus d'informations sur la formation ou l'école, voici le lien vers le site de l'école : <a href="https://ensc.bordeaux-inp.fr/fr">ENSC</a> .
                    <br/><br/><br/><br/><br/>
                </div>
            </div>
        </div>
        
        <!-- plugins bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../jquery/jquery.min.js"></script>

        <?php
            include "../includes/footer.php"
        ?>
    </body>
</html>