<!DOCTYPE html>
  
<html>

<head>
    
<meta charset="utf-8"> 
    
<link type=text/css rel=stylesheet href="stylesheet.css">
<!--Link til googlefont 'Lato'-->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">



</head>
    
<body>
    <!--Bildebakgrunn med blur-->
   <div class="CampusBakgrunn">
   <img class="CampusSlideshow" src="Bilder/Slideshow/Westerdals.jpg">
    
    
   <img class="CampusSlideshow" src="Bilder/Slideshow/Fasade-fra-gaten.jpg">
    
   <img class="CampusSlideshow" src="Bilder/Slideshow/Brenneriveien-9-4.jpg">
    
   <img class="CampusSlideshow" src="Bilder/Slideshow/N4A2428-800x600.jpg">
</div>  
         <!--Lager en container for teksten-->    
<div class="container">
    
<div class="textbox">
<h1>Campus Vulkan</h1>
<p> Et stort, svart bygg med gule vinduskarmer. Som ligger bare et kort steinkast unna Grunerløkka med sine mange fristelser.</p>
    
<p>Campus Vulkan huser både studenter fra skuespillerlinjen og studenter ved film, TV og spill. </p> 

<p>Studentene våre benytter seg av Kubaparken om sommeren, som ligger rett utenfor skolebygget vårt. På Grunerløkka er det mange små kafeer, restauranter og barer som tilbyr studentene mye kos og hygge, se full oversikt her. Bydelen er også et populært shoppingområde med mange ulike klesbutikker.
Det er også  i nærheten av noen av byens beste barer. Vi har samlet en oversikt over priser, aldersgrenser, og andre ting som kan være greit å vite om barer i nærheten. Se full oversikt</p><a id="barVulk" href="barerVulkan.php">her.</a>
                   <!--Linker til tillhørende bar i slutten av setningnen -->
    </div>
    </div>
    <!--Bilde container-->
<div class="slideshow-container">
<div class="mySlides fade">
<img src="Bilder/Vulkan/bachelorutstilling_2-800x600.jpg" style="width:100%">
<div class="text">Vulkan</div>
</div>

<div class="mySlides fade">
<img src="Bilder/Vulkan/HG_Bachelorutstilling02-1-800x600.jpg" style="width:100%">
<div class="text">Fellesområde</div>
</div>

  <div class="mySlides fade">
    <img src="Bilder/Vulkan/westerdals_bygning_01-1.jpg" style="width:100%">
    <div class="text">Kantine</div>
  </div>

<div class="mySlides fade">
    <img src="Bilder/Vulkan/%C3%85penDag_Vulkan_2016_7-800x600.jpg" style="width:100%">
    <div class="text">Møterom</div>
  </div>


  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

    <!-- Meny over campuser -->
    <div class="svartbox">
    <p class="Campuser">Våre campuser:</p>

    <div class="menyFjerdingen">
    
    <a id="Fjerdingen" href="CampusFjerdingen.php">Fjerdingen</a>
    </div>
        
        <div class="menyVulkan">
    <a id="Vulkan" href="CampusVulkan.php" style="color:gray;">Vulkan</a>  
    </div> <!-- Siden som brukeren er inne på blir markert med grå skrift -->
    
    <div class="menyBrenneriveien">
    <a id="Brenneriveien" href="CampusBrenneriveien.php">Brenneriveien</a>
        </div>
</div> 
    <!-- Logo med link til forsiden -->
    <a  href="forside.php">
     <img class="logo" src="Bilder/Logoer/westerdals-logo1.png">
    </a>
    <p class="Hjem">Hjem</p> 

    <!-- JavaScript-->
<script> 
    //Javascript til bildebakgrunn
    var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("CampusSlideshow");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    
    slideIndex++;
    
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 3000); // Bilde byttes hvert 3 sekund
}  
    //Javascipt til campusbildene
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
    
<!--Php spørring for å hente in footer-->
    <div class="fooT">
    <?php require 'footer.php' ?>
    </div>
    
</body>
    </html>
            
