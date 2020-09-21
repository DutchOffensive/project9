<?php
require_once "config.php";
$id= $_GET['id'];
$sql = "UPDATE `guests` SET `time_left`='' WHERE 'id_guests' = $id";
mysqli_query($link,$sql);

?>