<?php
include_once("../includes/connect.php");

if (isset($_POST['submit'])) {

    //review update query
    $sql_review = "UPDATE review SET Verify = :Verify WHERE ID = :ID";

    $stmt_review = $connect->prepare($sql_review);
    $stmt_review->bindParam(":ID", $_POST['ID']);
    $stmt_review->bindParam(":Verify", $_POST['Verify']);
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
    <title>Verify</title>
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="verify_form_container">
        <h2>Verify hier de review!</h2>
        <form method="post" action="#">
            <label for="review id">Huidig ID van review</label>
            <input type="text" name="ID" placeholder="ID review" value="<?php echo $_GET['ID']; ?>" readonly>
            <label for="verify">Verify review</label>
            <input type="text" name="Verify" placeholder="Verify review" id="Verify" required>
            <input type="submit" name="submit" value="Verify"><br>
            <a href="http://localhost/CRUD/admin.php">Ga terug</a>
        </form>
    </div>
</body>

</html>