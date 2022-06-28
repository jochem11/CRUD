<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CRUD Airlines</title>
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet" />
</head>
<body>
    <?php
    include("sidenav.php");
    include("navbar.php");
    ?>
    <main class="main-profile">
        <h2 class="h2">Booked Flights</h2>
        <div class="BookedFlightsContainer">
            <table>
                <thead>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Date-Time</th>
                        <th>Passagers</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once('includes/connect.php');
                    $query = "SELECT * FROM bookedflights WHERE userid = '".$_SESSION['ID']."'";
                    $stmt = $connect->prepare($query);
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach($result as $flight) {
                    ?>
                    <tr>
                        <td><?php echo $flight['van']; ?></td>
                        <td><?php echo $flight['naar']; ?></td>
                        <td><?php echo $flight['tijd']; ?></td>
                        <td><?php echo $flight['passagers']; ?></td>
                        <td>&euro; <?php echo $flight['price']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </main>
    <?php include("footer.php") ?>
    <script src="js/main.js"></script>
  <script src="https://kit.fontawesome.com/33689bd479.js" crossorigin="anonymous"></script>
</body>
</html>