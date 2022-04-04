<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="https://kit.fontawesome.com/066a28acd6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <title>Signup</title>
</head>
<body>

    <?php include('../includes/header.php') ?>

    <main>
        <div id="container-sup">
            <div id="signup">
                <form action="../includes/signup-inc.php" method="POST">
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" name="username" id="username" placeholder="Gebruikersnaam">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email">
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password" id="password" placeholder="Wachtwoord">
                    <label for="password-confirm">Wachtwoord bevestigen</label>
                    <input type="password" name="password-confirm" id="password-confirm" placeholder="Wachtwoord bevestigen">
                    <button type="submit" name="submit">Verzenden</button>
                    </form>
                    
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] ==  "emptyinput") {
                            echo "<p>Niet alle velden zijn ingevuld.</p>";
                        } else if ($_GET["error"] ==  "invalidusername") {
                            echo "<p>Geen geldige gebruiker.</p>";
                        } else if ($_GET["error"] ==  "invalidemail") {
                            echo "<p>Email is incorrect.</p>";
                        } else if ($_GET["error"] ==  "passwordnotmatching") {
                            echo "<p>De wachwoorden komen niet overeen.</p>";
                        } else if ($_GET["error"] ==  "stmtfailed") {
                            echo "<p>Er is iets niet goed gegaan.</p>";
                        } else if ($_GET["error"] ==  "userexists") {
                            echo "<p>Deze gebuiker bestaat al.</p>";
                        } else if ($_GET["error"] ==  "none") {
                            echo "<p>Bedankt voor je registratie</p>";
                        }
                    }

                    ?>
            </div>
        </div>    
    </main>
     <?php include('../includes/footer.php') ?>
</body>
</html>
