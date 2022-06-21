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
include("navbar.php")
?>
  <main class="main-profile">
    <h2 class="h2">cancelled Flights</h2>
    <div class="CancelledFlightsContainer">
        <table>
            <thead>
                <tr>
                <table>
                <thead>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Date-Time</th>
                        <th>Passagers</th>
                        <th>Class</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Netherlands</td>
                        <td>Belguim</td>
                        <td>12:00-2-7-2024</td>
                        <td>3</td>
                        <td>First class</td>
                        <td>&euro; 69</td>
                    </tr>
                </tbody>
            </table>
                </tr>
            </thead>
        </table>
    </div>
  </main>
  <?php include("footer.php") ?>
  <script src="js/main.js"></script>
  <script src="https://kit.fontawesome.com/33689bd479.js" crossorigin="anonymous"></script>
</body>
</html>