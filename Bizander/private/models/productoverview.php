<?php 

function allProducts()
{
    $pdo = dbConnect();
    $sql = "SELECT * FROM tassen ORDER BY id";

    $info = array();
    $stmt = $pdo->query($sql) or die ('Sorry ik kan deze Query niet opvragen');

    foreach (limit($stmt, 6) as $row):
        $info = $row;
        echo    "<a href='/tas'>"
              . "<section class='product__tas'>"
              . "<img src='images/" . $row['img'] . "' alt=''>"
              . "<div class='product__tas--disc'>"
              . "<p class='product__tas--naam'>" . $row['title'] . "</p>"
              . "</div>"
              . "</section>"
              . "</a>";
    endforeach;
}

?>