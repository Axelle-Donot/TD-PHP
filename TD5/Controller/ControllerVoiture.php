<?php
require_once File::build_path(array("Model","ModelVoiture.php")); //chargement du modèle

class ControllerVoiture {
    public static function readAll() {
        $pagetitle = 'Liste des voitures';
        $view = 'Liste.php';
        $controller='Voiture';
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require File::build_path(array("View","view.php"));  //"redirige" vers la vue
    }

    public static function read() {
        $v = ModelVoiture::getVoitureByImmat($_GET['immat']);     //appel au modèle pour gerer la BD
        if ($v) {
            $pagetitle = 'Détail de la voiture';
            $view = 'detail.php';
            $controller='Voiture';
            require File::build_path(array("View","view.php"));  //"redirige" vers la vue
        }else{
            $pagetitle = 'Détail de la voiture';
            $view = 'error.php';
            $controller='Voiture';
            require File::build_path(array("View","view.php"));
        }
    }
    
    public static function error(){
        $pagetitle = 'Erreur';
        $view = 'error.php';
        $controller='Voiture';
        require File::build_path(array("View","view.php"));
    }

    public static function create(){
        $pagetitle = 'Créer une voiture';
        $view = 'create.php';
        $controller = 'Voiture';
        require File::build_path(array("View","view.php"));
    }

    public static function created(){
        $marque = ($_POST['marque']);
        $couleur = ($_POST['couleur']);
        $immat = ($_POST['immatriculation']);
        
        $voiture = new ModelVoiture ($marque,$couleur,$immat);
        $voiture->save();
        
        $tab_v = ModelVoiture::getAllVoitures();
        
        $pagetitle = 'Nouvelle voiture';
        $view = 'created.php';
        $controller = 'Voiture';
        require File::build_path(array("View","view.php"));
        
        
        
    }
}
?>
