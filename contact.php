<?php
include('includes/connect.php');

if (isset($_POST['submit'])) {

  $sql = "INSERT INTO contact (naam, email, titel, bericht) VALUES(:naam, :email, :titel, :bericht)";

  $stmt = $connect->prepare($sql);
  $stmt->bindParam(":naam", $_POST['naam']);
  $stmt->bindParam(":email", $_POST['email']);
  $stmt->bindParam(":titel", $_POST['titel']);
  $stmt->bindParam(":bericht", $_POST['bericht']);
  $stmt->execute();
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet" />
  <title>Contact</title>
</head>

<body>
  <?php include("navbar.php"); ?>
  <div class="wil_je_contact_opnemen">
    <h2>Do you want contact us?</h2>
    <h2>We are always here for you!</h2>
  </div>
  <div class="contact_form">
    <h2>Contact us!</h2>
    <form method="post">
      <label for="titel">Titel: </label>
      <input type="text" name="titel" id="titel" placeholder="Titel: " required />
      <label for="naam">Name: </label>
      <input type="text" name="naam" id="naam" placeholder="Name: " required />
      <label for="email">Email:</label>
      <input type="text" name="email" id="email" placeholder="Email: " required />
      <label for="rating">Message: </label>
      <input type="text" name="bericht" id="bericht" placeholder="Message: " required />
      <input type="submit" value="submit" name="submit" id="submit" />
    </form>
  </div>
  <?php include("footer.php"); ?>
  <script src="js/main.js"></script>
  <script src="https://kit.fontawesome.com/33689bd479.js" crossorigin="anonymous"></script>
</body>

</html>