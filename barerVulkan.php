<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="stylesheet.css" rel="stylesheet" type="text/css">
    <!--Link til googlefont 'Lato'-->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
<title>Barer Vulkan</title>

    <?php
    /* Kobler til database*/
    require 'connect.php';
    
    /* Henter spørringer ut fra barerVulk databasen */
$statement = $connection->prepare('SELECT * FROM barerVulk');
    
$statement->execute();
$barer = [];
    
    
    
while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $barer[] = $row;
}
    
?>

</head>

<body>
    <div class="Ramme">
<!--Bildebakgrunn med blur-->
   <img class="barSlideshow" src="Bilder/Slideshow/Westerdals.jpg">
    
    
   <img class="barSlideshow" src="Bilder/Slideshow/Fasade-fra-gaten.jpg">
    
   <img class="barSlideshow" src="Bilder/Slideshow/Brenneriveien-9-4.jpg">
    
   <img class="barSlideshow" src="Bilder/Slideshow/N4A2428-800x600.jpg">
   

    
<div class="background"> 
     <div class="HeadBakgrunn"> <!--Titel-->
        <h2 class="Menytekst">Barer ved Vulkan</h2>
     </div>
            <!--Henter ut oppsett av barer -->
            <?php require 'barOppsett.php'; ?>
    
    <!--JavaScript -->
<script>
    //Javascript til bildebakgrunn
    var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("barSlideshow");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    
    slideIndex++;
    
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 3000); // Bytter bilde hvert 3 sekund
}  
      //Javascript til pop-up av barene
      function ShowModal(id) {
            var modal =document.getElementById(id);
            modal.style.display = "block";
          
          
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
    }
  }
}       
    
        
        
       
    
</script>
</div>  
    <!--Logo med link til forsiden-->
    <a  href="index.php">
     <img class="logo" src="Bilder/Logoer/westerdals-logo1.png"></a>
    <p class="Hjem">Hjem</p>
    </div>
    
    <!--Php spørring for å hente in footer-->
    <div class="fooT">
    <?php require 'footer.php' ?>
    </div>
    
</body>
</html>
