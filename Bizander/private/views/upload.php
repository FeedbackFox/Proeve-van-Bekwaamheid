<?php SQL::query('SELECT * FROM `tassen`') ?>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


    <img src="uploads\images\1.png">

    <form action="../private/forms/createBag.php">
        <label for="name">Bag Name:</label>
        <input type="text" name="name" id="name">

        <label for="description">Description:</label>
        <input type="text" name="description" id="description">

        <label for="image">Image:</label>
        <input type="file" name="image" id="media">

    </form>
<button id="form_submit">submit</button>
<script src="script/script.js"></script>