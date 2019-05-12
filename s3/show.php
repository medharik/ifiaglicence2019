<?php 
include "module.php";
$id=$_GET['id'];
$produit=find($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>consullter produit</title>
    <?php include "_css.php";?>
</head>
<body>
<?php include "_menu.php";?>

<div class="container">
    <div class="row">
    <div class="card mx-auto shadow text-center" style="width: 500px;">
  <img src="http://lorempixel.com/400/200/technics/<?= rand(1,10)?>/" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$produit['libelle']?></h5>
    <p class="card-text"><?=$produit['prix']?>DHS</p>
    <a href="#" class="btn"> <?=$produit['qte_stock']?> en stock</a>
    <br>
    <a href="#" onclick="history.go(-1)" class="btn btn-primary">Retour</a>
  </div>
</div>
    
    
    </div>
</div>




     <?php include "_js.php";?>
   </body>
</html>