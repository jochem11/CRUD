<?php
include('../includes/connect.php');

if (isset($_POST['update'])) {

  //contact update query
  $sql_contact = "UPDATE contact SET naam = :naam, email = :email, titel = :titel, bericht = :bericht WHERE IDcontact = :IDcontact";

  $stmt_contact = $connect->prepare($sql_contact);
  $stmt_contact->bindParam(":IDcontact", $_POST['IDcontact']);
  $stmt_contact->bindParam(":naam", $_POST['naam']);
  $stmt_contact->bindParam(":email", $_POST['email']);
  $stmt_contact->bindParam(":titel", $_POST['titel']);
  $stmt_contact->bindParam(":bericht", $_POST['bericht']);
  $stmt_contact->execute();
  header("Location: http://localhost/CRUD/admin.php");
  exit();
};

if (isset($_POST['update'])) {

  //review update query
  $sql_review = "UPDATE review SET naam = :naam, titel = :titel, bericht = :bericht, rating = :rating WHERE IDreview = :IDreview";

  $stmt_review = $connect->prepare($sql_review);
  $stmt_review->bindParam(":IDreview", $_POST['IDreview']);
  $stmt_review->bindParam(":naam", $_POST['naam']);
  $stmt_review->bindParam(":titel", $_POST['titel']);
  $stmt_review->bindParam(":bericht", $_POST['bericht']);
  $stmt_review->bindParam(":rating", $_POST['rating']);
  $stmt_review->execute();
  header("Location: http://localhost/CRUD/admin.php");
  exit();
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update</title>
</head>

<body>
  <div class="update_form_contact">
    <h2>Update hier de contact gegevens</h2>
    <form method="post" action="#">
      <label for="IDcontact">Huidig ID</label>
      <input type="text" name="IDcontact" placeholder="ID" value="<?php echo $_GET['IDcontact'] ?>" readonly />
      <label for="naam">Naam gerecht</label>
      <input type="text" name="naam" placeholder="Naam gerecht" id="naam" required />
      <label for="email">Email</label>
      <input type="text" name="email" placeholder="email" id="email" required />
      <label for="titel">Titel bericht</label>
      <input type="text" name="titel" placeholder="Titel bericht" id="titel" required />
      <label for="bericht">Bericht</label>
      <input type="text" name="bericht" placeholder="Bericht" id="bericht" required />
      <input type="submit" name="update_contact" value="update" />
    </form>
  </div>
</body>

</html>