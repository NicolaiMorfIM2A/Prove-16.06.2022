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

$sql = "SELECT Navn, Mobil, Jobb, Epost, Stilling, Avdeling FROM prove.ansatte";
$result = $kobling->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $navn = $row["Navn"];
        $mobil = $row["Mobil"];
        $jobb = $row["Jobb"];
        $Epost = $row["Epost"];
        $stilling = $row["Stilling"];
        $avdeling = $row["Avdeling"];

echo "<table>";
  echo "<tr>";
   echo "<td><img src='heskestad.jpg' alt=''></td>";
    echo "<td><img src='bøyum.jpg' alt=''></td>";
    echo "<td><img src='wold.jpg' alt=''></td>";
    echo "<td><img src='strand.jpg' alt=''></td>";
    echo "<td><img src='gudmestad.jpg' alt=''></td>";
    echo "<td><img src='vollan.jpg' alt=''></td>";
    echo "<td><img src='bye.jpg' alt=''></td>";
    echo "<td><img src='bendiksen.jpg' alt=''></td>";
    echo "<td><img src='østlie.jpg' alt=''></td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td>$navn</td>";
    echo "<td>$mobil</td>";
    echo "<td>$jobb</td>";
    echo "<td>$Epost</td>";
    echo "<td>$stilling</td>";
    echo "<td>$avdeling</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td>$navn</td>";
    echo "<td>$mobil</td>";
    echo "<td>$jobb</td>";
    echo "<td>$Epost</td>";
    echo "<td>$stilling</td>";
    echo "<td>$avdeling</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<td>$navn</td>";
    echo "<td>$mobil</td>";
    echo "<td>$jobb</td>";
    echo "<td>$Epost</td>";
    echo "<td>$stilling</td>";
    echo "<td>$avdeling</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>$navn</td>";
  echo "<td>$mobil</td>";
  echo "<td>$jobb</td>";
  echo "<td>$Epost</td>";
  echo "<td>$stilling</td>";
  echo "<td>$avdeling</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>$navn</td>";
  echo "<td>$mobil</td>";
  echo "<td>$jobb</td>";
  echo "<td>$Epost</td>";
  echo "<td>$stilling</td>";
  echo "<td>$avdeling</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>$navn</td>";
  echo "<td>$mobil</td>";
  echo "<td>$jobb</td>";
  echo "<td>$Epost</td>";
  echo "<td>$stilling</td>";
  echo "<td>$avdeling</td>";
  echo "</tr>";
echo "</table>";
        }
} else {
    echo "0 results";
}

?>

</body>
</html>