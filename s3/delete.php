<?php 
include "module.php";
$id=$_GET['id'];
//ou extract($_POST);
delete($id);
vers("index.php");

?>