<?php
include("../includes/connect.php");

if (isset($_GET['ID'])) {
    //delete contact
    $sql_contact = "DELETE FROM contact WHERE ID = :ID";
    $stmt_contact = $connect->prepare($sql_contact);
    $stmt_contact->bindParam(":ID", $_GET['ID']);
    $stmt_contact->execute();

    //delete review
    $sql_review = "DELETE FROM review WHERE ID = :ID";
    $stmt_review = $connect->prepare($sql_review);
    $stmt_review->bindParam(":ID", $_GET['ID']);
    $stmt_review->execute();

    //delete vluchten
    $sql_vluchten = "DELETE FROM vluchten WHERE ID = :ID";
    $stmt_vluchten = $connect->prepare($sql_vluchten);
    $stmt_vluchten->bindParam(":ID", $_GET['ID']);
    $stmt_vluchten->execute();

    header("Location: http://localhost/CRUD/admin.php");
    exit();
} else {
    header("Location: http://localhost/CRUD/admin.php");
    exit();
}
