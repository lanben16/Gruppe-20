
<!DOCTYPE html>
<html>
<head>
    


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="test.css">

    
<title>Westerdals</title>
    
</head>
    
<body>
<a id="Tilbake" href="index.html">Tilbake</a>

<?php

$port = "3306";
$username = "root";
$password = "root";
$dbname = "barer";

// Create connection
$conn = new mysqli($port, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Id_Navn, Adresse, Pris FROM info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> Navn: ". $row["Id_Navn"]. " - Adresse: ". $row["Adresse"]. " - Pris:  " . $row["Pris"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  


</body>
</html>