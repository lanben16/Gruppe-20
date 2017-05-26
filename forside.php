
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="stylesheet.css">
    
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    
<title>Westerdals</title>
    
</head>
    
<body>
    


<div class="bakgrunn">
   <img class="slideshow" src="Westerdals.jpg">
    
    
   <img class="slideshow" src="12992738_10156864448095085_469207469_n-960x720.jpg">
    
   <img class="slideshow" src="Fasade-fra-gaten.jpg">
    
   <img class="slideshow" src="N4A1603-800x600.jpg">
</div>
    
    <div class="titleBakgrunn">
    <h2 id="Westerdals">WestStudent</h2>
    <p id="ACT">Nettside for studenter ved WOACT</p>
    </div>
    <div class="HjemMeny"> </div>
    <div id="CampusMeny">
    <p id="Campuser">Se våre <br> campuser!</p>

    <div class="menyFjerdingen">
    
    <a id="Fjerdingen" href="CampusFjerdingen.php">Fjerdingen</a>
    </div>
    
    <div class="menyVulkan">
    <a id="Vulkan" href="CampusVulkan.php">Vulkan</a>  
    </div>
    
    <div class="menyBrenneriveien">
    <a id="Brenneriveien" href="CampusBrenneriveien.php">Brenneriveien</a>
    </div>
        </div>

    
    
    
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
    setTimeout(carousel, 4000); // Change image every 4 seconds
}    
    
</script>
    
<div>
<img class="logo" src="westerdals-logo1.png">
    </div>
<div id="strek"></div>
    
<div class="fooT">
 <?php require 'footer.php' ?>
    
 </div>
</body>
</html>
