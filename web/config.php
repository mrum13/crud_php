<?php
/**
 * using mysqli_connect for database connection
 */

$host = 'localhost';
$root = 'root';
$pass = '';
$db = 'tp_web8';

$sql = mysqli_connect($host, $root, $pass, $db); 
    if(!$sql){
        echo "gagal";
    }

?>