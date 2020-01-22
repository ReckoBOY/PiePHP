<?php

namespace Core;
use PDO;

class Database {
   private static $instance = null;
   private $db;

   private function __construct()
   {
      try {
      $this->db = new PDO('mysql:host=localhost;dbname=piepphp;charset=utf8', 'root', '');     
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      die('DB Exception: ' . $e->getMessage());
    }
   }

   public static function getInstance()
   {
     if (self::$instance == null)
     {
       self::$instance = new Database();
      }
      return self::$instance;
    }
    
    public function getDatabase()
    {
     return $this->db;
   }
}