<?php
// PHP for poll page - not useful on GitHub Pages, just for testing purposes
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS','');
    define('DB_NAME','dataForm');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($conn->connect_error) {
        die('Connection Failed' . $conn->connect_error);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $evil = $_POST['evil'];
        $tactician = $_POST['tactician'];
        $faction = $_POST['faction'];
        $query = $conn->prepare("INSERT INTO user_poll (mostEvilChar,bestTactician,bestFaction)
        VALUES (?,?,?)");
        $query->bind_param('sss', $evil, $tactician, $faction);
        $query->execute();
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LoGH fan site and discussions">
    <meta name="keywords" content="LoGH, Legend of the Galactic Heroes, Yang Wen-li, 
    Reinhard von Lohengramm, anime, Ginga Eiyū Densetsu, Yoshiki Tanaka">
    <meta name="author" content="Chris Moore">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legend of the Galactic Heroes Hub</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="styles.css">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KLTSZ4DFR5"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-KLTSZ4DFR5');
</script>
<body>
    <div class="nav">
        <img src="assets/icon.png" alt="LoGH Hub Icon" height="64vw" width="64vw">
        <p id="navtext">
            <a href = index.html>Home</a>
            <a href = char-analyses.html>Character Analyses</a>
            <a href = theme-discussions.html>Theme Discussions</a>
            <a href = quotes.html>Quotes</a>
            <a href = polls.html>Polls</a>
        </p>
    </div>
    <section>
        <h1>Polls</h1>
    </section>
    <section class="container">
        <form id="form1" method="POST">
            <div class="subContainer">
                <h2 style="text-align: center;">Most Evil Character in LoGH?</h2>
                <input type="radio" id="bishop" name="evil" value="bishop">
                <label for="bishop">Bishop de Villier</label><br>
                <input type="radio" id="rubinsky" name="evil" value="rubinsky">
                <label for="rubinsky">Adrian Rubinsky</label><br>
                <input type="radio" id="oberstein" name="evil" value="oberstein">
                <label for="oberstein">Paul von Oberstein</label><br>
                <input type="radio" id="braunschweig" name="evil" value="braunschweig">
                <label for="braunschweig">Duke Otho von Braunschweig</label><br>
                <input type="radio" id="trunicht" name="evil" value="trunicht">
                <label for="trunicht">Job Trunicht</label><br>
                <input type="radio" id="falk" name="evil" value="falk">
                <label for="falk">Andrew Falk</label><br>
            </div>
            <div class="subContainer">
                <h2 style="text-align: center;">Best Military Tactician in LoGH?</h2>
                <input type="radio" id="yang" name="tactician" value="yang">
                <label for="yang">Yang Wen-li</label><br>
                <input type="radio" id="reinhard" name="tactician" value="reinhard">
                <label for="reinhard">Reinhard von Lohengramm</label><br>
                <input type="radio" id="kircheis" name="tactician" value="kircheis">
                <label for="kircheis">Siegfried Kircheis</label><br>
                <input type="radio" id="mittermeyer" name="tactician" value="mittermeyer">
                <label for="mittermeyer">Wolfgang von Mittermeyer</label><br>
                <input type="radio" id="reuenthal" name="tactician" value="reuenthal">
                <label for="reuenthal">Oskar von Reuenthal</label><br>
                <input type="radio" id="julian" name="tactician" value="julian">
                <label for="julian">Julian Mintz</label><br>
                <input type="radio" id="merkatz" name="tactician" value="merkatz">
                <label for="merkatz">Willibald Joachim von Merkatz</label><br>
                <input type="radio" id="bewcock" name="tactician" value="bewcock">
                <label for="bewcock">Alexandre von Bewcock</label><br>
            </div>
            <div class="subContainer">
                <h2 style="text-align: center;">Best Faction in LoGH?</h2>
                <input type="radio" id="fpa" name="faction" value="fpa">
                <label for="fpa">Free Planets Alliance</label><br>
                <input type="radio" id="el-facil" name="faction" value="el-facil">
                <label for="el-facil">El Facil Revolutionary Government</label><br>
                <input type="radio" id="iserlohn" name="faction" value="iserlohn">
                <label for="iserlohn">Iserlohn Republic</label><br>
                <input type="radio" id="lohengramm" name="faction" value="lohengramm">
                <label for="lohengramm">New Galactic Empire (Lohengramm Dynasty)</label><br>
                <input type="radio" id="goldenbaum" name="faction" value="goldenbaum">
                <label for="goldenbaum">Galactic Empire (Goldenbaum Dynasty)</label><br>
                <input type="radio" id="fezzan" name="faction" value="fezzan">
                <label for="fezzan">Dominion of Fezzan</label><br>
                <input type="radio" id="terraists" name="faction" value="terraists">
                <label for="terraists">Terraist Church</label><br>
            </div>
            <input type="submit" value="Submit" class="button" id="column2" style="width: 5rem">
        </form>
    </section>
    <div class="space">
    </div>
    <footer>
        <p>
            <strong>Legend of the Galactic Heroes Hub | Chris Moore, 2024</strong>
        </p>
    </footer>
</body>
</html>