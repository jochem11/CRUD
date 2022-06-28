<?php
include_once('../includes/connect.php');

if (isset($_POST['naam']) && isset($_POST['email']) && isset($_POST['titel']) && isset($_POST['bericht'])) {

    $sql_contact = "INSERT INTO contact (naam, email, titel, bericht) VALUES(:naam, :email, :titel, :bericht)";

    $stmt_contact = $connect->prepare($sql_contact);
    $stmt_contact->bindParam(":naam", $_POST['naam']);
    $stmt_contact->bindParam(":email", $_POST['email']);
    $stmt_contact->bindParam(":titel", $_POST['titel']);
    $stmt_contact->bindParam(":bericht", $_POST['bericht']);
    $stmt_contact->execute();

    header("Location: http://localhost/CRUD/admin.php");
    exit();
}

if (isset($_POST['naam']) && isset($_POST['titel']) && isset($_POST['bericht']) && isset($_POST['rating'])) {

    $sql_review = "INSERT INTO review (naam, titel, bericht, rating) VALUES(:naam, :titel, :bericht, :rating)";

    $stmt_review = $connect->prepare($sql_review);
    $stmt_review->bindParam(":naam", $_POST['naam']);
    $stmt_review->bindParam(":titel", $_POST['titel']);
    $stmt_review->bindParam(":bericht", $_POST['bericht']);
    $stmt_review->bindParam(":rating", $_POST['rating']);
    $stmt_review->execute();

    header("Location: http://localhost/CRUD/admin.php");
    exit();
}

if (isset($_POST['naam']) && isset($_POST['wachtwoord']) && isset($_POST['email']) && isset($_POST['admin'])) {

    $sql_gebruiker = "INSERT INTO gebruiker (naam, wachtwoord, email, admin) VALUES(:naam, :wachtwoord, :email, :admin)";

    $stmt_gebruiker = $connect->prepare($sql_gebruiker);
    $stmt_gebruiker->bindParam(":naam", $_POST['naam']);
    $stmt_gebruiker->bindParam(":wachtwoord", $_POST['wachtwoord']);
    $stmt_gebruiker->bindParam(":email", $_POST['email']);
    $stmt_gebruiker->bindParam(":admin", $_POST['admin']);
    $stmt_gebruiker->execute();

    header("Location: http://localhost/CRUD/admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Create</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="create_form_contact">
        <p>Add here new contacts!</p>
        <form action="#" method="post">
            <label for="naam">Name contact</label>
            <input type="text" name="naam" placeholder="Naam contact" required>
            <label for="email">Email contact</label>
            <input type="text" name="email" placeholder="Email contact" id="email" required>
            <label for="titel">Title contact</label>
            <input type="text" name="titel" placeholder="Titel contact" id="titel" required>
            <label for="bericht">Message contact</label>
            <input type="text" name="bericht" placeholder="Bericht contact" id="bericht" required>
            <input type="submit" name="create" value="Submit"><br>
            <a href="http://localhost/CRUD/admin.php">Go back</a>
        </form>
    </div>
    <div class="create_form_review">
        <p>Add here new reviews!</p>
        <form action="#" method="post">
            <label for="naam">Name review</label>
            <input type="text" name="naam" placeholder="Naam review:" required>
            <label for="titel">Email review</label>
            <input type="text" name="titel" placeholder="Titel review:" id="titel" required>
            <label for="bericht">Titlte review</label>
            <input type="text" name="bericht" placeholder="Bericht review:" id="bericht" required>
            <label for="rating">Rating review</label>
            <input type="text" name="rating" placeholder="Rating review:" id="rating" required>
            <label for="van">From</label>
            <input type="text" name="van" placeholder="From:" id="van" required>
            <label for="naar">To</label>
            <input type="text" name="naar" placeholder="To:" id="naar" required>
            <input type="submit" name="create" value="Submit">
            <a href="http://localhost/CRUD/admin.php">Go back</a>
        </form>
    </div>
    <div class="create_form_gebruiker">
        <p>Add here new users!</p>
        <form action="#" method="post">
            <label for="naam">Name user</label>
            <input type="text" name="naam" placeholder="Naam user" id="naam" required>
            <label for="wachtwoord">Password user</label>
            <input type="text" name="wachtwoord" placeholder="Password user:" id="wachtwoord" required>
            <label for="email">Email user</label>
            <input type="text" name="email" placeholder="Email user:" id="email" required>
            <label for="admin">Admin value user</label>
            <input type="text" name="admin" placeholder="Set value to zero:" id="admin" required>
            <input type="submit" name="create" value="Submit"><br>
            <a href="http://localhost/CRUD/admin.php">Go back</a>
        </form>
    </div>
</body>

</html>