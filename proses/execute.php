<?php
require_once 'db/initial.php';
  if (isset($_POST['add_anggota'])) {
    
    $values = [
        $nama = $_POST['nama'],
        $alamat = $_POST['alamat'],
        $tgl_lahir = $_POST['tgl_lahir'],
        $tmpt_lahir = $_POST['tmpt_lahir'],
        $telp = $_POST['no_telp']
    ];

    $add = $addAnggota->add($values);
    
    if ($add) header('Location: ./index.php');

  }