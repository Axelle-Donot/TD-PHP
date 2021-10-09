<?php
require_once ('../Model/ModelVoiture.php'); // chargement du modèle
$tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
require ('../View/Voiture/Liste.php');  //redirige vers la vue
?>