<?php
    include('./includes/connect.php');

    //read van contact
    $sql_contact = "SELECT * FROM contact";
    $stmt_contact = $connect->prepare($sql_contact);
    $stmt_contact->execute();
    $rowCount_contact = $stmt_contact->rowCount();
    $result_contact = $stmt_contact->fetchAll(); 

    //read van review 
    $sql_review = "SELECT * FROM review";
    $stmt_review = $connect->prepare($sql_review);
    $stmt_review->execute();
    $rowCount_review = $stmt_review->rowCount();
    $result_review = $stmt_review->fetchAll(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>

    <!--table van contact-->

    <div class="contact_container_read">
        <p>Contact</p>
        <table class="table_container_read">
            <tr class="table_contact">
                <th>ID</th>
                <th>Naam</th>
                <th>Email</th>
                <th>Titel</th>
                <th>Bericht</th>
                <th>Update/Delete</th>
            </tr>
            <?php
                foreach($result_contact as $contact) {
                
            ?>
                <tr>
                    <td><?php echo $contact['ID'];?></td>
                    <td><?php echo $contact['naam'];?></td>
                    <td><?php echo $contact['email'];?></td>
                    <td><?php echo $contact['titel'];?></td>
                    <td><?php echo $contact['bericht'];?></td>
                    <td><a class="create-knop" href="create.php?id=<?php echo $rowCount_contact['ID']; ?>">
                    </a><a class="update-knop" href="php/update.php?id=<?php echo $rowCount_contact['ID']; ?>" name="update">
                    update</a>&nbsp;<a class="delete-knop" href="delete.php?id=<?php echo $rowCount_contact['ID']; ?>"  name="delete">
                    delete</a></td>
                </tr>

            <?php   }   
    
            ?>
        </table>
    </div>

        <!--table van review-->

    <div class="contact_container_review">
        <p>Review</p>
        <table class="table_container_read">
            <tr class="table_review">
                <th>ID</th>
                <th>Naam</th>
                <th>Titel</th>
                <th>Bericht</th>
                <th>Rating</th>
                <th>Update/Delete</th>
            </tr>
            <?php
                foreach($result_review as $review) {
                
            ?>
                <tr>
                    <td><?php echo $review['ID'];?></td>
                    <td><?php echo $review['naam'];?></td>
                    <td><?php echo $review['titel'];?></td>
                    <td><?php echo $review['bericht'];?></td>
                    <td><?php echo $review['rating'];?></td>
                    <td><a class="create-knop" href="create.php?id=<?php echo $rowCount_contact['ID']; ?>">
                    </a><a class="update-knop" href="php/update.php?id=<?php echo $rowCount_contact['ID']; ?>" name="update">
                    update</a>&nbsp;<a class="delete-knop" href="delete.php?id=<?php echo $rowCount_contact['ID']; ?>"  name="delete">
                    delete</a></td>
                </tr>

            <?php   }   
    
            ?>
        </table>
    </div>
    
</body>
</html>