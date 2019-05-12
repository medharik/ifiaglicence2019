<?php 
include "module.php";
if(isset($_GET['id'])){
 $id=$_GET['id'];   
}else{
    $id=0;
}

if(isset($_GET['comment'])){
  $comment=$_GET['comment'];  
}else{
    $comment="soft";
}

//ou extract($_POST);
delete($id,$comment);
//delete($id,"hard");
vers("index.php");

?>