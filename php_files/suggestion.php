<?php
session_start();
include 'conn.php';

$name = $_POST['name'];
$surname = $_POST['surename'];
$sug = $_POST['sug'];
$email = $_POST['el'];





 $sql ="INSERT INTO Suggestions(Name,SureName,sug,Email) VALUES ('$name','$surname','$sug','$email')";
 $result = $conn -> query($sql);
 header("Location: ../index.php")
?>
