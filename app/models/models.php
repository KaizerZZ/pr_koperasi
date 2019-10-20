<?php
    require_once 'app/config/config.php';
    class models extends connect{
        public function __construct() {
            parent::__construct();
        }
        public function selectAll($table){
            $select = $this->pdo->prepare("SELECT * FROM $table");
            $select->execute();
            return $select;
        }
        
        public function deleteById($table,$id){
            $delete = $this->pdo->prepare("DELETE FROM $table WHERE id = $id");
            $delete->execute();
        }
    }
   
