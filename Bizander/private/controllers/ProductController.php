<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2021-05-18
 * Time: 14:31
 */

class ProductController {

    function productpage(){

        require __DIR__ . "/../includes/functions.php";
        require __DIR__ . "/../models/models.php";
        require __DIR__ . "/../views/header.php";
        require __DIR__ . "/../views/productpage.php";
        require __DIR__ . "/../views/footer.php";

    }

}