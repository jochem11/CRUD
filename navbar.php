<div class="navbar">
      <div class="logoContainer">
        <a href="index.php"><img src="pictures/nieuwe_logo.png" alt="logo" /></a>
        <h1><a href="index.php">CRUDairlines</a></h1>
      </div>
      <div class="linkjesRechts">
        <a href="contact.php"><div class="contact">
          <i class="fa-solid fa-id-card-clip"></i>
          <p>contact</p>
        </div></a>
        <div class="login" id="loginBtn">
          <i class="fa-solid fa-user-tie"></i>
          <p>login</p>
        </div>
        <div class="login" id="signUpBtn">
          <i class="fa-solid fa-person-circle-plus"></i>
          <p>sign up</p>
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