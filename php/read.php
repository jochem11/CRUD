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

//read van vluchten
$sql_vluchten = "SELECT * FROM vluchten";
$stmt_vluchten = $connect->prepare($sql_vluchten);
$stmt_vluchten->execute();
$result_vluchten = $stmt_vluchten->fetchAll();

//read van gebruiker
$sql_gebruiker = "SELECT * FROM gebruiker";
$stmt_gebruiker = $connect->prepare($sql_gebruiker);
$stmt_gebruiker->execute();
$result_gebruiker = $stmt_gebruiker->fetchAll();

//read van resetpw
$sql_resetpw = "SELECT * FROM resetpw";
$stmt_resetpw = $connect->prepare($sql_resetpw);
$stmt_resetpw->execute();
$result_resetpw = $stmt_resetpw->fetchAll();

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
                <th>Verify value</th>
                <th>From</th>
                <th>To</th>
                <th>Verify</th>
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
                echo '<td>' . $review['Verify'] . '</td>';
                echo '<td>' . $review['van'] . '</td>';
                echo '<td>' . $review['naar'] . '</td>';
                echo '<td class="verify_knop"><a href="php/verify.php?ID=' . $review['ID'] . '">Verify</a></td>';
                echo '<td class="review_update_knop"><a href="php/update.php?ID=' . $review['ID'] . '">Update</a></td>';
                echo '<td class="review_delete_knop"><a href="php/delete.php?ID=' . $review['ID'] . '">Delete</a></td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>

    <!----read van vluchten--->

    <div class="vluchten_container_read">
        <p>Flights</p>
        <p><a href="http://localhost/CRUD/php/createVlucht.php">Add here new flights!</a></p>
        <table class="table_container_read">
            <tr class="table_vluchten">
                <th>ID</th>
                <th>Total</th>
                <th>From</th>
                <th>To</th>
                <th>Begin date</th>
                <th>End date</th>
                <th>Price</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php

            foreach ($result_vluchten as $vluchten) {

                echo '<tr>';
                echo '<td>' . $vluchten['ID'] . '</td>';
                echo '<td>' . $vluchten['aantal'] . '</td>';
                echo '<td>' . $vluchten['van'] . '</td>';
                echo '<td>' . $vluchten['naar'] . '</td>';
                echo '<td>' . $vluchten['begintijd'] . '</td>';
                echo '<td>' . $vluchten['eindtijd'] . '</td>';
                echo '<td>' . $vluchten['prijs'] . '</td>';
                echo '<td>' . $vluchten['plaatje'] . '</td>';
                echo '<td class="vluchten_update_knop"><a href="php/updateVlucht.php?ID=' . $vluchten['ID'] . '">Update</a></td>';
                echo '<td class="vluchten_delete_knop"><a href="php/delete.php?ID=' . $vluchten['ID'] . '">Delete</a></td>';
                echo '</tr>';
            }
            ?>

        </table>
    </div>

    <!-----read van gebruikers------>

    <div class="gebruiker_container_read">
        <p>User</p>
        <p><a href="http://localhost/CRUD/php/create.php">Add here new users!</a></p>
        <table class="table_container_read">
            <tr class="table_gebruiker">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Admin value</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php

            foreach ($result_gebruiker as $gebruiker) {

                echo '<tr>';
                echo '<td>' . $gebruiker['ID'] . '</td>';
                echo '<td>' . $gebruiker['naam'] . '</td>';
                echo '<td>' . $gebruiker['wachtwoord'] . '</td>';
                echo '<td>' . $gebruiker['email'] . '</td>';
                echo '<td>' . $gebruiker['admin'] . '</td>';
                echo '<td class="gebruiker_update_knop"><a href="php/update.php?ID=' . $gebruiker['ID'] . '">Update</a></td>';
                echo '<td class="gebruiker_delete_knop"><a href="php/delete.php?ID=' . $gebruiker['ID'] . '">Delete</a></td>';
                echo '</tr>';
            }
            ?>

        </table>
    </div>

    <!-----radn van resetpw----->

    <div class="resetpw_container_read">
        <p>Reset password</p>
        <table class="table_container_read">
            <tr class="table_resetpw">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>New password</th>
                <th>Delete</th>
            </tr>
            <?php

            foreach ($result_resetpw as $resetpw) {

                echo '<tr>';
                echo '<td>' . $resetpw['ID'] . '</td>';
                echo '<td>' . $resetpw['naam'] . '</td>';
                echo '<td>' . $resetpw['email'] . '</td>';
                echo '<td>' . $resetpw['newpw'] . '</td>';
                echo '<td class="resetpw_delete_knop"><a href="php/delete.php?ID=' . $resetpw['ID'] . '">Delete</a></td>';
                echo '</tr>';
            }
            ?>

        </table>
    </div>
</body>

</html>