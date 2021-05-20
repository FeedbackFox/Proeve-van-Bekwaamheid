<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2021-05-20
 * Time: 14:31
 */

class ContactController {

    function contactpage(){

        require __DIR__ . "/../includes/functions.php";
        require __DIR__ . "/../models/models.php";
        require __DIR__ . "/../views/header.php";
        require __DIR__ . "/../views/contactpage.php";
        require __DIR__ . "/../views/footer.php";

    }

}