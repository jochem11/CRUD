<?php
include_once('../includes/connect.php');

$sql = "INSERT INTO review (/*naam,*/ van, naar, titel, bericht, rating) VALUES (/*:naam,*/ :van, :naar, :titel, :bericht, :rating)";

// $stmt->bindParam(":naam", $_POST['name']);

$stmt = $connect->prepare($sql);

$stmt->bindParam(":van", $_POST['from']);

$stmt->bindParam(":naar", $_POST['to']);

$stmt->bindParam(":titel", $_POST['title']);

$stmt->bindParam(":bericht", $_POST['message']);

$stmt->bindParam(":rating", $_POST['rating']);

$stmt->execute();

header("location: ../index.php");