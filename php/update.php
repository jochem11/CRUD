<?php
    include('../includes/connect.php');

    if (isset($_POST['update'])) {

    $sql = "UPDATE menu SET naam = :naam, email = :email, titel = :titel, bericht = :bericht WHERE ID = :ID";
    
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['ID']);
    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":titel", $_POST['titel']);
    $stmt->bindParam(":bericht", $_POST['bericht']);
    $stmt->execute();
    
    header("Location: admin.php"); 
    exit();
        
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="update-form">
        <h2>Update hier een gerecht</h2>
        <form method="post">
            <label for="ID">Huidig ID</label>
            <input type="text" name="ID" placeholder="ID" value="<?php echo $_GET['ID']; ?>" readonly>
            <label for="naam">Naam gerecht</label>
            <input type="text" name="naam" placeholder="Naam gerecht" id="naam" required>
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="email" id="email" required>
            <label for="titel">Titel bericht</label>
            <input type="text" name="titel" placeholder="Titel bericht" id="titel" required>
            <label for="bericht">Bericht</label>
            <input type="text" name="bericht" placeholder="Bericht" id="bericht" required>
            <input type="submit" name="update" value="update">
        </form>
    </div>
</body>
</html>