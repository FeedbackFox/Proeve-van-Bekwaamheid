    <div class="contact-wrapper">
        <div class="contact-title">
            <h1>Contact</h1>
        </div>
        <div class="address nl">
            <ul>
                <li><a href="mailto:info@bizander.nl">info@bizander.nl</a></li>
                <li>Larenseweg 76</li>
                <li>1222 HK, Hilversum NL</li>
            </ul>
        </div>
        <div class="address fr">
            <ul>
                <li><a href="mailto:info@bizander.fr">info@bizander.fr</a></li>
                <li>La Maison 58230</li>
                <li>Ouroux en Morvan FR</li>
            </ul>
        </div>
        <div class="content-space"></div>
        <?php 
            if($message_sent):
        ?>
        <h3>Bedankt voor uw bericht, u zult snel antwoord krijgen.</h3>
        <?php 
            else:
        ?>
        <div class="form">
            <h2>Neem contact op!</h2>
            <form method="POST" name="contactForm" action="../private/models/emailForm.php">
                <input type="text"  placeholder="Betreft" id="subject" name="subject">
                <input type="text"  placeholder="Naam"    id="name"    name="name">
                <input type="email" placeholder="E-mail"  id="email"   name="email">
                <textarea name="Bericht" id="bericht" cols="30" rows="10" placeholder="Bericht"></textarea>
                <input type="submit" name="send" value="Verzenden" class="send-btn <?= $valid_class_name ?? ""?>" >
            </form>
        </div>
        <?php
            endif;
        ?>
    </div>
</div>
<div class="image-wrapper">
    <div class="homepage-cover">
        <img class="cover-image" src="image/homepage-cover.jpg" alt="cover page">
    </div>
</div>