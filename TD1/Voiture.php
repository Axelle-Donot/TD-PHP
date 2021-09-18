<?php
   
class Voiture {
   
    private $marque;
    private $couleur;
    private $immatriculation;
   
    // un getter      
    public function getMarque() {
        return $this->marque;
    }

    public function getCouleur(){
        return $this->couleur;
    }
   
    public function getimmatriculation(){
        return $this->immatriculation;
    }

    // un setter 
    public function setMarque($m) {
        $this->marque = $m;
    }

    public function setCouleur($c){
        $this->couleur = $c;
    }

    public function setImmatriculation($i){
        $this->immatriculation = $i;
    }
   
    // un constructeur
    public function __construct($m, $c, $i) {
        $this->marque = $m;
        $this->couleur = $c;
        $this->immatriculation = $i;
    } 
              
    // une methode d'affichage.
    public function afficher() {
        //echo ("Voiture" $this->getimmatriculation() "de marque" $this->getMarque() "(couleur" $this->getCouleur()))";
        echo ("La voiture de marque " .$this->getmarque(). " de couleur ".$this->getcouleur() ." et d'immatriculation ". $this->getimmatriculation());
    }
}
?>