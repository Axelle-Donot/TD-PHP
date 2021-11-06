<?php

require_once File::build_path(array("Controller","ControllerVoiture.php"));
// On recupère l'action passée dans l'URL
//$action = $_GET['action'];
// Appel de la méthode statique $action de ControllerVoiture
if (isset($_GET['action'])){
    $action = $_GET['action'];
    if (in_array($action,get_class_methods('ControllerVoiture'))){
        ControllerVoiture::$action();
    }else {
        ControllerVoiture::error();
    }
}else {
    ControllerVoiture::readAll();
}


?>
