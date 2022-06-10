<?php
include_once("../includes/connect.php");

if (isset($_POST['update'])) {

  //contact update query
  $sql_contact = "UPDATE contact SET naam = :naam, email = :email, titel = :titel, bericht = :bericht WHERE ID = :ID";

  $stmt_contact = $connect->prepare($sql_contact);
  $stmt_contact->bindParam(":ID", $_POST['ID']);
  $stmt_contact->bindParam(":naam", $_POST['naam']);
  $stmt_contact->bindParam(":email", $_POST['email']);
  $stmt_contact->bindParam(":titel", $_POST['titel']);
  $stmt_contact->bindParam(":bericht", $_POST['bericht']);
  $stmt_contact->execute();

  header("Location: http://localhost/CRUD/admin.php");
  exit();
}

if (isset($_POST['updates'])) {

  //review update query
  $sql_review = "UPDATE review SET naam = :naam, titel = :titel, bericht = :bericht, rating = :rating WHERE ID = :ID";

  $stmt_review = $connect->prepare($sql_review);
  $stmt_review->bindParam(":ID", $_POST['ID']);
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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update</title>
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>

<body>

  <!---update contact form---->

  <div class="update_form_contact">
    <h2>Update hier de contact gegevens</h2>
    <form method="post" action="#">
      <label for="contact id">Huidig ID van contact</label>
      <input type="text" name="ID" placeholder="Naam gerecht" value="<?php echo $_GET['ID']; ?>" readonly>
      <label for="naam">Naam contact</label>
      <input type="text" name="naam" placeholder="Naam contact" required>
      <label for="email">Email contact</label>
      <input type="text" name="email" placeholder="Email contact" id="email" required>
      <label for="titel">titel contact</label>
      <input type="text" name="titel" placeholder="Titel contact" id="titel" required>
      <label for="bericht">Bericht contact</label>
      <input type="text" name="bericht" placeholder="Bericht contact" id="bericht" required>
      <input type="submit" name="update" value="update"><br>
      <a href="http://localhost/CRUD/admin.php">Ga terug</a>
    </form>
  </div>

  <!---update contact form---->

  <div class="update_form_review">
    <h2>Update hier de review gegevens</h2>
    <form method="post" action="#">
      <label for="review id">Huidig ID van review</label>
      <input type="text" name="ID" placeholder="ID review" value="<?php echo $_GET['ID']; ?>" readonly>
      <label for="naam">Naam review</label>
      <input type="text" name="naam" placeholder="Naam review" required>
      <label for="titel">Email review</label>
      <input type="text" name="titel" placeholder="Titel review" id="titel" required>
      <label for="bericht">Titel review</label>
      <input type="text" name="bericht" placeholder="Bericht review" id="bericht" required>
      <label for="rating">Rating review</label>
      <input type="text" name="rating" placeholder="Rating review" id="rating" required>
      <input type="submit" name="updates" value="update"><br>
      <a href="http://localhost/CRUD/admin.php">Ga terug</a>
    </form>
  </div>
</body>

</html>