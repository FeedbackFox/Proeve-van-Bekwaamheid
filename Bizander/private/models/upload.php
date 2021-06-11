<?php

class SQL{
    function upload($query){
        $result = $sql->query($query);
            $sql->close();
            $resultArray = [];
            while($row = $result->fetch_row()) 
            {
                $resultArray[] = $row;
            }

            if (count($resultArray) > 0) 
            {
                return $resultArray;
            } 
            else 
            {
                return null;
            }
    }
}

function shellProject($shell) {
    include __DIR__ . '/../includes/functions.php';
    //    Connects to database
    $connection = dbConnect();
    //    Selects everything from my database from table portfolio-projects by using the row proj_id
    $sql = 'SELECT * FROM `tassen` WHERE id = :id';
    $stmt = $connection->prepare($sql);
    $stmt->execute(['id' => $shell]);
    if ($stmt->rowCount()) {
        $data = $stmt->fetch();
        //    Returns the content from the database
        return $data;
    }
}