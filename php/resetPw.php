<?php
include_once('../includes/connect.php');
$sql = "INSERT INTO resetpw (naam, email, newpw) VALUES (:naam, :email, :newpw)";
$stmt = $connect->prepare($sql);
$stmt->bindParam(":naam", $_POST['naam']);
$stmt->bindParam(":email", $_POST['email']);
$stmt->bindParam(":newpw", $_POST['newpw']);
$stmt->execute();
header("location: ../index.php");