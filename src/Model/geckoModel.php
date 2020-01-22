<?php
namespace Model;
use Core\Database;


class geckoModel {
  private $geckoN;
  public $singleton;

  //(créé une nouvelle entrée en base avec les champs passés en paramètres et retourne son id
  function __construct(){
    $this->singleton = Database::getInstance();
  }

    public function save()
  {
    $stmt =  $this->singleton->getDatabase()->prepare('INSERT INTO gecko (nom) VALUES (:nom)');
    $stmt->bindParam(':nom', $this->geckoN);
    return $stmt->execute();
  }

  function setNom($geckoN){
    $this->geckoN = $geckoN;
  }

  function getId(){
    return $this->tabid;
  }
}