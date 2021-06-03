<?php ?>
<div class="product-wrapper">
    <div class="input-wrapper">
        <h1 class="desktop">Portfolio</h1>
        <p class="desktop">Filter op</p>
        <select name="Maat" id="maat">
            <option value="Maat" disabled selected>Maat</option>
        </select>
        <select name="Kleur" id="kleur">
            <option value="Kleur" disabled selected>Kleur</option>
        </select>
        <div class="logo">
            <img src="image/Logo_Bizander_Witlinks.svg" alt="" class="img-responsive image img-logo">
        </div>
        
    </div>
    <div class="subwrapper">
        <div class="content-space"></div>
        <?php allProducts();?>
    </div>
</div>