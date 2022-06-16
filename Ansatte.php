<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ansatte</title>



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

$sql = "SELECT Navn, Mobil, Jobb, Epost, Stilling, Avdeling, Bilde FROM prove.ansatte";
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
        $bilde = $row["Bilde"];

echo "<table>";
  echo "<tr>";
    echo "<td><img src='$bilde' alt=''> </td>";
    echo "<td> $navn. </td>";
    echo "<td> Mobil: $mobil  </td>";
    echo "<td> Jobbtlf: $jobb  </td>";
    echo "<td> E-post: $Epost  </td>";
    echo "<td> Stilling: $stilling  </td>";
    echo "<td> Avdeling: $avdeling  </td>";
  echo "</tr>";
echo "</table>";
        }
} else {
    echo "0 results";
}

?>

</body>
</html>