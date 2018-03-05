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
                <h3 style="text-align:center;">Campagnes publiques</h3>
                <div>
                    <?php
                        //BDD

                        $req ="SELECT profil.nom, profil.prenom FROM campagne,profil WHERE campagne.id_exp1=profil.id or campagne.id_exp2=profil.id or campagne.id_3=profil.id";
                        $res = $BDD->query($req);
                        while($campagne=$res->fetch())
                        {
                            //$titre=$campagne['titre'];
                            //$description = $campagne['description'];
                            $auteur1= $campagne['nom']+$campagne['prenom'];
                         //   $auteur2=$campagne['id_exp2'];
                          //  $auteur3=$campagne['id_exp3'];
                           // $auteur4=$campagne['id_exp4'];
                            //$auteur5=$campagne['id_exp5'];
                            ?> 
                        <div>
                            <?= "Auteurs = $auteur1, $auteur2, $auteur3"; ?>
                        </div>

                        <?php 
                        }
                        
                        if (array_key_exists('login',$_SESSION) and array_key_exists('mdp',$_SESSION))
                        {
                            ?>
                            <form action="#">
                                <input type="submit" value="Participer" />
                            </form>
                        <?php
                        }
                        ?>
                </div>
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