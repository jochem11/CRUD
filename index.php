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
  <div class="reviewcontainer">
    <div class="bovenbalk">
      <div class="filterButton" id="filerbutton">
        <div class="button" id="filter">
          <img src="pictures/filterLogo.png" alt="filetr" width="30%" height="100%">
          <p>filter</p>
        </div>
      </div>
      <div class="MakeReview">
        <button>make your review</button>
      </div>
      <div class="aantalReviews">
        <p>reviews(20)</p>
      </div>
      <div class="filters" id="filters">
        <form action="" method="post">
          <div class="from-to">
            <div class="from">
              <div>
                <p>from</p>
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
            <div class="to">
              <div>
                <p>to</p>
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
          </div>
          <div class="title">
            <div>
              <p>title</p>
              <input type="text" placeholder="title" name="title">
            </div>
          </div>
          <div class="bericht">
            <div>
              <p>bericht</p>
              <textarea name="bericht" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="rating">
            <div>
              <p>rating</p>
              <select name="rating">
                <option value="1">&#9733;</option>
                <option value="2">&#9733; &#9733;</option>
                <option value="3">&#9733; &#9733; &#9733;</option>
                <option value="4">&#9733; &#9733; &#9733; &#9733;</option>
                <option value="5">&#9733; &#9733; &#9733; &#9733; &#9733;</option>
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="reviews">
      <div class="review">
        <div class="user">
          <p>UserName</p>
        </div>
        <div class="from-to">
          <div class="tekst">
            <p>trip:</p>
          </div>
          <div class="from">
            <p>Nederland</p>
          </div>
          <div class="tussenstuk">
            <p> --- </p>
          </div>
          <div class="to">
            <p>Nederland</p>
          </div>
        </div>
        <div class="title">
          <h4>Title</h4>
        </div>
        <div class="message">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit enim, quasi, harum delectus temporibus hic officiis amet sint corporis cupiditate eveniet veniam repellat maxime animi impedit voluptas, eligendi facere! Similique nemo officia cupiditate nostrum rem beatae. Eos, illum iusto non sint facere pariatur ut incidunt maxime. Perferendis consequatur perspiciatis voluptate?
          </p>
        </div>
        <div class="rating">
          <p>
            rating: &#9733; &#9733; &#9733; &#9733; &#9733;
          </p>
        </div>
        <div class="ratereview">
          <p>rate this review:</p>
          <form action="" method="post">
            <select name="rating">
              <option value="1">&#9733;</option>
              <option value="2">&#9733; &#9733;</option>
              <option value="3">&#9733; &#9733; &#9733;</option>
              <option value="4">&#9733; &#9733; &#9733; &#9733;</option>
              <option value="5">&#9733; &#9733; &#9733; &#9733; &#9733;</option>
            </select>
            <button type="submit">Rate</button>
          </form>
        </div>
      </div>
      </form>
    </div>
  </div>
  </div>
  <div class="NewReviewContainer">
    <div class="NewReview">
      <form action="" method="post">
        <div class="from-to">
          <div class="from">
            <div>

            </div>
          </div>
          <div class="to"></div>
        </div>
      </form>
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
  <div class="logincontainer" id="logincontainer">
    <div class="loginveld">
      <div class="pictureContainer">
        <img src="pictures/loginPicture.png" alt="loginPicture" />
      </div>
      <div class="invoerContainer">
        <form method="post" action="php/checklogin.php">
          <p>Name</p>
          <input type="text" name="naam" placeholder="name:" required />
          <p>Password</p>
          <input type="password" name="wachtwoord" placeholder="password:" required />
          <input type="submit" value="send"></input>
        </form>
      </div>
    </div>
  </div>
  <?php include("footer.php") ?>
  <script src="js/main.js"></script>
  <script src="https://kit.fontawesome.com/33689bd479.js" crossorigin="anonymous"></script>
</body>

</html>