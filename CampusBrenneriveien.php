<!DOCTYPE html>
<html>

<head>
    
<meta charset="utf-8"> 
    
<link type=text/css rel=stylesheet href="main.css">
    
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">



</head>
    
<body>
             
<div class="container">
    
<div class="textbox">
<h1>Campus Brenneriveien</h1>
<p> Langs Akerselva, ikke langt unna Vulkan finner du vårt minste Campus. Her holder maske- og hårdesign til, og deler av Avdeling for film, TV og spill. Her er det både green screen-rom, klipperom, grov – og finverksted. Om dagen kryr det av kunstneriske sjeler, og om kvelden er det et yrende natteliv.</p>
    
<p>Dette er nok campus som er nærmest uteliv og barer (selv om veien er kort uansett hvor du er) med Blå og Ingensteds som nærmeste naboer. Se full oversikt</p><a id="barBrenn" href="barerBrenneriveien.php">her.</a>


    </div>
    </div>

    
<div class="slideshow-container">
<div class="mySlides fade">
<div class="numbertext">1 / 4</div>
<img src="Bilder/FW_Brenneriveien_7-800x600.jpg" style="width:100%">
<div class="text">Brenneriveien ute</div>
</div>

<div class="mySlides fade">
<div class="numbertext">2 / 4</div>
<img src="Bilder/HG_brenneriveien1-800x600.jpg" style="width:100%">
<div class="text">Akerselven</div>
</div>

  <div class="mySlides fade">
 <div class="numbertext">3 / 4</div>
    <img src="Bilder/MH-brenneriveien-vulkan-oktober-5-800x600.jpg" style="width:100%">
    <div class="text">Kontoret</div>
  </div>

<div class="mySlides fade">
 <div class="numbertext">4 / 4</div>
    <img src="Bilder/MH-brenneriveien-vulkan-oktober-7-2-800x600.jpg" style="width:100%">
    <div class="text">Fremtiden</div>
  </div>


  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
    
<script> 
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>
    
<div class="svartbox">
    <p class="Campuser">Våre campuser:</p>

    <div class="menyFjerdingen">
    
    <a id="Fjerdingen" href="CampusFjerdingen.php">Fjerdingen</a>
    </div>
    
    <div class="menyVulkan">
    <a id="Vulkan" href="CampusVulkan.php">Vulkan</a>  
    </div>
    
    <div class="menyBrenneriveien">
    <a id="Brenneriveien" href="CampusBrenneriveien.php" style="color:gray;">Brenneriveien</a>
        </div>
</div>
    
<a  href="forside.php">
     <img class="logo" src="westerdals-logo1.png">
    </a>
    <p class="Hjem">Hjem</p>
    
    <!--Php spørring for å hente in footer-->
    <div class="fooT">
    <?php require 'footer.php' ?>
    </div>

    
    
</body>
    
    </html>
