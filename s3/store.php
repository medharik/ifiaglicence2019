<?php 
include "module.php";
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qte_stock=$_POST['qte_stock'];
//ou extract($_POST);
store($libelle,$prix,$qte_stock);
vers("index.php");

?>