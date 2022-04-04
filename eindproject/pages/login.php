<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/066a28acd6.js" crossorigin="anonymous"></script>
    <title>Log in</title>
</head>
<body>
    
    <?php include('../includes/header.php') ?>
    
    <main>
        <div id="container">
            <div id="login">
            <form action="../includes/login-inc.php" method="POST">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email">
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password" id="password" placeholder="Wachtwoord">
                    <button type="submit" name="submit">Verzenden</button>
                    </form>
            </div>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] ==  "emptyinput") {
                    echo "<p>Niet alle velden zijn ingevuld.</p>";
                } else if ($_GET["error"] ==  "wronglogin") {
                    echo "<p>Gegevens incorrect!</p>";
                }
            }

            ?>
        </div>

    </main>
    <?php include('../includes/footer.php') ?>
</body>
</html>
