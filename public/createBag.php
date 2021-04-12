<?php 

include '..\Tools\log.php';



Log::norm('createBag.php', $_POST['name']);
Log::norm('createBag.php', $_POST['description']);
move_uploaded_file($_FILES['media']['tmp_name'], 'uploads/images/1.png');

?>