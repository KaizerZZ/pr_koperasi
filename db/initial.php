<?php
  require_once 'connection.php';
  //load all controller
  spl_autoload_register(
    function($controller){
        require_once './controller/'.$controller.'.php';
    }
  );
  $db = new Database();
  $addAnggota = new AddAnggota();