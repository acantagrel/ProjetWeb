<?php session_start(); ?>
<html>
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
            include "../includes/navBar.php";
            include "../includes/connect.php";
        ?>

       <br/><br/>
       <div class="container-fluid">
            <div class="row">
                <div class="col-lg-offset-4 col-lg-4 col-lg-offset-4">
                    <?php
                        if (!empty($_POST['login']) || !empty($_POST['mdp']))
                        {
                            $login=$_POST['login'];
                            $mdp=$_POST['mdp'];
                            $req1=$BDD->prepare("SELECT * FROM PROFIL WHERE LOGIN=?");//si le login existe
                            $req1->execute(array($_POST['login']));
                            $ligne1=$req1->fetch();

                            $req2=$BDD->prepare("SELECT * FROM PROFIL WHERE LOGIN=? AND MDP=?");//si le mdp correspond au login entré
                            $req2->execute(array($_POST['login'],$_POST['mdp']));
                            $ligne2=$req2->fetch();

                            if($ligne1!=NULL && $ligne2==NULL)// si ligne=NULL il n'y a rien eu de renvoyer par la requete
                            {
                                ?> <button type="button" class="btn btn-warning btn-lg" style="text-align:center;">Mot de passe incorrect</button> <?php
                            }
                            else if ($ligne1==NULL && $login !="" )
                            {
                                ?><button type="button" class="btn btn-warning btn-lg" style="text-align:center;">Cet utilisateur est inconnu</button><?php
                            }
                            else if ($ligne2!=NULL){
                                                
                                $_SESSION['login']=$login;
                                $_SESSION['mdp']=$mdp;
                                header("location:accueil.php");// permet de retourner sur une page 
                            }
                        }
                            
                        ?>
                        <div class="form">
                            <form method="POST" action="login.php">
                                <fieldset>
                                    <h4> Connexion </h4>
                                    <br/>
                                    <div class="form-group"> <!-- has-error -->
                                        <label class="control-label" for="login">Login : </label>
                                        <input type="text" class="form-control" id="login" name="login" placeholder="Entrez votre identifiant" />
                                            <!--style="margin-left:20px;" size="40" 
                                                <span class="help-block">Veuillez rentrer un identifiant correct s'il vous plait</span>-->
                                    </div>
                                    <br/>
                                    <label for="mdp">Mot de passe : </label>
                                    <br/>
                                    <input  type="password" name="mdp" size='40' placeholder="Entrez votre mot de passe" />
                                    <br/><br/>
                                    <input type = "submit" value="Envoyer" />
                                </fieldset>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
            <?php  
          
            /*
            if (empty($_POST['login']))
                {
                    print 'Veuillez saisir le login de l\'utilisateur';
                    print  "<br/><br/>";
                }
                else if (empty($_POST['mdp']))
                {
                    print 'Veuillez saisir le mot de passe de l\'utilisateur';
                }
                else {
                        print 'Login : '.$_POST['login'];
                        print '<br/>';
                        print 'Mot de passe : '.$_POST['mdp'];
                }
                echo "<br/><br/>";*/
                
                ?>
               
                <!-- plugins bootstrap -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="../bootstrap/js/bootstrap.min.js"></script>
                <script src="../jquery/jquery.min.js"></script>
        
            <?php 
                include '../includes/footer.php';
            ?>
    </body>
</html>