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
    <div class="wil_je_een_review_achterlaten">
        <h2>Do you want to leave a review?</h2>
        <h2>Then leave it behind!</h2>
    </div>
    <div class="review_form">
        <h2>Make a review!</h2>
        <form method="post">
            <label for="naam">Name: </label>
            <input type="text" name="naam" id="naam" placeholder="Name: " required />
            <label for="titel">Title: </label>
            <input type="text" name="titel" id="titel" placeholder="Title: " required />
            <label for="bericht">Message:</label>
            <input type="text" name="bericht" id="bericht" placeholder="Message: " required />
            <label for="rating">Rating: </label>
            <input type="text" name="rating" id="rating" placeholder="Choose between 1 and 5: " required />
            <input type="submit" value="submit" name="submit" id="submit" />
        </form>
    </div>

    <?php include("footer.php") ?>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/33689bd479.js" crossorigin="anonymous"></script>
</body>

</html>