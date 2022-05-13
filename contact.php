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
    <title>Contact</title>
</head>
<body>

    <?php include ("navbar.php")?>

    <div class="contact_form">
        <form method="post">
            <label for="titel">Titel: </label><br>
            <input type="text" name="titel" id="titel" placeholder="Titel: " required><br>
            <label for="naam">Naam: </label><br>
            <input type="text" name="naam" id="naam" placeholder="Naam: " required><br>
            <label for="bericht">Bericht:</label><br>
            <input type="text" name="bericht" id="bericht" placeholder="Bericht: " required><br>
            <label for="rating">Rating: </label><br>
            <input type="text" name="rating" id="rating" placeholder="Rating: " required><br>
            <input type="submit" value="submit">
        </form>
    </div>


    <!---footer --->


</body>
</html>