<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : <br>
        <?php

            /*$prenom = "Marc";                 EXO 4

            echo "Bonjour " . $prenom;
            echo "Bonjour $prenom";
            echo 'Bonjour $prenom';

            echo $prenom;
            echo "$prenom";*/

            /*$marque ="Tesla";                 EXO 5
            $couleur="noir";
            $imma="CC 176 PL";

            echo "Voiture $imma de marque $marque (couleur $couleur)";*/

            $voiture1['marque'] = 'Tesla';
            $voiture1['couleur'] = 'Noir';
            $voiture1['imma'] = 'CC 176 PL';

            /*echo "Voiture {$voiture['imma']} de marque {$voiture['marque']} (couleur {$voiture['couleur']})";*/

            $voiture2['marque'] = 'DS';
            $voiture2['couleur'] = 'Rouge';
            $voiture2['imma'] = 'MP 123 RR';

            $voiture3['marque'] = 'Renault';
            $voiture3['couleur'] = 'Jaune Poussin';
            $voiture3['imma'] = 'PR 456 FR';

            $voitures= array('1'=> $voiture1, '2' => $voiture2, '3'=> $voiture3);

            $listevide = array();

            if(empty($listevide)){
                echo("Il n'y a pas de voiture dans la liste");
            }
            else {
                /*echo "Liste des voitures : </br>";                
                foreach( $voitures as $value ) {
                    echo "Voiture {$value['imma']} de marque {$value['marque']} (couleur {$value['couleur']}) </br>";
                }*/
                // ou 

                echo "Liste des voitures : <br> <ul>";
                foreach ($voitures as $key => $value) {
                    echo"<li>La voiture $value[marque] est $value[couleur] et d'immatriculation $value[immatriculation]</li>";      
                };
                echo "</ul>";
            }

            
    

        ?>
    </body>
</html>