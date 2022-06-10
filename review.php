<?php
include('includes/connect.php');

if (isset($_POST['submit'])) {

    $sql = "INSERT INTO review (naam, titel, bericht, rating) VALUES(:naam, :titel, :bericht, :rating)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->bindParam(":titel", $_POST['titel']);
    $stmt->bindParam(":bericht", $_POST['bericht']);
    $stmt->bindParam(":rating", $_POST['rating']);
    $stmt->execute();
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet" />
    <title>Review</title>
</head>

<body>
    <?php include("navbar.php") ?>
    <div class="review_form">
        <h2>Voeg hier een review toe!</h2>
        <form method="post">
            <label for="naam">Naam: </label>
            <input type="text" name="naam" id="naam" placeholder="Naam: " required />
            <label for="titel">Titel: </label>
            <input type="text" name="titel" id="titel" placeholder="Titel: " required />
            <label for="bericht">Bericht:</label>
            <input type="text" name="bericht" id="bericht" placeholder="Bericht: " required />
            <label for="rating">Rating: </label>
            <input type="text" name="rating" id="rating" placeholder="Kies tussen de 1 en 5: " required />
            <input type="submit" value="submit" name="submit" id="submit" />
        </form>
    </div>

    <?php include("footer.php") ?>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/33689bd479.js" crossorigin="anonymous"></script>
</body>

</html>