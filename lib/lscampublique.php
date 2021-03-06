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
                <br/><br/>
                <div>
                    <?php
                        //BDD
                        
                        //requete titre 
                        //$numeroCampagne = 0;
                        function presCamp ($numCampagne) 
                        {
                            $BDD = new PDO("mysql:host=localhost;dbname=iraeer;charset=utf8","BouCan","surprise",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                            $req3 = "SELECT * FROM campagne WHERE id=$numCampagne AND statut=0";
                            $res3 = $BDD->query($req3);
                            while($campagne=$res3->fetch())
                            {
                                $titre = escape($campagne['titre']);
                                $desc = escape($campagne['description']);
                                ?> 
                                <h4><?=$titre?></h4>
                                <div style="text-indent: 15px;"><?=$desc?></div>
                                <?php
                            }
                        }
                        
                    
                        function requeteAuteur($id_exp,$numeroCampagne)
                        {
                            //retourne le nom du profil associé à l'id_expérimentateur de la table campagne
                            $BDD = new PDO("mysql:host=localhost;dbname=iraeer;charset=utf8","BouCan","surprise",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                            $req ="SELECT nom, prenom FROM profil, campagne WHERE profil.id = $id_exp AND campagne.id=$numeroCampagne"; 
                            $res = $BDD->query($req);
                            while($camp=$res->fetch())
                            {
                                $auteurP= escape($camp['prenom']);
                                $auteurN= escape($camp['nom']);
                                $auteur = "$auteurP $auteurN";
                            }  
                            return $auteur;
                        }


                        
                        $compteurCampagne=0;
                        $req3 = "SELECT * FROM campagne WHERE statut = 0";
                        $res3 = $BDD->query($req3);
                        while($exist=$res3->fetch())
                            { 
                                $compteurCampagne++;
                            }
                        //requete qui cherche les colonnes 'id_experimentateur' qui possèdent une valeur et affiche le nom correspondant à l'id_exp
                        for ($numeroCampagne=0; $numeroCampagne<$compteurCampagne;$numeroCampagne++)
                        {
                            presCamp($numeroCampagne);
                            print("Auteur(s) : ");
                            ?>
                            <i>
                            <?php
                            for ($i=1; $i<=5; $i++)
                            {
                                $req2 ="SELECT * FROM campagne WHERE id_exp$i IS NOT NULL GROUP BY id HAVING id=$numeroCampagne"; 
                                $res2 = $BDD->query($req2);
                                while($campagne=$res2->fetch())
                                {
                                    $id=escape($campagne['id']);
                                    print(requeteAuteur("campagne.id_exp$i",$numeroCampagne)." ; ");
                                }
                            }
                            ?>
                            </i>
                            <?php
                            if (array_key_exists('login',$_SESSION) and array_key_exists('mdp',$_SESSION))
                            {
                                ?>
                                <br/>
                                <a href="repondrecamp.php?id=<?=$id?>" style="float: right;">Participer</a>
                                <br/>
                                <hr/>
                                <!--<form action="repondrecamp.php?id=<?=$id?>">
                                    <input type="submit" value="Participer" />
                                </form>-->
                            <?php
                            }
                            ?> 
                            <br/><br/>
                            <?php
                        }
               
                        ?>
                        
                    

                </div>
            </div>
            <div class="col-lg-3" id="colButton">
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