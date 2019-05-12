<?php
require_once ("constantes.php"); 
function connecter_db(){
 $cnx=new PDO("mysql:host=".HOST.";dbname=".DBNAME,USER,PWD);   
return $cnx;
}

//ajout
function store($libelle,$prix,$qte_stock){
$cnx=connecter_db();
$rp=$cnx->prepare("insert into produit(libelle,prix,qte_stock) 
values(?,?,?)
");
$rp->execute(array($libelle,$prix,$qte_stock));

}
//modifier
function update($libelle,$prix,$qte_stock,$id){
    $cnx=connecter_db();
    $rp=$cnx->prepare("
    update produit set libelle=?, prix=? , qte_stock=? where id=?
    ");
    $rp->execute(array($libelle,$prix,$qte_stock,$id));
    

}
//supprimer
function delete($id){

    $cnx=connecter_db();

    $rp=$cnx->prepare(" delete from produit where id=?
    ");
    $rp->execute(array($id));
 
    
}
//toutes les ressources
function all($trash){
    $cnx=connecter_db();
    $rp=$cnx->prepare("select * from produit where trash=? order by id desc
    ");
    $rp->execute(array($trash));

  $resultat=  $rp->fetchAll();// tableau de produit (produit ausi est un tab associtatif et indexé)
    return $resultat;

}
//recuprer une ressource 
function find($id){
    $cnx=connecter_db();
    $rp=$cnx->prepare(" 
    select * from produit where id=?
    ");
    $rp->execute(array($id));
    return $rp->fetch();
}

function vers($url){
header("location:$url");
}


?>