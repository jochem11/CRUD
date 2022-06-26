<?php
// include_once("includes/session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Admin</title>
</head>

<body>
    <div class="navbar_admin">
        <nav>
            <ul>
                <li><a href="index.php">Log out</a></li>
                <li><a href="admin.php">Home admin</a></li>
            </ul>
        </nav>
    </div>
    <div class="welkom_admin">
        <p>Welcome admin</p>
        <div class="content_contact_admin">
            <?php include('./php/read.php') ?>
        </div>
    </div>
</body>

</html>