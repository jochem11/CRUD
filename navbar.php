<?php
include("includes/connect.php");



if (isset($_POST['naam']) && isset($_POST['wachtwoord']) && isset($_POST['email'])) {

  $sql_contact = "INSERT INTO gebruiker (naam, wachtwoord, email) VALUES(:naam, :wachtwoord, :email)";

  $stmt_contact = $connect->prepare($sql_contact);
  $stmt_contact->bindParam(":naam", $_POST['naam']);
  $stmt_contact->bindParam(":wachtwoord", $_POST['wachtwoord']);
  $stmt_contact->bindParam(":email", $_POST['email']);
  $stmt_contact->execute();

  header("Location: http://localhost/CRUD/index.php");
  exit();
}
?>

<div class="navbar">
  <div class="logoContainer">
    <a href="index.php"><img src="pictures/nieuwe_logo.png" alt="logo" /></a>
    <h1><a href="index.php">CRUDAirlines</a></h1>
  </div>
  <div class="linkjesRechts">
    <a href="contact.php">
      <div class="contact">
        <i class="fa-solid fa-id-card-clip"></i>
        <p>contact</p>
      </div>
    </a>
    <?php
    if (isset($_SESSION['loggedIn'])) {
    ?>
    <a href="profile.php">
      <div class="login">
      <i class="fa-solid fa-user"></i>
        <p>Profile</p>
      </div>
    </a>
    <a href="php/logout.php">
      <div class="login">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        <p>Logout</p>
      </div>
    </a>
    <?php      
    } else {
    ?>
       <div class="login" id="loginBtn">
        <i class="fa-solid fa-user-tie"></i>
        <p>login</p>
       </div>
       <div class="login" id="signUpBtn">
         <i class="fa-solid fa-person-circle-plus"></i>
         <p>sign up</p>
       </div>
    <?php
    }
    ?>
  </div>
</div>
<div class="logincontainer" id="signupcontainer">
  <div class="signupContainer">
    <div class="pictureContainer">
      <img src="pictures/loginPicture.png" alt="loginPicture" />
    </div>
    <div class="invoerContainer">
      <form action="profile.php" method="post" name="signup" onsubmit="return validateForm()">
        <label for="name">Name</label>
        <input type="text" name="naam" placeholder="name:" />
        <label for="password">Password</label>
        <input type="password" name="wachtwoord" placeholder="password:" />
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="email">
        <input type="submit" name="submit" value="Make"></input>
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
      <form action="php/checklogin.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="naam" placeholder="name:" required />
        <label for="password">Password</label>
        <input type="password" name="wachtwoord" placeholder="password:" required />
        <p>forgot password: <a href="resetpw.php">reset password</a></p>
        <input type="submit" value="Log in" name="submit"></input>
      </form>
    </div>
  </div>
</div>