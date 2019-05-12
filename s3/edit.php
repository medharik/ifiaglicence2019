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
    <title>Document</title>
    <?php include "_css.php";?>
</head>
<body>
<?php include "_menu.php";?>

<div class="container">
    <div class="row">
    <div class="col-md-6 mx-auto shadow">
   <form action="update.php" method="post">
   <div class="form-group">
        <label for="libelle">Libelle</label>
        <input autocomplete="off" type="text" value="<?=$produit['libelle']?>" name="libelle" id="libelle" class="form-control">
    </div>
    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="text" name="prix" value="<?=$produit['prix']?>" id="prix" class="form-control">
    </div>
    <div class="form-group">
        <label for="libelle">quantite en stock</label>
        <input type="text" value="<?=$produit['qte_stock']?>" name="qte_stock" id="qte_stock" class="form-control">
    </div>
<input type="hidden" name="id" value="<?=$produit['id']?>">
    
    <div class="form-group">
       
        <input type="submit" value="valider" class="btn btn-primary">
    </div>



   
   </form>
    </div>
    
    </div>
</div>




     <?php include "_js.php";?>
   </body>
</html>