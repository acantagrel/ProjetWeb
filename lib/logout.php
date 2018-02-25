<?php session_start() ?>
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
            
            session_destroy();
            echo "Vous vous êtes bien déconnecté.";
            print "<br/> <br/> <a href='/accueil.php' ><input type='button' value='Accueil'></a>";
        ?>

        <!-- plugins bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../jquery/jquery.min.js"></script>

        <?php
            include "../includes/footer.php";
        ?>

    </body>
</html>