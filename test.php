
  
<!DOCTYPE html>

<html>

<head>
    


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="test.css">

    
<title>Westerdals new</title>
    
</head>
    
<body>
<a id="Tilbake" href="index.html">Tilbake</a>


<?php

$port = 3306;

$username = 'lanben16_gr20';

$password = 'Ntcrvy&6])8k';

$name = 'lanben16_Barer';

// Create connection
$connection = new PDO("mysql:host=tek.westerdals.no;dbname={$name};port={$port}", $username, $password);

$statement = $connection->prepare('SELECT * FROM barer');
$statement->execute();

$barer = [];

while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
	$barer[] = $row;
}


echo '<pre>';
print_r($barer);


die();

?>

</body>
</html>
