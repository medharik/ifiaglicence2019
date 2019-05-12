<?php
include "module.php";
$produits=all('no');
//var_dump($produits);
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
    <table id="matable" class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libelle</th>
      <th scope="col">prix</th>
      <th scope="col">qte stock</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($produits as $p) {
  ?>
    <tr>
      <th scope="row"><?php echo $p['id']?></th>
      <td><?php echo $p['libelle']?></td>
      <td><?= $p['prix']?></td>
      <td><?= $p['qte_stock']?></td>
      <td>
      <a href="delete.php?id=<?php echo $p['id']?>"
        onclick="return confirm('supprimer?')"
       class="btn btn-sm btn-danger">Supprimer</a>
      <a href="edit.php?id=<?php echo $p['id']?>" class="btn btn-sm btn-warning">Modifier</a>
      <a href="show.php?id=<?php echo $p['id']?>" class="btn btn-sm btn-info">Consulter</a>
      </td>
    </tr>


    <?php } ?>
  </tbody>
</table>
    
</div>




     <?php include "_js.php";?>

<script>
$(document).ready( function () {
    $('table').DataTable( {
        language: {
        processing:     "Traitement en cours...",
        search:         "Rechercher&nbsp;:",
        lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
        info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable:     "Aucune donnée disponible dans le tableau",
        paginate: {
            first:      "Premier",
            previous:   "Pr&eacute;c&eacute;dent",
            next:       "Suivant",
            last:       "Dernier"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    }
});
} );
</script>

   </body>
</html>