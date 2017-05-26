<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="barer.css" rel="stylesheet" type="text/css">
    
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
<title>Barer Fjerdingen</title>

    <?php
    
    
    require 'vendor/autoload.php';
    
    require 'connect.php';
    
    use Carbon\Carbon;
    
    Carbon::setLocale('no');
    

    
$statement = $connection->prepare('SELECT * FROM barerFjerd');
    
$statement->execute();
$barer = [];
    
    
while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $row['Aapningstider_Mandag'] = new Carbon($row['Aapningstider_Mandag']);
    
    $barer[] = $row;
}
    
?>

</head>
<body>
    
     <div class="bakgrunn">
   <img class="slideshow" src="Westerdals.jpg">
    
    
   <img class="slideshow" src="12992738_10156864448095085_469207469_n-960x720.jpg">
    
   <img class="slideshow" src="Fasade-fra-gaten.jpg">
    
   <img class="slideshow" src="N4A1603-800x600.jpg">
</div>
    
<div class="background"> 
    
     <div class="HjemMeny">
        <h2 class="Menytekst">Barer ved Fjerdingen</h2>
     </div>
    
            <!--Php spørringer som lager barBilder-->
           
            <?php require 'barOppsett.php'; ?>
    
    
    <!--JavaScript -->
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
    setTimeout(carousel, 3000); // Change image every 3 seconds
}  
      
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
    <a  href="forside.php">
     <img class="logo" src="westerdals-logo1.png">
    </a>
    
    <!--Php spørring for å hente in footer-->
    <div class="fooT">
    <?php require 'footer.php' ?>
    </div>
</body>
</html>
