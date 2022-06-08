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
        <p>Voeg hier een nieuwe contact toe!</p>
        <form action="#" method="post">
            <label for="naam">Naam contact</label>
            <input type="text" name="naam" placeholder="Naam contact" required>
            <label for="email">Email contact</label>
            <input type="text" name="email" placeholder="Email contact" id="email" required>
            <label for="titel">titel contact</label>
            <input type="text" name="titel" placeholder="Titel contact" id="titel" required>
            <label for="bericht">Bericht contact</label>
            <input type="text" name="bericht" placeholder="Bericht contact" id="bericht" required>
            <input type="submit" name="create" value="submit"><br>
            <a href="http://localhost/CRUD/admin.php">Ga terug</a>
        </form>
    </div>
    <div class="create_form_review">
        <p>Voeg hier een nieuwe review toe!</p>
        <form action="#" method="post">
            <label for="naam">Naam review</label>
            <input type="text" name="naam" placeholder="Naam review" required>
            <label for="titel">Email review</label>
            <input type="text" name="titel" placeholder="Titel review" id="titel" required>
            <label for="bericht">Titel review</label>
            <input type="text" name="bericht" placeholder="Bericht review" id="bericht" required>
            <label for="rating">Rating review</label>
            <input type="text" name="rating" placeholder="Rating review" id="rating" required>
            <input type="submit" name="create" value="submit">
            <a href="http://localhost/CRUD/admin.php">Ga terug</a>
        </form>
    </div>
</body>

</html>