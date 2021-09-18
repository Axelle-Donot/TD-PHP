<?php
   
class Trajet {
   
    private $id;
    private $depart;
    private $Arrivée;
    private $date;
    private $nombre_de_place;
    private $prix;
    private $conducteur_login;


    //getter
    public function get($valeur) {
        return $this->$valeur;
    }

    // Setter
    public function set ($attribut, $value){
        $this->$attribut=$value;
    }

    public function __construct($i, $d, $a, $da, $ndp, $p, $cl) {
        $this->id = $i;
        $this->depart = $d;
        $this->Arrivée = $a;
        $this->date = $da;
        $this->nombre_de_place = $ndp;
        $this->prix = $p;
        $this->conducteur_login = $cl;

    } 


}    

?>