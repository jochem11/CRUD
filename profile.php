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
    <div class="sidenav">
      <div class="content">
        <a href="#"
          >profile
          <p><i class="fa-solid fa-user"></i></p
        ></a>
        <a href="#"
          >booked flights
          <p><i class="fa-solid fa-plane-departure booked_flights"></i></p
        ></a>
        <a href="#"
          >cancelled flights
          <p><i class="fa-solid fa-plane-circle-xmark cancelled_flights"></i></p
        ></a>
      </div>
    </div>
    <main></main>
    <script src="js/main.js"></script>
    <script
      src="https://kit.fontawesome.com/33689bd479.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
