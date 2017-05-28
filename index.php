
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="stylesheet.css">
    <!--Link til google font 'Lato'-->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    
<title>Westerdals</title>
    
</head>
    
<body>
    


<!--Bildebakgrunn-->
   <img class="slideshow" src="Bilder/Slideshow/Westerdals.jpg">
    
    
   <img class="slideshow" src="Bilder/Slideshow/Fasade-fra-gaten.jpg">
    
   <img class="slideshow" src="Bilder/Slideshow/Brenneriveien-9-4.jpg">
    
   <img class="slideshow" src="Bilder/Slideshow/N4A2428-800x600.jpg">

    <!--Titel på siden -->
    <div class="titleBakgrunn">
    <h2 id="Westerdals">WestStudent</h2>
    <p id="ACT">Nettside for studenter ved WOACT</p>
    </div>
    
    <!--Meny over campuser -->
    <div class="HjemMeny"> </div>
    <div id="CampusMeny">
    <p id="Campuser">Se våre <br> campuser!</p>

    <div class="menyFjerdingen">
    
    <a id="CampFjerdingen" href="CampusFjerdingen.php">Fjerdingen</a>
    </div>
    
    <div class="menyVulkan">
    <a id="CampVulkan" href="CampusVulkan.php">Vulkan</a>  
    </div>
    
    <div class="menyBrenneriveien">
    <a id="CampBrenneriveien" href="CampusBrenneriveien.php">Brenneriveien</a>
    </div>
        </div>

    
    <!-- Javascript-->
    
    <script>
    
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slideshow");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 4000); // Bytter bilde hvert 4 sekund
}    
    
</script>
 
    <!--Logo i topp høyre hjørnet-->
<div>
<img class="logo" src="Bilder/Logoer/westerdals-logo1.png">
    </div>
    
    <!--Footer-->
<div class="fooT">
 <?php require 'footer.php' ?>
 </div>
    
</body>
</html>
