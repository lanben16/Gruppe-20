<!DOCTYPE html>

<html>

<head>
    
<meta charset="utf-8"> 
    
<link type=text/css rel=stylesheet href="stylesheet.css">
    <!--Link til googlefont 'Lato'-->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">



</head>
    
<body>
    <div class="RammeCampus">
    <!--Bildebakgrunn med blur-->

      <img class="CampusSlideshow" src="Bilder/Slideshow/Westerdals.jpg">
    
    
   <img class="CampusSlideshow" src="Bilder/Slideshow/Fasade-fra-gaten.jpg">
    
   <img class="CampusSlideshow" src="Bilder/Slideshow/Brenneriveien-9-4.jpg">
    
   <img class="CampusSlideshow" src="Bilder/Slideshow/N4A2428-800x600.jpg">

             <!--Container til teksten -->
<div class="container">

<div class="textbox">
<h1>Campus Fjerdingen</h1>
<p> Nær sentrum ligger Westerdals største campus. Her er det studenter fra ulike fagfelt. Både kunstfag, kommunikasjon, teknologi og ledelse holder til her. På Fjerdingen har vi både funksjonelle klasserom, studioer, spesialrom og øvingslokaler for musikkproduksjon, lys og lyddesign og programmering. </p> 
<br>
<p>Vi vet at studentlivet dreier seg om mer enn bare studier, og har selvfølgelig sørget for at bygget også er rustet for studentfester, utstillinger, konserter og andre typer arrangementer. Den aller nærmeste baren finner du på selve campus i første etasje: Sjenkestua. Det er også  i nærheten av noen av byens beste barer. Vi har samlet en oversikt over priser, aldersgrenser, og andre ting som kan være greit å vite om barer i nærheten. Se full oversikt her.
    <!-- Knapp med link til oversikt over barer-->
<a href="barerFjerdingen.php" class="button">Klikk her for oversikt over barer i nærheten</a></p>
    
    </div>
    </div>


    <!--campusbilde container -->
<div class="slideshow-container">
<div class="mySlides fade">
<img src="Bilder/Fjerdingen/N4A1603-800x600.jpg" style="width:100%">
<div class="text">Campus Fjerdingen</div>
</div>

<div class="mySlides fade">
<img src="Bilder/Fjerdingen/N4A2428-800x600.jpg" style="width:100%">
<div class="text">Lesekrok</div>
</div>

  <div class="mySlides fade">
    <img src="Bilder/Fjerdingen/O0A0694-800x600.jpg" style="width:100%">
    <div class="text">Fellesområde</div>
  </div>

<div class="mySlides fade">
    <img src="Bilder/Fjerdingen/O0A0857-800x600.jpg" style="width:100%">
    <div class="text">Kantine</div>
  </div>


  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- JavaScript-->    
<script> 
    //Javascipt til bildebakgrunn
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
    //Javascript til campusbilder
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
        <!-- Meny over campuser -->
    <div class="svartbox">
    <p class="Campuser">Våre campuser:</p>

    <div class="menyFjerdingen">
    
    <a id="Fjerdingen" href="CampusFjerdingen.php" style="color:gray;">Fjerdingen</a>
    </div> <!-- Siden som brukeren er inne på blir markert med grå skrift -->
    
    <div class="menyVulkan">
    <a id="Vulkan" href="CampusVulkan.php">Vulkan</a>  
    </div>
    
    <div class="menyBrenneriveien">
    <a id="Brenneriveien" href="CampusBrenneriveien.php">Brenneriveien</a>
        </div>
</div>
    <!--Logo med link tilbake til forsiden-->
<a  href="index.php">
     <img class="logo" src="Bilder/Logoer/westerdals-logo1.png">
<p class="Hjem">Hjem</p>
    </a>
    </div>
    
<!--Php spørring for å hente in footer-->
    <div class="fooT">
    <?php require 'footer.php' ?>
    </div>
    

    
</body>
</html>
        
        
