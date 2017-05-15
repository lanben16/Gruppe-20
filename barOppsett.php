
    
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
        
        <ul class="barInfo">
            <li>Adresse: <?= $bar['Adresse'] ?></li>
            <li>Ølpris: <?= $bar['Pris'] ?> kr</li>
            <li>ID: <?= $bar['Aldersgrense'] ?> år</li>
            
        <?php if ($bar['Aapningstider_Mandag'] == NULL) { ?>
            <li>Åpningstider: STENGT</li>
            
        <?php } else  {?>
            
            <li>Åpningtid i dag: <?= $bar['Aapningstider_Mandag'] ?></li>
        </ul>
        
        <?php } ?> 
        
        
        </div>
    </div>
