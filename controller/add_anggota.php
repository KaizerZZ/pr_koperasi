<?php
require_once './db/initial.php';

class AddAnggota extends Database
{
    public function __construct() {
        parent::__construct();
    }
    public function add($value){
        $query = $this->conn->query(
            "INSERT INTO $this->table VALUES(
            NULL, '$value[0]', '$value[1]', '$value[2]', '$value[3]', 
            'null', 'Aktif', '$value[4]', 'tidak ada')"
        );
        if ($query) {
            return true;
        }
    }
}