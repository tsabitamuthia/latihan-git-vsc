<a href = "form-mahaiswa.php">Tambah mahasiswa</a>

<?php
require_once 'config.php';
$sql = "select * from mahasiswa";
$query = $db->query($sql);
$rows = $query->fetchAll();

foreach($rows as $row){
   echo $row["nim"]." ".$row["nama"]."</br>";
    //echo $row[1]." ".$row[2]."</br>";
}
?>