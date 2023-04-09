<?php
require_once 'config.php';
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    

    echo $nim."".$nama;
    $insert = "insert into mahasiswa (nim, nama) values('$nim', '$nama')";
    
    try{
        $prepared = $db->prepare($insert);
        $prepared->execute();
        echo "Insert data berhasil. Anda bisa lihat datanya di tautan  <a href = 'mahasiswa.php'>berikut";
    }
    catch (Execution $e){
        echo "Error insert data :".$e->getMessage();
    }
?>