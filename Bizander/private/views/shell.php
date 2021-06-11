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
    
    <form method="POST" name="productForm" action="../../private/models/emailProduct.php">
        <div id="input" class="input-wrapper shell">
            <p>Als u meer informatie zoals de prijs, bestellen of andere vragen heeft over deze tas. 
               Dan kunt u hieronder uw gegevens met uw vraag invullen en dan neemt de maker zo snel mogelijk contact met u op.</p>
                <input type="hidden" placeholder="Betreft..."  id="subject" name="subject" class="input input-name" value="<?php echo $project['naam'] ?>">
                <input type="text"   placeholder="Naam..."  id="name"    name="name"    class="input input-name">
                <input type="mail"   placeholder="Email..." id="email"   name="email"   class="input input-mail">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Bericht..." class="input input-text"></textarea>
                <input type="submit" name="send" value="Vraag Informatie aan" class="input-btn btn-informatie <?= $valid_class_name ?? ""?>">
        </div>
    </form>
</div>