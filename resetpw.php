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
    <?php
    include("includes/connect.php");
    include("navbar.php");
    ?>
    <form action="php/resetPw.php" method="post" class="fromResetpw">
        <p>naam</p>
        <input type="text" name="naam">
        <p>e-mail</p>
        <input type="email" name="email">
        <p>New Password</p>
        <input type="text" name="newpw"> <br>
        <button type="submit">reset passoword</button>
    </form>
</body>
</html>