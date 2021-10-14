<?php
require_once ('../Model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {

    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../View/Voiture/Liste.php');  //"redirige" vers la vue

    }

    public static function read(){
        $v=ModelVoiture::getVoitureByImmat($_GET['immat']);
        if ($v){
            require ('../View/Voiture/detail.php');
        }else {
            require ('../View/Voiture/error.php');
        }
        
    }

    public static function create(){
        require ('../View/Voiture/create.php');

    }    

    public static function created(){  
        $v1 = new ModelVoiture ($_POST['marque'],$_POST['couleur'], $_POST['immatriculation']);
        $v1->save();
        self::readAll();

    }
}
?>