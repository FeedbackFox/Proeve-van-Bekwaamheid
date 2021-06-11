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
        require __DIR__ . "/../models/productoverview.php";
        require __DIR__ . "/../views/header_4.php";
        require __DIR__ . "/../views/productpage.php";
        require __DIR__ . "/../views/footer.php";

    }

    function displayShell($shell){
        require __DIR__ . '/../models/productoverview.php';
        $project = shellProject($shell);
        include __DIR__ . '/../views/header_5.php';
        include __DIR__ . '/../views/shell.php';
        include __DIR__ . '/../views/footer-2.php';
    }
}
