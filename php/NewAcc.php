<?php
include_once('../includes/connect.php');

$sql = "INSERT INTO gebruiker (naam, wachtwoord) VALUES (:name, :pw)";

$stmt = $connect->prepare($sql);

$stmt->bindParam(":name", $_POST['name']);

$stmt->bindParam(":pw", $_POST['pw']);

$stmt->execute();

header("Location: ../index.php");