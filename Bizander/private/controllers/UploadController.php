<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2021-05-18
 * Time: 18:55
 */

class UploadController {

    function uploadpage(){

        require __DIR__ . "/../includes/functions.php";
        require __DIR__ . "/../models/upload.php";
        require __DIR__ . "/../views/header_2.php";
        require __DIR__ . "/../views/upload.php";
        require __DIR__ . "/../views/footer.php";

    }
}
