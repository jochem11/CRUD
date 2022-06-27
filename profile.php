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
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php include("navbar.php"); ?>
    <?php include("sidenav.php"); ?>
    <?php 
    if (isset($_SESSION['naam']) && $_SESSION['naam'] != "") {
      
    } else {
      header('location:index.php');
      session_destroy();
    }
    ?>

    <main class="main-profile">
      <div class="profilecontainer">
        <div class="profilepic">
          <img src="pictures/Profile-PNG-File.png" alt="profilepic" />
        </div>
        <div class="data">
          <form action="" method="post">
            <p>Name</p>
            <div class="input-edit">
              <input
                value="Name"
                type="input"
                class="form__field"
                placeholder="Name"
                name="Name"
                id="name"
                required
              />
              <button type="submit" name="Name">Change</button>
            </div>
            <p>e-mail</p>
            <div class="input-edit">
              <input
                value="pik@pik.pik"
                type="input"
                class="form__field"
                placeholder="e-mail"
                name="e-mail"
                id="name"
                required
              />
              <button type="submit" name="e-mail">Change</button>
            </div>
            <p>Password</p>
            <div class="input-edit">
              <input
                value="Password"
                type="password"
                class="form__field"
                placeholder="Password"
                name="password"
                id="name"
                required
              />
              <button type="submit" name="pw">Change</button>
            </div>
          </form>
        </div>
      </div>
      <div class="prevFlightsContainer">
        <h2>Previous Flights</h2>
        <div class="flightsContainer">
          <table>
            <thead>
              <tr>
                <th>From</th>
                <th>To</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nederland</td>
                <td>Bergium</td>
                <td>12:00-02-08-1989</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
    <script src="js/main.js"></script>
    <script
      src="https://kit.fontawesome.com/33689bd479.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
