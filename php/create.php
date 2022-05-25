<?php
    include_once('../includes/connect.php');
    
    if(isset($_POST['naam']) && isset($_POST['email']) && isset($_POST['titel']) && isset($_POST['bericht'])) {
        
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
    <div class="create-form">
    <p>Voeg hier een gerecht toe</p>
        <form action="create.php" method="post">
            <label for="naam">Naam contact</label>
            <input type="text" name="naam" placeholder="Naam contact" required>
            <label for="email">Email contact</label>
            <input type="text" name="email" placeholder="Email contact" id="email" required>
            <label for="titel">titel contact</label>
            <input type="text" name="titel" placeholder="Titel contact" id="titel" required>
            <label for="bericht">Bericht contact</label>
            <input type="text" name="bericht" placeholder="Bericht contact" id="bericht" required>
            <input type="submit" name="sumbit" value="create">
        </form>
    </div>
</body>
</html>