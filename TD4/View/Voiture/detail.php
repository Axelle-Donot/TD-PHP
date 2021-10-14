<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Detail d'une voiture</title>
    </head>
    <body>
        <?php
            echo '<p> Voiture d\'immatriculation ' . $v->getImmatriculation() . ' de couleur ' . $v->getCouleur() . ' et de marque ' .  $v->getMarque() . '.</p>';
        ?>
    </body>
</html>