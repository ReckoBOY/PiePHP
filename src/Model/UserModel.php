<?php

namespace Model;
use Core\Database;


class UserModel {
  private $email;
  private $password;
  private $tabid;
  public $singleton;

  //(créé une nouvelle entrée en base avec les champs passés en paramètres et retourne son id
  function __construct(){
    $this->singleton = Database::getInstance();
  }

  public function save()
  {
    $stmt =  $this->singleton->getDatabase()->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':password', $this->password);
    return $stmt->execute();
  }

  public function get_id()
  {
    $req = $this->singleton->getDatabase()->prepare("SELECT `id` FROM `users` WHERE `email` = :email AND `password` = :password");
    $req->bindParam(':email', $this->email);
    $req->bindParam(':password', $this->password);
    $req->execute();
    // var_dump($req->fetch());
    return $row = $req->fetch();
  }
  
  // (récupère une entrée en base suivant l’id de l’user)
  function get_user() 
  {
    $req = $this->singleton->getDatabase()->prepare("SELECT * FROM users WHERE id=:id");
    $req->bindParam(':id', $this->tabid);
    $req->execute();
    // var_dump($req->fetch());
    return $row = $req->fetch();
  }

  function read_all_user(){
    $req = $this->singleton->getDatabase()->query("SELECT * FROM users");
    return $row = $req->fetch();
  }

  function update_user(){
    $req = $this->singleton->getDatabase()->prepare("UPDATE users SET WHERE id=:id");
    $req->bindParam(':id', $id);
    return $row = $req->execute();
  }

  function delete_user(){
    $req = $this->singleton->getDatabase()->prepare("DELETE FROM users WHERE id=:id");
    $req->bindParam(':id', $id);
    return $row = $req->execute();
  }


  function getEmail(){
    return $this->email;
  }

  function setEmail($email){
    $this->email = $email;
  }

  function getPass(){
    return $this->password;
  }

  function setPass($password){
    $this->password = $password;
  }

  function getId(){
    return $this->tabid;
  }

  function setId($tabid){
    $this->tabid = $tabid;
  }
}
