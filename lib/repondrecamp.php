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
                <h3 style="text-align:center;">Répondre</h3>
                <br/>
                <?php
                    $id=escape($_GET['id']);//récupère l'id dans l'url
                    $requete = $BDD->prepare("SELECT * FROM campagne WHERE ID=?"); //tu mets ? pour remplacer les valeurs à récupérer
                    $requete->execute(array($id));
                    //foreach($requete as $tab) ou l'inverse
                    while($tab=$requete->fetch())
                    {
                        $titre=$tab['titre'];
                        $desc = $tab['description'];
                        $auteur1= $tab['id_exp1'];
                        //$annee=$tab['ANNEE']; IDEE
                        ?>
                        <h4><?=$titre?></h4>
                        <div><?=$desc?></div>
                        <div><?=$auteur1?></div>
                        <?php
                        /*for ($i=1; $i<=5; $i++)
                            {
                                $req2 ="SELECT * FROM campagne WHERE id_exp$i IS NOT NULL GROUP BY id HAVING id=$numeroCampagne"; 
                                $res2 = $BDD->query($req2);
                                while($campagne=$res2->fetch())
                                {
                                    $id=escape($campagne['id']);
                                    print(requeteAuteur("campagne.id_exp$i",$numeroCampagne)." ; ");
                                }
                            }*/
                        ?>
                    <?php
                    }
                ?>

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
