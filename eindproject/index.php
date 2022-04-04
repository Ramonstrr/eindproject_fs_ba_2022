<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/066a28acd6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <title>On Course</title>
</head>
<body>

<!-- HEADER SECTION -->
<header>
    <nav>   
        <div id="nav-left">
        <a class="top-left-icon" href="./index.php" target="_self"><i class="fa-solid fa-house"></i></a>
        <a class="top-left-icon" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
        <a class="top-left-icon" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
        <a class="top-left-icon" href="https://twitter.com/?lang=nl" target="_blank"><i class="fa-brands fa-twitter-square"></i></a>
        </div>
        <div id="nav-right">
            <a href="./pages/search.php">Zoeken<i class="fa-solid fa-magnifying-glass"></i></a>
            <?php
            if (isset($_SESSION["userID"])) {
                echo '<a href="./pages/profile.php" target="_self">Profiel pagina</a>';
                echo '<a href="./pages/logout.php" target="_self">Uitloggen</a>';
            } else {
                echo '<a href="./pages/signup.php" target="_self">aanmelden</a>';
                echo '<a href="./pages/login.php" target="_self">inloggen</a>';
            }
            ?>
           
        </div>
    </nav>
</header>
    
    <section id="hero-section">
        <div id="hero-content">
            
            <h1>OnCourse</h1>
            <h4>GPX route collectie</h4>
        </div>
    </section>

<!-- MAIN SECTION -->
    <main>
        <div id="featured-route">
            
        <!-- image of featured-route -->
            
        </div>
        <section id="popular-routes">
                        <!-- images of routes -->
            <h3>Populaire routes</h3>
            <div id="popular-content">
                <div class="card"><a href="./files/7heuvelen15k.gpx" download="7heuvelen15k.gpx" class="route_anchor"><img src="./images/maps/7heuvelen15.jpg" alt="7heuvelen15k"></a>
                <p>7 heuvelen 15K</p><p>De Steeg</p>
                </div>
                
                <div class="card"><a href="./files/naardermeer.gpx" download="naardermeer.gpx" class="route_anchor"><img src="./images/maps/naardermeer.jpg" alt="Naardermeer"></a>
                <p>Naardermeer</p><p>Plaats: Naarden</p>
                </div>
                <div class="card"><a href="./files/driebergen.gpx" download="driebergen.gpx" class="route_anchor"><img src="./images/maps/driebergen.jpg" alt="driebergen"></a>
                    <p>Beerschoten</p><p>Plaats: Driebergen</p>
                </div>
            </div>
        </section>
        <section id="calendar">
                        <!-- kalender section -->
            <h3>kalender</h3>
            <div id="calendar-content">
                <div class="event">
                    <div class="calendar-date">
                        <p class="event-day">vrijdag</p>
                        <p class="event-date">13</p>
                        <p class="event-month">mei</p></div>
                    <div class="event-details">
                        <p class="event-name">Koning van Spanje Trail</p> 
                        <p class="event-place">Gulpen</p> 
                        <p class="event-organisation"><a href="https://www.mudsweattrails.nl/koningvanspanje/" target="_blank">website organistie</a></p></div>
                </div>
                <div class="event">
                    <div class="calendar-date">
                        <p class="event-day">donderdag</p>
                        <p class="event-date">26</p>
                        <p class="event-month">mei</p></div>
                    <div class="event-details">
                        <p class="event-name">Wetlands Outdoor Trailrun </p> 
                        <p class="event-place">Munnekeburen</p> 
                        <p class="event-organisation"><a href="https://wetlands-outdoor.nl/" target="_blank">website organistie</a></p></div>
                </div>
                <div class="event">
                    <div class="calendar-date">
                        <p class="event-day">zaterdag</p>
                        <p class="event-date">9</p>
                        <p class="event-month">juli</p></div>
                    <div class="event-details">
                        <p class="event-name">Lage Vuursche Trail</p> 
                        <p class="event-place">Lage Vuursche</p> 
                        <p class="event-organisation"><a href="https://www.trail-running.eu/trail-events/lage-vuursche-trail/" target="_blank">website organistie</a></p></div>
                </div>
                <div class="event">
                    <div class="calendar-date">
                        <p class="event-day">zaterdag</p>
                        <p class="event-date">10</p>
                        <p class="event-month">september</p></div>
                    <div class="event-details">
                        <p class="event-name">Sint Pietersbear Trail</p> 
                        <p class="event-place">Maastricht</p> 
                        <p class="event-organisation"><a href="https://www.bearsports.nl/" target="_blank">website organistie</a></p></div>
                </div>
                

                </div>
        </section>
    </main>

<!-- FOOTER SECTION -->
<footer>
        <div id="footer-content">
            <div id="footer-left">
                <a class="footer-left-icon" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                 <a class="footer-left-icon" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
                <a class="footer-left-icon" href="https://twitter.com/?lang=nl" target="_blank"><i class="fa-brands fa-twitter-square"></i></a>
            </div>
                <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> c</p>
        </div>

</footer>
</body>
</html>
