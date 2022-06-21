<?php
session_start();

if (!isset($_SESSION['admin']) || !$_SESSION['werknemer']) {
    header("Location: http://localhost/CRUD/index.php");
    exit();
}
