<?php 

$filename = $_GET["filename"];
move_uploaded_file($_FILES['webcam']['tmp_name'], $filename);

header("HTTP/1.1 200 OK");

?>