<?php
include('../includes/connect.php');

// if (isset($_POST['submit'])) {

//     $sql = "SELECT naam FROM gebruiker WHERE naam = :naam AND wachtwoord = :wachtwoord";
//     $stmt = $connect->prepare($sql);
//     $stmt->bindParam(":naam", $_POST['naam']);
//     $stmt->bindParam(":wachtwoord", $_POST['wachtwoord']);
//     $stmt->bindParam(":email", $_POST['email']);
//     $stmt->bindParam(":admin", $_POST['admin']);
//     $stmt->execute();
//     $result = $stmt->fetch();


//     if (isset($result['admin']) === 1) {
//         session_start();

//         $_SESSION["admin"] = true;

//         header("Location: http://localhost/CRUD/admin.php");
//         exit();
//     }

//     if (isset($result['gebruiker']) && $result['gebruiker'] === 'admin') {
//         session_start();

//         $_SESSION["admin"] = true;

//         header("Location: http://localhost/CRUD/admin.php");
//         exit();
//     } else {
//         header("Location: http://localhost/CRUD/index.php");
//         exit();
//     }
// } else {
//     header("Location: http://localhost/CRUD/index.php");
//     exit();
// }

// $query = "SELECT * FROM gebruiker";
// $stmt = $connect->prepare($query);
// $stmt->execute();
// $result = $stmt->fetchAll();
// foreach($result as $account) {
//         if($_POST['naam'] == $account['naam'] && $_POST['wachtwoord'] == $account['wachtwoord']) {
//             if ($account['admin'] == "1") {
//                 session_start();
//                 $_SESSION['username'] = $account['naam'];
//                 $_SESSION['admin'] = true;
//                 header("location: ../admin.php");
//             }
//             elseif ($account['admin'] == "0") {
//                 session_start();
//                 $_SESSION['username'] == $account['naam'];
//                 $_SESSION['admin'] == false;
//                 header("location: ../admin.php");
//             } else {
//                 echo "alles is kut";
//                 header("location: ../admin.php");
//             }
//         } else {
//             echo "test";
//         }
//     }

if (isset($_POST["submit"])) { 
    $query = "SELECT * FROM gebruiker WHERE naam = :naam AND wachtwoord = :wachtwoord";
    $stmt = $connect->prepare($query);
    $stmt->bindParam(":naam", $_POST["naam"]);
    $stmt->bindParam(":wachtwoord", $_POST["wachtwoord"]);
    $stmt->execute();
    $user = $stmt->fetch();
    if ($user['admin'] == 1) {
        session_start();
        $_SESSION['ID'] = $user['ID'];
        $_SESSION['admin'] = true;
        $_SESSION['loggedIn'] = true;
        $_SESSION['naam'] = $user["naam"];
        $_SESSION['wachtwoord'] = $user["wachtwoord"];
        $_SESSION['email'] = $user["email"];
        header("location: ../admin.php");
    } else {
        session_start();
        $_SESSION['ID'] = $user['ID'];
        $_SESSION['admin'] = false;
        $_SESSION['loggedIn'] = true;
        $_SESSION['naam'] = $user["naam"];
        $_SESSION['wachtwoord'] = $user["wachtwoord"];
        $_SESSION['email'] = $user["email"];
        header("location: ../profile.php");
    }
}
