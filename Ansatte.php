<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ansatte</title>

    <style>
        #rows {
            display: flex;
            flex-direction: row;
        }

        #infoscreen {
            display: flex;
            flex-direction: column;
        }

    </style>

</head>
<body>

<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "prove";

$kobling = new mysqli($servername, $username, $password, $dbname);
if ($kobling->connect_error) {
  die("Connection failed: " . $kobling->connect_error);
}

echo "<div id='rows'>"; 
    echo "<div id='infoscreen'>";
    echo "<img src='heskestad.jpg' alt=''>";
    echo "</div>";
echo "</div>";

?>

</body>
</html>