<?php
include_once ("connect.php");

$sql = "INSERT INTO gebruikers (naam, wachtwoord) VALUES (:naam, pw)";

$stmt = $connect->prepare($sql);

$stmt->bindParam(":naam", $_POST['naam']);

$stmt->bindParam(":pw", $_POST['pw']);

$stmt->execute();

header("location: index.php");