<?php

Class SQL
{
    static function query($query)
    {
        $servername = "localhost";
        $username = "bizander";
        $password = "12345";
        $dbname = "bizander";
        // Create connection
        $sql = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($sql->connect_error) 
        {
            die("Connection failed: " . $sql->connect_error);
        }
    
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
