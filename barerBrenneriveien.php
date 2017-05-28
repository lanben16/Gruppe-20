<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
    
    
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<!--Link til google font-->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
<title>Barer Brenneriveien</title>

    <?php
    
    require 'connect.php';
    
    

    
$statement = $connection->prepare('SELECT * FROM barerBren');
    
$statement->execute();
$barer = [];
    
    
while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $barer[] = $row;
}
?>

</head>
<body>
      <div>
          
        <!--Bakgrunn-->
   <img class="barSlideshow" src="Bilder/Slideshow/Westerdals.jpg">
    
    
   <img class="barSlideshow" src="Bilder/Slideshow/Fasade-fra-gaten.jpg">
    
   <img class="barSlideshow" src="Bilder/Slideshow/Brenneriveien-9-4.jpg">
    
   <img class="barSlideshow" src="Bilder/Slideshow/N4A2428-800x600.jpg">



    
     <div class="HeadBakgrunn">
        <h2 class="Menytekst">Barer ved Brenneriveien</h2>
     </div>
    
            <!--Php spørringer som lager barBilder-->
            <?php require 'barOppsett.php'; ?>
          
        
 
  
    </div>  
    <!--JavaScript -->
<script>
    
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
    setTimeout(carousel, 3000); // Change image every 3 seconds
}    
      
      function ShowModal(id) {
            var modal = document.getElementById(id);
            modal.style.display = "block";
          
          
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
    }
  }
}       
    
        
       
    
</script>
    
    <!--Hjemknapp-->
    <a  href="index.php">
     <img class="logo" src="Bilder/Logoer/westerdals-logo1.png">
    </a>
    <p class="Hjem">Hjem</p>
    
    <!--Php spørring for å hente in footer-->
    <div class="fooT">
    <?php require 'footer.php' ?>
    </div>
</body>
</html>
