<?php
    include_once("../includes/connect.php");
    
    if (isset($_GET['ID'])) {

        $sql_contact = "DELETE FROM contact WHERE ID = :ID";
        $stmt_contact = $connect->prepare($sql_contact);
        $stmt_contact->bindParam(":ID", $_GET['ID']);
        $stmt_contact->execute();

        header("Location: http://localhost/CRUD/admin.php");
        exit();
    }
    else {
        header("Location: http://localhost/CRUD/admin.php");
        exit();
    }
?>