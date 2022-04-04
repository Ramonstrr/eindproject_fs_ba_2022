<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/066a28acd6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <title>Zoek Routes</title>
</head>
<body>
    <?php include('../includes/header.php') ?>

    <main>
        <div id="container">

        <input type="text" id="userInput" onkeyup="searchFunc()" placeholder="Zoeken..." title="Zoeken">

        <table id="options">
        <tr class="header">
            <th style="width:30%;">Naam</th>
            <th style="width:10%;">Afstand</th>
            <th style="width:20%;">Plaats</th>
            <th style="width:20%;">Land</th>
            <th style="width:10%;">GPX</th>
        </tr>
        <tr>
            <td>7 Heuvelen Trail</td>
            <td>15k</td>
            <td>De Steeg</td>
            <td>Nederland</td>
            <td><a href="../files/7heuvelen15k.gpx" download="7heuvelen15k.gpx" class="route_anchor">Download</a></td>
        </tr>
        <tr>
            <td>7 Heuvelen Trail</td>
            <td>7k</td>
            <td>De Steeg</td>
            <td>Nederland</td>
            <td><a href="../files/7heuvelen7k.gpx" download="7heuvelen7k.gpx" class="route_anchor">Download</a></td>
        </tr>
        <tr>
            <td>Beerschoten</td>
            <td>14k</td>
            <td>Driebergen</td>
            <td>Nederland</td>
            <td><a href="../files/driebergen.gpx" download="driebergen.gpx" class="route_anchor">Download</a></td>
        </tr>
        <tr>
            <td>Valkenburg Trail</td>
            <td>18k</td>
            <td>Schin op Geul</td>
            <td>Nederland</td>
            <td><a href="../files/geul-valkenburg.gpx" download="geul-valkenburg.gpx" class="route_anchor">Download</a></td>
        </tr>
        <tr>
            <td>Kennemerduinen</td>
            <td>22k</td>
            <td>Overveen</td>
            <td>Nederland</td>
            <td><a href="../files/kennemerduinen22k.gpx" download="kennemerduinen22k.gpx" class="route_anchor">Download</a></td>
        </tr>
        <tr>
            <td>Kwintelooijen</td>
            <td>14k</td>
            <td>Rhenen</td>
            <td>Nederland</td>
            <td><a href="../files/kwintelooyen22k.gpx" download="kwintelooyen22k.gpx" class="route_anchor">Download</a></td>
        </tr>
        <tr>
            <td>Den Treek</td>
            <td>15k</td>
            <td>Leusden</td>
            <td>Nederland</td>
            <td><a href="../files/leusden15k.gpx" download="leusden15k.gpx" class="route_anchor">Download</a></td>
        </tr>
        <tr>
            <td>Naardermeer</td>
            <td>20k</td>
            <td>Naarden</td>
            <td>Nederland</td>
            <td><a href="../files/naardermeer.gpx" download="naardermeer.gpx" class="route_anchor">Download</a></td>
        </tr>
        <tr>
            <td>St Pietersberg</td>
            <td>21k</td>
            <td>Maastricht</td>
            <td>Nederland</td>
            <td><a href="../files/maastricht20k.gpx" download="maastricht20k.gpx" class="route_anchor">Download</a></td>
        </tr>
        <tr>
            <td>Extra Trail Spa</td>
            <td>20k</td>
            <td>Spa</td>
            <td>Belgie</td>
            <td><a href="../files/spa20.gpx" download="spa20.gpx" class="route_anchor">Download</a></td>
        </tr>
        <tr>
            <td>Strabrechtse heide</td>
            <td>8k</td>
            <td>Heeze</td>
            <td>Nederland</td>
            <td><a href="../files/strabrechtseheide.gpx" download="strabrechtseheide.gpx" class="route_anchor">Download</a></td>
        </tr>
        <tr>
            <td>Wolfheze</td>
            <td>8k</td>
            <td>Wolfheze</td>
            <td>Nederland</td>
            <td><a href="../files/wolfheze8k.gpx" download="wolfheze8k.gpx" class="route_anchor">Download</a></td>
        </tr>
        </table>
        </div>
    </main>

    <?php include('../includes/footer.php') ?>
    <script src="../script/search-script.js"></script>
</body>
</html>
