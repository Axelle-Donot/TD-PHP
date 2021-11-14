<?php
require_once File::build_path(array("Model","Model.php"));
class ModelVoiture {

  private $marque;
  private $couleur;
  private $immatriculation;

  // un getter
  public function getMarque() {
       return $this->marque;
  }

  // un setter
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }

  public function getCouleur(){
    return $this->couleur;
  }

  public function setCouleur($couleur2){
    $this->couleur = $couleur2;
  }

  public function getImmatriculation(){
    return $this->immatriculation;
  }

  public function setImmatriculation($immatriculation2){
    $this->immatriculation = $immatriculation2;
  }

  // La syntaxe ... = NULL signifie que l'argument est optionel
  // Si un argument optionnel n'est pas fourni,
  //   alors il prend la valeur par défaut, NULL dans notre cas
  public function __construct($m = NULL, $c = NULL, $i = NULL) {
  if (!is_null($m) && !is_null($c) && !is_null($i)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
    $this->marque = $m;
    $this->couleur = $c;
    $this->immatriculation = $i;
  }
  }

  // une methode d'affichage.
  //public function afficher() {
  //  echo "<p> Voiture $this->immatriculation de marque $this->marque et de couleur $this->couleur </p>";
  //}

  public static function getAllVoitures(){
    $rep = Model::getPDO()->query('SELECT * FROM voiture');
    $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
    $tab_voit = $rep->fetchAll();
    return $tab_voit;
  }

  public static function getVoitureByImmat($immat) {
    $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
    // Préparation de la requête
    $req_prep = Model::getPDO()->prepare($sql);

    $values = array(
        "nom_tag" => $immat,
        //nomdutag => valeur, ...
    );
    // On donne les valeurs et on exécute la requête   
    $req_prep->execute($values);

    // On récupère les résultats comme précédemment
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
    $tab_voit = $req_prep->fetchAll();
    // Attention, si il n'y a pas de résultats, on renvoie false
    if (empty($tab_voit))
        return false; 
    return $tab_voit[0];
  }
    
  public static function deleteVoitureByImmat($immat){
      $sql = "DELETE from voiture WHERE immatriculation=:nom_tag";
      // Préparation de la requête
      $req_prep = Model::getPDO()->prepare($sql);

      $values = array(
          "nom_tag" => $immat
          //nomdutag => valeur, ...
      );
      // On donne les valeurs et on exécute la requête
      $req_prep->execute($values);
  }
    
    public static function updateVoitureByImmat($immat,$couleur,$marque){
        $sql = "UPDATE voiture SET couleur =:co, marque=:ma WHERE immatriculation=:im";
        // Préparation de la requête
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "im" => $immat,
            "co" => $couleur,
            "ma" => $marque
            //nomdutag => valeur, ...
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);
    }
    
    public function __toString() : string {
        $imma = htmlspecialchars($this -> immatriculation);
        $coul = htmlspecialchars($this -> couleur);
        $marque = htmlspecialchars($this -> marque);
        return " $imma de marque $marque et de couleur $coul ";
   }

  public function save(){
    $sql = "INSERT INTO voiture (immatriculation, marque , couleur ) VALUES (:imm,:mar,:cou)";
    $req_prep = Model::getPDO()->prepare($sql);

    $values = array(
      "imm" => $this->immatriculation,
      "mar" => $this->marque,
      "cou" => $this->couleur,
    );
    try{
      $req_prep->execute($values);
    } catch(PDOException $e) {
        if ($e->getCode() != 23000) throw $e;
    }   
  }
}

?>
