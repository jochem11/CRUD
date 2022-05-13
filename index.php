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
              <input list="landen" name="landen" placeholder="from" required />
              <datalist id="landen">
                <option value="Nederland">Nederland</option>
                <option value="België">België</option>
                <option value="Duitsland">Duitsland</option>
                <option value="Polen">Polen</option>
                <option value="Spanje">Spanje</option>
                <option value="Frankrijk">Frankrijk</option>
                <option value="Griekenland">Griekenland</option>
              </datalist>
            </div>
            <div class="van-waar">
              <input list="landen2" name="landen2" placeholder="to" required />
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
          <div class="rij2">
            <div class="rij2Blok">
              <i class="fa-solid fa-calendar"></i>
              <input type="datetime-local" name="date" required />
            </div>
            <div class="rij2Blok">
              <i class="fa-solid fa-users"></i>
              <input
                type="number"
                name="aantal"
                placeholder="amount"
                value="2"
                min="0"
                required
              />
            </div>
            <div class="rij2Blok">
              <i class="fa-brands fa-atlassian"></i>
              <select name="class" required>
                <option value="First_Class">First Class</option>
                <option value="Second_Class">Second Class</option>
              </select>
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
