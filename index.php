<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$db_username = "root";
$db_password = "root";
$dbname = "Připouštěcí";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodnocení her</title>
    <script src="/script/script.js" defer></script>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <main>
        <div class="container">
            <form action="" method="get">
                <div class="napis">
                    <p>Jméno(přezdívka)</p>
                    <p>Email</p>
                </div>
                <div id="next">
                    <input id="text" type="text">
                    <input id="text" type="text">
                </div>
                <input id="text" type="text">
                <div id="next-buttons">
                    <input type="button" value="">
                    <input type="button" value="">
                    <input type="button" value="">
                    <input type="button" value="">
                    <input type="button" value="">
                </div>
                <div>
                    <input class="recenze" type="text">
                </div>
                <input id="button" type="submit" value="">
                <input id="button" type="reset" value="">
            </form>
        </div>
    </main>
</body>
</html>