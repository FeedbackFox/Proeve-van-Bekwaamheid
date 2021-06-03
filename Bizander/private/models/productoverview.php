<?php 

function allProducts()
{
    $pdo = dbConnect();
    $sql = "SELECT * FROM tassen ORDER BY id";

    $info = array();
    $stmt = $pdo->query($sql) or die ('Sorry ik kan deze Query niet opvragen');

    foreach ($stmt as $row):
        $info = $row;
        echo    "<div class='product-tas'>"
              . "<a href='product/" . $row['id'] . "'>"
              . "<section class='product__tas'>"
              . "<img src='image/" . $row['pic_name'] . "' alt='" . $row['pic_name'] . "' class='img-responsive image tas-image'>"
              . "<div class='product__tas--disc'>"
              . "<p class='product__tas--naam'>" . $row['naam'] . "</p>"
              . "</div>"
              . "</section>"
              . "</a>"
              . "</div>";
    endforeach;
}

function shellProject($shell) {
    include __DIR__ . '/../includes/functions.php';
    //    Connects to database
    $connection = dbConnect();
    //    Selects everything from my database from table protfolio-projects by using the row proj_id
    $sql = 'SELECT * FROM `tassen` WHERE id = :id';
    $stmt = $connection->prepare($sql);
    $stmt->execute(['id' => $shell]);
    if ($stmt->rowCount()) {
        $data = $stmt->fetch();
        //    Returns the content from the database
        return $data;
    }
}


?>