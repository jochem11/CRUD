<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD Airlines</title>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
      <?php include ("navbar.php");?>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img
          src="pictures/slideshow/slider_familie.jpg"
          alt="slideshow familie"
        />
      </div>

      <div class="mySlides fade">
        <img
          src="pictures/slideshow/slider_new york .jpg"
          alt="slideshow new york"
        />
      </div>

      <div class="mySlides fade">
        <img
          src="pictures/slideshow/slider_terminal.jpg"
          alt="slideshow terminal"
        />
      </div>

      <div class="mySlides fade">
        <img
          src="pictures/slideshow/slider_vliegtuig.jpg"
          alt="slideshow vliegtuig"
        />
      </div>
      <div class="boekcontainer">
        <form action="" method="post">
          <div class="rij1">
            <div class="van-waar">
              <input list="landen" name="landen" placeholder="van" />
              <datalist id="landen">
                <option value="Nederland">Nederland</option>
                <option value="België">België</option>
                <option value="Duitsland">Duitsland</option>
                <option value="Polen">Polen</option>
                <option value="Spanje">Spanje</option>
                <option value="Frankrijk">Frankrijk</option>
                <option value="Griekenland">Griekenland</option>
              </datalist>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="logoContainer">
            <img src="pictures/nieuwe_logo.png" alt="logo">
            <h1>CRUDairlines</h1>
        </div>
        <div class="linkjesRechts">
            <div class="contact">
                <i class="fa-solid fa-id-card-clip"></i>
                <p>contact</p>
            </div>
            <div class="van-waar">
              <input list="landen2" name="landen2" placeholder="naar" />
              <datalist id="landen2">
                <option value="Nederland">Nederland</option>
                <option value="België">België</option>
                <option value="Duitsland">Duitsland</option>
                <option value="Polen">Polen</option>
                <option value="Spanje">Spanje</option>
                <option value="Frankrijk">Frankrijk</option>
                <option value="Griekenland">Griekenland</option>
              </datalist>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="js/main.js"></script>
    <script
      src="https://kit.fontawesome.com/33689bd479.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
