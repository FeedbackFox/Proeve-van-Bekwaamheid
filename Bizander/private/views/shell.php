<?php ?>
<img class="shell__pic" src="../image/<?php echo $project['pic_name']?>" alt="Foto van <?php echo $project['naam']?>">
<div class="shellwrapper">
    <div class="subwrapper shell">
        <div class="shell">
            <h2 class="shell__titel"> <?php echo $project['naam'] ?></h2>
            <p class="shell__cat"> <?php echo $project['categorie'] ?></p>
            <button onclick="hideShow()" class="desc__hideShow"><h2 class="shell__desc--titel">Beschrijving <span>&#9660;</span></h2></button>
            <div id="desc" class="shell__desc">
                <p class="shell__desc--content"> <?php echo $project['descriptie'] ?></p>
            </div>
        </div>
    </div>
    
    <div id="input" class="input-wrapper shell">
        <p>Als u meer informatie zoals de prijs, bestellen of andere vragen heeft over deze tas. 
           Dan kunt u hieronder uw gegevens met uw vraag invullen en dan neemt de maker zo snel mogelijk contact met u op.</p>
        <input type="text" placeholder="Naam...">
        <input type="mail" placeholder="Email...">
        <textarea name="bericht" id="message" cols="30" rows="10" placeholder="Bericht..."></textarea>
        <input type="button" value="Vraag Informatie aan" class="btn-informatie">
    </div>
</div>