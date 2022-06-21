<?php
include('./includes/connect.php');

//read van contact
$sql_contact = "SELECT * FROM contact";
$stmt_contact = $connect->prepare($sql_contact);
$stmt_contact->execute();
$result_contact = $stmt_contact->fetchAll();

//read van review 
$sql_review = "SELECT * FROM review";
$stmt_review = $connect->prepare($sql_review);
$stmt_review->execute();
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
        <p><a href="http://localhost/CRUD/php/create.php">Add here new a contact!</a></p>
        <table class="table_container_read">
            <tr class="table_contact">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Title</th>
                <th>Message</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php

            foreach ($result_contact as $contact) {

                echo '<tr>';
                echo '<td>' . $contact['ID'] . '</td>';
                echo '<td>' . $contact['naam'] . '</td>';
                echo '<td>' . $contact['email'] . '</td>';
                echo '<td>' . $contact['titel'] . '</td>';
                echo '<td>' . $contact['bericht'] . '</td>';
                echo '<td class="contact_update_knop"><a href="php/update.php?ID=' . $contact['ID'] . '">Update</a></td>';
                echo '<td class="contact_delete_knop"><a href="php/delete.php?ID=' . $contact['ID'] . '">Delete</a></td>';
                echo '</tr>';
            }
            ?>

        </table>
    </div>

    <!--table van review-->

    <div class="review_container_read">
        <p>Review</p>
        <p><a href="http://localhost/CRUD/php/create.php">Add here new reviews!</a></p>
        <table class="table_container_review">
            <tr class="table_review">
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>Message</th>
                <th>Rating</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php

            foreach ($result_review as $review) {

                echo '<tr>';
                echo '<td>' . $review['ID'] . '</td>';
                echo '<td>' . $review['naam'] . '</td>';
                echo '<td>' . $review['titel'] . '</td>';
                echo '<td>' . $review['bericht'] . '</td>';
                echo '<td>' . $review['rating'] . '</td>';
                echo '<td class="review_update_knop"><a href="php/update.php?ID=' . $review['ID'] . '">Update</a></td>';
                echo '<td class="review_delete_knop"><a href="php/delete.php?ID=' . $review['ID'] . '">Delete</a></td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>

</body>

</html>