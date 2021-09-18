<?php
   
class Utilisateur {
   
    private $login;
    private $nom;
    private $prenom;

    // getter
    public function get($valeur) {
        return $this->$valeur;
    }

    //setter
    public function set ($attribut, $value){
        $this->$attribut=$value;
    }

    public function __construct($l, $n, $p) {
        $this->login = $l;
        $this->nom = $n;
        $this->prenom = $p;
    }   

}

?>