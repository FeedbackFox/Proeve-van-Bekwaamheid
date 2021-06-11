<?php ?>
<div class="product-wrapper">
    <div class="input-wrapper">
        <h1 class="desktop">Portfolio</h1>
        <p class="desktop">Filter op</p>
        <select name="Maat" id="maat" class="input input-select">
            <option value="null" disabled selected class="option">Maat</option>
        </select>
        <select name="Kleur" id="kleur" class="input input-select">
            <option value="null" disabled selected class="option">Kleur</option>
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