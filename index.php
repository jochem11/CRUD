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
  <?php include("navbar.php"); ?>
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="pictures/slideshow/slider_familie.jpg" alt="slideshow familie" />
    </div>

    <div class="mySlides fade">
      <img src="pictures/slideshow/slider_new york .jpg" alt="slideshow new york" />
    </div>

    <div class="mySlides fade">
      <img src="pictures/slideshow/slider_terminal.jpg" alt="slideshow terminal" />
    </div>

    <div class="mySlides fade">
      <img src="pictures/slideshow/slider_vliegtuig.jpg" alt="slideshow vliegtuig" />
    </div>
    <div class="boekcontainer">
      <form action="" method="post">
        <div class="rij1">
          <div class="van-waar">
            <div class="labelInput">
              <label for="from">from</label>
              <input list="landen" name="landen" placeholder="from" id="from-to-boekcontainer" required />
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
        </div>
        <div class="rij2">
          <div class="rij2Blok">
            <i class="fa-solid fa-calendar"></i>
            <input type="datetime-local" name="date" placeholder="date-time" required />
          </div>
          <div class="rij2Blok">
            <i class="fa-solid fa-users"></i>
            <input type="number" name="aantal" placeholder="amount" min="0" required />
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
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 150 1440 150">
    <path fill="#0099ff" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,272C480,288,600,288,720,266.7C840,245,960,203,1080,197.3C1200,192,1320,224,1380,240L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
  </svg>
  <div class="vluchtencontainer">
    <form action="" method="post">
      <div class="vlucht">
        <div class="plaatje">plaatje</div>
        <div class="tekst">
          <div class="van-naar">
            <div class="van">Nederland</div>
            <div class="tussenstuk">naar</div>
            <div class="naar">Italië</div>
          </div>
          <div class="tijden">
            <div class="begintijd">12:30-5-22</div>
            <div class="tot">tot</div>
            <div class="eindtijd">15:00-5-25</div>
          </div>
          <div class="zitplaatsen">zitplaatsen over: 58</div>
          <div class="prijs-aantal">
            <div class="prijs">
              <p>prijs per ticket: </br> &euro; 58,00</p>
            </div>
            <div class="aantal-pers">
              <div>
                <p>aantal tickets:</p>
                <input type="number" name="tickets" min="0">
              </div>
            </div>
          </div>
          <div class="stuur">
            <button type="submit">stuur</button>
          </div>
        </div>
      </div>
    </form>
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
  <?php include("footer.php") ?>
  <script src="js/main.js"></script>
  <script src="https://kit.fontawesome.com/33689bd479.js" crossorigin="anonymous"></script>
</body>

</html>