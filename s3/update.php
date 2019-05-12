<?php 
include "module.php";
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qte_stock=$_POST['qte_stock'];
$id=$_POST['id'];
//ou extract($_POST);
update($libelle,$prix,$qte_stock,$id);
vers("index.php");

?>