<?php
class connect{
  public $pdo;
  public function __construct() {
      $this->pdo = new PDO('mysql:host=localhost; dbname=db_koperasi','root','');
  }
}

?>