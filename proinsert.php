<?php 

$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

$db = new PDO ('mysql:host=localhost;dbname=fumafu', 'root', '');
$query = $db->query("insert into mahasiswa values ('','$nama','$jurusan')");

if($query){
    header("Location:index.php");
}