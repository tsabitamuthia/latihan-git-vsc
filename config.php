<?php 

$host = "localhost";
$dbname = "mahasiswa";
$username = "mahasiswa";
$password = "130902";

try{
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Koneksi sukses"."</br>";
}
catch(PDOExecution $e){
    die('Error:'.$e->getMessage());
}
?>