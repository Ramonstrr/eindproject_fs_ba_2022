<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/066a28acd6.js" crossorigin="anonymous"></script>
    <title>Profiel pagina</title>
</head>
<body>
<?php
    include('../includes/header.php');
    require_once("../includes/db-connect.php");
$id = $_SESSION['userID'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE userID='$id'");
$row = mysqli_fetch_array($query);
?>
<main>
  <h1>Welkom<?php echo " " . $row['userName']; ?></h1>
  <h3>Werk hier je profiel bij</h3>
<div id="container">
        <form action="../pages/profile.php" method="POST">
          <input type="text" name="username" placeholder="Gerbuikersnaam" value="<?php echo $row['userName']; ?>">
          <input type="text" name="email" placeholder="Email" value="<?php echo $row['userEmail']; ?>">
          <input type="text" name="fullname" placeholder="Voor en achternaam" value="<?php echo $row['userFname']; ?>">
          <input type="text" name="age" placeholder="Leeftijd" value="<?php echo $row['userAge']; ?>">
          <input type="text" name="favroute" placeholder="Jouw favoriete rondje" value="<?php echo $row['userFcourse']; ?>">
          <button type="submit" name="submit">Verzenden</button>
        
        <?php
        if (isset($_POST['submit'])) {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $fullname = $_POST['fullname'];
            $age = $_POST['age'];
            $favcourse = $_POST['favroute'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div>Geen geldige eamil!</div>";
            }
            if (!is_numeric($age)) {
                echo "<div>Geen geldige leeftijd!</div";
            }

            $query = "UPDATE users SET userName = '$username', userEmail = '$email', userAge = $age, userFname = '$fullname', userFcourse = '$favcourse' WHERE userID = '$id'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            
            echo "<div>update succesvol!</div>";
            header("refresh:2; url=../index.php");
        }              
        ?>
        </form>
      </div>
      </main>
      <?php include('../includes/footer.php') ?>
</body>
</html>
