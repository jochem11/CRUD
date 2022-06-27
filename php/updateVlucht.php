<?php
include_once("../includes/connect.php");

if (isset($_POST['update'])) {

    //contact update query
    $sql_vluchten = "UPDATE vluchten SET aantal = :aantal, van = :van, naar = :naar, begintijd = :begintijd, eindtijd = :eindtijd, prijs = :prijs, plaatje = :plaatje WHERE ID = :ID";

    $stmt_vluchten = $connect->prepare($sql_vluchten);
    $stmt_vluchten->bindParam(":ID", $_POST['ID']);
    $stmt_vluchten->bindParam(":aantal", $_POST['aantal']);
    $stmt_vluchten->bindParam(":van", $_POST['van']);
    $stmt_vluchten->bindParam(":naar", $_POST['naar']);
    $stmt_vluchten->bindParam(":begintijd", $_POST['begintijd']);
    $stmt_vluchten->bindParam(":eindtijd", $_POST['eindtijd']);
    $stmt_vluchten->bindParam(":prijs", $_POST['prijs']);
    $stmt_vluchten->bindParam(":plaatje", $_POST['plaatje']);
    $stmt_vluchten->execute();

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
    <title>Update flights</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>

<body>

    <!---update vluchten form---->

    <div class="update_form_vluchten">
        <p>Update here the flights!</p>
        <form action="#" method="post">
            <label for="flight id">ID of flight</label>
            <input type="text" name="ID" placeholder="ID flight" value="<?php echo $_GET['ID']; ?>" readonly>
            <label for="aantal">Total people</label>
            <input type="text" name="aantal" placeholder="Total people:" required>
            <label for="van">From</label>
            <input type="text" name="van" placeholder="From:" id="van" required>
            <label for="naar">To</label>
            <input type="text" name="naar" placeholder="To:" id="naar" required>
            <label for="begintijd">Begin date</label>
            <input type="datetime-local" name="begintijd" placeholder="Begin date:" id="begintijd" required>
            <label for="eindtijd">End date</label>
            <input type="datetime-local" name="eindtijd" placeholder="End date:" id="eindtijd" required>
            <label for="prijs"> Price</label>
            <input type="text" name="prijs" placeholder="Price:" id="prijs" required>
            <label for="plaatje">Image</label>
            <input type="file" name="plaatje" placeholder="Image:" id="plaatje" required>
            <input type="submit" name="update" value="update">
            <a href="http://localhost/CRUD/admin.php">Go back</a>
        </form>
    </div>

</body>

</html>