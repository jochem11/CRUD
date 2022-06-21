<?php
include_once('includes/connect.php');

if (isset($_POST['submit'])) {

    $sql = "SELECT naam FROM gebruiker WHERE naam = :naam AND wachtwoord = :wachtwoord";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->bindParam(":wachtwoord", $_POST['wachtwoord']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":admin", $_POST['admin']);
    $stmt->execute();
    $result = $stmt->fetch();


    if (isset($result['admin']) === 1) {
        session_start();

        $_SESSION["admin"] = true;

        header("Location: http://localhost/CRUD/admin.php");
        exit();
    }

    if (isset($result['gebruiker']) && $result['gebruiker'] === 'admin') {
        session_start();

        $_SESSION["admin"] = true;

        header("Location: http://localhost/CRUD/admin.php");
        exit();
    } else {
        header("Location: http://localhost/CRUD/index.php");
        exit();
    }
} else {
    header("Location: http://localhost/CRUD/index.php");
    exit();
}
