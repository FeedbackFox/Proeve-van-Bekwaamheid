<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <?php 
    include '../tools/SQL.php';
    SQL::query('SELECT * FROM `bags`')
    ?>


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
    <script src="javascript/index.js"></script>
</body>

</html>