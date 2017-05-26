 <div class="barBackground">
            <!--Php spørringer som lager barBilder-->
            <?php foreach ($barer as $bar) { ?>

 <div id="BarThumbnail" class="barThumbnail" onclick="ShowModal('modal-<?= $bar["Id_Navn"]?>')">
    
        <img class="thumbnailImg" src="<?= $bar['Image_path'] ?>">
    
        <div class="thumbnailName">
            <p ><?= $bar['Id_Navn'] ?></p>
        </div>
    
</div>

<div id="modal-<?=$bar["Id_Navn"];?>"class="modal">
    
    <div class="modalContent">
        <div class="barImg">
            <img  src="<?= $bar['Image_path'] ?>">
        </div>
        
        <div class="close" onclick="document.getElementById('modal-<?=$bar["Id_Navn"];?>').style.display='none'">&times;</div>
        
        <div class="barName">
            <p><?= $bar['Id_Navn'] ?></p>
        </div>
        
        
     <?php {
    
    $d=date("N"); // man (1) - sun (7)
    
    $apningstid = "";
    
   if ($d == 0)
        $apningstid = $bar['Aapningstider_Sondag'] ." - " .$bar['Stengetider_Sondag'];
    
    else if ($d == 1)
        $apningstid = $bar['Aapningstider_Mandag'] ." - " .$bar['Stengetider_Mandag'];
    
    else if ($d == 2)
        $apningstid = $bar['Aapningstider_Trisdag'] ." - " .$bar['Stengetider_Tirsdag'];
    
    else if ($d == 3)
        $apningstid = $bar['Aapningstider_Onsdag'] ." - " .$bar['Stengetider_Onsdag'];
    
    else if ($d == 4)
        $apningstid = $bar['Aapningstider_Torsdag'] ." - " .$bar['Stengetider_Torsdag'];
    
    else if ($d == 5)
        $apningstid = $bar['Aapningstider_Fredag'] ." - " .$bar['Stengetider_Fredag'];
    
    else if ($d == 6)
        $apningstid = $bar['Aapningstider_Lordag'] ." - " .$bar['Stengetider_Lordag'];
    } ?>
        
        
        
        <ul class="barInfo">
            <li>Adresse: <?= $bar['Adresse'] ?></li>
            <li>Ølpris: <?= $bar['Pris'] ?> kr</li>
            <li>ID: <?= $bar['Aldersgrense'] ?> år</li>
            <li>Åpningstid: <?= $apningstid ?></li>
            
            
        </ul>
    </div>
            </div>

    <?php } ?>
    </div>
