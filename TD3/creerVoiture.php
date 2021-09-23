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
                $voiture1->save();
           /*echo $_GET['marque'];
           echo $_GET['couleur'];
           echo $_GET['immatriculation'];*/
        ?>          
    </body>
</html>