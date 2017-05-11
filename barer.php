
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link href="barer.css" rel="stylesheet" type="text/css">
<title>New HMTL document by NewJect</title>

    <?php
$port = 3306;
$username = 'lanben16_gr20';
$password = 'Ntcrvy&6])8k';
$name = 'lanben16_Barer';
// Create connection
$connection = new PDO("mysql:host=tek.westerdals.no;dbname={$name};port={$port}", $username, $password);
$statement = $connection->prepare('SELECT * FROM barerVulk');
$statement->execute();
$barer = [];
while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $barer[] = $row;
}
?>

</head>

<body>

<?php foreach ($barer as $bar) { ?>

<div class="barThumbnail">
        <img class="thumbnailImg" src="<?= $bar['Image_path'] ?>">
        <div class="thumbnailName">
            <p ><?= $bar['Id_Navn'] ?></p>
        </div>
</div>

<div class="modal">
    <div class="modalContent">
        <div class="barImg">
            <img  src="<?= $bar['Image_path'] ?>">
        </div>
        <div class="close">&times;</div>
        <div class="barName">
            <p><?= $bar['Id_Navn'] ?></p>
        </div>
        <ul class="barInfo">
            <li>Adresse:<?= $bar['Adresse'] ?></li>
            <li>Ølpris:<?= $bar['Pris'] ?></li>
            <li>ID:<?= $bar['Aldersgrense'] ?>år</li>
            <li>Åpningtider:<?= $bar['Aapningstider_Mandag'] ?></li>
        </ul>
    </div>
</div>
<?php } ?>
<script>
    
    var modal = document.getElementsByClassName("modal")[0];
    var btn= document.getElementsByClassName("barThumbnail")[0];
    var span = document.getElementsByClassName("close")[0];
    
    
    
    
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    
        console.log(document.getElementsByClassName("modal"))
    
        console.log(document.getElementsByClassName("barThumbnail"))
        
       
    
</script>
</body>
</html>
