<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> creerVoiture </title>
    </head>
   
    <body>
        <?php
                require_once('Voiture.php');
                require_once('formulaireVoiture.html');

                $voiture1 = new Voiture($_POST['marque'],$_POST['couleur'],$_POST['immatriculation']);
                $voiture1->afficher();
           /*echo $_POST['marque'];
           echo $_POST['couleur'];
           echo $_POST['immatriculation'];*/
        ?>          
    </body>
</html>