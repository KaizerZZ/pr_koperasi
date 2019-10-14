<?php
require_once 'db/initial.php';
  if (isset($_POST['add_anggota'])) {
    
    $values = [
        
    ];

    $add = $addAnggota->add($values);
    
    if ($add) header('Location: ./index.php');

  }