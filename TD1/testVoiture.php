<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : <br>
        <?php
            require_once('Voiture.php');
        
            $voiture1 = new Voiture("Tesla","Noir","AB 123 CD");
            $voiture1->afficher();
        ?>
    </body>
</html>