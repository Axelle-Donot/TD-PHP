<?php

require_once 'Model.php';
echo 'tests';

$rep = Model::getPDO()->query('select * from Voiture');
$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

foreach ($tab_obj as $key => $value) {
    echo $value->immatriculation;
    echo $value->couleur;
    echo $value->marque;
}
?>