<?php
session_start();
include_once('../includes/connect.php');
if (!isset($_SESSION['loggedIn'])) {
    header("location: ../index.php");
} else {
    $sql = "INSERT INTO bookedflights (userid, van, naar, tijd, passagers, price) VALUES (:userid, :van, :naar, :tijd, :passagers, :prijs)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":userid", $_SESSION['ID']);
    $stmt->bindParam(":van", $_POST['van']);
    $stmt->bindParam(":naar", $_POST['naar']);
    $stmt->bindParam(":tijd", $_POST['tijd']);
    $stmt->bindParam(":passagers", $_POST['aantal-tickets']);
    $aantalTickets = $_POST['aantal-tickets'];
    echo $aantalTickets;
    $intvalue = intval($aantalTickets);
    $prijs1 = $_POST['prijs'];
    $intvalue2 = intval($prijs1);
    $prijs = $intvalue * $intvalue2;
    $stmt->bindParam(":prijs", $prijs);
    $stmt->execute();
    header("location: ../index.php");
}