<!--Kobler opp header.php -->
<?php require 'header.php'; ?>



<body>
    
<div class="background"> 
    
     <div class="HjemMeny">
        <h2 class="Menytekst">Barer ved Vulkan</h2>
     </div>
            <div class="barBackground">
            <!--Php spørringer som lager barBilder-->
            <?php foreach ($barer as $bar) { ?>

            <?php require 'barOppsett.php'; ?>

            <?php } ?>
            </div>
    
    
    <!--JavaScript -->
<script>
      
      function ShowModal(id) {
            var modal =document.getElementById(id);
            modal.style.display = "block";
          
          
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
    }
  }
}       
    
        
    
        console.log(document.getElementsByClassName("modal"))
    
        console.log(document.getElementsByClassName("barThumbnail"))
        
       
    
</script>
</div>  
    <a  href="index.html">
     <img id="logo" src="westerdals-logo1.png">
    </a>
    
    <!--Php spørring for å hente in footer-->
    <div class="fooT">
    <?php require 'footer.php' ?>
    </div>
