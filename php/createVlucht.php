<?php
include_once('../includes/connect.php');

if (isset($_POST['aantal']) && isset($_POST['van']) && isset($_POST['naar']) && isset($_POST['begintijd']) && isset($_POST['einddatum']) && isset($_POST['prijs']) && isset($_POST['plaatje'])) {

    $sql_contact = "INSERT INTO vluchten (aantal, van, naar, begintijd, einddatum, prijs, plaatje) VALUES(:aantal, :van, :naar, :begintijd, :begintijd, :eindddatum, :prijs, :plaatje)";

    $stmt_contact = $connect->prepare($sql_contact);
    $stmt_contact->bindParam(":aantal", $_POST['aantal']);
    $stmt_contact->bindParam(":van", $_POST['van']);
    $stmt_contact->bindParam(":naar", $_POST['naar']);
    $stmt_contact->bindParam(":begintijd", $_POST['begintijd']);
    $stmt_contact->bindParam(":einddatum", $_POST['einddatum']);
    $stmt_contact->bindParam(":prijs", $_POST['prijs']);
    $stmt_contact->bindParam(":plaatje", $_POST['plaatje']);
    $stmt_contact->execute();

    header("Location: http://localhost/CRUD/admin.php");
    exit();
}
