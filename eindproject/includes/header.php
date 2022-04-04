<?php
 session_start();
?>

<header>
    <nav>   
        <div id="nav-left">
        <a class="top-left-icon" href="../index.php" target="_self"><i class="fa-solid fa-house"></i></a>
        <a class="top-left-icon" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
        <a class="top-left-icon" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
        <a class="top-left-icon" href="https://twitter.com/?lang=nl" target="_blank"><i class="fa-brands fa-twitter-square"></i></a>
        </div>
        <div id="nav-right">
            <a href="../pages/search.php">Zoeken<i class="fa-solid fa-magnifying-glass"></i></a>
            <?php
            if (isset($_SESSION["userID"])) {
                echo '<a href="../pages/profile.php" target="_self">Profiel pagina</a>';
                echo '<a href="../pages/logout.php" target="_self">Uitloggen</a>';
            } else {
                echo '<a href="../pages/signup.php" target="_self">aanmelden</a>';
                echo '<a href="../pages/login.php" target="_self">inloggen</a>';
            }
            ?>
           
        </div>
    </nav>
</header>
