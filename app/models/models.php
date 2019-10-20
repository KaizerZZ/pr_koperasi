<?php
    require_once 'app/config/config.php';
    class models extends connect{
        public function __construct() {
            parent::__construct();
        }
        public function add($table,$values){
            $add = $this->pdo->prepare("INSERT INTO $table VALUES(NULL,:nama_anggota,:alamat,:tgl_lahir,:tmpt_lahir,:no_telp)");
            $dataAnggota = array(
                ':nama_anggota' => $values[0],
                ':alamat' => $values[1],
                ':tgl_lahir' => $values[2],
                ':tmpt_lahir' => $values[3],
                ':no_telp' => $values[4]
            );
            $add->execute($dataAnggota);
        }
        public function selectAll($table,$values){
            $select = $this->pdo->prepare("SELECT * FROM $table");
            $select->execute();
            while ($data = $select->fetch()) {
                echo $data[$values[0]]." ";
                echo $data[$values[1]]." ";
                echo $data[$values[2]]." ";
                echo $data[$values[3]]." ";
                echo $data[$values[4]] ."</br>";
            }
        }
        public function deleteById($table,$id){
            $delete = $this->pdo->prepare("DELETE FROM $table WHERE id = $id");
            $delete->execute();
        }
    }
   
