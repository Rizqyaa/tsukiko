<?php

$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$id = $_POST['id'];

$database = new PDO('mysql:host=localhost;dbname=fumafu', 'root', '');
$query = $database->query("UPDATE `mahasiswa` SET `nama` = '$nama', `jurusan` = '$jurusan' WHERE `id`= '$id'");

if($query){
    header("Location:index.php");
}