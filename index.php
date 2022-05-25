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
              <div class="labelInput">
                <label for="from">from</label>
                <input
                  list="landen"
                  name="landen"
                  placeholder="from"
                  id="from-to-boekcontainer"
                  required
                />
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
            </div>
            <div class="van-waar">
              <div class="labelInput">
                <label for="to">to</label>
                <input
                  list="landen2"
                  name="landen2"
                  placeholder="to"
                  required
                />
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
          </div>
          <div class="rij2">
            <div class="rij2Blok">
              <i class="fa-solid fa-calendar"></i>
              <input
                type="datetime-local"
                name="date"
                placeholder="date-time"
                required
              />
            </div>
            <div class="rij2Blok">
              <i class="fa-solid fa-users"></i>
              <input
                type="number"
                name="aantal"
                placeholder="amount"
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
          <button type="submit">search flights</button>
        </form>
      </div>
    </div>
    <div class="logincontainer" id="logincontainer">
      <div class="loginveld">
        <div class="pictureContainer">
          <img src="pictures/loginPicture.png" alt="loginPicture" />
        </div>
        <div class="invoerContainer">
          <form action="post">
            <p>name</p>
            <input type="text" name="name" placeholder="name:" required />
            <p>password</p>
            <input type="password" name="pw" placeholder="password" required />
            <button type="submit">send</button>
          </form>
        </div>
      </div>
    </div>
    <div class="vluchtencontainer">
      <div class="vlucht">
      <div class="plaatje">plaatje</div>
        <div class="tekst">
          <div class="van-naar">
            <div class="van">van</div>
            <div class="naar">naar</div>
          </div>
          <div class="tijden">
            <div class="begintijd">begintijd</div>
            <div class="eindtijd">eindtijd</div>
          </div>
          <div class="zitplaatsen">aantal zitplaatsen</div>
          <div class="prijs-aantal">
            <div class="prijs">prijs</div>
            <div class="aantal-pers">aantal</div>
          </div>
          <div class="stuur">stuur</div>
        </div>
      </div>
    </div>
    <div class="logincontainer" id="signupcontainer">
      <div class="signupContainer">
        <div class="pictureContainer">
          <img src="pictures/loginPicture.png" alt="loginPicture" />
        </div>
        <div class="invoerContainer">
          <form action="NewAcc.php" method="post">
            <p>name</p>
            <input type="text" name="name" placeholder="name:" required />
            <p>password</p>
            <input type="password" name="pw" placeholder="password" required />
            <button type="submit">send</button>
          </form>
        </div>
      </div>
    </div>
    <?php include("footer.php")?>
    <script src="js/main.js"></script>
    <script
      src="https://kit.fontawesome.com/33689bd479.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
