<?php
require_once ('../Model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../View/Voiture/Liste.php');  //"redirige" vers la vue
    }
}
?>