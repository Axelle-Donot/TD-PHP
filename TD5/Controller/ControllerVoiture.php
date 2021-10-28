<?php
require_once File::build_path(array("Model","ModelVoiture.php")); // chargement du modèle
class ControllerVoiture {

    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require File::build_path(array("View","Voiture","Liste.php"));  //"redirige" vers la vue

    }

    public static function read(){
        $v=ModelVoiture::getVoitureByImmat($_GET['immat']);
        if ($v){
            require File::build_path(array("View","Voiture","detail.php"));
        }else {
            require File::build_path(array("View","Voiture","error.php"));
        }
        
    }

    public static function create(){
        require File::build_path(array("View","Voiture","create.php"));

    }    

    public static function created(){  
        $v1 = new ModelVoiture ($_POST['marque'],$_POST['couleur'], $_POST['immatriculation']);
        $v1->save();
        self::readAll();

    }
}
?>
