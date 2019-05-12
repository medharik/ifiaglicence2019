<?php 
include "module.php";
$id=$_GET['id'];
//ou extract($_POST);
restaurer($id);
//delete($id,"hard");
vers("trash.php");

?>