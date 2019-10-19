<?php
try {
    $conn = new PDO("mysql:localhost","db_koperasi","root","");
} catch (\Throwable $conn) {
    throw $conn;
}
    


?>