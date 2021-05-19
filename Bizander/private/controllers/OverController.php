<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-06-26
 * Time: 14:31
 */

class OverController {

    function overpage(){

        require __DIR__ . "/../includes/functions.php";
        require __DIR__ . "/../models/models.php";
        require __DIR__ . "/../views/header_2.php";
        require __DIR__ . "/../views/overpage.php";
        require __DIR__ . "/../views/footer.php";

    }

}