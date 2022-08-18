<?php

$id = $_GET['id'];

$db = new PDO('mysql:host=localhost;dbname=fumafu','root','');
$query = $db->query("DELETE FROM `mahasiswa` WHERE id='$id'");

if($query){
    header("Location:index.php");
 }