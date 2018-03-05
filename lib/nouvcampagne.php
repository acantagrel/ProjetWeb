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
        
        <div class="row">
            <div class="col-lg-offset-1 col-lg-8">
                <h3 style="text-align:center;">Création d'une nouvelle campagne</h3>
                <br/>
                <p style="text-align:justify;">
                    Une campagne de test vise à évaluer l'utilisabilité d'une interface. <br/> Elle peut se dérouler suivant deux configurations différentes.
                    <ul>
                        <li>Configuration 1, Evaluation des caractéristiques d'une interface : l'interface est présentée aux utilisateurs puis ceux-ci doivent répondre à un questionnaire afin de donner un retour sur leur expérience d'utilisation.</li>
                        <li>Configuration 2, Comparaison entre deux interfaces menant à la réalisation des mêmes objectifs : deux interfaces sont présentées et évaluées successivement.  </li>
                        Pour cela, plusieurs tests sont effectués. 
                    L'ensemble des utilisateurs participants sont répartis en deux groupes (A ou B). 
                    <ul>
                        <li>Concernant le groupe A, l'interface 1 du site web est présentée, puis ils répondent à un questionnaire de ressenti. 
                        <br/>Ensuite, l'interface 2 est présentée et à nouveau, les utilisateurs doivent répondre au même questionnaire. 
                        <br/> Les résultats des deux questionnaires sont alors analysés pour déterminer quelle interface a été préférée.</li>
                        <li>Le groupe B effectue le même test sauf que l'interface 2 est présentée en premier et ensuite l'interface 1.</li>
                    </ul>
                    La passation de la campagne en séparant en deux groupes d'utilisateurs permet d'effacer l'effet d'ordre de passation et ainsi de comparer réellement et sans biais cognitifs l'interface 1 et l'interface 2.
                    </ul>
                </p>
                <br/>
                <div class="form">
                    <form method="POST" action="nouvcampagne.php">
                        <fieldset>
                            <br/><br/>
                            Veuillez entrer les informations relatives à votre nouvelle campagne de test.
                            <br/><br/>
                            <label for="nomcamp">Nom de la campagne de test : </label>
                            <input type="text" id="nomcamp" name="nomcamp" size="40" placeholder="Entrez le nom de la campagne de test"/>
                            <br/><br/>
                            <label for="publique"> S'agit-il d'une campagne publique ?  </label>  
                            <input type="radio" name="publique" id="oui" checked value="oui"/> <label for="oui"> Oui </label>
                            <input type="radio" name="publique" id="non" checked value="non"/> <label for="non"> Non </label>
                            <br/><br/>
                            <label for="config"> Quelle configuration souhaitez-vous utiliser pour votre campagne de test ?  </label>  
                            <br/><input type="radio" name="config" id="evaluation" checked value="evaluation"/>  <label for="evaluation">Evaluation des caractéristiques d'une interface  </label>
                            <br/><input type="radio" name="config" id="comparaison" checked value="comparaison"/>  <label for="comparaison">Comparaison entre deux interfaces </label>
                            <br/><br/>
                            <!-- Il faut récupérer le nom de l'expérimentateur -->
                        </fieldset>
                    </form>
                </div>
                <br/><br/><br/><br/>
            </div>
            <div class="col-lg-3">
                <?php
                    include "../includes/buttons.php";
                ?>
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