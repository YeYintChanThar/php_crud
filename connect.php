<?php
$server = 'localhost';
$name   = 'root';
$pass   = '';
$dbname = 'basic_php_crud';
$db = mysqli_connect($server,$name,$pass,$dbname);
if($db == false){
    die('Error:'.mysqli_connect_error($db));
}

?>