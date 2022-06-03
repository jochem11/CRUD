<?php
include_once('../includes/connect.php');

if (isset($_POST['create_contact'])) {

    $sql = "INSERT INTO contact (naam, email, titel, bericht) VALUES(:naam, :email, :titel, :bericht)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":titel", $_POST['titel']);
    $stmt->bindParam(":bericht", $_POST['bericht']);
    $stmt->execute();

    header("Location: http://localhost/CRUD/admin.php");
    exit();
}

if (isset($_POST['create_review'])) {
    $sql = "INSERT INTO review (naam, titel, bericht, rating) VALUES(:naam, :titel, :bericht, :rating)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->bindParam(":titel", $_POST['titel']);
    $stmt->bindParam(":bericht", $_POST['bericht']);
    $stmt->bindParam(":rating", $_POST['rating']);
    $stmt->execute();

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
    <title>Create</title>
</head>

<body>
    <div class="create-form-contact">
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
            <input type="submit" name="create_contact" value="submit">
        </form>
    </div>
    <div class="return_create_contact_button">
        <a href="http://localhost/CRUD/admin.php">Ga terug</a>
    </div>
    <div class="create-form-review">
        <p>Voeg hier een nieuwe review toe!</p>
        <form action="#" method="post">
            <label for="naam">Naam review</label>
            <input type="text" name="naam" placeholder="Naam contact" required>
            <label for="titel">Email review</label>
            <input type="text" name="titel" placeholder="Titel review" id="titel" required>
            <label for="bericht">Titel review</label>
            <input type="text" name="bericht" placeholder="Bericht review" id="bericht" required>
            <label for="rating">Rating review</label>
            <input type="text" name="rating" placeholder="Rating review" id="rating" required>
            <input type="submit" name="create_review" value="submit">
        </form>
    </div>
    <div class="return_create_review_button">
        <a href="http://localhost/CRUD/admin.php">Ga terug</a>
    </div>
</body>

</html>